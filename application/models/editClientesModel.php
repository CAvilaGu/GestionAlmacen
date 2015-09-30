<? if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class EditClientesModel extends CI_Model {

		private $tipo,$codigo,$nombre,$direccion,$telefono,$correo;
		public function __construct() {
			parent::__construct();
			$this->load->database();
		}
				public function obtenerCliente($id){
				$sql="SELECT *
				FROM tbl_sga_cliente 
				WHERE idCliente='$id'";
				$query= $this->db->query($sql);
			return $query; 
		}

	}
?>