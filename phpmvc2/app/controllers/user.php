<?php

class User extends Controller {
    public function index($nama = '', $pekerjaan = '')
    {
        $data['judul'] = 'Halaman User';
        $data['user'] = $this->model('User_model')->getDataUser();

        $this->view('temp/header', $data);
        $this->view('user/index', $data);
        $this->view('temp/footer', $data);
    }

    public function tambah() 
    {
        $data['judul'] = 'Halaman User';

        $this->view('temp/header', $data);
        $this->view('user/tambah', $data);
        $this->view('temp/footer', $data);
    }
    
    public function tambahData(){
        if ($this->model('User_model')->tambahDataUser($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/user');
            // echo "<script type='text/javascript'>
            // alert('Simpan Data Berhasil');
            // window.location='". BASEURL ."/buku';
            // </script>";
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/user');
            exit;
        }
    }

    // Pakain Halaman
    public function edit($id) 
    {
        $data['judul'] = 'Halaman User';
        $data['user'] = $this->model('User_model')->getEditDataUser($id);
        

        $this->view('temp/header', $data);
        $this->view('user/edit', $data);
        $this->view('temp/footer', $data);
    }

    public function editData(){
        if ($this->model('User_model')->editDataUser($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/user');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/user');
            exit;
        }
    }

    // // Aktifkan kalau Pakai Modal
    // public function ambilData(){
    //     echo json_encode($this->model('Buku_model')->getEditDataBuku($_POST['id_buku']));
    // }


    public function deleteData($id){
        if ($this->model('User_model')->deleteDataUser($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/user');
            // echo "<script type='text/javascript'>
            // alert('Simpan Data Berhasil');
            // window.location='". BASEURL ."/buku';
            // </script>";
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/user');
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