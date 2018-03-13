<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employes extends CI_Controller{
  public function index(){
    $data['employes'] = $this->employe_model->get_all_employe();
    $data['title']    = "Employes";
    $data['app_info']       = $this->appsetting_model->get_info();

    $this->load->view('templates/header', $data);
    $this->load->view('employes/index', $data);
    $this->load->view('templates/footer');
  }
  public function add(){
    $this->form_validation->set_rules('company_id','Company ID','required');
    $this->form_validation->set_rules('name','Name','required');
    $this->form_validation->set_rules('email','Email','required|valid_email');
    $this->form_validation->set_rules('role','role','required');
    $this->form_validation->set_rules('salary','salary','required|numeric');
    if ($this->form_validation->run() == FALSE){
      $data['employes'] = $this->employe_model->get_all_employe();
      $data['title']    = "Add Employe";
      $data['app_info']       = $this->appsetting_model->get_info();
  
      $this->load->view('templates/header', $data);
      $this->load->view('employes/add', $data);
      $this->load->view('templates/footer');
    }else{
      $this->employe_model->add_employe();
      redirect('employes/index');
    } 
  }
  public function delete($id){
    $this->employe_model->delete($id);
    redirect('employes/index');

  }

}