<?php 
 class User_model extends CI_model{
   
    public function create_user($enc_password){
      $data    = array(
        'first_name'      =>  $this->input->post('first_name'),
        'last_name'       =>  $this->input->post('last_name'),
        'username'        =>  $this->input->post('username'),
        'email'           =>  $this->input->post('email'),
        'password'        =>  $enc_password
      );
      return $this->db->insert('users',$data);
    }
    //login
    public function login($username ,$password){
      $this->db->where('username', $username);
      $this->db->where('password', $password);
      $result = $this->db->get('users');
      if($result->num_rows() == 1 ){
        return $result->row(0)->id;
      }else{
        return FALSE;

      }
    }
    //check user exit
    public function check_username_exists($username){
        $query   = $this->db->get_where('users',array('username' => $username));
        if(empty($query->row_array())){
          return TRUE;
        }else{
          return FALSE;
        }    
    }
     //check email exit
     public function check_email_exists($email){
      $query   = $this->db->get_where('users',array('email' => $email));
      if(empty($query->row_array())){
        return TRUE;
      }else{
        return FALSE;
      }    
    }
    //get userinfo
    public function get_info($user_id){
    $query =  $this->db->get_where('users', array('id'  => $user_id));
      return $query->row_array();
    }
    public function update($enc_password, $user_id){
      $data    = array(
        'first_name'      =>  $this->input->post('first_name'),
        'last_name'       =>  $this->input->post('last_name'),
        'password'        =>  $enc_password
      );
      $this->db->where('id', $user_id);
      return $this->db->update('users',$data);

    }
    public function get_all_users(){
      $this->db->order_by('username','ASC');
      $query  = $this->db->get('users');
      return $query->result_array();
    } 
    
    public function users_count(){
      $query = $this->db->query('SELECT * FROM users');
     return $query->num_rows();
    }
 }