<?php
  class m_login extends CI_Model {
  
    public $table = 'users';

    public function check($user,$pass)
    {
	
     $this->db->where('username',$user);   
	 $this->db->where('password',$pass);
	 return	$this->db->get('users')->row(); 
    }

  }
  ?>