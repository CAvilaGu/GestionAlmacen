<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EditClientesController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
function __construct()
{
parent::__construct();
$this->load->library(array('session'));
$this->load->helper('form');
$this->load->helper('url');
$this->load->model('editClientesModel', '', TRUE);
}

	public function index()
	{
		// Base de Datos
		// $this->load->view('loginView');
		
	}
	public function cursos()
	{

		$id=$this->uri->segment(2);
		$cliente=$this->editClientesModel->obtenerCliente($id);
		$datos['telefonos']=$this->editClientesModel->obtenerTlf($id);
		$datos['correos']=$this->editClientesModel->obtenerCorreo($id);
		$datos['clientes']=$cliente->row(1);
		$this->load->view('template/1header');
		$this->load->view('template/1menu');
		$this->load->view('editClientesView',$datos);
		$this->load->view('template/footer');
	}
}
