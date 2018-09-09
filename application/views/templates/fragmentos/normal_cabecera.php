<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
	
	
	Modificado ->
	Parametros
	   $title  title de la pagina
	   $keywords lista de palabras sobre que va esta pagina
-->



<!DOCTYPE html>
<html lang="es">



<!-- Head -->
<head>

<title><?= $title?></title>

<!-- Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="<?= $keywords?>">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Meta-Tags -->

<!-- Custom-Stylesheet-Links -->
<!-- Bootstrap-CSS -->	  <link rel="stylesheet" href="<?= assets()?>css/bootstrap.min.css"  type="text/css" media="all">
<!-- Index-Page-CSS -->	  <link rel="stylesheet" href="<?= assets()?>css/style.css"		   type="text/css" media="all">
<!-- Owl-Carousel-CSS --> <link rel="stylesheet" href="<?= assets()?>css/owl.carousel.css"   type="text/css" media="all">
<!-- Chocolat-CSS -->	  <link rel="stylesheet" href="<?= assets()?>css/chocolat.css"	   type="text/css" media="all">
<!-- Animate-CSS -->	  <link rel="stylesheet" href="<?= assets()?>css/animate-custom.css" type="text/css" media="all">
<!-- //Custom-Stylesheet-Links -->
		<link rel="stylesheet" href="<?= assets()?>css/cabecera.css" type="text/css" media="all">
<!-- Fonts -->
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700"	   type="text/css" media="all">
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500" type="text/css" media="all">
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Press+Start+2P"		   type="text/css" media="all">
<!-- //Fonts -->

<!-- Font-Awesome-File-Links -->
<!-- CSS --> <link rel="stylesheet" href="<?= assets()?>css/font-awesome.min.css" 	 type="text/css" media="all">
<!-- TTF --> <link rel="stylesheet" href="<?= assets()?>fonts/fontawesome-webfont.ttf" type="text/css" media="all">
<!-- //Font-Awesome-File-Links -->

<!--  Custom  -->
<?php echo $before_head;?>
</head>
<!-- //Head -->



<!-- Body -->
<body>
    <!-- Header -->
	<div class="agileheader" id="agileitshome">

		<!-- Navigation -->
		<div class="w3lsnavigation">
			<nav class="navbar navbar-inverse agilehover-effect wthreeeffect navbar-default navbar-fixed-top">

				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Logo -->
					<div class="logo">
						<a class="navbar-brand logo-w3l button" href="#"><img src="<?= assets()?>images/snText.png" style="width:34px;height:34px;" class="d-inline-block align-top" alt=""> TECNOLAND <span class="hidden-xs">ALCAÑIZ</span></a>
					</div>
					<!-- //Logo -->
				</div>

				<div id="navbar" class="navbar-collapse navbar-right collapse">
					<ul class="nav navbar-nav navbar-right cross-effect" id="cross-effect">
						<li><a class="scroll" href="#wthreetabsaits">LAN PARTY</a></li>
						<li><a class="scroll" href="#wthreeblogsaits">BF-PARTY</a></li>
						<li><a class="scroll" href="#agilecontactw3ls">CONTACTO</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Login<b class="caret"></b></a>
							<div class="dropdown-menu">
								<form action="#" method="post">
									<div id="login" class="animate w3loginagile form">
										<h3>Login</h3>
										<input type="text" Name="Userame" placeholder="Username" required="">
										<input type="password" Name="Password" placeholder="Password" required="">
										<div class="send-button wthree agileits">
											<input type="submit" value="Login">
										</div>
										<div class="clearfix"></div>
									</div>
								</form>
								<form action="#" method="post">
									<div id="register" class="animate w3registeragile form">
										<h3>Sign Up</h3>
										<input type="text" Name="Name" placeholder="Name" required="">
										<input type="text" Name="Email" placeholder="Email" required="">
										<input type="password" Name="Password" placeholder="Password" required="">
										<input type="text" Name="Phone Number" placeholder="Phone Number" required="">
										<div class="send-button wthree agileits">
											<input type="submit" value="Sign Up">
										</div>
									</div>
								</form>
							</div>
						</li>
					</ul>
				</div><!-- //Navbar-Collapse -->

			</nav>
		</div>
		<!-- //Navigation -->
	</div>
	<br/><br/><br/>
	<!-- //Header -->