<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Hero_model extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	public function get_hero_text(){
		$query=$this->db->select('dynamic_txt_value')->where('dynamic_txt_name','herotext')->get('tbl_dynamic_txtbox');
		return $query->row();
	}

	public function get_paint_text(){
		$query=$this->db->select('dynamic_txt_value')->where('dynamic_txt_name','painttext')->get('tbl_dynamic_txtbox');
		return $query->row();
	}

	public function get_Store_Text(){
		$query=$this->db->select('dynamic_txt_value')->where('dynamic_txt_name','storetext')->get('tbl_dynamic_txtbox');
		return $query->row();
	}

	public function get_Calender_Text(){
		$query=$this->db->select('dynamic_txt_value')->where('dynamic_txt_name','calendertext')->get('tbl_dynamic_txtbox');
		return $query->row();
	}

	public function get_database_text(){
		$query=$this->db->select('dynamic_txt_value')->where('dynamic_txt_name','databasetext')->get('tbl_dynamic_txtbox');
		return $query->row();
	}

	public function get_Chart_Text(){
		$query=$this->db->select('dynamic_txt_value')->where('dynamic_txt_name','charttext')->get('tbl_dynamic_txtbox');
		return $query->row();
	}

	public function get_hero_text_description(){
		$query=$this->db->select('dynamic_txt_value')->where('dynamic_txt_name','herotextdescription')->get('tbl_dynamic_txtbox');
		return $query->row();
	}

	public function  changeCalendarText($text){
		$contion=[
			'dynamic_txt_name'=>'calendertext',
		];
		$insert_aaray=[
			'dynamic_txt_value'=>$text,
		];
		$result=$this->db->where($contion)->update('tbl_dynamic_txtbox', $insert_aaray);
		if($result){
			return true;
		}
		else {
			return false;
		}
	}

	public function  changePaintText($text){
		$contion=[
			'dynamic_txt_name'=>'painttext',
		];
		$insert_aaray=[
			'dynamic_txt_value'=>$text,
		];
		$result=$this->db->where($contion)->update('tbl_dynamic_txtbox', $insert_aaray);
		if($result){
			return true;
		}
		else {
			return false;
		}
	}

	public function  changeDatabaseText($text){
		$contion=[
			'dynamic_txt_name'=>'databasetext',
		];
		$insert_aaray=[
			'dynamic_txt_value'=>$text,
		];
		$result=$this->db->where($contion)->update('tbl_dynamic_txtbox', $insert_aaray);
		if($result){
			return true;
		}
		else {
			return false;
		}
	}

	public function  changeHeroText($text){
		$contion=[
			'dynamic_txt_name'=>'herotext',
		];
		$insert_aaray=[
			'dynamic_txt_value'=>$text,
		];
		$result=$this->db->where($contion)->update('tbl_dynamic_txtbox', $insert_aaray);
		if($result){
			return true;
		}
		else {
			return false;
		}
	}

	public function changeStoreText($text){
		$contion=[
			'dynamic_txt_name'=>'storetext',
		];
		$insert_aaray=[
			'dynamic_txt_value'=>$text,
		];
		$result=$this->db->where($contion)->update('tbl_dynamic_txtbox', $insert_aaray);
		if($result){
			return true;
		}
		else {
			return false;
		}
	}

	public function changeChartText($text){
		$contion=[
			'dynamic_txt_name'=>'charttext',
		];
		$insert_aaray=[
			'dynamic_txt_value'=>$text,
		];
		$result=$this->db->where($contion)->update('tbl_dynamic_txtbox', $insert_aaray);
		if($result){
			return true;
		}
		else {
			return false;
		}
	}

	public function change_text_description($text){
		$contion=[
			'dynamic_txt_name'=>'herotextdescription',
		];
		$insert_aaray=[
			'dynamic_txt_value'=>$text,
		];
		$result=$this->db->where($contion)->update('tbl_dynamic_txtbox', $insert_aaray);
		if($result){
			return true;
		}
		else {
			return false;
		}
	}
	//about Section
	public function changeCaptionText($text){
		$contion=[
			'dynamic_txt_name'=>'aboutcaption',
		];
		$insert_aaray=[
			'dynamic_txt_value'=>$text,
		];
		$result=$this->db->where($contion)->update('tbl_dynamic_txtbox', $insert_aaray);
		if($result){
			return true;
		}
		else {
			return false;
		}
	}
	public function changeAboutDescription($text){
		$contion=[
			'dynamic_txt_name'=>'aboutdescription',
		];
		$insert_aaray=[
			'dynamic_txt_value'=>$text,
		];
		$result=$this->db->where($contion)->update('tbl_dynamic_txtbox', $insert_aaray);
		if($result){
			return true;
		}
		else {
			return false;
		}
	}
	public function changeAboutDescription1($text){
		$contion=[
			'dynamic_txt_name'=>'aboutdescription1',
		];
		$insert_aaray=[
			'dynamic_txt_value'=>$text,
		];
		$result=$this->db->where($contion)->update('tbl_dynamic_txtbox', $insert_aaray);
		if($result){
			return true;
		}
		else {
			return false;
		}
	}
	public function changeAboutDescription2($text){
		$contion=[
			'dynamic_txt_name'=>'aboutdescription2',
		];
		$insert_aaray=[
			'dynamic_txt_value'=>$text,
		];
		$result=$this->db->where($contion)->update('tbl_dynamic_txtbox', $insert_aaray);
		if($result){
			return true;
		}
		else {
			return false;
		}
	}
	public function changeAboutDescription3($text){
		$contion=[
			'dynamic_txt_name'=>'aboutdescription3',
		];
		$insert_aaray=[
			'dynamic_txt_value'=>$text,
		];
		$result=$this->db->where($contion)->update('tbl_dynamic_txtbox', $insert_aaray);
		if($result){
			return true;
		}
		else {
			return false;
		}
	}
	public function changeAboutDescription4($text){
		$contion=[
			'dynamic_txt_name'=>'aboutdescription4',
		];
		$insert_aaray=[
			'dynamic_txt_value'=>$text,
		];
		$result=$this->db->where($contion)->update('tbl_dynamic_txtbox', $insert_aaray);
		if($result){
			return true;
		}
		else {
			return false;
		}
	}
	public function changeAboutDescription5($text){
		$contion=[
			'dynamic_txt_name'=>'aboutdescription5',
		];
		$insert_aaray=[
			'dynamic_txt_value'=>$text,
		];
		$result=$this->db->where($contion)->update('tbl_dynamic_txtbox', $insert_aaray);
		if($result){
			return true;
		}
		else {
			return false;
		}
	}
	public function changeAboutDescription6($text){
		$contion=[
			'dynamic_txt_name'=>'aboutdescription6',
		];
		$insert_aaray=[
			'dynamic_txt_value'=>$text,
		];
		$result=$this->db->where($contion)->update('tbl_dynamic_txtbox', $insert_aaray);
		if($result){
			return true;
		}
		else {
			return false;
		}
	}
	public function changeAboutDescription7($text){
		$contion=[
			'dynamic_txt_name'=>'aboutdescription7',
		];
		$insert_aaray=[
			'dynamic_txt_value'=>$text,
		];
		$result=$this->db->where($contion)->update('tbl_dynamic_txtbox', $insert_aaray);
		if($result){
			return true;
		}
		else {
			return false;
		}
	}
	public function changeAboutDescription8($text){
		$contion=[
			'dynamic_txt_name'=>'aboutdescription8',
		];
		$insert_aaray=[
			'dynamic_txt_value'=>$text,
		];
		$result=$this->db->where($contion)->update('tbl_dynamic_txtbox', $insert_aaray);
		if($result){
			return true;
		}
		else {
			return false;
		}
	}
	public function changeAboutDescription9($text){
		$contion=[
			'dynamic_txt_name'=>'aboutdescription9',
		];
		$insert_aaray=[
			'dynamic_txt_value'=>$text,
		];
		$result=$this->db->where($contion)->update('tbl_dynamic_txtbox', $insert_aaray);
		if($result){
			return true;
		}
		else {
			return false;
		}
	}
	public function changeAboutDescription10($text){
		$contion=[
			'dynamic_txt_name'=>'aboutdescription10',
		];
		$insert_aaray=[
			'dynamic_txt_value'=>$text,
		];
		$result=$this->db->where($contion)->update('tbl_dynamic_txtbox', $insert_aaray);
		if($result){
			return true;
		}
		else {
			return false;
		}
	}
	public function changeAboutDescription11($text){
		$contion=[
			'dynamic_txt_name'=>'aboutdescription11',
		];
		$insert_aaray=[
			'dynamic_txt_value'=>$text,
		];
		$result=$this->db->where($contion)->update('tbl_dynamic_txtbox', $insert_aaray);
		if($result){
			return true;
		}
		else {
			return false;
		}
	}
	public function changeAboutDescription12($text){
		$contion=[
			'dynamic_txt_name'=>'aboutdescription12',
		];
		$insert_aaray=[
			'dynamic_txt_value'=>$text,
		];
		$result=$this->db->where($contion)->update('tbl_dynamic_txtbox', $insert_aaray);
		if($result){
			return true;
		}
		else {
			return false;
		}
	}
	public function get_about_caption(){
		$query=$this->db->select('dynamic_txt_value')->where('dynamic_txt_name','aboutcaption')->get('tbl_dynamic_txtbox');
		return $query->row();
	}
	public function get_about_description(){
		$query=$this->db->select('dynamic_txt_value')->where('dynamic_txt_name','aboutdescription')->get('tbl_dynamic_txtbox');
		return $query->row();
	}

	public function get_about_description1(){
		$query=$this->db->select('dynamic_txt_value')->where('dynamic_txt_name','aboutdescription1')->get('tbl_dynamic_txtbox');
		return $query->row();
	}
	public function get_about_description2(){
		$query=$this->db->select('dynamic_txt_value')->where('dynamic_txt_name','aboutdescription2')->get('tbl_dynamic_txtbox');
		return $query->row();
	}
	public function get_about_description3(){
		$query=$this->db->select('dynamic_txt_value')->where('dynamic_txt_name','aboutdescription3')->get('tbl_dynamic_txtbox');
		return $query->row();
	}
	public function get_about_description4(){
		$query=$this->db->select('dynamic_txt_value')->where('dynamic_txt_name','aboutdescription4')->get('tbl_dynamic_txtbox');
		return $query->row();
	}
	public function get_about_description5(){
		$query=$this->db->select('dynamic_txt_value')->where('dynamic_txt_name','aboutdescription5')->get('tbl_dynamic_txtbox');
		return $query->row();
	}
	public function get_about_description6(){
		$query=$this->db->select('dynamic_txt_value')->where('dynamic_txt_name','aboutdescription6')->get('tbl_dynamic_txtbox');
		return $query->row();
	}
	public function get_about_description7(){
		$query=$this->db->select('dynamic_txt_value')->where('dynamic_txt_name','aboutdescription7')->get('tbl_dynamic_txtbox');
		return $query->row();
	}
	public function get_about_description8(){
		$query=$this->db->select('dynamic_txt_value')->where('dynamic_txt_name','aboutdescription8')->get('tbl_dynamic_txtbox');
		return $query->row();
	}
	public function get_about_description9(){
		$query=$this->db->select('dynamic_txt_value')->where('dynamic_txt_name','aboutdescription9')->get('tbl_dynamic_txtbox');
		return $query->row();
	}
	public function get_about_description10(){
		$query=$this->db->select('dynamic_txt_value')->where('dynamic_txt_name','aboutdescription10')->get('tbl_dynamic_txtbox');
		return $query->row();
	}
	public function get_about_description11(){
		$query=$this->db->select('dynamic_txt_value')->where('dynamic_txt_name','aboutdescription11')->get('tbl_dynamic_txtbox');
		return $query->row();
	}
	public function get_about_description12(){
		$query=$this->db->select('dynamic_txt_value')->where('dynamic_txt_name','aboutdescription12')->get('tbl_dynamic_txtbox');
		return $query->row();
	}
	//Service section
	public function changeServiceCaption($text){
		$contion=[
			'dynamic_txt_name'=>'servicescaption',
		];
		$insert_aaray=[
			'dynamic_txt_value'=>$text,
		];
		$result=$this->db->where($contion)->update('tbl_dynamic_txtbox', $insert_aaray);
		if($result){
			return true;
		}
		else {
			return false;
		}
	}

	public function changeServiceDescription($text){
		$contion=[
			'dynamic_txt_name'=>'servicesdescription',
		];
		$insert_aaray=[
			'dynamic_txt_value'=>$text,
		];
		$result=$this->db->where($contion)->update('tbl_dynamic_txtbox', $insert_aaray);
		if($result){
			return true;
		}
		else {
			return false;
		}
	}

	public function get_services_caption(){
		$query=$this->db->select('dynamic_txt_value')->where('dynamic_txt_name','servicescaption')->get('tbl_dynamic_txtbox');
		return $query->row();
	}
	public function get_services_action(){
		$query=$this->db->select('dynamic_txt_value')->where('dynamic_txt_name','servicesaction')->get('tbl_dynamic_txtbox');
		return $query->row();
	}
	public function get_services_action_description(){
		$query=$this->db->select('dynamic_txt_value')->where('dynamic_txt_name','servicesactiondescription')->get('tbl_dynamic_txtbox');
		return $query->row();
	}
	public function get_services_description(){
		$query=$this->db->select('dynamic_txt_value')->where('dynamic_txt_name','servicesdescription')->get('tbl_dynamic_txtbox');
		return $query->row();
	}
	public function get_services_subcaption(){
		$query=$this->db->select('dynamic_txt_value')->where('dynamic_txt_name','servicessubcaption')->get('tbl_dynamic_txtbox');
		return $query->row();
	}
	public function get_services_subdescription(){
		$query=$this->db->select('dynamic_txt_value')->where('dynamic_txt_name','servicessubdescription')->get('tbl_dynamic_txtbox');
		return $query->row();
	}
	public function get_services_subcaption1(){
		$query=$this->db->select('dynamic_txt_value')->where('dynamic_txt_name','servicessubcaption1')->get('tbl_dynamic_txtbox');
		return $query->row();
	}
	public function get_services_subdescription1(){
		$query=$this->db->select('dynamic_txt_value')->where('dynamic_txt_name','servicessubdescription1')->get('tbl_dynamic_txtbox');
		return $query->row();
	}
	public function get_services_subcaption2(){
		$query=$this->db->select('dynamic_txt_value')->where('dynamic_txt_name','servicessubcaption2')->get('tbl_dynamic_txtbox');
		return $query->row();
	}
	public function get_services_subdescription2(){
		$query=$this->db->select('dynamic_txt_value')->where('dynamic_txt_name','servicessubdescription2')->get('tbl_dynamic_txtbox');
		return $query->row();
	}
	public function get_services_subcaption3(){
		$query=$this->db->select('dynamic_txt_value')->where('dynamic_txt_name','servicessubcaption3')->get('tbl_dynamic_txtbox');
		return $query->row();
	}
	public function get_services_subdescription3(){
		$query=$this->db->select('dynamic_txt_value')->where('dynamic_txt_name','servicessubdescription3')->get('tbl_dynamic_txtbox');
		return $query->row();
	}
	public function get_services_subcaption4(){
		$query=$this->db->select('dynamic_txt_value')->where('dynamic_txt_name','servicessubcaption4')->get('tbl_dynamic_txtbox');
		return $query->row();
	}
	public function get_services_subdescription4(){
		$query=$this->db->select('dynamic_txt_value')->where('dynamic_txt_name',' servicessubdescription4')->get('tbl_dynamic_txtbox');
		return $query->row();
	}
	public function get_services_subcaption5(){
		$query=$this->db->select('dynamic_txt_value')->where('dynamic_txt_name','servicessubcaption5')->get('tbl_dynamic_txtbox');
		return $query->row();
	}
	public function get_services_subdescription5(){
		$query=$this->db->select('dynamic_txt_value')->where('dynamic_txt_name','servicessubdescription5')->get('tbl_dynamic_txtbox');
		return $query->row();
	}

	public function changeServicesSubcaption($text){
		$contion=[
			'dynamic_txt_name'=>'servicessubcaption',
		];
		$insert_aaray=[
			'dynamic_txt_value'=>$text,
		];
		$result=$this->db->where($contion)->update('tbl_dynamic_txtbox', $insert_aaray);
		if($result){
			return true;
		}
		else {
			return false;
		}
	}
	public function changeServicesSubdescription($text){
		$contion=[
			'dynamic_txt_name'=>'servicessubdescription',
		];
		$insert_aaray=[
			'dynamic_txt_value'=>$text,
		];
		$result=$this->db->where($contion)->update('tbl_dynamic_txtbox', $insert_aaray);
		if($result){
			return true;
		}
		else {
			return false;
		}
	}
	public function changeServicesSubcaption1($text){
		$contion=[
			'dynamic_txt_name'=>'servicessubcaption1',
		];
		$insert_aaray=[
			'dynamic_txt_value'=>$text,
		];
		$result=$this->db->where($contion)->update('tbl_dynamic_txtbox', $insert_aaray);
		if($result){
			return true;
		}
		else {
			return false;
		}
	}
	public function changeServicesSubdescription1($text){
		$contion=[
			'dynamic_txt_name'=>'servicessubdescription1',
		];
		$insert_aaray=[
			'dynamic_txt_value'=>$text,
		];
		$result=$this->db->where($contion)->update('tbl_dynamic_txtbox', $insert_aaray);
		if($result){
			return true;
		}
		else {
			return false;
		}
	}
	public function changeServicesSubcaption2($text){
		$contion=[
			'dynamic_txt_name'=>'servicessubcaption2',
		];
		$insert_aaray=[
			'dynamic_txt_value'=>$text,
		];
		$result=$this->db->where($contion)->update('tbl_dynamic_txtbox', $insert_aaray);
		if($result){
			return true;
		}
		else {
			return false;
		}
	}
	public function changeServicesSubdescription2($text){
		$contion=[
			'dynamic_txt_name'=>'servicessubdescription2',
		];
		$insert_aaray=[
			'dynamic_txt_value'=>$text,
		];
		$result=$this->db->where($contion)->update('tbl_dynamic_txtbox', $insert_aaray);
		if($result){
			return true;
		}
		else {
			return false;
		}
	}
	public function changeServicesSubcaption3($text){
		$contion=[
			'dynamic_txt_name'=>'servicessubcaption3',
		];
		$insert_aaray=[
			'dynamic_txt_value'=>$text,
		];
		$result=$this->db->where($contion)->update('tbl_dynamic_txtbox', $insert_aaray);
		if($result){
			return true;
		}
		else {
			return false;
		}
	}
	public function changeServicesSubdescription3($text){
		$contion=[
			'dynamic_txt_name'=>'servicessubdescription3',
		];
		$insert_aaray=[
			'dynamic_txt_value'=>$text,
		];
		$result=$this->db->where($contion)->update('tbl_dynamic_txtbox', $insert_aaray);
		if($result){
			return true;
		}
		else {
			return false;
		}
	}
	public function changeServicesSubcaption4($text){
		$contion=[
			'dynamic_txt_name'=>'servicessubcaption4',
		];
		$insert_aaray=[
			'dynamic_txt_value'=>$text,
		];
		$result=$this->db->where($contion)->update('tbl_dynamic_txtbox', $insert_aaray);
		if($result){
			return true;
		}
		else {
			return false;
		}
	}
	public function changeServicesSubdescription4($text){
		$contion=[
			'dynamic_txt_name'=>'servicessubdescription4',
		];
		$insert_aaray=[
			'dynamic_txt_value'=>$text,
		];
		$result=$this->db->where($contion)->update('tbl_dynamic_txtbox', $insert_aaray);
		if($result){
			return true;
		}
		else {
			return false;
		}
	}
	public function changeServicesSubcaption5($text){
		$contion=[
			'dynamic_txt_name'=>'servicessubcaption5',
		];
		$insert_aaray=[
			'dynamic_txt_value'=>$text,
		];
		$result=$this->db->where($contion)->update('tbl_dynamic_txtbox', $insert_aaray);
		if($result){
			return true;
		}
		else {
			return false;
		}
	}
	public function changeServicesSubdescription5($text){
		$contion=[
			'dynamic_txt_name'=>'servicessubdescription5',
		];
		$insert_aaray=[
			'dynamic_txt_value'=>$text,
		];
		$result=$this->db->where($contion)->update('tbl_dynamic_txtbox', $insert_aaray);
		if($result){
			return true;
		}
		else {
			return false;
		}
	}
	public function changeServicesaction($text){
		$contion=[
			'dynamic_txt_name'=>'servicesaction',
		];
		$insert_aaray=[
			'dynamic_txt_value'=>$text,
		];
		$result=$this->db->where($contion)->update('tbl_dynamic_txtbox', $insert_aaray);
		if($result){
			return true;
		}
		else {
			return false;
		}
	}
	public function changeServicesactiondescription($text){
		$contion=[
			'dynamic_txt_name'=>'servicesactiondescription',
		];
		$insert_aaray=[
			'dynamic_txt_value'=>$text,
		];
		$result=$this->db->where($contion)->update('tbl_dynamic_txtbox', $insert_aaray);
		if($result){
			return true;
		}
		else {
			return false;
		}
	}
	//portfolio
	public function changeportfolioCaption($text){
		$contion=[
			'dynamic_txt_name'=>'portfoliocaption',
		];
		$insert_aaray=[
			'dynamic_txt_value'=>$text,
		];
		$result=$this->db->where($contion)->update('tbl_dynamic_txtbox', $insert_aaray);
		if($result){
			return true;
		}
		else {
			return false;
		}
	}
	public function changeportfolioDescription($text){
		$contion=[
			'dynamic_txt_name'=>'portfoliodescription',
		];
		$insert_aaray=[
			'dynamic_txt_value'=>$text,
		];
		$result=$this->db->where($contion)->update('tbl_dynamic_txtbox', $insert_aaray);
		if($result){
			return true;
		}
		else {
			return false;
		}
	}
	public function changeportfoliosubheading1($text){
		$contion=[
			'dynamic_txt_name'=>'portfoliosubheading1',
		];
		$insert_aaray=[
			'dynamic_txt_value'=>$text,
		];
		$result=$this->db->where($contion)->update('tbl_dynamic_txtbox', $insert_aaray);
		if($result){
			return true;
		}
		else {
			return false;
		}
	}
	public function changeportfoliosubheadingdes($text){
		$contion=[
			'dynamic_txt_name'=>'portfoliosubheadingdes',
		];
		$insert_aaray=[
			'dynamic_txt_value'=>$text,
		];
		$result=$this->db->where($contion)->update('tbl_dynamic_txtbox', $insert_aaray);
		if($result){
			return true;
		}
		else {
			return false;
		}
	}
	public function get_portfolio_caption(){
		$query=$this->db->select('dynamic_txt_value')->where('dynamic_txt_name','portfoliocaption')->get('tbl_dynamic_txtbox');
		return $query->row();
	}
	public function get_portfolio_description(){
		$query=$this->db->select('dynamic_txt_value')->where('dynamic_txt_name','portfoliodescription')->get('tbl_dynamic_txtbox');
		return $query->row();
	}
	public function get_portfolio_subheading1(){
		$query=$this->db->select('dynamic_txt_value')->where('dynamic_txt_name','portfoliosubheading1')->get('tbl_dynamic_txtbox');
		return $query->row();
	}
	public function get_portfolio_subheadingdes(){
		$query=$this->db->select('dynamic_txt_value')->where('dynamic_txt_name','portfoliosubheadingdes')->get('tbl_dynamic_txtbox');
		return $query->row();
	}
	//team
	public function changeteamCaption($text){
		$contion=[
			'dynamic_txt_name'=>'teamcaption',
		];
		$insert_aaray=[
			'dynamic_txt_value'=>$text,
		];
		$result=$this->db->where($contion)->update('tbl_dynamic_txtbox', $insert_aaray);
		if($result){
			return true;
		}
		else {
			return false;
		}
	}
	public function changeteamDescription($text){
		$contion=[
			'dynamic_txt_name'=>'teamdescription',
		];
		$insert_aaray=[
			'dynamic_txt_value'=>$text,
		];
		$result=$this->db->where($contion)->update('tbl_dynamic_txtbox', $insert_aaray);
		if($result){
			return true;
		}
		else {
			return false;
		}
	}
	public function get_team_caption(){
		$query=$this->db->select('dynamic_txt_value')->where('dynamic_txt_name','teamcaption')->get('tbl_dynamic_txtbox');
		return $query->row();
	}
	public function get_team_description(){
		$query=$this->db->select('dynamic_txt_value')->where('dynamic_txt_name','teamdescription')->get('tbl_dynamic_txtbox');
		return $query->row();
	}
	//contact
	public function changecontactCaption($text){
		$contion=[
			'dynamic_txt_name'=>'contactcaption',
		];
		$insert_aaray=[
			'dynamic_txt_value'=>$text,
		];
		$result=$this->db->where($contion)->update('tbl_dynamic_txtbox', $insert_aaray);
		if($result){
			return true;
		}
		else {
			return false;
		}
	}
	public function changecontactDescription($text){
		$contion=[
			'dynamic_txt_name'=>'contactdescription',
		];
		$insert_aaray=[
			'dynamic_txt_value'=>$text,
		];
		$result=$this->db->where($contion)->update('tbl_dynamic_txtbox', $insert_aaray);
		if($result){
			return true;
		}
		else {
			return false;
		}
	}
	public function get_contact_caption(){
		$query=$this->db->select('dynamic_txt_value')->where('dynamic_txt_name','contactcaption')->get('tbl_dynamic_txtbox');
		return $query->row();
	}
	public function get_contact_description(){
		$query=$this->db->select('dynamic_txt_value')->where('dynamic_txt_name','contactdescription')->get('tbl_dynamic_txtbox');
		return $query->row();
	}
	// public function updateFields(){
	//   $currentValue
	// }

}
