<?php

class User_model {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getDataUser(){
        $this->db->query('SELECT * FROM tb_user');
        return $this->db->resultSet();
    }

    public function getEditDataUser($data){
        $this->db->query('SELECT * FROM tb_user WHERE id_user = :id_user ');
        $this->db->bind('id_user', $data);
        return $this->db->resultSet();
    }

    public function tambahDataUser($data){

        $this->db->query("INSERT INTO tb_user (
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

    public function editDataUser($data){

        $this->db->query("UPDATE tb_user SET
                            username=:username,
                            password=:password WHERE id_user = :id_user ");

        $this->db->bind('id_user', $data['id_user']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);

        $this->db->execute();

        return $this->db->rowCount();

    }

    public function deleteDataUser($id){
        $this->db->query("DELETE FROM tb_user WHERE id_user = :id_user");

        $this->db->bind('id_user', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}

?>