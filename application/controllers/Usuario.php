<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $this->load->view('includes/html_header');
        $this->load->view('usuario/navbar');
		$this->load->view('usuario/dashboard');
    }
    
    public function novo_cadastro(){
		//verifica se o usuario está logado 
		if ($this->session->userdata('logged_in')){
            $this->load->view('includes/html_header');
            $this->load->view('usuario/navbar');
            $this->load->view('usuario/novo_cadastro');
        }else{
            $this->load->view('includes/html_header');
            $this->load->view('login/login');
        }
    }

    public function cadastrar(){

        if($this->input->post('cadastrar') === 'cadastrar'){

            //armazena os dados do formulario em variáveis
            $data['hospital'] = $this->session->userdata('hospital');;
            $data['nome'] = $this->input->post('nome');
            $data['paciente'] = 1;

            //carrega o model usuarios
            $this->load->model('usuarios_model');

            $registered = $this->usuarios_model->adicionar_pac($data);
            
            if($registered){

                $alerta = array(
                    'alerta' => $data['nome']." cadastrado(a) com sucesso!"
                );
                $this->load->view('includes/html_header');
                $this->load->view('usuario/navbar');
                $this->load->view('usuario/novo_cadastro', $alerta);

            }else{
                //problema inserção no banco
                $alerta = array(
                    'alerta' => "Erro: contate um administrador do sistema."
                );
                $this->load->view('includes/html_header');
                $this->load->view('usuario/navbar');
                $this->load_view('usuario/novo_cadastro', $alerta);
            }
        }
    }

}
