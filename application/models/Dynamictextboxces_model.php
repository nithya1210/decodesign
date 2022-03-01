<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Dynamictextboxces_model extends CI_Model{

	public function __construct(){
		parent::__construct();
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



}
