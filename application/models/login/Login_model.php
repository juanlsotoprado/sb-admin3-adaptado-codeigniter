<?php

class Login_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function ValidarUsuario($usuario, $password) {

        $query = "select p.*
                from usuario u 
                inner join personal p on(u.id_personal = p.id)
                where  
                u.nombre = '" . $usuario . "' AND
                u.clave = '" . $password . "' AND
                p.id_estatus = 1
                ";
        $result = $this->db->query($query);

        if ($result->num_rows() > 0) {
            foreach ($result->result_array() as $row) {

                return $row;
                
                //  error_log(print_r($row,true));
            }
        } else {

            return false;
        }
    }
    
    
      public function CerrarSession() {

       $this->session->sess_destroy();
       
     }

}

?>