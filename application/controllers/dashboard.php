<?php

class dashboard extends CI_Controller
{
   function __construct()
    {

      parent::__construct();
      $this->load->model('Model_sppd_dalam');
      $this->load->model('Model_sppd_luar');
      // $this->load->model('Model_penyulang');
      // $this->load->model('Model_segmen');
      // $this->load->model('Model_gardu');
      // $this->load->model('Model_pekerjaan');
      // $this->load->model('Model_monitoring');

    }

   public function index()
   {
      if (!$this->session->userdata('nip')) {
         redirect('Auth/login');
      }else{
         $data = [
               'tittle' => 'dashboard'
            ];
             $data['grafikdalam'] = $this->Model_sppd_dalam->getallgrafikdalam();
             $data['grafikluar'] = $this->Model_sppd_luar->getallgrafikluar();
             $data['jmlmasukdalam'] = $this->Model_sppd_dalam->jmlmasukdalam();
             $data['jmlmasukluar'] = $this->Model_sppd_luar->jmlmasukluar();
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/menu', $data);
            $this->load->view('dashboard', $data);
            $this->load->view('templates/footer');
         }
   }
      
}

   