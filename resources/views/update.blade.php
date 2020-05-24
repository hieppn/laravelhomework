<!DOCTYPE html>
<html>
<head>
<title>Book | Edit</title>
</head>
<body>
<form action="/update" method="get">
            @csrf
            @foreach ($books as $book)
            <p>Title</p>
        <input name="title" value="{{$book->title}}" type="text">
            <p>Author</p>
            <input name="author" value="{{$book->author}}" type="text">
            <input type="hidden" name="id" value="{{$book->id}}">
            <button style="background: yellow;">Update</button>
            @endforeach
        </form>
</body>
</html>