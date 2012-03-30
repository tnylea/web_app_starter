<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Web_app_starter
{
	private $error = array();

	function __construct()
	{
		$this->ci =& get_instance();

		$this->ci->load->config('tank_auth', TRUE);

		$this->ci->load->library('session');
		$this->ci->load->database();
		$this->ci->load->model('tank_auth/users');
	}

	function username_exists($username)
	{
		return !$this->ci->users->is_username_available($username);
	}
	
}