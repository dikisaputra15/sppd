<?php

class Model_unitlayanan extends CI_Model
{
   
    public function getAllunitlayanan()
   {
          
      $query = "SELECT tb_unit_layanan.*, tb_unit_induk.id_unit_induk,tb_unit_induk.nama_unit_induk, tb_unit.id_unit,tb_unit.unit_induk,tb_unit.nama_unit
                  FROM tb_unit_layanan JOIN tb_unit_induk
                  ON tb_unit_layanan.unit_induk=tb_unit_induk.id_unit_induk join tb_unit on tb_unit_layanan.unit=tb_unit.id_unit";
      return $this->db->query($query)->result_array();
   }

 	public function insert_unitlayanan($data, $table)
   {
      $this->db->insert($table, $data);
   }

   public function delete_unitlayanan($id)
   {
      $this->db->delete('tb_unit_layanan', ['id_unit_layanan' => $id]);
   }

    public function getlayananbyid($id){
        return $this->db->get_where('tb_unit_layanan', ['id_unit_layanan' => $id])->row_array();
    }

	public function updateunitlayanan()
   {
      $unit_induk = $this->input->post('unit_induk');
      $unit = $this->input->post('unit');
      $unit_layanan = $this->input->post('unit_layanan');

      $data = [
         'unit_induk' => $unit_induk,
         'unit' => $unit,
      	'unit_layanan' => $unit_layanan
      ];

      $this->db->update('tb_unit_layanan', $data, ['id_unit_layanan' => $this->input->post('id_unit_layanan')]);
   }

   public function getbyid($id)
   {  
       $query = $this->db->get_where('tb_user', array('id_user' => $id));

           foreach ($query->result() as $row){
              $unit = $row->unit;
           }

     $quer = "SELECT * from tb_unit_layanan where unit='$unit'";
      return $this->db->query($quer)->result_array();
   }

   public function getbyidlaporan($id)
   {  
       $query = $this->db->get_where('tb_utama', array('id_utama' => $id));

           foreach ($query->result() as $row){
              $unit = $row->unit;
           }

     $quer = "SELECT * from tb_unit_layanan where unit='$unit'";
      return $this->db->query($quer)->result_array();
   }

   function fetch_unit($id_unit_induk)
   {
      $this->db->where('unit_induk', $id_unit_induk);
      $this->db->order_by('nama_unit', 'ASC');
      $query = $this->db->get('tb_unit');
      $output = '<option value="">Select Unit</option>';
      foreach($query->result() as $row)
      {
       $output .= '<option value="'.$row->id_unit.'">'.$row->nama_unit.'</option>';
      }
      return $output;
   }

     function fetch_layanan($id_unit)
   {
      $this->db->where('unit', $id_unit);
      $this->db->order_by('unit_layanan', 'ASC');
      $query = $this->db->get('tb_unit_layanan');
      $output = '<option value="">Select Unit Layanan</option>';
      foreach($query->result() as $row)
      {
       $output .= '<option value="'.$row->id_unit_layanan.'">'.$row->unit_layanan.'</option>';
      }
      return $output;
   }

}

?>