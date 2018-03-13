<?php 
  class Categories extends CI_Controller {
    public function index(){

      $data['title']       = 'Categories';
      $data['categories']  = $this->category_model->get_categories();
      $data['app_info']       = $this->appsetting_model->get_info();
      $this->load->view('templates/header',$data);
      $this->load->view('categories/index', $data);
      $this->load->view('templates/footer');

    }
    public function create(){
      $data['app_info']       = $this->appsetting_model->get_info();
      $data['title']  = 'Add new Category';
      $this->form_validation->set_rules('name','Name','required');
      if($this->form_validation->run() == false){
        $this->load->view('templates/header',$data);
        $this->load->view('categories/create', $data);
        $this->load->view('templates/footer');
      }else{
          $this->category_model->create_category();
          redirect('categories');
      }

    }
    public function posts($id){
      $data['title']    = $this->category_model->get_category($id)->name;
      $data['posts']    = $this->post_model->get_posts_by_category($id);
      $data['app_info']       = $this->appsetting_model->get_info();
      $this->load->view('templates/header',$data);
      $this->load->view('posts/index', $data);
      $this->load->view('templates/footer');
    }
    public function delete($id){
      $this->category_model->delete_category($id);
      redirect('categories');
  
    }

  }