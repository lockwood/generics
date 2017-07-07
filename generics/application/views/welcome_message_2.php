<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths"><!--<![endif]--><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">

	<meta charset="utf-8">
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<base href="<?=base_url()?>" />
	<title><?=$page_title?></title>
	<meta name="description" content="<?=$page_title?>">
	<meta name="keywords" content="<?=$keywords?>">

	<meta name="author" content="www.esekey.com">
	<link rel="shortcut icon" href="favicon.gif">
	<!-- <link rel="shortcut icon" href="<?=base_url()?>images/favicon.ico" type="image/x-icon"> -->
	<!-- apple and android -->
    <link rel="apple-touch-icon-precomposed" href="/images/apple-touch-icon-precomposed.png">
    <!-- windows phones -->
    <meta name="msapplication-TileImage" content="/images/apple-touch-icon-precomposed.png">
    <meta name="msapplication-TileColor" content="#fff">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/html5reset.css" media="all">
	<link rel="stylesheet" href="css/flexslider.css" type="text/css">
    <link rel="stylesheet" href="css/esekey-responsive.css" media="all">
	<link rel="stylesheet" href="css/jquery.css" media="screen">
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="css/booking.css" type="text/css">
    

	<!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
	<script src="js/widgets.js" id="twitter-wjs"></script>
	<script src="js/ga.js" async="" type="text/javascript"></script>
	<script src="js/modernizr-2.js"></script>
    <script src="js/mobilenav.js"></script>
	<!-- Google analytics goes here -->

	<link rel="canonical" href="<?=current_url()?>">
	<meta name="robots" content="index, follow">



<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-789136-1";
urchinTracker();
</script>

</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="skiptomain"><a href="#maincontent">skip to main content</a></div>

<div id="wrapper">
	<div id="headcontainer">
		<header>
		

		
			<div id="toplogo"><a href=""><img src="images/logo.png" alt="logo: click for home page" class="logo" height="102" width="229"><img src="images/sheephousemanortext.png" alt="Sheephouse Manor: click for home page" class="text" height="102" width="360"></a></div>
			<div id="topright">
				<div class="telephone"><p><img src="images/phoneicon.png" alt="telephone" height="25" width="25"><strong>
				
				<a href="tel:<?=$company_telephone?>"><?=$company_telephone?></a>
				
				</strong></p><p><img src="images/emailicon.jpg" alt="email" height="25" width="25"><strong>
				
				<a href="mailto:<?=$company_email?>"><?=$company_email?></a>
				
				</strong></p></div>
				<div class="enquire"><p><a onclick="DoPopup('https://phi.securesslhost.net/~esekey9/sheephousemanor/idxs.php?p=9&conditions=Accept');" class="button">Book Now</a></p></div>
			</div>
			<br class="breaker">
		</header>
	</div>
	<div id="navcontainer">

		<nav>
        	<a class="menuToggle" onclick="showhide('menu');">Show Navigation</a>
			<ul id="menu">
<?php 

foreach ($section as $id=>$sectionarray) {
	if (isset($sectionarray['menu'])) {
		if (count($sectionarray['menu']) > 1) {
			if ($sectionarray['active']) {
				$active = ' activeNav';
			} else {
				$active = '';
			}
			echo '
					<li class="hassub'.$active.'"><a class="drop">'.$sectionarray['name'].'</a>
						<div style="opacity: 0; display: none;" class="sub dropdown_1column">
							<div class="col_1">
							<ul class="sublist">
								<li><a href="/'.$sectionarray['menu'][0]['page_name'].'">'.$sectionarray['menu'][0]['page_title'].'</a></li>
';
			for ($i=1;$i<count($sectionarray['menu']);$i++) {
				echo '
								<li><a href="/'.$sectionarray['menu'][$i]['page_name'].'">'.$sectionarray['menu'][$i]['page_title'].'</a></li>
';
			}
			echo '
							</ul>
							</div>
						</div>
					</li>
';
		} else {
			if ($sectionarray['active']) {
				$active = ' class="activeNav"';
			} else {
				$active = '';
			}
			$seg = ($sectionarray['menu'][0]['page_name'] == 'home' ? '' : $sectionarray['menu'][0]['page_name']);
			echo '
					<li'.$active.'><a href="/'.$seg.'">'.$sectionarray['menu'][0]['page_title'].'</a>
					</li>
';
		}
	}
}

