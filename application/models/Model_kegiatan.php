<?php

class Model_kegiatan extends CI_Model
{
   
    public function getAllkegiatan()
   {
          
      $query = "SELECT * from tb_kegiatan";
      return $this->db->query($query)->result_array();
   }

    public function getAllkegiatanluar()
   {
          
      $query = "SELECT * from tb_kegiatan_luar";
      return $this->db->query($query)->result_array();
   }

 	public function insert_kegiatan($data, $table)
   {
      $this->db->insert($table, $data);
   }

   public function delete_kegiatan($id)
   {
      $this->db->delete('tb_kegiatan', ['no_kegiatan' => $id]);
   }

   public function delete_kegiatan_luar($id)
   {
      $this->db->delete('tb_kegiatan_luar', ['no_kegiatan' => $id]);
   }

    public function delete_gardu($id)
   {
      $this->db->delete('tb_gardu', ['nama_segmen' => $id]);
   }

    public function getkegiatanById($id)
   {
      return $this->db->get_where('tb_kegiatan', ['no_kegiatan' => $id])->row_array();
   }

   public function getkegiatanluarById($id)
   {
      return $this->db->get_where('tb_kegiatan_luar', ['no_kegiatan' => $id])->row_array();
   }

	public function updatekegiatan()
   {
      $nama_kegiatan = $this->input->post('nama_kegiatan');
      $pptk = $this->input->post('pptk');
      $koring_kegiatan = $this->input->post('koring_kegiatan');
      $pagu_anggaran = $this->input->post('pagu_anggaran');

      $data = [
         'nama_kegiatan' => $nama_kegiatan,
         'pptk' => $pptk,
         'koring_k' => $koring_kegiatan,
      	'pagu_anggaran' => $pagu_anggaran
      ];

      $this->db->update('tb_kegiatan', $data, ['no_kegiatan' => $this->input->post('no_kegiatan')]);
   }

   public function updatekegiatanluar()
   {
      $nama_kegiatan = $this->input->post('nama_kegiatan');
      $pptk = $this->input->post('pptk');
      $koring_kegiatan = $this->input->post('koring_kegiatan');
      $pagu_anggaran = $this->input->post('pagu_anggaran');

      $data = [
         'nama_kegiatan' => $nama_kegiatan,
         'pptk' => $pptk,
         'koring_k' => $koring_kegiatan,
         'pagu_anggaran' => $pagu_anggaran
      ];

      $this->db->update('tb_kegiatan_luar', $data, ['no_kegiatan_luar' => $this->input->post('no_kegiatan_luar')]);
   }

}

?>