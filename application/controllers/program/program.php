<?php

class program extends CI_Controller
{

   function __construct()
    {

      parent::__construct();
      $this->load->model('Model_program');
 
    }

   public function index()
   {
      if (!$this->session->userdata('nip')) {
         redirect('auth/login');
      }else{
         $data = [
               'tittle' => 'Program'
            ];
         $data['program'] = $this->Model_program->getAllprogram();
         $this->load->view('templates/header', $data);
         $this->load->view('templates/navbar', $data);
         $this->load->view('templates/menu', $data);
         $this->load->view('program/program', $data);
         $this->load->view('templates/footer');
      }
   }

   public function tambahprogram()
   {
      $nama_program = $this->input->post('nama_program');

      $query = $this->db->query("SELECT * from tb_program where nama_program='$nama_program'");

      foreach ($query->result_array() as $row)
      {
         $nama_sudah_ada = $row['nama_program'];
      }

       if ($nama_program == $nama_sudah_ada) {
          echo '<script language="javascript">
              alert ("Nama Program Tidak Boleh Sama");
              window.location.href = "' . base_url() . 'program/program";
              </script>';
       }else{

         $data = [
                  'nama_program' => $nama_program
               ];

         $this->Model_program->insert_program($data, 'tb_program');
         $this->session->set_flashdata('flash', 'Ditambah');
         redirect('program/program');

      }
   }

   public function hapus_program($id)
   {
      $this->Model_program->delete_program($id);
       $this->session->set_flashdata('flash', 'DiHapus');
      redirect('program/program');
   }

   public function edit_program($id)
   {
      $data['tittle'] = 'Edit';
      $data['program'] = $this->Model_program->getprogramById($id);
      $this->form_validation->set_rules('kode_program', 'kode_program', 'required');
      $this->form_validation->set_rules('nama_program', 'nama_program', 'required');
      if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/menu', $data);
            $this->load->view('program/edit_program', $data);
            $this->load->view('templates/footer');
      } else {
         $this->Model_program->updateprogram();
         $this->session->set_flashdata('flash', 'DiUbah');
         redirect('program/program');
      }
   }
   
}
