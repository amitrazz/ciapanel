<?php
  class employe_model extends CI_model{
    public function get_all_employe(){
    $this->db->order_by('id','ASC');
     $query =  $this->db->get('employes');
     return $query->result_array();
    }
    public function add_employe(){
      $data = array(
        'company_id'  => $this->input->post('company_id'),
        'name'        => $this->input->post('name'),
        'email'       => $this->input->post('email'),
        'role'        => $this->input->post('role'),
        'salary'      => $this->input->post('salary')
      );
      $this->db->insert('employes',$data);
      return true;
    }
    public function delete($id){
      $this->db->where('id', $id);
      $this->db->delete('employes');
      return true;

    }
  }