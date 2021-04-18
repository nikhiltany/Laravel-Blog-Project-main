
<?php $__env->startSection('content'); ?>
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
        <?php echo csrf_field(); ?>
        <input type="hidden" name="id" value="<?php echo e($posts->id); ?>"><br>
        
        <div class="input-group"><span class="input-group-addon">TITLE</span>
        <input type="text" name="title" value="<?php echo e($posts->title); ?>" class="form-control"></div><br>

          <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <center><span style="color:red;"><?php echo e($message); ?></span></center>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          <br>

        <div class="input-group"><span class="input-group-addon">DESCRIPTION</span>
        <textarea name="body"  cols="100" rows="20" class="form-control"><?php echo e($posts->body); ?></textarea></div><br>

        <?php $__errorArgs = ['body'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <center><span style="color:red;"><?php echo e($message); ?></span></center>
          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          <br>

        <button class="btn btn-block btn-info" type="submit" name="btn">UPDATE</button><br>
    </form>
</div>
</div>
<div class="col-md-3">
</div>
</div>
</div>
<?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\sandy\Desktop\Laravel-Blog-Project-main\resources\views/editpost.blade.php ENDPATH**/ ?>