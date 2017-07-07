<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="google-site-verification" content="HbJLL_Oq1CXoVVcCBvNAXvtRIRxkMLeoiyyXRfqHdM8" />
<meta http-equiv="Content-Language" content="en-gb" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="title" content="Lakelets : Accommodation near Dorney Lake for the Olympics, 2012 and beyond " />
<meta name="status" content="final" />
<?php 
if (isset($template['metadata']) && $template['metadata'] != '') {
	include($template['metadata']);
} else {	
?>
<meta name="keywords" content="Olympics, Rental, Houseowners, Events, Dorney, Lake, Rowing, Eton, College, Legoland, Windsor, Cottages, Houses, Flats, Apartments, Homes, Availability, Accommodation, Self-catering, quality, discerning, comfort, luxury" />
<meta name="abstract" content="Lakelets - Make the most of the Olympics and rent out your home." />
<meta name="description" content="Lakelets arranges and provides homes where visitors can stay for anything ranging from a week to several months, near to Dorney Lake for the 2012 Olympics and other major events." />
<?php
} ?>
<meta name="security" content="Public" />
<meta name="charset" content="ISO-8859-1" />
<meta name="robots" content="index,follow" />
<title><?=$template['title_prefix']?><?=isset($template['title']) ? ' - '.$template['title'] : '' ?></title>
	<?php
	if (isset($template['jshead']) && $template['jshead']) {
				echo $template['jshead'];
	} ?>
<script type="text/javascript" src="webapp/lib/javascript/prototype.js"></script>
<script type="text/javascript" src="webapp/lib/javascript/scriptaculous.js?load=effects"></script>
<script type="text/javascript" src="webapp/lib/javascript/lightbox.js"></script>
<link rel="stylesheet" href="webapp/look_and_feel/css/questionnaire_form.css" type="text/css" media="screen" />
<link rel="stylesheet" href="webapp/look_and_feel/css/lightbox.css" type="text/css" media="screen" />
<link rel="icon" href="http://www.lakelets.uk.com/favicon.ico" type="image/x-icon" />
<style type="text/css">

body {
	font-size:100%;
	font-family: "Lucida Grande", tahoma, verdana, arial, sans-serif;
	line-height:1.125em; /* 16x1.125=18px */
}
p {
	margin: 0.5em 0;
}
p.updated {
	margin-top: 0;
	margin-bottom: 5px;
	color: blue;
}
h1 {
	vertical-align:top; 
	font-size:2em;
	line-height:1.125em;
	margin: 0.5em 0;
}
h2 {
	font-size:1.5em;
	line-height:1.125em;
	margin: 0.5em 0;
}
h3 {
	font-size:1.2em;
	line-height:1.125em;
	margin: 0.5em 0;
}
h4 {
	font-size:1em;
	font-style:italic;
	font-weight:normal; 
	line-height:1.125em;
	margin: 0.5em 0;
}
h5 {
	font-size:0.9em;
	line-height:1.125em;
	margin: 0.5em 0;
}
h6 {
	font-size:0.7em;
	font-weight:normal; 
	line-height:1.125em;
	margin: 0.5em 0;
}
#navcontainer
{
margin: 10px 0 0 30px;
padding: 0;
overflow:hidden;
}

#navcontainer ul
{
border: 0;
margin: 0;
padding: 0;
list-style-type: none;
text-align: center;
overflow:hidden;
}

#navcontainer ul li
{
display: block;
float: left;
border-right: 4px solid white;
width: 160px;
text-align: center;
padding: 0;
margin: 0;
overflow:hidden;
}

#navcontainer ul li a
{
background-image: url('webapp/look_and_feel/images/mainbg_normal.png');
height: 38px;
border-right: 4px solid white;
margin: 0 0 1px 0;
color: #ffffff;
text-decoration: none;
display: block;
float: left;
width: 160px;
text-align: center;
font: 11pt "Lucida Grande", tahoma, verdana, arial, sans-serif;
overflow:hidden;
}

#navcontainer ul li a:hover
{
background-image: url('webapp/look_and_feel/images/mainbg_hover.png');
border-color: silver;
}

#navcontainer ul li a:hover span
{
cursor:pointer;
}

