<?php

class About extends Controller {
    public function index($nama = 'david', $status = 'mahasiswa', $umur = 22) {
        $data['nama']=$nama;
        $data['status']=$status;
        $data['umur']=$umur;
        $data['judul'] = 'About Me';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page() {
        $data['judul'] = 'Pages';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}