<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dynamictextboxces extends CI_Controller {
	public $page  = 'Dynamictextboxces';
	public $table = 'tbl_dynamic_txtbox';
	public function __construct() {
		parent::__construct();
		$this->load->model('General_model');
		$this->load->model('Dynamictextboxces_model');
	}

	public function index(){
		$template['body'] = 'admin/Dynamictextboxces/list';
		$template['script'] = 'admin/Dynamictextboxces/script';
		$this->load->view('admin/template', $template);
	}
}
