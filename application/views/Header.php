
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en"  ng-app="mppeuct" ng-init="iniciar = true">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title id="title"  ng-bind="title"></title>
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="<?php echo base_url('publico/plugins/bootstrap/dist/css/bootstrap.css'); ?>" rel="stylesheet">

        <link rel="stylesheet" href="<?php echo base_url('publico/plugins/jAlert-master/src/jAlert-v3.css'); ?>" />
        <link href="<?php echo base_url('publico/plugins/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">


        <!-- MetisMenu CSS -->
        <link href="<?php echo base_url('publico/plugins/metisMenu/dist/metisMenu.min.css'); ?>" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="<?php echo base_url('publico/styles/timeline.css'); ?>" rel="stylesheet" type="text/css">

        <link rel="stylesheet" type="text/css" href="<?php echo base_url('publico/styles/jquery.dataTables.min.css'); ?>">

        <!-- Custom CSS -->
        <link href="<?php echo base_url('publico/styles/sb-admin-2.css'); ?>" rel="stylesheet">


        <link href="<?php echo base_url('publico/plugins/morrisjs/morris.css'); ?>" rel="stylesheet">



        <link href="<?php echo base_url('publico/styles/hover-min.css'); ?>" rel="stylesheet" media="all">
        <link href="<?php echo base_url('publico/plugins/ngprogress-lite-master/ngprogress-lite.css'); ?>" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url('publico/styles/fileinput.css'); ?>" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url('publico/styles/bootstrap-datetimepicker.css'); ?>" rel="stylesheet">

        <link rel="stylesheet" href="<?php echo base_url('publico/styles/animate.css'); ?>" rel="stylesheet">

        <link href="<?php echo base_url('publico/styles/styles-app/style.css'); ?>" rel="stylesheet">



        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
     
    </head>



    <body  ng-controller="app" >
        <div id="wrapper">

            <div class="col-lg-12">
                <img    class="img-responsive normativa-left" alt=""
                       src="http://apis.mppeuct.gob.ve/img/comun/normativa-izquierda-transparente.png">
                <img   class="img-responsive normativa-right" alt=""
                     src="http://apis.mppeuct.gob.ve/img/comun/normativa-derecha.png">
            </div>

            <div >
                <img    class="img-responsive banner"alt=""
                       src="<?php
                       echo base_url('publico/img/sed2'
                               . '.png');
                       ?>">

            </div> 
