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

}
