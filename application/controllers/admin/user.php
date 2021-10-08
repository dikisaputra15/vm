<?php

class user extends CI_Controller
{
	 public function __construct()
   {
      parent::__construct();
      $this->load->model('Model_user');
   }

   public function index()
   {
      $data = [
         'title' => 'Data User'
      ];
      $data['user'] = $this->Model_user->getAlluser();
      $this->load->view('templates/header', $data);
      $this->load->view('templates/navbar');
      $this->load->view('templates/menu');
      $this->load->view('admin/user', $data);
      $this->load->view('templates/footer');
   }

    public function tambahuser()
   {
      $nama_lengkap = $this->input->post('nama_lengkap');
      $nip = $this->input->post('nip');
      $password = $this->input->post('password');
      $level = $this->input->post('level');
      $data = [
      			'nip' => $nip,
      			'nama_lengkap' => $nama_lengkap,
      			'pass' => $password,
      			'level' => $level
      		];
     $this->Model_user->insert($data, 'tb_user');
     $this->session->set_flashdata('flash', 'Ditambah');
      redirect('admin/user');
   }

    public function hapususer($id)
   {
      $this->Model_user->delete($id);
      $this->session->set_flashdata('flash', 'DiHapus');
      redirect('admin/user');
   }

     public function edituser($user_id)
   {
      $data['title'] = 'Edit';
      $data['user'] = $this->Model_user->getuserById($user_id);
      $this->form_validation->set_rules('nama_lengkap', 'nama lengkap', 'required');
      $this->form_validation->set_rules('nip', 'nip', 'required');
      $this->form_validation->set_rules('password', 'password', 'required');
      $this->form_validation->set_rules('level', 'level', 'required');

      if ($this->form_validation->run() == false) {
         $this->load->view('templates/header', $data);
         $this->load->view('templates/navbar');
         $this->load->view('templates/menu');
         $this->load->view('admin/edit_user', $data);
         $this->load->view('templates/footer');
      } else {
         $this->Model_user->updateuser();
         $this->session->set_flashdata('flash', 'DiUbah');
         redirect('admin/user');
      }
   }

 }