<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ListClientesController extends CI_Controller {

function __construct()
{
parent::__construct();
$this->load->library(array('session'));
$this->load->helper('form');
$this->load->helper('url');
$this->load->model('listClientesModel', '', TRUE);
}

	public function index()
	{
		// Base de Datos
		$datos['clientes'] = $this->listClientesModel->obtenerClientes();
		// $dato['detalleCliente'] = $this->listClientesModel->obtenerCliente();

		// $this->load->view('loginView');
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('listClientesView',$datos);
		$this->load->view('template/footer');
	}
}
