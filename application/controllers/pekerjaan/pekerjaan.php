<?php

class pekerjaan extends CI_Controller
{

   function __construct()
    {

      parent::__construct();
      $this->load->model('Model_pekerjaan');
      $this->load->model('Model_biaya');
 
    }

   public function index()
   {
      if (!$this->session->userdata('nip')) {
         redirect('auth/login');
      }else{
         $data = [
               'tittle' => 'jenis pekerjaan'
            ];
         $data['pekerjaan'] = $this->Model_pekerjaan->getAllpekerjaan();
          $data['biaya'] = $this->Model_biaya->getAllbiaya();
         $this->load->view('templates/header', $data);
         $this->load->view('templates/navbar', $data);
         $this->load->view('templates/menu', $data);
         $this->load->view('pekerjaan/pekerjaan', $data);
         $this->load->view('templates/footer');
      }
   }

   public function tambahpekerjaan()
   {
      $nama_pekerjaan = $this->input->post('nama_pekerjaan');
      $lokasi = $this->input->post('lokasi');

      $data = [
               'nama_pekerjaan' => $nama_pekerjaan,
               'id_biaya' => $lokasi
            ];

      $this->Model_pekerjaan->insert_pekerjaan($data, 'tb_pekerjaan');
      $this->session->set_flashdata('flash', 'Ditambah');
      redirect('pekerjaan/pekerjaan');
   }

   public function hapus_pekerjaan($id)
   {
      $this->Model_pekerjaan->delete_pekerjaan($id);
       $this->session->set_flashdata('flash', 'DiHapus');
      redirect('pekerjaan/pekerjaan');
   }

   public function edit_pekerjaan($id)
   {
      $data['tittle'] = 'Edit';
      $data['pekerjaan'] = $this->Model_pekerjaan->getpekerjaanById($id);
      $data['biaya'] = $this->Model_biaya->getAllbiaya();
      $this->form_validation->set_rules('id_pekerjaan', 'id_pekerjaan', 'required');
      $this->form_validation->set_rules('nama_pekerjaan', 'nama_pekerjaan', 'required');
      if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/menu', $data);
            $this->load->view('pekerjaan/edit_pekerjaan', $data);
            $this->load->view('templates/footer');
      } else {
         $this->Model_pekerjaan->updatepekerjaan();
         $this->session->set_flashdata('flash', 'DiUbah');
         redirect('pekerjaan/pekerjaan');
      }
   }
   
}
