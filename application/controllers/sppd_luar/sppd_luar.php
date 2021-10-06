<?php

class sppd_luar extends CI_Controller
{

   function __construct()
    {

      parent::__construct();
      $this->load->model('Model_sppd_luar');
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
               'tittle' => 'sppd luar'
            ];
         $data['sppdluar'] = $this->Model_sppd_luar->getAllsppdluar();
         $data['program'] = $this->Model_program->getAllprogram();
         $data['pekerjaan'] = $this->Model_pekerjaan->getAllpekerjaanluar();
         $data['biaya'] = $this->Model_biaya->getAllbiayaluar();
         $data['kegiatan'] = $this->Model_kegiatan->getAllkegiatanluar();
         $this->load->view('templates/header', $data);
         $this->load->view('templates/navbar', $data);
         $this->load->view('templates/menu', $data);
         $this->load->view('sppd_luar/sppd_luar', $data);
         $this->load->view('templates/footer');
      }
   }

   public function tambahsppdluar()
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

      $this->Model_sppd_luar->insert_sppd_luar($data, 'tb_sppd_luar_daerah');
      $this->session->set_flashdata('flash', 'Ditambah');
      redirect('sppd_luar/sppd_luar');
   }

   public function hapus_sppdluar($id)
   {
      $this->Model_sppd_luar->delete_sppdluar($id);
       $this->session->set_flashdata('flash', 'DiHapus');
      redirect('sppd_luar/sppd_luar');
   }

   public function edit_sppdluar($id)
   {
      $data['tittle'] = 'Edit';
      $data['sppdluar'] = $this->Model_sppd_luar->getsppdluarById($id);
      $data['program'] = $this->Model_program->getAllprogram();
      $data['kegiatan'] = $this->Model_kegiatan->getAllkegiatanluar();
      $data['pekerjaan'] = $this->Model_pekerjaan->getAllpekerjaanluar();
      $data['biaya'] = $this->Model_biaya->getAllbiayaluar();
      $this->form_validation->set_rules('id_sppd_luar', 'id_sppd_luar', 'required');
      if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/menu', $data);
            $this->load->view('sppd_luar/edit_sppdluar', $data);
            $this->load->view('templates/footer');
      } else {
         $this->Model_sppd_luar->updatesppdluar();
         $this->session->set_flashdata('flash', 'DiUbah');
         redirect('sppd_luar/sppd_luar');
      }
   }

   public function list($id)
   {
      if (!$this->session->userdata('nip')) {
         redirect('auth/login');
      }else{
         $data = [
               'tittle' => 'list tabel sppd luar'
            ];
         $data['listluar'] = $this->Model_sppd_luar->getAlllistluar($id);
         $data['tabelluar'] = $this->Model_sppd_luar->getAlltabelluar($id);
         $data['program'] = $this->Model_program->getAllprogram();
         $data['pekerjaan'] = $this->Model_pekerjaan->getAllpekerjaan();
         $data['biaya'] = $this->Model_biaya->getAllbiaya();
         $data['kegiatan'] = $this->Model_kegiatan->getAllkegiatanluar();
         $this->load->view('templates/header', $data);
         $this->load->view('templates/navbar', $data);
         $this->load->view('templates/menu', $data);
         $this->load->view('sppd_luar/list_luar', $data);
         $this->load->view('templates/footer');
      }
   }

   public function buat_sppd_luar($id)
   {
      if (!$this->session->userdata('nip')) {
         redirect('auth/login');
      }else{
         $data = [
               'tittle' => 'buat sppd luar'
            ];
         $data['listluar'] = $this->Model_sppd_luar->getAlllistluar($id);
         $data['permohonan'] = $this->Model_sppd_luar->getAllmohonstatus($id);
         // $data['program'] = $this->Model_program->getAllprogram();
         // $data['pekerjaan'] = $this->Model_pekerjaan->getAllpekerjaan();
         $data['biaya'] = $this->Model_biaya->getAllbiayaluar();
         $data['gol'] = $this->Model_biaya->getgolluar($id);
         // $data['kegiatan'] = $this->Model_kegiatan->getAllkegiatan();
         // $data['pegawai'] = $this->Model_pegawai->getAllpegawai();
         // $data['lokasi'] = $this->Model_sppd_luar->getlokasisppdluar($id);
         $this->load->view('templates/header', $data);
         $this->load->view('templates/navbar', $data);
         $this->load->view('templates/menu', $data);
         $this->load->view('sppd_luar/buat_sppd_l', $data);
         $this->load->view('templates/footer');
      }
   }

    public function proses_sppd_luar()
   {
      $arr= $this->input->post('pegawai');
      $gol= $this->input->post('goluang');
      $id_permohonan_luar= $this->input->post('id_permohonan_luar');
      $id_sppd_luarr= $this->input->post('id_sppd_luarr');
      $id_permohonan_luar= $this->input->post('id_permohonan_luar');
      $id_pekerjaan= $this->input->post('id_pekerjaan');
      $kode_program= $this->input->post('kode_program');
      $no_kegiatan= $this->input->post('no_kegiatan');
      $id_biaya= $this->input->post('id_biaya');
      $tgl_berangkat= $this->input->post('tgl_berangkat');
      $tgl_kembali= $this->input->post('tgl_kembali');

      $data = [
               'id_permohonan_luar' => $id_permohonan_luar,
               'id_sppd_luar' => $id_sppd_luarr,
               'no_kegiatan' => $no_kegiatan,
               'id_pekerjaan' => $id_pekerjaan,
               'id_biaya' => $id_biaya,
               'kode_program' => $kode_program,
               'total_biaya' => 0
            ];

      $this->db->insert('tb_buat_sppd_luar', $data);
      $idlast = $this->db->insert_id();

       for ($i=0; $i<count($arr); $i++){
            $arr[$i];
            $gol[$i];   

            $tgl1 = new DateTime($tgl_berangkat);
            $tgl2 = new DateTime($tgl_kembali);
            $jarak = $tgl2->diff($tgl1);
            $lama = $jarak->d;

            if ($lama == 0) {
               $lama = 1;
            }
            
            $total = $lama * $gol[$i];

             $data2 = [
               'id_buat_sppd_luar' => $idlast,
               'id_sppd_luar' => $id_sppd_luarr,
               'id_permohonan_luar' => $id_permohonan_luar,
               'nip' => $arr[$i],
               'biaya_perjalanan' => $gol[$i],
               'lama_perjalanan' => $lama,
               'total' => $total
            ];
               $this->db->insert('tb_detail_sppd_luar', $data2);

               $this->db->select('SUM(total) as total');
               $this->db->from('tb_detail_sppd_luar');
               $this->db->where('id_buat_sppd_luar', $idlast);
               $total = $this->db->get()->row()->total;

               $d = array(
                 'total_biaya' => $total
               );
               $this->db->where('id_buat_sppd_luar', $idlast);
               $this->db->update('tb_buat_sppd_luar', $d);
         }

         $data = array(
           'status' => "sppd sudah dibuat"
         );

         $this->db->where('id_permohonan_luar', $id_permohonan_luar);
         $this->db->update('tb_permohonan_luar', $data);

         $this->session->set_flashdata('flash', 'Ditambah');
         redirect('sppd_luar/sppd_luar/list/' . $no_kegiatan);

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
