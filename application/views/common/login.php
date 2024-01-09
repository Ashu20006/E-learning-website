<html>
<head>
<base href="<?php echo base_url('assets/');?>" >
<link href="css/Bootstrap.css" rel="stylesheet">
<link href="css/all.css" rel="stylesheet">
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.bundle.js"></script>
<style>
.outer{
	//min-height:700px;
	//background:#e0c6cb;
}
.F{
	//height:580px;
	//margin-left:440px;
	margin-top:50px;
	box-shadow:10px 10px 5px gray;
}
</style>
</head>
<body>
<?php if($this->session->flashdata('message'))
	{
		echo $this->session->flashdata('message');
	}
	?>	
<div class="container outer ">
	<form method="post" action="<?php  echo base_url('index.php/login/checkuser')?>">
<div class="row">
	<div class="col-sm-3"></div>
<div class="col-sm-6 bg-light F py-5">
	
<h1 style="text-align:center;">Welcome to Login Page</h1>
<center>

Login to Your Online Study
<input required type="text" class="form-control rounded-5 my-5"placeholder="Enter your user name"name="email">
<input type="password" class="form-control rounded-5 "placeholder="Type password "name="password">
<input type="submit" class="form-control rounded-5 my-5 bg-warning"value="Sign in">
Or <font style="margin-top:50px; color:orange;">Forget Password</font>
<pre><hr class="my-4"color=red>
Don't have an account? <a style="text-decoration:none;"href="<?php echo base_url('index.php/project/sign'); ?>">sign up</a>
</center>

</div>
</div>
</form>
</div>
</body>