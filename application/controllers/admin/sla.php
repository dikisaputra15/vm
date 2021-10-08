<?php

class sla extends CI_Controller
{
	 public function __construct()
   {
      parent::__construct();
      $this->load->model('Model_sla');
   }

   public function index()
   {
      $data = [
         'title' => 'Data SLA'
      ];
      $data['sla'] = $this->Model_sla->getAllsla();
      $this->load->view('templates/header', $data);
      $this->load->view('templates/navbar');
      $this->load->view('templates/menu');
      $this->load->view('admin/sla', $data);
      $this->load->view('templates/footer');
   }

    public function tambahsla()
   {
      $jenis_sla = $this->input->post('jenis_sla');
      $durasi = $this->input->post('durasi');

      $data = [
            'jenis' => $jenis_sla,
      			'durasi' => $durasi
      		];

     $this->Model_sla->insert($data, 'tb_sla');
      $this->session->set_flashdata('flash', 'Ditambah');
      redirect('admin/sla');
   }

    public function hapussla($sla_id)
   {
      $this->Model_sla->delete($sla_id);
       $this->session->set_flashdata('flash', 'DiHapus');
      redirect('admin/sla');
   }

     public function editsla($sla_id)
   {
      $data['title'] = 'Edit';
      $data['sla'] = $this->Model_sla->getslaById($sla_id);
      $this->form_validation->set_rules('jenis', 'jenis sla', 'required');
      // $this->form_validation->set_rules('sla', 'sla', 'required');

      if ($this->form_validation->run() == false) {
         $this->load->view('templates/header', $data);
	      $this->load->view('templates/navbar');
	      $this->load->view('templates/menu');
	      $this->load->view('admin/edit_sla', $data);
	      $this->load->view('templates/footer');
      } else {
         $this->Model_sla->updatesla();
          $this->session->set_flashdata('flash', 'DiUbah');
         redirect('admin/sla');
      }
   }

}
