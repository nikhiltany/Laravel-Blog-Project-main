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
<h1 style="font-family:Algerian Regular"><center>ADD YOUR POST</center></h1>
<form action="addpost" method="post">
<?php echo csrf_field(); ?>
<div class="input-group"><span class="input-group-addon">TITLE</span>
<input type="text" name="title" placeholder="Enter Title" class="form-control"/></div><br>

<div class="input-group"><span class="input-group-addon">DESCRIPTION</span>
<textarea name="body" rows="20" cols="100"  placeholder="Enter Description" class="form-control"/></textarea></div><br>

<button name="btn" class="btn btn-block btn-warning" type="submit">ADD</button>
</form>
</div>
<div class="col-md-3">
</div>
</div>

<?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Gurjeet Singh\Desktop\Laravel_projects\blogger_project\resources\views/addposts.blade.php ENDPATH**/ ?>