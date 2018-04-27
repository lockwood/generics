<?php
// +----------------------------------------------------------------------+
// | TARIFF  - EseSite booking tariff display - Company 4                 |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003-2006 Esekey Limited                               |
// +----------------------------------------------------------------------+
// | Author:  Dave Lockwood <dave@esekey.com>                             |
// +----------------------------------------------------------------------+
//
// $Id: 4/tariff.php,v 1.05 2006/10/19
//

$sleeparray = array (1=>"2", 2=>"5", 3=>"2", 4=>"2", 5=>"4", 9=>"3-6", 10=>"2");
$typearray = array (1=>"Studio with double bed, kitchenette and shower room",
                    2=>"Master bedroom with double bed and single bed, 2nd small bedroom with twin beds and en-suite bathroom. Additional shower room, lounge/dining room, kitchen",
                    3=>"One bedroom with queen bed, lounge with sofa bed, kitchen and en-suite shower",
                    4=>"Large studio with double bed, sofa bed, kitchen and en-suite shower",
                    5=>"Master bedroom with double bed & en-suite bathroom, 2nd bedroom with twin beds, shower room, separate lounge, dining room  & kitchen, garden",
                    9=>"Master bedroom with double bed  & en-suite bath, two twin bedded rooms with en-suite showers, kitchen / dining / lounge area, entrance lobby",
                    10=>"One bedroom with queen bed, lounge with sofa bed, kitchen and en-suite shower");
$promoarray = $this->db->query("SELECT *
                                       FROM promotions
                                      WHERE company_id = '00004'
                                        AND active_flag = 'Y'
										AND end_date > DATE_ADD(CURDATE(), INTERVAL min_nights DAY )
                                   ORDER BY end_date;")->result_array();
$today = date('Y-m-d');                    
?>
<table>
  <?php
 if (count($promoarray) > 0) {
 	if (count($promoarray) > 1 ) {
 		$plural = 's';
 		$limit = 'Only one offer applicable per booking.<br />';
 	} else {
 		$plural = '';
 		$limit = '';
 	}
	?>
  <tr>
    <th colspan="5">Promotional Offer<?=$plural?></th>
  </tr>
 	<?php
 	foreach ($promoarray as $promo) {
 		if ($promo['start_date'] < $today) {
			$valid = 'Valid until '.date('jS F', strtotime($promo['end_date'])).'.';	
 		} else {
 			$valid = 'Valid from '.date('jS F', strtotime($promo['start_date'])).' until '.date('jS F', strtotime($promo['end_date'])).' inclusive.';
 		}
 		?>
  <tr>
    <td colspan="5"><strong><?=$promo['title'];?></strong><br /><?=$valid;?><br />To claim, enter code PROMO<?=$promo['promotion_id']?> in Additional Information on the booking form.</td>
  </tr>
 		<?php
	}
	?>
  <tr>
    <td colspan="5"><?=$limit?>The price shown on the booking form will be the full price - the promotional offer will be applied when the provisional booking is confirmed. <br />&nbsp;</td>
  </tr>
	<?php
 }
  ?>
  <tr>
    <th style="text-align:center;">Self Catering</th><th style="text-align:left;">Type</th><th style="text-align:center;">Slps</th><th style="text-align:center;">&pound;</th><th style="text-align:center;">Peak<sup>*</sup></th>
  </tr>
  <?php/*$chalet1_rate = 60; // 86 for Olympics$chalet2_rate = 100; // 172 for Olympics$chalet3_rate = 65; // 114 for Olympics$southlands_rate = 110; // 172 for Olympics$ww_rate = 125; // 214 for Olympics// peak rates re-instated for 2014-15$chalet1_rate_p = 70; // 86 for Olympics$chalet2_rate_p = 120; // 172 for Olympics$chalet3_rate_p = 75; // 114 for Olympics$southlands_rate_p = 135; // 172 for Olympics$ww_rate_p = 140; // 214 for Olympics// */  
$low_array = array(1=>60,2=>120,3=>75,4=>75,5=>150,9=>140,10=>75);
$high_array = array(1=>70,2=>120,3=>85,4=>85,5=>170,9=>140,10=>85);
foreach ($resourcearray as $propertyrow) {
//    foreach ($pricearray as $pricerow) {
//        if ($pricerow['price_code'] == $propertyrow['price_code']) {
            echo '<tr><td style="text-align:center; vertical-align:top;">'.$propertyrow['property_name'].'</td>';
            echo '<td>'.$typearray[$propertyrow['property_id']].'</td>';
            echo '<td align="center">'.$sleeparray[$propertyrow['property_id']].'</td>';
            echo '<td align="center">'.number_format($low_array[$propertyrow['property_id']]*7,0).'</td>';            echo '<td align="center">'.number_format($high_array[$propertyrow['property_id']]*7,0).'</td></tr>';            //        }			echo '<tr><th colspan="5" style="height:1px;padding-top:0;padding-bottom:0;"></th></tr>';
//    }
} ?>
  <tr>
    <td colspan="5">&nbsp;</td>
  </tr>
  <tr>    <td colspan="5"><b>*</b>Peak&nbsp;rate&nbsp;periods:<br/>18.06.2018&nbsp;-&nbsp;09.09.2018<br/>19.12.2018&nbsp;-&nbsp;06.01.2019<br/></td>  </tr>  <tr>
    <td colspan="5">Self Catering Prices include VAT and Service, towels, linen, heating, lighting and weekly cleaning. One week minimum let.<br/><br/>
Pets &pound;5.00 per night per pet.</td>
  </tr>
  <tr>
    <td colspan="5">&nbsp;</td>
  </tr>
  <tr>    <td colspan="5"><b>B&amp;B</b></td>  </tr>  <tr>    <td colspan="5">We occasionally do the odd B&amp;B on a &#34;Room only&#34; basis. Please call for availability.</td>  </tr>  <tr>    <td colspan="5">&nbsp;</td>  </tr>
</table> 
