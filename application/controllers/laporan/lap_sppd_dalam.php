<?php

class lap_sppd_dalam extends CI_Controller
{

   function __construct()
    {

      parent::__construct();
      $this->load->model('Model_sppd_dalam');
 
    }

   public function index()
   {
      if (!$this->session->userdata('nip')) {
         redirect('auth/login');
      }else{
         $data = [
               'tittle' => 'Laporan SPPD dalam'
            ];
         $data['lapsppddalam'] = $this->Model_sppd_dalam->getlhpdsppddalam();
         $this->load->view('templates/header', $data);
         $this->load->view('templates/navbar', $data);
         $this->load->view('templates/menu', $data);
         $this->load->view('laporan/lap_sppd_dalam', $data);
         $this->load->view('templates/footer');
      }
   }

   public function form_lhpd_dalam($id)
   {
      if (!$this->session->userdata('nip')) {
         redirect('auth/login');
      }else{
         $data = [
               'tittle' => 'kegiatan'
            ];
         $data['getid'] = $this->Model_sppd_dalam->getidsppddalam($id);
         $this->load->view('templates/header', $data);
         $this->load->view('templates/navbar', $data);
         $this->load->view('templates/menu', $data);
         $this->load->view('laporan/form_lhpd_dalam', $data);
         $this->load->view('templates/footer');
      }
   }

   public function tambahlhpd()
   {
      $id_buat_sppd_dalam = $this->input->post('id_buat_sppd_dalam');
      $hasil = $this->input->post('hasil');

      $data = [
               'id_buat_sppd_dalam' => $id_buat_sppd_dalam,
               'hasil' => $hasil
            ];

      $this->Model_sppd_dalam->insert_lhpd($data, 'tb_lhpd_dalam');
      $this->session->set_flashdata('flash', 'Ditambah');
      redirect('laporan/lap_sppd_dalam');
   }

   public function hapus_kegiatan($id)
   {
      $this->Model_kegiatan->delete_kegiatan($id);
       $this->session->set_flashdata('flash', 'DiHapus');
      redirect('kegiatan/kegiatan');
   }

   public function c_lhpd($id)
   {
      $data['pdflhpd'] = $this->Model_sppd_dalam->getlhpdbyid($id);
      $data['pdfpermohonan'] = $this->Model_sppd_dalam->getpdfpermohonan($id);
      $data['biayapetugas'] = $this->Model_sppd_dalam->getbiayapetugas($id);
      $data['hasillhpd'] = $this->Model_sppd_dalam->gethasillhpd($id);
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'portrait');
        $this->pdf->filename = "laporan.pdf";
        $this->pdf->load_view('laporan/c_lhpd', $data);
   }

   public function spt($id)
   {
      if (!$this->session->userdata('nip')) {
         redirect('auth/login');
      }else{
         $data['pdflhpd'] = $this->Model_sppd_dalam->getlhpdbyid($id);
         $data['pdfpermohonan'] = $this->Model_sppd_dalam->getpdfpermohonan($id);
         $data['biayapetugas'] = $this->Model_sppd_dalam->getbiayapetugas($id);
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'portrait');
        $this->pdf->filename = "laporan.pdf";
        $this->pdf->load_view('laporan/c_spt', $data);
      }
   }

   public function ro($id)
   {
      if (!$this->session->userdata('nip')) {
         redirect('auth/login');
      }else{
         $data['pdflhpd'] = $this->Model_sppd_dalam->getlhpdbyid($id);
         // $data['pdfpermohonan'] = $this->Model_sppd_dalam->getpdfpermohonan($id);
         $data['biayapetugas'] = $this->Model_sppd_dalam->getbiayapetugas($id);
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'portrait');
        $this->pdf->filename = "laporan.pdf";
        $this->pdf->load_view('laporan/c_ro', $data);
      }
   }

   public function kwitansi($id)
   {
      if (!$this->session->userdata('nip')) {
         redirect('auth/login');
      }else{
         $data['pdflhpd'] = $this->Model_sppd_dalam->getlhpdbyid($id);
         $data['pdfpermohonan'] = $this->Model_sppd_dalam->getpdfpermohonan($id);
         $data['biayapetugas'] = $this->Model_sppd_dalam->getbiayapetugas($id);
         $data['nilai_kwitansi'] = $this->Model_sppd_dalam->getnilaikwitansi($id);   
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'portrait');
        $this->pdf->filename = "laporan.pdf";
        $this->pdf->load_view('laporan/c_kwitansi', $data);
      }
   }

   public function cetakall()
   {
        $tgl1 = $this->input->post('tgl1');
        $tgl2 = $this->input->post('tgl2');

        $data['lapsppddalam'] = $this->Model_sppd_dalam->getcetaklhpdsppddalam($tgl1, $tgl2);

        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan.pdf";
        $this->pdf->load_view('laporan/cetakalldalam', $data);
      
   }

   public function jml_masuk()
   {
      if (!$this->session->userdata('nip')) {
         redirect('auth/login');
      }else{
         $data = [
               'tittle' => 'jumlah sppd dalam daerah masuk'
            ];
         $data['jmlmasukdalam'] = $this->Model_sppd_dalam->getjmlmasuk();
         $this->load->view('templates/header', $data);
         $this->load->view('templates/navbar', $data);
         $this->load->view('templates/menu', $data);
         $this->load->view('laporan/jml_masuk_dalam', $data);
         $this->load->view('templates/footer');
      }
   }

   public function form_cetak()
   {
      if (!$this->session->userdata('nip')) {
         redirect('auth/login');
      }else{
         $data = [
               'tittle' => 'form cetak'
            ];
         $this->load->view('templates/header', $data);
         $this->load->view('templates/navbar', $data);
         $this->load->view('templates/menu', $data);
         $this->load->view('laporan/form_cetak_dalam', $data);
         $this->load->view('templates/footer');
      }
   }

   public function form_dok($id)
   {
      if (!$this->session->userdata('nip')) {
         redirect('auth/login');
      }else{
         $data = [
               'tittle' => 'form upload dokumen'
            ];
          $data['tampildok'] = $this->Model_sppd_dalam->gettampildok($id);
         $this->load->view('templates/header', $data);
         $this->load->view('templates/navbar', $data);
         $this->load->view('templates/menu', $data);
         $this->load->view('laporan/form_dok_dalam', $data);
         $this->load->view('templates/footer');
      }
   }

   public function upload_dok($id)
   {
      $file = $_FILES['file']['name'];

       if ($file) {
             $config['allowed_types'] = 'jpg|jpeg|png|JPEG|pdf|PDF';
             $config['upload_path'] = './upload/';
             $config['remove_spaces'] = FALSE;

             $this->load->library('upload', $config);

             if ($this->upload->do_upload('file')) {
             } else {
                echo $this->upload->display_errors();
             }
        }
       
       $data = [
             'id_buat_sppd_dalam' => $id,
             'file' => $file
           ];

      $this->Model_sppd_dalam->insertdok($data, 'tb_upload_dalam');
      $this->session->set_flashdata('flash', 'Ditambah');
       redirect('laporan/lap_sppd_dalam/form_dok/' .$id);
   }
   
}
