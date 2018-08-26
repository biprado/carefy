<?php
class Usuarios_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    
    public function adicionar_pac($data){
        if($this->db->insert('usuarios', $data)){
           return TRUE;
        }else{
           return FALSE;
        }
    }

}
?>