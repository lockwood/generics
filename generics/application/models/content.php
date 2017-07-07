<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Content extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}

	function getThemes(&$data, $theme) {
		if ($handle = opendir($_SERVER["DOCUMENT_ROOT"].'/css/themes')) {
		    while (false !== ($entry = readdir($handle))) {
		    	if (substr($entry,0,1) != '.'){
			        $data['themes'][] = $entry;
			        if ($theme == $entry) {
			        	$data['theme'] = $entry;
			        }
		    	}
		    }
		
		    closedir($handle);
		}
	}
	
	function getMenu(&$data) {
		$query = $this->db->query("SELECT section_id, 
                                           description
                                      FROM section
                                     WHERE company_id = ".$data['company_id']."
                                       AND section_id <> 5
                                       AND active_flag = 'Y'
                                       ORDER BY section_id ASC;");
		foreach($query->result_array() as $row) {
			$data['section'][$row['section_id']]['name'] = $row['description'];
			$data['section'][$row['section_id']]['active'] = false;
			$query2 = $this->db->query("SELECT t1.page_id,
	                                        t1.menu_sequence, 
	                                        t2.page_name,
	                                        t2.page_title,
	                                        t2.content_source,
	                                        t1.active_flag,
	                                        'dummystring' AS page_url 
	                                   FROM section_page AS t1, 
	                                                page AS t2 
	                                  WHERE t1.company_id = ".$data['company_id']."
	                                    AND t1.section_id = ".$row['section_id']."
	                                    AND t1.menu_sequence > 0
	                                    AND t1.active_flag = 'Y'
	                                    AND t2.active_flag = 'Y'
	                                    AND t1.company_id = t2.company_id
	                                    AND t1.page_id = t2.page_id
	                               ORDER BY t1.menu_sequence");
			if ($query2->num_rows() > 0) {
				foreach($query2->result_array() as $row2) {
					$data['section'][$row['section_id']]['menu'][] = $row2;
					if ($data['select_val'] == $row2['page_name']) {
						$data['section'][$row['section_id']]['active'] = true;
					}
				}
			}
		} 
	}
	
	function getPage(&$data){
		if ($data['company_id'] != 0) { //Look for company details in database
	
		    $query = $this->db->query("SELECT company_name, 
		                                      company_code,
		                                      company_telephone,
		                                      company_fax,
		                                      company_email,
		                                      availability_flag,
		                                      booking_flag 
		                                 FROM company 
		                                WHERE company_id = ".$data['company_id']." 
		                                  AND active_flag = 'Y'");
		
			$row = $query->row_array();
		
		    $data['company_name'] = $row['company_name']; 
		    $data['company_code'] = $row['company_code']; 
		    $data['company_telephone'] = $row['company_telephone'];
		    $data['company_fax'] = $row['company_fax'];
		    $data['company_email'] = $row['company_email'];
		    $data['availability_flag'] = $row['availability_flag'];
		    $data['booking_flag'] = $row['booking_flag'];
		} else { 
		    $data['company_name'] = 'Esekey'; 
		    $data['company_code'] = '00000';
		    $data['company_telephone'] = '07860 832741'; 
		    $data['company_fax'] = '07860 832741'; 
		    $data['company_email'] = 'enquiries@esekey.com'; 
		    $data['availability_flag'] = 'N';
		    $data['booking_flag'] = 'N';
		}

	    $query = $this->db->query("SELECT t1.page_id,
                                  t1.page_title,
                                  t1.page_name, 
                                  t1.content_source, 
                                  t2.section_id,
                                  t2.menu_sequence
                             FROM page as t1,
                                  section_page as t2
                            WHERE t1.company_id = ".$data['company_id']."
                              AND t1.company_id = t2.company_id
							  AND t2.active_flag = 'Y'
                              AND t1.page_id = t2.page_id
                              AND t1.".$data['select_key']." = '".$data['select_val']."'");
		$row = $query->row_array();
		if (!isset($row['page_title'])) {
			print_r($query);
			echo "SELECT t1.page_id,
                                  t1.page_title,
                                  t1.page_name, 
                                  t1.content_source, 
                                  t2.section_id,
                                  t2.menu_sequence
                             FROM page as t1,
                                  section_page as t2
                            WHERE t1.company_id = ".$data['company_id']."
                              AND t1.company_id = t2.company_id
							  AND t2.active_flag = 'Y'
                              AND t1.page_id = t2.page_id
                              AND t1.".$data['select_key']." = '".$data['select_val']."'";
			die;
		}
	
		//$data['content_title'] = str_replace('-', ' ', $row['page_name']);
		$data['content_title'] = $row['page_title'];
		$data['page_title'] = $data['company_name'].' - '.$row['page_title'];
		
		$data['page_id'] = $row['page_id'];
		
		$sql =  "SELECT element.* FROM element,page,page_element 
				  WHERE page.".$data['select_key']." = '".$data['select_val']."' 
					AND page.page_id = page_element.page_id
					AND page_element.element_id = element.element_id
					AND page.company_id = ".$data['company_id']."
					AND page_element.company_id = ".$data['company_id']."
					AND element.company_id = ".$data['company_id']."
					AND page.active_flag = 'Y'
					AND page_element.active_flag = 'Y'
					AND element.active_flag = 'Y'
					ORDER BY page_element.sequence;";
		// default keywords
		$data['keywords'] = 'cosy holiday cottages in rural berkshire, short term accommodation lets in maidenhead, b and b in Maidenhead, b&amp;b in Maidenhead, b&amp;b Maidenhead, bandb in Maidenhead, bandbs in Maidenhead, bb Maidenhead, bbs Maidenhead, bed and breakfast in Maidenhead, bed and breakfast Maidenhead, bed and breakfasts in Maidenhead, holidays in Maidenhead, motel in Maidenhead, motels in Maidenhead, Maidenhead b&amp;b, Maidenhead b&amp;bs, Maidenhead bbs, Maidenhead bed and breakfasts, vacations in Maidenhead, Windsor, Maidenhead, Legoland, Cottages, Availability, Accommodation, Self-catering, B&amp;B, Cookham, Eton, Bray, quality, discerning, comfort, luxury, Self catering accommodation, Bed &amp; Breakfast, holiday cottages, short stays, efficiency studio apartment with full kitchenette, Berkshire, London, Thames Path, Fat Duck, Bed and Breakfast, Accommodation in Maidenhead, Accommodation in Berkshire, Accommodation near Legoland, Hotels in Maidenhead, Thames path, Guesthouse accommodation, Short let stays, Holidays in Maidenhead, Holiday rentals, Holidays near Legoland, Henley, Ascot, Slough, Basingstoke, Reading, Holyport, Cycling the Thames Path, Walking the Thames Path, Boulters Lock, Fat Duck Restaurant, Waterside Restaurant, Sheephouse Manor, Where to stay Maidenhead, Sheephouse Trout Fishery,short term accommodation lets,short term lets, short lets, professional lets, business lets';

		$data['content'] = '';
		$data['pagemenu'] = array();
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			foreach($query->result_array() as $row) {
				if ($row['element_type'] == 'keywords') {
					$data['keywords'] = $row['text'];
				}
				if ($row['element_type'] == 'top' || $row['element_type'] == '') {
					$data['content'] .= $row['text'];
					if (strlen($row['image_name']) > 0) {
						$data['i1600'] = explode(',',$row['image_name']);
					}
				}
				if ($row['element_type'] == 'menu') {
					$data['pagemenu'][] = $row;
				}
			}
		}

		$sql =  "SELECT reviews.* FROM reviews 
				  WHERE reviews.company_id = 4
					AND char_length(comments) > 80
					AND review_status = 'Y'
					ORDER BY RAND() LIMIT 2;";
		$data['reviews'] = array();
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			foreach($query->result_array() as $row) {
				$data['reviews'][] = array('comments'=>$row['comments'], 'guest'=>$row['guest_info'], 'date'=>$row['arrival_date']);
			}
		}

	}
	
	function getProperties(&$data) {
		$property_order = "FIELD(property_id, 1, 2, 3, 4, 10, 9, 5)";
		$data['resourcearray'] = $this->db->query("SELECT *
                               				        FROM property
                                      				WHERE company_id = '00004'
                                      				  AND active_flag = 'Y'
                                   				ORDER BY ".$property_order)->result_array(); 
		
	}
	
	function manageGuestbook(&$data) {
		$data['form_errors'] = '';
		if (!isset($_POST['name'])) return;
		if ($_POST['name'] == '' || $_POST['property'] == 0 || $_POST['arrival_date'] == '') {
			$data['form_errors'] .= '<p style="color:red; font-weight:bold;margin-left:12px;margin-bottom:0;">Please enter a reviewer name, select the date of your arrival and select the accommodation you are reviewing</p>';
		} else {
			$today = date('Y-m-d');
			$bits = explode('/',$_POST['arrival_date']);
			if (count($bits) != 3) {
				$data['form_errors'] .= '<p style="color:red; font-weight:bold;margin-left:12px;margin-bottom:0;">Please select a valid Arrival Date (dd/mm/YYYY).</p>';
			} else {
				$arrival = $bits[2].'-'.$bits[1].'-'.$bits[0];
				if ($arrival > $today) {
					$data['form_errors'] .= '<p style="color:red; font-weight:bold;margin-left:12px;margin-bottom:0;">Your arrival date cannot be in the future</p>';
				}
				$earliest = date('Y-m-d', strtotime($today.' - 1 year'));
				if ($arrival < $earliest) {
					$data['form_errors'] .= '<p style="color:red; font-weight:bold;margin-left:12px;margin-bottom:0;">Sorry, we cannot accept reviews for visits more than one year ago.</p>';
				}
			}
		}
		if ($data['form_errors'] == '') {
			// all information is valid. Insert the review and post the thank you message
			$name = $_POST['name'];
			$property = $_POST['property'];
			$comments = $_POST['comments'];
			$q1 = 0;
			$q2 = 0;
			$q3 = 0;
			$q4 = 0;
			$q5 = 0;
			$useable = false;
			if (strlen($comments) > 1) $useable = true;
			foreach($_POST as $k=>$v) {
				if (in_array($k,array('q1','q2','q3','q4','q5'))) {
					$$k = $v;
				}
			}
			if ($q1 == 0 || $q2 == 0 || $q5 == 0) $useable = false;
			if ($useable) {
				$insert = "INSERT INTO reviews 
		    	           VALUES ('00004',
		        	               0,
		            	           '".$this->db->escape_str($name)."', 
		                	       '', 
		                    	   '".$arrival."', 
			                       ".$property.", 
		    	                   ".$q1.", 
		        	               ".$q2.", 
		            	           ".$q3.", 
		                	       ".$q4.", 
		                    	   ".$q5.", 
								   '".$this->db->escape_str($comments)."',
		    	                   'N',
		         	               now(),
		    	                   'guest', 
		       		               null)";
				//echo $insert; //
				//die;
		    	$add_member = $this->db->query($insert);
		    	if ($this->db->affected_rows() == 0) {
		        	die("Sorry, a database error has occurred. Please try again later.");
		    	}
				$_SESSION['thanks'] = '<p style="color:green; font-weight:bold;margin-left:12px;margin-bottom:0;">Thank you for taking the time to give us your feedback. We value all comments made by our guests, and welcome your comments so we can continue to improve your stay.</p>';
			} else {
				$data['form_errors'] .= '<p style="color:red; font-weight:bold;margin-left:12px;margin-bottom:0;">Please add your review comments in the text box below.</p>';
			}
		}
	}
	
	function getSetting($setting){
		$sql = "SELECT settingoptions.option FROM settings, settingoptions, settingvalues
				 WHERE settings
		";
	}

	function setSetting($setting,$value){
		$sql = "SELECT settingoptions.option FROM settings, settingoptions, settingvalues
				 WHERE settings
		";
	}

}
