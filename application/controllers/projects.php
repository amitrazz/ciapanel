<?php
  class Projects extends CI_controller{
    public function index(){
   if($this->session->userdata('logged_in')){
    $data['app_info']       = $this->appsetting_model->get_info();
    $data['title']  = "All Projects";
    $data['projects'] = $this->project_model->get_all_projects();

    $this->load->view('templates/header',$data);
    $this->load->view('projects/index',$data);
    $this->load->view('templates/footer');
    }else{
    redirect('home');
    }
  }
    // single project views
    public function view($id){
      if($this->session->userdata('logged_in')){
      $data['title']       = "Project";
      $data['project']     = $this->project_model->get_project($id);
      $data['app_info']       = $this->appsetting_model->get_info();
      $this->load->view('templates/header',$data);
      $this->load->view('projects/view',$data);
      $this->load->view('templates/footer');
      }else{
        redirect('home');
      }
    }

    //create 
    public function create(){
      if($this->session->userdata('logged_in')){
      $this->form_validation->set_rules('name','Projects Name','required');
      $this->form_validation->set_rules('body','projects Discription','required');
      if($this->form_validation->run()  == False){
        $data['title']  = "Add New Projects";
        $data['app_info']       = $this->appsetting_model->get_info();
        $this->load->view('templates/header',$data);
        $this->load->view('projects/create',$data);
        $this->load->view('templates/footer');
      }else{
        $user_id = $this->session->userdata('user_id');
        $this->project_model->create($user_id);
        redirect('projects');

      }
    }else{
      redirect('home');
    }
    }
    //edit
    public function edit($id){
      $this->form_validation->set_rules('name','Projects Name','required');
      $this->form_validation->set_rules('body','projects Discription','required');
      if($this->form_validation->run()  == False){
        $data['project']     = $this->project_model->get_project($id);
        $data['app_info']       = $this->appsetting_model->get_info();
        $data['title']  = "Edit Projects";
        
        $this->load->view('templates/header',$data);
        $this->load->view('projects/edit',$data);
        $this->load->view('templates/footer');
      }else{
        $id = $this->input->post('id');
        $this->project_model->update($id);
        redirect('projects');
      } 
      
    }
    //delet
    public function delete($id){
      $this->project_model->delete($id);
      redirect('projects');
    }

  }