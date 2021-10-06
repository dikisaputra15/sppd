<?php

class pekerjaan_luar extends CI_Controller
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
               'tittle' => 'pekerjaan luar daerah'
            ];
         $data['pekerjaan'] = $this->Model_pekerjaan->getAllpekerjaanluar();
          $data['biaya'] = $this->Model_biaya->getAllbiayaluar();
         $this->load->view('templates/header', $data);
         $this->load->view('templates/navbar', $data);
         $this->load->view('templates/menu', $data);
         $this->load->view('pekerjaan/pekerjaan_luar', $data);
         $this->load->view('templates/footer');
      }
   }

   public function tambahpekerjaan()
   {
      $nama_pekerjaan_luar = $this->input->post('nama_pekerjaan_luar');
      $lokasi = $this->input->post('lokasi');

      $data = [
               'nama_pekerjaan_luar' => $nama_pekerjaan_luar,
               'id_biaya_luar' => $lokasi
            ];

      $this->Model_pekerjaan->insert_pekerjaan_luar($data, 'tb_pekerjaan_luar');
      $this->session->set_flashdata('flash', 'Ditambah');
      redirect('pekerjaan/pekerjaan_luar');
   }

   public function hapus_pekerjaan($id)
   {
      $this->Model_pekerjaan->delete_pekerjaan_luar($id);
       $this->session->set_flashdata('flash', 'DiHapus');
      redirect('pekerjaan/pekerjaan_luar');
   }

   public function edit_pekerjaan($id)
   {
      $data['tittle'] = 'Edit';
      $data['pekerjaan'] = $this->Model_pekerjaan->getpekerjaanluarById($id);
      $data['biaya'] = $this->Model_biaya->getAllbiayaluar();
      $this->form_validation->set_rules('id_pekerjaan_luar', 'id_pekerjaan_luar', 'required');
      $this->form_validation->set_rules('nama_pekerjaan_luar', 'nama_pekerjaan_luar', 'required');
      if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/menu', $data);
            $this->load->view('pekerjaan/edit_pekerjaan_luar', $data);
            $this->load->view('templates/footer');
      } else {
         $this->Model_pekerjaan->updatepekerjaanluar();
         $this->session->set_flashdata('flash', 'DiUbah');
         redirect('pekerjaan/pekerjaan_luar');
      }
   }
   
}
