<?php

class Model_sppd_dalam extends CI_Model
{
   
    public function getAllsppddalam()
   {
          
       $query = "SELECT tb_sppd_dalam_daerah.*, tb_kegiatan.no_kegiatan,tb_kegiatan.nama_kegiatan, tb_kegiatan.pagu_anggaran, tb_pekerjaan.id_pekerjaan,tb_pekerjaan.nama_pekerjaan, tb_biaya.id_biaya,tb_biaya.lokasi, tb_program.kode_program,tb_program.nama_program FROM tb_sppd_dalam_daerah JOIN tb_kegiatan on tb_sppd_dalam_daerah.no_kegiatan=tb_kegiatan.no_kegiatan join tb_biaya on tb_sppd_dalam_daerah.id_biaya=tb_biaya.id_biaya join tb_program on tb_sppd_dalam_daerah.kode_program=tb_program.kode_program join tb_pekerjaan on tb_sppd_dalam_daerah.id_pekerjaan=tb_pekerjaan.id_pekerjaan";
      return $this->db->query($query)->result_array();
      
   }

   public function getAllcarddalam()
      {
             
          $query = "SELECT * from tb_kegiatan";
         return $this->db->query($query)->result_array();

      }

    public function getlhpdsppddalam()
   {
          
      $query = "SELECT tb_buat_sppd_dalam.*, tb_sppd_dalam_daerah.*, tb_permohonan_dalam.*, tb_kegiatan.*, tb_pekerjaan.*, tb_biaya.*, tb_program.*, tb_detail_sppd_dalam.*, tb_pegawai.* FROM tb_buat_sppd_dalam JOIN tb_sppd_dalam_daerah on tb_buat_sppd_dalam.id_sppd_dalam=tb_sppd_dalam_daerah.id_sppd_dalam join tb_permohonan_dalam on tb_buat_sppd_dalam.id_permohonan_dalam=tb_permohonan_dalam.id_permohonan_dalam join tb_kegiatan on tb_buat_sppd_dalam.no_kegiatan=tb_kegiatan.no_kegiatan join tb_pekerjaan on tb_buat_sppd_dalam.id_pekerjaan=tb_pekerjaan.id_pekerjaan join tb_biaya on tb_buat_sppd_dalam.id_biaya=tb_biaya.id_biaya join tb_program on tb_buat_sppd_dalam.kode_program=tb_program.kode_program join tb_detail_sppd_dalam on tb_buat_sppd_dalam.id_buat_sppd_dalam=tb_detail_sppd_dalam.id_buat_sppd_dalam join tb_pegawai on tb_detail_sppd_dalam.nip = tb_pegawai.nip";
      return $this->db->query($query)->result_array();
   }

    public function getcetaklhpdsppddalam($tgl1, $tgl2)
   {
          
      $query = "SELECT tb_buat_sppd_dalam.*, tb_sppd_dalam_daerah.*, tb_permohonan_dalam.*, tb_kegiatan.*, tb_pekerjaan.*, tb_biaya.*, tb_program.*, tb_detail_sppd_dalam.*, tb_pegawai.* FROM tb_buat_sppd_dalam JOIN tb_sppd_dalam_daerah on tb_buat_sppd_dalam.id_sppd_dalam=tb_sppd_dalam_daerah.id_sppd_dalam join tb_permohonan_dalam on tb_buat_sppd_dalam.id_permohonan_dalam=tb_permohonan_dalam.id_permohonan_dalam join tb_kegiatan on tb_buat_sppd_dalam.no_kegiatan=tb_kegiatan.no_kegiatan join tb_pekerjaan on tb_buat_sppd_dalam.id_pekerjaan=tb_pekerjaan.id_pekerjaan join tb_biaya on tb_buat_sppd_dalam.id_biaya=tb_biaya.id_biaya join tb_program on tb_buat_sppd_dalam.kode_program=tb_program.kode_program join tb_detail_sppd_dalam on tb_buat_sppd_dalam.id_buat_sppd_dalam=tb_detail_sppd_dalam.id_buat_sppd_dalam join tb_pegawai on tb_detail_sppd_dalam.nip = tb_pegawai.nip where tb_permohonan_dalam.tgl_kembali between '$tgl1' and '$tgl2'";
      return $this->db->query($query)->result_array();
   }

