<?php

class akses extends CI_Controller
{

   function __construct()
    {

      parent::__construct();
      $this->load->model('Model_user');
      $this->load->model('Model_role');
      $this->load->model('Model_menu');
 
    }

   public function index()
   {
      if (!$this->session->userdata('nip')) {
         redirect('auth/login');
      }else{
        $data = [
              'tittle' => 'user akses'
           ];
        $data['akses'] = $this->Model_user->getAllakses();
        $data['role'] = $this->Model_role->getAllrole();
        $data['menu'] = $this->Model_menu->getAllmenu();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/menu', $data);
        $this->load->view('user/akses', $data);
        $this->load->view('templates/footer');
      }
   }

   public function tambahakses()
   {
      $id_role = $this->input->post('id_role');
      $menu = $this->input->post('menu');

      $query = $this->db->get_where('tb_akses', array('id_role' => $id_role));

      for($i=0;$i<count($menu);$i++){
             
               $jml = 0;

              foreach ($query->result() as $row)
                {
                    $akses = $row->id_menu;
                    if ($menu[$i] ==  $akses) {
                      $jml = 1;
                    } 
                }

                if ($jml == 0) {
                   $checkbox = $menu[$i];
                   $this->Model_user->saveakses($id_role,$checkbox);
                }
      }

      $this->session->set_flashdata('flash', 'Ditambah');
      redirect('user/akses');
     
   }

   public function hapus_akses($id)
   {
      $this->Model_user->delete_akses($id);
       $this->session->set_flashdata('flash', 'DiHapus');
      redirect('user/akses');
   }

   public function edit_role($id)
   {
      $data['tittle'] = 'Edit';
      $data['role'] = $this->Model_role->getroleById($id);
      $this->form_validation->set_rules('id_role', 'id_role', 'required');
      $this->form_validation->set_rules('role', 'role', 'required');
      if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/menu', $data);
            $this->load->view('user/edit_role', $data);
            $this->load->view('templates/footer');
      } else {
         $this->Model_role->updaterole();
         $this->session->set_flashdata('flash', 'DiUbah');
         redirect('user/role');
      }
   }
   
}
