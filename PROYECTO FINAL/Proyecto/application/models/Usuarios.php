<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Model {
    
    public function verusuarios()
    {
        $us = $this->db->query("SELECT * FROM evento");

        $data = $us->result_array();
        return $data;
    }
    public function validar($Usuario,$Contraseña)
    {
            $this->db->select();
            $this->db->from($this->users." AS u");
        
            $this->db->where('u.Usuario LIKE BINARY', $Usuario);
            $this->db->where('u.Contraseña LIKE BINARY', $Contraseña);
            $result = $this->db->get();
        
            return $result->result_array();
    }
   
}