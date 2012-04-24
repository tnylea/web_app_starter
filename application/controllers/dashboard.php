<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('tank_auth');
		$this->load->library('my_layout');
	}

	function index()
	{
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			
			$username = $this->tank_auth->get_username();
			$is_user_account = false;
			
			if($this->users->get_user_by_username($username)->id == $this->tank_auth->get_user_id()){
				$this->load_user_dashboard();
			} else {
				redirect('');
			}
		
		
		}
	}
	
	private function load_user_dashboard(){
		$data['user_id']	= $this->tank_auth->get_user_id();
		$data['username']	= $this->tank_auth->get_username();
		$this->my_layout->dashboard_content('dashboard', $data);
	}
	
}