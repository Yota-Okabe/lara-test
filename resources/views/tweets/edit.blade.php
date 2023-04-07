<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/tweets/{{ $tweet->id }}" method="post">
        @csrf
        @method('put')
        <input type="hidden" name="id" value="{{ $tweet->id }}">
        <input type="text" name="name" value="{{ $tweet->name }}">
        <input type="submit" value="保存">
    </form>
</body>
</html>