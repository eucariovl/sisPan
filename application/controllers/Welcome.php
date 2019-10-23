<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('user_model');
	}
	public function index(){
		if(isset($_SESSION['username'])){
			$test['user']=$this->user_model->data($_SESSION['username']);
			$this->load->view('menu',$test);
			$this->load->view('principal');
		}else{
		$this->load->view('loginv2');
		}
	}
	public function entrar(){
		if(isset($_SESSION['username'])){

		}
		if($this->user_model->login($_POST['username'],$_POST['password'])){
			//Guardamos el nombre de usuario
			$this->session->set_userdata('username',$_POST['username']);
			$user=$this->user_model->data($_POST['username']);
			$test['user']=$user;
			$use=$user[0];
			//Guardamos el rol en la sesion
			$this->session->set_userdata('rol',$use->nivel);
			$this->load->view('menu',$test);
			$this->load->view('principal');
		}else{
			redirect('welcome');
			}
		
	}
		
	public function exit(){
		$this->session->sess_destroy();
		redirect('welcome');
	}
	
	public function generarSolicitud(){
		if(isset($_SESSION['username'])){
			$test['user']=$this->user_model->data($_SESSION['username']);
			$this->load->view('menu',$test);
			$this->load->view('principal');
		}else{
		$this->load->view('loginv2');
		}
	}
	public function verMisSolicitudes(){
		if(isset($_SESSION['username'])){
			$test['user']=$this->user_model->data($_SESSION['username']);
			$this->load->view('menu',$test);
			$this->load->view('principal');
		}else{
		$this->load->view('loginv2');
		}
	}
	public function verSolicitudes(){
		if(isset($_SESSION['username'])){
			$test['user']=$this->user_model->data($_SESSION['username']);
			$this->load->view('menu',$test);
		}else{
		$this->load->view('loginv2');
		}
	}
	public function verProveedores(){
		if(isset($_SESSION['username'])){
			$test['user']=$this->user_model->data($_SESSION['username']);
			$this->load->view('menu',$test);
		}else{
		$this->load->view('loginv2');
		}
	}
	public function verUsuarios(){
		if(isset($_SESSION['username'])&&$_SESSION['rol']>=1){
			$test['user']=$this->user_model->data($_SESSION['username']);
			$test['data']=$this->user_model->get_user();
			$this->load->view('menu',$test);
			$this->load->view('crudUsuarios',$test);
		}else{
		$this->load->view('loginv2');
		}
	}
	public function addUser(){
		if(isset($_SESSION['username'])){
			$test['user']=$this->user_model->data($_SESSION['username']);
			$this->load->view('menu',$test);
		
			$this->user_model->add_user($_POST);
			redirect('welcome/verUsuarios');
			}else{
		$this->load->view('loginv2');
		}
	}
}
