<nav class="navbar navbar-light" style="background-color: #c8a2c8;">
  <?php echo '<a class="navbar-brand" href="' . site_url('Usuario') . '">Carefy</a> '?>
  <ul class="nav navbar-nav navbar-right">
                <li><?php if ($this->session->userdata('logged_in')) {
                    echo '<a class="navbar-brand" href="' . site_url('login/sair') . '">Sair</a>';
                } ?></li>
            </ul>
</nav>

