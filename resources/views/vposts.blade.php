<!DOCTYPE html>
@extends('sidebar')
@section('content')
<body>
<div class="container">
<div class="row">
<div class="col-md-1">
</div>
<div class="col-md-9">

<h1 style="font-family:Algerian Regular;color:#845460; margin-top:80px; background-color:#bdc7c9; padding:10px 10px 10px 10px;"><center>VIEW YOUR POSTS</center></h1>
<table   class="table table-responsive table-striped " >

<tr>
<th>Title&nbsp;</th>


<th>Description&nbsp;</th>
<th>Detail&nbsp;</th>
<th>Edit&nbsp;</th>
<th>Del&nbsp;</th>
</tr>
<?php 
function custom_echo($x, $length)
{
  if(strlen($x)<=$length)
  {
    echo "<td>$x</td>";
  }
  else
  {
    $y=substr($x,0,$length) . '...';
    echo "<td>$y</td>";
  }
}
?>

@foreach($posts as $post)

<tr>
<td>{{$post->title}}</td>

<?php
custom_echo($post->body, 100);

?>

<td><a href="/vposts/{{$post->id}}" style="text-decoration:none;">📝</a></td>
<td><a href="/editpost/{{$post->id}}" style='text-decoration:none;'>✒</a></td>
<td><a href="/deletepost/{{$post->id}}" style='text-decoration:none;'>🗑</a></td>
</tr>
@endforeach

</table>

</div>

<div class="col-md-2">
</div>
</div>
</div>
@stop    
</body>
</html>