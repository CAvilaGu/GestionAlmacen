<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StockController extends CI_Controller {

	// 1 - insertar
	// 2 - Eliminar
	// 3 - Editar 

function __construct()
{
parent::__construct();
 $this->load->library(array('session'));
// $this->load->helper('form');
// $this->load->helper('url');
 $this->load->model('stockModel', '', TRUE);
}

	public function index()
	{
		$this->stockModel->mostrar();
	}
	public function insertar(){
		$this->stockModel->insertar();
	}
	public function Eliminar(){
		
	}
	public function listar(){
		$this->stockModel->listar();
	}
}
