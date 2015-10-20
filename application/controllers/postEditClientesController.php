<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PostEditClientesController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index^^`~~
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
// $this->load->helper('form');
// $this->load->helper('url');
 $this->load->model('postClientesModel', '', TRUE);
}

	public function index()
	{
		
		// Base de Datos
		 // $this->postClientesModel->obtenerClientes();
		$x=$this->postClientesModel->ActualizarDatos();
		if($x==0){
			echo 0;
		}
		// // $this->load->view('loginView');
		// $this->load->view('template/header');
		// $this->load->view('template/menu');
		// $this->load->view('listClientesView',$datos);
		// $this->load->view('template/footer');
	}
}
