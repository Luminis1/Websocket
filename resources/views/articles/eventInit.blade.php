<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


</head>
<body>
<div id="app"></div>

<form action="/event" enctype="multipart/form-data" method="post">
<label>name</label>
<br>
    <input type="text" name="name">

<br>
<br>
<label>autor</label>
<br>
    <input type="text" name="author">
<br>
<br>
<label>title</label>
<br>
    <input type="text" name="title">
<br>
<br>
<label>img</label>
<br>
    <input type="file" name="img">
<br>
<br>
    <input type="submit">

    {{ csrf_field() }}
</form>

<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.1.1/socket.io.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script>




</script>
</body>