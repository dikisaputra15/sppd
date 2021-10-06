<?php

class permohonan_dalam extends CI_Controller
{

   function __construct()
    {

      parent::__construct();
      $this->load->model('Model_sppd_dalam');
      $this->load->model('Model_pegawai');
      // $this->load->model('Model_pekerjaan');
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
         $data['permohonan'] = $this->Model_sppd_dalam->getAllmohondalam();
         $data['pegawai'] = $this->Model_pegawai->getAllpegawai();
         // $data['pekerjaan'] = $this->Model_pekerjaan->getAllpekerjaan();
         $data['kegiatan'] = $this->Model_sppd_dalam->getkegiatan();
         // $data['kegiatan'] = $this->Model_kegiatan->getAllkegiatan();
         $this->load->view('templates/header', $data);
         $this->load->view('templates/navbar', $data);
         $this->load->view('templates/menu', $data);
         $this->load->view('sppd_dalam/permohonan_dalam', $data);
         $this->load->view('templates/footer');
      }
   }

   public function tambahformdalam()
   {
      $kegiatan = $this->input->post('kegiatan');
      $tujuan = $this->input->post('tujuan');
      $tgl_berangkat = $this->input->post('tgl_berangkat');
      $tgl_kembali = $this->input->post('tgl_kembali');
      $tertanda = $this->input->post('tertanda');
      $status = "sppd sedang dibuatkan";

       $pegawai = $this->input->post('pegawai');


      $data = [
               'id_sppd_dalam' => $kegiatan,
               'tujuan_p_dinas' => $tujuan,
               'tgl_berangkat' => $tgl_berangkat,
               'tgl_kembali' => $tgl_kembali,
               'tertanda' => $tertanda,
               'status' => $status
            ];

      $this->db->insert('tb_permohonan_dalam', $data);
      $id = $this->db->insert_id();

      foreach ($pegawai as $obj) {
         $data2 = [
               'id_permohonan_dalam' => $id,
               'nip' => $obj
            ];
         $this->db->insert('tb_detail_permohonan_dalam', $data2);
      }

      $this->session->set_flashdata('flash', 'Ditambah');
      redirect('sppd_dalam/permohonan_dalam');
   }

   public function hapus_sppddalam($id)
   {
      $this->Model_sppd_dalam->delete_sppddalam($id);
       $this->session->set_flashdata('flash', 'DiHapus');
      redirect('sppd_dalam/sppd_dalam');
   }

   public function hapus_permohonandalam($id)
   {
      $this->Model_sppd_dalam->delete_permohonandalam($id);
       $this->session->set_flashdata('flash', 'DiHapus');
      redirect('sppd_dalam/permohonan_dalam');
   }

    public function view_permohonandalam($id)
   {
      if (!$this->session->userdata('nip')) {
         redirect('auth/login');
      }else{
         $data = [
               'tittle' => 'view permohonan dalam'
            ];
         $data['viewdalam'] = $this->Model_sppd_dalam->getviewmohondalam($id);
         $data['viewnama'] = $this->Model_sppd_dalam->getviewnamadalam($id);
         $data['lokasi'] = $this->Model_sppd_dalam->getlokasidalam($id);
        
         $this->load->view('templates/header', $data);
         $this->load->view('templates/navbar', $data);
         $this->load->view('templates/menu', $data);
         $this->load->view('sppd_dalam/viewdalam', $data);
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
      $this->Model_sppd_dalam->updatestatus($id);

      $this->db->where('id_permohonan_dalam', $id);
      $query = $this->db->get('tb_permohonan_dalam');

      foreach($query->result() as $row)
      {
         $id_sppd_dalam = $row->id_sppd_dalam;
      }

      $this->db->where('id_sppd_dalam', $id_sppd_dalam);
      $quer = $this->db->get('tb_sppd_dalam_daerah');

      foreach($quer->result() as $ro)
      {
         $no_kegiatan = $ro->no_kegiatan;
      }

      redirect('sppd_dalam/sppd_dalam/list/' . $no_kegiatan);
   }
   
}
