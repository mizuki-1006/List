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
    <header id="header">
        <div class="header-left">
            <p>ToDo App</p>
        </div>
        <div class="header-right">
            <a href="{{ route('signin')}}">ログイン</a>
            <a href="{{ route('signup')}}">会員登録</a>
        </div>
    </header>
</body>
</html>