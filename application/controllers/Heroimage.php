<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Heroimage extends CI_Controller {
	public $page  = 'Heroimage';
	public $table = 'tbl_dynamic_image';
	public function __construct() {
		parent::__construct();
		$this->load->model('General_model');
		$this->load->model('Heroimage_model');
	}

	public function index(){
		$template['body'] = 'admin/Heroimage/list';
		$template['script'] = 'admin/Heroimage/script';
		$this->load->view('admin/template', $template);
	}

	public function insert(){
		$image = $_FILES['hero_image']['name'];
		$data=array(
				 'dynamic_image_name' => $_FILES['hero_image']['name'],
				 'dynamic_image_status'=>1
				 );
				$config['upload_path'] = 'assets/img/heroimages';
							$config['allowed_types'] = 'jpg|jpeg|png|gif';
							$config['file_name'] = $_FILES['hero_image']['name'];
							$pic = $_FILES['hero_image']['name'];
							$this->load->library('upload',$config);
							$this->upload->initialize($config);
							$this->upload->do_upload('hero_image');
	 	$result = $this->General_model->add($this->table,$data);
		redirect('Heroimage');

	 }
  public function changeImage(){
   $result = $this->Heroimage_model->changeImage($_POST['hero_image']);
    var_dump($_POST);die;
	 if($result){
	 	redirect('Heroimage');
	 }
   }

}
