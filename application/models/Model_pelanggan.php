<?php

class Model_pelanggan extends CI_Model
{
   
    public function getAllpel()
   {
          
      $query = "SELECT * from tb_pelanggan where status != 'selesai'";
      return $this->db->query($query)->result_array();
   }

//   public function get_jenis($sla_id)
//    {
//         $hasil=$this->db->query("SELECT * FROM tb_sla WHERE sla_id='$sla_id'");
//         return $hasil->result();
//    }

	public function getjenissla()
   {
      return $this->db->get('tb_sla')->result_array();
   }

   // public function get_pelanggan_byid($sla_id)
   // {
   //     $hsl=$this->db->query("SELECT * FROM tb_sla WHERE sla_id='$sla_id'");
   //      if($hsl->num_rows()>0){
   //          foreach ($hsl->result() as $data) {
   //              $hasil=array(
   //                  'sla_id' => $data->sla_id,
   //                  'durasi' => $data->durasi,
   //                  );
   //          }
   //      }
   //      return $hasil;
   // }

   public function hitungjmlsla()
   {
      $query = $this->db->get('tb_sla');
      if($query->num_rows()>0)
      {
        return $query->num_rows();
      }
      else
      {
        return 0;
      }
   }

    public function insert($data, $table)
   {
      $this->db->insert($table, $data);
   }

    public function delete($id)
   {
      $this->db->delete('tb_pelanggan', ['no_agenda' => $id]);
   }

  public function getmapelById($id_mapel)
   {
      return $this->db->get_where('mapel', ['id_mapel' => $id_mapel])->row_array();
   }

	public function updatepelanggan()
   {
      $mapel = $this->input->post('mapel');
      $hari = $this->input->post('hari');
      $tahun = $this->input->post('tahun');
      $id_guru = $this->input->post('id_guru');

      $data = [
      	'mapel' => $mapel,
      	'hari' => $hari,
      	'tahun' => $tahun,
      	'id_guru' => $id_guru
      ];

      $this->db->update('mapel', $data, ['id_mapel' => $this->input->post('id_mapel')]);
   }

   public function insertimport($data)
    {
        $this->db->insert_batch('tb_pelanggan', $data);
        // return $this->db->insert_id();
    }

     public function detailpel($id)
   {
       $data = array(
          'status' => 'selesai'
        );

      $this->db->where('no_agenda', $id);
      $this->db->update('tb_pelanggan', $data);
   }

   function jum_status()
   {
        $this->db->group_by('status');
        $this->db->select('status');
        $this->db->select("count(*) as total");
        return $this->db->from('tb_pelanggan')
          ->get()
          ->result();
   }

   public function hapuspel()
   {
      $this->db->delete('tb_pelanggan', ['no_agenda' => $proses[$i]]);
   }

}

?>