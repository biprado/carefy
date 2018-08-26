<link href="<?php echo base_url('/assets/css/dashboard.css') ?>" rel="stylesheet">

<div class="container-fluid" style="margin-top:30px">
	<div class="row justify-content-center">
        <div class="col-md-2 col-sm-3">
          <div class="wrimagecard wrimagecard-topimage">
              <?php echo '<a href=' . site_url('usuario/novo_cadastro') . '>' ?>
              <div class="wrimagecard-topimage_header" style="background-color: rgba(119, 178, 88, 0.1)">
                <center><i class="fa fa-user-edit fa-5x"></i></center>
              </div>
              <center><div class="wrimagecard-topimage_title">
                <h6>Cadastrar
                <div class="pull-right badge" id="WrControls"></div></h4>
              </div></center>
            </a>
          </div>
    </div>
        <div class="col-md-2 col-sm-3">
          <div class="wrimagecard wrimagecard-topimage">
          <?php echo '<a href=' . site_url('paciente/listar') . '>' ?>
              <div class="wrimagecard-topimage_header" style="background-color: rgba(119, 178, 88, 0.1)">
                <center><i class="fa fa-users fa-5x"></i></center>
              </div>
              <center><div class="wrimagecard-topimage_title">
                <h6>Listar pacientes
                <div class="pull-right badge" id="WrControls"></div></h4>
              </div></center>
            </a>
          </div>
    </div>
    </div>
</div>