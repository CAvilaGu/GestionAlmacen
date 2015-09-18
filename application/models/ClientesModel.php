<? if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class ClientesModel extends CI_Model {

		public function __construct() {
			parent::__construct();
			$this->load->database();
		}
		
		public function obtenerClientes(){
			$sql="SELECT ccc.idCliente, ccc.nombre, ccc.direccion, ctc.nroTelefonoCliente, ccc.dirCorreoCliente 
				FROM (SELECT c.idCliente, c.nombre, c.direccion, tc.nroTelefonoCliente FROM `tbl_sga_cliente` as c LEFT JOIN `tbl_sga_telefono_cliente` as tc ON tc.idCliente = c.idCliente) as ctc
				LEFT JOIN (SELECT c.idCliente, c.nombre, c.direccion, cc.dirCorreoCliente FROM `tbl_sga_cliente` as c LEFT JOIN `tbl_sga_correo_cliente` as cc
				ON cc.idCliente = c.idCliente) as ccc
				ON ctc.idCliente = ccc.idCliente
				GROUP BY idCliente
				ORDER BY nombre;";
			$query= $this->db->query($sql);
			return $query; 
		}

		public function eliminarClientes(){
		$sql="SELECT * FROM tbl_sga_cliente
			  ORDER BY nombre ASC;";
		$query= $this->db->query($sql);
		return $query; 
		}
	}
?>