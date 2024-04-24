<?php
class Matakuliah extends CI_Controller
{
   public function index()
   {  
    $this->load->view('view_form_matakuliah');
   }
   public function cetak()
   {
      $this->form_validation->set_rules('kode', 'Kode_Matakuliah', 'required|min_length[3]',[
         'required' => 'Kode Matakuliah harus diiisi',
         'min_length' => 'Kode terlalu pendek'
      ]);
      
      $this->form_validation->set_rules('nama', 'Nama_Matakuliah', 'required|min_length[3]',[
         'required' => 'Nama Matakuliah harus diiisi',
         'min_length' => 'Nama terlalu pendek'
      ]);

      if ($this->form_validation->run() != true){
         $this->load->view('view_form_matakuliah');
      }
      else {
         $data = [
            'kode' => $this->input->post('kode'),
            'nama' => $this->input->post('nama'),
            'sks' => $this->input->post('sks'),
         ];

         $this->load->view('view_form_matakuliah', $data);
      }
   }
}