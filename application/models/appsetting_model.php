<?php 
  class Appsetting_model extends CI_Model{
    public function get_info() {
      $query  = $this->db->get('appsettings');
      return $query->result_array();
    } 
    public function update(){
      $data = array(
        'app_logo'     =>  $this->input->post('app_logo'),
        'app_name'      =>  $this->input->post('app_name')
      );
      return $this->db->update('appsettings', $data);
    }
  }