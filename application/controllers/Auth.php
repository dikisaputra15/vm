<?php

class Auth extends CI_Controller
{
   public function index()
   {
       if (!$this->session->userdata('nip')) {
         
         $data = [
            'title' => 'Login vm konstruksi'
         ];
         $this->load->view('login_templates/header', $data);
         $this->load->view('auth/login', $data);
         $this->load->view('login_templates/footer');
      }else{
         redirect('admin/home');
      }
   }

   public function login()
   {
      $nip = $this->input->post('nip');
      $pass = $this->input->post('pass');

      $user = $this->db->get_where('tb_user', ['nip' => $nip])->row_array();
      
       if ($user) {
         if ($user['pass'] == $pass) {
            $data = [
               'nip' => $user['nip'],
               'pass' => $user['pass'],
               'level' => $user['level']
            ];
            $this->session->set_userdata($data);
             $this->session->set_flashdata('flash', 'Login Berhasil');
            redirect('dashboard');
         } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah!</div>');
            redirect('auth');
         }
      } else {
         $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Login gagal, periksa kemali username/password</div>');
         redirect('auth');
      }      
   }

   public function logout()
   {
      $this->session->unset_userdata('nip');
      $this->session->unset_userdata('level');
      $this->session->unset_userdata('pass');

      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
      redirect('auth');
   }
}
