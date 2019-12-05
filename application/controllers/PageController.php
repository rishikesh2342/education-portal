<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PageController extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('ViewLoader');
    }

    public function dashboard() {
        $this->viewloader->load_user('dashboard/index.php');
    }
    public function contactUs() {
        $this->viewloader->load('contactUs/index.php');
    }
    public function gallery() {
        $this->viewloader->load('gallery/index.php');
    }
    public function about() {
        $this->viewloader->load('about/index.php');
    }
    public function logIn() {
        $this->viewloader->load('login/index.php');
    }


}
