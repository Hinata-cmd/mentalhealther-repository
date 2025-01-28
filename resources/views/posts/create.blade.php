<x-app-layout>
        <h1>Blog</h1>
        <form action="/posts" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="user">
                <input type="hidden" name="post[user_id]" value="{{ Auth::user()->id }}"/>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="post[body]" placeholder="insert message..."></textarea>
            </div>
            <div class="image">
                <h2>Photo</h2>
                <input type="file" name="image"/>
            </div>
            <input type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/">Back</a>
        </div>
</x-app-layout>