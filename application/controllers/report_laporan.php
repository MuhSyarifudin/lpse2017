<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class report_laporan extends CI_Controller {

function __construct()
	{
		parent::__construct();
		$this->load->helper('form'); //memuat helper form
		$this->load->helper('html'); //memuat helper html
		$this->load->library('m_pdf');
		$this->load->helper('url'); //memuat helper url
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
		
		$this->load->view('report_lap_all', $data);
		$html = $this->load->view('report_lap_all', $data, true);
		$sumber = $html;
		$file = "Laporan_Keseluruhan_LPSE.pdf";
		
		$pdf = $this->m_pdf->load();
		
		$pdf->AddPage('L');
		$pdf->WriteHTML($html);
		$pdf->Output($file, 'D');
		exit();
	}

	public function laporan(){
		$tahun = $this->input->get('tahun');
		$data['paket'] = $this->report_model->get_paket($tahun);
		$data['gagal'] = $this->report_model->lelang_gagal2($tahun);
		$data['llgulg'] = $this->report_model->lelang_ulang2($tahun);
		$data['data_lelang'] = $this->report_model->data_lelang2($tahun);
		$this->load->view('report_lap_tahun', $data);
		$html = $this->load->view('report_lap_tahun', $data, true);
		$sumber = $html;

		$file = "Laporan_LPSE_".$tahun.".pdf";
		
		$pdf = $this->m_pdf->load();
		
		$pdf->AddPage('L');
		$pdf->WriteHTML($html);
		$pdf->Output($file, 'D');
		exit();
	}

	public function rekapskpd(){
		$data['skpd'] = $this->report_model->get_skpd();
		$this->load->view('report_lap_rekap', $data);
		$html = $this->load->view('report_lap_rekap', $data, true);
		$sumber = $html;

		$file = "Laporan_LPSE_Rekap_SKPD.pdf.";
		
		$pdf = $this->m_pdf->load();
		
		$pdf->AddPage('L');
		$pdf->WriteHTML($html);
		$pdf->Output($file, 'D');
		exit();
	}
	
	public function grafskpd() {
		$data['skpd'] = $this->report_model->get_skpd();
		$this->load->view('report_lap_graf_skpd',$data);
		$html = $this->load->view('report_lap_graf_skpd',$data,true);
		$sumber = $html;
		
		$file = 'Laporan_grafik_rekap_SKPD.pdf';
		
		$pdf = $this->m_pdf->load();
		
		$pdf->AddPage('L');
		$pdf->WriteHTML($html);
		$pdf->Output($file, 'D');
		exit();
		}
		
	public function lelang(){
		$tahun = $this->input->get('tahun');
		$data['data_lelang'] = $this->report_model->data_lelang2($tahun);
		$this->load->view('report_lap_lelang', $data);
		$html = $this->load->view('report_lap_lelang', $data, true);
		$sumber = $html;

		$file = "Laporan_lelang_tahun_".$tahun.".pdf";
		
		$pdf = $this->m_pdf->load();
		
		$pdf->AddPage('L');
		$pdf->WriteHTML($html);
		$pdf->Output($file, 'D');
		exit();
	}	
	
	public function ulang(){
		$tahun = $this->input->get('tahun');
		$data['llgulg'] = $this->report_model->lelang_ulang2($tahun);
		$html = $this->load->view('report_lap_lelang_ulg',$data, true);
		$sumber = $html;
		
		$file = "Laporan_lelang_ulang_tahun_".$tahun.".pdf";
		
		$pdf = $this->m_pdf->load();
		
		$pdf->AddPage('L');
		$pdf->WriteHTML($html);
		$pdf->Output($file, 'D');
		exit();
		}
		
	public function gagal(){
		$tahun = $this->input->get('tahun');
		$data['llgggl'] = $this->report_model->lelang_gagal2($tahun);
		$html = $this->load->view('report_lap_lelang_ggl',$data, true);
		$sumber = $html;
	
		$file = "Laporan_lelang_gagal_tahun_".$tahun.".pdf";
		
		$pdf = $this->m_pdf->load();
		
		$pdf->AddPage('L');
		$pdf->WriteHTML($html);
		$pdf->Output($file, 'D');
		exit();
	}
		
	}
?>