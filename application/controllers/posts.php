<?php 
class Posts extends CI_Controller {
  public function index ($offset  = 0){
    if($this->session->userdata('logged_in')){
    //post pagination 
    $config['base_url'] = base_url().'posts/index';
    $config['total_rows'] = $this->db->count_all('posts');
    $config['per_page'] = 2;
    $config['uri_segment'] = 3;
    $config['attributes'] = array('class' => 'pagination-link');

    $this->pagination->initialize($config);
    //post index method
    $data['title']  = 'Latest Posts';
    $data['posts']  = $this->post_model->get_posts( FALSE, $config['per_page'], $offset );
    $data['app_info']       = $this->appsetting_model->get_info();

    $this->load->view('templates/header',$data);
    $this->load->view('posts/index', $data);
    $this->load->view('templates/footer');
    }else{
      redirect('home');
    }

  }
  public function view($slug  = NULL){
    if($this->session->userdata('logged_in')){
      $data['app_info']       = $this->appsetting_model->get_info();
    $data['post']     = $this->post_model->get_posts($slug);
    $post_id          = $data['post']['id'];
    $data['comments'] = $this->comment_model->get_comment($post_id);
    if(empty($data['post'])){
      show_404();
    }
    $data['title']  = $data['post']['title'];

    $this->load->view('templates/header',$data);
    $this->load->view('posts/view', $data);
    $this->load->view('templates/footer');
  }else{
    redirect('home');
  }
  }
  public function create(){
    if($this->session->userdata('logged_in')){
      $data['app_info']       = $this->appsetting_model->get_info();
    $data['title']  = 'Add New Post';
    $data['categories'] = $this->post_model->get_categories();
    $this->form_validation->set_rules('title',' Title','trim|required');
    $this->form_validation->set_rules('body','Body','trim|required');
    if($this->form_validation->run()  === FALSE){
      $this->load->view('templates/header',$data);
      $this->load->view('posts/create', $data);
      $this->load->view('templates/footer');
    }else{
      //upload image 
      $config['upload_path']      = './assets/images/posts';
      $config['allowed_types']    = 'gif|jpg|png';
      $config['max_size']         = '2048';
      $config['max_width']        = '2024';
      $config['max_height']       = '2024';
      
      $this->load->library('upload', $config);
      if(!$this->upload->do_upload()){
        $errors   = array('error' => $this->upload->display_errors());
        $post_image = 'noimage.jpg';

      }else{
        $data = array('upload_data' =>  $this->upload->data());
        $post_image = $_FILES['userfile']['name'];

      }
      $this->post_model->create_post($post_image);
      redirect('posts');
    }
  }else{
    redirect('projects');
  }

  }
  public function delete($id){
    $this->post_model->delete_post($id);
    redirect('posts');

  }
  public function edit($slug){
    $data['app_info']       = $this->appsetting_model->get_info();
    $data['post']     = $this->post_model->get_posts($slug);
    //check user 
    if($this->session->userdata('user_id')  !=  $this->post_model->get_posts($slug)['user_id']  ){
      redirect('posts');
    }
    $data['categories'] = $this->post_model->get_categories();
    if(empty($data['post'])){
      show_404();
    }
    $data['title']  = 'Edit Post';
   
    $this->load->view('templates/header',$data);
    $this->load->view('posts/edit', $data);
    $this->load->view('templates/footer');
  }
  public function update(){
    $this->post_model->update_post();
    redirect('posts');
  }

}