<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('ViewLoader');
        $this->load->model('LoginModel');
    }

    public function submitLogin() {
        $this->form_validation->set_rules('username', 'User Name', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE) {
            echo validation_errors();
        } else {
            $userName = $_POST['username'];
            $password = md5($_POST['password']);
            $query = $this->LoginModel->getUserByUserNameAndPassword($userName, $password)->result();
            if (count($query) > 0) {
                $this->session->set_userdata('userId', $query[0]->id);
                $this->session->set_userdata('userName', $query[0]->username);
                $this->session->set_userdata('logIn', true);
                echo '1';
            } else {
                echo '0';
            }

//            } else {
//                $query = $this->StaffModel->getStaffByUserNameAndPassword($userName, $password)->result();
//                if (count($query) > 0) {
//                    $this->session->set_userdata('userId', $query[0]->id);
//                    $this->session->set_userdata('userName', $query[0]->staff_name);
//                    $this->session->set_userdata('userEmail', $query[0]->staff_email);
//                    $this->session->set_userdata('logIn', true);
//                    echo '1';
//                } else {
//                    echo '0';
//                }
//            }
        }
    }

}
