<?php

class unit extends CI_Controller
{

   function __construct()
    {

      parent::__construct();
      $this->load->model('Model_unit');
      $this->load->model('Model_unitinduk');
 
    }

   public function index()
   {
      if (!$this->session->userdata('nip')) {
         redirect('auth/login');
      }else{
         $data = [
               'tittle' => 'unit'
            ];
         $data['unit'] = $this->Model_unit->getAllunit();
         $data['unitinduk'] = $this->Model_unitinduk->getAllunitinduk();
         $this->load->view('templates/header', $data);
         $this->load->view('templates/navbar', $data);
         $this->load->view('templates/menu', $data);
         $this->load->view('unit/unit', $data);
         $this->load->view('templates/footer');
      }
   }

   public function tambahunit()
   {
      $id_unit_induk = $this->input->post('id_unit_induk');
      $unit = $this->input->post('unit');

      $data = [
               'unit_induk' => $id_unit_induk,
               'nama_unit' => $unit
            ];

      $this->Model_unit->insert_unit($data, 'tb_unit');
      $this->session->set_flashdata('flash', 'Ditambah');
      redirect('unit/unit');
   }

   public function hapus_unit($id)
   {
      $this->Model_unit->delete_unit($id);
       $this->session->set_flashdata('flash', 'DiHapus');
      redirect('unit/unit');
   }

   public function edit_unit($id)
   {
      $data['tittle'] = 'Edit';
      $data['unit'] = $this->Model_unit->getunitById($id);
      $data['unitinduk'] = $this->Model_unitinduk->getAllunitinduk();
      $this->form_validation->set_rules('id_unit', 'id_unit', 'required');
      $this->form_validation->set_rules('nama_unit', 'nama_unit', 'required');
      if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/menu', $data);
            $this->load->view('unit/edit_unit', $data);
            $this->load->view('templates/footer');
      } else {
         $this->Model_unit->updateunit();
         $this->session->set_flashdata('flash', 'DiUbah');
         redirect('unit/unit');
      }
   }
   
}
