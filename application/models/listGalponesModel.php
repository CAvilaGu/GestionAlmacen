<? if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class ListGalponesModel extends CI_Model {

		public function __construct() {
			parent::__construct();
			$this->load->database();
		}
		
		public function obtenerGalpones(){
			$sql="SELECT idAlmacen, descripcion, ubicacion, ancho, largo, altura 
FROM tbl_sga_almacen
ORDER BY idAlmacen ASC";
			$query= $this->db->query($sql);
			return $query; 
		}
	}
?>