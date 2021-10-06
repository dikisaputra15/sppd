<?php

class pegawai extends CI_Controller
{

   function __construct()
    {

      parent::__construct();
      $this->load->model('Model_pegawai');
 
    }

   public function index()
   {
      if (!$this->session->userdata('nip')) {
         redirect('auth/login');
      }else{
         $data = [
               'tittle' => 'Pegawai'
            ];
         $data['pegawai'] = $this->Model_pegawai->getAllpegawai();
         $this->load->view('templates/header', $data);
         $this->load->view('templates/navbar', $data);
         $this->load->view('templates/menu', $data);
         $this->load->view('pegawai/pegawai', $data);
         $this->load->view('templates/footer');
      }
   }

   public function tambahpegawai()
   {
      $nip = $this->input->post('nip');
      $nama = $this->input->post('nama');
      $jabatan = $this->input->post('jabatan');
      $pangkat = $this->input->post('pangkat');
      $gambar = $_FILES['gambar']['name'];

      if ($gambar) {
         $config['allowed_types'] = 'jpg|jpeg|png|gif|JPEG';
         $config['upload_path'] = './assets/img/';
         $config['remove_spaces'] = FALSE;

         $this->load->library('upload', $config);

         if ($this->upload->do_upload('gambar')) {
         } else {
            echo $this->upload->display_errors();
         }
      }

      $data = [
         'nip' => $nip,
         'nama' => $nama,
         'jabatan' => $jabatan,
         'pangkat' => $pangkat,
         'gambar' => $gambar
      ];

       $query = $this->db->query("SELECT * from tb_pegawai where nip='$nip'");

      foreach ($query->result_array() as $row)
      {
         $nip_sudah_ada = $row['nip'];
      }

       if ($nip == $nip_sudah_ada) {
          echo '<script language="javascript">
              alert ("NIP Tidak Boleh Sama");
              window.location.href = "' . base_url() . 'pegawai/pegawai";
              </script>';
       }else{

         $this->Model_pegawai->insertpegawai($data, 'tb_pegawai');
         $this->session->set_flashdata('flash', 'Ditambah');
         redirect('pegawai/pegawai');
      }
   }

   public function hapus_pegawai($id)
   {
      $this->Model_pegawai->delete_pegawai($id);
       $this->session->set_flashdata('flash', 'DiHapus');
      redirect('pegawai/pegawai');
   }

   public function edit_pegawai($id)
   {
      $data['tittle'] = 'Edit';
      $data['pegawai'] = $this->Model_pegawai->getpegawaiById($id);
      $this->form_validation->set_rules('nip', 'nip', 'required');
      if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/menu', $data);
            $this->load->view('pegawai/edit_pegawai', $data);
            $this->load->view('templates/footer');
      } else {
         $nip = $this->input->post('nip');
         $nama = $this->input->post('nama');
         $jabatan = $this->input->post('jabatan');
         $pangkat = $this->input->post('pangkat');

         $gambar = $_FILES['gambar']['name'];

         if ($gambar) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['upload_path'] = './assets/img/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {
               $old_image = $data['pegawai']['gambar'];
               if ($old_image != 'barang.jpg') {
                  unlink(FCPATH . 'assets/img/' . $old_image);
               }
               $new_image = $this->upload->data('file_name');
               $this->db->set('gambar', $new_image);
            } else {
               echo $this->upload->dispay_errors();
            }
         }
         $this->db->set([
            'nama' => $nama,
            'jabatan' => $jabatan,
            'pangkat' => $pangkat
         ]);
         $this->db->where('nip', $nip);
         $this->db->update('tb_pegawai');
         $this->session->set_flashdata('flash', 'DiUbah');
         redirect('pegawai/pegawai');
      }
   }
   
}
