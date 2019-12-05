<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
      function __construct() {
        parent::__construct();
        $this->load->library('ViewLoader');
    }

	public function index()
	{
		$this->viewloader->load('index.php');
	}
}
