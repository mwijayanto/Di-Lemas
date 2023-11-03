<?php
class Dlemas extends CI_Controller
{
    public function index()
    {
        $this->load->view('form-dlemas');
    }

    public function cetakin()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'nis' => $this->input->post('nis'),
            'kelas' => $this->input->post('kelas'),
            'tgll' => $this->input->post('tgll'),
            'tl' => $this->input->post('tl'),
            'alamat' => $this->input->post('alamat'),
            'jk' => $this->input->post('jk'),
            'agama' => $this->input->post('agama')
            
        ];
        $this->load->view('data-dlemas', $data);
    }


    // public function cetakin()
    // {

    //     // Set validation rules for 'kode' and 'nama'
    //     $this->form_validation->set_rules('kode', 'Kode Matakuliah', 'required|min_length[3]', [
    //         'required' => 'Kode Matakuliah harus diisi',
    //         'min_length' => 'Kode terlalu pendek'
    //     ]);
    //     $this->form_validation->set_rules('nama', 'Nama Matakuliah', 'required|min_length[3]', [
    //         'required' => 'Nama Matakuliah harus diisi',
    //         'min_length' => 'Nama terlalu pendek'
    //     ]);

    //     // Check if the form data is validated
    //     if ($this->form_validation->run() === FALSE) {
    //         $this->load->view('form-dlemas');
    //     } else {
    //         // If the form data is valid, load the 'view-data-matakuliah' view
    //         $data = [
    //             'kode' => $this->input->post('kode'),
    //             'nama' => $this->input->post('nama'),
    //             'sks' => $this->input->post('sks')
    //         ];
    //         $this->load->view('data-dlemas', $data);
    //     }
    // }
}
