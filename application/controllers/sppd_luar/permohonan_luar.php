<?php

class permohonan_luar extends CI_Controller
{

   function __construct()
    {

      parent::__construct();
      $this->load->model('Model_sppd_luar');
      $this->load->model('Model_pegawai');
      // $this->load->model('Model_pekerjaan');
      $this->load->model('Model_biaya');
      // $this->load->model('Model_kegiatan');
 
    }

   public function index()
   {
      if (!$this->session->userdata('nip')) {
         redirect('auth/login');
      }else{
         $data = [
               'tittle' => 'sppd luar'
            ];
         $data['permohonan'] = $this->Model_sppd_luar->getAllmohonluar();
         $data['pegawai'] = $this->Model_pegawai->getAllpegawai();
         // $data['pekerjaan'] = $this->Model_pekerjaan->getAllpekerjaan();
         $data['biaya'] = $this->Model_biaya->getAllbiayaluar();
         $data['kegiatan'] = $this->Model_sppd_luar->getkegiatan();
         $this->load->view('templates/header', $data);
         $this->load->view('templates/navbar', $data);
         $this->load->view('templates/menu', $data);
         $this->load->view('sppd_luar/permohonan_luar', $data);
         $this->load->view('templates/footer');
      }
   }

   public function tambahformluar()
   {
      $kegiatan = $this->input->post('kegiatan');
      $tujuan = $this->input->post('tujuan');
      $tgl_berangkat = $this->input->post('tgl_berangkat');
      $tgl_kembali = $this->input->post('tgl_kembali');
      $tertanda = $this->input->post('tertanda');
      $status = "sppd sedang dibuatkan";

       $pegawai = $this->input->post('pegawai');

      $data = [
               'id_sppd_luar' => $kegiatan,
               'tujuan_p_dinas' => $tujuan,
               'tgl_berangkat' => $tgl_berangkat,
               'tgl_kembali' => $tgl_kembali,
               'tertanda' => $tertanda,
               'status' => $status
            ];

      $this->db->insert('tb_permohonan_luar', $data);
      $id = $this->db->insert_id();

      foreach ($pegawai as $obj) {
         $data2 = [
               'id_permohonan_luar' => $id,
               'nip' => $obj
            ];
         $this->db->insert('tb_detail_permohonan_luar', $data2);
      }

      $this->session->set_flashdata('flash', 'Ditambah');
      redirect('sppd_luar/permohonan_luar');
   }

   public function hapus_sppddalam($id)
   {
      $this->Model_sppd_dalam->delete_sppddalam($id);
       $this->session->set_flashdata('flash', 'DiHapus');
      redirect('sppd_dalam/sppd_dalam');
   }

   public function hapus_permohonanluar($id)
   {
      $this->Model_sppd_luar->delete_permohonanluar($id);
       $this->session->set_flashdata('flash', 'DiHapus');
      redirect('sppd_luar/permohonan_luar');
   }


   public function view_permohonanluar($id)
   {
      if (!$this->session->userdata('nip')) {
         redirect('auth/login');
      }else{
         $data = [
               'tittle' => 'view permohonan dalam'
            ];
         $data['viewluar'] = $this->Model_sppd_luar->getviewmohonluar($id);
         $data['viewnama'] = $this->Model_sppd_luar->getviewnamaluar($id);
         $data['lokasi'] = $this->Model_sppd_luar->getlokasiluar($id);
        
         $this->load->view('templates/header', $data);
         $this->load->view('templates/navbar', $data);
         $this->load->view('templates/menu', $data);
         $this->load->view('sppd_luar/viewluar', $data);
         $this->load->view('templates/footer');
      }
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

   public function updatestatus($id)
   {
      $this->Model_sppd_luar->updatestatus($id);

      $this->db->where('id_permohonan_luar', $id);
      $query = $this->db->get('tb_permohonan_luar');

      foreach($query->result() as $row)
      {
         $id_sppd_luar = $row->id_sppd_luar;
      }


      $this->db->where('id_sppd_luar', $id_sppd_luar);
      $quer = $this->db->get('tb_sppd_luar_daerah');

      foreach($quer->result() as $ro)
      {
         $no_kegiatan = $ro->no_kegiatan;
      }

      redirect('sppd_luar/sppd_luar/list/' . $no_kegiatan);
   }
   
}
