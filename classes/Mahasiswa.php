<?php

class Mahasiswa{
    private $_db;

    public function __construct()
    {
        $this->_db = Database::getInstance();
    }

    public function register_user($field = array()){
        if ($this->_db->tambah('belajarphp', 'mahasiswa' , $field))
            header('Location: index.php');
        else
            header('Location: register.php?tambah=gagal');
    }

    public function login_user($username, $password) {
        $data = $this->_db->pilih('belajarphp', 'mahasiswa', 'username ', $username);
        var_dump($data['password']);
        if (password_verify($password, $data['password'])) {
            return true;
        }else{
            return false;
        }
    }
}