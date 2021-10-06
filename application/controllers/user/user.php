<?php

class user extends CI_Controller
{

   function __construct()
    {

      parent::__construct();
      $this->load->model('Model_user');
      // $this->load->model('Model_role');
      // $this->load->model('Model_unit');
      // $this->load->model('Model_unitinduk');
      // $this->load->model('Model_unitlayanan');
 
    }

   public function index()
   {
      if (!$this->session->userdata('nip')) {
         redirect('auth/login');
      }else{
         $data = [
               'tittle' => 'user'
            ];
         $data['user'] = $this->Model_user->getAlluser();
         // $data['role'] = $this->Model_role->getAllrole();
         // $data['unit'] = $this->Model_unit->getAllunit();
         // $data['unitinduk'] = $this->Model_unitinduk->unit_induk();
         $this->load->view('templates/header', $data);
         $this->load->view('templates/navbar', $data);
         $this->load->view('templates/menu', $data);
         $this->load->view('user/user', $data);
         $this->load->view('templates/footer');
     } 
   }

   public function tambahuser()
   {
      $nip = $this->input->post('nip');
      $password = $this->input->post('password');
      $nama_lengkap = $this->input->post('nama_lengkap');
      $role_user = $this->input->post('role_user');

      $query = $this->db->query("SELECT * from tb_user where nip='$nip'");

      foreach ($query->result_array() as $row)
      {
         $nip_sudah_ada = $row['nip'];
      }

      if ($nip == $nip_sudah_ada) {
          echo '<script language="javascript">
              alert ("NIP Tidak Boleh Sama");
              window.location.href = "' . base_url() . 'user/user";
              </script>';
       }else{

         $data = [
                  'nip' => $nip,
                  'password' => $password,
                  'nama_lengkap' => $nama_lengkap,
                  'role_user' => $role_user
               ];

         $this->Model_user->insert_user($data, 'tb_user');
         $this->session->set_flashdata('flash', 'Ditambah');
         redirect('user/user');

      }
   }

   public function hapus_user($id)
   {
      $this->Model_user->delete_user($id);
       $this->session->set_flashdata('flash', 'DiHapus');
      redirect('user/user');
   }

   public function edit_user($id)
   {
      $data['tittle'] = 'Edit';
      $data['user'] = $this->Model_user->getuserById($id);
      // $data['role'] = $this->Model_role->getAllrole($id);
      // $data['unit'] = $this->Model_unit->getAllunit($id);
      // $data['unitinduk'] = $this->Model_unitinduk->unit_induk();
      // $data['unit'] = $this->Model_unit->getbyiduser($id);
      // $data['unitlayanan'] = $this->Model_unitlayanan->getbyid($id);
      $this->form_validation->set_rules('id_user', 'id_user', 'required');
      $this->form_validation->set_rules('nip', 'nip', 'required');
      if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/menu', $data);
            $this->load->view('user/edit_user', $data);
            $this->load->view('templates/footer');
      } else {
         $this->Model_user->updateuser();
         $this->session->set_flashdata('flash', 'DiUbah');
         redirect('user/user');
      }
   }
   
}
