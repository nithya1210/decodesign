<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
	public $page  = 'Dynamictextboxces';
	public $table = 'tbl_dynamic_txtbox';
	public function __construct() {
		parent::__construct();
		$this->load->model('General_model');
		$this->load->model('Dynamictextboxces_model');
	}

   public function index(){
    $heroText['hero']=$this->getHerotext();
    $heroText['heroDescription']=$this->get_hero_text_description();
var_dump($heroText);
die;
    $this->load->view('index',$heroText);
  }

	public function getHerotext(){
		$result=$this->Dynamictextboxces_model->get_hero_text();
		return $result ->dynamic_txt_value;
	}
	public function get_hero_text_description(){
		$result=$this->Dynamictextboxces_model->get_hero_text_description();
		return $result ->dynamic_txt_value;
	}

	// public function admin(){
	// 	$this->load->view('admin/Login/login');
	// }

}
?>
