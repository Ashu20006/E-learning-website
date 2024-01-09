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
.out{
min-height:1000px;
}

.figur{
 
   background-size:cover;

}
.box{
    border:10px solid gray;
    min-height:300px;
    border-bottom-left-radius:50px;
    border-top-right-radius:50px;
    background:pink;
}
ul li {
    color:pink;
    
}
.a{
    font-size:30px;
}
a{
    text-decoration:none;
}
.study{
    background:url('images/6.jpg');
    min-height:350px;
    background-size:cover;
    border-bottom-left-radius:60px;
    border-top-right-radius:60px;
}
.study1{
    background:url('images/20.jpg');
    min-height:350px;
    background-size:cover;
    border-bottom-left-radius:60px;
    border-top-right-radius:60px;
}
.study2{
    background:url('images/18.jpg');
    min-height:350px;
    background-size:cover;
    border-bottom-left-radius:60px;
    border-top-right-radius:60px;
}
.read{
   
    min-height:350px;
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
          <a class="nav-link active text-white mx-3" href="<?php echo base_url('index.php/project/gallery');?>">Gallery<i class="fa-brands fa-envira fs-4"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white mx-3" href="<?php echo base_url('index.php/project/about');?>">About Us <i class="fa-solid fa-eject"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white mx-3" href="<?php echo base_url('index.php/project/runner'); ?>">Login <i class="fa-solid fa-right-to-bracket"></i> </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white mx-3" href="<?php echo base_url('index.php/project/runner'); ?>">Logout <i class="fa-solid fa-right-from-bracket"></i></a>
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
</div></div> -->
<!--end-->
</div>
<div class="container out">
<h1>Reading</h1><br>
<div class="row">
    <div class="col-sm-8 figur">
    <!--slider-->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/8.jpg" class="d-block w-100" alt="..." height=460px style="border-bottom-right-radius:50px;">
      <div class="carousel-caption d-none d-md-block">
        <h5>Collage Study</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/2.jpg" class="d-block w-100" alt="..."height=460px style="border-bottom-right-radius:50px;">
      <div class="carousel-caption d-none d-md-block">
        <h5>Programming Langauge</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/15.jpg" class="d-block w-100" alt="..."height=460px style="border-bottom-right-radius:50px;">
      <div class="carousel-caption d-none d-md-block">
        <h5>Group Learning</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    <!--end-->
    </div>
    <div class="col-sm-1"></div>
    <div class="col-sm-3  box">
    <ul>
<li><a class="a"href="https://www.w3schools.com/java/default.asp">Java Programming</a></li>

<li><a  class="a"href="https://www.w3schools.com/php/default.asp">Php programming</a></li>
<li><a class="a" href="https://www.w3schools.com/c/index.php">C programming</a></li>
<li><a class="a"href="https://www.w3schools.com/c/index.php">C++ programming</a></li>
<li><a class="a"href="https://www.w3schools.com/python/default.asp">Python programming</a></li>
<li><a class="a"href="https://www.w3schools.com/js/default.asp">Javascript</a></li>
<li><a class="a"href="https://www.w3schools.com/bootstrap/bootstrap_ver.asp">Bootstrap</a></li>
<li><a class="a"href="https://www.w3schools.com/css/default.asp">CSS</a></li>
</ul>
    </div>

</div>

<!--study-->
<div class="row ">
    <h1 class="mt-5">Choose your langauage to practise your reading</h1>
    <div class="col-sm-5 mt-5 study"></div>

    <div class="col-sm-1"></div>
    <div class="col-sm-5 mt-5 read">
<h2>Java Programming</h2><br>
Java is a high-level, class-based, object-oriented programming language that is designed to have as few implementation dependencies as possible. It is a general-purpose programming language intended to let programmers write once, run anywhere (WORA),[17] meaning that compiled Java code can run on all platforms that support Java without the need to recompile.[18] Java applications are typically compiled to bytecode that can run on any Java virtual machine (JVM) regardless of the underlying computer architecture. 
The syntax of Java is similar to C and C++, but has fewer low-level facilities than either of them. The Java runtime provides dynamic capabilities (such as reflection and runtime code modification) that are typically not available in traditional compiled languages. As of 2019, Java was one of the most popular programming languages in use according to GitHub,[19][20] particularly for client–server web applications, with a reported 9 million developers.[21] 
</div>
    </div>

<!--end-->

<!--study-->
<div class="row mt-5">
    <div class="col-sm-5 mt-3 study1"></div>

    <div class="col-sm-1"></div>
    <div class="col-sm-5 read">
<h2>Python Programming</h2><br>
Python is a high-level, general-purpose programming language. Its design philosophy emphasizes code readability with the use of significant indentation.[33]

Python is dynamically-typed and garbage-collected. It supports multiple programming paradigms, including structured (particularly procedural), object-oriented and functional programming. It is often described as a "batteries included" language due to its comprehensive standard library.[34][35]

Guido van Rossum began working on Python in the late 1980s as a successor to the ABC programming language and first released it in 1991 as Python 0.9.0.[36] Python 2.0 was released in 2000 and introduced new features such as list comprehensions, cycle-detecting garbage collection, reference counting, and Unicode support. Python 3.0, released in 2008, was a major revision that is not completely backward-compatible with earlier versions. Python 2 was discontinued with version 2.7.18 in 2020.[37]
</div>
    </div>
<!--end-->

<!--study-->
<div class="row mt-5">
    <div class="col-sm-5 mt-3 study2"></div>

    <div class="col-sm-1"></div>
    <div class="col-sm-5 read">
<h2>Php Programming</h2><br>
PHP is an open-source server-side scripting language that many devs use for web development. It is also a general-purpose language that you can use to make lots of projects, including Graphical User Interfaces (GUIs).

In this article, I will help you explore the world of PHP so you can learn how it works and its basic features. By the end, you will be able to write your first Hello World program in PHP.

What Does PHP Mean?
The abbreviation PHP initially stood for Personal Homepage. But now it is a recursive acronym for Hypertext Preprocessor. (It's recursive in the sense that the first word itself is an abbreviation, so the full meaning doesn't follow the abbreviation.)

The first version of PHP was launched 26 years ago. Now it's on version 8, released in November 2020, but version 7 remains the most widely used.

PHP runs on the Zend engine, which is the most popular implementation. There are some other implementations as well, like parrot, HPVM (Hip Hop Virtual Machine), and Hip Hop, created by Facebook.


</div>
    </div>
</div>
<!--end-->
</div></div>
</div>
</body>
</html>