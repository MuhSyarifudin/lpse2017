<?php
class operator extends CI_Model
{
	function __construct()
	{
		parent::__construct();	
	}
	
	public function index(){
		
		}
	public function ctchb(){
		return $get = $this->db->get('cth_berita')->result_array();
		}

	public function vberita($id='1'){
		$this->db->select('*');
		$this->db->from('cth_berita');
		$this->db->where('id',$id);
		$hasil = $this->db->get();
		return $hasil->result_array();
	}

	public function user(){
		$this->db->select('*');
		$this->db->from('users');
		$hasil = $this->db->get();
		return $hasil->result_array();
		}
	public function dissmiss($NIP){
		$this->db->from('member');
		$this->db->where('NIP', $NIP);
		$this->db->delete('member');
		}
	public function check($NIP){
		$this->db->from('users');
		$this->db->like('NIP',$NIP);
		return $result = $this->db->count_all_results();
		}
	
	public function check2($NIP){
		$this->db->from('riwayat');
		$this->db->like('NIP',$NIP);
		return $result = $this->db->count_all_results();
		}

	public function vmember($NIP='1'){
		$this->db->select('username,password,NIP,status,userregist');
		$this->db->from('member');
		$this->db->where('NIP',$NIP);
		$hasil = $this->db->get();
		return $hasil->result_array();
		}
	public function smember(){
		$this->db->select('Nama,updtprsn,status');
	}
	
	public function dmember()
	{
		$this->db->select('*');
		$this->db->from('member');
		$hasil=$this->db->get();
		return $hasil->result_array();
	}

	public function riwayat()
	{
		$this->db->select('*');
		$this->db->from('riwayat');
		$this->db->order_by('NIP','desc');
		$this->db->limit('5');
		$hasil=$this->db->get();
		return $hasil->result_array();
	}

	public function tampil_riwayat()
	{
		$this->db->select('*');
		$this->db->from('riwayat');
		$this->db->order_by('NIP','desc');
		$hasil = $this->db->get();
		return $hasil->result_array();
	}

	public function profil(){
		$this->db->select('*');
		$this->db->from('profil');
		$hasil = $this->db->get();
		return $hasil->result_array();
	}
	
	public function detail(){
		$this->db->select('*');
		$this->db->from('detail');
		$hasil = $this->db->get();
		return $hasil->result_array();
	}

	public function kontak(){
		$this->db->select('*');
		$this->db->from('kontak');
		$hasil = $this->db->get();
		return $hasil->result_array();
	}

	public function updt_contact(){
		$isi = $this->input->post('isi');
		$data = array(
		'isi' => $isi,
		);
		
		if(!empty($data)){
		$this->db->update('kontak', $data);
		redirect('admin?page=info');
		}
		else{
		redirect('admin?page=info');
		}
		}
	public function updt_profil(){
		$isi = $this->input->post('isi');
		$data = array(
		'isi' => $isi,
		);
		
		if(!empty($data)){
		$this->db->update('profil', $data);
		redirect('admin?page=info');
		}
		else{
		redirect('admin?page=info');
		}
	}

	public function status($NIP){
		$this->db->select('status');
		$this->db->where('NIP',$NIP);
		$hasil = $this->db->get('users');
		return $hasil;
	}

	public function updt_ttgkami(){
		$isi = $this->input->post('isi');
		$data = array(
		'isi' => $isi,
		);
		
		if(!empty($data)){
		$this->db->update('detail', $data);
		redirect('admin?page=info');
		}
		else{
		redirect('admin?page=info');
		}
	}
		
	public function input_berita($flpth){
		$judul                   = addslashes($this->input->post('judul'));
		$isi                   = addslashes($this->input->post('isi'));
		$img_src				= $flpth;
		$date					= addslashes($this->input->post('date'));
		
		$data = array(
			'img_src'=> $img_src,
			'brt_judul'=> $judul,
			'brt_isi' => $isi,
			'auditupdate'=> $date
		);
		$this->db->insert('cth_berita', $data);
		}


	function update_data($id,$data){
		$this->db->where("id",$id);
		$this->db->update("cth_berita",$data);
	}
	
	public function member(){
		$user                   = addslashes($this->input->post('username'));
        $pass                   = addslashes($this->input->post('password'));
        $nip                   = addslashes($this->input->post('nip'));
        $sknum                  = addslashes($this->input->post('sknum'));
        $tipe             		= addslashes($this->input->post('User_type'));
        $mail                  = addslashes($this->input->post('Email'));
        $pngkt					= addslashes($this->input->post('pangkat'));
     	$tgl					= addslashes($this->input->post('tanggal'));
     	$status 				= 'aktif';

		$data = array(
                'username'   => $user,
                'NIP'  => $nip,
                'password' => $pass,
                'No_sk'=> $sknum,
                'tipe_user'    => $tipe,
                'golongan'     => $pngkt,
                'email'  => $mail,
                'userregist' => $tgl,
   				'status' => $status
            );
		
		$this->db->insert('member', $data);
			
		}

}
?>