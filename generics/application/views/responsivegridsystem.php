<!DOCTYPE html>
<!-- HTML5 Boilerplate -->
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>

	<meta charset="utf-8">
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<base href="http://www.genericsdave.co.uk/" />
	<title>Example of the Responsive Grid System</title>
	<meta name="description" content="This is the Responsive Grid System, a quick, easy and flexible way to create a responsive web site.">
	<meta name="keywords" content="responsive, grid, system, web design">

	<meta name="author" content="www.grahamrobertsonmiller.co.uk">

	<meta http-equiv="cleartype" content="on">

	<link rel="shortcut icon" href="/favicon.ico">

	<!-- Responsive and mobile friendly stuff -->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/html5reset.css" media="all">
	<link rel="stylesheet" href="css/responsivegridsystem.css" media="all">
	<link rel="stylesheet" href="css/col.css" media="all">
	<link rel="stylesheet" href="css/2cols.css" media="all">
	<link rel="stylesheet" href="css/3cols.css" media="all">
	<link rel="stylesheet" href="css/4cols.css" media="all">
	<link rel="stylesheet" href="css/5cols.css" media="all">
	<link rel="stylesheet" href="css/6cols.css" media="all">
	<link rel="stylesheet" href="css/7cols.css" media="all">
	<link rel="stylesheet" href="css/8cols.css" media="all">
	<link rel="stylesheet" href="css/9cols.css" media="all">
	<link rel="stylesheet" href="css/10cols.css" media="all">
	<link rel="stylesheet" href="css/11cols.css" media="all">
	<link rel="stylesheet" href="css/12cols.css" media="all">

	<!-- Responsive Stylesheets -->
	<link rel="stylesheet" media="only screen and (max-width: 1024px) and (min-width: 769px)" href="/css/1024.css">
	<link rel="stylesheet" media="only screen and (max-width: 768px) and (min-width: 481px)" href="/css/768.css">
	<link rel="stylesheet" media="only screen and (max-width: 480px)" href="/css/480.css">

	<!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements and feature detects -->
	<script src="js/modernizr-2.5.3-min.js"></script>

	<style type="text/css">

	/*  THIS IS JUST TO GET THE GRID TO SHOW UP.  YOU DONT NEED THIS IN YOUR CODE */

	#maincontent .col {
		background: #ccc;
		background: rgba(204, 204, 204, 0.85);

	}

	</style>

</head>

<body>

<div id="skiptomain"><a href="#maincontent">skip to main content</a></div>

