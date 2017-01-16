<br>

</div>
<!-- /.row -->


</div>

<!-- /#page-wrapper -->


</div>
<!-- /#wrapper -->


<div class="col-lg-12" style="padding-left: 0px;padding-right: 0px;">
    <section  class="footer" style="border-top: 1px solid #e7e7e7">

        <h4 class="footer-title-ministerio">Ministerio del Poder Popular
            para Educación Universitaria, Ciencia y Tecnología&nbsp; <em style="font-size: 11px;">Copyleft © 2016 MPPEUCT - RIF: G-20011296-4</em></h4>
        <br>
    </section>

</div>

<div  class=" modal" id="mymodal" role="dialog">
    <div ng-class="animated" class="modal-dialog modal-xl  ">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"  > <em style="color:#3c8dbc"> {{modal.header}} </em> /  <span style="color: #999"> N° caso :</span> <b>{{modal.caso}}</b></h4>               
                <hr>
                <div class="center-block"> 
                    <ul class="nav nav-pills" style="width: 100%;">
                        <li ng-click="menu_modal = true;" ng-class="menu_modal?'active':''" style="width: 50%;"><a href="javascript:void(0)">Detalles del caso</a></li>
                        <li  ng-click="menu_modal = false;" ng-class="!menu_modal?'active':''"  style="width: 48%" ><a href="javascript:void(0)">Seguimientos del caso</a></li>
                        </li>
                    </ul>
                </div>
            </div>
            <div class=" modal-body">
                <div ng-include src="modal.template"></div>

            </div>
            <div class="modal-footer">
                <div ng-bind="modal.footer"></div>
                <br>
                <button ng-click="ejemplo()" type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>

    </div>
</div>


<script src="<?php echo base_url('publico/plugins/jquery/dist/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('publico/plugins/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>


<script src="<?php echo base_url('publico/plugins/jAlert-master/src/jAlert-v3.js'); ?>"></script>
<script src="<?php echo base_url('publico/plugins/angular.min.js'); ?>"></script>
<script src="<?php echo base_url('publico/plugins/angular-sanitize.min.js'); ?>"></script>
<script src="<?php echo base_url('publico/plugins/ngprogress-lite-master/ngprogress-lite.min.js'); ?>"></script>


<script src="<?php echo base_url('publico/plugins/angular-route.min.js'); ?>"></script>
<script src="<?php echo base_url('publico/plugins/angular-locale_es-es.js'); ?>"></script>
<script src="<?php echo base_url('publico/plugins/angular-animate.js'); ?>"></script>
<script src="<?php echo base_url('publico/plugins/jquery.dropdown.js'); ?>"></script>


<script type="text/javascript" charset="utf8" src="<?php echo base_url('publico/js/jquery.dataTables.js'); ?>"></script>

<script data-require="angular-datatable.js@1.1.5" data-semver="1.1.5" src="<?php echo base_url('publico/js/angular-datatables.min.js'); ?>"></script>

<script src="<?php echo base_url('publico/js/moment-with-locales.js'); ?>"type="text/javascript"></script>
<script src="<?php echo base_url('publico/js/bootstrap-datetimepicker.js'); ?>"type="text/javascript"></script>

<script src="<?php echo base_url('publico/js/fileinput.js'); ?>"type="text/javascript"></script>
<script src="<?php echo base_url('publico/js/fileinput_locale_es.js'); ?>"type="text/javascript"></script>

<script src="<?php echo base_url('publico/plugins/metisMenu/dist/metisMenu.min.js'); ?>"></script>
<script src="<?php echo base_url('publico/js/sb-admin-2.js'); ?>"></script>


<script>
                    var base_url = "<?php echo base_url(); ?>";
</script>

<script src="<?php echo base_url('publico/js/js-app/home.js'); ?>"type="text/javascript"></script>

</body>

</html>
