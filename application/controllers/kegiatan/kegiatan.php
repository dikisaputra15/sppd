<?php

class kegiatan extends CI_Controller
{

   function __construct()
    {

      parent::__construct();
      $this->load->model('Model_kegiatan');
      $this->load->model('Model_program');
 
    }

   public function index()
   {
      if (!$this->session->userdata('nip')) {
         redirect('auth/login');
      }else{
         $data = [
               'tittle' => 'kegiatan'
            ];
         $data['kegiatan'] = $this->Model_kegiatan->getAllkegiatan();
         // $data['program'] = $this->Model_program->getAllprogram();
         $this->load->view('templates/header', $data);
         $this->load->view('templates/navbar', $data);
         $this->load->view('templates/menu', $data);
         $this->load->view('kegiatan/kegiatan', $data);
         $this->load->view('templates/footer');
      }
   }

   public function tambahkegiatan()
   {
      $no_kegiatan = $this->input->post('no_kegiatan');
      $nama_kegiatan = $this->input->post('nama_kegiatan');
      $pptk = $this->input->post('pptk');
      $koring_kegiatan = $this->input->post('koring_kegiatan');
      $pagu_anggaran = $this->input->post('pagu_anggaran');


      $query = $this->db->query("SELECT * from tb_kegiatan where koring_k='$koring_kegiatan'");

      foreach ($query->result_array() as $row)
      {
         $koring_sudah_ada = $row['koring_k'];
      }

      if ($koring_kegiatan == $koring_sudah_ada) {
          echo '<script language="javascript">
              alert ("Koring Kegiatan Tidak Boleh Sama");
              window.location.href = "' . base_url() . 'kegiatan/kegiatan";
              </script>';
       }else{

         $data = [
                  'no_kegiatan' => $no_kegiatan,
                  'nama_kegiatan' => $nama_kegiatan,
                  'pptk' => $pptk,
                  'koring_k' => $koring_kegiatan,
                  'pagu_anggaran' => $pagu_anggaran
               ];

         $this->Model_kegiatan->insert_kegiatan($data, 'tb_kegiatan');
         $this->session->set_flashdata('flash', 'Ditambah');
         redirect('kegiatan/kegiatan');

       }
   }

   public function hapus_kegiatan($id)
   {
      $this->Model_kegiatan->delete_kegiatan($id);
       $this->session->set_flashdata('flash', 'DiHapus');
      redirect('kegiatan/kegiatan');
   }

   public function edit_kegiatan($id)
   {
      $data['tittle'] = 'Edit';
      $data['kegiatan'] = $this->Model_kegiatan->getkegiatanById($id);
      $data['program'] = $this->Model_program->getAllprogram();
      $this->form_validation->set_rules('no_kegiatan', 'no_kegiatan', 'required');
      if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/menu', $data);
            $this->load->view('kegiatan/edit_kegiatan', $data);
            $this->load->view('templates/footer');
      } else {
         $this->Model_kegiatan->updatekegiatan();
         $this->session->set_flashdata('flash', 'DiUbah');
         redirect('kegiatan/kegiatan');
      }
   }
   
}
