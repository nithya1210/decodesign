<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Hero extends CI_Controller {
	public $page  = 'Herotextboxces';
	public $table = 'tbl_dynamic_txtbox';
	public function __construct() {
		parent::__construct();
		$this->load->model('General_model');
		$this->load->model('Hero_model');
	}
	public function index(){
		$template['body'] = 'admin/Hero/list';
		$template['script'] = 'admin/Hero/script';
		$this->load->view('admin/template', $template);
	}
	public function changeHeroText(){
		$result = $this->Hero_model->changeHeroText($_POST['herotextboxces_name']);
		$resultDescription = $this->Hero_model->change_text_description($_POST['herotextboxces_description']);
		 if($result &&  $resultDescription){
				redirect('Hero');
		}
	}

	public function getHeroDescription(){
		$result=$this->Herotextboxes_model->get_hero_desc();
		var_dump($result); die;
	}
}
