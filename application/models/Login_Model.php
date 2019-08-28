<?php
	class Login_Model extends CI_Model{
		function log_check($table,$where){
			return $this->db->get_where($table,$where);
		}
	}
?>