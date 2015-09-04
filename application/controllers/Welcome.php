<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function index()
	{
		// $this->load->view('loginView');
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('homeView');
		// $this->load->view('listClientesView');
		// $this->load->view('listStockView');
		// $this->load->view('listProviderView');
		// $this->load->view('addStockView');
		// $this->load->view('addProviderView');
		// $this->load->view('addProducctionOrderView');
		// $this->load->view('addClientView');
		$this->load->view('template/footer');
	}
}

