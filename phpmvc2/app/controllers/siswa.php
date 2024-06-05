<?php

class Siswa extends Controller {
    public function index($nama = '', $pekerjaan = '')
    {
        $data['judul'] = 'Halaman Siswa';
        $data['siswa'] = $this->model('Siswa_model')->getDataSiswa();

        $this->view('temp/header', $data);
        $this->view('siswa/index', $data);
        $this->view('temp/footer', $data);
    }

    public function tambah() 
    {
        $data['judul'] = 'Halaman Siswa';

        $this->view('temp/header', $data);
        $this->view('siswa/tambah', $data);
        $this->view('temp/footer', $data);
    }
    
    public function tambahData(){
        if ($this->model('Siswa_model')->getCheckSiswa($_POST['nis']) < 1) {
            if ($this->model('Siswa_model')->tambahDataSiswa($_POST) > 0) {
                Flasher::setFlash('berhasil', 'ditambahkan', 'success');
                header('Location: ' . BASEURL . '/siswa');
                // echo "<script type='text/javascript'>
                // alert('Simpan Data Berhasil');
                // window.location='". BASEURL ."/buku';
                // </script>";
                
                exit;
            } else {
                Flasher::setFlash('gagal', 'ditambahkan', 'danger');
                header('Location: ' . BASEURL . '/siswa');
                exit;
            }
        }else{
            Flasher::setFlash('NIS', 'sudah terdaftar', 'danger');
            header('Location: ' . BASEURL . '/siswa/tambah');
        }
        // echo $this->model('Siswa_model')->getCheckSiswa($_POST['nis']);
    }

    // Pakain Halaman
    public function edit($id) 
    {
        $data['judul'] = 'Halaman Siswa';
        $data['siswa'] = $this->model('Siswa_model')->getEditDataSiswa($id);
        

        $this->view('temp/header', $data);
        $this->view('siswa/edit', $data);
        $this->view('temp/footer', $data);
    }

    public function editData(){
        if ($this->model('Siswa_model')->editDataSiswa($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/siswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/siswa');
            exit;
        }
    }

    // // Aktifkan kalau Pakai Modal
    // public function ambilData(){
    //     echo json_encode($this->model('Buku_model')->getEditDataBuku($_POST['id_buku']));
    // }


    public function deleteData($id){
        if ($this->model('Siswa_model')->deleteDataSiswa($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/siswa');
            // echo "<script type='text/javascript'>
            // alert('Simpan Data Berhasil');
            // window.location='". BASEURL ."/buku';
            // </script>";
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/siswa');
            exit;
        }
    }

    // public function searching(){
    //     $data['judul'] = 'Halaman Buku';
    //     $data['buku'] = $this->model('Buku_model')->getDataBukuSearching($_POST['cari_judul']);
    //     // header('Location: ' . BASEURL . '/buku');
    //     $this->view('temp/header', $data);
    //     $this->view('buku/index', $data);
    // }
}

?>