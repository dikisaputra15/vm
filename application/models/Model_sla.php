<?php

class Model_sla extends CI_Model
{
   public function getAllsla()
   {
      $query = "SELECT * from tb_sla";
      return $this->db->query($query)->result_array();
   }

    public function insert($data, $table)
   {
      $this->db->insert($table, $data);
   }

    public function delete($sla_id)
   {
      $this->db->delete('tb_sla', ['sla_id' => $sla_id]);
   }

  public function getslaById($sla_id)
   {
      return $this->db->get_where('tb_sla', ['sla_id' => $sla_id])->row_array();
   }

	public function updatesla()
   {
      $jenis = $this->input->post('jenis');
      $durasi = $this->input->post('durasi');

      $data = [
        'jenis' => $jenis,
      	'durasi' => $durasi
      ];

      $this->db->update('tb_sla', $data, ['sla_id' => $this->input->post('sla_id')]);
   }

}

?>