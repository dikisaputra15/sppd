<?php

class Model_sppd_luar extends CI_Model
{
   
    public function getAllsppdluar()
   {
          
      $query = "SELECT tb_sppd_luar_daerah.*, tb_kegiatan_luar.*, tb_pekerjaan_luar.*, tb_biaya_luar.*, tb_program.* from tb_sppd_luar_daerah join tb_kegiatan_luar on tb_sppd_luar_daerah.no_kegiatan=tb_kegiatan_luar.no_kegiatan join tb_pekerjaan_luar on tb_sppd_luar_daerah.id_pekerjaan=tb_pekerjaan_luar.id_pekerjaan_luar join tb_biaya_luar on tb_sppd_luar_daerah.id_biaya=tb_biaya_luar.id_biaya_luar join tb_program on tb_sppd_luar_daerah.kode_program=tb_program.kode_program";
      return $this->db->query($query)->result_array();
   }

   public function getAllcardluar()
      {
             
          $query = "SELECT * from tb_kegiatan_luar";
         return $this->db->query($query)->result_array();

      }

   public function getAlllistluar($id)
   {
          
      $query = "SELECT * from tb_kegiatan_luar where no_kegiatan='$id'";
      return $this->db->query($query)->row_array();
   }

   public function getAlltabelluar($id)
   {
          
      $query = "SELECT tb_buat_sppd_luar.*, tb_sppd_luar_daerah.*, tb_permohonan_luar.*, tb_kegiatan_luar.*, tb_pekerjaan_luar.*, tb_biaya_luar.*, tb_program.* from tb_buat_sppd_luar join tb_sppd_luar_daerah on tb_buat_sppd_luar.id_sppd_luar=tb_sppd_luar_daerah.id_sppd_luar join tb_permohonan_luar on tb_buat_sppd_luar.id_permohonan_luar=tb_permohonan_luar.id_permohonan_luar join tb_kegiatan_luar on tb_buat_sppd_luar.no_kegiatan=tb_kegiatan_luar.no_kegiatan join tb_pekerjaan_luar on tb_buat_sppd_luar.id_pekerjaan=tb_pekerjaan_luar.id_pekerjaan_luar join tb_biaya_luar on tb_buat_sppd_luar.id_biaya=tb_biaya_luar.id_biaya_luar join tb_program on tb_buat_sppd_luar.kode_program=tb_program.kode_program where tb_buat_sppd_luar.no_kegiatan='$id'";
      return $this->db->query($query)->result_array();
   }

   public function getlhpdsppdluar()
   {
          
      $query = "SELECT tb_buat_sppd_luar.*, tb_sppd_luar_daerah.*, tb_permohonan_luar.*, tb_kegiatan_luar.*, tb_pekerjaan_luar.*, tb_biaya_luar.*, tb_program.*, tb_detail_sppd_luar.*, tb_pegawai.* FROM tb_buat_sppd_luar JOIN tb_sppd_luar_daerah on tb_buat_sppd_luar.id_sppd_luar=tb_sppd_luar_daerah.id_sppd_luar join tb_permohonan_luar on tb_buat_sppd_luar.id_permohonan_luar=tb_permohonan_luar.id_permohonan_luar join tb_kegiatan_luar on tb_buat_sppd_luar.no_kegiatan=tb_kegiatan_luar.no_kegiatan join tb_pekerjaan_luar on tb_buat_sppd_luar.id_pekerjaan=tb_pekerjaan_luar.id_pekerjaan_luar join tb_biaya_luar on tb_buat_sppd_luar.id_biaya=tb_biaya_luar.id_biaya_luar join tb_program on tb_buat_sppd_luar.kode_program=tb_program.kode_program join tb_detail_sppd_luar on tb_buat_sppd_luar.id_buat_sppd_luar=tb_detail_sppd_luar.id_buat_sppd_luar join tb_pegawai on tb_detail_sppd_luar.nip = tb_pegawai.nip";
      return $this->db->query($query)->result_array();
   }

   public function getcetaklhpdsppdluar($tgl1, $tgl2)
   {
          
      $query = "SELECT tb_buat_sppd_luar.*, tb_sppd_luar_daerah.*, tb_permohonan_luar.*, tb_kegiatan_luar.*, tb_pekerjaan_luar.*, tb_biaya_luar.*, tb_program.*, tb_detail_sppd_luar.*, tb_pegawai.* FROM tb_buat_sppd_luar JOIN tb_sppd_luar_daerah on tb_buat_sppd_luar.id_sppd_luar=tb_sppd_luar_daerah.id_sppd_luar join tb_permohonan_luar on tb_buat_sppd_luar.id_permohonan_luar=tb_permohonan_luar.id_permohonan_luar join tb_kegiatan_luar on tb_buat_sppd_luar.no_kegiatan=tb_kegiatan_luar.no_kegiatan join tb_pekerjaan_luar on tb_buat_sppd_luar.id_pekerjaan=tb_pekerjaan_luar.id_pekerjaan_luar join tb_biaya_luar on tb_buat_sppd_luar.id_biaya=tb_biaya_luar.id_biaya_luar join tb_program on tb_buat_sppd_luar.kode_program=tb_program.kode_program join tb_detail_sppd_luar on tb_buat_sppd_luar.id_buat_sppd_luar=tb_detail_sppd_luar.id_buat_sppd_luar join tb_pegawai on tb_detail_sppd_luar.nip = tb_pegawai.nip where tb_permohonan_luar.tgl_kembali between '$tgl1' and '$tgl2'";
      return $this->db->query($query)->result_array();
   }

