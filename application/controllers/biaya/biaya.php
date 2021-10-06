<?php

class biaya extends CI_Controller
{

   function __construct()
    {

      parent::__construct();
      $this->load->model('Model_biaya');
 
    }

   public function index()
   {
      if (!$this->session->userdata('nip')) {
         redirect('auth/login');
      }else{
         $data = [
               'tittle' => 'biaya'
            ];
         $data['biaya'] = $this->Model_biaya->getAllbiaya();
         // $data['program'] = $this->Model_program->getAllprogram();
         $this->load->view('templates/header', $data);
         $this->load->view('templates/navbar', $data);
         $this->load->view('templates/menu', $data);
         $this->load->view('biaya/biaya', $data);
         $this->load->view('templates/footer');
      }
   }

   public function tambahbiaya()
   {
      $jarak = $this->input->post('jarak');
      $lokasi = $this->input->post('lokasi');
      $gol1 = $this->input->post('gol1');
      $gol2 = $this->input->post('gol2');
      $gol3s = $this->input->post('gol3s');
      $gol3k = $this->input->post('gol3k');
      $gol4 = $this->input->post('gol4');

      $data = [
               'jarak' => $jarak,
               'lokasi' => $lokasi,
               'uang_gol1' => $gol1,
               'uang_gol2' => $gol2,
               'uang_gol3s' => $gol3s,
               'uang_gol3k' => $gol3k,
               'uang_gol4' => $gol4
            ];

      $this->Model_biaya->insert_biaya($data, 'tb_biaya');
      $this->session->set_flashdata('flash', 'Ditambah');
      redirect('biaya/biaya');
   }

   public function hapus_biaya($id)
   {
      $this->Model_biaya->delete_biaya($id);
       $this->session->set_flashdata('flash', 'DiHapus');
      redirect('biaya/biaya');
   }

   public function edit_biaya($id)
   {
      $data['tittle'] = 'Edit';
      $data['biaya'] = $this->Model_biaya->getbiayaById($id);
      $this->form_validation->set_rules('id_biaya', 'id_biaya', 'required');
      if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/menu', $data);
            $this->load->view('biaya/edit_biaya', $data);
            $this->load->view('templates/footer');
      } else {
         $this->Model_biaya->updatebiaya();
         $this->session->set_flashdata('flash', 'DiUbah');
         redirect('biaya/biaya');
      }
   }
   
}
