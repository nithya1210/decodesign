<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Herotextboxces extends CI_Controller {
	public $page  = 'Herotextboxces';
	public $table = 'tbl_dynamic_txtbox';
	public function __construct() {
		parent::__construct();
		$this->load->model('General_model');
		$this->load->model('Herotextboxces_model');
	}
	public function index(){
		$template['body'] = 'admin/Herotextboxces/list';
		$template['script'] = 'admin/Herotextboxces/script';
		$this->load->view('admin/template', $template);
	}
	public function changeHeroText(){
		$result = $this->Herotextboxces_model->changeHeroText($_POST['herotextboxces_name']);
		$resultDescription = $this->Herotextboxces_model->change_text_description($_POST['herotextboxces_description']);
		 if($result &&  $resultDescription){
				redirect('Herotextboxces');
		}
	}
}