   public function getAllmohonluar()
   {
          
      $query = "SELECT * from tb_permohonan_luar";
      return $this->db->query($query)->result_array();
   }

   public function getAllmohonstatus($id)
   {
          
      $query = "SELECT tb_permohonan_luar.*, tb_sppd_luar_daerah.*, tb_biaya_luar.*, tb_kegiatan_luar.*, tb_pekerjaan_luar.*, tb_program.* from tb_permohonan_luar join tb_sppd_luar_daerah on tb_permohonan_luar.id_sppd_luar=tb_sppd_luar_daerah.id_sppd_luar join tb_biaya_luar on tb_sppd_luar_daerah.id_biaya=tb_biaya_luar.id_biaya_luar join tb_kegiatan_luar on tb_sppd_luar_daerah.no_kegiatan=tb_kegiatan_luar.no_kegiatan join tb_pekerjaan_luar on tb_sppd_luar_daerah.id_pekerjaan=tb_pekerjaan_luar.id_pekerjaan_luar join tb_program on tb_sppd_luar_daerah.kode_program=tb_program.kode_program where tb_permohonan_luar.status!='sppd sudah dibuat' and tb_sppd_luar_daerah.no_kegiatan='$id'";
      return $this->db->query($query)->result_array();
   }

   public function getviewmohonluar($id)
   {
          
      $query = "SELECT tb_permohonan_luar.*, tb_sppd_luar_daerah.* FROM tb_permohonan_luar JOIN tb_sppd_luar_daerah on tb_permohonan_luar.id_sppd_luar=tb_sppd_luar_daerah.id_sppd_luar where tb_permohonan_luar.id_permohonan_luar='$id'";
      return $this->db->query($query)->row_array();
   }

   public function getviewnamaluar($id)
   {
          
      $query = "SELECT tb_detail_permohonan_luar.*, tb_pegawai.nip,tb_pegawai.nama FROM tb_detail_permohonan_luar JOIN tb_pegawai on tb_detail_permohonan_luar.nip=tb_pegawai.nip where tb_detail_permohonan_luar.id_permohonan_luar='$id'";
      return $this->db->query($query)->result_array();
   }

   public function insert_sppd_luar($data, $table)
   {
      $this->db->insert($table, $data);
   }

    public function insert_lhpd($data, $table)
   {
      $this->db->insert($table, $data);
   }

   public function delete_sppdluar($id)
   {
      $this->db->delete('tb_sppd_luar_daerah', ['id_sppd_luar' => $id]);
   }

    public function delete_permohonanluar($id)
   {
      $this->db->delete('tb_permohonan_luar', ['id_permohonan_luar' => $id]);
   }

    public function getsppdluarById($id)
   {
      return $this->db->get_where('tb_sppd_luar_daerah', ['id_sppd_luar' => $id])->row_array();
   }

   public function updatesppdluar()
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

