<!DOCTYPE html>
<html>
<head>
<title></title>
<style>
.grid-container {
display: inline-grid;
grid-template-columns: auto auto auto;
}
.grid-item {
width:200px;
height: 100px;
border: 1px solid black;
margin: 10px 10px 60px 20px;
}
</style>
</head>
<body>
<h1>Manage Books</h1>
<div class="grid-container">
@foreach($books as $book)
<div class="grid-item">
<h2>Title: {{$book->title}}</h2>
<h3>Author: {{$book->author}}</h3>
<center><p style="text-align: center;">
	<form action="{{'books/'.$book->id}}" method="POST">
    @method('delete')
    @csrf
    <button type="submit" style="width: 80px;" >Delete</button>

</form>
<form action="/edit/{{$book->id}}" method="get" style="margin-top: 10px;margin-bottom: 20px;">
                    @csrf
                <button style="width: 80px;margin-bottom: 20px; ">Edit</button>
                </form>
</p></center>
</div>
@endforeach
</div>
</body>
</html>