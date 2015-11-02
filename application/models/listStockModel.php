<? if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class ListStockModel extends CI_Model {

		public function __construct() {
			parent::__construct();
			$this->load->database();
		}
		
		public function obtenerStock(){
			$sql="SELECT l.idLote, l.tipoLote, DATE_FORMAT(fechaEntrada, '%d/%m/%y') as fechaEntrada, l.estadoLote, p.nombre, p.apellido, sum(cantBultos) as nroBultos
FROM tbl_sga_lote as l, tbl_sga_personal as p, tbl_sga_detalle_lote as dl
WHERE l.idPersonalSupervisor = p.idPersonal
and dl.idLote = l.idLote 
group by l.idLote;
;
";
			$query= $this->db->query($sql);
			return $query; 
		}
	}
?>