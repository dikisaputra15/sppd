<?php

class role extends CI_Controller
{

   function __construct()
    {

      parent::__construct();
      $this->load->model('Model_role');
 
    }

   public function index()
   {
      if (!$this->session->userdata('nip')) {
         redirect('auth/login');
      }else{
         $data = [
               'tittle' => 'role'
            ];
         $data['role'] = $this->Model_role->getAllrole();
         $this->load->view('templates/header', $data);
         $this->load->view('templates/navbar', $data);
         $this->load->view('templates/menu', $data);
         $this->load->view('user/role', $data);
         $this->load->view('templates/footer');
      }
   }

   public function tambahrole()
   {
      $role = $this->input->post('role');

      $data = [
               'role' => $role
            ];

      $this->Model_role->insert_role($data, 'tb_role');
      $this->session->set_flashdata('flash', 'Ditambah');
      redirect('user/role');
   }

   public function hapus_role($id)
   {
      $this->Model_role->delete_role($id);
       $this->session->set_flashdata('flash', 'DiHapus');
      redirect('user/role');
   }

   public function edit_role($id)
   {
      $data['tittle'] = 'Edit';
      $data['role'] = $this->Model_role->getroleById($id);
      $this->form_validation->set_rules('id_role', 'id_role', 'required');
      $this->form_validation->set_rules('role', 'role', 'required');
      if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/menu', $data);
            $this->load->view('user/edit_role', $data);
            $this->load->view('templates/footer');
      } else {
         $this->Model_role->updaterole();
         $this->session->set_flashdata('flash', 'DiUbah');
         redirect('user/role');
      }
   }
   
}