      $this->db->update('tb_sppd_luar_daerah', $data, ['id_sppd_luar' => $this->input->post('id_sppd_luar')]);
   }

   public function updatestatus($id)
   {
      $data = array(
        'status' => "sppd sedang dibuatkan"
      );

      $this->db->where('id_permohonan_luar', $id);
      $this->db->update('tb_permohonan_luar', $data);
   }

    public function getidsppdluar($id)
   {
       return $this->db->get_where('tb_buat_sppd_luar', ['id_buat_sppd_luar' => $id])->row_array();
   }

    public function getlhpdbyid($id)
   {
          
      $query = "SELECT tb_buat_sppd_luar.*, tb_permohonan_luar.*, tb_sppd_luar_daerah.*, tb_kegiatan_luar.*, tb_pekerjaan_luar.*, tb_biaya_luar.*, tb_program.* from tb_buat_sppd_luar join tb_permohonan_luar on tb_buat_sppd_luar.id_permohonan_luar=tb_permohonan_luar.id_permohonan_luar join tb_sppd_luar_daerah on tb_buat_sppd_luar.id_sppd_luar=tb_sppd_luar_daerah.id_sppd_luar join tb_kegiatan_luar on tb_buat_sppd_luar.no_kegiatan=tb_kegiatan_luar.no_kegiatan join tb_pekerjaan_luar on tb_buat_sppd_luar.id_pekerjaan=tb_pekerjaan_luar.id_pekerjaan_luar join tb_biaya_luar on tb_buat_sppd_luar.id_biaya=tb_biaya_luar.id_biaya_luar join tb_program on tb_buat_sppd_luar.kode_program=tb_program.kode_program where tb_buat_sppd_luar.id_buat_sppd_luar='$id'";
      return $this->db->query($query)->row_array();
   }

   public function getpdfpermohonan($id)
   {
          
      $query = $this->db->query("SELECT id_permohonan_luar from tb_detail_sppd_luar where id_buat_sppd_luar='$id'");

      foreach ($query->result() as $row)
      {
              $id_permohonan_luar = $row->id_permohonan_luar;
      }

      $query = "SELECT * from tb_permohonan_luar where tb_permohonan_luar.id_permohonan_luar='$id_permohonan_luar'";
      return $this->db->query($query)->row_array();
   }

   public function getpetugas($id)
   {
      $query = $this->db->query("SELECT nip from tb_detail_sppd_luar where id_buat_sppd_luar='$id'");

      foreach ($query->result() as $row)
      {
              $nip = $row->nip;
      }
      
       $query = "SELECT * from tb_pegawai where nip='$nip'";
         return $this->db->query($query)->result_array();
   }

    public function getbiayapetugas($id)
   {
      $query = "SELECT tb_detail_sppd_luar.*, tb_pegawai.nip,tb_pegawai.nama,tb_pegawai.jabatan from tb_detail_sppd_luar join tb_pegawai on tb_detail_sppd_luar.nip=tb_pegawai.nip where tb_detail_sppd_luar.id_buat_sppd_luar='$id'";
      return $this->db->query($query)->result_array();
   }

    public function getkegiatan()
   {
          
      $query = "SELECT tb_sppd_luar_daerah.*, tb_pekerjaan_luar.* FROM tb_sppd_luar_daerah JOIN tb_pekerjaan_luar on tb_sppd_luar_daerah.id_pekerjaan=tb_pekerjaan_luar.id_pekerjaan_luar";
      return $this->db->query($query)->result_array();
   }

    public function getlokasiluar($id)
   {
          
      $this->db->where('id_permohonan_luar', $id);
      $query = $this->db->get('tb_permohonan_luar');

      foreach($query->result() as $row)
      {
         $id_sppd_luar = $row->id_sppd_luar;

         $this->db->where('id_sppd_luar', $id_sppd_luar);
         $quer = $this->db->get('tb_sppd_luar_daerah');

         foreach($quer->result() as $ro)
         {
            $id_biaya = $ro->id_biaya;
         }
      }

      return $this->db->get_where('tb_biaya_luar', ['id_biaya_luar' => $id_biaya])->row_array();

   }

   public function getlokasisppdluar($id)
   {
          
      $this->db->where('id_sppd_luar', $id);
      $query = $this->db->get('tb_sppd_luar_daerah');

      foreach($query->result() as $row)
      {
         $id_biaya = $row->id_biaya;

      }

      return $this->db->get_where('tb_biaya_luar', ['id_biaya_luar' => $id_biaya])->row_array();

   }

   public function gethasillhpd($id)
   {
          
      return $this->db->get_where('tb_lhpd_luar', ['id_buat_sppd_luar' => $id])->row_array();

   }

   public function getnilaikwitansi($id)
   {
          
      $query = "SELECT SUM(biaya_perjalanan) FROM tb_detail_sppd_luar where tb_detail_sppd_luar.id_buat_sppd_luar='$id'";
      return $this->db->query($query)->row_array();
   }

   public function getallgrafikluar()
   {
          
      $data = $this->db->query("select * from tb_buat_sppd_luar");
      return $data->result();

   }

   public function jmlmasukluar()
   {
      
               $this->db->where('status', 'sppd sedang dibuatkan');
        $query = $this->db->get('tb_permohonan_luar');
          if($query->num_rows()>0)
          {
            return $query->num_rows();
          }
          else
          {
            return 0;
          }

   }

   public function getjmlmasukluar()
   {
          
      $query = "SELECT * from tb_permohonan_luar where status='sppd sedang dibuatkan'";
      return $this->db->query($query)->result_array();
   }

   public function insertdok($data, $table)
   {
      $this->db->insert($table, $data);
   }

   public function gettampildok($id)
   {
          
      $query = "SELECT tb_upload_luar.*, tb_buat_sppd_luar.* FROM tb_upload_luar JOIN tb_buat_sppd_luar on tb_upload_luar.id_buat_sppd_luar=tb_buat_sppd_luar.id_buat_sppd_luar where tb_upload_luar.id_buat_sppd_luar='$id'";
      return $this->db->query($query)->result_array();
   }

}

?>