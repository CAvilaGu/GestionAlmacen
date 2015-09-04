<? if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class ListClientesModel extends CI_Model {

		public function __construct() {
			parent::__construct();
			$this->load->database();
		}
		
		public function obtenerClientes(){
			$sql="SELECT * FROM tbl_sga_cliente
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