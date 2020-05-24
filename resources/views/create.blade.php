<!DOCTYPE html>
<html>
<head>
<title>Book</title>
</head>
<body>
<form method="post" action="/books">
@csrf
<h3>Create a new book</h3>
Title:<input type="text" name="title">
Author: <input type="text" name="author">
<button type="submit">Submit</button>
</form>
</body>
</html>