<? if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class ListProductosModel extends CI_Model {

		public function __construct() {
			parent::__construct();
			$this->load->database();
		}
		
		public function obtenerProductos(){
			$sql="SELECT * FROM tbl_sga_producto
				  ORDER BY idProducto ASC;";
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