<div id="wrapper">
	<div id="headcontainer">
		<header>
		<h1>Responsive Grid System</h1>
		<h2>HTML Example</h2>
		<p class="introtext">You're gonna have to view the source to grab the code here.</p>
		</header>
	</div>
	<div id="maincontentcontainer">
		<div id="maincontent">

			<div class="section group">
			<h3>Two Columns</h3>
			</div>

			<div class="section group">
				<div class="col span_1_of_2">
				1 of 2
				</div>
				<div class="col span_1_of_2">
				1 of 2
				</div>
			</div>

			<div class="section group">
			<h3>Three Columns</h3>
			</div>

			<div class="section group">
				<div class="col span_1_of_3">
				1 of 3
				</div>
				<div class="col span_1_of_3">
				1 of 3
				</div>
				<div class="col span_1_of_3">
				1 of 3
				</div>
			</div>

			<div class="section group">
			<h3>Four Columns</h3>
			</div>

			<div class="section group">
				<div class="col span_1_of_4">
				1 of 4
				</div>
				<div class="col span_1_of_4">
				1 of 4
				</div>
				<div class="col span_1_of_4">
				1 of 4
				</div>
				<div class="col span_1_of_4">
				1 of 4
				</div>
			</div>

			<div class="section group">
			<h3>Five Columns</h3>
			</div>

			<div class="section group">
				<div class="col span_1_of_5">
				1 of 5
				</div>
				<div class="col span_1_of_5">
				1 of 5
				</div>
				<div class="col span_1_of_5">
				1 of 5
				</div>
				<div class="col span_1_of_5">
				1 of 5
				</div>
				<div class="col span_1_of_5">
				1 of 5
				</div>
			</div>

			<div class="section group">
			<h3>Six Columns</h3>
			</div>

			<div class="section group">
				<div class="col span_1_of_6">
				1 of 6
				</div>
				<div class="col span_1_of_6">
				1 of 6
				</div>
				<div class="col span_1_of_6">
				1 of 6
				</div>
				<div class="col span_1_of_6">
				1 of 6
				</div>
				<div class="col span_1_of_6">
				1 of 6
				</div>
				<div class="col span_1_of_6">
				1 of 6
				</div>
			</div>

			<div class="section group">
			<h3>Seven Columns</h3>
			</div>

			<div class="section group">
				<div class="col span_1_of_7">
				1 of 7
				</div>
				<div class="col span_1_of_7">
				1 of 7
				</div>
				<div class="col span_1_of_7">
				1 of 7
				</div>
				<div class="col span_1_of_7">
				1 of 7
				</div>
				<div class="col span_1_of_7">
				1 of 7
				</div>
				<div class="col span_1_of_7">
				1 of 7
				</div>
				<div class="col span_1_of_7">
				1 of 7
				</div>
			</div>

			<div class="section group">
			<h3>Eight Columns</h3>
			</div>

			<div class="section group">
				<div class="col span_1_of_8">
				1 of 8
				</div>
				<div class="col span_1_of_8">
				1 of 8
				</div>
				<div class="col span_1_of_8">
				1 of 8
				</div>
				<div class="col span_1_of_8">
				1 of 8
				</div>
				<div class="col span_1_of_8">
				1 of 8
				</div>
				<div class="col span_1_of_8">
				1 of 8
				</div>
				<div class="col span_1_of_8">
				1 of 8
				</div>
				<div class="col span_1_of_8">
				1 of 8
				</div>
			</div>

			<div class="section group">
			<h3>Nine Columns</h3>
			</div>

			<div class="section group">
				<div class="col span_1_of_9">
				1 of 9
				</div>
				<div class="col span_1_of_9">
				1 of 9
				</div>
				<div class="col span_1_of_9">
				1 of 9
				</div>
				<div class="col span_1_of_9">
				1 of 9
				</div>
				<div class="col span_1_of_9">
				1 of 9
				</div>
				<div class="col span_1_of_9">
				1 of 9
				</div>
				<div class="col span_1_of_9">
				1 of 9
				</div>
				<div class="col span_1_of_9">
				1 of 9
				</div>
				<div class="col span_1_of_9">
				1 of 9
				</div>
			</div>

			<div class="section group">
			<h3>Ten Columns</h3>
			</div>

			<div class="section group">
				<div class="col span_1_of_10">
				1 of 10
				</div>
				<div class="col span_1_of_10">
				1 of 10
				</div>
				<div class="col span_1_of_10">
				1 of 10
				</div>
				<div class="col span_1_of_10">
				1 of 10
				</div>
				<div class="col span_1_of_10">
				1 of 10
				</div>
				<div class="col span_1_of_10">
				1 of 10
				</div>
				<div class="col span_1_of_10">
				1 of 10
				</div>
				<div class="col span_1_of_10">
				1 of 10
				</div>
				<div class="col span_1_of_10">
				1 of 10
				</div>
				<div class="col span_1_of_10">
				1 of 10
				</div>
			</div>

			<div class="section group">
			<h3>Eleven Columns</h3>
			</div>

			<div class="section group">
				<div class="col span_1_of_11">
				1 of 11
				</div>
				<div class="col span_1_of_11">
				1 of 11
				</div>
				<div class="col span_1_of_11">
				1 of 11
				</div>
				<div class="col span_1_of_11">
				1 of 11
				</div>
				<div class="col span_1_of_11">
				1 of 11
				</div>
				<div class="col span_1_of_11">
				1 of 11
				</div>
				<div class="col span_1_of_11">
				1 of 11
				</div>
				<div class="col span_1_of_11">
				1 of 11
				</div>
				<div class="col span_1_of_11">
				1 of 11
				</div>
				<div class="col span_1_of_11">
				1 of 11
				</div>
				<div class="col span_1_of_11">
				1 of 11
				</div>
			</div>


			<div class="section group">
			<h3>Twelve Columns</h3>
			</div>

			<div class="section group">
				<div class="col span_1_of_12">
				1 of 12
				</div>
				<div class="col span_1_of_12">
				1 of 12
				</div>
				<div class="col span_1_of_12">
				1 of 12
				</div>
				<div class="col span_1_of_12">
				1 of 12
				</div>
				<div class="col span_1_of_12">
				1 of 12
				</div>
				<div class="col span_1_of_12">
				1 of 12
				</div>
				<div class="col span_1_of_12">
				1 of 12
				</div>
				<div class="col span_1_of_12">
				1 of 12
				</div>
				<div class="col span_1_of_12">
				1 of 12
				</div>
				<div class="col span_1_of_12">
				1 of 12
				</div>
				<div class="col span_1_of_12">
				1 of 12
				</div>
				<div class="col span_1_of_12">
				1 of 12
				</div>
			</div>



		</div>
	</div>
	<div id="footercontainer">
		<footer class="group">
			<div class="col span_1_of_4">
			<h4>About the Responsive Grid System</h4>
			<p>Inspired by <a href="http://ethanmarcotte.com/">Ethan Marcotte</a>'s responsive web design, this site was set up in the spirit of giving something back.  I found something that works for me, and I want to share it.</p>
			</div>
			<div class="col span_1_of_4">
			<h4>Problem, Officer?</h4>
			<p>If you find any errors, or can suggest any improvements please <a href="mailto:grahamrobertsonmiller@gmail.com">email me</a>. I will have a mini strop before probably realising you're way cleverer than me.  If I use something you suggest, you'll get a shout-out.</p>
			</div>
			<div class="col span_1_of_4">
			<h4>Are You Using It?</h4>
			<p>I'd love to know if this has been of use, and especially if you're actually using the code.  Go on, <a href="mailto:grahamrobertsonmiller@gmail.com">let me know</a> and you could get featured here.</p>
			</div>
			<div class="col span_1_of_4">
			<h4>Who Made This?</h4>
			<p>Seeing as you asked, the <a href="http://www.responsivegridsystem.com">Responsive Grid System</a> is brought to you by <a href="http://www.grahamrobertsonmiller.co.uk">Graham Miller</a> and is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attribution 3.0 License</a>.</p>
			</div>

   			<br class="breaker" />

			<div id="smallprint">
			<a href="http://validator.w3.org/"><img src="/images/html5-logo.png" width="40" height="50" alt="html5" /></a>
			<a href="http://jigsaw.w3.org/css-validator/"><img src="/images/css3-logo.png" width="40" height="50" alt="css3" /></a>
			<br />
			<span class="heart">&hearts;</span> Lovingly made in Newcastle upon Tyne.
			<a href="https://twitter.com/graham_r_miller" class="twitter-follow-button" data-show-count="false">Follow @graham_r_miller</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			</div>

		</footer>
	</div>
</div>



	<!-- JavaScript at the bottom for fast page loading -->

	<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>

	<!--[if (lt IE 9) & (!IEMobile)]>
	<script src="js/selectivizr-min.js"></script>
	<![endif]-->


	<!-- More Scripts-->
	<script src="js/responsivegridsystem.js"></script>


</body>
</html>