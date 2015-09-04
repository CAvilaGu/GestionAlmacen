<? if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class ListProviderModel extends CI_Model {

		public function __construct() {
			parent::__construct();
			$this->load->database();
		}
		
		public function getDataProvider(){
			$sql="select * from tblsga_proveedor;";
			$query= $this->db->query($sql);
			return $query; 
		}
	}
?>