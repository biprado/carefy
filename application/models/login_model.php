<?php
class Login_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    public function check_login(){
        $email = $this->input->post('email');        
        $senha = $this->input->post('senha');

        $this->db->from('usuarios');

        $this->db->where('email', $email);
        $this->db->where('senha', $senha);

        $result = $this->db->get();
        $row = $result->row();

        if($result->num_rows() === 1){
            $session_data = array(
                'id' => $row->id,
                'nome' => $row->nome,
                'hospital' => $row->hospital,
                'email' => $row->email,
                'paciente' => $row->paciente,
                'logged_in' => 1
            );
            $this->session->set_userdata($session_data);
            return true;
        }else{
            return false;
        }
    }
}
?>