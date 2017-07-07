<?php
// +----------------------------------------------------------------------+
// |GUEST_REVIEW_FORM  - Company 4 - Show guest review form               |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003-2013 Esekey Limited                               |
// +----------------------------------------------------------------------+
// | Author:  Dave Lockwood <dave@esekey.com>                             |
// +----------------------------------------------------------------------+
//
// $Id: 4/guest_review_form.php,v 1.00 2013/03/03
//
if (isset($_SESSION['thanks'])) {
	// form submission complete, display thank you message and remove it from the session
	echo $_SESSION['thanks'];
	unset($_SESSION['thanks']);
	return;
}

$sel = array(6=>'');
foreach($resourcearray as $propertyrow) {
	$sel[$propertyrow['property_id']] = '';
}

if (isset($_POST) && count($_POST) > 0) {
	// form has been submitted, but errors have been found in guest_review_validate.php, otherwise we would not get here....
	$q1 = 0;
	$q2 = 0;
	$q3 = 0;
	$q4 = 0;
	$q5 = 0;
	foreach($_POST as $k=>$v) {
		if (in_array($k,array('name','arrival_date','property','q1','q2','q3','q4','q5','comments'))) {
			$$k = $v;
		}
	}
} else {
	$form_errors = '';
	$name = '';
	$arrival_date = '';
	$property = 0;
	$q1 = 0;
	$q2 = 0;
	$q3 = 0;
	$q4 = 0;
	$q5 = 0;
	$comments = ''; 
}
if ($property > 0) $sel[$property] = 'selected="selected"';
$checked = array(0=>'',1=>' checked="checked"');
$property = '<select name="property" id="property" style="font-size:1em;">
				<option value="0">Please Specify...</option>
				<option value="6" '.$sel[6].'>B &amp; B </option>';
foreach ($resourcearray as $propertyrow) {
	$property .= '
				<option value="'.$propertyrow['property_id'].'" '.$sel[$propertyrow['property_id']].'>'.$propertyrow['property_name'].'</option>';
}
$property .= '
			</select>';
?>
<h1>Guestbook</h1>
<h2>If you have stayed with us, please use this form to provide feedback.</h2>
<?=$form_errors?>
<form name="eform" action="/guestbook" method="post">
<input type="hidden" name="q1" value="5" />
<input type="hidden" name="q2" value="5" />
<input type="hidden" name="q3" value="5" />
<input type="hidden" name="q4" value="5" />
<input type="hidden" name="q5" value="5" />

<table style="width:200px; margin:10px">
<tr><td colspan="6"><strong>About you and your booking</strong></td></tr>
<tr><td>Your name<span style="color:red;">*</span></td><td colspan="5"><input class="input" maxlength="20" size="20" type="text" id="name" name="name" value="<?=$name?>"/></td></tr>
<tr><td>Arrival Date<span style="color:red;">*</span></td><td colspan="5"><input class="input" maxlength="10" size="10" type="text" id="arrival_date" name="arrival_date" value="<?=$arrival_date?>"/></td></tr>
<tr><td>Accommodation<span style="color:red;">*</span></td><td colspan="5"><?=$property?></td></tr>
<tr><td colspan="6">Please add your review comments<span style="color:red;">*</span></td></tr>
<tr><td colspan="6"><textarea name="comments" cols="50" rows="10" class="input"><?=$comments?></textarea></td></tr>
<tr><td colspan="6"><span style="color:red;">*</span> Required</td></tr>
<tr><td colspan="3">&nbsp;</td><td colspan="3" align="center"><input type="submit" value="Submit" class="input" name="submit" id="submit"/></td></tr>
</table>
</form>