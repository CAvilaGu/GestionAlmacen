<? if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class ProductosModel extends CI_Model {
	private $codigo,$descripcion,$tipo,$calidad,$ancho,$alto,$largo,$unidad,$optimo,$tipo_producto,$producto,$cantidad;
		public function __construct() {
			parent::__construct();
			$this->load->database();
		}
		
		public function MateriaPrima(){
			$sql="SELECT descripcion, tipoMadera, dimAlto, dimAncho, dimLargo
					FROM tbl_sga_producto 
					WHERE tipoProducto = 'MATERIA PRIMA'";
			 $query= $this->db->query($sql);
			 return $query; 
		}
		public function Recibir(){
			if(!isset($_POST['codigo'])){
				echo "Codigo no ingresado ";
				return 1;
			}else{
				$this->codigo=$_POST['codigo'];
			}
			if(!isset($_POST['descripcion'])){
				echo "descripcion no ingresada ";
				return 1;
			}else{
				$this->descripcion=$_POST['descripcion'];
			}
			if(!isset($_POST['tipo'])){
				echo "tipo no ingresado ";
				return 1;
			}else{
				$this->tipo=$_POST['tipo'];
			}
			if(!isset($_POST['calidad'])){
				echo "calidad no ingresada ";
				return 1;
			}else{
				$this->calidad=$_POST['calidad'];
			}
			if(!isset($_POST['ancho'])){
				echo "ancho no ingresada ";
				return 1;
			}else{
				$this->ancho=$_POST['ancho'];
			}
			if(!isset($_POST['alto'])){
				echo "alto no ingresada ";
				return 1;
			}else{
				$this->alto=$_POST['alto'];
			}
			if(!isset($_POST['largo'])){
				echo "largo no ingresada ";
				return 1;
			}else{
				$this->largo=$_POST['largo'];
			}
			if(!isset($_POST['unidad'])){
				echo "unidad no ingresada ";
				return 1;
			}else{
				$this->unidad=$_POST['unidad'];
			}
			if(!isset($_POST['optimo'])){
				echo "optimo no ingresada ";
				return 1;
			}else{
				$this->optimo=$_POST['optimo'];
			}
			if(!isset($_POST['tipo_producto'])){
				echo "tipo_producto no ingresada ";
				return 1;
			}else{
				$this->tipo_producto=$_POST['tipo_producto'];
			}
		}

		public function Recibir_terminado(){
			if(!isset($_POST['producto'])){
				echo "producto no ingresado ";
				return 1;
			}else{
				$this->producto=$_POST['producto'];
			}
			if(!isset($_POST['cantidad'])){
				echo "cantidad no ingresada ";
				return 1;
			}else{
				$this->cantidad=$_POST['cantidad'];
			}
		}

		public function Guardar_normal(){
			$this->tipo_producto=$this->tipo_producto($this->tipo_producto);
			$sql="call agregarProducto('$this->codigo',
					'$this->descripcion',
					'$this->tipo',
					'$this->alto',
					'$this->ancho',
					'$this->largo',
					'$this->calidad',
					'$this->unidad',
					'$this->optimo',
					'$this->tipo_producto');";
			$query= $this->db->query($sql);
			if($query->row()->result=='ERROR'){
				return 1;
			}else{
				return 0;
			}
		}
		public function Guardar_derivado(){
			$this->tipo_producto=$this->tipo_producto($this->tipo_producto);
			$sql="call agregarProductoDerivado('$this->codigo',
					'$this->descripcion',
					'$this->tipo',
					'$this->alto',
					'$this->ancho',
					'$this->largo',
					'$this->calidad',
					'$this->unidad',
					'$this->optimo',
					'$this->tipo_producto',
					'$this->producto',
					'$this->cantidad');";
			$query= $this->db->query($sql);
			if($query->row()->result=='ERROR'){
				echo 1;
			}else{
				echo 0;
			}
		}
		public function Guardar_compuesto(){
			$iproducto=(count($this->producto));
			 if ($iproducto>1) {
			 		$this->producto=join(',',$this->producto);	
			 		$this->cantidad=join(',',$this->cantidad);	
			 }else{
			 	$this->producto=$this->producto[0];
			 	$this->cantidad=$this->cantidad[0];
			 }
				echo $this->cantidad;

			 

		}

		 function tipo_producto($a){
			if($a==1)
				return "Materia Prima";
			else if($a==2)
				return "Producto Terminado";
			else if($a==3)
				return "Consumible";
			else
				return "Material Sobrante";
		}
		public function listar(){
			$productos=array();
			$sql='SELECT idProducto, descripcion from tbl_sga_producto';
			$query= $this->db->query($sql);
			foreach ($query->result_array() as $producto) {
				$productos[]=($producto);
			}
			echo json_encode($productos);
		}
	}
?>