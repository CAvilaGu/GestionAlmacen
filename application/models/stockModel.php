<? if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class StockModel extends CI_Model {

		private $personal,
				$proveedor,
				$tipoLote,
				$almacen,
				$fecha,
				$nroDesc,
				$imagen,
				$producto,
				$cPieza,
				$cPaquete,
				$volumen,
				$ancho,
				$alto,
				$largo;
		public function __construct() {
			parent::__construct();
			$this->load->database();
		}


		public function insertar(){
			if(!$this->session->userdata('user')){
				echo "error con la sesion";
				return;
			}else{
				$this->personal=$this->session->userdata('user');
			}	
			if(!isset($_POST['proveedor'])){
				echo "proveedor no ingresado ";
				return 1;
			}else{
				$this->proveedor=$_POST['proveedor'];
			}
			if(!isset($_POST['tipoLote'])){
				echo "tipoLote no ingresado ";
				return 1;
			}else{
				$this->tipoLote=$_POST['tipoLote'];
			}
			if(!isset($_POST['almacen'])){
				echo "almacen no ingresado ";
				return 1;
			}else{
				$this->almacen=$_POST['almacen'];
			}
			if(!isset($_POST['almacen'])){
				echo "almacen no ingresado ";
				return 1;
			}else{
				$this->almacen=$_POST['almacen'];
			}
			if(!isset($_POST['fecha'])){
				echo "fecha no ingresado ";
				return 1;
			}else{
				$this->fecha=$_POST['fecha'];
			}
			if(!isset($_POST['nroDesc'])){
				echo "nroDesc no ingresado ";
				return 1;
			}else{
				$this->nroDesc=$_POST['nroDesc'];
			}
			if(!isset($_POST['producto'])){
				echo "producto no ingresado ";
				return 1;
			}else{
				$this->producto=$_POST['producto'];
			}
			if(!isset($_POST['cPieza'])){
				echo "cPieza no ingresado ";
				return 1;
			}else{
				$this->cPieza=$_POST['cPieza'];
			}
			if(!isset($_POST['cPaquete'])){
				echo "cPaquete no ingresado ";
				return 1;
			}else{
				$this->cPaquete=$_POST['cPaquete'];
			}
			if(!isset($_POST['volumen'])){
				echo "volumen no ingresado ";
				return 1;
			}else{
				$this->volumen=$_POST['volumen'];
			}
			if(!isset($_POST['ancho'])){
				echo "ancho no ingresado ";
				return 1;
			}else{
				$this->ancho=$_POST['ancho'];
			}
			if(!isset($_POST['alto'])){
				echo "alto no ingresado ";
				return 1;
			}else{
				$this->alto=$_POST['alto'];
			}
			if(!isset($_POST['largo'])){
				echo "largo no ingresado ";
				return 1;
			}else{
				$this->largo=$_POST['largo'];
			}
			$nombre='';

			if($this->tipoLote!='MATERIAL SOBRANTE'){
				if($_FILES['imagen']['type']=="image/jpeg"){
					$ext="jpg";
				}else
				if($_FILES['imagen']['type']=="image/png"){
					$ext="png";
				}
				$prep=str_replace(" ","_",$this->tipoLote);
				$nombre=$prep."_".uniqid().".".$ext;
				$hoy=date("y-m-d");
				$nombre_tmp = $_FILES['imagen']['tmp_name'];
				move_uploaded_file($nombre_tmp,
			          "imagenes/" . $nombre);
			}
			$iproducto=substr_count($this->producto, ',')+1;
			$cpb=$this->cPieza/$this->cPaquete;
			$sql = "CALL agregarMateriaPrima('$this->personal',
				'$this->proveedor',
				'$this->fecha',
				'$this->tipoLote',
				'$this->nroDesc',
				'$nombre',
				'$this->nroDesc',
				'$this->producto',
				'$this->cPieza',
				'$this->cPaquete',
				'$cpb',
				'$this->volumen',
				'$this->alto',
				'$this->ancho',
				'$this->largo',
				'$iproducto')";
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


	}
?>