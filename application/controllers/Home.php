<?php
class Home extends CI_Controller {
    public function __construct()
    {
        parent :: __construct();
        $this->load->model('user_model');
    }
    
    public function index()
    {
        $data['users'] = $this->user_model->get_users();
        $this->load->view('layout/header');
        $this->load->view('home/home_page', $data);
        $this->load->view('layout/footer');
    }
}