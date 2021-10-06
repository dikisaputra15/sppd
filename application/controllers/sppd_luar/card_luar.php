<?php

class card_luar extends CI_Controller
{

   function __construct()
    {

      parent::__construct();
      $this->load->model('Model_sppd_luar');
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
               'tittle' => 'sppd luar'
            ];
         $data['sppdluar'] = $this->Model_sppd_luar->getAllcardluar();
         $data['program'] = $this->Model_program->getAllprogram();
         $data['pekerjaan'] = $this->Model_pekerjaan->getAllpekerjaan();
         $data['biaya'] = $this->Model_biaya->getAllbiaya();
         $data['kegiatan'] = $this->Model_kegiatan->getAllkegiatanluar();
         $this->load->view('templates/header', $data);
         $this->load->view('templates/navbar', $data);
         $this->load->view('templates/menu', $data);
         $this->load->view('sppd_luar/card_luar', $data);
         $this->load->view('templates/footer');
      }
   }

   public function tambahsppdluar()
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

      $this->Model_sppd_luar->insert_sppd_luar($data, 'tb_sppd_luar_daerah');
      $this->session->set_flashdata('flash', 'Ditambah');
      redirect('sppd_luar/sppd_luar');
   }

   public function hapus_sppdluar($id)
   {
      $this->Model_sppd_luar->delete_sppdluar($id);
       $this->session->set_flashdata('flash', 'DiHapus');
      redirect('sppd_luar/sppd_luar');
   }

   public function edit_sppdluar($id)
   {
      $data['tittle'] = 'Edit';
      $data['sppdluar'] = $this->Model_sppd_luar->getsppdluarById($id);
      $data['program'] = $this->Model_program->getAllprogram();
      $data['kegiatan'] = $this->Model_kegiatan->getAllkegiatanluar();
      $data['pekerjaan'] = $this->Model_pekerjaan->getAllpekerjaan();
      $data['biaya'] = $this->Model_biaya->getAllbiaya();
      $this->form_validation->set_rules('id_sppd_luar', 'id_sppd_luar', 'required');
      if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/menu', $data);
            $this->load->view('sppd_luar/edit_sppdluar', $data);
            $this->load->view('templates/footer');
      } else {
         $this->Model_sppd_luar->updatesppdluar();
         $this->session->set_flashdata('flash', 'DiUbah');
         redirect('sppd_luar/sppd_luar');
      }
   }
   
}
