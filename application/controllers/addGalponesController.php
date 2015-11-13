<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddGalponesController extends CI_Controller {

function __construct()
{
parent::__construct();
$this->load->library(array('session'));
$this->load->helper('form');
$this->load->helper('url');
}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('addGalponesView');
		$this->load->view('template/footer');
	}
}
