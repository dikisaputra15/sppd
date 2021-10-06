<?php

class Model_pegawai extends CI_Model
{
   
    public function getAllpegawai()
   {
          
      $query = "SELECT * from tb_pegawai";
      return $this->db->query($query)->result_array();
   }

   public function getfixpegawai()
   {
          
      $query = "SELECT * from tb_pegawai";
      return $this->db->query($query)->result_array();
   }

 	public function insertpegawai($data, $table)
   {
      $this->db->insert($table, $data);
   }

   public function delete_pegawai($id)
   {
      $this->db->delete('tb_pegawai', ['nip' => $id]);
   }

    public function getpegawaiById($id)
   {
      return $this->db->get_where('tb_pegawai', ['nip' => $id])->row_array();
   }

	public function updategardu()
   {
      $nama_gardu = $this->input->post('nama_gardu');
      $id_segmen = $this->input->post('id_segmen');
      $id_penyulang = $this->input->post('id_penyulang');

      $data = [
      	'nama_gardu' => $nama_gardu,
         'nama_segmen' => $id_segmen,
      	'id_penyulang' => $id_penyulang
      ];

      $this->db->update('tb_gardu', $data, ['id_gardu' => $this->input->post('id_gardu')]);
   }

}

?>