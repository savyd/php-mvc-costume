<?php

class About extends Controller {
    public function index($nama = 'Sayid', $pekerjaan = 'Web Developer')
    {
        $data['judul'] = 'About';
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $this->view('tamplates/header', $data);
        $this->view('about/index', $data);
        $this->view('tamplates/footer');
    }

    public function page()
    {
        $data['judul'] = 'Page';
        $this->view('tamplates/header', $data);
        $this->view('about/page');
        $this->view('tamplates/footer');
    }
}