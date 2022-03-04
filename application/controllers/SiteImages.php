<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class SiteImages extends CI_Controller {
	public $page  = 'SiteImages';
	public $table = 'tbl_site_images';
	public function __construct() {
		parent::__construct();
		$this->load->model('General_model');
		$this->load->model('SiteImages_model');
	}

	public function index(){
		$template['fields']=$this->SiteImages_model->get_image_fields_list();
		$template['body'] = 'admin/SiteImages/list';
		$template['script'] = 'admin/SiteImages/script';
		$this->load->view('admin/template', $template);
	}

	public function insert(){
		$field_id=$_POST['field'];
		$image_name=$_FILES['picture']['name'];
		$update_array=[
			'image_value'=>$image_name
		];
		$condition=[
			'image_id'=>$field_id
		];
		$config['upload_path'] = 'assets/img/Imagess';
		$config['allowed_types'] = 'jpg|jpeg|png|gif';
		$config['file_name'] = $image_name;
		$pic = $image_name;
		$this->load->library('upload',$config);
		$this->upload->initialize($config);
		$this->upload->do_upload($image_name);
		$table=$this->table;
		$result=$this->SiteImages_model->update_image($table,$condition,$update_array);
		if($result){
			redirect('SiteImages');
		}
	}
}
