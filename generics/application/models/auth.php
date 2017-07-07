<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Auth extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}

	function checkuser(){


		$this->load->helper('url');
		$this->load->helper('cookie');
		$adminuser = $this->input->cookie('nuserid');
		if (!$adminuser){
			redirect('http://www.angloinfo.com', 'refresh');

		}

	}

    /**
     * 
     * Authenticate the user using hashkey
     * 
     * @param (string) $hashkey
     * @return array
     */
    function authenticate($hashKey)
    {
    	$SQL = "SELECT Username, LastLoginDate, PKID 
	  	FROM dotnet.users 
	  	WHERE MD5(CONCAT(users.PKID,users.username,users.LastLoginDate)) = '".$hashKey."'
	  	 AND IsApproved IS TRUE 
	  	 AND IsLockedOut IS FALSE
	 	LIMIT 1;";
  		$query = $this->db->query($SQL) ;
		$result = $query->row_array();
		if (isset($result['LastLoginDate']) && $result['LastLoginDate'] < date('Y-m-d H:i:s', strtotime('- 24 hours'))) {
			// timeout increased from 8 to 24 hours DL 16/06/2014
			// login expired
			return false;
		}
    	return $result;
    } 
    
    /**
     * 
     * Authenticate the myai user using hashkey
     * 
     * @param (string) $hashkey
     * @return array
     */
    function myai_authenticate($hashKey)
    {
    	$SQL = "SELECT meta.*, users.email AS Username,  FROM_UNIXTIME(users.last_login) AS LastLoginDate 
	  	FROM 101ai.users, 101ai.meta 
	  	WHERE MD5(CONCAT(users.id,users.email,users.last_login)) = '".$hashKey."'
	  	 AND users.active = 1 
	  	 AND users.locked = 0
		 AND users.id = meta.user_id
	 	LIMIT 1;";
  		$query = $this->db->query($SQL) ;
		$result = $query->row_array();
		if (isset($result['LastLoginDate']) && $result['LastLoginDate'] < date('Y-m-d H:i:s', strtotime('- 24 hours'))) {
			// timeout increased from 8 to 24 hours DL 16/06/2014
			// login expired
			return false;
		}
    	return $result;
    } 
    
    /**
     * 
     * Authenticate the mail user using hashkey
     * 
     * @param (string) $hashkey
     * @return array
     */
    function mail_authenticate($hashKey)
    {
        $sql = "select invoice_id, 'Pay Via Email' as Username, NOW() AS LastLoginDate, status from dotnet.invoice
            where MD5(invoice_id)='".$hashKey."'
            and deleted<>'Y'";
		$query = $this->db->query($sql);
		$result = $query->row_array();
		if (!isset($result['status'])) {
			// not a valid invoice for payment
			return false;
		}
    	return $result;
    } 
    
   /**
     * 
     * Authenticate the PayPal user using hashkey
     * 
     * @param (string) $hashkey
     * @return array
     */
    function ppal_authenticate($hashKey)
    {
        $sql = "select invoice_id, 'Pay Via PayPal' as Username, NOW() AS LastLoginDate, status from dotnet.invoice
            where MD5(invoice_id)='".$hashKey."'
            and deleted<>'Y'";
		$query = $this->db->query($sql);
		$result = $query->row_array();
		if (!isset($result['status'])) {
			// not a valid invoice for payment
			return false;
		}
    	return $result;
    } 
    
    /**
     * 
     * Check the user whether user logged in or not
     * 
     * @return Boolean
     */
 	public function is_logged_in()
    {
        $user = $this->session->all_userdata();
        return isset($user);
    }
    
    /**
     * 
     * Add extra alias users for a selected primary user id in a selected region.
     * 
     * @return number of aliases added OR if any errors occur, an array of usernames that were not added
     */
    public function create_aliases($usernames=array(), $primary_id='', $primary_pw='', $email, $sitecode, $additional_data = false)
	{
		$added = 0;
		$errors = array();
		foreach($usernames as $username) {
			// If username is taken, use username1 or username2, etc.
			$test_username = $username;
			for($i = 0; $this->username_check($test_username, $sitecode); $i++)
			{
				if($i > 0)
				{
					$test_username = $username.$i;
				}
			}
			$username = $test_username;
			// If a group ID was passed, use it
			if(isset($additional_data['group_id']))
			{
				$group_id = $additional_data['group_id'];
				unset($additional_data['group_id']);
			}
	
			// Otherwise use the default group 3
			else
			{
				$group_id = 3;
			}
	
			$regionCode = $this->config->item('regionCode');
			$regionCode = intval($regionCode);
	
			$query = $this->db->query("select max(MEMBER_ID)+1 as maxid from 101ai.users where site =".$regionCode);
	
			$row = $query->row();
			$maxid = $row->maxid;
	
	
			// Users table.
			$data = array(
				'username'   => $username,
				'password'   => $primary_pw,
				'email'      => $email,
				'group_id'   => $group_id,
				'ip_address' => '',
				'created_on' => now(),
				'last_login' => now(),
				'active'     => 1,
				'dormant'    => 2,
				'primary_id' => $primary_id,
				'site' 		 => $regionCode,
				'MEMBER_ID'  =>	$maxid
			);
	
			$this->db->insert('users', $data);
	
			// Meta table.
			$id = $this->db->insert_id();
	
			$data = array('user_id' => $id);
	
			/**
			 * Columns in your meta table,
			 * id not required.
			 **/
				
			$columns = array(	'first_name', 
								'last_name', 
								'title', 
								'company', 
								'phone',
								'dob',
								'location',
								'nationality',
								'country',
								'bio',
								'privacy',
								'securityquestion',
								'securityanswer',
								'lat',
								'lon',
								'mapzoom',
								'profilepicid',
								'forumfilter',
								'classifiedsfilter',
								'whatsonfilter'
			);
			foreach ($columns as $input)
			{
				if (is_array($additional_data) && isset($additional_data[$input]))
				{
					$data[$input] = $additional_data[$input];
				}
			}
	
			$this->db->insert('meta', $data);
	
			if($this->db->affected_rows() > 0) {
				$added++;
			} else {
				$errors[] = $username;
			}
		}
		if (count($usernames) == $added) return $added;
		return $errors;
	}
	
	public function username_check($username='',$sitecode=0)
	{
		if (empty($username)|| $sitecode==0)
		{
			return FALSE;
		}
		return $this->db->where('username', $username)
		->where('site', $sitecode)
		->count_all_results('users') > 0;
	}

	
}
