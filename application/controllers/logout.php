<?

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Logout extends CI_Controller
{
    public function __construct()
    {
       parent::__construct();
       $this->load->library(array('session','form_validation'));
		$this->load->helper('url');
		$this->load->helper('form');    
	}
	
	public function index()
	{	

		$this->session->sess_destroy();
		redirect('LoginControl');

		
	}
 
	
}
?>