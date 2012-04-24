<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('tank_auth');
		//$this->load->model('tank_auth/users');
		$this->load->library('my_layout');
	}

	function index()
	{	
	
		if($this->users->get_user_by_username($this->uri->segment(2))){
		
			$username = $this->uri->segment(2);
			$user = $this->users->get_user_by_username($username);
			$user_admin = false;
		
			if(!$this->tank_auth->is_logged_in()){
				$user_admin = false;
			} else {
				if($this->users->get_user_by_username($username)->id == $this->tank_auth->get_user_id()){
					$user_admin = true;
				} else {
					$user_admin = false;
				}
			}
		
			$data['user_id']	= $user->id;
			$data['username']	= $username;
			$data['email'] = $user->email;
			$data['activated'] = $user->activated;
			$data['banned'] = $user->banned;
			$data['created'] = $user->created;
			
			$data['user_admin'] = $user_admin;
			$this->my_layout->dashboard_content('user', $data);

		
		} else {
		
			echo '404 not found';
		
		}
		
	}
		
}
