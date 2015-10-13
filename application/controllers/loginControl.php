<?php
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	 
	class LoginControl extends CI_Controller
	{
	    public function __construct()
	    {
	        parent::__construct();
			//$this->load->model('login_model');
			$this->load->library(array('session','form_validation'));
			$this->load->helper('url');
			$this->load->helper('form');    
		}	
		public function index()
		{	
			if($this->session->userdata('user')){
				redirect('/Welcome');
			}else{
				$this->load->view('loginView');
				$this->load->model('loginModel');
				if(isset($_POST['password'])){
					if($this->loginModel->login($_POST['username'],$_POST['password'])){
						$this->session->set_userdata('user',$_POST['username']);
						redirect('/Welcome');
					}else{
						redirect('/LoginControl','refresh');
						}
				}
			}
		}	
	}
?>