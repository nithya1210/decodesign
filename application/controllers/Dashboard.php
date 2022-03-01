<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {
	public $page  = 'Dashboard';
	public function __construct() {
		parent::__construct();
	// 	$this->load->model('General_model');
	// 	$this->load->model('Dashboard_model');
	// }
}
	public function index(){
		$template['body'] = 'admin/Dashboard/list';
		$template['script'] = 'admin/Dashboard/script';
		$this->load->view('admin/template', $template);
	}
}
