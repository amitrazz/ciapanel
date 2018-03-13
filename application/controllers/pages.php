<?php 
  class Pages extends CI_controller{
    public function view ($page = 'index'){
      if(! file_exists(APPPATH. 'views/pages/'.$page. '.php')){
        show_404();
      }
      $data['app_info']       = $this->appsetting_model->get_info();
      $data['title']  = ucfirst($page);
      $this->load->view('templates/header',$data);
      $this->load->view('pages/'.$page, $data);
      $this->load->view('templates/footer');
  
    }
  
  }