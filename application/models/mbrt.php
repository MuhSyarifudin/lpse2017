<?php
class mbrt extends CI_Model
{
	public function get_all($PerPage,$start){
		$this->db->order_by('auditupdate','desc');
		return $get = $this->db->get('cth_berita', $PerPage, $start)->result_array();
	}
	
	public function search($PerPage,$start,$key){
		$this->db->or_like('brt_judul',$key);
		return $hasil = $this->db->get('cth_berita', $PerPage, $start)->result_array();
		}
	
	public function baris(){
		return $this->db->get('cth_berita')->num_rows();
		}
	
}
?>