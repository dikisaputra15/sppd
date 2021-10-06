<?php

class Model_unitinduk extends CI_Model
{
   
    public function getAllunitinduk()
   {
          
      $query = "SELECT * from tb_unit_induk";
      return $this->db->query($query)->result_array();
   }

 	public function insert_unitinduk($data, $table)
   {
      $this->db->insert($table, $data);
   }

   public function delete_unitinduk($id)
   {
      $this->db->delete('tb_unit_induk', ['id_unit_induk' => $id]);
   }

    public function getunitindukById($id)
   {
      return $this->db->get_where('tb_unit_induk', ['id_unit_induk' => $id])->row_array();
   }

	public function updateunitinduk()
   {
      $nama_unit_induk = $this->input->post('nama_unit_induk');

      $data = [
      	'nama_unit_induk' => $nama_unit_induk
      ];

      $this->db->update('tb_unit_induk', $data, ['id_unit_induk' => $this->input->post('id_unit_induk')]);
   }


    function unit_induk(){
        $this->db->order_by("nama_unit_induk", "ASC");
        $query = $this->db->get("tb_unit_induk");
        return $query->result();  
    }
 
    function unit($id){
        $query = $this->db->get_where('tb_unit', array('unit_induk' => $id));
        return $query;
    }

}

?>