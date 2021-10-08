<?php

class pelanggan extends CI_Controller
{
	 public function __construct()
   {
      parent::__construct();
      $this->load->model('Model_pelanggan');
   }

   public function index()
   {
      $data = [
         'title' => 'Data Pelanggan'
      ];
      $data['pelanggan'] = $this->Model_pelanggan->getAllpel();
      $this->load->view('templates/header', $data);
      $this->load->view('templates/navbar');
      $this->load->view('templates/menu');
      $this->load->view('admin/pelanggan', $data);
      $this->load->view('templates/footer');
   }

    public function tambahpel()
   {
      $data = [
         'title' => 'Tambah Pelanggan'
      ];
      $data['jenis'] = $this->Model_pelanggan->getjenissla();

      $this->load->view('templates/header', $data);
      $this->load->view('templates/navbar');
      $this->load->view('templates/menu');
      $this->load->view('admin/tbh_pel', $data);
      $this->load->view('templates/footer');

   }  

   // function get_pelanggan(){
   //      $sla_id=$this->input->post('sla_id');
   //      $data = $this->Model_pelanggan->get_pelanggan_byid($sla_id);
   //      echo json_encode($data);
   //  }

   public function prosestambahpel()
   {
      $no_agenda = $this->input->post('no_agenda');
      $id_pel = $this->input->post('id_pel');
      $nama_pelanggan = $this->input->post('nama_pelanggan');
      $alamat = $this->input->post('alamat');
      $jenis = $this->input->post('jenis');
      $durasi_sla = $this->input->post('durasi_sla');
      $jenis_transaksi = $this->input->post('jenis_transaksi');
      $tarif_lama = $this->input->post('tarif_lama');
      $tarif_baru = $this->input->post('tarif_baru');
      $daya_lama = $this->input->post('daya_lama');
      $daya_baru = $this->input->post('daya_baru');
      $tgl_bayar = $this->input->post('tgl_bayar');
      $unit = $this->input->post('unit'); 
      $jenis = $this->input->post('jenis'); 
     
      $tglsekarang = date('Y-m-d');

      $tanggal1 = new DateTime($tgl_bayar);
      $tanggal2 = new DateTime();
      $durasi = $tanggal2->diff($tanggal1)->format("%a");

      $persentase = round($durasi / $durasi_sla * 100);
      if($persentase > 100){
         $status = "terlewat sla langsung eksekusi";
      }
      else if($persentase >= 75 and $persentase <=100 ){
         $status = "segera eksekusi";
      }else if($persentase >= 50 and $persentase <=75){
         $status = "waspada";
      }else{
         $status = "hati-hati";
      }


      $hsl = $no_agenda;
      $count = $this->db->query("SELECT no_agenda FROM tb_pelanggan where no_agenda='$hsl'");
      $hasilcount = $count->num_rows();

      if($hasilcount < 1){
        $data = [
        			'no_agenda' => $no_agenda,
        			'id_pel' => $id_pel,
                 'nama_pelanggan' => $nama_pelanggan,
        			'jenis_sla' => $jenis,
                 'durasi_sla' => $durasi_sla,
                 'alamat' => $alamat,
                 'jenis_transaksi' => $jenis_transaksi,
                 'tarif_lama' => $tarif_lama,
                 'tarif_baru' => $tarif_baru,
                 'daya_lama' => $daya_lama,
                 'daya_baru' => $daya_baru,
                 'tgl_bayar' => $tgl_bayar,
                 'unit' => $unit,
                 'durasi' => $durasi,
                 'persentase' => $persentase,
                 'status' => $status,
                 'tgl_insert' => $tglsekarang
        		];
     $this->Model_pelanggan->insert($data, 'tb_pelanggan');
     redirect('admin/pelanggan');
   }else
   {

     $data = array(
              'id_pel' => $id_pel,
                 'nama_pelanggan' => $nama_pelanggan,
              'jenis_sla' => $jenis,
                 'durasi_sla' => $durasi_sla,
                 'alamat' => $alamat,
                 'jenis_transaksi' => $jenis_transaksi,
                 'tarif_lama' => $tarif_lama,
                 'tarif_baru' => $tarif_baru,
                 'daya_lama' => $daya_lama,
                 'daya_baru' => $daya_baru,
                 'tgl_bayar' => $tgl_bayar,
                 'unit' => $unit,
                 'durasi' => $durasi,
                 'persentase' => $persentase,
                 'status' => $status,
                 'tgl_insert' => $tglsekarang
                );

                $this->db->where('no_agenda', $no_agenda);
                $this->db->update('tb_pelanggan', $data);

     $this->session->set_flashdata('flash', 'Ditambah');
     redirect('admin/pelanggan');
      // var_dump($data);
    }
   }

