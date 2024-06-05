<?php

class Laporan extends Controller {
    public function index()
    {
        $data['judul'] = 'Halaman Laporan';
        // $data['laporan'] = $this->model('Laporan_model')->getDataLaporan();

        $this->view('temp/header', $data);
        $this->view('laporan/index', $data);
        $this->view('temp/footer', $data);
    }

    public function tambah() 
    {
        $data['judul'] = 'Halaman User';

        $this->view('temp/header', $data);
        $this->view('user/tambah', $data);
        $this->view('temp/footer', $data);
    }
    
    public function cari(){
        $data['judul'] = 'Halaman Laporan';
        $data['laporan'] = $this->model('Laporan_model')->CariSiswa($_POST['kelas']);
        $data['kelas'] = $_POST['kelas'];

        $this->view('temp/header', $data);
        $this->view('laporan/index', $data);
        $this->view('temp/footer', $data);
    }
}

?>