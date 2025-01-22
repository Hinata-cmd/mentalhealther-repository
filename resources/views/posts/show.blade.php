<x-app-layout>
    <style>
        .liked {
            color: orangered;
            transition: 0.2s;
        }
        .flexbox {
            align-items: center;
            display: flex;
        }
        .count-num {
            font-size: 20px;
            margin-left: 10px;
        }
        .fa-heart {
            font-size: 30px;
        }
    </style>
        <div class="body flex justify-center">
            <div class="body__post">
                <p>{{ $post->body }}</p>    
            </div>
            @auth
                @if($post->isLikedByAuthUser())
                    <div class="flexbox">
                        <i class="fa-solid fa-heart like-btn liked" id={{$post->id}}></i>
                        <p class="count-num">{{$post->likes->count()}}</p>
                    </div>
                @else
                    <div>
                        <i class="fa-solid fa-heart like-btn" id={{$post->id}}></i>
                        <p class="count-num">{{$post->likes->count()}}</p>
                    </div>
                @endif
            @endauth

            @guest
                <p>loginしていません</p>
            @endguest

            <div>
                <img src="{{ $post->image_url }}" alt="画像が読み込めません">
            </div>
    </div>
        <div class="footer">
            <a href="/">back</a>
        </div>
        <script>
            const likeBtn = document.querySelector(".like-btn");
            likeBtn.addEventListener("click", async (e) => {
                const clickedEl = e.target;
                clickedEl.classList.toggle("liked");
                const postId = e.target.id;
                console.log(postId);
                const res = await fetch('/post/like',{
                //リクエストメソッドはPOST
                method: 'POST',
                headers: {
                    //Content-Typeでサーバーに送るデータの種類を伝える。今回はapplication/json
                    'Content-Type': 'application/json',
                    //csrfトークンを付与
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                //バックエンドにいいねをした記事のidを送信します。
                body: JSON.stringify({ post_id: postId })
            })
            .then((res)=>res.json())
            .then((data)=>{
                //記事のいいね数がバックエンドからlikesCountという変数に格納されて送信されるため、それを受け取りビューに反映します。
                clickedEl.nextElementSibling.innerHTML = data.likesCount;
            })
                    .catch(() =>
                        alert(
                            "処理が失敗しました。画面を再読み込みし、通信環境の良い場所で再度お試しください。"
                        )
                    );
            });
        </script>
</x-app-layout>