<?php
  class Tasks extends CI_controller{
    public function index(){
      $data['app_info']       = $this->appsetting_model->get_info();
      $data['title']  = 'Task Assigned';
      $data['tasks']  = $this->task_model->get_all_tasks();

      $this->load->view('templates/header',$data);
      $this->load->view('tasks/index',$data);
      $this->load->view('templates/footer');
    }
    //task create meyhod
    public function create(){
      $this->form_validation->set_rules('name','Task name','required');
      $this->form_validation->set_rules('due_date','Task Due date','required');
      $this->form_validation->set_rules('body','Task discription','required');
      if($this->form_validation->run()  == False){
        $data['projects'] = $this->task_model->get_project();
        $data['title']  = 'Add new Task';
        $data['app_info']       = $this->appsetting_model->get_info();
        $this->load->view('templates/header',$data);
        $this->load->view('tasks/create',$data);
        $this->load->view('templates/footer');
      }else{
        $this->task_model->create();
        redirect('tasks');
      }
    }
    //single task view
    public function view($id){
      $data['title'] = "Task";
      $data['tasks'] = $this->task_model->view($id);
      $data['app_info']       = $this->appsetting_model->get_info();
      $this->load->view('templates/header',$data);
      $this->load->view('tasks/view',$data);
      $this->load->view('templates/footer');
    }
    //edit task
    public function edit($id){
      $this->form_validation->set_rules('name','Task name','required');
      $this->form_validation->set_rules('due_date','Task Due date','required');
      $this->form_validation->set_rules('body','Task discription','required');
      if($this->form_validation->run()  == False){
        $data['tasks'] = $this->task_model->view($id);
        $data['title'] = 'Edit task';
        $data['app_info']       = $this->appsetting_model->get_info();
        $this->load->view('templates/header',$data);
        $this->load->view('tasks/edit',$data);
        $this->load->view('templates/footer');
      }else{
        $this->task_model->update();
        redirect('tasks');
      }
    }
    //delete
    public function delete($id){
      $this->task_model->delete($id);
      redirect('tasks');
    }
  }