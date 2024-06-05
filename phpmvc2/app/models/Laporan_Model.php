<?php

class Laporan_model {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getDataLaporan(){
        $this->db->query('SELECT * FROM tb_siswa');
        return $this->db->resultSet();
    }

    public function CariSiswa($data){
        $this->db->query('SELECT * FROM tb_siswa WHERE kelas = :kelas');
        $this->db->bind('kelas', $data);
        return $this->db->resultSet();
    }

    
}

?>
