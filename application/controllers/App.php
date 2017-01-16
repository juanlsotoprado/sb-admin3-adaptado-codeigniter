<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

    function __construct() {
        parent::__construct();
        error_log("llego");

        if (!$this->session->userdata('usuario') || ($this->session->userdata('registrado') != "registrado")) {

           redirect('/login', 'refresh');
        }
      //  $this->load->model('General');
    }

    public function index() {
        $result = $this->session->all_userdata();

         //error_log(print_r($this->session->all_userdata(), true));

        $data['user_sesion'] = $this->session->all_userdata();

        $this->load->view('Header', $data);
        $this->load->view('Menu', $data);
        $this->load->view('Home');
        $this->load->view('Footer', $data);
    }

}
