<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
    .f{
        color:magenta;
        font-family:Algerian Regular;
    }
    .ff{
        font-family:Arial Black;
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
    <form action="loginuser" method="post">    
    <?php echo csrf_field(); ?>
    <h1 class="f"><center>SIGN IN</center></h1><br>
    
    <div class="input-group"><span class="input-group-addon">👨🏼‍⚖️</span>
    <input type="name" class="form-control" name="name" placeholder="Enter Your Username"/>
    </div><br>

    <div class="input-group"><span class="input-group-addon">🔑</span>
    <input type="password" name="password" class="form-control" placeholder="Enter Your Password"/>
    </div><br>
    
    <button type="submit" name="btn" class="btn btn-block btn-primary ">LOGIN</button><br/>
    
    </form>
    


     
    </div>
    </div>
    <div class="col-md-3">
    </div>
    </div>
    </div>

</body>
</html><?php /**PATH C:\Users\Gurjeet Singh\Desktop\Laravel_projects\blogger_project\resources\views/login.blade.php ENDPATH**/ ?>