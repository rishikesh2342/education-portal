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
    public function SignUp() {
        $this->viewloader->load('signUp/index.php');
    }
    public function Classes() {
        $this->viewloader->load_user('class/index.php');
    }
    public function students() {
        $this->viewloader->load_user('student/index.php');
    }
    public function subject() {
        $this->viewloader->load_user('subject/index.php');
    }
    public function classFee() {
        $this->viewloader->load_user('fees/classFee.php');
    }
    public function transportFee() {
        $this->viewloader->load_user('fees/transportFee.php');
    }
    public function staffAttendance() {
        $this->viewloader->load_user('staff/staffattendance.php');
    }
    public function staffList() {
        $this->viewloader->load_user('staff/stafflist.php');
    }
    public function studentReviewLog() {
        $this->viewloader->load_user('reviewlog/staffReviewLog.php');
    }
    public function staffReviewLog() {
        $this->viewloader->load_user('reviewlog/studentReviewLog.php');
    }
}
