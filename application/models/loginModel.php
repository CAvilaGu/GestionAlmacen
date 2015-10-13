<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class LoginModel extends CI_Model {

		public function __construct() {
			parent::__construct();
			$this->load->database();
		}
		public function login($username,$password){
			$this->db->where('idPersonal',$username);
			$this->db->where('contrasena',$password);
			$q=$this->db->get('tbl_sga_personal');
			if($q->num_rows()>0){
				return true;
			}else{
				return false;
			}
		}	
	}
?>	