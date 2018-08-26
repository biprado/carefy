<?php
class Pacientes_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    public function get_pac_list(){
        //o que pegar, onde paciente = 1        
        $this->db->where('paciente', 1);
        // ordeno os resultados em ordem ascedente
        $this->db->order_by("nome", "asc");
        //executo a consulta na tabela usuarios
        $dados = $this->db->get('usuarios')->result();
        //retorno o resultado da consulta
        return $dados;
    }
}
?>