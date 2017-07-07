<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index($theme=false)
	{
		/*
		 * TODO set up model(s) to populate header, menu, sidebar, page content and footer.
		 * Select theme from Jquery UI options on Welcome page.
		 * Tables: settings, settingoptions, settingvalues (or config...)
		 * adapt menu to use jqui theme css
		 * 
		 */
		$data['themes'] = array();
		$data['theme'] = $this->content->getSetting('theme');
		if (strpos($_SERVER["SERVER_NAME"],'sheephouse') !== false) {
			$data['company_id'] = 2;
		} elseif (strpos($_SERVER["SERVER_NAME"],'bookings') !== false) {
			$data['company_id'] = 2;
		} else {
			$data['company_id'] = 0;
			$this->content->getThemes($data, $theme);
		}
		if ($this->uri->segment(1)) {
			$data['select_val'] = $this->uri->segment(1);
		} else {
			$data['select_val'] = 'home';
		}
		
		if ($data['select_val'] == 'counter.php') {
			$this->counter();
			die;
		}
		$data['select_key'] = 'page_name';
		$this->content->getPage($data);
		$this->content->getMenu($data);
		if ($data['select_val'] == 'rates') {
			$this->content->getProperties($data);
		}
		if ($data['select_val'] == 'guestbook') {
			$this->content->getProperties($data);
			$this->content->manageGuestbook($data);
		}
		$this->load->view('welcome_message_'.$data['company_id'],$data);
	}
	public function theme($theme=false)
	{
		/*
		 * TODO set up model(s) to populate header, menu, sidebar, page content and footer.
		 * Select theme from Jquery UI options on Welcome page.
		 * Tables: settings, settingoptions, settingvalues (or config...)
		 */
		$data['themes'] = array();
		$data['theme'] = 'le-frog';
		if ($handle = opendir($_SERVER["DOCUMENT_ROOT"].'/css/themes')) {
		    while (false !== ($entry = readdir($handle))) {
		    	if (substr($entry,0,1) != '.') {
			        $data['themes'][] = $entry;
			        if ($theme == $entry) {
			        	$data['theme'] = $entry;
			        }
		    	}
		    }
		
		    closedir($handle);
		}
		$this->content->getMenu($data);
		$this->content->getPage($data);
		$this->load->view('welcome_message_0',$data);
		//$this->load->view('responsivegridsystem',$data);
	}
	
	public function counter() {
		// Initialize working values 
		
		$rfr=getenv ("HTTP_REFERER");  
		
		
		// update activity log
		
		$insert = "INSERT INTO activity_log
		
		            VALUES ('00002',
		
		                    0,
		
		                    '".$_GET['p']."',
		
		                    now(),
		
		                    '".$_SERVER['REMOTE_ADDR']."', 
		
		                    '".$_SERVER['HTTP_USER_AGENT']."', 
		
		                    '".$rfr."')";
		
		$add_member = $this->db->query($insert);
		if ($this->db->affected_rows() == 0) {		
		    die('unable to insert into activity log');
		
		}
		
		$new = ImageCreate(1,2); // make tiny image 
		
		$bgc = ImageColorAllocate($new,255,255,255); // background color 
		
		$tc = ImageColorAllocate($new,0,0,0); // text color 
		
		ImageFilledRectangle($new,0,0,150,30,$bgc); // add background 
		
		
		
		// Send image with expired header so that it will not be cached, then quit 
		
		Header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); 
		
		Header("Content-type: image/jpg"); 
		
		ImageJPEG($new); 
		
		ImageDestroy($new); 
		
		die; // make sure nothing else is sent 

		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */