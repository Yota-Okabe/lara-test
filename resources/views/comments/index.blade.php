<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>初めてのLaravel</title>
</head>
<body>
    @foreach($comments as $comment)
        <p>{{ $comment->id }}</p>
        <p>{{ $comment->text }}</p>
        <hr>
    @endforeach
</body>
</html>