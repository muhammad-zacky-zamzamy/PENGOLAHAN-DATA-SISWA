<?php

class Siswa_model {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getDataSiswa(){
        $this->db->query('SELECT * FROM tb_siswa');
        return $this->db->resultSet();
    }

    public function getCheckSiswa($data){
        $this->db->query('SELECT * FROM tb_siswa WHERE nis = :nis');
        $this->db->bind('nis', $data);
        return $this->db->rows();
    }

    public function getEditDataSiswa($data){
        $this->db->query('SELECT * FROM tb_siswa WHERE id_siswa = :id_siswa');
        $this->db->bind('id_siswa', $data);
        return $this->db->resultSet();
    }

    public function tambahDataSiswa($data){

        $this->db->query("INSERT INTO tb_siswa (
                        nis, 
                        nama,
                        kelas,
                        ttl,
                        alamat,
                        jkl,
                        agama,
                        nama_ayah,
                        nama_ibu,
                        no_hp
                        ) VALUES ( 
                        :nis, 
                        :nama,
                        :kelas,
                        :ttl,
                        :alamat,
                        :jkl,
                        :agama,
                        :nama_ayah,
                        :nama_ibu,
                        :no_hp)");

        $this->db->bind('nis', $data['nis']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('kelas', $data['kelas']);
        $this->db->bind('ttl', $data['ttl-1'] .', '. $data['ttl-2']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('jkl', $data['jkl']);
        $this->db->bind('agama', $data['agama']);
        $this->db->bind('nama_ayah', $data['nama_ayah']);
        $this->db->bind('nama_ibu', $data['nama_ibu']);
        $this->db->bind('no_hp', $data['no_hp']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function editDataSiswa($data){

        $this->db->query("UPDATE tb_siswa SET
                            nis = :nis,
                            nama = :nama,
                            kelas = :kelas,
                            ttl = :ttl,
                            alamat = :alamat,
                            jkl = :jkl,
                            agama = :agama,
                            nama_ayah = :nama_ayah,
                            nama_ibu = :nama_ibu,
                            no_hp = :no_hp WHERE id_siswa = :id_siswa ");

        $this->db->bind('id_siswa', $data['id_siswa']);
        $this->db->bind('nis', $data['nis']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('kelas', $data['kelas']);
        $this->db->bind('ttl', $data['ttl-1'] .', '. $data['ttl-2']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('jkl', $data['jkl']);
        $this->db->bind('agama', $data['agama']);
        $this->db->bind('nama_ayah', $data['nama_ayah']);
        $this->db->bind('nama_ibu', $data['nama_ibu']);
        $this->db->bind('no_hp', $data['no_hp']);

        $this->db->execute();

        return $this->db->rowCount();

    }

    public function deleteDataSiswa($id){
        $this->db->query("DELETE FROM tb_siswa WHERE id_siswa = :id_siswa");

        $this->db->bind('id_siswa', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}

?>
