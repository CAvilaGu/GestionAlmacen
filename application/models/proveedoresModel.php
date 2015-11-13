<? if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class ProveedoresModel extends CI_Model {

		private $codigo,$rif,$nombreC,$nombreF,$direccion,$telefono,$correo;
		public function __construct() {
			parent::__construct();
			$this->load->database();
		}


		public function insertar_proveedor(){
			if(!isset($_POST['rif'])){
				echo "Rif proveedor no ingresado ";
				return 1;
			}else{
				$this->rif=$_POST['rif'];
			}
			if(!isset($_POST['nombreC'])){
				echo "nombre cliente no ingresado ";
				return 1;
			}else{
				$this->nombreC=$_POST['nombreC'];
			}
			if(!isset($_POST['nombreF'])){
				echo "nombre cliente no ingresado ";
				return 1;
			}else{
				$this->nombreF=$_POST['nombreF'];
			}
			if(!isset($_POST['direccion'])){
				echo "direccion cliente no ingresado ";
				return 1;
			}else{
				$this->direccion=$_POST['direccion'];
			}
			if(!isset($_POST['telefono'])){
				echo "telefono cliente no ingresado ";
				return 1;
			}else{
				$this->telefono=$_POST['telefono'];
			}
			if(!isset($_POST['correo'])){
				echo "Correo cliente no ingresado. ";
				return 1;
			}else{
				$this->correo=$_POST['correo'];
			}
			$itelefono=(count($this->telefono));
			$icorreo=(count($this->correo));
			 if ($itelefono>1) {
			 		$this->telefono=join(',',$this->telefono);		
			 }else{
			 	$this->telefono=$this->telefono[0];
			 }
			 if ($icorreo>1) {
			 		$this->correo=join(',',$this->correo);		
			 }else{
			 	$this->correo=$this->correo[0];
			 }
			 $sql="call agregarProveedor('$this->rif','$this->nombreC','$this->nombreF', '$this->direccion', '$this->telefono', '$itelefono', '$this->correo', $icorreo);";
			 $query= $this->db->query($sql);

			if($query->row()->result=='ERROR'){
				echo 1;
				return;
			}else{
				echo 0;
				return;
			}
			return 0;
		}

		public function eliminar_proveedor($id){
			$sql="call eliminarProveedor('$id')";
			$query= $this->db->query($sql);
				return $query; 
		}

		public function listar(){
			$proveedores=array();
			$sql='SELECT idProveedor,nombreComercial FROM tbl_sga_proveedor';
			$query= $this->db->query($sql);
			foreach ($query->result_array() as $proveedor) {
				$proveedores[]=($proveedor);
			}
			echo json_encode($proveedores);
		}
	}
?>