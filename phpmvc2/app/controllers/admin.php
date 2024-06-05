<?php

class Admin extends Controller {
    public function index($nama = '', $pekerjaan = '')
    {
        $data['judul'] = 'Halaman Admin';
        $data['admin'] = $this->model('Admin_model')->getDataAdmin();

        $this->view('temp/header', $data);
        $this->view('admin/index', $data);
        $this->view('temp/footer', $data);
    }

    public function tambah() 
    {
        $data['judul'] = 'Halaman Admin';

        $this->view('temp/header', $data);
        $this->view('admin/tambah', $data);
        $this->view('temp/footer', $data);
    }
    
    public function tambahData(){
        if ($this->model('Admin_model')->tambahDataAdmin($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/admin');
            // echo "<script type='text/javascript'>
            // alert('Simpan Data Berhasil');
            // window.location='". BASEURL ."/buku';
            // </script>";
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/admin');
            exit;
        }
    }

    // Pakain Halaman
    public function edit($id) 
    {
        $data['judul'] = 'Halaman Admin';
        $data['admin'] = $this->model('Admin_model')->getEditDataAdmin($id);
        

        $this->view('temp/header', $data);
        $this->view('admin/edit', $data);
        $this->view('temp/footer', $data);
    }

    public function editData(){
        if ($this->model('Admin_model')->editDataAdmin($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/admin');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/admin');
            exit;
        }
    }

    // // Aktifkan kalau Pakai Modal
    // public function ambilData(){
    //     echo json_encode($this->model('Buku_model')->getEditDataBuku($_POST['id_buku']));
    // }


    public function deleteData($id){
        if ($this->model('Admin_model')->deleteDataAdmin($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/admin');
            // echo "<script type='text/javascript'>
            // alert('Simpan Data Berhasil');
            // window.location='". BASEURL ."/buku';
            // </script>";
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/admin');
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