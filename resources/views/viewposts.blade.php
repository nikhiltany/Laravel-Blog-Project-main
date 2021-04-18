<!DOCTYPE html>
@extends('sidebar')
@section('content')
<body>
<div class="container">
<div class="row">
<div class="col-md-1">
</div>
<div class="col-md-10">

<div style="background-color:#e3d18a; height:100%; width:100%; color:#85603f; margin-top:40px; padding:50px 50px 50px 50px">
@foreach($posts as $post)
    <h1 style="font-family:Blackadder ITC Regular"><center>{{$post->title}}</center></h1>
    <br>
    <br>

    <p style="font-family:Arial; font-size:25px; ">{{$post->body}}</p>     

   @endforeach
    </div>
     </div>
     </div>
     @stop
</body>
</html>
