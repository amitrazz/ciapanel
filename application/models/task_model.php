<?php
  class Task_model extends CI_model{
    public function get_all_tasks(){
      $user_id = $this->session->userdata('user_id');
     $query = $this->db->get_where('tasks',array('user_id' => $user_id));
     return $query->result_array();
    }
    //get project name
    public function get_project(){
      $this->db->order_by('name');
      $user_id  = $this->session->userdata('user_id');
      $query  = $this->db->get_where('projects',array('user_id'  => $user_id));
      return $query->result_array();
    }
    //create 
    public function create(){
      $user_id  = $this->session->userdata('user_id');
      $data   = array(
        'name'          =>  $this->input->post('name'),
        'body'          =>  $this->input->post('body'),
        'due_date'      =>  $this->input->post('due_date'),
        'project_name'  =>  $this->input->post('project_name'),
        'user_id'       => $user_id 
      );
      $this->db->insert('tasks',$data);
      return true;
    }
    //view
    public function view($id){
     $query = $this->db->get_where('tasks',array('id' => $id));
     return $query->result_array();
    }
    //update task
    public function update(){
      $user_id  = $this->session->userdata('user_id');
      $data   = array(
        'name'          =>  $this->input->post('name'),
        'body'          =>  $this->input->post('body'),
        'due_date'      =>  $this->input->post('due_date'),
        'user_id'       => $user_id 
      );
      $this->db->where('id',$this->input->post('id'));
      $this->db->update('tasks',$data);
      return true;


    }
    //delete
    public function delete($id){
      $this->db->where('id',$id);
      $this->db->delete('tasks');
      return true;

    }
    
    public function tasks_count(){
      $query = $this->db->query('SELECT * FROM tasks');
     return $query->num_rows();
    }
  }