<?php

class card_dalam extends CI_Controller
{

   function __construct()
    {

      parent::__construct();
      $this->load->model('Model_sppd_dalam');
      $this->load->model('Model_program');
      $this->load->model('Model_pekerjaan');
      $this->load->model('Model_biaya');
      $this->load->model('Model_kegiatan');
 
    }

   public function index()
   {
      if (!$this->session->userdata('nip')) {
         redirect('auth/login');
      }else{
         $data = [
               'tittle' => 'sppd dalam'
            ];
         $data['sppddalam'] = $this->Model_sppd_dalam->getAllcarddalam();
         $data['program'] = $this->Model_program->getAllprogram();
         $data['pekerjaan'] = $this->Model_pekerjaan->getAllpekerjaan();
         $data['biaya'] = $this->Model_biaya->getAllbiaya();
         $data['kegiatan'] = $this->Model_kegiatan->getAllkegiatan();
         $this->load->view('templates/header', $data);
         $this->load->view('templates/navbar', $data);
         $this->load->view('templates/menu', $data);
         $this->load->view('sppd_dalam/card_dalam', $data);
         $this->load->view('templates/footer');
      }
   }

   public function tambahsppddalam()
   {
      $program = $this->input->post('program');
      $kegiatan = $this->input->post('kegiatan');
      $pekerjaan = $this->input->post('pekerjaan');
      $lokasi = $this->input->post('lokasi');
      $pagu_anggaran = $this->input->post('pagu_anggaran');

      $data = [
               'no_kegiatan' => $kegiatan,
               'id_pekerjaan' => $pekerjaan,
               'id_biaya' => $lokasi,
               'kode_program' => $program,
               'pagu_anggaran' => $pagu_anggaran
            ];

      $this->Model_sppd_dalam->insert_sppd_dalam($data, 'tb_sppd_dalam_daerah');
      $this->session->set_flashdata('flash', 'Ditambah');
      redirect('sppd_dalam/sppd_dalam');
   }

   public function hapus_sppddalam($id)
   {
      $this->Model_sppd_dalam->delete_sppddalam($id);
       $this->session->set_flashdata('flash', 'DiHapus');
      redirect('sppd_dalam/sppd_dalam');
   }

   public function edit_sppddalam($id)
   {
      $data['tittle'] = 'Edit';
      $data['sppddalam'] = $this->Model_sppd_dalam->getsppddalamById($id);
      $data['program'] = $this->Model_program->getAllprogram();
      $data['kegiatan'] = $this->Model_kegiatan->getAllkegiatan();
      $data['pekerjaan'] = $this->Model_pekerjaan->getAllpekerjaan();
      $data['biaya'] = $this->Model_biaya->getAllbiaya();
      $this->form_validation->set_rules('id_sppd_dalam', 'id_sppd_dalam', 'required');
      if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/menu', $data);
            $this->load->view('sppd_dalam/edit_sppddalam', $data);
            $this->load->view('templates/footer');
      } else {
         $this->Model_sppd_dalam->updatesppddalam();
         $this->session->set_flashdata('flash', 'DiUbah');
         redirect('sppd_dalam/sppd_dalam');
      }
   }
   
}
