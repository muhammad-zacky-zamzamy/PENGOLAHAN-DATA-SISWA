<?php

class Home extends Controller {
    public function index()
    {
        $data['judul'] = 'Halaman Home';
        $data['nama'] = $this->model('Admin_model')->getAdmin();
        $this->view('temp/header', $data);
        $this->view('home/index', $data);
    }

}

?>