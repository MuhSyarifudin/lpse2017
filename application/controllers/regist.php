<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ini_set('date.timezone', 'Asia/Jakarta'); 
class regist extends CI_Controller {

function __construct()
	{
		parent::__construct();
		$this->load->helper('form'); //memuat helper form
		$this->load->helper('html'); //memuat helper html
		$this->load->helper('url'); //memuat helper url
		$this->load->library('pagination');
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
		$this->load->model('operator', '',$config);
		
	
		
	}
	public function index($error = NULL)
	{
		$this->load->view('registrasi');
	}
	
	public function do_upload(){
		
		$this->form_validation->set_rules('username','Nama','required', array('required'=>'%s tidak boleh kosong.'));
		$this->form_validation->set_rules('password','Password','required', array('required'=>'%s tidak boleh kosong.'));
		$this->form_validation->set_rules('nip','Nomor Induk Peserta (NIP) ','required', array('required'=>'%s tidak boleh kosong.'));
		$this->form_validation->set_rules('sknum','Nomor SK','required', array('required'=>'%s tidak boleh kosong.'));
		$this->form_validation->set_rules('User_type','Tipe User','required', array('required'=>'%s belum dipilih.'));
		$this->form_validation->set_rules('Email','E-mail','required', array('required'=>'%s tidak boleh kosong.'));
		$this->form_validation->set_rules('pangkat','Golongan','required', array('required' => 'Mohon lengkapi %s'  ));
		if($this->form_validation->run() == FALSE){
		$this->index();
		}
		else{
		$name = $this->input->post('username');
        // setting konfigurasi upload
        $config['upload_path'] = './uploads/SK/';
        $config['allowed_types'] = 'pdf';
		$config['file_name'] ='File_SK_'.$name;
        // load library upload
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('skfile')) {
            $error = $this->upload->display_errors();
            // menampilkan pesan error
            print_r($error);
        } else {
			$this->operator->member();
            $result = $this->upload->data();
            echo "Mohon tunggu, data anda sedang kami proses, pemberitahuan akan di kirim via E-mail.";
        }
		}
}
	
		
}
?>