<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>ClothMap</title>
        <link rel="stylesheet" href="{{secure_asset('/assets/css/app.css')}}">
    </head>
    <body>
        <div class="tabs">
            <input id="home" type="radio" name="tab_item" checked>
            <label class="tab_item" for="home">Home</label>
            <input id="tops" type="radio" name="tab_item">
            <label class="tab_item" for="tops">トップス</label>
            <input id="bottoms" type="radio" name="tab_item">
            <label class="tab_item" for="bottoms">ボトムス</label>
            <input id="shoes" type="radio" name="tab_item">
            <label class="tab_item" for="shoes">シューズ</label>
            <input id="items" type="radio" name="tab_item">
            <label class="tab_item" for="items">アイテム</label>
            <input id="recommend" type="radio" name="tab_item">
            <label class="tab_item" for="recomend">おすすめ</label>
            <input id="post" type="radio" name="tab_item">
            <label class="tab_item" for="post">投稿</label>
            <div class="tab_content" id="home_content">
                <img src="https://p4.wallpaperbetter.com/wallpaper/70/897/270/ultrawide-snow-road-wallpaper-preview.jpg" alt="タイトル壁紙" class="title_image">
                    <div class="title1">
                        <p class="title2">ClothMap</p>
                        <a href="/posts/login"><p class="login">ログイン</p></a>
                    </div>
            </div>
            <div class="tab_content" id="tops_content">
                <div class="tab_content_description">
                    <p class="c-txtsp"></p>
                </div>
            </div>
            <div class="tab_content" id="bottoms_content">
                <div class="tab_content_description">
                    <p class="c-txtsp"></p>
                </div>
            </div>
            <div class="tab_content" id="shoes_content">
                <div class="tab_content_description">
                    <p class="c-txtsp"></p>
                </div>
            </div>
            <div class="tab_content" id="items_content">
                <div class="tab_content_description">
                    <p class="c-txtsp"></p>
                </div>
            </div>
             <div class="tab_content" id="recomend_content">
                <div class="tab_content_description">
                    <p class="c-txtsp"></p>
                </div>
            </div>
            <div class="tab_content" id="post_content">
                <form class="contact-form" action="//www-creators.com/rsc/receiver.php" method="post">
                    <p>商品情報の入力</p>
                    <div class="item">
                        <label class="label" for="birthday">購入日</label>
                        <input id="birthday" type="date" name="birthday">
                    </div>
                    <div class="item">
                        <label class="label" for="name" name="name">商品名</label>
                        <input id="name" type="text">
                    </div>
                    <div class="item">
                        <label class="label" for="url" name="url">URL</label>
                        <input id="url" type="url">
                    </div>
                    <div class="item">
                        <p class="label">サイズ</p>
                        <div class="radio-group">
                            <label>
                                <input type="radio" name="size">
                                SS
                            </label>
                            <label>
                                <input type="radio" name="size">
                                S
                            </label>
                            <label>
                                <input type="radio" name="size">
                                M
                                </label>
                            <label>
                                <input type="radio" name="size">
                                L
                                </label>
                            <label>
                                <input type="radio" name="size">
                                 LL
                            </label>
                        </div>
                    </div>
                    <div class="item">
                        <label class="label" for="color">カラー</label>
                        <input id="color" type="color" name="color">
                    </div>
                    <div class="item">
                        <label class="label" for="material">素材</label>
                        <input id="material" type="text" name="material">
                    </div>
                    <div class="item">
                        <label class="label" for="image" name="image">画像</label>
                        <input id="image" type="image">
                    </div>
                    <div class="item">
                        <label class="label" for="message">コメント</label>
                        <textarea rows="4" id="message" placeholder="コメント入力" name="comment"></textarea>
                    </div>
                    <div class="item no-label">
                        <input type="submit" value="投稿">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>