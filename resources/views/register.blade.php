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
    @csrf
    <h1 class="f"><center>Sign Up</center></h1><br>
    
    <div class="input-group"><span class="input-group-addon">NAME</span>
    <input type="text" class="form-control" name="name" placeholder="Enter your username"/>
    </div><br/>
    
    @error('name')
       {{ $message }}
       @enderror
      

    <div class="input-group"><span class="input-group-addon">EMAIL</span>
    <input type="email" name="email" class="form-control" placeholder="Enter your email"/>
    </div><br/>
    @error('email')
       {{ $message }}
       @enderror
      
    <div class="input-group"><span class="input-group-addon">PASSWORD</span>
    <input type="password" name="password" class="form-control" placeholder="Enter your password">
    </div><br/>
    @error('password')
       {{ $message }}
       @enderror

    <div class="input-group"><span class="input-group-addon">PASSWORD</span>
    <input type="password" name="cpassword" class="form-control" placeholder="Enter your password">
    </div><br/>
    @error('cpassword')
       {{ $message }}
       @enderror

    <button type="submit" name="button" class="btn btn-block btn-info">REGISTER</button>    
    
    </form>
    </div>
    </div>
    <div class="col-md-3">
    </div>
    </div>
    </div>

</body>
</html>