#navcontainer li#active a
{
background-image: url('webapp/look_and_feel/images/mainbg_active.png');
}
ul.sidemenu
{
list-style:none;
padding:0;
margin:0;
display:block;
font: 9pt "Lucida Grande", tahoma, verdana, arial, sans-serif;
}
li.level1
{
position:relative;
text-align:left;
z-index:9;
}
li.level1 a
{
display: block;
line-height:30px;
height:33px;
width:150px;
padding-left:10px;
margin-bottom:4px;
color: #ffffff;
background-color:#83bfd7;
/*background-color:#05819b;*/
/*background-image: url('webapp/look_and_feel/images/sidebg_normal.png');*/
text-decoration: none;
}
li a#current, li a#current span.submenu
{
background-image: url('webapp/look_and_feel/images/sidebg_active.png');
}
li.level1 a:hover, span.submenu:hover
{
background-image: url('webapp/look_and_feel/images/sidebg_hover.png');
cursor:pointer;
}
li.level1 a.heading, li.level1 a.heading:hover
{
background-image: url('webapp/look_and_feel/images/sidebg_normal.png');
cursor:default;
}
li a.submenu {
	/*background:url("webapp/look_and_feel/images/sub.gif") right no-repeat;*/
}
div.submenu {
display:none;
z-index:20;
}
span.submenu {
dislay:block;
width:300px;
}
li.level1 ul {
position:absolute;
left:120px; /* IE */
top:15px;
list-style:none;
padding:0;
margin:0;
display:block;
font: 9pt "Lucida Grande", tahoma, verdana, arial, sans-serif;
}
li.level1>ul { 
	left:120px; 
} /* others */
li.level2 a
{
display: block;
line-height:25px;
height:43px;
width:100%;
padding-left:5px;
background-color: #ffffff;
text-decoration: none;
clear:both;
}
li.level1:hover 
{
z-index:10; 
}	
li.level1:hover div.submenu
{
display:block;
}
#messagediv
{
width:474px;
overflow:hidden;
display:block;
padding:4px;
font-size:0.8125em; /* 16x0.8125=13px */
line-height:1.2em;
min-height: 420px; 
}
#box1div
{
width:162px;
overflow:hidden;
display:block;
padding:8px 4px 4px 8px;
font-size:0.8125em; /* 16x0.8125=13px */
line-height:1.2em;
min-height: 245px; 
}
#box3div
{
width:794px;
overflow:hidden;
display:block;
clear:both;
float:left;
padding:4px 8px 4px 4px;
font-size:0.8125em; /* 16x0.8125=13px */
line-height:1.2em;
min-height: 220px; 
}
#box2div
{
width:311px;
overflow:hidden;
display:block;
padding:4px 8px 4px 4px;
font-size:0.8125em; /* 16x0.8125=13px */
line-height:1.2em;
min-height: 420px; 
}
div.square1div
{
width:233px;
overflow:hidden;
display:block;
padding:4px;
float:left;
font-size:0.8125em; /* 16x0.8125=13px */
line-height:1.2em;
height: 233px; 
}
div.square2div
{
width:233px;
overflow:hidden;
display:block;
/*margin-top:16px;*/
padding:4px;
float:left;
font-size:0.8125em; /* 16x0.8125=13px */
line-height:1.2em;
height: 233px; 
}
div.box4div
{
width:266px;
overflow:hidden;
display:block;
padding:4px;
font-size:0.8125em; /* 16x0.8125=13px */
line-height:1.2em;
}
.box1form fieldset.hidden, .box1form fieldset {
	background-image: url("webapp/look_and_feel/images/formbg.jpg"); 
	background-repeat: repeat-x; 
/*	background-color:#f0f0f0;*/
    float: left;
    border: 1px groove gray;
    padding:4px;
    margin: 0px;
    width: 144px;
}
.box1form textarea {
	font-size: 12px;
    width: auto;
}
.box1form input {
	font-size: 0.85em;
    width: auto;
}
.box1form label.element_label {
    display: block;
    margin: 0;
    width: 66px;
	font-size: 0.9em;
    text-align: right;
}
.box1form td {
	width: auto;
}
#footer {
	width:980px;
	float:left;
	background-color: rgb(255,152,0);
	padding:2px 0px 2px 0px;
	font-size:14px;
}
#footer a:link { 
	color: #000000;
	text-decoration:none; 
}
#footer a:visited { 
	color: #000000; 
	text-decoration:none; 
}

#footer a:hover
{
	color: #000000; 
	text-decoration:underline; 
}
input.readonly {
	background-color:#ffffff;
	border: 0;
	font-size:14px;
	line-height:16px !important;
	padding: 0;
}

</style>
</head>
<?php
if (isset($template['loadmap'])) { ?>
<body onload="initialize()" onunload="GUnload()" style="background-image: url('webapp/look_and_feel/images/bluebody.png'); background-repeat:repeat-x; text-align:center;margin-top:0;margin-bottom:0;">
<?php
} else { ?>
<body class="yui-skin-sam" style="background-image: url('webapp/look_and_feel/images/bluebody.png'); background-repeat:repeat-x; text-align:center;margin-top:0;margin-bottom:0;">
<?php 
} ?>
<!-- main container -->
<div style="margin: 0 auto; 
			text-align:center;
			background-color:#FFFFFF;
			display:inline-block;
			height:100%;
			width:980px;">
<!-- header, height 170px, with Lakelets logo, a panorama and the email address link -->
<div style="margin: 0 auto; 
			text-align:center;
			width:980px;">
<div style="width:0px;
			float:left;
			position:relative;">
