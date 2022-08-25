<?php
class crud extends CI_Controller{
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){redirect(base_url("login"));}
		$this->load->helper('form'); //memuat helper form
		$this->load->helper('html'); //memuat helper html
		$this->load->helper('url'); //memuat helper url
		$this->load->library('pagination');
		$this->load->library('m_pdf');
		$this->load->library('form_validation');
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
		$this->load->model('operator', '',$config);}
	
	public function index(){
		$NIP=NULL;
		$data['verif'] = $this->operator->dmember();
		$data['ditolak'] = $this->operator->riwayat();
		$this->load->view('vadmin',$data);
		}
	public function edit($NIP){
		$data['verif'] = $this->operator->dmember();
		$data['confirm'] = $this->operator->vmember($NIP);
		$this->load->view('form_v',$data);
		}

	public function hapus($NIP){
		$check = $this->operator->check2($NIP);
		if($check > 0){
		$this->db->delete('member', array('NIP' => $NIP));
		echo "data dobel, data dihapus";
		}
	else{
		$data = $this->operator->vmember($NIP);
		$this->db->set($data[0]);
		$this->db->insert('riwayat');
		$this->db->delete('member', array('NIP' => $NIP));
		redirect('admin/index');
		}
	}

	public function tambah($NIP){
		$data = $this->operator->vmember($NIP);
		
		if(!empty($data)){
			$check = $this->operator->check($NIP);
			
			if($check > 0){
			echo "Sudah terdaftar";
			} 
		    else{
		    	print_r($data);
		    	$this->db->insert('users',$data[0]);

		    	$this->operator->dissmiss($NIP);
		    }
		}
		
	}

	
	}


?>