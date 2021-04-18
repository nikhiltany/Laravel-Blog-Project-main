<!DOCTYPE html>

<?php $__env->startSection('content'); ?>
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

<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<tr>
<td><?php echo e($post->title); ?></td>

<?php
custom_echo($post->body, 100);

?>

<td><a href="/vposts/<?php echo e($post->id); ?>" style="text-decoration:none;">📝</a></td>
<td><a href="/editpost/<?php echo e($post->id); ?>" style='text-decoration:none;'>✒</a></td>
<td><a href="/deletepost/<?php echo e($post->id); ?>" style='text-decoration:none;'>🗑</a></td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>

</div>

<div class="col-md-2">
</div>
</div>
</div>
<?php $__env->stopSection(); ?>    
</body>
</html>
<?php echo $__env->make('sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\sandy\Desktop\Laravel-Blog-Project-main\resources\views/vposts.blade.php ENDPATH**/ ?>