?>
			</ul>
		</nav>
	</div>

			<?php 
				if ($this->uri->segment(1) == 'location') {
?>					
<div align="center"><script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> 						
<script src="js/loadmap.js"></script>
<div id="map" style="width: 100%; height: 500px; text-align: center">&nbsp;</div></div>					
<?php
			} elseif ($this->uri->segment(1) != 'availability' && $this->uri->segment(1) != 'rates' && $this->uri->segment(1) != 'guestbook' && $this->uri->segment(1) != 'booking') {
?>
	<div id="topimagecontainer">
		<div id="topimage" class="group">
			<div class="flexslider">
				<ul class="slides">
				<?php
				if (isset($i1600) && is_array($i1600)) {
					foreach ($i1600 as $img_id) {
						echo '
				<li style="width: 100%; float: left; margin-right: -100%; display: none;"><img src="images/1600_'.$img_id.'.jpg" alt=""><!-- <p class="flex-caption">Image caption one</p> --></li>
';
					}
				}
				?>
				</ul>
			</div>
		</div>
	</div>
<?php 
				}
?>

	<div id="maincontentcontainer">
		<div id="maincontent" class="group">
			<!-- AddThis Button BEGIN -->
            <div class="addthis_toolbox addthis_default_style ">
            <a class="addthis_button_preferred_1"></a>
            <a class="addthis_button_preferred_2"></a>
            <a class="addthis_button_preferred_3"></a>
            <a class="addthis_button_preferred_4"></a>
            <a class="addthis_button_compact"></a>
            <a class="addthis_counter addthis_bubble_style"></a>
            </div>
			<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-511266032a133f44" async="async"></script>
            <!-- AddThis Button END -->            
			<div class="section group">

			<?php 
				if ($this->uri->segment(1) == 'availability') {
					echo '
			<h1>Availability</h1>
					';
					$sd = '';
					$avail = '';
					if (isset($_GET['sd'])) $sd = '&sd='.$_GET['sd'];
					$avail = file_get_contents('http://www.allmybookings.co.uk/availability.php?cid=4&grp=p'.$sd);
					$avail = str_replace('/availability.php', 'http://'.$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"], $avail);
					echo $avail;
				} elseif ($this->uri->segment(1) == 'rates') {
					$thisyear = date('Y');
					$nextyear = substr($thisyear,2,2)+1;
					echo '
			<h1>Weekly Rates '.$thisyear.'/'.$nextyear.'</h1>
					';
					include('new_tariff.php');
				} elseif ($this->uri->segment(1) == 'guestbook') {
					include('new_guest_review_form.php');
	 			} else {		
			?>
			
		<div class="col span_3_of_5">
				<p>
				<?php
				if ($this->uri->segment(1) == 'rates') {
					include('new_tariff.php');
				} else {
					echo $content;
				}
				?></p>

				
				
				</div>
				
				<div class="col span_2_of_5">
				<h3>Guestbook selections</h3>
				
			
			<!--  Testimonial for that page -->
			
<?php 
if (isset($reviews) && is_array($reviews)) {
	foreach ($reviews as $review) {
		echo '
					<blockquote class="speechbubble">
					<p class="handwritten"></p><p>'.$review['comments'].'</p><p></p>
					</blockquote>
					<p><em>'.$review['guest'].' ('.date('F Y', strtotime($review['date'])).')</em></p>
		
';		
	}
	
} else {

?>			
			

					<blockquote class="speechbubble">
					<p class="handwritten"></p><p>Quisque at elit vel libero ornare efficitur. Suspendisse ornare lectus sit amet enim interdum, sed mattis leo elementum. Praesent fringilla volutpat ante eu commodo. Praesent laoreet lacinia urna vel interdum. Aenean non accumsan urna. Aenean quis bibendum enim. Curabitur ac porta nisi.</p><p></p>
					</blockquote>
					<p><em>Anon, U.S.A. (July 2015)</em></p>

			

					<blockquote class="speechbubble">
					<p class="handwritten">Quisque id odio nec quam pulvinar luctus sed eget neque. Quisque sed quam et sapien eleifend molestie convallis a leo. Proin tincidunt turpis eu diam dictum maximus. Curabitur ultricies nisi quam, eget facilisis mauris cursus vitae. Mauris tincidunt nibh eu pulvinar cursus. Sed in ullamcorper turpis, scelerisque tincidunt ipsum. Phasellus vitae libero turpis. Phasellus at euismod ipsum.</p><p></p><p></p>
					</blockquote>
					<p><em>Dave &amp; Helen, Burnham (February 2015)</em></p>

<?php 
}
?>
			
				</div>
				
				<?php 
				}
				?>
			
			</div>
			
			<?php 
				if ($this->uri->segment(1) != 'availability' && $this->uri->segment(1) != 'rates') {
?>
			
			<div class="section sectionend group">

<?php 
if (isset($pagemenu[0])) {
?>
				<div class="col span_1_of_5">
					<a href="/<?=$pagemenu[0]['link']?>/"><img src="images/207_<?=$pagemenu[0]['image_name']?>.jpg" alt=" <?=$pagemenu[0]['image_alt']?>" class="pagegridimage"></a>
					<h2><a href="/<?=$pagemenu[0]['link']?>/"> <?=$pagemenu[0]['image_alt']?></a></h2>
					<p><?=$pagemenu[0]['text']?></p>
					<a href="/<?=$pagemenu[0]['link']?>/" class="iconlink">Find Out More</a>
				</div>
<?php 
} else {
?>
				<div class="col span_1_of_5">
					<a href="/cottage-one/"><img src="images/207_019.jpg" alt=" Cottages" class="pagegridimage"></a>
					<h2><a href="/cottage-one/"> Cottages</a></h2>
					<p>Five fully equipped cottages sleeping 2 - 5 persons, each making a cosy home from home for families and professionals. Tastefully renovated barns in the grounds of a 16th century farmhouse
in a countryside location, close to Maidenhead town.
</p>
					<a href="/cottage-one/" class="iconlink">Find Out More</a>
				</div>
<?php 
}
if (isset($pagemenu[1])) {
?>
				<div class="col span_1_of_5">
					<a href="/<?=$pagemenu[1]['link']?>/"><img src="images/207_<?=$pagemenu[1]['image_name']?>.jpg" alt=" <?=$pagemenu[1]['image_alt']?>" class="pagegridimage"></a>
					<h2><a href="/<?=$pagemenu[1]['link']?>/"> <?=$pagemenu[1]['image_alt']?></a></h2>
					<p><?=$pagemenu[1]['text']?></p>
					<a href="/<?=$pagemenu[1]['link']?>/" class="iconlink">Find Out More</a>
				</div>
<?php 
} else {
?>
				<div class="col span_1_of_5">
					<a href="/westwing/"><img src="images/207_5579.jpg" alt="West Wing" class="pagegridimage"></a>
					<h2><a href="/westwing/">West Wing</a></h2>
					<p>The West Wing is a self contained three bedroom self catering suite. It has its own private entrance, and fully equipped kitchen/dining room.</p>
					<a href="/westwing/" class="iconlink">Find Out More</a>
				</div>
<?php 
}
if (isset($pagemenu[2])) {
?>
				<div class="col span_1_of_5">
					<a href="/<?=$pagemenu[2]['link']?>/"><img src="images/207_<?=$pagemenu[2]['image_name']?>.jpg" alt=" <?=$pagemenu[2]['image_alt']?>" class="pagegridimage"></a>
					<h2><a href="/<?=$pagemenu[2]['link']?>/"> <?=$pagemenu[2]['image_alt']?></a></h2>
					<p><?=$pagemenu[2]['text']?></p>
					<a href="/<?=$pagemenu[2]['link']?>/" class="iconlink">Find Out More</a>
				</div>
<?php 
} else {
?>
				<div class="col span_1_of_5">
					<a href="/southlands/"><img src="images/207_056.jpg" alt="Southlands" class="pagegridimage"></a>
					<h2><a href="/southlands/">Southlands</a></h2>
					<p>Southlands is a charming Victorian Cottage on delightful Cookham Village High Street.</p>
					<a href="/southlands/" class="iconlink">Find Out More</a>
				</div>
<?php 
}
if (isset($pagemenu[3])) {
?>
				<div class="col span_1_of_5">
					<a href="/<?=$pagemenu[3]['link']?>/"><img src="images/207_<?=$pagemenu[3]['image_name']?>.jpg" alt=" <?=$pagemenu[3]['image_alt']?>" class="pagegridimage"></a>
					<h2><a href="/<?=$pagemenu[3]['link']?>/"> <?=$pagemenu[3]['image_alt']?></a></h2>
					<p><?=$pagemenu[3]['text']?></p>
					<a href="/<?=$pagemenu[3]['link']?>/" class="iconlink">Find Out More</a>
				</div>
<?php 
} else {
?>
				<div class="col span_1_of_5">
					<a href="/local/"><img src="images/207_9001.jpg" alt="Things to do" class="pagegridimage"></a>
					<h2><a href="/local/">Things to do</a></h2>
					<p>We are an ideal base from which to visit Legoland and Windsor Castle, or explore the beautiful Thames Path on foot or by bicycle.</p>
					<a href="/local/" class="iconlink">Find Out More</a>
				</div>
<?php 
}
if (isset($pagemenu[4])) {
?>
				<div class="col span_1_of_5">
					<a href="/<?=$pagemenu[4]['link']?>/"><img src="images/207_<?=$pagemenu[4]['image_name']?>.jpg" alt=" <?=$pagemenu[4]['image_alt']?>" class="pagegridimage"></a>
					<h2><a href="/<?=$pagemenu[4]['link']?>/"> <?=$pagemenu[4]['image_alt']?></a></h2>
					<p><?=$pagemenu[4]['text']?></p>
					<a href="/<?=$pagemenu[4]['link']?>/" class="iconlink">Find Out More</a>
				</div>
<?php 
} else {
?>
				<div class="col span_1_of_5">
					<a href="/booking/"><img src="images/207_013.jpg" alt="Make a booking" class="pagegridimage"></a>
					<h2><a href="/booking/">Make a booking</a></h2>
					<p>Check availability and book online now using our secure booking form.</p>
					<a href="/booking/" class="iconlink">Find Out More</a>
				</div>
<?php 
}
?>
			</div>
<?php 
				}
?>

		</div>
	</div>
	

	<div id="footercontainer">
		<footer class="group">
					
		<div class="section group">
			<div class="col center span_1_of_3">
				<h3>Find us on Facebook...</h3>
<div class="fb-page f_facebook" data-href="https://www.facebook.com/sheephousemanor.co.uk" data-tabs="timeline" data-width="350" data-height="200" data-small-header="true" data-adapt-container-width="false" data-hide-cover="true" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/sheephousemanor.co.uk"><a href="https://www.facebook.com/sheephousemanor.co.uk">Sheephouse Manor</a></blockquote></div></div>				
			</div>

			<div class="col center span_1_of_3">
				
				<h3>...on TripAdvisor...</h3>
<div id="TA_certificateOfExcellence332" class="TA_certificateOfExcellence f_tripadvisor">
<ul id="Tsiz5xIJ" class="TA_links UFU2li">
<li id="HmlGz3D" class="7iKEdET">
<a target="_blank" href="http://www.tripadvisor.co.uk/Hotel_Review-g186418-d564303-Reviews-Sheephouse_Manor-Maidenhead_Windsor_and_Maidenhead_Berkshire_England.html"><img src="http://www.tripadvisor.co.uk/img/cdsi/img2/awards/CoE2015_WidgetAsset-14348-2.png" alt="TripAdvisor" class="widCOEImg" id="CDSWIDCOELOGO"/></a>
</li>
</ul>
</div>
<script src="http://www.jscache.com/wejs?wtype=certificateOfExcellence&amp;uniq=332&amp;locationId=564303&amp;lang=en_UK&amp;year=2015&amp;display_version=2"></script>
<div id="TA_certificateOfExcellence927" class="TA_certificateOfExcellence f_tripadvisor"><ul id="6mVEctia" class="TA_links 
johpi4O"><li id="0SRglQ" class="PQCt4rwhG7"><a target="_blank" href="https://www.tripadvisor.co.uk/Hotel_Review-g186418-d564303-Reviews-Sheephouse_Manor-Maidenhead_Windsor_and_Maidenhead_Berkshire_England.html"><img src="https://www.tripadvisor.co.uk/img/cdsi/img2/awards/CoE2016_WidgetAsset-14348-2.png" alt="TripAdvisor" class="widCOEImg" id="CDSWIDCOELOGO"/></a>
</li>
</ul>
</div>
<script src="https://www.jscache.com/wejs?wtype=certificateOfExcellence&amp;uniq=927&amp;locationId=564303&amp;lang=en_UK&amp;year=2016&amp;display_version=2">
</script>
			</div>
            
			
            <div class="col center span_1_of_3 f_booknow">
				<h3>...or just make a booking!</h3>
				<div class="enquirex"><p><a onclick="DoPopup('https://phi.securesslhost.net/~esekey9/sheephousemanor/idxs.php?p=9&conditions=Accept');" class="button">Book Now</a></p></div>
				<div><p><a target="_blank" href="http://www.reservations.lodging-world.com/hotel/gb/sheephouse-manor-maidenhead.en-gb.html"><img border="0" src="http://www.lodging-world.com/content/badges/small-gold-84x105.png" /></a></p></div>
				<div><p><a target="_blank" href="http://www.booking.com/hotel/gb/sheephouse-manor-maidenhead.en-gb.html"><img border="0" width="84px" src="images/booking_dot_com_award_2016.jpg" /></a></p></div>
				<div><p><a target="_blank" href="http://www.visitsoutheastengland.com/accommodation/sheephouse-manor-p1125441"><img border="0" width="84px" src="images/tse2017memberlogo.jpg" /></a></p></div>

			</div>
		</div>
		<div class="section group">
    		
			<div id="smallprint">

			<p>Sheephouse Manor, Sheephouse Road, Maidenhead, Berks SL6 8HJ</p>
			
			<p>&copy; Copyright 2003-<?=date('Y')?> Sheephouse Country Cottages Limited, UK<img src="counter.php?p=<?=$page_id?>" alt="counter">
			 <a style="color: white; font-weight: normal; text-align: right;" href="http://www.esekey.com/" target="z">Powered by Esekey&trade;.</a> <a href="http://www.icondrawer.com" target="id"><img border="0" alt="Flags by IconDrawer" src="images/UK.png"></a>
			</p>
			</div>
		</div>
		</footer>
	</div>
</div>


	


<!-- JavaScript at the bottom for fast page loading -->

	<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
	<script src="js/jquery.js"></script>
	<script>window.jQuery || document.write('<script src="/js/jquery-1.6.2.min.js"><\/script>')</script>

	<!-- More Scripts-->

	<script src="js/supersleight.js"></script>
	<script src="js/hoverIntent-r6.js"></script>
	<script src="js/jquery_005.js"></script>
	<script src="js/jquery_002.js"></script>
	<script src="js/esekeynew.js"></script>
	<script src="js/eseSite.js"></script>
	<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
	<script>
	$(function() {
	$( "#arrival_date" ).datepicker( { dateFormat: "dd/mm/yy" } );
	});
	</script>


<div id="fancybox-tmp"></div><div id="fancybox-loading"><div></div></div><div id="fancybox-overlay"></div><div id="fancybox-wrap"><div id="fancybox-outer"><div class="fancybox-bg" id="fancybox-bg-n"></div><div class="fancybox-bg" id="fancybox-bg-ne"></div><div class="fancybox-bg" id="fancybox-bg-e"></div><div class="fancybox-bg" id="fancybox-bg-se"></div><div class="fancybox-bg" id="fancybox-bg-s"></div><div class="fancybox-bg" id="fancybox-bg-sw"></div><div class="fancybox-bg" id="fancybox-bg-w"></div><div class="fancybox-bg" id="fancybox-bg-nw"></div><div id="fancybox-content"></div><a id="fancybox-close"></a><div id="fancybox-title"></div><a href="javascript:;" id="fancybox-left"><span class="fancy-ico" id="fancybox-left-ico"></span></a><a href="javascript:;" id="fancybox-right"><span class="fancy-ico" id="fancybox-right-ico"></span></a></div></div></body></html>