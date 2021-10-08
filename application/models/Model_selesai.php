<?php

class Model_selesai extends CI_Model
{
   public function getAllpelsel()
   {
      $query = "SELECT * from tb_pelanggan where status='selesai'";
      return $this->db->query($query)->result_array();
   }

    
}

?>