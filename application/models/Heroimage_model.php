<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Heroimage_model extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	public function  changeaboutImage($aboutImage){
 	 $contion=[
 		 'dynamic_image_field'=>'aboutus_image',
 	 ];
 	 $insert_aaray=[
 		 'dynamic_image_value'=>$aboutImage,
 	 ];
 	 $result=$this->db->where($contion)->update('tbl_dynamic_image', $insert_aaray);
 	 if($result){
 		 return true;
 	 }
 	 else {
 		 return false;
 	 }
  }

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
