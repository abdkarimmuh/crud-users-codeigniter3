<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->helper('url');
        $this->load->helper('security');
    }

    public function index() {
        $data['users'] = $this->User_model->get_all_users();

        if (empty( $data['users'])) {
            $api_data = $this->fetch_users_from_api();
            if (!empty($api_data)) {
                foreach ($api_data as $user) {
                    $data = [
                        'email'     => $user['email'],
                        'username'  => $user['username'],
                        'password'  => password_hash('password123', PASSWORD_DEFAULT), // Default password
                        'firstname' => $user['name']['firstname'],
                        'lastname'  => $user['name']['lastname'],
                        'city'      => $user['address']['city'],
                        'street'    => $user['address']['street'],
                        'number'    => $user['address']['number'],
                        'postcode'  => $user['address']['zipcode'],
                        'phone'     => $user['phone']
                    ];
                    $this->User_model->insert_user($data);
                }
                $users = $this->User_model->get_all_users();
                $data['users'] = $users;
            }
        }

        $this->load->view('users/index', $data);
    }

    public function create() {
        $this->load->view('users/create');
    }

    public function store() {
        $data = [
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'city' => $this->input->post('city'),
            'street' => $this->input->post('street'),
            'number' => $this->input->post('number'),
            'postcode' => $this->input->post('postcode'),
            'phone' => $this->input->post('phone')
        ];
        $this->User_model->insert_user($data);
        redirect('users');
    }

    public function edit($id) {
        $data['user'] = $this->User_model->get_user($id);
        $this->load->view('users/edit', $data);
    }

    public function update($id) {
        $data = [
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'city' => $this->input->post('city'),
            'street' => $this->input->post('street'),
            'number' => $this->input->post('number'),
            'postcode' => $this->input->post('postcode'),
            'phone' => $this->input->post('phone')
        ];
        $this->User_model->update_user($id, $data);
        redirect('users');
    }

    public function delete($id) {
        $this->User_model->delete_user($id);
        redirect('users');
    }

    private function fetch_users_from_api() {
        $api_url = "https://fakestoreapi.com/users";
        $json_data = file_get_contents($api_url);
        return json_decode($json_data, true);
    }

}
