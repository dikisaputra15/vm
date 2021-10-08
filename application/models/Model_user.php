<?php

class Model_user extends CI_Model
{
   public function getAlluser()
   {
      $query = "SELECT * from tb_user";
      return $this->db->query($query)->result_array();
   }

    public function insert($data, $table)
   {
      $this->db->insert($table, $data);
   }

    public function delete($id)
   {
      $this->db->delete('tb_user', ['user_id' => $id]);
   }

  public function getuserById($user_id)
   {
      return $this->db->get_where('tb_user', ['user_id' => $user_id])->row_array();
   }

	public function updateuser()
   {
      $nama_lengkap = $this->input->post('nama_lengkap');
      $nip = $this->input->post('nip');
      $password = $this->input->post('password');
      $level = $this->input->post('level');

      $data = [
      	'nip' => $nip,
      	'pass' => $password,
      	'nama_lengkap' => $nama_lengkap,
      	'level' => $level
      ];

      $this->db->update('tb_user', $data, ['user_id' => $this->input->post('user_id')]);
   }

}

?>