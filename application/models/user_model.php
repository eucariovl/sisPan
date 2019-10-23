<?php
class user_model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
		
	}

	function login($username, $password){
		$this->db->where('correo', $username);
		$this->db->where('password', $password);
		$this->db->where('estado',1);
		$result= $this->db->get('usuarios');
		if($result->num_rows()>0){
			return true;
		}else{
			return false;
		}
	}
	function data($username){
		$this->db->where('correo', $username);
		$result= $this->db->get('usuarios');
		return $result->result();
		
	}
	function get_user(){
		$result= $this->db->get('usuarios');
		return $result;
		
	}
	function add_user($data){
		If(!$this->db->insert('usuarios',$data)){
			return $error = $this->db->error();
			}
	}
	
}?>