<img src="webapp/look_and_feel/images/Logo-no-BG-small.jpg" alt="Lakelets" style="position:absolute;top:5px;left:0px;z-index:89;"/>
<a href="mailto:info@lakelets.uk.com" style="position:absolute;top:110px;left:740px;z-index:89;"><img style="border:0;" src="webapp/look_and_feel/images/email.png" alt="Email Us"/></a>
</div>
<div style="width:740px;
			height:170px;
			float:left;">
<?php echo $template["panorama"]?>
</div>
</div>
<!-- content, height variable, with navbar on left, content area in centre and additional column on right-->
<div style="margin: 0 auto; 
			text-align:center;
			width:980px;">
<!-- top menubar removed 02/03/2010 --> 
<div style="width:980px;
			height:38px;
			position:relative;
			overflow:hidden;
			margin-top: 2px;
			float:left;
			z-index:99;">
<!-- top menubar reinstated 29/06/2010 --> 
<?php echo $template["menu_items"]?>
</div> 
<div style="background-color:#FFFFFF; 
			width:175px;
			height:100%;
			float:left;
			padding-top:4px;
			text-align:left;">
<?php if ($template['title'] != 'Homeowners') { ?>
<script>
function googleTranslateElementInit() {
  new google.translate.TranslateElement({
    pageLanguage: 'en'
  });
}
</script><script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<?php } ?>
<?php echo $template["side_menu"]?>
<?php echo isset($template['box1']) ? '<div id="box1div">'.$template['box1'].'</div>' : ''; ?>
</div>
<div style="background-color:#FFFFFF; 
			width:482px;
			float:left;
			padding-left:0px;
			padding-top:0px;
			text-align:left;
			padding-right:0px;">

<?php echo isset($template['mainbox']) ? '<div id="messagediv">'.$template['mainbox'].'</div>' : ''; ?>
<?php echo isset($template['square1']) ? '<div class="square1div">'.$template['square1'].'</div>' : ''; ?>
<?php echo isset($template['square2']) ? '<div class="square2div">'.$template['square2'].'</div>' : ''; ?>
<?php echo isset($template['square3']) ? '<div class="square1div">'.$template['square3'].'</div>' : ''; ?>
<?php echo isset($template['square4']) ? '<div class="square2div">'.$template['square4'].'</div>' : ''; ?>
<?php echo isset($template['box3']) ? '<div id="box3div">'.$template['box3'].'</div>' : ''; ?>
<?php echo isset($template['box4']) ? '<div class="box4div">'.$template['box4'].'</div>' : ''; ?>
<?php echo isset($template['box5']) ? '<div class="box4div">'.$template['box5'].'</div>' : ''; ?>
<?php echo isset($template['box6']) ? '<div class="box4div">'.$template['box6'].'</div>' : ''; ?>
</div>
<div style="background-color:#FFFFFF; 
			width:323px;
			float:left;
			padding-left:0px;
			padding-top:0px;
			text-align:left;
			padding-right:0px;">
<?php echo isset($template['box2']) ? '<div id="box2div">'.$template['box2'].'</div>' : ''; ?>
</div>
<div style="margin-top: 10px; 
			text-align:center;
			width:980px;">

<div style="width:980px;
			float:left;
			background-color:#FFFFFF;
			padding:2px 0px 2px 0px;">
<?php echo isset($template['box7']) ? '<div>'.$template['box7'].'</div>' : ''; ?>
<?php echo isset($template['box8']) ? '<div>'.$template['box8'].'</div>' : ''; ?>
<?php echo isset($template['box9']) ? '<div>'.$template['box9'].'</div>' : ''; ?>
</div>
<div style="width:970px;
			float:left;
			background-color:#FFFFFF;
			padding:2px 0px 2px 10px;
			text-align:left;">
<?php echo isset($template['box10']) ? '<div>'.$template['box10'].'</div>' : ''; ?>
</div>
<div id="footer">
<?php echo isset($template['footer']) ? str_replace(array('<p>','</p>'), '', $template["footer"]) : 'Footer content'; ?>
</div>
</div>
</div>
<div id="shadow" style="position:absolute;top:0;left:0;z-index:99;width:100%;height:500%;opacity:0.5;filter:alpha(opacity=50);background-color:#000000;<?=$template['popup_style']?>" onclick="this.style.display='none';document.getElementById('popup').style.display='none';"></div>
<div id="popup" style="position:absolute;top:10%;left:35%;z-index:100;width:350px;background-color:#ffffff;<?=$template['popup_style']?>">
<!-- Black Table Border -->
<table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td style="background-color:#000000">
<!-- Main Table -->
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr><td align="center" style="background-color:<?=$template['popup_color']?>;"><?=$template['popup_contents']?> 
<table width="100%" style="background-color:<?=$template['popup_color']?>;"><tr><td align="right" colspan="2"><button onclick="document.getElementById('shadow').style.display='none';document.getElementById('popup').style.display='none';">&nbsp;&nbsp;Close&nbsp;&nbsp;</button></td></tr></table>
</td></tr>
</table></td></tr></table></div>
</div>
</body>
</html>