<? if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class GalponesModel extends CI_Model {

		private $anchoGalpon,$largoGalpon,$largoCoor,$anchoCoor,$ubicacion,$descripcion,$altoGalpon,$altoCoor,$unidad,$transito,$vacio;
		public function __construct() {
			parent::__construct();
			$this->load->database();
		}



		public function insertar(){
			if(!isset($_POST['anchoGalpon'])){
				echo "Ancho Galpon no ingresado ";
				return 1;
			}else{
				$this->anchoGalpon=$_POST['anchoGalpon'];
			}
			if(!isset($_POST['largoGalpon'])){
				echo "largo Galpon no ingresado ";
				return 1;
			}else{
				$this->largoGalpon=$_POST['largoGalpon'];
			}
			if(!isset($_POST['largoCoor'])){
				echo "largo de coordenadas no ingresado ";
				return 1;
			}else{
				$this->largoCoor=$_POST['largoCoor'];
			}
			if(!isset($_POST['anchoCoor'])){
				echo "ancho de coordenadas no ingresado ";
				return 1;
			}else{
				$this->anchoCoor=$_POST['anchoCoor'];
			}
			if(!isset($_POST['ubicacion'])){
				echo "ubicacion no ingresado ";
				return 1;
			}else{
				$this->ubicacion=$_POST['ubicacion'];
			}
			if(!isset($_POST['descripcion'])){
				echo "descripcion no ingresado ";
				return 1;
			}else{
				$this->descripcion=$_POST['descripcion'];
			}
			if(!isset($_POST['altoGalpon'])){
				echo "alto Galpon no ingresado ";
				return 1;
			}else{
				$this->altoGalpon=$_POST['altoGalpon'];
			}
			if(!isset($_POST['altoCoor'])){
				echo "alto Coordenada no ingresado ";
				return 1;
			}else{
				$this->altoCoor=$_POST['altoCoor'];
			}
			if(!isset($_POST['unidad'])){
				echo "unidad no ingresado ";
				return 1;
			}else{
				$this->unidad=$_POST['unidad'];
			}
			if(!isset($_POST['transito'])){
				echo "transito no ingresado ";
				return 1;
			}else{
				$this->transito=$_POST['transito'];
			}
			if(!isset($_POST['vacio'])){
				echo "vacio no ingresado ";
				return 1;
			}else{
				$this->vacio=$_POST['vacio'];
			}
			$ivacio=count($this->vacio);
			$itransito=count($this->transito);
			if ($ivacio>1) {
			 		$this->vacio=join(',',$this->vacio);		
			 }else{
			 	$this->vacio=$this->vacio[0];
			 }
			 if ($itransito>1) {
			 		$this->transito=join(',',$this->transito);		
			 }else{
			 	$this->transito=$this->transito[0];
			 }


	 		echo $sql="call agregarGalpon('$this->ubicacion',
				'$this->descripcion',
				'$this->altoGalpon',
				'$this->anchoGalpon',
				'$this->largoGalpon',
				'$this->vacio',
				'$this->anchoCoor',
				'$this->largoCoor',
				'$ivacio',
				'$this->transito',
				'$itransito')";
			$query= $this->db->query($sql);
			if($query->row()->result=='ERROR'){
				echo 1;
				return;
			}else{
				echo 0;
				return;
			}
			return 0;



			// $itelefono=(count($this->telefono));
			// $icorreo=(count($this->correo));
			//  if ($itelefono>1) {
			//  		$this->telefono=join(',',$this->telefono);		
			//  }else{
			//  	$this->telefono=$this->telefono[0];
			//  }
			//  if ($icorreo>1) {
			//  		$this->correo=join(',',$this->correo);		
			//  }else{
			//  	$this->correo=$this->correo[0];
			//  }
			//  $sql="call agregarProveedor('$this->rif','$this->nombreC','$this->nombreF', '$this->direccion', '$this->telefono', '$itelefono', '$this->correo', $icorreo);";
			// 
		}

		public function eliminar_proveedor($id){
			$sql="call eliminarProveedor('$id')";
			$query= $this->db->query($sql);
				return $query; 
		}
		public function listar(){
			$galpones=array();
			$sql='SELECT idAlmacen,descripcion FROM tbl_sga_almacen';
			$query= $this->db->query($sql);
			foreach ($query->result_array() as $galpon) {
				$galpones[]=($galpon);
			}
			echo json_encode($galpones);
		}
	}
?>