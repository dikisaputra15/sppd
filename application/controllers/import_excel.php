<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class import_excel extends CI_Controller
{
    function __construct()
    {

    	parent::__construct();
    	$this->load->model('Model_excel');
 
    }

     public function index()
    {
    	$data = array(
    		'data_pelanggan' => $this->Model_excel->readpelanggan()
    	);

    	$this->load->view('admin/pelanggan',$data);
    }

    public function unggah()
    {

          $filename = $_FILES['file']['name'];

          $config['upload_path']          = './assets/';
          $config['allowed_types']        = 'xls|xlsx|csv';
          $config['max_size']             = 10000;

         $this->load->library('upload', $config);

         if ( ! $this->upload->do_upload('file'))
         {
         	$this->upload->display_errors();
         	die();
         }

         $inputfilename = './assets/'.$filename;

         try{
         	$inputfiletype = PHPExcel_IOFactory::identify($inputfilename);
         	$objreader = PHPExcel_IOFactory::createReader($inputfiletype);
         	$objPHPExcel = $objreader->load($inputfilename);
         }catch (Exception $e){
         	die('error');
         }

         $sheet = $objPHPExcel->getsheet(0);
         $highestrow = $sheet->gethighestrow();
         $highestcolumn = $sheet->gethighestcolumn();

        $query = $this->db->query("select * from tb_sla");

        $x = 0; 
        foreach ($query->result_array() as $row)
        {
                $jenis[$x] = $row['jenis'];
                $durasi[$x] = $row['durasi'];
                $x++;
        }

       

        $jmlsla = $this->db->query("SELECT jenis FROM tb_sla");
        $jml = $jmlsla->num_rows();

        $tglsekarang = date('Y-m-d');
       
         for ($row=2; $row <= $highestrow; $row++) { 
         	$rowdata = $sheet->rangeToArray('A'.$row.':'.$highestcolumn.$row,NULL,TRUE,FALSE);
            
            $tglbayar = PHPExcel_Style_NumberFormat::toFormattedString($rowdata[0][10], 'YYYY-MM-DD');
            $tanggal1 = new DateTime($tglbayar);
            $tanggal2 = new DateTime();
            $hasildurasi = $tanggal2->diff($tanggal1)->format("%a");

            for ($i=0; $i < $jml ; $i++) { 
                if($rowdata[0][2]==$jenis[$i]){
                    $durasisla = $durasi[$i];
                }
                if($rowdata[0][2]==""){
                    $rowdata[0][2] = "Tanpa Perluasan";
                    $durasisla = 5;
                }
                 $persentase = $hasildurasi / $durasisla *100;

                 if($persentase > 100){
                     $status = "Terlewat SLA Langsung Eksekusi";
                  }
                  else if($persentase >= 75 and $persentase <=100 ){
                     $status = "Segera Eksekusi";
                  }else if($persentase >= 50 and $persentase <=75){
                     $status = "Waspada";
                  }else{
                     $status = "Hati-Hati";
                  }
            }

            $hsl = $rowdata[0][0];
            $count = $this->db->query("SELECT no_agenda FROM tb_pelanggan where no_agenda='$hsl'");
            $hasilcount = $count->num_rows();


            if($hasilcount < 1){

                $data = array(
                    'no_agenda' => $rowdata[0][0],
                    'id_pel' => $rowdata[0][1],
                    'jenis_sla' => $rowdata[0][2],
                    'durasi_sla' => $durasisla,
                    'nama_pelanggan' => $rowdata[0][3],
                    'alamat' => $rowdata[0][4],
                    'jenis_transaksi' => $rowdata[0][5],
                    'tarif_lama' => $rowdata[0][6],
                    'tarif_baru' => $rowdata[0][7],
                    'daya_lama' => $rowdata[0][8],
                    'daya_baru' => $rowdata[0][9],
                    'tgl_bayar' => PHPExcel_Style_NumberFormat::toFormattedString($rowdata[0][10], 'YYYY-MM-DD'),
                    'unit' => $rowdata[0][11],
                    'durasi' => $hasildurasi,
                    'persentase' => $persentase,
                    'status' => $status,
                    'tgl_insert' => $tglsekarang
                );

                $this->db->insert('tb_pelanggan', $data);

            }
            else{
                $data = array(
                    'id_pel' => $rowdata[0][1],
                    'jenis_sla' => $rowdata[0][2],
                    'durasi_sla' => $durasisla,
                    'nama_pelanggan' => $rowdata[0][3],
                    'alamat' => $rowdata[0][4],
                    'jenis_transaksi' => $rowdata[0][5],
                    'tarif_lama' => $rowdata[0][6],
                    'tarif_baru' => $rowdata[0][7],
                    'daya_lama' => $rowdata[0][8],
                    'daya_baru' => $rowdata[0][9],
                    'tgl_bayar' => PHPExcel_Style_NumberFormat::toFormattedString($rowdata[0][10], 'YYYY-MM-DD'),
                    'unit' => $rowdata[0][11],
                    'durasi' => $hasildurasi,
                    'persentase' => $persentase,
                    'status' => $status,
                    'tgl_insert' => $tglsekarang
                );

                $this->db->where('no_agenda', $rowdata[0][0]);
                $this->db->update('tb_pelanggan', $data);
            }
				// delete image (for demo purpose only)
                $this->load->helper('file');
                delete_files('./assets/');
         }
         
         $this->db->query("update tb_pelanggan set status='selesai' where tgl_insert != '$tglsekarang'");

         $this->session->set_flashdata('flash', 'Ditambah');
         redirect('admin/pelanggan');

    }

}