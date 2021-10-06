<?php

class daya extends CI_Controller
{

   function __construct()
    {

      parent::__construct();
      $this->load->model('Model_daya');
      $this->load->model('Model_tarif');
 
    }

   public function index()
   {
      if (!$this->session->userdata('nip')) {
         redirect('auth/login');
      }else{
         $data = [
               'tittle' => 'Daya'
            ];
         $data['daya'] = $this->Model_daya->getAlldaya();
         $data['tarif'] = $this->Model_tarif->getAlltarif();
         $this->load->view('templates/header', $data);
         $this->load->view('templates/navbar', $data);
         $this->load->view('templates/menu', $data);
         $this->load->view('pekerjaan/daya', $data);
         $this->load->view('templates/footer');
      }
   }

   public function tambahdaya()
   {
      $id_tarif = $this->input->post('id_tarif');
      $daya = $this->input->post('daya');

      $data = [
               'id_tarif' => $id_tarif,
               'daya' => $daya
            ];

      $this->Model_daya->insert_daya($data, 'tb_daya');
      $this->session->set_flashdata('flash', 'Ditambah');
      redirect('pekerjaan/daya');
   }

   public function hapus_daya($id)
   {
      $this->Model_daya->delete_daya($id);
       $this->session->set_flashdata('flash', 'DiHapus');
      redirect('pekerjaan/daya');
   }

   public function edit_daya($id)
   {
      $data['tittle'] = 'Edit';
      $data['daya'] = $this->Model_daya->getdayaById($id);
      $data['tarif'] = $this->Model_tarif->getAlltarif();
      $this->form_validation->set_rules('id_daya', 'id_daya', 'required');
      $this->form_validation->set_rules('id_tarif', 'id_tarif', 'required');
      $this->form_validation->set_rules('daya', 'daya', 'required');
      if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/menu', $data);
            $this->load->view('pekerjaan/edit_daya', $data);
            $this->load->view('templates/footer');
      } else {
         $this->Model_daya->updatedaya();
         $this->session->set_flashdata('flash', 'DiUbah');
         redirect('pekerjaan/daya');
      }
   }
   
}
