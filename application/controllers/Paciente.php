<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paciente extends CI_Controller {

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

	}

	public function listar(){
		//verifica se o usuario está logado 
		if ($this->session->userdata('logged_in')){
			//carrega o model paciente 
			$this->load->model('pacientes_model');
			//pega a lista de pacientes
			$dados['pacientes'] = $this->pacientes_model->get_pac_list();

			$this->load->view('includes/html_header');
			$this->load->view('usuario/navbar');
			$this->load->view('paciente/listar', $dados);
		}else{
			$this->load->view('includes/html_header');
			$this->load->view('login/login');
		}
	}

}
