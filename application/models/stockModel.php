<? if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require('includes/fpdf.php');
class PDF extends FPDF
{
// Cabecera de página
	function Header()
	{
	    // Logo
	   $pdf = new FPDF();
					$this->Image('assets/images/logo.png',20,18,80);
	    // Arial bold 15
				    $this->SetFont('Arial','B',15);
				    // Movernos a la derecha
				    $this->Cell(80);
				    // Título
				    $X=0;
				    $this->line(10,10+$X,200,10+$X);
				    $this->line(200,10+$X,200,150+$X);
				    $this->line(10,10+$X,10,150+$X);
				    $this->line(200,150+$X,10,150+$X);
				    $this->line(10,70+$X,200,70+$X);
				    $this->line(200,40+$X,110,40+$X);
				    $this->line(110,10+$X,110,70+$X);
				    $this->line(90,70+$X,90,150+$X);
				    $this->line(10,100+$X,200,100+$X);
				    // $X=140;
				    // $this->line(10,10+$X,200,10+$X);
				    // $this->line(200,10+$X,200,150+$X);
				    // $this->line(10,10+$X,10,150+$X);
				    // $this->line(200,150+$X,10,150+$X);


				    $this->Ln(20);
	}

	function Fecha($fecha,$bulto,$tipo,$descripcion,$meidas){
		$this->SetFont('Arial','B',35);
		$this->Cell(0,0,"$fecha",100,0,'R');
		$this->ln(25);
		$this->Cell(0,0,"$bulto",100,0,'R');
		$this->ln(25);
		$this->SetFont('Arial','B',15);
		$this->Cell(0,0,"$tipo",100,0,'L');
		$this->SetFont('Arial','B',35);
		$this->ln(15);
		$this->Cell(0,0,"$meidas",100,0,'R');
		$this->SetFont('Arial','B',15);
		$this->ln(25);
		$this->Cell(0,0,"$descripcion",100,0,'L');

	}
}

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
		public function mostrar(){
			
			if(!isset($_GET['lote'])){
				echo "Error";
			}else{
				$lote=$_GET['lote'];
				$sql="Select l.tipoLote, l.fechaEntrada, b.idBulto, b.idLote, p.descripcion, p.dimAncho, p.dimAlto, p.dimLargo
					from `tbl_sga_lote`as l, `tbl_sga_bulto`as b, `tbl_sga_producto` as p
					where b.idLote = '$lote'
					and b.idProducto = p.idProducto
					and l.idLote=b.idLote";
				$query = $this->db->query($sql);
				$pdf = new PDF();
				foreach ($query->result() as $row)
				{
					$fecha= date_create($row->fechaEntrada);
					$fecha= date_format($fecha, 'd-m-Y');

					$pdf->AddPage();
					$pdf->Fecha("$fecha","$row->idBulto","$row->tipoLote","$row->descripcion","$row->dimAncho x $row->dimAlto x $row->dimLargo");
				 
				}
				// $pdf = new PDF();
				// $pdf->AddPage();
				// $pdf->Fecha('11/10/2007','002110','PRODUCTO TERMINADO','Madera molica','200x330x3004');
				// $pdf->AddPage();
				// $pdf->Fecha('11/10/2007','002110','PRODUCTO TERMINADO','Madera molica','200x330x3004');
				$pdf->Output();
			}

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