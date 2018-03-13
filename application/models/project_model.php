<?php
  class project_model extends CI_model{
    public function get_all_projects(){
      $this->db->order_by('projects.id','DESC');
      $query  = $this->db->get('projects');
      return $query->result_array();
    }
    //create
    public function create($user_id){
      $data   = array(
        'user_id'    => $user_id,
        'name'       => $this->input->post('name'),
        'body'       => $this->input->post('body')
      );
      return $this->db->insert('projects',$data);

    }
    //get single project data
    public function get_project($id){
      $query = $this->db->get_where('projects',array('id' => $id));
      return $query->row_array();
    }
    //delete
    public function delete($id){
      $this->db->where('id',$id);
      $this->db->delete('projects');
      return true;
    }
    //update
    public function update($id){
      $data = array(
        'name'     =>  $this->input->post('name'),
        'body'      =>  $this->input->post('body')
      );
      $this->db->where('id',$id);
      return $this->db->update('projects', $data);
    }
    //get project by user
    public function get_project_user(){
      $user_id = $this->session->userdata('user_id');
      $query = $this->db->get_where('projects', array('user_id' => $user_id));
      return $query->result_array();
    }
    public function projects_count(){
      $query = $this->db->query('SELECT * FROM projects');
     return $query->num_rows();
    }
   
  }