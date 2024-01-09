<html>
<head>
<base href="<?php echo base_url('assets/');?>" >
<link href="css/Bootstrap.css" rel="stylesheet">
<link href="css/all.css" rel="stylesheet">
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.bundle.js"></script>
<style>
.A1{
    min-height:200px;
   
}
.A2{
    min-height:200px;
    background:url('images/A.gif');
    background-repeat:no-repeat;
}

.box{
    box-shadow:10px 15px 10px  black;
}


.outer{
   
    background:#7430f9;
}
center{
    color:blue;
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
</div></div> -->
<!--end-->
</div>





 <div class="container">
<center><h1>About Of Programming Langauges !</h1></center>
 <hr color="yellow">
 <div class="row mt-5">
    <div class="col-sm-7 A1">
<h5>A programming language is a system of notation for writing computer programs.[1] Most programming languages are text-based formal languages, but they may also be graphical. They are a kind of computer language.

The description of a programming language is usually split into the two components of syntax (form) and semantics (meaning), which are usually defined by a formal language. Some languages are defined by a specification document (for example, the C programming language is specified by an ISO Standard) while other languages (such as Perl) have a dominant implementation that is treated as a reference. Some languages have both, with the basic language defined by a standard and extensions taken from the dominant implementation being common.

Programming language theory is a subfield of computer science that deals with the design, implementation, analysis, characterization, and classification of programming languages.</h5>
    </div>
    <div class="col-sm-1"></div>
    <div class="col-sm-4 A2"></div>
 </div>
 <div class="row mt-5">
    <div class="col-sm-12">
    There are many considerations when defining what constitutes a programming language.

Computer languages vs programming languages
The term computer language is sometimes used interchangeably with programming language.[2] However, the usage of both terms varies among authors, including the exact scope of each. One usage describes programming languages as a subset of computer languages.[3] Similarly, languages used in computing that have a different goal than expressing computer programs are generically designated computer languages. For instance, markup languages are sometimes referred to as computer languages to emphasize that they are not meant to be used for programming.[4] One way of classifying computer languages is by the computations they are capable of expressing, as described by the theory of computation. The majority of practical programming languages are Turing complete,[5] and all Turing complete languages can implement the same set of algorithms. ANSI/ISO SQL-92 and Charity are examples of languages that are not Turing complete, yet are often called programming languages.[6][7] However, some authors restrict the term "programming language" to Turing complete languages.[1][8]

Another usage regards programming languages as theoretical constructs for programming abstract machines and computer languages as the subset thereof that runs on physical computers, which have finite hardware resources.[9] John C. Reynolds emphasizes that formal specification languages are just as much programming languages as are the languages intended for execution. He also argues that textual and even graphical input formats that affect the behavior of a computer are programming languages, despite the fact they are commonly not Turing-complete, and remarks that ignorance of programming language concepts is the reason for many flaws in input formats.[10]

Domain and target
In most practical contexts, a programming language involves a computer; consequently, programming languages are usually defined and studied this way.[11] Programming languages differ from natural languages in that natural languages are only used for interaction between people, while programming languages also allow humans to communicate instructions to machines.

The domain of the language is also worth consideration. Markup languages like XML, HTML, or troff, which define structured data, are not usually considered programming languages.[12][13][14] Programming languages may, however, share the syntax with markup languages if computational semantics is defined. XSLT, for example, is a Turing complete language entirely using XML syntax.[15][16][17] Moreover, LaTeX, which is mostly used for structuring documents, also contains a Turing complete subset.[18][19]

Abstractions
Programming languages usually contain abstractions for defining and manipulating data structures or controlling the flow of execution. The practical necessity that a programming language support adequate abstractions is expressed by the abstraction principle.[20] This principle is sometimes formulated as a recommendation to the programmer to make proper use of such abstractions.[21]
    </div>
 </div>
 </div> </div> 
 
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
</div></div>


</body>
</html>




