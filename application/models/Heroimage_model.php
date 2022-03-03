<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Heroimage_model extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	public function  changeImage($text){
 	 $contion=[
 		 'dynamic_image_name'=>'apple-touch-icon.png',
 	 ];
 	 $insert_aaray=[
 		 'dynamic_image_value'=>$text,
 	 ];
 	 $result=$this->db->where($contion)->update('tbl_dynamic_image', $insert_aaray);
 	 if($result){
 		 return true;
 	 }
 	 else {
 		 return false;
 	 }
  }

	public function get_hero_image(){
		$query=$this->db->select('dynamic_image_value')->where('dynamic_image_name','apple-touch-icon.png')->get('tbl_dynamic_image');
		return $query->row();
	}
	// public function updateFields(){
	//   $currentValue
	// }

}
