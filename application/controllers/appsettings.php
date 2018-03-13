<?php 
  class Appsettings extends CI_Controller {
    public function edit(){
      $this->form_validation->set_rules('app_logo','Logo','required');
      $this->form_validation->set_rules('app_name','Site Name','required');
      if($this->form_validation->run()  == False){
        $data['title']       = 'Edit Site info';
        $data['app_info']       = $this->appsetting_model->get_info();
        $this->load->view('templates/header',$data);
        $this->load->view('appsettings/edit', $data);
        $this->load->view('templates/footer');
      }else{
        $this->appsetting_model->update();
        redirect('home');
      }
    }

  }