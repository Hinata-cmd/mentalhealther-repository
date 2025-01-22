<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Supporter;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $username = $request->input('username');
        return view('posts.index', compact('username'));
    }

    public function show()
    {
        return view('posts.profile');
    }

    public function profileUpdate()
    {
        return redirect()->route('articles.index')->with('msg_success', 'プロフィールの更新が完了しました。');
    }

    public function passwordUpdate()
    {
        return redirect()->route('articles.index')->with('msg_success', 'パスワードの更新が完了しました。');
    }
}
