<?php

class Model_program extends CI_Model
{
   
    public function getAllprogram()
   {
          
      $query = "SELECT * from tb_program";
      return $this->db->query($query)->result_array();
   }

 	public function insert_program($data, $table)
   {
      $this->db->insert($table, $data);
   }

   public function delete_program($id)
   {
      $this->db->delete('tb_program', ['kode_program' => $id]);
   }

    public function getprogramById($id)
   {
      return $this->db->get_where('tb_program', ['kode_program' => $id])->row_array();
   }

	public function updateprogram()
   {
      $nama_program = $this->input->post('nama_program');

      $data = [
      	'nama_program' => $nama_program
      ];

      $this->db->update('tb_program', $data, ['kode_program' => $this->input->post('kode_program')]);
   }

}

?>