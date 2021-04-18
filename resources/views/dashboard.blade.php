<!DOCTYPE html>
@extends('sidebar')
@section('content')

<style>
    .l{
       height:300px; width:600px; float:left; background-color:#413c69; padding:90px 20px 20px 20px; color:#f9f3f3; margin-left:100px;
       display:flex; 
    }
    .r{
        height:300px; width:600px;  float:right; background-color:#413c69; padding:20px 20px 20px 20px; color:#f9f3f3; margin-right:400px;
        display:flex; 
    }
    
    .li{
        height:300px; width:600px; float:left; background-color:#822659; padding:90px 20px 20px 20px; color:#f9f3f3; margin-left:100px;
        margin-top:30px; 

    }

    .ri{
        height:300px; width:600px;  float:right; background-color:#822659; padding:20px 20px 20px 20px; color:#f9f3f3; margin-right:400px;
        margin-top:30px; 
    }

    </style>
</head>
<body>
<div class="row">
<div class="col-md-1">
</div>
<div class="col-md-11">
<div  style="height:100px; width:1280px; margin-left:90px; margin-top:10px; margin-bottom:20px; color:#f875aa;  padding:20px 20px 20px 20px; background-color:#f4f9f9; float=left">
    <h1 style='font-family:Berlin Sans FB'><center>WELCOME {{session('user')}}</center></h1></div>

    <div class="l" style='font-family:Berlin Sans FB'>
    <h1>Ready For Creating Awesome Blogs!</h1>
    </div>
    <div class="r" style='font-family:Berlin Sans FB'>
    <h1>Today's Tip</h1><br>
    <ul>
    <li><h5>Write in Simple Words,as it enhances meaning of sentence.</h5></li>
    <li><h5>Use good vocabulary to get the reader's Attention.</h5></li>
    <li><h5>Use Punctuation Marks for Each Sentence for making it gramtically correct.</h5></li>
    </ul>
    </div>

    <?php            
             
        echo "<div class='li'  style='font-family:Berlin Sans FB'><h1>Your have $count Posts</h1></div>";
             
        if($count==0)
        {
            echo "<div class='ri'  style='padding-top:90px; font-family:Berlin Sans FB;' ><h1>You can Go Add Posts.</h1></div>";
            
        }

         else if($count>0 && $count<3)
         {
             echo "<div class='ri' style='font-family:Berlin Sans FB'>";
             echo "<h1>Blogger Level: Rookie</h1><br>
             <h2>Do Posts More!</h1><br>";
             echo "<ul>
             <li><h5>Posting More will help you to create more.</h5></li>
             <li><h5>You will have increase of level if you posts more.</h5></li>
            
             </ul>
             </div>";
         }

         else if($count>=3 && $count<=9)
         {
            echo "<div class='ri' style='font-family:Berlin Sans FB'>";
            echo "<h1>Blogger Level: Intermediate</h1><br>
            <h2>Keep Posting...</h1><br>";
            echo "<ul>
            <li><h5>Posting More will help you to create more.</h5></li>
            <li><h5>You will have increase of level if you posts more.</h5></li>
           
            </ul>
            </div>";
         }
         else {
             echo "<div class='ri' style='padding-top:90px; font-family:Berlin Sans FB'><h1>You are an Advance Level of Blogger!</h1></div>";
         }
        
    ?>
    </div>
    </div>
    @stop
    </body>
    </html>