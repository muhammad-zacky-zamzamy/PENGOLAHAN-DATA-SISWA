<?php

class Admin_model {
    private $db;
    private $username = 'Maulana';

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAdmin()
    {
        return $this->username;
    }

    public function getDataAdmin(){
        $this->db->query('SELECT * FROM tb_admin');
        return $this->db->resultSet();
    }

    public function getEditDataAdmin($data){
        $this->db->query('SELECT * FROM tb_admin WHERE id_admin = :id_admin ');
        $this->db->bind('id_admin', $data);
        return $this->db->resultSet();
    }

    public function tambahDataAdmin($data){

        $this->db->query("INSERT INTO tb_admin (
                        username, 
                        password
                        ) VALUES ( 
                        :username, 
                        :password)");

        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function editDataAdmin($data){

        $this->db->query("UPDATE tb_admin SET
                            username=:username,
                            password=:password WHERE id_admin = :id_admin ");

        $this->db->bind('id_admin', $data['id_admin']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);

        $this->db->execute();

        return $this->db->rowCount();

    }

    public function deleteDataAdmin($id){
        $this->db->query("DELETE FROM tb_admin WHERE id_admin = :id_admin");

        $this->db->bind('id_admin', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}

?>