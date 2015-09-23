<? if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class ListClientesModel extends CI_Model {

		public function __construct() {
			parent::__construct();
			$this->load->database();
		}
		
		public function obtenerClientes(){
			$sql="SELECT c.idCliente, c.nombre, c.direccion, tc.nroTelefonoCliente
FROM tbl_sga_cliente as c, tbl_sga_telefono_cliente as tc, tbl_sga_correo_cliente as cc
WHERE tc.idCliente = c.idCliente
AND cc.idCliente = c.idCliente
ORDER BY nombre ASC;";
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