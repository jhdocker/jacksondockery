<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en" itemscope itemtype="http://schema.org/Product"> <!--<![endif]-->
<head>
	<meta charset="utf-8">

	<!-- Use the .htaccess and remove these lines to avoid edge case issues.
			 More info: h5bp.com/b/378 -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>Jackson Dockery</title>
	<meta name="description" content="Jackson Dockery" />
	<meta name="keywords" content="Jackson Dockery" />
	<meta name="author" content="humans.txt">

	<link rel="shortcut icon" href="favicon.png" type="image/x-icon" />

	<!-- Facebook Metadata /-->
	<meta property="fb:page_id" content="" />
	<meta property="og:image" content="" />
	<meta property="og:description" content=""/>
	<meta property="og:title" content=""/>

	<!-- Google+ Metadata /-->
	<meta itemprop="name" content="">
	<meta itemprop="description" content="">
	<meta itemprop="image" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">


	<link rel="stylesheet" href="css/gumby.css">
	<script src="js/libs/modernizr-2.6.2.min.js"></script>

</head>

<body>
	<?php //include_once("analyticstracking.php") ?>
	<!--lets set up that navbar-->
	<div class="navbar" id="nav1">
		<div class="row" >
			<a class="toggle" gumby-trigger="#nav1 > .row > ul" href="#"><img src="img/menu.png"></a>
			<div class="navrow">
				<div class="six columns">
					<h1>JACKSON DOCKERY</h1>
				</div>
				<ul class="six columns links">
					<li class='left skiplink'><a href="#" gumby-goto="[data-target='portfolio-section']" gumby-duration="600" gumby-offset="-100">About</a></li>
					<li class='left skiplink'><a href="#" gumby-goto="[data-target='about-section']" gumby-duration="600" gumby-offset="-100">Work</a></li>
					<li class='left skiplink'><a href="#" gumby-goto="[data-target='about-section']" gumby-duration="600" gumby-offset="-100">Portfolio</a></li>
					<li class='left skiplink'><a href="#" class="switch"  gumby-goto="[data-target='contact-section']" gumby-duration="600" >Contact</a></li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="twelve columns ">
				<h3>Front End Developer</h3>
			</div>
		</div>
	</div>
	<!--hidden scroll menu-->
	<div class="navbar" id="main-menu">
		<div class="row" >
			<a class="toggle" gumby-trigger="#nav1 > .row > ul" href="#"><img src="img/menu.png"></a>
			<ul class="ten columns centered">
				<li class='skiplink'><a href="#" gumby-goto="[data-target='home-section']" gumby-duration="600">Home</a></li>
				<li class='left skiplink'><a href="#" gumby-goto="[data-target='portfolio-section']" gumby-duration="600" gumby-offset="-100">Portfolio</a></li>
				<li class='left skiplink'><a href="#" gumby-goto="[data-target='about-section']" gumby-duration="600" gumby-offset="-100">About Me</a></li>
				<li class='left skiplink'><a href="#" class="switch"  gumby-goto="[data-target='contact-section']" gumby-duration="600">Contact</a></li>
			</ul>
		</div>

	</div>
	<section class='section1' data-target='home-section'>
		<div class="row">
			<div class="six columns centered">
				<p>Hi, my name is Jackson. I'm a front end developer with a passion for making clean, responsive sites.</p>
			</div>
		</div>
		<div class="row">
			<div class="six columns centered explore">
				<h2>Explore</h2>
			</div>
		</div>
	</section>
	<section class='section2' data-target='portfolio-section'>
		<div class="row">
			<div class="twelve columns text-center">
				<h1>Projects</h1>
			</div>
		</div>
		<div class="project-display">
			<div class="row">
				<div class="six columns">
					<!--<div class="project-wrapper project1">
						<img src="img/port1.png">
					</div>-->
					<div class="viewport viewport1">
					    <a target="_blank" href="http://demo.wearepine.com">
					        <span class="dark-background">Pine <em>Current project. In Progress!<br />These are template pages only (no live data) Built on the Gumby framework.</em></span>
					        <img src="img/pinepage.png" alt="Pine" />
					    </a>
					</div>
				</div>
				<div class="six columns">
					<!--<div class="project-wrapper project2">
						<img src="img/port2.png">
					</div>-->
					<div class="viewport viewport2">
					    <a target="_blank" href="http://usadvantagesavings.com/standard/007/a05/z1">
					        <span class="dark-background">usadvantageplans <em>USAP Savings Plus<br />Savings Plus Landing Page<br />Built in Drupal and Gumby</em></span>
					        <img src="img/savingsplus.png" alt="Pine" />
					    </a>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="six columns">
					<!--<div class="project-wrapper project1">
						<img src="img/port1.png">
					</div>-->
					<div class="viewport viewport3">
					    <a target="_blank" href="http://usadvantagesavings.com/roadside/partner/1/53/0300/ppc/a/04/z2">
					        <span class="dark-background">usadvantageplans<em>USAP Roadside Insurance Landing Page<br />Built in Drupal and Gumby</em></span>
					        <img src="img/roadsidesmall.png" alt="Pine" />
					    </a>
					</div>
				</div>
				<div class="six columns">
					<!--<div class="project-wrapper project2">
						<img src="img/port2.png">
					</div>-->
					<div class="viewport viewport4">
					    <a target="_blank" href="http://usadvantagesavings.com/roadside/partner/1/53/0300/ppc/a/04/r1">
					        <span class="dark-background">usadvantagesavings <em>Roadside insurance landing page. a/b test<br />Built in Drupal and Gumby</em></span>
					        <img src="img/savingvan.png" alt="Pine" />
					    </a>
					</div>
				</div>
			</div>

		</div>
	</section>
	<section class='section3' data-target='about-section' >
		<div class="row">
			<div class="twelve columns text-center">
				<h1>Hi, I'm Jackson.</h1>
			</div>
		</div>
		<div class="row">
			<div class="six columns jax-pic">
				<img src="img/jackson.jpg">
				<p>jhdocker [at] gmail.com</p>
				<p>336-554-2792</p>
			</div>
			<div class="six columns jax">
				<p>I'm Jackson, I have a passion for good work and living life outside if it.</p>
				<p>I'm a front-end developer with 1.5 years experience in the field. I am an eager learner and dedicated to a career in this field. I excel in a learning and supportive environment, while maintaining deadlines and company goals. I prefer to work in a team environment as I bring enthusiasm and willingness to work, but I can also work remotely and on an individual basis.</p>
				<div class='contact-info'>
					<p class="btn "><a href="#" class="switch" gumby-trigger="#modal1">Let's Talk!</a></p>
				</div>
			</div>
		</div>
	</section>
	<section class='section4' data-target='contact-section'>
		<div class="row">
			<div class="twelve columns">

			</div>
		</div>

		<div class="row"><!--start of modal-->
			<div class="twelve columns">
				<div class="contact-form">
						<div class="modal" id="modal1">
						  <div class="content">
						    <a class="close switch" gumby-trigger="|#modal1"><img src="img/close.png"></a>
						    <div class="row">
						      <div class="ten columns centered text-center">
						        <div class="contact-form">
									<h1>Contact me!</h1>
									<form method='post' action="contact.php">

									    <input name="name" placeholder="name"required>

									    <input name="email" type="email" placeholder="your email address"required>

									    <textarea name="message" placeholder="Start a conversation"></textarea>

									    <input class='btn primary medium' id="submit" name="submit" type="submit" value="Submit">

									</form>
								</div>
						      </div>
						    </div>
						  </div>
						</div>
					<!--<p class="btn primary medium"><a href="#" class="switch" gumby-trigger="#modal1">Let's Talk!</a></p>-->
				</div>
			</div>
		</div>
	</section>
	<footer>

	</footer>
	<!-- Grab Google CDN's jQuery, fall back to local if offline -->
	<!-- 2.0 for modern browsers, 1.10 for .oldie -->
	<script>
	var oldieCheck = Boolean(document.getElementsByTagName('html')[0].className.match(/\soldie\s/g));
	if(!oldieCheck) {
	document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"><\/script>');
	} else {
	document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"><\/script>');
	}
	</script>
	<script>
	if(!window.jQuery) {
	if(!oldieCheck) {
	  document.write('<script src="js/libs/jquery-2.0.2.min.js"><\/script>');
	} else {
	  document.write('<script src="js/libs/jquery-1.10.1.min.js"><\/script>');
	}
	}
	</script>

	<!--
	Include gumby.js followed by UI modules followed by gumby.init.js
	Or concatenate and minify into a single file -->
	<script gumby-touch="js/libs" src="js/libs/gumby.js"></script>
	<script src="js/libs/ui/gumby.retina.js"></script>
	<script src="js/libs/ui/gumby.fixed.js"></script>
	<script src="js/libs/ui/gumby.skiplink.js"></script>
	<script src="js/libs/ui/gumby.toggleswitch.js"></script>
	<script src="js/libs/ui/gumby.checkbox.js"></script>
	<script src="js/libs/ui/gumby.radiobtn.js"></script>
	<script src="js/libs/ui/gumby.tabs.js"></script>
	<script src="js/libs/ui/gumby.navbar.js"></script>
	<script src="js/libs/ui/jquery.validation.js"></script>
	<script src="js/libs/gumby.init.js"></script>



	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="http://arrow.scrolltotop.com/arrow89.js"></script>


  </body>
</html>
