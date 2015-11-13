<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class proveedoresController extends CI_Controller {

	// 1 - insertar
	// 2 - Eliminar
	// 3 - Editar 

function __construct()
{
parent::__construct();
 $this->load->library(array('session'));
// $this->load->helper('form');
// $this->load->helper('url');
 $this->load->model('proveedoresModel', '', TRUE);
}

	public function index()
	{
		
		// Base de Datos
		 // $this->postClientesModel->obtenerClientes();
		//	$this->proveedoresModel->insertar_proveedor();
		// // $this->load->view('loginView');
		// $this->load->view('template/header');
		// $this->load->view('template/menu');
		// $this->load->view('listClientesView',$datos);
		// $this->load->view('template/footer');
	}
	public function insertar(){
		$this->proveedoresModel->insertar_proveedor();
	}
	public function Eliminar(){
		if(!isset($_POST['rif'])){
			echo "ERROR ";
			return 1;
		}else{
			$rif=$_POST['rif'];
			if($this->proveedoresModel->eliminar_proveedor($rif)!='ERROR'){
				echo 0;
			}
		}	
	}
	public function listar(){
		$this->proveedoresModel->listar();
	}
}
