<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class LoginModel extends CI_Model {

		public function __construct() {
			parent::__construct();
			$this->load->database();
		}
		
		public function login_user($username,$password){
			$this->db->where('idPersonal',$username);//como se llama en la bd
			$this->db->where('contrasena',$password);//contrasena de usuario
			$query = $this->db->get('usuarios');
			if($query->num_rows() == 1)
				{
					return $query->row();
			}else{
					$this->session->set_flashdata('usuario_incorrecto','Los datos introducidos son incorrectos');
					redirect(base_url().'loginView','refresh');
				}
		}
	}
?>