<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Homepage</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo base_url('static/css/bootstrap.min.css');?>">
	<script src="<?php echo base_url('static/js/jquery-3.2.1.min.js'); ?>"></script>
	<script src="<?php echo base_url('static/js/bootstrap.min.js'); ?>"></script>
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navbar">
					<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
        		</button>
				<a class="navbar-brand" href="#"><?php echo $site; ?></a>
			</div>
			<div class="collapse navbar-collapse" id="main-navbar">
				<ul class="nav navbar-nav">
					<?php 
						foreach($pages as $page) {
							echo "<li><a href='#'>" . $page . "</a></li>";
						}
					?>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<h1>Hello World</h1>
	</div>
</body>