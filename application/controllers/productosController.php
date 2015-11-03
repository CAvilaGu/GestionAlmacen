<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class productosController extends CI_Controller {

	// 1 - insertar
	// 2 - Eliminar
	// 3 - Editar 

function __construct()
{
parent::__construct();
 $this->load->library(array('session'));
// $this->load->helper('form');
// $this->load->helper('url');
 $this->load->model('productosModel', '', TRUE);
}

	public function index()
	{	
		echo $this->productosModel->tipo_producto(2);
		// Base de Datos
		 // $this->postClientesModel->obtenerClientes();
		//	$this->proveedoresModel->insertar_proveedor();
		// // $this->load->view('loginView');
		// $this->load->view('template/header');
		// $this->load->view('template/menu');
		// $this->load->view('listClientesView',$datos);
		// $this->load->view('template/footer');
	}
	public function guardar(){
		$this->productosModel->Recibir();
		$this->productosModel->Guardar_normal();
	}
	public function guardar_derivado(){
		$this->productosModel->Recibir();
		$this->productosModel->Recibir_terminado();
		$this->productosModel->Guardar_derivado();
	}
	public function guardar_compuesto(){
		$this->productosModel->Recibir();
		$this->productosModel->Recibir_terminado();
		$this->productosModel->Guardar_compuesto();
	}
	public function listar(){
		$this->productosModel->listar();
	}
	public function listarMateria(){
		$materia=$this->productosModel->MateriaPrima();
		foreach ($materia->result() as $row)
		{
		   print_r($row);
		}
	}
	public function eliminar(){
		$this->productosModel->Eliminar();
	}
}
