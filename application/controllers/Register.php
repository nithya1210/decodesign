<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Register extends CI_Controller {
	public function __construct() {
	parent::__construct();
	$this->load->helper(array('url'));
	$this->load->library('session');
}
	public function index(){
			$this->load->view('admin/Register/Register');
	}

}
