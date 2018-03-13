<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
      public function index(){
        $data['app_info']       = $this->appsetting_model->get_info();
        $data['title']  = "Users";
        $data['users']  = $this->user_model->get_all_users();
        $this->load->view('templates/header',$data);
        $this->load->view('users/index', $data);
        $this->load->view('templates/footer');

      }
      public function views(){
        $data['title']  = "Profile Info";
        $user_id  = $this->session->userdata('user_id');
        $data['user_info']  = $this->user_model->get_info($user_id);
        $data['app_info']       = $this->appsetting_model->get_info();
        $this->load->view('templates/header',$data);
        $this->load->view('users/view', $data);
        $this->load->view('templates/footer');
      }
    
      public function register(){

        $this->form_validation->set_rules('first_name','First Name','required');
        $this->form_validation->set_rules('last_name','Last Name','required');
        $this->form_validation->set_rules('username','User Name','required|callback_check_username_exists');
        $this->form_validation->set_rules('email','Email','required|valid_email|callback_check_email_exists');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('password_confirmation','Confirm password','matches[password]');
        if($this->form_validation->run() == False){

          $this->load->view('users/register');
        }else{
          //password enscription
          $enc_password = md5($this->input->post('password'));
            $this->user_model->create_user($enc_password);
            $this->session->set_flashdata('Registered','you are Scucessfully Registered');
            redirect('users/login');
        }
      }
      //check username exit
      public function check_username_exists($username){
        $this->form_validation->set_message('check_username_exists','User Name is taken,Please chose a different One');
        if($this->user_model->check_username_exists($username)){
          return true;
        }else{
          return false;
        }
      }
      //check email exit
      public function check_email_exists($email){
        $this->form_validation->set_message('check_email_exists','Email is Taken,Please chose a different One');
        if($this->user_model->check_email_exists($email)){
          return true;
        }else{
          return false;
        }
      }
 //login controller
	public function login(){
    $this->form_validation->set_rules('username','User Name','required');
    $this->form_validation->set_rules('password','Password','required');
    if($this->form_validation->run() == False){

      $this->load->view('users/login');
    }else{
      //get username and password
      $username = $this->input->post('username');
      $password = md5($this->input->post('password'));
      //get user id
      $user_id = $this->user_model->login($username ,$password);
      //checking for correct user id
      if($user_id){
        //create session
        $user_data  = array(
          'user_id'   =>  $user_id,
          'username'  =>  $username,
          'logged_in' =>  TRUE
        );
        $this->session->set_userdata($user_data);

        $this->session->set_flashdata('login','you are Now Loged in');
        redirect('home');
      }else{
        $this->session->set_flashdata('invalid_login','Invalid user name or password ');
        redirect('users/login');

      }
    }
  }
  //edit 
  public function edit(){
    $this->form_validation->set_rules('first_name','First Name','required');
    $this->form_validation->set_rules('last_name','Last Name','required');
    $this->form_validation->set_rules('password','Password','required');
    $this->form_validation->set_rules('password_confirmation','Confirm password','matches[password]');
    if($this->form_validation->run() == False){
      $user_id = $this->session->userdata('user_id');
      $data['user_info']  = $this->user_model->get_info($user_id);
      $data['title']  = 'Profile Setting';
      $data['app_info']       = $this->appsetting_model->get_info();
      $this->load->view('templates/header',$data);
      $this->load->view('users/edit',$data);
      $this->load->view('templates/footer');
    }else{
      //password enscription
      $user_id = $this->session->userdata('user_id');
        $enc_password = md5($this->input->post('password'));
        $this->user_model-> update($enc_password,$user_id);
        $this->session->set_flashdata('edited','you are profile updated Scucessfully');
        redirect('users/views');
    }
  }
  //logout
  public function logout(){
    $this->session->unset_userdata('logged_in');
    $this->session->unset_userdata('username');
    $this->session->unset_userdata('user_id');
    $this->session->set_flashdata('logout','You Were logged out scucessfully ');
    redirect('users/login');
  }
}
