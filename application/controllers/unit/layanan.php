<?php

class layanan extends CI_Controller
{

   function __construct()
    {

      parent::__construct();
      $this->load->model('Model_unitlayanan');
      $this->load->model('Model_unitinduk');
      $this->load->model('Model_unit');
 
    }

   public function index()
   {
      if (!$this->session->userdata('nip')) {
         redirect('auth/login');
      }else{
        $data = [
              'tittle' => 'unit layanan'
           ];
        $data['layanan'] = $this->Model_unitlayanan->getAllunitlayanan();
        $data['unitinduk'] = $this->Model_unitinduk->unit_induk();
        $data['unit'] = $this->Model_unit->getAllunit();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/menu', $data);
        $this->load->view('unit/unitlayanan', $data);
        $this->load->view('templates/footer');
      }
   }

 function fetch_unit()
 {
  if($this->input->post('id_unit_induk'))
  {
    echo $this->Model_unitlayanan->fetch_unit($this->input->post('id_unit_induk'));
  }
 }

 function fetch_layanan()
 {
  if($this->input->post('id_unit'))
  {
   echo $this->Model_unitlayanan->fetch_layanan($this->input->post('id_unit'));
  }
 }

   function pelaksana(){
        $id = $this->input->post('id',TRUE);
        $data = $this->Model_unit->pelaksana($id)->result();
        echo json_encode($data);
    }

   public function tambahlayanan()
   {
      $unit_induk = $this->input->post('unit_induk');
      $unit = $this->input->post('unit');
      $unit_layanan = $this->input->post('unit_layanan');

      $data = [
               'unit_induk' => $unit_induk,
               'unit' => $unit,
               'unit_layanan' => $unit_layanan,
            ];

      $this->Model_unitlayanan->insert_unitlayanan($data, 'tb_unit_layanan');
      $this->session->set_flashdata('flash', 'Ditambah');
      redirect('unit/layanan');
   }

   public function hapus_unitlayanan($id)
   {
      $this->Model_unitlayanan->delete_unitlayanan($id);
       $this->session->set_flashdata('flash', 'DiHapus');
      redirect('unit/layanan');
   }

   public function edit_unitlayanan($id)
   {

         $data['tittle'] = 'Edit';
         $data['unitlayanan'] = $this->Model_unitlayanan->getlayananbyid($id);
         $data['unitinduk'] = $this->Model_unitinduk->unit_induk();
         $data['unit'] = $this->Model_unit->getbyid($id);
         $this->form_validation->set_rules('id_unit_layanan', 'id_unit_layanan', 'required');
         if ($this->form_validation->run() == false) {
               $this->load->view('templates/header', $data);
               $this->load->view('templates/navbar', $data);
               $this->load->view('templates/menu', $data);
               $this->load->view('unit/edit_unitlayanan', $data);
               $this->load->view('templates/footer');
         } else {
            $this->Model_unitlayanan->updateunitlayanan();
            $this->session->set_flashdata('flash', 'DiUbah');
            redirect('unit/layanan');
         }
     
   }
   
}
