<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cUsusarios extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Usuarios_model","usuariosmodel");
	}


	public function index()
	{	
		//$this->load->view('prob');
		$this->load->model("Usuarios_model");
		$Docentes = $this->Usuarios_model->mostrar();
		$this->load->view("prob",compact("Docentes"));
	}
	public function save(){
	
			$usuario["ci"] = $this->input->post("ci");
			$usuario["nombre"] = $this->input->post("nombre");
			$usuario["carrera"] = $this->input->post("carrera");

			$this->usuariosmodel->usuarios_save($usuario);
			redirect(base_url("index.php/cUsusarios"));	
		
		
	}
	
	public function  eliminar(){
		//$this->load->database('default');
		$ci = $this->input->post("cie");
		$str = strval($ci);
		$this->usuariosmodel->eliminar($str);
		redirect(base_url("index.php/cUsusarios"));
		//echo $str;
		//$this->db->query("delete from docente where ci = $str");
		
	}

	public function modificar(){
		$ci = $this->input->post("ci");
		$strci = strval($ci);
		$nom = $this->input->post("nombre");
		$strnom = strval($nom);
		$car = $this->input->post("carrera");
		$strcar = strval($car);
		$cie = $this->input->post("cie");
		$strcie = strval($cie);
		$this->usuariosmodel->modi($strci,$strnom,$strcar,$strcie);
		redirect(base_url("index.php/cUsusarios"));
	}

}
?>