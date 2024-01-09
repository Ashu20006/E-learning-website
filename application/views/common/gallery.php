<html>
<head>
<base href="<?php echo base_url('assets/');?>" >
<link href="css/Bootstrap.css" rel="stylesheet">
<link href="css/all.css" rel="stylesheet">
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.bundle.js"></script>
<style>

.box{
    box-shadow:10px 15px 10px  black;
}


.outer{
   
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
.name{
  background:#7430f9;
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
          <a class="nav-link active text-white mx-3" aria-current="page" href="<?php echo base_url('index.php/project/home'); ?>">Home <i class="fa-solid fa-house text-white fs-5"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white mx-3" href="<?php echo base_url('index.php/project/gallery');?>">Gallery <i class="fa-brands fa-envira fs-4"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white mx-3" href="<?php echo base_url('index.php/project/about');?>">About Us <i class="fa-solid fa-eject"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white mx-3" href="<?php echo base_url('index.php/project/runner'); ?>">Login <i class="fa-solid fa-right-from-bracket"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white mx-3" href="<?php echo base_url('index.php/project/contact'); ?>"> Contact Us <i class="fa-solid fa-address-card"></i></a>
        </li>
       
      </ul>
    </div>
  </div>
</nav>
  <!-- end -->

<!--nav2-->
<!-- <div class="row">
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
</div> -->
<!--end-->
</div>


   <!--study-->
   <center><h1>Gallery</h1></center>
<div class="container-fluid bg-light">

<div class="row C mt-5">
          <div class="col-sm-4 ">
              <div class="card text-center mt-2" >
                  <img src="images/1.jpg" class="card-img-top A" alt="">
                  <div class="card-body">
            
                   

                 
                  </div>
                </div>
          </div>
          <div class="col-sm-4">
              <div class="card text-center mt-2" >
                  <img src="images/6.jpg" class="card-img-top A" alt="...">
                  <div class="card-body">
            
                    
                  </div>
                </div>
          </div>
          <div class="col-sm-4">
              <div class="card text-center mt-2">
                  <img src="images/12.jpg" class="card-img-top A" alt="...">
                  <div class="card-body">
                    
                   
                  </div>
                </div>
          </div>
</div>


<!--end--->

<!--study1-->
<div class="row mt-">
          <div class="col-sm-4">
              <div class="card text-center mt-2" >
                  <img src="images/3.jpg" class="card-img-top A" alt="...">
                  <div class="card-body">
                   
                   

                 
                  </div>
                </div>
          </div>
          <div class="col-sm-4">
              <div class="card text-center mt-2" >
                  <img src="images/5.jpg" class="card-img-top A" alt="...">
                  <div class="card-body">
                
                    
                  </div>
                </div>
          </div>
          <div class="col-sm-4">
              <div class="card text-center mt-2">
                  <img src="images/15.jpg" class="card-img-top A" alt="...">
                  <div class="card-body">
                   
                   
                  </div>
                </div>
          </div>
</div>


<!--end--->
<!--study1-->
<div class="row mt-">
          <div class="col-sm-4">
              <div class="card text-center mt-2" >
                  <img src="images/16.jpg" class="card-img-top A" alt="...">
                  <div class="card-body">
                   
                   

                 
                  </div>
                </div>
          </div>
          <div class="col-sm-4">
              <div class="card text-center mt-2" >
                  <img src="images/17.jpg" class="card-img-top A" alt="...">
                  <div class="card-body">
                
                    
                  </div>
                </div>
          </div>
          <div class="col-sm-4">
              <div class="card text-center mt-2">
                  <img src="images/18.jpg" class="card-img-top A" alt="...">
                  <div class="card-body">
                   
                   
                  </div>
                </div>
          </div>
</div>


<!--end--->
</div>

 <!--footer-->
 <div class="row mt-3">
        <div class="col-sm-12 P"></div>
    </div>
<div class="row">
    <div class="col-sm-12 footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 FP text-white">
        <i class="fa-solid fa-location-dot fs-2"></i>
        Maha Maya Polytechnic Of Information Technology,Balu Shasan Sant Kabir Nagar,Uttar Pardesh-272125
        <br><br>
        <i class="fa-solid fa-phone fs-3"></i> 8009110068,7007406326,7754081193<br><br>
        <i class="fa-solid fa-envelope fs-3"></i> &nbsp;ashutosh8009110068@gmail.com

</div>
<div class="col-sm-4 "></div>
<div class="col-sm-4 FP text-white">
<h3>About the company</h3><br>
Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock<br><br>
<a href="https://www.facebook.com/"><i class="fa-brands fa-square-facebook text-dark fs-2 bg-primary"></i></a>&nbsp;&nbsp;&nbsp;
<a href="https://www.instagram.com/"><i class="fa-brands fa-square-instagram  text-dark fs-2 bg-info"></i></a>&nbsp;&nbsp;&nbsp;
<a href="https://twitter.com/?lang=en-in"><i class="fa-brands fa-square-twitter text-dark fs-2 bg-primary"></a></i>&nbsp;&nbsp;&nbsp;
<a href="https://studio.youtube.com/channel/UCUVh62TUPp5idq7Gwq50T3w/videos/upload?filter=%5B%5D&sort=%7B%22columnType%22%3A%22date%22%2C%22sortOrder%22%3A%22DESCENDING%22%7D">
    <i class="fa-brands fa-square-youtube  fs-2 bg-danger"></i></a>
</div>
</div>
        </div>
    </div>
</div>

<div container-fluid name>
  <center>
<h5 class="name" style="color:black;">© 2023 E-learning | Developed by Ashutosh Gupta</h5>
</center>
</div>
<!--end-->
 </div>  

</body>
</html>






















































