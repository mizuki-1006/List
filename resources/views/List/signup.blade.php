<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <title>Document</title>
</head>
<body>
    @include('List.signin_header')
    <main>
        <div class="container">
            <div class="container-top">
                <p>会員登録</p>
            </div>
            {{-- 後日記入 --}}
            <form action="">
                <dl class="container-form">
                    <dt>
                        <label>メールアドレス</label>
                    </dt>
                    <dd>
                        <input type="text">
                    </dd>
                    <dt>
                        <label>ユーザー名</label>
                    </dt>
                    <dd>
                        <input type="text">
                    </dd>
                    <dt>
                        <label>パスワード</label>
                    </dt>
                    <dd>
                        <input type="text">
                    </dd>
                    <dt>
                        <label>パスワード（確認）</label>
                    </dt>
                    <dd>
                        <input type="text">
                    </dd>
                    <dd class='btn'>
                        <button class="send-btn">送信</button>
                    </dd>
                </dl>
            </form>
        </div>
    </main>
</body>
</html>