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
		//about
		$heroText['aboutCaption']=$this->getAboutCaption();
		$heroText['aboutDescription']=$this->getAboutDescription();
		$heroText['aboutDescription1']=$this->getAboutDescription1();
		$heroText['aboutDescription2']=$this->getAboutDescription2();
		$heroText['aboutDescription3']=$this->getAboutDescription3();
		$heroText['aboutDescription4']=$this->getAboutDescription4();
		$heroText['aboutDescription5']=$this->getAboutDescription5();
		$heroText['aboutDescription6']=$this->getAboutDescription6();
		$heroText['aboutDescription7']=$this->getAboutDescription7();
		$heroText['aboutDescription8']=$this->getAboutDescription8();
		$heroText['aboutDescription9']=$this->getAboutDescription9();
		$heroText['aboutDescription10']=$this->getAboutDescription10();
		$heroText['aboutDescription11']=$this->getAboutDescription11();
		$heroText['aboutDescription12']=$this->getAboutDescription12();
		//services
		$heroText['servicesCaption']=$this->getServicesCaption();
		$heroText['servicesDescription']=$this->getServicesDescription();
		$heroText['servicesSubcaption']=$this->getservicesSubcaption();
		$heroText['servicesSubdescription']=$this->getservicesSubdescription();
		$heroText['servicesSubcaption1']=$this->getservicesSubcaption1();
		$heroText['servicesSubdescription1']=$this->getservicesSubdescription1();
		$heroText['servicesSubcaption2']=$this->getservicesSubcaption2();
		$heroText['servicesSubdescription2']=$this->getservicesSubdescription2();
		$heroText['servicesSubcaption3']=$this->getservicesSubcaption3();
		$heroText['servicesSubdescription3']=$this->getservicesSubdescription3();
		$heroText['servicesSubcaption4']=$this->getservicesSubcaption4();
		$heroText['servicesSubdescription12']=$this->getservicesSubdescription4();
		$heroText['servicesSubcaption5']=$this->getservicesSubcaption5();
		$heroText['servicesSubdescription5']=$this->getservicesSubdescription5();
		$heroText['servicesAction']=$this->getservicesAction();
		$heroText['servicesActiondescription']=$this->getservicesActiondescription();
		//portfolio
		$heroText['portfolioCaption']=$this->getportfolioCaption();
		$heroText['portfolioDescription']=$this->getportfolioDescription();
		$heroText['portfolioSubheading1']=$this->getportfolioSubheading1();
		$heroText['portfolioSubheadingdes']=$this->getportfolioSubheadingdes();
		//Team
		$heroText['teamCaption']=$this->getteamCaption();
		$heroText['teamDescription']=$this->getteamDescription();
		//contact
		$heroText['contactCaption']=$this->getcontactCaption();
		$heroText['contactDescription']=$this->getcontactDescription();
		$this->load->view('index',$heroText);
	}
	//home Section
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
	//about Section
	public function getAboutCaption(){
		$result=$this->Hero_model->get_about_caption();
		return $result ->dynamic_txt_value;
	}

	public function getAboutDescription(){
		$result=$this->Hero_model->get_about_description();
		return $result ->dynamic_txt_value;
	}

	public function getAboutDescription1(){
		$result=$this->Hero_model->get_about_description1();
		return $result ->dynamic_txt_value;
	}

	public function getAboutDescription2(){
		$result=$this->Hero_model->get_about_description2();
		return $result ->dynamic_txt_value;
	}

	public function getAboutDescription3(){
		$result=$this->Hero_model->get_about_description3();
		return $result ->dynamic_txt_value;
	}

	public function getAboutDescription4(){
		$result=$this->Hero_model->get_about_description4();
		return $result ->dynamic_txt_value;
	}

	public function getAboutDescription5(){
		$result=$this->Hero_model->get_about_description5();
		return $result ->dynamic_txt_value;
	}

	public function getAboutDescription6(){
		$result=$this->Hero_model->get_about_description6();
		return $result ->dynamic_txt_value;
	}

	public function getAboutDescription7(){
		$result=$this->Hero_model->get_about_description7();
		return $result ->dynamic_txt_value;
	}

	public function getAboutDescription8(){
		$result=$this->Hero_model->get_about_description9();
		return $result ->dynamic_txt_value;
	}

	public function getAboutDescription9(){
		$result=$this->Hero_model->get_about_description9();
		return $result ->dynamic_txt_value;
	}

	public function getAboutDescription10(){
		$result=$this->Hero_model->get_about_description10();
		return $result ->dynamic_txt_value;
	}

	public function getAboutDescription11(){
		$result=$this->Hero_model->get_about_description11();
		return $result ->dynamic_txt_value;
	}

	public function getAboutDescription12(){
		$result=$this->Hero_model->get_about_description12();
		return $result ->dynamic_txt_value;
	}

	//Services section
	public function getServicesCaption(){
		$result=$this->Hero_model->get_services_caption();
		return $result ->dynamic_txt_value;
	}

	public function getServicesDescription(){
		$result=$this->Hero_model->get_services_description();
		return $result ->dynamic_txt_value;
	}

	public function getservicesSubcaption(){
		$result=$this->Hero_model->get_services_subcaption();
		return $result ->dynamic_txt_value;
	}

	public function getservicesSubdescription(){
		$result=$this->Hero_model->get_services_subdescription();
		return $result ->dynamic_txt_value;
	}

	public function getservicesSubcaption1(){
		$result=$this->Hero_model->get_services_subcaption1();
		return $result ->dynamic_txt_value;
	}

	public function getservicesSubdescription1(){
		$result=$this->Hero_model->get_services_subdescription1();
		return $result ->dynamic_txt_value;
	}

	public function getservicesSubcaption2(){
		$result=$this->Hero_model->get_services_subcaption2();
		return $result ->dynamic_txt_value;
	}

	public function getservicesSubdescription2(){
		$result=$this->Hero_model->get_services_subdescription2();
		return $result ->dynamic_txt_value;
	}

	public function getservicesSubcaption3(){
		$result=$this->Hero_model->get_services_subcaption3();
		return $result ->dynamic_txt_value;
	}

	public function getservicesSubdescription3(){
		$result=$this->Hero_model->get_services_subdescription3();
		return $result ->dynamic_txt_value;
	}

	public function getservicesSubcaption4(){
		$result=$this->Hero_model->get_services_subcaption4();
		return $result ->dynamic_txt_value;
	}

	public function getservicesSubdescription4(){
		$result=$this->Hero_model->get_services_subdescription4();
		return $result ->dynamic_txt_value;
	}

	public function getservicesSubcaption5(){
		$result=$this->Hero_model->get_services_subcaption5();
		return $result ->dynamic_txt_value;
	}

	public function getservicesSubdescription5(){
		$result=$this->Hero_model->get_services_subdescription5();
		return $result ->dynamic_txt_value;
	}

	public function getservicesAction(){
		$result=$this->Hero_model->get_services_action();
		return $result ->dynamic_txt_value;
	}

	public function getservicesActiondescription(){
		$result=$this->Hero_model->get_services_action_description();
		return $result ->dynamic_txt_value;
	}

	//portfolio
	public function getportfolioCaption(){
		$result=$this->Hero_model->get_portfolio_caption();
		return $result ->dynamic_txt_value;
	}

	public function getportfolioDescription(){
		$result=$this->Hero_model->get_portfolio_description();
		return $result ->dynamic_txt_value;
	}

	public function getportfolioSubheading1(){
		$result=$this->Hero_model->get_portfolio_subheading1();
		return $result ->dynamic_txt_value;
	}

	public function getportfolioSubheadingdes(){
		$result=$this->Hero_model->get_portfolio_subheadingdes();
		return $result ->dynamic_txt_value;
	}

	//team
	public function getteamCaption(){
		$result=$this->Hero_model->get_team_caption();
		return $result ->dynamic_txt_value;
	}

	public function getteamDescription(){
		$result=$this->Hero_model->get_team_description();
		return $result ->dynamic_txt_value;
	}

	//contact
	public function getcontactCaption(){
		$result=$this->Hero_model->get_contact_caption();
		return $result ->dynamic_txt_value;
	}

	public function getcontactDescription(){
		$result=$this->Hero_model->get_contact_description();
		return $result ->dynamic_txt_value;
	}

}
?>
