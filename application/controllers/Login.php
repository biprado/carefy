<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		$this->load->view('login/login');
	}

	public function login_user(){
		$alerta = null;

        if($this->input->post('entrar') === 'entrar'){

            //Validação do formulário
            $this->form_validation->set_rules('email','EMAIL','required');
            $this->form_validation->set_rules('senha','SENHA','required|min_length[6]|max_length[45]');

            //Checando se a entrada de dados inicial está ok
            if($this->form_validation->run() === TRUE){

                //carrega o model login
                $this->load->model('login_model');
           
                //checando se a credencial existe
                $result = $this->login_model->check_login();
                if($result){
					redirect('usuario');
				}else{
					$alerta = array(
						'alerta' => "Dados inválidos"
					);
					$this->load->view('includes/html_header');
					$this->load->view('login/login', $alerta);
				}
				
            }else{
				$alerta = array(
					'alerta' => "Entrada inválida, tente novamente."
				);
				$this->load->view('includes/html_header');
				$this->load->view('login/login', $alerta);
            }
        }

	}

	public function sair(){
		$this->session->sess_destroy();
		$this->load->view('includes/html_header');
        $this->load->view('login/login');
    } 
}
