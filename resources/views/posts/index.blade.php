<x-app-layout>
        <h1>Mentalhealther</h1>
        <h2>Posts</h2>
        <a href='/posts/create'>create posts</a>
        <div>
            <form action="{{ route('post.index') }}" method="GET">
                @csrf
                <input type="text" name="keyword">
                <input type="submit" value="検索">
            </form>
        </div>
        <div class="dropdown-item" href="{{ route('profile') }}">
            <a href="/profile">
                プロフィール編集
            </a>
        </div>
        <div class="table-responsive">
            <table class="table" style="width :1000px; max-width: 0 auto;">
                <tr class="table-info">
                    <th></th>
                    <th scope="col">ユーザー名</th>
                </tr>
                @foreach($users as $user)
                <tr>
                    <td><img style="width:80px;" src="{{ $user->image ? asset($user->image) : asset('/image/icon.png')  }}"></td>
                    <td>{{ $user->name }}</td>
                </tr>
                @endforeach
            </table>
        </div>
        <div class='posts'>
            @foreach($posts as $post)
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                        <div class='post'>
                            <p>
                                {{ $post->user->name }} 
                                @if ($post->user->type == 1)
                                    患者側
                                @else ($post->user->type == 0)
                                    サポーター側
                                @endif
                            </p>
                            <h3 class='body'>
                                <a href="/posts/{{ $post->id }}">{{ $post->body }}</a>
                            </h3>
                            <div>
                                <img src="{{ $post->image_url }}" alt="画像が読み込めません" width='300px'>
                            </div>
                            <p class='created_at'>{{ $post->created_at }}</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
</x-app-layout>