<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class galponesController extends CI_Controller {

	// 1 - insertar
	// 2 - Eliminar
	// 3 - Editar 

function __construct()
{
parent::__construct();
 $this->load->library(array('session'));
// $this->load->helper('form');
// $this->load->helper('url');
 $this->load->model('galponesModel', '', TRUE);
}

	public function index()
	{
		
		
	}
	public function insertar(){
		$this->galponesModel->insertar();
	}
	public function Eliminar(){
		if(!isset($_POST['rif'])){
			echo "ERROR ";
			return 1;
		}else{
			$rif=$_POST['rif'];
			if($this->galponesModel->eliminar_proveedor($rif)!='ERROR'){
				echo 0;
			}
		}
		
	}
}
