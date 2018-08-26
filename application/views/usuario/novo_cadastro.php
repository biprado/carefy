<div class="container-fluid" style="margin-top:30px">
    <div class="row">

        <div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3 main">
            <h4 class="page-header">Novo usuario</h4>
            <div>
                <?php if(isset($alerta)){ ?>
                    <div class="alert alert-warning">
                        <?php echo $alerta; ?>
                    </div>
                <?php }?>
                <form action="<?php echo site_url('usuario/cadastrar')?>" method="post">

                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required>
                </div>
                <div class="form-group">
                    <label for="hospital">Hospital</label>
                    <input type="number" class="form-control" name="hospital" id="hospital" placeholder="Hospital" required>
                </div>
                <button type="submit" name="cadastrar" value="cadastrar" class="btn btn-success pull-right">Cadastrar</button>
            </form>
            </div>
        </div>
    </div>
</div>
</div>