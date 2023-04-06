<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/comments" method="post">
        @csrf
        <input type="text" name="text" id="">
        <input type="submit" value="コメント投稿">
    </form>
</body>
</html>