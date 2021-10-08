<?php

class pelangganselesai extends CI_Controller
{
	 public function __construct()
   {
      parent::__construct();
      $this->load->model('Model_selesai');
   }

   public function index()
   {
      $data = [
         'title' => 'Data Pelanggan Yang Sudah Dieksekusi'
      ];
      $data['pelsel'] = $this->Model_selesai->getAllpelsel();
      $this->load->view('templates/header', $data);
      $this->load->view('templates/navbar');
      $this->load->view('templates/menu');
      $this->load->view('admin/pelsel', $data);
      $this->load->view('templates/footer');
   }

     public function tombolpelsel()
   {

          $proses = $this->input->post('proses');
          for ($i=0; $i<sizeof ($proses);$i++) { 
            $this->db->where('no_agenda', $proses[$i]);
            $this->db->delete('tb_pelanggan');
          }

         //$this->session->set_flashdata('flash', 'DiHapus');
         redirect('admin/pelangganselesai');
      
   }


}
