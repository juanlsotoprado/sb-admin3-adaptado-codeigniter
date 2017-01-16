<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>Por definir</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport"
              content="width=device-width, initial-scale=1, maximum-scale=1">


        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
        <!--[if lt IE 9]>
                                <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
                        <![endif]-->

        <style type="text/css">


            @media (max-width: 768px) {
                .normativa-right { display: none;}
            }
            .modal-footer {   border-top: 0px; }

            body{
                background: url(<?php echo base_url('publico/img/fondo.jpeg'); ?>) ;
                background-repeat: no-repeat;
                // background-repeat: repeat;
                background-size: 100% 100%;

                background-attachment: fixed;
                overflow: auto;
                overflow-x: hidden;

            }
            .modal-header, h4, .close {
                background-color: #a3303d;
                color:white !important;
                text-align: center;
                font-size: 20px;
            }

            /*            @media screen and (max-width: 768px) {
            
                            #img_derecha{
            
                                display: none;
                            }
            
                        }*/
            .modal-dialog {
                height: 80% !important;
                padding-top:20%;
            }

            .modal-content {
                height: 100% !important;
                overflow:visible;
                -webkit-box-shadow: 0px 64px 79px 2px rgba(0,0,0,0.36);
                -moz-box-shadow: 0px 64px 79px 2px rgba(0,0,0,0.36);
                box-shadow: 0px 64px 79px 2px rgba(0,0,0,0.36);
            }

            .modal-body {
                height: 80%;
                overflow: auto;
            }
        </style>

    </head>
    <body>

        <div class=""style="margin: 0; height: 50px;background: #ffffff;
             -webkit-box-shadow: 0px 12px 20px -15px  rgba(0,0,0,0.75);
             -moz-box-shadow: 0px 12px 20px -15px  rgba(0,0,0,0.75);
             box-shadow: 0px 12px 20px -15px rgba(0,0,0,0.75);
             -webkit-border-bottom-right-radius: 10px;
             -webkit-border-bottom-left-radius: 10px;
             -moz-border-radius-bottomright: 10px;
             -moz-border-radius-bottomleft: 10px;
             border-bottom-right-radius: 10px;
             border-bottom-left-radius: 10px;">
       <div  style="padding-left: 12px; ">
                <img   style="height: 50px; float: left;  border-bottom: 1px solid #eee;" class="img-responsive" alt=""
                       src="http://apis.mppeuct.gob.ve/img/comun/normativa-izquierda-transparente.png">
                <img class="normativa-right" style="height: 50px; width: 150px; float: right; border-bottom: 1px solid #eee;" class="img-responsive" alt=""
                     src="http://apis.mppeuct.gob.ve/img/comun/normativa-derecha.png">
            </div>

            <div class="row" >
                <img   style="height:  100px;  border-bottom: 1px solid #eee;" class="img-responsive col-lg-12" alt=""
                     src="<?php echo base_url('publico/img/banner_ed2.png'); ?>">

            </div> 
        </div>

        <!--         <div class=""style="margin: 0; height: 70px;background: #ffffff;">
                    <img  src="http://apis.mppeuct.gob.ve/img/comun/normativa-izquierda-transparente.png" class="img-responsive" style="float: left"/>
        
                    <img src="http://apis.mppeuct.gob.ve/img/comun/normativa-derecha-transparente.png" class="img-responsive" style="float: right" id="img_derecha"/>
                </div>-->
        <!--login modal-->
        <div id="loginModal" class="show" role="dialog"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4><span class="glyphicon glyphicon-lock"></span> Iniciar sesión</h4>
                    </div>
                    <div class="modal-body" style="padding:20px 20px 10px 10px;">                    
                        <form class="form col-md-12 center-block" action="<?php echo base_url('index.php/Login/Validar'); ?>" method="post" >


                            <div class="form-group">
                                <label for="usrname"><span class="glyphicon glyphicon-user"></span> Usuario</label>
                                <input  type="text" class="form-control input-lg"
                                        placeholder="Usuario" name='usuario' id='usuario'>                        </div>
                            <div class="form-group">
                                <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Contraseña</label>
                                <input type="password" class="form-control input-lg"
                                       placeholder="Contraseña"  name='password' id='password'>   
                            </div>
                            <div class="cargando" style="display: none;color: #777;font-size: 14px;font-weight: bold;width:100%;text-align: right">Cargando...</div>
                            <div class="error" style="display: none;color: #B22222;font-size: 14px;font-weight: bold;width:100%;text-align: right">Usuario o clave invalida ...</div>

                            <div style="text-align: center">

                                <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-off"></span> Entrar</button>

                            </div>
                        </form>
                    </div>

                    <div class="modal-footer">
                        <div class="col-md-12"></div>
                    </div>
                </div>
            </div>
        </div>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha256-Sk3nkD6mLTMOF0EOpNtsIry+s1CsaqQC1rVLTAy+0yc= sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>

        <?php if (!empty($_SESSION['error'])) { ?>
            <script>
                $(document).ready(function () {

                    $('.error').fadeIn(600).delay(300).fadeOut(400).fadeIn(400).fadeOut(400).fadeIn(300).fadeOut(300);


                });
            </script>

            <?php
            unset($_SESSION['error']);
        }
        ?>
        <script>

            function cargando() {
                $('.cargando').fadeIn(500).delay(300).fadeOut(400, cargando)
            }
            ;

            $(".btn").on("click", function () {

                cargando();

            });
        </script>
    </body>
</html>