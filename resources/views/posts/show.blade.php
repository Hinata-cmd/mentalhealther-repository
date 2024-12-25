<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="content">
            <div class="content__post">
                <h3></h3>
                <p>{{ $post->body }}</p>    
            </div>
            <div>
                <img src="{{ $post->image_url }}" alt="画像が読み込めません">
            </div>
        </h1>
        <div class="footer">
            <a href="/">back</a>
        </div>
    </body>
</html>