<? if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class ListProveedoresModel extends CI_Model {

		public function __construct() {
			parent::__construct();
			$this->load->database();
		}
		
		public function obtenerProveedores(){
			$sql="SELECT ptp.idProveedor, ptp.nombreComercial, ptp.nombreFiscal, ptp.direccion, ptp.nroTelefonoProveedor , pcp.dirCorreoProveedor
FROM (SELECT p.idProveedor, p.nombreComercial, p.nombreFiscal, p.direccion, tp.nroTelefonoProveedor FROM tbl_sga_proveedor as p LEFT OUTER JOIN tbl_sga_telefono_proveedor as tp ON p.idProveedor = tp.idProveedor) as ptp 
LEFT OUTER JOIN (SELECT p.idProveedor, cp.dirCorreoProveedor FROM tbl_sga_proveedor as p LEFT OUTER JOIN tbl_sga_correo_proveedor as cp ON p.idProveedor = cp.idProveedor
) as pcp ON ptp.idProveedor = pcp.idProveedor
GROUP BY ptp.idProveedor
ORDER BY ptp.nombreComercial ASC;";
			$query= $this->db->query($sql);
			return $query; 
		}
	}
?>