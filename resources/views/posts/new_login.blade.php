<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>new_login</title>
        <link rel="stylesheet" href="{{secure_asset('/assets/css/app.css')}}">
    </head>
    <body>
        <form class="contact-form" action="//www-creators.com/rsc/receiver.php" method="post">
            <p>お客様の情報をご記載下さい。</p>
            <div class="item">
                <label class="label" for="name">名前</label>
                <input id="name" type="text" name="name">
            </div>
            <div class="item">
                <p class="label">性別</p>
                <div class="radio-group">
                    <label>
                        <input type="checkbox" name="gender">
                        男性
                        </label>
                    <label>
                        <input type="checkbox" name="gender">
                        女性
                    </label>
                    <label>
                        <input type="checkbox" name="gender">
                        その他
                    </label>
                </div>
            </div>
            <div class="item">
                <label class="label" for="tall">身長</label>
                <input id="tall" type="number" name="tall" placeholder="数値だけの入力">
            </div>
            <div class="item">
                <label class="label" for="e-mail">メール</label>
                <input id="e-mail" type="email" name="email">
            </div>
            <div class="item">
                <label class="label" for="user">ID</label>
                <input id="user" type="text" name="user">
            </div>
            <div class="item">
                <label class="label" for="passward">pass</label>
                <input id="passward" type="passward" name="passward">
            </div>
            <div class="item no-label">
                <input type="submit" value="新規ログイン">
                <a href="/"><p>Homeに戻る</p></a>
            </div>
        </form>
    </body>
</html>