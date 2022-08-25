<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ini_set('date.timezone', 'Asia/Jakarta'); 
class news extends CI_Controller {

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
		$this->load->model('mbrt', '',$config);
	}
	
	public function index()
    {
		$row = $this->mbrt->baris();
		$config['base_url'] = 'http://localhost/lpseCI/index.php/news/index';
		$config['total_rows'] = $row;
		$config['per_page'] = 2;
		
		$config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = '&laquo; First';
        $config['first_tag_open'] = '<li class="prev page">';
        $config['first_tag_close'] = '</li>';
 
        $config['last_link'] = 'Last &raquo;';
        $config['last_tag_open'] = '<li class="next page">';
        $config['last_tag_close'] = '</li>';
 
        $config['next_link'] = 'Next &rarr;';
        $config['next_tag_open'] = '<li class="next page">';
        $config['next_tag_close'] = '</li>';
 
        $config['prev_link'] = '&larr; Prev';
        $config['prev_tag_open'] = '<li class="prev page">';
        $config['prev_tag_close'] = '</li>';
 
        $config['cur_tag_open'] = '<li class="current"><a href="">';
        $config['cur_tag_close'] = '</a></li>';
 
        $config['num_tag_open'] = '<li class="page">';
        $config['num_tag_close'] = '</li>';
		
		$start = $this->uri->segment(3);
		$this->pagination->initialize($config);
		
		$key= $this->input->get('key');
		$data['berita'] = $this->mbrt->get_all($config['per_page'], $start);
        $this->load->view('v_news',$data);
 
    }
	
}
?>