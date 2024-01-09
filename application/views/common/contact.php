<html>
<head>
<base href="<?php echo base_url('assets/'); ?>">
<link href="css/Bootstrap.css" rel="stylesheet">
<link href="css/all.css" rel="stylesheet">
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.bundle.js"></script>
<style>
.outer{
min-height:1000px;
}
.L{
	height:300px;
	//background:blue;
}
.M{
	height:250px;
	background:gray;
	margin-left:80px;
	text-align:center;
	
}
.B{
	height:400px;
	//background:pink;
}
.P{
	height:400px;
	//background:green;
	margin-left:70px;
	background-size:cover;
}
.H{
	//padding-right:20px;
}
</style>
</head>
<body>
<div class="container  outer">
<center>
<h1 style="padding-top:30px;">Contact Us</h1>

</center><br><br><div class="row">
<div class="col-sm-12 L">
<div class="row mx-5 my-2 ">
<div class="col-sm-3 M rounded-3 bg-light border border-2 "><i class="fa-solid fa-phone fs-1 text-warning"style="padding-top:70px;"><h6 class="fs-4 text-dark text-center py-1">CALL </h6></i></div>
<div class="col-sm-3 M rounded-3 bg-light border border-2"><i class="fa-solid fa-location-dot fs-1 text-warning" style="padding-top:70px;"><h6 class="fs-4 text-dark text-center py-1">ADDRESS</h6></i></div>
<div class="col-sm-3 M rounded-3 bg-light border border-2"><i class="fa-solid fa-envelope fs-1 text-warning"style="padding-top:70px;"><h6 class="fs-4 text-dark text-center py-1"> EMAIL US</h6></i></div>
</div>
</div>
</div>
<div class="row B">
<div class="col-sm-12">
<div class="row">
<div class="col-sm-5 p">
<div class="row">
<div class="col-sm-12 H">
<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14767.262289338461!2d70.79414485000001!3d22.284975!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1424308883981"width=540px height=400px></iframe>
</div></div>
</div>
<div class="col-sm-5 p">
<h2>Contact Us</h2>

<input type="text"placeholder="NAME"class="form-control my-3">
<input type="Email"placeholder="Email"class="form-control my-3">
<input type="number"placeholder="PHONE"class="form-control ">
<textarea class="form-control my-3"style="height:120px;">Type...</textarea>
<input type="submit"value="Send message"class="btn btn-dark">
</div>
</div>
</div>
</div>
</div>
</body>
</html>

