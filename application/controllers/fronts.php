<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fronts extends CI_Controller {
  public function index(){

    $this->load->view('front/header');
    $this->load->view('front/body');
    $this->load->view('front/sidebar');
    $this->load->view('front/footer');
  }

}