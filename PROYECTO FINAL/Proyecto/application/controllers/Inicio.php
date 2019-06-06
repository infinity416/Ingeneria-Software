<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {
	

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Usuarios');
		$this->load->database('default');
	}

	public function index()
	{
		$this->load->view('inicio');
	}

	public function principal()
	{
		$this->load->view('Principal');
		
		
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function validar()
	{
		$Usuario = $this->input->post('Usuario');
		$Contraseña = $this->input->post('Contraseña');
		$guardar_datos = $this->Usuarios->validar($Usuario,$Contraseña);
	}
		
	public function prevista()
	{
		$this->load->view('Prevista');
	}
		
	public function newevento()
	{
		$this->load->view('newevento');
	}


	public function guardado()
	{
		$this->load->view('Guardado');
	}
	

	public function usuarios()
	{
		$this->load->view('Usuarios');
	}

	public function datospersonales()
	{
		$this->load->view('Datospersonales');
	}

	public function seleccion()
	{
		$this->load->view('Seleccion');
	}

	

}
