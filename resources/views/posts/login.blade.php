<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>login</title>
        <link rel="stylesheet" href="{{secure_asset('/assets/css/app.css')}}">
    </head>
    <body>
        <form class="contact-form" action="//www-creators.com/rsc/receiver.php" method="post">
            <p>ログイン情報の入力</p>
            <div class="item">
                <label class="label" for="user">ID</label>
                <input id="user" type="text" name="user">
            </div>
            <div class="item">
                <label class="label" for="passward">pass</label>
                <input id="passward" type="passward" name="passward">
            </div>
            <div class="item no-label">
                <input type="submit" value="ログイン">
            </div>
            <div class="new_login">
                <a href="/posts/new_login">新規ログインはこちら</a>
                <a href="/"><p>Homeに戻る</p></a>
            </div>
        </form>
    </body>
</html>