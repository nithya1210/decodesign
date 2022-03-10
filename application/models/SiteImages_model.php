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
public function getportfolioImage(){
	$condition=[
		'image_field'=>'portfolioimage'
	];
	$query=$this->db->select('image_value')->where($condition)->get('tbl_site_images');
	return $query->row()->image_value;
}
public function getportfolioImage1(){
	$condition=[
		'image_field'=>'portfolioimage1'
	];
	$query=$this->db->select('image_value')->where($condition)->get('tbl_site_images');
	return $query->row()->image_value;
}
public function getportfolioImage2(){
	$condition=[
		'image_field'=>'portfolioimage2'
	];
	$query=$this->db->select('image_value')->where($condition)->get('tbl_site_images');
	return $query->row()->image_value;
}
public function getportfolioImage3(){
	$condition=[
		'image_field'=>'portfolioimage3'
	];
	$query=$this->db->select('image_value')->where($condition)->get('tbl_site_images');
	return $query->row()->image_value;
}
public function getportfolioImage4(){
	$condition=[
		'image_field'=>'portfolioimage4'
	];
	$query=$this->db->select('image_value')->where($condition)->get('tbl_site_images');
	return $query->row()->image_value;
}
public function getportfolioImage5(){
	$condition=[
		'image_field'=>'portfolioimage5'
	];
	$query=$this->db->select('image_value')->where($condition)->get('tbl_site_images');
	return $query->row()->image_value;
}
public function getportfolioImage6(){
	$condition=[
		'image_field'=>'portfolioimage6'
	];
	$query=$this->db->select('image_value')->where($condition)->get('tbl_site_images');
	return $query->row()->image_value;
}
public function getportfolioImage7(){
	$condition=[
		'image_field'=>'portfolioimage7'
	];
	$query=$this->db->select('image_value')->where($condition)->get('tbl_site_images');
	return $query->row()->image_value;
}
public function getportfolioImage8(){
	$condition=[
		'image_field'=>'portfolioimage8'
	];
	$query=$this->db->select('image_value')->where($condition)->get('tbl_site_images');
	return $query->row()->image_value;
}
public function getportfolioImage9(){
	$condition=[
		'image_field'=>'portfolioimage9'
	];
	$query=$this->db->select('image_value')->where($condition)->get('tbl_site_images');
	return $query->row()->image_value;
}
public function getportfolioImage10(){
	$condition=[
		'image_field'=>'portfolioimage10'
	];
	$query=$this->db->select('image_value')->where($condition)->get('tbl_site_images');
	return $query->row()->image_value;
}
public function getportfolioImage11(){
	$condition=[
		'image_field'=>'portfolioimage11'
	];
	$query=$this->db->select('image_value')->where($condition)->get('tbl_site_images');
	return $query->row()->image_value;
}
public function getportfolioImage12(){
	$condition=[
		'image_field'=>'portfolioimage12'
	];
	$query=$this->db->select('image_value')->where($condition)->get('tbl_site_images');
	return $query->row()->image_value;
}
public function getportfolioImage13(){
	$condition=[
		'image_field'=>'portfolioimage13'
	];
	$query=$this->db->select('image_value')->where($condition)->get('tbl_site_images');
	return $query->row()->image_value;
}
public function getportfolioImage14(){
	$condition=[
		'image_field'=>'portfolioimage14'
	];
	$query=$this->db->select('image_value')->where($condition)->get('tbl_site_images');
	return $query->row()->image_value;
}
public function getportfolioImage15(){
	$condition=[
		'image_field'=>'portfolioimage15'
	];
	$query=$this->db->select('image_value')->where($condition)->get('tbl_site_images');
	return $query->row()->image_value;
}
public function getportfolioImage16(){
	$condition=[
		'image_field'=>'portfolioimage16'
	];
	$query=$this->db->select('image_value')->where($condition)->get('tbl_site_images');
	return $query->row()->image_value;
}
public function getportfolioImage17(){
	$condition=[
		'image_field'=>'portfolioimage17'
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
//team images
public function getteamImage1(){
	$condition=[
		'image_field'=>'Team-image1'
	];
	$query=$this->db->select('image_value')->where($condition)->get('tbl_site_images');
	return $query->row()->image_value;
}
public function getteamImage2(){
	$condition=[
		'image_field'=>'Team-image2'
	];
	$query=$this->db->select('image_value')->where($condition)->get('tbl_site_images');
	return $query->row()->image_value;
}
public function getteamImage3(){
	$condition=[
		'image_field'=>'Team-image3'
	];
	$query=$this->db->select('image_value')->where($condition)->get('tbl_site_images');
	return $query->row()->image_value;
}
public function getteamImage4(){
	$condition=[
		'image_field'=>'Team-image4'
	];
	$query=$this->db->select('image_value')->where($condition)->get('tbl_site_images');
	return $query->row()->image_value;
}

}
