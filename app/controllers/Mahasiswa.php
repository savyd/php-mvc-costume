<?php

class Mahasiswa extends Controller {
    public function index()
    {
        $data['judul'] = 'Data Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa(); 
        $this->view('tamplates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('tamplates/footer');
    }
}