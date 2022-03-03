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
		//about Section
		$aboutCaption = $this->Hero_model->changeCaptionText($_POST['about_caption']);
		$aboutDescription = $this->Hero_model->changeAboutDescription($_POST['about_description']);
		$aboutDescription1 = $this->Hero_model->changeAboutDescription1($_POST['about_description1']);
		$aboutDescription2 = $this->Hero_model->changeAboutDescription2($_POST['about_description2']);
		$aboutDescription3 = $this->Hero_model->changeAboutDescription3($_POST['about_description3']);
		$aboutDescription4 = $this->Hero_model->changeAboutDescription4($_POST['about_description4']);
		$aboutDescription5 = $this->Hero_model->changeAboutDescription5($_POST['about_description5']);
		$aboutDescription6 = $this->Hero_model->changeAboutDescription6($_POST['about_description6']);
		$aboutDescription7 = $this->Hero_model->changeAboutDescription7($_POST['about_description7']);
		$aboutDescription8 = $this->Hero_model->changeAboutDescription8($_POST['about_description8']);
		$aboutDescription9 = $this->Hero_model->changeAboutDescription9($_POST['about_description9']);
		$aboutDescription10 = $this->Hero_model->changeAboutDescription10($_POST['about_description10']);
		$aboutDescription11 = $this->Hero_model->changeAboutDescription11($_POST['about_description11']);
		$aboutDescription12 = $this->Hero_model->changeAboutDescription12($_POST['about_description12']);
		//Services section
		$serviceCaption = $this->Hero_model->changeServiceCaption($_POST['service_caption']);
		$servicesDescription = $this->Hero_model->changeServiceDescription($_POST['service_description']);
		$ServicesSubcaption = $this->Hero_model->changeServicesSubcaption($_POST['services_subcaption']);
		$ServicesSubdescription = $this->Hero_model->changeServicesSubdescription($_POST['services_subdescription']);
		$ServicesSubcaption1 = $this->Hero_model->changeServicesSubcaption1($_POST['services_subcaption1']);
		$ServicesSubdescription1 = $this->Hero_model->changeServicesSubdescription1($_POST['services_subdescription1']);
		$ServicesSubcaption2 = $this->Hero_model->changeServicesSubcaption2($_POST['services_subcaption2']);
		$ServicesSubdescription2 = $this->Hero_model->changeServicesSubdescription2($_POST['services_subdescription2']);
		$ServicesSubcaption3 = $this->Hero_model->changeServicesSubcaption3($_POST['services_subcaption3']);
		$ServicesSubdescription3 = $this->Hero_model->changeServicesSubdescription3($_POST['services_subdescription3']);
		$ServicesSubcaption4 = $this->Hero_model->changeServicesSubcaption4($_POST['services_subcaption4']);
		$ServicesSubdescription4 = $this->Hero_model->changeServicesSubdescription4($_POST['services_subdescription4']);
		$ServicesSubcaption5 = $this->Hero_model->changeServicesSubcaption5($_POST['services_subcaption5']);
		$ServicesSubdescription5 = $this->Hero_model->changeServicesSubdescription5($_POST['services_subdescription5']);
		$servicesAction = $this->Hero_model->changeServicesaction($_POST['services_action']);
		$servicesActiondescription = $this->Hero_model->changeServicesactiondescription($_POST['services_actiondescription']);
		//PORTFOLIO
		$portfolioCaption = $this->Hero_model->changeportfolioCaption($_POST['portfolio_caption']);
		$portfolioDescription = $this->Hero_model->changeportfolioDescription($_POST['portfolio_description']);
		$portfolioSubheading1 = $this->Hero_model->changeportfoliosubheading1($_POST['portfolio_subheading1']);
		$portfolioSubheadingdes = $this->Hero_model->changeportfoliosubheadingdes($_POST['portfolio_subheadingdes']);
		//Team
		$teamCaption = $this->Hero_model->changeteamCaption($_POST['team_caption']);
		$teamDescription = $this->Hero_model->changeteamDescription($_POST['team_description']);
		//Contact
		$contactCaption = $this->Hero_model->changecontactCaption($_POST['contact_caption']);
		$contactDescription = $this->Hero_model->changecontactDescription($_POST['contact_description']);
		if($result &&  $resultDescription  && $storeText && $chartText ){
			redirect('Hero');
		}
	}

	public function updateFields(){
	$data['posted']=$_POST;
	foreach ($data as $item) {
		var_dump($item['herotext_name']); echo"<br>";
	}
	echo "<pre>",print_r($_POST),"</pre>"; die;
	}

}
