<? if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class ListProveedoresModel extends CI_Model {

		public function __construct() {
			parent::__construct();
			$this->load->database();
		}
		
		public function obtenerProveedores(){
			$sql="SELECT * FROM tbl_sga_proveedor
				  ORDER BY nombreComercial ASC;";
			$query= $this->db->query($sql);
			return $query; 
		}

		public function eliminarProveedores(){
		$sql="SELECT * FROM tbl_sga_cliente
			  ORDER BY nombre ASC;";
		$query= $this->db->query($sql);
		return $query; 
		}
	}
?>