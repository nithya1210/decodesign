<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class SiteImages_model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}

public function get_image_fields_list(){
	$query=$this->db->select('*')->get('tbl_site_images');
	return $query->result();
}

public function update_image($table,$condition,$update_array){
	$query=$this->db->where($condition)->update($table,$update_array);
	return $query ? true : false;
}

public function getAboutUsImage(){
	$condition=[
		'image_field'=>'about-us'
	];
	$query=$this->db->select('image_value')->where($condition)->get('tbl_site_images');
	return $query->row()->image_value;
}
public function getheroImage(){
	$condition=[
		'image_field'=>'hero'
	];
	$query=$this->db->select('image_value')->where($condition)->get('tbl_site_images');
	return $query->row()->image_value;
}
public function getAboutsubImage(){
	$condition=[
		'image_field'=>'aboutsub-us'
	];
	$query=$this->db->select('image_value')->where($condition)->get('tbl_site_images');
	return $query->row()->image_value;
}

}
