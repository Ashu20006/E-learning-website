<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <base href="<?php echo base_url('assets/');?>" >
    <link href="css/Bootstrap.css" rel="stylesheet">
<link href="css/all.css" rel="stylesheet">
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.bundle.js"></script>
<style>
  .h{
 min-height:50px;
  }
</style>
</head>
<body>
<!-- header -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid h bg-primary">
   
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ">
        <li class="nav-item ">
          <a class="nav-link active text-white mx-3" aria-current="page" href="#">Home <i class="fa-solid fa-house text-white fs-5 ps-5"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white mx-3" href="<?php echo base_url('index.php/project/gallery'); ?>">Gallery<i class="fa-brands fa-envira fs-4"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white mx-3" href="<?php echo base_url('index.php/project/about'); ?>">About Us <i class="fa-solid fa-eject"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white mx-3" href="<?php echo base_url('index.php/project/runner'); ?>">Login <i class="fa-solid fa-right-from-bracket"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white mx-3" href="<?php echo base_url('index.php/project/contact'); ?>"> Contact <i class="fa-solid fa-address-card"></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- header -->
</body>
</html>




