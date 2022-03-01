<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller{
  function __construct() {
    parent::__construct();
    $this->load->model('Loginmodel');
  }
  public function index(){
    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');
    if ($this->form_validation->run() == FALSE) {
      $this->load->view('admin/Login/login');
    }
    else{
      $data = array('user_name' => $this->input->post('username'),
      'password' => $this->input->post('password')
    );
    $result = $this->Loginmodel->checkUserLogin($data);
    if($result){
    redirect('Dashboard');
}

else{
  $error['message'] = "The user name or password is invalid";
  $this->load->view('admin/Login/login',$error);
}
}
}
public function logout(){
  $this->session->sess_destroy();
  redirect('Login');
}
}
?>
