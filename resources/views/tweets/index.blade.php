<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>初めてのLaravel</title>
</head>
<body>
    @foreach($tweets as $tweet)
        <p>{{ $tweet->id }}</p>
        <p>{{ $tweet->name }}</p>
        <form action="/tweets/{{ $tweet->id }}" method="get">
            {{-- <input type="hidden" value="{{ $tweet->id }}" name="id"> --}}
            <input type="submit" value="詳細">
        </form>
        
        <form action="/tweets/{{ $tweet->id }}" method="post">
            {{-- <input type="hidden" value="{{ $tweet->id }}" name="id"> --}}
            @csrf
            @method('delete')
            <input type="submit" value="削除">
        </form>

        <form action="/tweets/{{ $tweet->id }}/edit" method="get">
            {{-- <input type="hidden" value="{{ $tweet->id }}" name="id"> --}}
            <input type="submit" value="編集">
        </form>
        <hr>
    @endforeach
</body>
</html>