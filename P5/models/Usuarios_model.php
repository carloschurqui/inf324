<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

    function usuarios_save($usurio){

        $this->load->database('default');
        $this->db->insert("DOCENTE",$usurio);
    }
    
    function eliminar($str){
        $this->load->database('default');
        $this->db->query("delete from docente where ci = $str");
    }

    function modi($ci, $nom,  $car, $cie){
        $this->load->database('default');
        $this->db->query("update DOCENTE set ci= $ci, nombre ='$nom',CARRERA ='$car' where CI = $cie");
    }

    function mostrar(){
        $this->load->database('default');
        return $this->db->query("select * from docente")->result();
    }
}
?>