<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
  /**
   *
   */
class Email extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->library('MyPHPMailer'); // load library
		$this->load->helper('form'); //memuat helper form
		$this->load->helper('html'); //memuat helper html
		$this->load->helper('url'); //memuat helper url
		$this->load->helper('text');
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
	
public function emailSend(){
  $this->load->library('email');
  $this->email->from('suicideudin@gmail.com', 'Muhammad Syarifudin');
  $this->email->to('123udinsama@gmail.com');
  $this->email->subject('This is my subject');
  $this->email->message('This is my message');
  $this->email->send();
}}
?>