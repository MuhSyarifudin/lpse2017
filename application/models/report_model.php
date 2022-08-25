<?php
class report_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();	
	}
	
	public function ctch_brt(){
		$this->db->select('*');
		$this->db->from('cth_berita');
		$this->db->limit(4);
		$this->db->order_by('auditupdate','desc');
		$result=$this->db->get();
		return $result->result_array();
		}
	public function ctch_brt2($id='1'){
		$this->db->select('*');
		$this->db->from('cth_berita');
		$this->db->where('id',$id);
		$result=$this->db->get();
		return $result->result_array();
		}
	
	public function contact(){
		$this->db->select('*');
		$this->db->from('kontak');
		$hasil=$this->db->get();
		return $hasil->result_array();
		}

	public function profil(){
		$this->db->select('*');
		$this->db->from('profil');
		$hasil=$this->db->get();
		return $hasil->result_array();
		}

	public function detail(){
		$this->db->select('*');
		$this->db->from('detail');
		$hasil=$this->db->get();
		return $hasil->result_array();
		}
	
	public function News($display){
		$this->db->select('*');
		$this->db->from('berita');
		$this->db->limit('display');
		$hasil=$this->db->get();
		}
	
	public function get_paket($tahun){
	  if($tahun != ''){
		$this->db->select('sum(total_paket) as totpkt,
		 sum(total_paket_selesai) as totpktsls,
		 sum(pagu) as pagu,
		 sum(pagu_selesai) as pagusls,
		 sum(total_penawaran) as totwar,
		 sum(selisih) as selisih,
		 sum(selisih_persen) as persen
		 ');
		$this->db->from('v_rekap_paket_tahun');
		$this->db->where('tahun',$tahun);
		$hasil=$this->db->get();
	  }
	  else{
		$this->db->select('sum(total_paket) as totpkt,
		 sum(total_paket_selesai) as totpktsls,
		 sum(pagu) as pagu,
		 sum(pagu_selesai) as pagusls,
		 sum(total_penawaran) as totwar,
		 sum(selisih) as selisih,
		 sum(selisih_persen) as persen
		 ');
		$this->db->from('v_rekap_paket_tahun');
		$hasil=$this->db->get();  
	  }
		return $hasil->result_array();
	}

	public function get_tender(){
	$this->db->select('tahun, sum(total_paket) as totpkt,
		 sum(total_paket_selesai) as totpktsls,
		 sum(pagu) as pagu,
		 sum(pagu_selesai) as pagusls,
		 sum(total_penawaran) as totwar,
		 sum(selisih) as selisih,
		 sum(selisih_persen) as persen
		 ');
		$this->db->from('v_rekap_paket_tahun');
		$this->db->group_by('tahun');
		$hasil=$this->db->get();
		return $hasil->result_array();
	}
		
	public function get_kota() {
        $this->db->from('v_kota');
        $this->db->order_by('hitung DESC');
		$hasil=$this->db->get();
		return $hasil->result_array();
    }
	
	public function graf_ada(){
	$this->db->select('sum(total_paket_selesai) as pkt_sls,
	kategori, kgr_id');
	$this->db->from('v_pkt_selesai_pengadaan');
		$this->db->group_by('kategori, kgr_id');
		$this->db->order_by('kgr_id');
		$hasil=$this->db->get();
		return $hasil->result_array();
	}
	
	public function get_skpd(){
	$this->db->select('sum(total_paket_selesai) as pkt_sls,stk_nama, sum(pagu) as pkt_pagu, sum(total_penawaran) as totpen');
	$this->db->from('v_pkt_selesai_pengadaan');
	$this->db->group_by('stk_nama');
	$this->db->order_by('pkt_sls DESC');
		$hasil=$this->db->get();
		return $hasil->result_array();
	}
	
	public function lelang_gagal($tahun){
	if($tahun != ''){
	$this->db->select('tahun, pkt_id, pkt_nama, pkt_pagu, stk_nama');
	$this->db->from('v_lelang_gagal');
		$this->db->limit(10);
	$this->db->where('tahun', $tahun);
	$this->db->where('pkt_status', '0');
	$hasil=$this->db->get();
	}
	else{
	$this->db->select('count(pkt_status) as jumlah, tahun, sum(pkt_pagu) as pagu');
	$this->db->from('v_lelang_gagal');
	$this->db->where('pkt_status', '0');
	$this->db->group_by('tahun');
	$this->db->order_by('tahun');
	$hasil=$this->db->get();
	}
	return $hasil->result_array();
	}
	
	public function lelang_ulang($tahun){
	$this->db->select('tahun, pkt_id, pkt_nama, pkt_pagu, stk_nama');
	$this->db->from('v_lelang_ulang');
	$this->db->where('tahun', $tahun);
	$this->db->limit(10);
	$hasil=$this->db->get();
	return $hasil->result_array();
	}
	
	public function data_lelang($tahun){
	$this->db->from('v_data_lelang');
	$this->db->where('tahun', $tahun);
	$this->db->limit(10);
	$hasil=$this->db->get();
	return $hasil->result_array();
	}

	public function data_lelang2($tahun){
	$this->db->from('v_data_lelang');
	$this->db->where('tahun', $tahun);
	$hasil=$this->db->get();
	return $hasil->result_array();
	}

	public function lelang_ulang2($tahun){
	$this->db->select('tahun, pkt_id, pkt_nama, pkt_pagu, stk_nama');
	$this->db->from('v_lelang_ulang');
	$this->db->where('tahun', $tahun);
	$hasil=$this->db->get();
	return $hasil->result_array();
	}

	public function lelang_gagal2($tahun){
	$this->db->select('tahun, pkt_id, pkt_nama, pkt_pagu, stk_nama');
	$this->db->from('v_lelang_gagal');
	$this->db->where('tahun', $tahun);
	$this->db->where('pkt_status', '0');
	$hasil=$this->db->get();
	return $hasil->result_array();
	}
	
		
	

}
?>