    public function getlhpdbyid($id)
   {
          
      $query = "SELECT tb_buat_sppd_dalam.*, tb_sppd_dalam_daerah.*, tb_detail_sppd_dalam.*, tb_kegiatan.no_kegiatan,tb_kegiatan.nama_kegiatan,tb_kegiatan.koring_k,tb_kegiatan.pptk,tb_kegiatan.pagu_anggaran, tb_pekerjaan.id_pekerjaan,tb_pekerjaan.nama_pekerjaan, tb_biaya.id_biaya,tb_biaya.lokasi, tb_program.kode_program,tb_program.nama_program FROM tb_buat_sppd_dalam JOIN tb_kegiatan on tb_buat_sppd_dalam.no_kegiatan=tb_kegiatan.no_kegiatan join tb_biaya on tb_buat_sppd_dalam.id_biaya=tb_biaya.id_biaya join tb_program on tb_buat_sppd_dalam.kode_program=tb_program.kode_program join tb_pekerjaan on tb_buat_sppd_dalam.id_pekerjaan=tb_pekerjaan.id_pekerjaan join tb_sppd_dalam_daerah on tb_buat_sppd_dalam.id_sppd_dalam=tb_sppd_dalam_daerah.id_sppd_dalam join tb_detail_sppd_dalam on tb_buat_sppd_dalam.id_buat_sppd_dalam=tb_detail_sppd_dalam.id_buat_sppd_dalam where tb_buat_sppd_dalam.id_buat_sppd_dalam='$id'";
      return $this->db->query($query)->row_array();
   }

    public function getpetugas($id)
   {
      $query = $this->db->query("SELECT nip from tb_detail_sppd_dalam where id_buat_sppd_dalam='$id'");

      foreach ($query->result() as $row)
      {
              $nip = $row->nip;
      }
      
       $query = "SELECT * from tb_pegawai where nip='$nip'";
         return $this->db->query($query)->result_array();
   }

   public function getbiayapetugas($id)
   {
      $query = "SELECT tb_detail_sppd_dalam.*, tb_pegawai.nip,tb_pegawai.nama,tb_pegawai.jabatan from tb_detail_sppd_dalam join tb_pegawai on tb_detail_sppd_dalam.nip=tb_pegawai.nip where tb_detail_sppd_dalam.id_buat_sppd_dalam='$id'";
      return $this->db->query($query)->result_array();
   }

   public function getpdfpermohonan($id)
   {
          
      $query = $this->db->query("SELECT id_permohonan_dalam from tb_detail_sppd_dalam where id_buat_sppd_dalam='$id'");

      foreach ($query->result() as $row)
      {
              $id_permohonan_dalam = $row->id_permohonan_dalam;
      }

      $query = "SELECT * from tb_permohonan_dalam where tb_permohonan_dalam.id_permohonan_dalam='$id_permohonan_dalam'";
      return $this->db->query($query)->row_array();
   }

   public function getAlllistdalam($id)
   {
          
      $query = "SELECT * from tb_kegiatan where no_kegiatan='$id'";
      return $this->db->query($query)->row_array();
   }

    public function getAlltabeldalam($id)
   {
          
      $query = "SELECT tb_buat_sppd_dalam.*, tb_sppd_dalam_daerah.*, tb_kegiatan.no_kegiatan,tb_kegiatan.nama_kegiatan, tb_pekerjaan.id_pekerjaan,tb_pekerjaan.nama_pekerjaan, tb_biaya.id_biaya,tb_biaya.lokasi, tb_program.kode_program,tb_program.nama_program FROM tb_buat_sppd_dalam JOIN tb_kegiatan on tb_buat_sppd_dalam.no_kegiatan=tb_kegiatan.no_kegiatan join tb_biaya on tb_buat_sppd_dalam.id_biaya=tb_biaya.id_biaya join tb_program on tb_buat_sppd_dalam.kode_program=tb_program.kode_program join tb_pekerjaan on tb_buat_sppd_dalam.id_pekerjaan=tb_pekerjaan.id_pekerjaan join tb_sppd_dalam_daerah on tb_buat_sppd_dalam.id_sppd_dalam=tb_sppd_dalam_daerah.id_sppd_dalam where tb_buat_sppd_dalam.no_kegiatan='$id' order by tb_buat_sppd_dalam.id_buat_sppd_dalam DESC";
      return $this->db->query($query)->result_array();
   }

