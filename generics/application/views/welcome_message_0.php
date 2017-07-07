<?php

if (!isset($content_title)) {
	$content_title = 'introduction';
}
$content_section = 'home';

$menu_html = '';

foreach ($section as $id=>$sectionarray) {
	if (isset($sectionarray['menu'])) {
		if (count($sectionarray['menu']) > 1) {
			if ($sectionarray['active']) {
				$content_section = strtolower($sectionarray['name']);
				$active = 'menu-4';
			} else {
				$active = 'menu-2';
			}
			$menu_html .= '
		<li class="'.$active.'"><a class="parent">'.$sectionarray['name'].' <img src="/images/icon-drop.png" width="9" height="5" alt=" " /></a>
			<ul>
					<li><a href="/'.$sectionarray['menu'][0]['page_name'].'"><i class="icon-chevron-sign-right"></i>  '.ucfirst(str_replace('-',' ',$sectionarray['menu'][0]['page_title'])).'</a></li>
';
			for ($i=1;$i<count($sectionarray['menu']);$i++) {
				$menu_html .= '
					<li><a href="/'.$sectionarray['menu'][$i]['page_name'].'"><i class="icon-chevron-sign-right"></i>  '.ucfirst(str_replace('-',' ',$sectionarray['menu'][$i]['page_title'])).'</a></li>
';
			}
			$menu_html .= '
			</ul>
		</li>
';
		} else {
			if ($sectionarray['active']) {
				$content_section = strtolower($sectionarray['name']);
				$active = 'menu-4';
			} else {
				$active = 'menu-2';
			}
			$seg = ($sectionarray['menu'][0]['page_name'] == 'home' ? '' : $sectionarray['menu'][0]['page_name']);
			$menu_html .= '
		<li class="'.$active.'"><a class="parent" href="/'.$seg.'">'.ucfirst(str_replace('-',' ',$sectionarray['menu'][0]['page_name'])).'</a>
		</li>
';
		}
	}
}

if (strtolower($content_title) == $content_section) {
	if ($content_section == 'login') {
		$content_title = 'authorised users only';
		if (strpos($_SERVER["SERVER_NAME"],'generics') !== false) { // dev
			$url = 'http://www.esekeydave.com';
		} else { // live
			$url = 'https://phi.securesslhost.net/~esekey9';
		}
		$content .= '
			<a class="login" href="javascript:DoEseAdmin(\''.$url.'\');">To access your EseSite Administration Console, Click Here and follow Secure Login Instructions</a>
			<br><br><br><br>';
	} else {
		$content_title = 'introduction';
	}
} else {
	if ($content_section == 'case studies') $content_section = 'case study'; // pedantic!
}

$page_title = ucwords($content_section);

if ($content_title == 'introduction') {
	$page_title = $company_name.' - '.$page_title;
} else {
	$page_title = $company_name.' - '.$page_title.' - '.$content_title;
}
?>

<!DOCTYPE html>
<!-- HTML5 Boilerplate -->
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<base href="http://www.genericsdave.co.uk/" />
	<meta charset="utf-8">
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php echo $page_title?></title>
	<meta http-equiv="cleartype" content="on">

	<link rel="shortcut icon" href="/favicon.gif">

	<!-- Responsive and mobile friendly stuff -->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/html5reset.css" media="all">
	<link href="http://fonts.googleapis.com/css?family=Dosis:400,700,800|Varela+Round|Architects+Daughter" rel="stylesheet" type="text/css">
	<link href="css/esekey.css" rel="stylesheet" />
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
	<script src="js/responsive-nav.js"></script>
</head>
<body data-twttr-rendered="true">

<div id="skiptomain"><a href="#maincontent">skip to main content</a></div>

<header class="wrap ui-widget-content">
<nav class="wrap ui-state-default" style="border:0;">
    <div class="inner">
        <div class="active wrap" id="nav">
                <ul id="parent-nav">

    <li class="homeLink"><a class="parent" href="/"><i class="icon-home"></i> <span>Home</span></a></li>
     
<?php 
echo $menu_html;
?>
 
</ul>    
<script>
var navigation = responsiveNav("#nav");
</script>
        </div>
    </div>
</nav>
<div class="wrap top-navigation">
	<div class="inner">
    <iframe class="like" src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.esekey.com%2F&amp;send=false&amp;layout=button_count&amp;width=80&amp;show_faces=false&amp;font=arial&amp;colorscheme=light&amp;action=like&amp;height=21" style="border:none; overflow:hidden; width:80px; height:21px;"></iframe>  
                            <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    </div>
</div>

<div class="wrap main-navigation">
    	<a id="logo" href="/"><img src="/images/esekey_logo.jpg" alt="Logo"></a>
</div>

</header>


<!-- <h1>Esekey Generics: Quick and Easy Web content and more!</h1> -->
<div id="titlecontainer">
			<div class="sectiontitle">
&nbsp;<?php echo $content_section?>
			</div>
			<div class="pagetitle">
<?php echo strtolower($content_title)?>
			</div>
</div>
<div class="maincontent"><?=$content?></div>

	<div id="footercontainer">
		<footer class="group">
			<div class="col span_1_of_4">
			<h4>Software, Tools and Skills</h4>
			<p>PHP5, MySQL/MariaDB, HTML5, CSS3, JavaScript, JQuery, CodeIgniter, Laravel, Wordpress, Eclipse, Subversion, Git</p>
			</div>
			<div class="col span_1_of_4">
			<h4>Architecture and Interfaces</h4>
			<p>Payment Gateways, Web Services, APIs, Google Maps, Data Download to Excel/PDF/Word</p>
			</div>
			<div class="col span_1_of_4">
			<h4>Business Areas</h4>
			<p>Leisure/Tourism, Insurance, Financial Services, Digital Asset Management.</p>
			</div>
			<div class="col span_1_of_4">
			<h4>Services</h4>
			<p>Bespoke development, hosting.</p>
			</div>

   			<br class="breaker" />

			<div id="smallprint">
			<a href="http://validator.w3.org/"><img src="/images/html5-logo.png" width="40" height="50" alt="html5" /></a>
			<a href="http://jigsaw.w3.org/css-validator/"><img src="/images/css3-logo.png" width="40" height="50" alt="css3" /></a>
			<br />
			</div>

		</footer>
	</div>
</div>



	<!-- JavaScript at the bottom for fast page loading -->

	<!--[if (lt IE 9) & (!IEMobile)]>
	<script src="js/selectivizr-min.js"></script>
	<![endif]-->


	<!-- More Scripts-->
	<script src="js/responsivegridsystem.js"></script>
	<script language="JavaScript" src="js/eseLogin.js" type="text/javascript"></script>

</body>
</html>