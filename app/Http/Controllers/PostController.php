<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Cloudinary;
use Carbon\Carbon;
use App\Models\User;

class PostController extends Controller
{
    public function index(Post $post, User $user, Request $request)
    {
        /* テーブルから全てのレコードを取得する */
        $query = User::query();

        /* キーワードから検索処理 */
        $keyword = $request->input('keyword');
        if(!empty($keyword)) {//$keyword　が空ではない場合、検索処理を実行します
            $query->where('name', 'LIKE', "%{$keyword}%");
            $users = $query->get();
        } else {
            $users = $user->get();
        }
        // dd($users);
        return view('posts.index')->with(['posts' => $post->getPaginateByLimit(5), 'users' => $users]);
    }

    public function show(Post $post)
    {
        return view('posts.show')->with(['post' => $post]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request, Post $post)
    {
        $datetime = Carbon::now();
        $input = $request['post'];
        if($request->file('image')){
            $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
            $input += ['image_url' => $image_url];
        }
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
}

