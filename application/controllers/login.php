<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ini_set('date.timezone', 'Asia/Jakarta'); 
class Login extends CI_Controller {

function __construct()
	{
		parent::__construct();
		$this->load->helper('form'); //memuat helper form
		$this->load->helper('html'); //memuat helper html
		$this->load->helper('url'); //memuat helper url
		$this->load->library('pagination');
		$this->load->library('m_pdf');
		$config['hostname']="localhost";
		$config['username']="postgres";
		$config['password']="udin";
		$config['database']="epnsserver";
		$config['dbdriver']="postgre";
		$config['dbprefix']="";
		$config['pconnect']="FALSE";
		$config['db_debug']="TRUE";
		$config['default']['cache_on'] = FALSE;
		$config['default']['cachedir'] = '';
		$config['default']['char_set'] = 'utf8';
		$config['default']['dbcollat'] = 'utf8_general_ci';
		$config['default']['swap_pre'] = '';
		$config['default']['autoinit'] = TRUE;
		$config['default']['stricton'] = FALSE;
		$this->load->model('report_model', '',$config);
		
	}
	public function index()
	{
	$user = $this->input->post('username');
	$pass = $this->input->post('password');
	$cek = $this->m_login->check($user,$pass);
	$hasil = count($cek);
	if($hasil > 0){
		$data_session = array('nama'=>$user,'status'=>"login");
		$this->session->set_userdata($data_session);
		redirect('admin');		  
		}
	else{
	redirect('report/lpse');
	}
	}
}
?>