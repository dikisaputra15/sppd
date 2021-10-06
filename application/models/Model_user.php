<?php

class Model_user extends CI_Model
{
   
    public function getAlluser()
   {
          
      $query = "SELECT * from tb_user";
      return $this->db->query($query)->result_array();
   }


 	public function saveakses($id_role,$checkbox)
   {
      $query="insert into tb_akses values('',$id_role,$checkbox)";
		$this->db->query($query);
      
   }

   public function delete_akses($id)
   {
      $this->db->delete('tb_akses', ['id_akses' => $id]);
   }

    public function getroleById($id)
   {
      return $this->db->get_where('tb_role', ['id_role' => $id])->row_array();
   }

	public function updaterole()
   {
      $role = $this->input->post('role');

      $data = [
      	'role' => $role
      ];

      $this->db->update('tb_role', $data, ['id_role' => $this->input->post('id_role')]);
   }

   public function insert_user($data, $table)
   {
      $this->db->insert($table, $data);
   }

    public function getuserById($id)
   {
      return $this->db->get_where('tb_user', ['id_user' => $id])->row_array();
   }

   public function updateuser()
   {
      $nip = $this->input->post('nip');
      $password = $this->input->post('password');
      $nama_lengkap = $this->input->post('nama_lengkap');
      $role_user = $this->input->post('role_user');

      $data = [
      	'nip' => $nip,
      	'password' => $password,
      	'nama_lengkap' => $nama_lengkap,
        'role_user' => $role_user
      ];

      $this->db->update('tb_user', $data, ['id_user' => $this->input->post('id_user')]);
   }

    public function delete_user($id)
   {
      $this->db->delete('tb_user', ['id_user' => $id]);
   }

    public function getaksesById($id_role)
   {
          
      return $this->db->get_where('tb_akses', ['id_role' => $id_role])->row_array();

   }


}

?>