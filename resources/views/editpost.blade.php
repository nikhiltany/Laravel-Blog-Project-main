@extends('sidebar')
@section('content')
<head>
<link href="/bootstrap/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
<div class="container-md">
<div class="row">
<div class="col-md-3">
</div>

<div class="col-md-6">
<div class="jumbotron">
    <h1 style="font-family:Algerian Regular;"><center>EDIT YOUR POST</center></h1><br>

    <form action="/updatepost" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$posts->id}}"><br>
        
        <div class="input-group"><span class="input-group-addon">TITLE</span>
        <input type="text" name="title" value="{{$posts->title}}" class="form-control"></div><br>

          @error('title')
          <center><span style="color:red;">{{ $message }}</span></center>
          @enderror
          <br>

        <div class="input-group"><span class="input-group-addon">DESCRIPTION</span>
        <textarea name="body"  cols="100" rows="20" class="form-control">{{$posts->body}}</textarea></div><br>

        @error('body')
          <center><span style="color:red;">{{ $message }}</span></center>
          @enderror
          <br>

        <button class="btn btn-block btn-info" type="submit" name="btn">UPDATE</button><br>
    </form>
</div>
</div>
<div class="col-md-3">
</div>
</div>
</div>
@stop
</body>
</html>