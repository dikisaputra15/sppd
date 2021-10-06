<?php

class unitinduk extends CI_Controller
{

   function __construct()
    {

      parent::__construct();
      $this->load->model('Model_unitinduk');
 
    }

   public function index()
   {
      if (!$this->session->userdata('nip')) {
         redirect('auth/login');
      }else{
         $data = [
               'tittle' => 'unit induk'
            ];
         $data['unitinduk'] = $this->Model_unitinduk->getAllunitinduk();
         $this->load->view('templates/header', $data);
         $this->load->view('templates/navbar', $data);
         $this->load->view('templates/menu', $data);
         $this->load->view('unit/unitinduk', $data);
         $this->load->view('templates/footer');
      }
   }

   public function tambahunitinduk()
   {
      $unit_induk = $this->input->post('unit_induk');

      $data = [
               'nama_unit_induk' => $unit_induk
            ];

      $this->Model_unitinduk->insert_unitinduk($data, 'tb_unit_induk');
      $this->session->set_flashdata('flash', 'Ditambah');
      redirect('unit/unitinduk');
   }

   public function hapus_unitinduk($id)
   {
      $this->Model_unitinduk->delete_unitinduk($id);
       $this->session->set_flashdata('flash', 'DiHapus');
      redirect('unit/unitinduk');
   }

   public function edit_unitinduk($id)
   {
      $data['tittle'] = 'Edit';
      $data['unitinduk'] = $this->Model_unitinduk->getunitindukById($id);
      $this->form_validation->set_rules('id_unit_induk', 'id_unit_induk', 'required');
      $this->form_validation->set_rules('nama_unit_induk', 'nama_unit_induk', 'required');
      if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/menu', $data);
            $this->load->view('unit/edit_unitinduk', $data);
            $this->load->view('templates/footer');
      } else {
         $this->Model_unitinduk->updateunitinduk();
         $this->session->set_flashdata('flash', 'DiUbah');
         redirect('unit/unitinduk');
      }
   }
   
}
