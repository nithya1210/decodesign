<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Images_model extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	// public function  changeImage($text){
 	//  $contion=[
 	// 	 'dynamic_image_field'=>'apple-touch-icon.png',
 	//  ];
 	//  $insert_aaray=[
 	// 	 'dynamic_image_value'=>$text,
 	//  ];
 	//  $result=$this->db->where($contion)->update('tbl_dynamic_image', $insert_aaray);
 	//  if($result){
 	// 	 return true;
 	//  }
 	//  else {
 	// 	 return false;
 	//  }
  // }

	public function get_about_image(){
		$query=$this->db->select('dynamic_image_value')->where('dynamic_image_field','aboutus_image')->get('tbl_dynamic_image');
		return $query->row();
	}
	// public function get_aboutsub_image(){
	// 	$query=$this->db->select('dynamic_image_value')->where('dynamic_image_field','about_subimage')->get('tbl_dynamic_image');
	// 	return $query->row();
	// }
   public function updateimage($table,$condition,$update_array){
      $query = $this->db->where($condition)->update($table,$update_array);
 			return $query ? true : false;
  }


}
