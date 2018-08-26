<div class="container-fluid">
    <div class="row">

        <div class="col">

            <h4 class="page-header" style="margin-top:20px">Dados de pacientes</h4>

            <div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Hospital</th>
                                <th>Remover</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($pacientes as $paciente) {
                                echo '<tr>';
                                    echo '<td><span class="pull-left"><i class="fa fa-user"></i></span> ';
                                    echo  $paciente->nome . '</td>';
                                    echo '<td>&nbsp' . $paciente->hospital;
                                    echo '<td>';
                                        echo ' <a href=' . site_url('paciente/delete_pac/'.$paciente->id) . ' title="Deletar cadastro" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>';
                                    echo '</td>'; 
                                echo '</tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>