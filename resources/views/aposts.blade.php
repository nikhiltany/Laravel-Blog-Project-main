<!DOCTYPE html>
@extends('sidebar')
@section('content')
<head>
<link href="/bootstrap/bootstrap.min.css" rel="stylesheet">
</head>
<div class="row">
<div class="col-md-3">
</div>
<div class="col-md-6">
<div class="jumbotron">
<h1 style="font-family:Algerian Regular;color:orange"><center>ADD YOUR POST</center></h1>
<form action="addposts" method="post">
@csrf
<div class="input-group"><span class="input-group-addon">TITLE</span>
<input type="text" name="title" placeholder="Enter Title" class="form-control"/></div><br>
@error('title')
{{ $message }}
@enderror

<div class="input-group"><span class="input-group-addon">DESCRIPTION</span>
<textarea name="body" rows="20" cols="100"  placeholder="Enter Description" class="form-control"/></textarea></div><br>
@error('body')
{{ $message }}
@enderror

<button name="btn" class="btn btn-block btn-warning" type="submit">ADD</button>
</form>
</div>
</div>
<div class="col-md-3">
</div>
</div>

@stop
</body>
</html>