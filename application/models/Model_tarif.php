<?php

class Model_tarif extends CI_Model
{
   
    public function getAlltarif()
   {
          
      $query = "SELECT * from tb_tarif";
      return $this->db->query($query)->result_array();
   }

 	public function insert_tarif($data, $table)
   {
      $this->db->insert($table, $data);
   }

   public function delete_tarif($id)
   {
      $this->db->delete('tb_tarif', ['id_tarif' => $id]);
   }

    public function gettarifById($id)
   {
      return $this->db->get_where('tb_tarif', ['id_tarif' => $id])->row_array();
   }

	public function updatetarif()
   {
      $nama_tarif = $this->input->post('nama_tarif');

      $data = [
      	'nama_tarif' => $nama_tarif
      ];

      $this->db->update('tb_tarif', $data, ['id_tarif' => $this->input->post('id_tarif')]);
   }

   public function tarif()
   {    
      $this->db->order_by("nama_tarif", "ASC");
      $query = $this->db->get("tb_tarif");
      return $query->result();  
   }

    public function fetch_daya($id)
   {    
       $query = $this->db->get_where('tb_daya', array('id_tarif' => $id));
       return $query;
   }

}

?>