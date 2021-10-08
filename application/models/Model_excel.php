<?php

if(!defined('BASEPATH')) die('No access');

class Model_excel extends CI_Model
{

	public function readpelanggan(){
		$qry = $this->db->get('tb_pelanggan');
		$data = $qry->result_array();
		$qry->free_result();

		return $data;
	}

}

?>