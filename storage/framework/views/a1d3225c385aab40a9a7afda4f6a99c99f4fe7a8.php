<!DOCTYPE html>

<html lang="en">
<?php echo $__env->yieldContent('content'); ?>
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
    /* The sidebar menu */
.sidenav {
  height: 100%; /* Full-height: remove this if you want "auto" height */
  width: 200px; /* Set the width of the sidebar */
  position: fixed; /* Fixed Sidebar (stay in place on scroll) */
  z-index: 1; /* Stay on top */
  top: 0; /* Stay at the top */
  left: 0;
  background-color: #e8ecef; /* Black */
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 20px;
}

/* The navigation menu links */
.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color:black;
  display: block;
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover {
  color: #818181;
  text-decoration: none;
}

/* On smaller screens, where height is less than 450px, change the style of the sidebar (less padding and a smaller font size) */
@media  screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
    </style>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <title>Blogger</title>
</head>
<body>

<div class="sidenav">
  <a href="home">Blogger</a>
   
  <hr size="5" color="#f9f3f3">
  <a href="/dashboard">Dashboard</a>
  <a href="/aposts">Add Posts</a>
  <a href="/vposts">View Posts</a>
  <!-- <a href="#">My Profile</a>
  <a href="#">Edit Profile</a> -->
  <a href="/logout">Log Out</a>
</div>
    
<?php /**PATH C:\Users\Gurjeet Singh\Desktop\Laravel_projects\blogger_project\resources\views/sidebar.blade.php ENDPATH**/ ?>