   public function getAllmohondalam()
   {
          
      $query = "SELECT tb_permohonan_dalam.*, tb_sppd_dalam_daerah.*, tb_pekerjaan.*, tb_biaya.* from tb_permohonan_dalam join tb_sppd_dalam_daerah on tb_permohonan_dalam.id_sppd_dalam=tb_sppd_dalam_daerah.id_sppd_dalam join tb_pekerjaan on tb_sppd_dalam_daerah.id_pekerjaan=tb_pekerjaan.id_pekerjaan join tb_biaya on tb_sppd_dalam_daerah.id_biaya=tb_biaya.id_biaya";
      return $this->db->query($query)->result_array();
   }

   public function getAllmohonstatus($id)
   {
          
      $query = "SELECT tb_permohonan_dalam.*, tb_sppd_dalam_daerah.*, tb_biaya.*, tb_kegiatan.*, tb_pekerjaan.*, tb_program.* from tb_permohonan_dalam join tb_sppd_dalam_daerah on tb_permohonan_dalam.id_sppd_dalam=tb_sppd_dalam_daerah.id_sppd_dalam join tb_biaya on tb_sppd_dalam_daerah.id_biaya=tb_biaya.id_biaya join tb_kegiatan on tb_sppd_dalam_daerah.no_kegiatan=tb_kegiatan.no_kegiatan join tb_pekerjaan on tb_sppd_dalam_daerah.id_pekerjaan=tb_pekerjaan.id_pekerjaan join tb_program on tb_sppd_dalam_daerah.kode_program=tb_program.kode_program where tb_permohonan_dalam.status!='sppd sudah dibuat' and tb_sppd_dalam_daerah.no_kegiatan='$id'";
      return $this->db->query($query)->result_array();
   }

    public function getviewmohondalam($id)
   {
          
      $query = "SELECT tb_permohonan_dalam.*, tb_sppd_dalam_daerah.* FROM tb_permohonan_dalam JOIN tb_sppd_dalam_daerah on tb_permohonan_dalam.id_sppd_dalam=tb_sppd_dalam_daerah.id_sppd_dalam where tb_permohonan_dalam.id_permohonan_dalam='$id'";
      return $this->db->query($query)->row_array();
   }

    public function getviewnamadalam($id)
   {
          
      $query = "SELECT tb_detail_permohonan_dalam.*, tb_pegawai.nip,tb_pegawai.nama FROM tb_detail_permohonan_dalam JOIN tb_pegawai on tb_detail_permohonan_dalam.nip=tb_pegawai.nip where tb_detail_permohonan_dalam.id_permohonan_dalam='$id'";
      return $this->db->query($query)->result_array();
   }

 	public function insert_sppd_dalam($data, $table)
   {
      $this->db->insert($table, $data);
   }

   public function insert_lhpd($data, $table)
   {
      $this->db->insert($table, $data);
   }

   public function delete_sppddalam($id)
   {
      $this->db->delete('tb_sppd_dalam_daerah', ['id_sppd_dalam' => $id]);
   }

   public function delete_permohonandalam($id)
   {
      $this->db->delete('tb_permohonan_dalam', ['id_permohonan_dalam' => $id]);
   }

    public function getsppddalamById($id)
   {
      return $this->db->get_where('tb_sppd_dalam_daerah', ['id_sppd_dalam' => $id])->row_array();
   }

	public function updatesppddalam()
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

