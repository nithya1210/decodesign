<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {
	public $page  = 'Dashboard';
	public function __construct() {
		parent::__construct();
	// 	if (! $this->is_logged_in()){
	// 		redirect('/login');
	// 	}
	// 	$this->load->model('General_model');
	// 	$this->load->model('Dashboard_model');
	// }

	public function index(){
		// $template['fin_year']  = $this->Dashboard_model->fin_year();
		$template['body'] = 'admin/Dashboard/list';
		$template['script'] = 'admin/Dashboard/script';
		$this->load->view('template', $template);
	}
}
