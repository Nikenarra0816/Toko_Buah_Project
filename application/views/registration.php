<!DOCTYPE html>
<head>
<title>TOKO BUAH | ADMIN</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="<?= base_url();?>assets/css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="<?= base_url();?>assets/css/style.css" rel='stylesheet' type='text/css' />
<link href="<?= base_url();?>assets/css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="<?= base_url();?>assets/css/font.css" type="text/css"/>
<link href="<?= base_url();?>assets/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="<?= base_url();?>assets/js/jquery2.0.3.min.js"></script>
</head>
<body>
<div class="reg-w3">
<div class="w3layouts-main">
	<h2>Register Admin</h2>
	<?php
		if($this->session->flashdata('pesan')!=null){
			echo "<div class='alert alert-success'>".$this->session->flashdata('pesan')."</div>";}?>

		<form action="<?= base_url('admin/register/simpan');?>" method="post">
			<input type="text" class="ggg" name="nama_admin" placeholder="NAME">
			<input type="text" class="ggg" name="username" placeholder="USERNAME">
			<input type="password" class="ggg" name="password" placeholder="PASSWORD">
				<div class="clearfix"></div>
				<input type="submit" value="submit" name="submit">
		</form>
		<p>Already Registered.<a href="<?= base_url();?>login">Login</a></p>
</div>
</div>
<script src="<?= base_url();?>assets/js/bootstrap.js"></script>
<script src="<?= base_url();?>assets/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="<?= base_url();?>assets/js/scripts.js"></script>
<script src="<?= base_url();?>assets/js/jquery.slimscroll.js"></script>
<script src="<?= base_url();?>assets/js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="<?= base_url();?>assets/js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="<?= base_url();?>assets/js/jquery.scrollTo.js"></script>
</body>
</html>
