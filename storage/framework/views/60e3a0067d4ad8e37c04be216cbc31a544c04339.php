<!DOCTYPE html>

<?php $__env->startSection('content'); ?>
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
<?php echo csrf_field(); ?>
<div class="input-group"><span class="input-group-addon">TITLE</span>
<input type="text" name="title" placeholder="Enter Title" class="form-control"/></div><br>
<?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
<?php echo e($message); ?>

<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

<div class="input-group"><span class="input-group-addon">DESCRIPTION</span>
<textarea name="body" rows="20" cols="100"  placeholder="Enter Description" class="form-control"/></textarea></div><br>
<?php $__errorArgs = ['body'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
<?php echo e($message); ?>

<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

<button name="btn" class="btn btn-block btn-warning" type="submit">ADD</button>
</form>
</div>
</div>
<div class="col-md-3">
</div>
</div>

<?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Gurjeet Singh\Desktop\Laravel_projects\blogger_project\resources\views/aposts.blade.php ENDPATH**/ ?>