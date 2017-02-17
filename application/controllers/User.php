<?php
class User extends CI_Controller {
    public function __construct()
    {
        parent :: __construct();
        $this->load->model('user_model');
    }
    
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Create User';

        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('layout/header');
            $this->load->view('user/user_form', $data);
            $this->load->view('layout/footer');
        }
        else
        {
            $this->user_model->create_user();
            redirect('/home');
        }
    }
    
    public function edit()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Edit User';

        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('layout/header');
            $this->load->view('user/user_form', $data);
            $this->load->view('layout/footer');
        }
        else
        {
            $this->user_model->create_user();
            redirect('/home');
        }
    }
}
