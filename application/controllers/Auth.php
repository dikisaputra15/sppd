<?php

class Auth extends CI_Controller
{
   public function index()
   {
       if (!$this->session->userdata('nip')) {
         
         $data = [
            'title' => 'Login'
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
      $password = $this->input->post('password');

      $user = $this->db->get_where('tb_user', ['nip' => $nip])->row_array();
      
       if ($user) {
         if ($user['password'] == $password) {
            $data = [
               'id_user' => $user['id_user'],
               'nip' => $user['nip'],
               'password' => $user['password'],
               'role_user' => $user['role_user'],
               'nama_lengkap' => $user['nama_lengkap']
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
      $this->session->unset_userdata('role');
      $this->session->unset_userdata('password');

      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
      redirect('auth');
   }
}
