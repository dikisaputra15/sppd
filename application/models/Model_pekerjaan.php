<?php

class Model_pekerjaan extends CI_Model
{
   
    public function getAllpekerjaan()
   {
          
      $query = "SELECT tb_pekerjaan.*, tb_biaya.* FROM tb_pekerjaan JOIN tb_biaya on tb_pekerjaan.id_biaya=tb_biaya.id_biaya";
      return $this->db->query($query)->result_array();
   }

    public function getAllpekerjaanluar()
   {
          
      $query = "SELECT tb_pekerjaan_luar.*, tb_biaya_luar.* FROM tb_pekerjaan_luar JOIN tb_biaya_luar on tb_pekerjaan_luar.id_biaya_luar=tb_biaya_luar.id_biaya_luar";
      return $this->db->query($query)->result_array();
   }

 	public function insert_pekerjaan($data, $table)
   {
      $this->db->insert($table, $data);
   }

   public function insert_pekerjaan_luar($data, $table)
   {
      $this->db->insert($table, $data);
   }

   public function delete_pekerjaan($id)
   {
      $this->db->delete('tb_pekerjaan', ['id_pekerjaan' => $id]);
   }

   public function delete_pekerjaan_luar($id)
   {
      $this->db->delete('tb_pekerjaan_luar', ['id_pekerjaan_luar' => $id]);
   }

    public function getpekerjaanById($id)
   {
      return $this->db->get_where('tb_pekerjaan', ['id_pekerjaan' => $id])->row_array();
   }

    public function getpekerjaanluarById($id)
   {
      return $this->db->get_where('tb_pekerjaan_luar', ['id_pekerjaan_luar' => $id])->row_array();
   }

	public function updatepekerjaan()
   {
      $nama_pekerjaan = $this->input->post('nama_pekerjaan');
      $lokasi = $this->input->post('lokasi');

      $data = [
         'nama_pekerjaan' => $nama_pekerjaan,
         'id_biaya' => $lokasi
      ];

      $this->db->update('tb_pekerjaan', $data, ['id_pekerjaan' => $this->input->post('id_pekerjaan')]);
   }

   public function updatepekerjaanluar()
   {
      $nama_pekerjaan_luar = $this->input->post('nama_pekerjaan_luar');
      $lokasi = $this->input->post('lokasi');

      $data = [
         'nama_pekerjaan_luar' => $nama_pekerjaan_luar,
         'id_biaya_luar' => $lokasi
      ];

      $this->db->update('tb_pekerjaan_luar', $data, ['id_pekerjaan_luar' => $this->input->post('id_pekerjaan_luar')]);
   }

}

?>