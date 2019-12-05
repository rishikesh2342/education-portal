<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ViewLoader
 *
 * @author admin
 */
class ViewLoader {

    var $ci;

    function __construct() {
        $this->ci = & get_instance();
    }

    function load($view, $data = null, $template = null) {
        $this->ci->load->library('Template');
        $templatePath = "default";
        if ($template !== null) {
            $templatePath = $template;
        }

        $this->ci->template->load($templatePath . "/index", $view, $data);
    }

    function load_user($view, $data = null, $template = null) {
        $this->ci->load->library('Template');
        $templatePath = "account";
        if ($template !== null) {
            $templatePath = $template;
        }

        $this->ci->template->load($templatePath . "/index", $view, $data);
    }

    function load_login($view, $data = null, $template = null) {
        $this->ci->load->library('Template');
        $templatePath = "Blank";
        if ($template !== null) {
            $templatePath = $template;
        }

        $this->ci->template->load($templatePath . "/index", $view, $data);
    }

}
