<? if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class ListProductosModel extends CI_Model {

		public function __construct() {
			parent::__construct();
			$this->load->database();
		}
		
		public function obtenerProductos(){
			$sql="SELECT idProducto, descripcion, tipoMadera, dimAncho, dimAlto, dimLargo, tipoProducto, inventarioDisponible 
				  FROM tbl_sga_producto
				  ORDER BY idProducto ASC;";
			$query= $this->db->query($sql);
			return $query; 
		}
	}
?>