      $this->db->update('tb_sppd_dalam_daerah', $data, ['id_sppd_dalam' => $this->input->post('id_sppd_dalam')]);
   }

   public function updatestatus($id)
   {
      $data = array(
        'status' => "sppd sedang dibuatkan"
      );

      $this->db->where('id_permohonan_dalam', $id);
      $this->db->update('tb_permohonan_dalam', $data);
   }

   public function getidsppddalam($id)
   {
          
      return $this->db->get_where('tb_buat_sppd_dalam', ['id_buat_sppd_dalam' => $id])->row_array();
   }
   public function getnilaikwitansi($id)
   {
          
      $query = "SELECT SUM(biaya_perjalanan) FROM tb_detail_sppd_dalam where tb_detail_sppd_dalam.id_buat_sppd_dalam='$id'";
      return $this->db->query($query)->row_array();
   }

   public function getkegiatan()
   {
          
      $query = "SELECT tb_sppd_dalam_daerah.*, tb_pekerjaan.* FROM tb_sppd_dalam_daerah JOIN tb_pekerjaan on tb_sppd_dalam_daerah.id_pekerjaan=tb_pekerjaan.id_pekerjaan";
      return $this->db->query($query)->result_array();
   }

   public function getlokasidalam($id)
   {
          
      $this->db->where('id_permohonan_dalam', $id);
      $query = $this->db->get('tb_permohonan_dalam');

      foreach($query->result() as $row)
      {
         $id_sppd_dalam = $row->id_sppd_dalam;

         $this->db->where('id_sppd_dalam', $id_sppd_dalam);
         $quer = $this->db->get('tb_sppd_dalam_daerah');

         foreach($quer->result() as $ro)
         {
            $id_biaya = $ro->id_biaya;
         }
      }

      return $this->db->get_where('tb_biaya', ['id_biaya' => $id_biaya])->row_array();

   }

   public function getlokasisppddalam($id)
   {
          
      $this->db->where('id_sppd_dalam', $id);
      $query = $this->db->get('tb_sppd_dalam_daerah');

      foreach($query->result() as $row)
      {
         $id_biaya = $row->id_biaya;

      }

      return $this->db->get_where('tb_biaya', ['id_biaya' => $id_biaya])->row_array();

   }

   public function gethasillhpd($id)
   {
          
      return $this->db->get_where('tb_lhpd_dalam', ['id_buat_sppd_dalam' => $id])->row_array();

   }

    public function getallgrafikdalam()
   {
          
      $data = $this->db->query("select * from tb_buat_sppd_dalam");
      return $data->result();

   }

    public function jmlmasukdalam()
   {

               $this->db->where('status', 'sppd sedang dibuatkan');
        $query = $this->db->get('tb_permohonan_dalam');
          if($query->num_rows()>0)
          {
            return $query->num_rows();
          }
          else
          {
            return 0;
          }

   }

   public function getjmlmasuk()
   {
          
      $query = "SELECT tb_permohonan_dalam.*, tb_sppd_dalam_daerah.*, tb_pekerjaan.*, tb_biaya.* from tb_permohonan_dalam join tb_sppd_dalam_daerah on tb_permohonan_dalam.id_sppd_dalam=tb_sppd_dalam_daerah.id_sppd_dalam join tb_pekerjaan on tb_sppd_dalam_daerah.id_pekerjaan=tb_pekerjaan.id_pekerjaan join tb_biaya on tb_sppd_dalam_daerah.id_biaya=tb_biaya.id_biaya where tb_permohonan_dalam.status='sppd sedang dibuatkan'";
      return $this->db->query($query)->result_array();
   }

   public function insertdok($data, $table)
   {
      $this->db->insert($table, $data);
   }

   public function gettampildok($id)
   {
          
      $query = "SELECT tb_upload_dalam.*, tb_buat_sppd_dalam.* FROM tb_upload_dalam JOIN tb_buat_sppd_dalam on tb_upload_dalam.id_buat_sppd_dalam=tb_buat_sppd_dalam.id_buat_sppd_dalam where tb_upload_dalam.id_buat_sppd_dalam='$id'";
      return $this->db->query($query)->result_array();
   }

}

?>