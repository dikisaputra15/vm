<?php

class home extends CI_Controller
{

    public function __construct()
   {
      parent::__construct();
      $this->load->model('Model_pelanggan');
   }

   public function index()
   {
      if (!$this->session->userdata('nip')) {
            redirect('auth/login');
       }else{
         $data = [
            'title' => 'Home'
         ];

         $data['hasil']=$this->Model_pelanggan->jum_status();
         $this->load->view('templates/header', $data);
         $this->load->view('templates/navbar');
         $this->load->view('templates/menu');
         $this->load->view('admin/Home', $data);
         $this->load->view('templates/footer');
      }
   }

}
