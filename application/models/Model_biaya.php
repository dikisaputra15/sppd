<?php

class Model_biaya extends CI_Model
{
   
    public function getAllbiaya()
   {
          
      $query = "SELECT * from tb_biaya";
      return $this->db->query($query)->result_array();
   }

    public function getAllbiayaluar()
   {
          
      $query = "SELECT * from tb_biaya_luar";
      return $this->db->query($query)->result_array();
   }

   public function insert_biaya($data, $table)
   {
      $this->db->insert($table, $data);
   }

   public function insert_biaya_luar($data, $table)
   {
      $this->db->insert($table, $data);
   }

   public function delete_biaya($id)
   {
      $this->db->delete('tb_biaya', ['id_biaya' => $id]);
   }

   public function delete_biayaluar($id)
   {
      $this->db->delete('tb_biaya_luar', ['id_biaya_luar' => $id]);
   }

    public function getbiayaById($id)
   {
      return $this->db->get_where('tb_biaya', ['id_biaya' => $id])->row_array();
   }

  public function getbiayaluarById($id)
   {
      return $this->db->get_where('tb_biaya_luar', ['id_biaya_luar' => $id])->row_array();
   }

   public function updatebiaya()
   {
      $jarak = $this->input->post('jarak');
      $lokasi = $this->input->post('lokasi');
      $uang_gol1 = $this->input->post('uang_gol1');
      $uang_gol2 = $this->input->post('uang_gol2');
      $uang_gol3s = $this->input->post('uang_gol3s');
      $uang_gol3k = $this->input->post('uang_gol3k');
      $uang_gol4 = $this->input->post('uang_gol4');

      $data = [
         'jarak' => $jarak,
         'lokasi' => $lokasi,
         'uang_gol1' => $uang_gol1,
         'uang_gol2' => $uang_gol2,
         'uang_gol3s' => $uang_gol3s,
         'uang_gol3k' => $uang_gol3k,
         'uang_gol4' => $uang_gol4
      ];

      $this->db->update('tb_biaya', $data, ['id_biaya' => $this->input->post('id_biaya')]);
   }

   public function updatebiayaluar()
   {
      $jarak = $this->input->post('jarak');
      $lokasi = $this->input->post('lokasi');
      $uang_gol1 = $this->input->post('uang_gol1');
      $uang_gol2 = $this->input->post('uang_gol2');
      $uang_gol3s = $this->input->post('uang_gol3s');
      $uang_gol3k = $this->input->post('uang_gol3k');
      $uang_gol4 = $this->input->post('uang_gol4');

      $data = [
         'jarak' => $jarak,
         'lokasi' => $lokasi,
         'uang_gol1' => $uang_gol1,
         'uang_gol2' => $uang_gol2,
         'uang_gol3s' => $uang_gol3s,
         'uang_gol3k' => $uang_gol3k,
         'uang_gol4' => $uang_gol4
      ];

      $this->db->update('tb_biaya_luar', $data, ['id_biaya_luar' => $this->input->post('id_biaya_luar')]);
   }

    public function getgol($id)
   {
      $query = $this->db->query("SELECT id_biaya from tb_sppd_dalam_daerah where id_sppd_dalam='$id'");

      foreach ($query->result() as $row)
      {
              $id_biaya = $row->id_biaya;
      }

      $query = "SELECT * from tb_biaya where id_biaya='$id_biaya'";
      return $this->db->query($query)->row_array();
   }

   public function getgolluar($id)
   {
      // $query = $this->db->query("SELECT id_biaya from tb_sppd_luar_daerah where id_sppd_luar='$id'");

      // foreach ($query->result() as $row)
      // {
      //         $id_biaya = $row->id_biaya;
      // }

      // $query = "SELECT * from tb_biaya_luar where id_biaya_luar='$id_biaya'";
      // return $this->db->query($query)->row_array();
      $query = "SELECT tb_permohonan_luar.*, tb_sppd_luar_daerah.*, tb_biaya_luar.* from tb_permohonan_luar join tb_sppd_luar_daerah on tb_permohonan_luar.id_sppd_luar=tb_sppd_luar_daerah.id_sppd_luar join tb_biaya_luar on tb_sppd_luar_daerah.id_biaya=tb_biaya_luar.id_biaya_luar where tb_permohonan_luar.status!='sppd sudah dibuat' and tb_sppd_luar_daerah.no_kegiatan='$id'";
      return $this->db->query($query)->row_array();
   }

}

?>