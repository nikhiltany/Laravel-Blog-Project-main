<!DOCTYPE html>

<?php $__env->startSection('content'); ?>
<body>
<div class="container">
<div class="row">
<div class="col-md-1">
</div>
<div class="col-md-10">

<div style="background-color:#e3d18a; height:100%; width:100%; color:#85603f; margin-top:40px; padding:50px 50px 50px 50px">
<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <h1 style="font-family:Blackadder ITC Regular"><center><?php echo e($post->title); ?></center></h1>
    <br>
    <br>

    <p style="font-family:Arial; font-size:25px; "><?php echo e($post->body); ?></p>     

   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
     </div>
     </div>
     <?php $__env->stopSection(); ?>
</body>
</html>

<?php echo $__env->make('sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Gurjeet Singh\Desktop\Laravel_projects\blogger_project\resources\views/viewposts.blade.php ENDPATH**/ ?>