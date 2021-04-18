<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
    .f{
        color:orange;
        font-family:Algerian Regular;
    }
    </style>
    <link href="/bootstrap/bootstrap.min.css" rel="stylesheet"/>
    <title>Blogger</title>
</head>
<body>
    <div class="container">
    <div class="row">
    <div class="col-md-3">
    </div>
    <div class="col-md-6">
    <div class="jumbotron">
    <form action="registeruser" method="post">    
    <?php echo csrf_field(); ?>
    <h1 class="f"><center>Sign Up</center></h1><br>
    
    <div class="input-group"><span class="input-group-addon">NAME</span>
    <input type="text" class="form-control" name="name" placeholder="Enter your username"/>
    </div><br/>
    
    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
       <?php echo e($message); ?>

       <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
      

    <div class="input-group"><span class="input-group-addon">EMAIL</span>
    <input type="email" name="email" class="form-control" placeholder="Enter your email"/>
    </div><br/>
    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
       <?php echo e($message); ?>

       <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
      
    <div class="input-group"><span class="input-group-addon">PASSWORD</span>
    <input type="password" name="password" class="form-control" placeholder="Enter your password">
    </div><br/>
    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
       <?php echo e($message); ?>

       <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

    <div class="input-group"><span class="input-group-addon">PASSWORD</span>
    <input type="password" name="cpassword" class="form-control" placeholder="Enter your password">
    </div><br/>
    <?php $__errorArgs = ['cpassword'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
       <?php echo e($message); ?>

       <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

    <button type="submit" name="button" class="btn btn-block btn-info">REGISTER</button>    
    
    </form>
    </div>
    </div>
    <div class="col-md-3">
    </div>
    </div>
    </div>

</body>
</html><?php /**PATH C:\Users\sandy\Desktop\Laravel-Blog-Project-main\resources\views/register.blade.php ENDPATH**/ ?>