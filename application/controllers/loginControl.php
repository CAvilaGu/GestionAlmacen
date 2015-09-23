<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class LoginControl extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
		//$this->load->model('login_model');
		$this->load->library(array('session','form_validation'));
		$this->load->helper('url');
		$this->load->helper('form');    
	}
	
	public function index()
	{	
		switch ($this->session->userdata('perfil')) 
		{
			case '':
				$data['token'] = $this->token();
				$data['titulo'] = 'Login con roles de usuario en codeigniter';
				$this->load->view('loginView',$data);
				break;
			case 'Administrador':
				redirect(base_url().'welcome');
				break;
			case 'editor':
				redirect(base_url().'admin');
				break;	
			case 'usuario':
				redirect(base_url().'usuario');
				break;
			default:		
				$data['titulo'] = 'Login con roles de usuario en codeigniter';

				$this->load->view('loginView',$data);

				break;		
		}
	}
 
	public function new_user()
	{
		if($this->input->post('token') && $this->input->post('token') == $this->session->userdata('token'))
		{
            $this->form_validation->set_rules('username', 'Nombre de Usuario', 'required|trim|min_length[2]|max_length[150]');
            $this->form_validation->set_rules('password', 'Contraseña', 'required|trim|min_length[5]|max_length[150]');
 
            //lanzamos mensajes de error si es que los hay
            
			if($this->form_validation->run() == FALSE)
			{
				$this->index();
			}else{
				$username = $this->input->post('username');
				//$password = sha1($this->input->post('password'));
				$password = $this->input->post('password');
				//$check_user = $this->login_model->login_user($username,$password);
				if ($password == '12345' && $username == 'madera') 
				{
					$check_user = TRUE;
					if($check_user == TRUE)
					{
						$data = array(
		                'is_logued_in' 	=> 		TRUE,
		                'id_usuario' 	=> 		'1',//$check_user->idUsuarios,
		                'perfil'		=>		'Administrador',//$check_user->rolUsuario,
		                'username' 		=> 		'euro',//$check_user->emailUsuario,
		                'nombre'		=>		'Euro',//$check_user->nombre,
		                'apellido'		=>		'Stefanelli'//$check_user->apellido
	            		);		
						$this->session->set_userdata($data);
						$this->index();
					}
				}else
				{
					redirect(base_url().'loginView');
				}
				
			}
		}else{
			redirect(base_url().'loginView');
		}
	}
	
	public function token()
	{
		$token = md5(uniqid(rand(),true));
		$this->session->set_userdata('token',$token);
		return $token;
	}
	
	public function logout_ci()
	{
		$this->session->sess_destroy();
		redirect(base_url().'loginView');
		//$this->index();
	}
}
?>