    public function hapuspel($id)
   {
      $this->Model_pelanggan->delete($id);
       $this->session->set_flashdata('flash', 'DiHapus');
      redirect('admin/pelanggan');
   }

     public function editpel($id)
   {
      $data['title'] = 'Edit';
      $data['pelanggan'] = $this->Model_pelanggan->getpelangganById($id);
    
      $this->form_validation->set_rules('no_agenda', 'no agenda', 'required');
      $this->form_validation->set_rules('id_pel', 'id pelanggan', 'required');
      $this->form_validation->set_rules('jenis_sla', 'jenis sla', 'required');
      $this->form_validation->set_rules('sla', 'sla', 'required');
      $this->form_validation->set_rules('nama_pelanggan', 'nama pelanggan', 'required');
      $this->form_validation->set_rules('alamat', 'alamat', 'required');
      $this->form_validation->set_rules('tarif_lama', 'tarif lama', 'required');
      $this->form_validation->set_rules('tarif_baru', 'tarif baru', 'required');
      $this->form_validation->set_rules('daya_lama', 'daya lama', 'required');
      $this->form_validation->set_rules('daya_baru', 'daya baru', 'required');
      $this->form_validation->set_rules('unit', 'unit', 'required');
      if ($this->form_validation->run() == false) {
         $this->load->view('templates/header', $data);
         $this->load->view('templates/navbar');
         $this->load->view('templates/menu');
         $this->load->view('admin/edit_pelanggan', $data);
         $this->load->view('templates/footer');
      } else {
         $this->Model_pelanggan->updatepelanggan();
          $this->session->set_flashdata('flash', 'DiUbah');
         redirect('admin/pelanggan');
      }
   }

 public function detailpel($id)
 {
      $this->Model_pelanggan->detailpel($id);
       $this->session->set_flashdata('flash', 'DiEksekusi');
      redirect('admin/pelanggan');
 }

  public function tombolpel()
   {
      $hapus = $this->input->post('1');
      $update = $this->input->post('2');
      $refresh = $this->input->post('3');

      if($hapus){
          $proses = $this->input->post('proses');
          for ($i=0; $i<sizeof ($proses);$i++) { 
            $this->db->where('no_agenda', $proses[$i]);
            $this->db->delete('tb_pelanggan');
          }

         // $this->session->set_flashdata('flash', 'DiHapus');
         redirect('admin/pelanggan');

      }
      elseif($update){
         $proses = $this->input->post('proses');
          for ($i=0; $i<sizeof ($proses);$i++) { 
            $data = array(
                    'status' => 'selesai'
            );

            $this->db->where('no_agenda', $proses[$i]);
            $this->db->update('tb_pelanggan', $data);

          }

         $this->session->set_flashdata('flash', 'DiEksekusi');
         redirect('admin/pelanggan');
      }
      else{
         $proses = $this->input->post('proses');
          for ($i=0; $i<sizeof ($proses);$i++) { 
            
            $query = $this->db->query("select * from tb_pelanggan where no_agenda='$proses[$i]'");
            $row = $query->row();

            $row->tgl_bayar;
            $row->durasi;
            $row->sla;

            $tanggal1 = new DateTime($row->tgl_bayar);
            $tanggal2 = new DateTime();
            $durasi = $tanggal2->diff($tanggal1)->format("%a");
            $persentase = round($row->durasi / $row->durasi_sla * 100);

            if($persentase > 100){
                  $status = "Terlewat SLA Langsung Eksekusi";
               }
               else if($persentase >= 75 and $persentase <=100 ){
                  $status = "Segera Eksekusi";
               }else if($persentase >= 50 and $persentase <=75){
                  $status = "Waspada";
               }else{
                  $status = "Hati-Hati";
               }

               $data = array(
                  'durasi' => $durasi,
                  'persentase' => $persentase,
                  'status' => $status
               );

               $this->db->where('no_agenda', $proses[$i]);
               $this->db->update('tb_pelanggan', $data);

          }

         // $this->session->set_flashdata('flash', 'Refresh');
         redirect('admin/pelanggan');
      }

   }


}
