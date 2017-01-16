<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('login/Login_model');
      //  $this->load->model('General');
    }

    public function index() {

        if (!$this->session->userdata('usuario') || ($this->session->userdata('registrado') != "registrado")) {

            $this->load->view('Login/Login');
        } else {

            redirect('/app', 'refresh');
        }
    }

    public function Validar() {

        if (!$this->session->userdata('usuario') || ($this->session->userdata('registrado') != "registrado")) {

            $usuario = isset($_POST['usuario']);
            $password = isset($_POST['password']);

            if (($password) && ($usuario)) {

                $result['usuario'] = "jsoto";
                $result['registrado'] = "registrado";
               // $result['perfil'] = $result2;
               // $result['sede'] = $result4;
               // $result['perfil_seleccionado'] = $result3;

                $this->session->set_userdata($result);
                redirect('/app', 'refresh');


                /*
                  $result = $this->Login_model->ValidarUsuario($_POST['usuario'], $_POST['password']);

                  if ($result) {
                  $result2 = $this->General->Get_perfil($result['cedula']);
                  $result3 = $this->General->Get_perfil_principal($result['cedula']);
                  $result4 = $this->General->Get_sede($result['cedula']);

                  $result['usuario'] = $_POST['usuario'];
                  $result['registrado'] = "registrado";
                  $result['perfil'] = $result2;
                  $result['sede'] = $result4;
                  $result['perfil_seleccionado'] = $result3;

                  $this->session->set_userdata($result);
                  redirect('/app', 'refresh');
                  } else {

                  redirect('/login', 'refresh');
                  }

                 */
            } else {

                redirect('/login', 'refresh');
                error_log('Revento usuario y clave');

                exit;
            }
        } else {
//            
            redirect('/login', 'refresh');
            error_log('Revento usuario y clave');
        }
    }

    public function Cerrar() {
        $this->Login_model->CerrarSession();
        redirect('/login', 'refresh');
    }

}
