<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Bootstrap, from Twitter</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- Le styles -->
	<link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	
	<link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Le fav and touch icons -->
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/ico/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/ico/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>assets/ico/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>assets/ico/apple-touch-icon-114x114.png">

	</head>
<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="<?php echo base_url(); ?>site/">Project name</a>
				<div class="nav-collapse">
					<ul class="nav">
						<li class="active"><a href="<?php echo base_url(); ?>site/">Home</a></li>
						<li><a href="<?php echo base_url(); ?>site/page/about">About</a></li>
						<li><a href="<?php echo base_url(); ?>site/page/contact">Contact</a></li>
				 	
				 <?php 
					// if(!empty($pagelist)):
						echo $pagelist;
					// endif;
				 ?>
					</ul>
				</div><!--/.nav-collapse -->
				
			</div>
		</div>
	</div>
