<?php

class sppd_dalam extends CI_Controller
{

   function __construct()
    {

      parent::__construct();
      $this->load->model('Model_sppd_dalam');
      $this->load->model('Model_program');
      $this->load->model('Model_pekerjaan');
      $this->load->model('Model_biaya');
      $this->load->model('Model_kegiatan');
      $this->load->model('Model_pegawai');
 
    }

   public function index()
   {
      if (!$this->session->userdata('nip')) {
         redirect('auth/login');
      }else{
         $data = [
               'tittle' => 'sppd dalam'
            ];
         $data['sppddalam'] = $this->Model_sppd_dalam->getAllsppddalam();
         $data['program'] = $this->Model_program->getAllprogram();
         $data['pekerjaan'] = $this->Model_pekerjaan->getAllpekerjaan();
         $data['biaya'] = $this->Model_biaya->getAllbiaya();
         $data['kegiatan'] = $this->Model_kegiatan->getAllkegiatan();
         $this->load->view('templates/header', $data);
         $this->load->view('templates/navbar', $data);
         $this->load->view('templates/menu', $data);
         $this->load->view('sppd_dalam/sppd_dalam', $data);
         $this->load->view('templates/footer');
      }
   }

   public function tambahsppddalam()
   {
      $program = $this->input->post('program');
      $kegiatan = $this->input->post('kegiatan');
      $pekerjaan = $this->input->post('pekerjaan');
      $lokasi = $this->input->post('lokasi');

      $data = [
               'no_kegiatan' => $kegiatan,
               'id_pekerjaan' => $pekerjaan,
               'id_biaya' => $lokasi,
               'kode_program' => $program
            ];

      $this->Model_sppd_dalam->insert_sppd_dalam($data, 'tb_sppd_dalam_daerah');
      $this->session->set_flashdata('flash', 'Ditambah');
      redirect('sppd_dalam/sppd_dalam');
   }

   public function hapus_sppddalam($id)
   {
      $this->Model_sppd_dalam->delete_sppddalam($id);
       $this->session->set_flashdata('flash', 'DiHapus');
      redirect('sppd_dalam/sppd_dalam');
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

   public function list($id)
   {
      if (!$this->session->userdata('nip')) {
         redirect('auth/login');
      }else{
         $data = [
               'tittle' => 'list tabel sppd dalam'
            ];
         $data['listdalam'] = $this->Model_sppd_dalam->getAlllistdalam($id);
         $data['tabeldalam'] = $this->Model_sppd_dalam->getAlltabeldalam($id);
         $data['program'] = $this->Model_program->getAllprogram();
         $data['pekerjaan'] = $this->Model_pekerjaan->getAllpekerjaan();
         $data['biaya'] = $this->Model_biaya->getAllbiaya();
         $data['kegiatan'] = $this->Model_kegiatan->getAllkegiatan();
         $this->load->view('templates/header', $data);
         $this->load->view('templates/navbar', $data);
         $this->load->view('templates/menu', $data);
         $this->load->view('sppd_dalam/list_dalam', $data);
         $this->load->view('templates/footer');
      }
   }

    public function buat_sppd_dalam($id)
   {
      if (!$this->session->userdata('nip')) {
         redirect('auth/login');
      }else{
         $data = [
               'tittle' => 'buat sppd dalam'
            ];
         $data['listdalam'] = $this->Model_sppd_dalam->getAlllistdalam($id);
         $data['permohonan'] = $this->Model_sppd_dalam->getAllmohonstatus($id);
         // $data['program'] = $this->Model_program->getAllprogram();
         // $data['pekerjaan'] = $this->Model_pekerjaan->getAllpekerjaan();
         $data['biaya'] = $this->Model_biaya->getAllbiaya();
         // $data['gol'] = $this->Model_biaya->getgol($id);
         // $data['kegiatan'] = $this->Model_kegiatan->getAllkegiatan();
         // $data['pegawai'] = $this->Model_pegawai->getAllpegawai();
         // $data['lokasi'] = $this->Model_sppd_dalam->getlokasisppddalam($id);
         $this->load->view('templates/header', $data);
         $this->load->view('templates/navbar', $data);
         $this->load->view('templates/menu', $data);
         $this->load->view('sppd_dalam/buat_sppd_d', $data);
         $this->load->view('templates/footer');
      }
   }

   public function proses_sppd_dalam()
   {
      $arr= $this->input->post('pegawai');
      $gol= $this->input->post('goluang');
      $id_permohonan_dalam= $this->input->post('id_permohonan_dalam');
      $id_sppd_dalamm= $this->input->post('id_sppd_dalamm');
      $id_permohonan_dalam= $this->input->post('id_permohonan_dalam');
      $id_pekerjaan= $this->input->post('id_pekerjaan');
      $kode_program= $this->input->post('kode_program');
      $no_kegiatan= $this->input->post('no_kegiatan');
      $id_biaya= $this->input->post('id_biaya');
      $tgl_berangkat= $this->input->post('tgl_berangkat');
      $tgl_kembali= $this->input->post('tgl_kembali');

      $data = [
               'id_permohonan_dalam' => $id_permohonan_dalam,
               'id_sppd_dalam' => $id_sppd_dalamm,
               'no_kegiatan' => $no_kegiatan,
               'id_pekerjaan' => $id_pekerjaan,
               'id_biaya' => $id_biaya,
               'kode_program' => $kode_program,
               'total_biaya' => 0
            ];

      $this->db->insert('tb_buat_sppd_dalam', $data);
      $idlast = $this->db->insert_id();

       for ($i=0; $i<count($arr); $i++){
            $arr[$i];
            $gol = 150000;   
            $tgl1 = new DateTime($tgl_berangkat);
            $tgl2 = new DateTime($tgl_kembali);
            $jarak = $tgl2->diff($tgl1);
            $lama = $jarak->d;

            if ($lama == 0) {
               $lama = 1;
            }
            
            $total = $lama * $gol;

             $data2 = [
               'id_buat_sppd_dalam' => $idlast,
               'id_sppd_dalam' => $id_sppd_dalamm,
               'id_permohonan_dalam' => $id_permohonan_dalam,
               'nip' => $arr[$i],
               'biaya_perjalanan' => $gol,
               'lama_perjalanan' => $lama,
               'total' => $total
            ];
               $this->db->insert('tb_detail_sppd_dalam', $data2);

               $this->db->select('SUM(total) as total');
               $this->db->from('tb_detail_sppd_dalam');
               $this->db->where('id_buat_sppd_dalam', $idlast);
               $total = $this->db->get()->row()->total;

               $d = array(
                 'total_biaya' => $total
               );
               $this->db->where('id_buat_sppd_dalam', $idlast);
               $this->db->update('tb_buat_sppd_dalam', $d);
         }

         $data = array(
           'status' => "sppd sudah dibuat"
         );

         $this->db->where('id_permohonan_dalam', $id_permohonan_dalam);
         $this->db->update('tb_permohonan_dalam', $data);

         $this->session->set_flashdata('flash', 'Ditambah');
         redirect('sppd_dalam/sppd_dalam/list/' . $no_kegiatan);

      // foreach ($_POST['pegawai'] as $key => $value) 
      // {
      //    if(in_array($_POST['pegawai'][$key], $checked_array))
      //    {
      //       echo $peg=$_POST['pegawai'][$key];
      //       echo "<br>";
      //       echo $gol=$_POST['goluang'][$key];

      //    }
          
      // }

   }
   
}
