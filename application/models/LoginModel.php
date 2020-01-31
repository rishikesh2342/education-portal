<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class LoginModel extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getUserByUserNameAndPassword($userName,$password) {
        $this->db->select('*');
        $this->db->from('login');
        $this->db->where('username',$userName);
        $this->db->where('password',$password);
        return $this->db->get();
    }

}
