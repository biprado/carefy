<link href="<?php echo base_url('/assets/css/login.css') ?>" rel="stylesheet">

<body id="LoginForm">
    <div class="container">
    <h1 class="form-heading">Carefy</h1>
        <div class="login-form">
            <div class="main-div">
                <div class="panel">
            <h2>Login</h2>
            <?php if(isset($alerta)){ ?>
                    <div class="alert alert-danger">
                        <?php echo $alerta; ?>
                    </div>
                <?php }?>
            <p>Entre com seu email e senha</p>
            </div>
                <form id="Login" action="<?php echo site_url('login/login_user'); ?>" method="post">
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="password" name="senha" class="form-control" id="senha" placeholder="Senha">
                    </div>
                    <button type="submit" name="entrar" value="entrar" class="btn btn-primary">Entrar</button>
                </form>
                </div>

            <p class="botto-text">Gabriela Prado</p>
            </div>
        </div>
    </div>
</body>
</html>