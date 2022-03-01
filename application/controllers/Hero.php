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
		$result = $this->Hero_model->changeHeroText($_POST['herotext_name']);
		$resultDescription = $this->Hero_model->change_text_description($_POST['herotext_description']);
		$storeText = $this->Hero_model->changeStoreText($_POST['store_text']);
		$chartText = $this->Hero_model->changeChartText($_POST['chart_text']);
		$calendarText = $this->Hero_model->changeCalendarText($_POST['calendar_text']);
		$paintText = $this->Hero_model->changePaintText($_POST['paint_text']);
		$databaseText = $this->Hero_model->changeDatabaseText($_POST['database_text']);
		 if($result &&  $resultDescription  && $storeText && $chartText ){
				redirect('Hero');
		}
	}

	public function getHeroDescription(){
		$result=$this->Herotextboxes_model->get_hero_desc();
		var_dump($result); die;
	}

}
