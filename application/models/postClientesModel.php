<? if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class PostClientesModel extends CI_Model {

		private $tipo,$codigo,$nombre,$direccion,$telefono,$correo;
		public function __construct() {
			parent::__construct();
			$this->load->database();
		}
		 

		public function recibirDatos(){
			if(!isset($_POST['codigo'])){
				echo "Codigo cliente no ingresado ";
				return 1;
			}else{
				$this->codigo=$_POST['tipo']."-".$_POST['codigo'];
			}

			if(!isset($_POST['nombre'])){
				echo "nombre cliente no ingresado ";
				return 1;
			}else{
				$this->nombre=$_POST['nombre'];
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
			return 0;
		}

		public function insertarCliente(){
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
			 $sql="call agregarCliente('$this->codigo','$this->nombre','$this->direccion','$this->telefono','$itelefono','$this->correo','$icorreo');";
			 $query= $this->db->query($sql);

			if($query->row()->result=='ERROR'){
				echo 'Error';
				return;
			}else{
				echo 'Success';
				return;
			}
		}
		public function eliminarCorreo(){
			if(!isset($_POST['codigo'])){
				echo "Codigo cliente no ingresado ";
				return 1;
			}else{
				$this->codigo=$_POST['codigo'];
			}
			if(!isset($_POST['correo'])){
				echo "Correo cliente no ingresado. ";
				return 1;
			}else{
				$this->correo=$_POST['correo'];
			}
			 $sql="DELETE FROM tbl_sga_correo_cliente 
					WHERE idCliente='".$this->codigo."' AND dirCorreoCliente='".$this->correo."'";
			$query= $this->db->query($sql);
			return 0;
		}
		public function eliminarTelefono(){
			if(!isset($_POST['codigo'])){
				echo "Codigo cliente no ingresado ";
				return 1;
			}else{
				$this->codigo=$_POST['codigo'];
			}
			if(!isset($_POST['telefono'])){
				echo "telefono cliente no ingresado ";
				return 1;
			}else{
				$this->telefono=$_POST['telefono'];
			}
			 $sql="DELETE FROM tbl_sga_telefono_cliente 
					WHERE idCliente='".$this->codigo."' AND nroTelefonoCliente='".$this->telefono."'";
			$query= $this->db->query($sql);
			return 0;
		}

			public function ActualizarDatos(){
			if(!isset($_POST['codigo'])){
				echo "codigo cliente no ingresado ";
				return 1;
			}else{
				$this->codigo=$_POST['codigo'];
			}

			if(!isset($_POST['nombre'])){
				echo "nombre cliente no ingresado ";
				return 1;
			}else{
				$this->nombre=$_POST['nombre'];
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

			 $sql="call modificarCliente('$this->codigo','$this->nombre','$this->direccion','$this->telefono','$itelefono','$this->correo','$icorreo');";
			 $query= $this->db->query($sql);
			 print_r($query->row());
			if($query->row()->result=='ERROR'){
				return 1;
			}else{
				return 0;
			}




		}
	}










?>