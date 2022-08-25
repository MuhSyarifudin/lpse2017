<?php
class Admin extends CI_Controller{
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
		$this->load->model('operator', '',$config);
		
	}


	function index(){
		$display = $this->input->get('display');
		$data['verif']=$this->operator->dmember();
		$data['member'] = $this->operator->vmember();
		$data['users']=$this->operator->user();
		$data['berita']=$this->operator->ctchb();
		$data['ditolak'] = $this->operator->riwayat();
		$data['profil'] = $this->operator->profil();
		$data['detail'] = $this->operator->detail();
		$data['kontak'] = $this->operator->kontak();
		$this->load->view('vadmin.php',$data);
	}

	function lihat(){
		$data['ditolak']=$this->operator->tampil_riwayat();
		$this->load->view('v_history',$data);
	}

	public function hapus($id){
		$this->db->delete('cth_berita', array('id' => $id));
		redirect('admin?page=berita');
	}

	function update($id){
	$data['berita'] = $this->operator->vberita($id);
	$this->load->view('v_edit',$data);
	}

	function ukontak(){
		$this->operator->updt_contact();
		redirect("admin?page=info");
		
		}

	function edit($id){
		$where = array('id' => $id);
		$data['user'] = $this->m_data->edit_data($where,'id')->result();
		$this->load->view('v_edit',$data);
	}

	function uprofil(){

		$this->operator->updt_profil();
		redirect("admin?page=info");
	}

	function uttgkami(){
		$this->operator->updt_ttgkami();
		redirect("admin?page=info");

	}

	public function logout(){
	 $data_session = array('nama' => '','status' => '');
        $this->session->unset_userdata($data_session);
        session_destroy();
        redirect('report/lpse');
        exit;
	}
	
	function do_upload() {
		
		$this->form_validation->set_rules('thumbnail','Thumbnail','required', array('required'=>'%s belum dipilih.'));
		$this->form_validation->set_rules('date','Tanggal','required', array('required'=>'%s belum dipilih.'));
		$this->form_validation->set_rules('judul','Judul berita','required', array('required'=>'%s tidak boleh kosong.'));
		$this->form_validation->set_rules('isi','Isi berita','required', array('required'=>'Harap sertakan %s.'));
		
		if(! $this->form_validation->run() == FALSE){
			$this->berita($error);
			}
			else{
		$thumbname = $this->input->post('judul');
        // setting konfigurasi upload
        $config['upload_path'] = './uploads/image';
        $config['allowed_types'] = 'gif|jpg|png';
		$config['file_name']='Thumbnail_#'.$thumbname;
		$config['max_size'] = '5000';
        $config['max_width'] = '3000';
        $config['max_height'] = '3000';
		
        // load library upload
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('thumbnail')) {
            $error = $this->upload->display_errors();
            // menampilkan pesan error
            $this->berita($error);
        } else {
			$result = $this->upload->data();
			echo $flpth = $result['orig_name'];
			echo "<pre>";
            print_r($result);
            echo "</pre>";
			$data['input'] = $this->operator->input_berita($flpth);
        }
			}

		
		
		}

	function updateb(){
	$id = $this->input->post('id');
	$judul = $this->input->post('judul');
	$isi = $this->input->post('isi');
	$tgl = $this->input->post('date');
 
	$data = array(
		'brt_judul' => $judul,
		'brt_isi' => $isi,
		'auditupdate' => $tgl
	);
 
	//$where = array(
	//	'id' => $id
	//);
 	

	$this->operator->update_data($id,$data,'cth_berita');
	redirect('admin/index');
	}
	
	

	
}
?>