<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
	public $page  = 'Dynamictextboxces';
	public $table = 'tbl_dynamic_txtbox';
	public function __construct() {
		parent::__construct();
		$this->load->model('General_model');
		$this->load->model('Hero_model');
	}

   public function index(){
    $heroText['hero']=$this->getHerotext();
    $heroText['heroDescription']=$this->getherotextDescription();
    $this->load->view('index',$heroText);
  }

	public function getHerotext(){
		$result=$this->Hero_model->get_hero_text();
		return $result ->dynamic_txt_value;
	}
	public function getherotextDescription(){
		$result=$this->Hero_model->get_hero_text_description();
		return $result ->dynamic_txt_value;
	}

	// public function admin(){
	// 	$this->load->view('admin/Login/login');
	// }

}
?>
