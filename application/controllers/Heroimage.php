<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Heroimage extends CI_Controller {
	public $page  = 'Heroimage';
	public $table = 'tbl_dynamic_image';
	public function __construct() {
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->library('session');
		$this->load->model('General_model');
		$this->load->model('Heroimage_model');
	}

	public function index(){
		$template['body'] = 'admin/Heroimage/list';
		$template['script'] = 'admin/Heroimage/script';
		$this->load->view('admin/template', $template);

	}

	// public function insert(){
	// 	$image = $_FILES['hero_image']['name'];
	// 	$data=array(
	// 		'dynamic_image_field' => $_FILES['hero_image']['name'],
	// 		'dynamic_image_status'=>1
	// 	);
	// 	$config['upload_path'] = 'assets/img/heroimages';
	// 	$config['allowed_types'] = 'jpg|jpeg|png|gif';
	// 	$config['file_name'] = $_FILES['hero_image']['name'];
	// 	$pic = $_FILES['hero_image']['name'];
	// 	$this->load->library('upload',$config);
	// 	$this->upload->initialize($config);
	// 	$this->upload->do_upload('hero_image');
	// 	$table=$this->table;
	// 	$condition=["dynamic_image_field"=>'aboutus_image'];
  //   // $condition=["dynamic_image_field"=>'about_subimage'];
	// 	$update_array=[
	// 		"dynamic_image_value"=>$image
	// 	];
	// 	$result=$this->Heroimage_model->updateimage($table,$condition,$update_array);
	// 	if($result){
	// 	}
	// 	redirect('Heroimage');
	// }

	// public function changeImage(){
  //   $aboutImage = $this->Heroimage_model->changeaboutImage($_FILES['aboutus_image']['name']);
  //    var_dump($_FILES);die;
	// 	 if($aboutImage){
	// 		redirect('Heroimage');
	// 	}
	// }
    public function changeImage(){
      $image = $_FILES['about_subimage']['name'];
			$data=array(
			 		'dynamic_image_field' => $_FILES['about_subimage']['name'],
			 		'dynamic_image_status'=>1
			 	);
			 	$config['upload_path'] = 'assets/img/heroimages';
			 	$config['allowed_types'] = 'jpg|jpeg|png|gif';
			 	$config['file_name'] = $_FILES['hero_image']['name'];
			 	$pic = $_FILES['hero_image']['name'];
			 	$this->load->library('upload',$config);
			 	$this->upload->initialize($config);
			 	$this->upload->do_upload('hero_image');
			 	$table=$this->table;
        $aboutImage = $this->Heroimage_model->changeaboutImage($_FILES['aboutus_image']['name']);
        if($aboutImage){
         redirect('Heroimage');
      }
    }

}
