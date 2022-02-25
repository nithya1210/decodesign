<?php
$this->load->view('admin/Template/header');
$this->load->view('admin/Template/left_navigation');
$this->load->view($body);
$this->load->view('admin/Template/footer');
$this->load->view($script);
?>
