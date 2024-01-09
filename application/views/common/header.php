<!DOCTYPE html>
<html lang="en">
<head>
<base href="<?php echo base_url('assets/'); ?>">
<link href="css/Bootstrap.css" rel="stylesheet">
<link href="css/all.css" rel="stylesheet">
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.bundle.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.outer{
    min-height:700px;
    background:#7430f9;
}
center{
    color:red;
    font-size:50px;
   text-align:center;
  // background:pink;
}
.navbar{
    background:#7430f9;
    
}
.navbar-nav{
    font-size:18px;
   margin-left:350px;
}
.nab{
    background:pink;
}
.img{
    background:url('images/16.jpg');
    background-size:cover;
    height:600px;
}
.R{
    background:rgba(0,0,0,.4);
    height:600px;
}
.T{
    height:200px;
    margin-top:200px;
    text-align:center;
}
.C{
 /* height:600px; */
    /* background:url('images/1.jpg'); */
   // background:pink;
}
.footer{
   background-image:linear-gradient(to bottom,blue,green,red,black,yellow);
    /* height:350px; */
   // background:green;
    
}
.FP{
    /* height:350px; */
}
.P{
    background-image:linear-gradient(to top,blue,yellow);
    height:50px;
}
.card{
   // margin-top:80px;
  border-bottom-right-radius:80px;
  border-top-left-radius:80px;
}
.A{
    border-top-left-radius:80px;
}
.P2{
  background:yellow;
  border-top-right-radius:50px;
  border-bottom-left-radius:80px;
}

</style>
 </head>
 <body>
<div class="container-fluid outer ">
    <!-- navbar -->
<nav class="navbar navbar-expand-lg ">
  <div class="container">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ">
        <li class="nav-item ">
          <a class="nav-link active text-white mx-3" aria-current="page" href="#">Home <i class="fa-solid fa-house text-white fs-5"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white mx-3" href="#">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white mx-3" href="#">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white mx-3" href="<?php echo base_url('index.php/project/runner'); ?>">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white mx-3" href="#"> Task</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
  <!-- end -->

<!--nav2-->
<div class="row">
    <div class="col-sm-12 nab">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-2 P1"></div>
        <div class="col-sm-8 P2">
 <center>STUDENT MANAGEMENT SYSTEM <i class="fa-solid fa-graduation-cap"></i></center>
</div>
<div class="col-sm-2 P3"></div>
</div>
  </div>
</div></div>
<!--end-->
</div>