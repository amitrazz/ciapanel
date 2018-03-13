<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index(){
		if($this->session->userdata('logged_in')){
			$data['users_count'] = $this->user_model->users_count();
			$data['projects_count'] = $this->project_model->projects_count();
			$data['tasks_count'] = $this->task_model->tasks_count();
			$data['posts_count'] = $this->post_model->posts_count();
			$data['title']		=	'Dashbaord';
			$data['app_info']       = $this->appsetting_model->get_info();
			$data['projects']		=	$this->project_model->get_project_user();
			$data['posts']  = $this->post_model->get_all_post();
			$data['tasks']  = $this->task_model->get_all_tasks();

			$this->load->view('templates/header',$data);
			$this->load->view('home',$data);
			$this->load->view('templates/footer');
		}else{
			redirect('users/login');
		}
	
		
	}
}
