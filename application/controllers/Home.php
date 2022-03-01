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
		$heroText['storeText']=$this->getStoreText();
		$heroText['chartText']=$this->getChartText();
		$heroText['calendarText']=$this->getCalenderText();
		$heroText['paintText']=$this->getPaintText();
		$heroText['databaseText']=$this->getDatabaseText();
		$this->load->view('index',$heroText);
	}

	public function getHerotext(){
		$result=$this->Hero_model->get_hero_text();
		return $result ->dynamic_txt_value;
	}

	public function getDatabaseText(){
		$result=$this->Hero_model->get_database_text();
		return $result ->dynamic_txt_value;
	}

	public function getPaintText(){
		$result=$this->Hero_model->get_paint_text();
		return $result ->dynamic_txt_value;
	}

	public function getCalenderText(){
		$result=$this->Hero_model->get_calender_text();
		return $result ->dynamic_txt_value;
	}

	public function getherotextDescription(){
		$result=$this->Hero_model->get_hero_text_description();
		return $result ->dynamic_txt_value;
	}

	public function getStoreText(){
		$result=$this->Hero_model->get_Store_Text();
		return $result ->dynamic_txt_value;
	}
	public function getChartText(){
		$result=$this->Hero_model->get_Chart_Text();
		return $result ->dynamic_txt_value;
	}

}
?>
