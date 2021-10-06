<?php

class laporan extends CI_Controller
{

   function __construct()
    {

      parent::__construct();
      $this->load->model('Model_unit');
      $this->load->model('Model_unitinduk');
      $this->load->model('Model_unitlayanan');
      $this->load->model('Model_penyulang');
      $this->load->model('Model_segmen');
      $this->load->model('Model_gardu');
      $this->load->model('Model_pekerjaan');
      $this->load->model('Model_monitoring');
      $this->load->model('Model_tarif');
 
    }

   public function index()
   {
      if (!$this->session->userdata('nip')) {
         redirect('auth/login');
      }else{
         $data = [
               'tittle' => 'laporan monitoring'
            ];
         $data['monitoring'] = $this->Model_monitoring->getAllmonitoring();
         $this->load->view('templates/header', $data);
         $this->load->view('templates/navbar', $data);
         $this->load->view('templates/menu', $data);
         $this->load->view('monitoring/laporan', $data);
         $this->load->view('templates/footer');
      }
   }

   public function tambahkontribusi()
   {
      $nama = $this->input->post('nama');

      $data = [
               'nama' => $nama
            ];

      $this->Model_kontribusi->insert_kontribusi($data, 'tb_jenis_kontribusi');
      $this->session->set_flashdata('flash', 'Ditambah');
      redirect('kontribusi/kontribusi');
   }

   public function hapus_laporan($id)
   {
      $this->Model_monitoring->delete_monitoring($id);
       $this->session->set_flashdata('flash', 'DiHapus');
      redirect('monitoring/monitoring');
   }

   public function edit_laporan($id)
   {
      $data['tittle'] = 'Edit';
      $data['unit'] = $this->Model_unit->getbyidlaporan($id);
      $data['unitinduk'] = $this->Model_unitinduk->unit_induk();
      $data['unitlayanan'] = $this->Model_unitlayanan->getbyidlaporan($id);
      $data['penyulang'] = $this->Model_penyulang->getAllpenyulang();
      $data['segmen'] = $this->Model_segmen->getAllsegmen();
      $data['gardu'] = $this->Model_gardu->getAllgardu();
      $data['pekerjaan'] = $this->Model_pekerjaan->getAllpekerjaan();
      $data['monitoring'] = $this->Model_monitoring->getmonitoringbyid($id);

      $this->form_validation->set_rules('id_utama', 'id_utama', 'required');
      $this->form_validation->set_rules('nama_pekerjaan', 'nama_pekerjaan', 'required');
      if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/menu', $data);
            $this->load->view('monitoring/edit_laporan', $data);
            $this->load->view('templates/footer');
      } else {
         $this->Model_monitoring->updatemonitoring();
         $this->session->set_flashdata('flash', 'DiUbah');
         redirect('monitoring/monitoring');
      }
   }

   public function status($id)
   {
      $this->Model_monitoring->update_status($id);
      $this->session->set_flashdata('flash', 'DiUbah');
      redirect('monitoring/monitoring');
   }

   function fetch_daya()
   {
      $id = $this->input->post('id',TRUE);
      $data = $this->Model_tarif->fetch_daya($id)->result();
      echo json_encode($data);

   }
   
}
