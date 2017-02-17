<?php
class User_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_users()
    {
        $query = $this->db->get('user');
        return $query->result_array();
    }
    
    public function create_user()
    {
        $data = array(
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'email' => $this->input->post('email')
        );

        return $this->db->insert('user', $data);
    }
    
    public function edit_user()
    {
        $data = array(
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'email' => $this->input->post('email')
        );

        return $this->db->insert('user', $data);
    }
}
