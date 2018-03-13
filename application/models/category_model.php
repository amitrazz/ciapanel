<?php 
  class Category_model extends CI_model{
    public function create_category(){
      $data     = array(
        'name'    => $this->input->post('name'),
        'body'    => $this->input->post('body'),
        'user_id' => $this->session->userdata('user_id')
      );
      return $this->db->insert('categories',$data);
    }
    public function get_categories(){
      $this->db->order_by('name');
      $query  = $this->db->get('categories');
      return $query->result_array();
  
    }
    public function get_category($id){
      $query  = $this->db->get_where('categories',array(
        'id'    => $id

      ));
      return $query->row();
    }
    public function delete_category($id){
      $this->db->where('id', $id);
      $this->db->delete('categories');
      return true;

    }
  }