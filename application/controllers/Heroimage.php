<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Images extends CI_Controller {
	public $page  = 'Images';
	public $table = 'tbl_dynamic_image';
	public function __construct() {
		parent::__construct();
		$this->load->model('General_model');
		$this->load->model('Images_model');
	}

	public function index(){
		$template['body'] = 'admin/Images/list';
		$template['script'] = 'admin/Images/script';
		$this->load->view('admin/template', $template);
	}

	public function insert(){
		$image = $_FILES['aboutus_image']['name'];
		$data=array(
			'dynamic_image_field' => $_FILES['aboutus_image']['name'],
			'dynamic_image_status'=>1
		);
		$config['upload_path'] = 'assets/img/heroimages';
		$config['allowed_types'] = 'jpg|jpeg|png|gif';
		$config['file_name'] = $_FILES['aboutus_image']['name'];
		$pic = $_FILES['aboutus_image']['name'];
		$this->load->library('upload',$config);
		$this->upload->initialize($config);
		$this->upload->do_upload('aboutus_image');
		$table=$this->table;
		$condition=["dynamic_image_field"=>'aboutus_image'];
		$update_array=[
			"dynamic_image_value"=>$image
		];
		$result=$this->Images_model->updateimage($table,$condition,$update_array);
		if($result){
		}
		redirect('Images');
	}

}
