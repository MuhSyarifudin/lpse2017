<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ini_set('date.timezone', 'Asia/Jakarta'); 
class report extends CI_Controller {

function __construct()
	{
		parent::__construct();
		$this->load->helper('text');
		$this->load->helper('form'); //memuat helper form
		$this->load->helper('html'); //memuat helper html
		$this->load->helper('url'); //memuat helper url
		$this->load->helper('text');
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
		$tahun = $this->input->get('tahun');
		$data['paket'] = $this->report_model->get_paket($tahun);
		$data['tender'] = $this->report_model->get_tender();
		$data['adaan'] = $this->report_model->graf_ada();
		$data['gagal'] = $this->report_model->lelang_gagal($tahun);
		$data['skpd'] = $this->report_model->get_skpd();
		$data['lls_ulang'] = $this->report_model->lelang_ulang($tahun);
		$data['data_lelang'] = $this->report_model->data_lelang($tahun);
		$this->load->view('report_view', $data);
	}
	
	public function Detail(){
		$data['detail']=$this->report_model->detail();
		$this->load->view('describe',$data);
		}
	
	public function profil(){
		$data['profil']=$this->report_model->profil();
		$this->load->view('profil',$data);
		}
	public function kota(){
		$data['getkota'] = $this->report_model->get_kota();
		$this->load->view('report_kota', $data);
	}
	
	public function skpd(){
		$data['skpd'] = $this->report_model->get_skpd();
		$this->load->view('report_rekap', $data);
	}
	
	public function grafikskpd(){
		$data['skpd'] = $this->report_model->get_skpd();
		$this->load->view('report_grafikskpd', $data);
	}

	public function lelang(){
		
		$tahun = $this->input->get('tahun');
		$data['data_lelang'] = $this->report_model->data_lelang2($tahun);
		$this->load->view('report_data_lelang_tahun', $data);
	}	
	

	public function lelangulang(){
		$tahun = $this->input->get('tahun');
		$data['llgulg'] = $this->report_model->lelang_ulang2($tahun);
		$this->load->view('report_data_lelang_ulang', $data);
	}	

	public function lelanggagal(){
		$tahun = $this->input->get('tahun');
		$data['llgggl'] = $this->report_model->lelang_gagal2($tahun);
		$this->load->view('report_data_lelang_gagal', $data);
	}
	
	public function lpse(){
		$data['cth_berita'] = $this->report_model->ctch_brt();
		$this->load->view('home', $data);
		}
		
	public function contact(){
		$data['kontak'] = $this->report_model->contact();
		$this->load->view('cp', $data);
		}
		
	public function lelang2(){
		
		$tahun = $this->input->get('tahun');
		$data['data_lelang'] = $this->report_model->data_lelang2($tahun);
		$this->load->view('report_cetak_llg_thn', $data);
	}
	
		
	public function Register() {
		$this->load->view('Registrasi');
		}

	public function lakukan_download($img_src){
		$this->load->helper('download');
		force_download('uploads/image/'.$img_src,NULL);
	}
	

	}
?>