<? if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class ListClientesModel extends CI_Model {

		public function __construct() {
			parent::__construct();
			$this->load->database();
		}
		
		public function obtenerClientes(){
			$sql="SELECT ctc.idCliente, ctc.nombre, ctc.direccion, ctc.nroTelefonoCliente, ccc.dirCorreoCliente
FROM (SELECT c.idCliente, c.nombre, c.direccion, tc.nroTelefonoCliente FROM tbl_sga_cliente as c LEFT OUTER JOIN tbl_sga_telefono_cliente as tc ON c.idCliente = tc.idCliente
) as ctc 
LEFT OUTER JOIN (SELECT c.idCliente, cc.dirCorreoCliente FROM tbl_sga_cliente as c LEFT OUTER JOIN tbl_sga_correo_cliente as cc ON c.idCliente = cc.idCliente) as ccc ON ctc.idCliente = ccc.idCliente
GROUP BY ctc.idCliente
ORDER BY ctc.nombre ASC;";
			$query= $this->db->query($sql);
			return $query; 
		}
	}
?>