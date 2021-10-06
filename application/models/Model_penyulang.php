<?php

class Model_penyulang extends CI_Model
{
   
    public function getAllpenyulang()
   {
          
      $query = "SELECT * from tb_penyulang";
      return $this->db->query($query)->result_array();
   }

 	public function insert_penyulang($data, $table)
   {
      $this->db->insert($table, $data);
   }

   public function delete_penyulang($id)
   {
      $this->db->delete('tb_penyulang', ['id_penyulang' => $id]);
   }

    public function delete_segmen($id)
   {
      $this->db->delete('tb_segmen', ['nama_penyulang' => $id]);
   }

   public function delete_gardu($id)
   {
      $this->db->delete('tb_gardu', ['id_penyulang' => $id]);
   }

    public function getpenyulangById($id)
   {
      return $this->db->get_where('tb_penyulang', ['id_penyulang' => $id])->row_array();
   }

	public function updatepenyulang()
   {
      $nama_penyulang = $this->input->post('nama_penyulang');

      $data = [
      	'nama_penyulang' => $nama_penyulang
      ];

      $this->db->update('tb_penyulang', $data, ['id_penyulang' => $this->input->post('id_penyulang')]);
   }

}

?>