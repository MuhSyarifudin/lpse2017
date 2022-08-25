<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
class login_m extends CI_Model{	
	function __construct() {
         parent::Model();
     }
	function cek_login($table,$where){
		$this->db->from('admin');
		return $this->db->get_where($table,$where);
	}	

}
?>