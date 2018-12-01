<?php

class Database
{
    private static $INSTANCE = null;
    private $mysqli,
        $HOST = "localhost",
        $USER = "root",
        $PASS = "",
        $DBNAME = "belajarphp";
    public function __construct()
    {
        $this->mysqli = new mysqli($this->HOST, $this->USER, $this->PASS, $this->DBNAME);
        if (mysqli_connect_error()) {
            die("Gagal Koneksi Ke Database");
        }
    }
    public static function getInstance()
    {
        if (!isset(self::$INSTANCE)) {
            self::$INSTANCE = new Database();
        }

        return self::$INSTANCE;
    }

    public function tambah($dbname, $table, $field){
        $kolom = implode(',', array_keys($field));
        $arrayValues = array();

        $i = 0;
        foreach ($field as $key => $value) {
            if (is_int($value)) {
                $arrayValues[$i] = $value;
            }else {
                $arrayValues[$i] = "'" . $value . "'";
            }
            $i++;

        }
        $values = implode(',', $arrayValues);
        $query = "INSERT INTO $dbname.$table ($kolom) VALUES ($values)";
        if($this->mysqli->query($query)) return true;
        else return false;
    }

    public function pilih($dbname, $table, $colomn, $values){
        if (!is_int($values))
            $values = "'" . $values . "'";

        $query = "SELECT * FROM $dbname.$table WHERE $colomn = $values";
        $hasil = $this->mysqli->query($query);
        while ($data_mahasiswa =  $hasil->fetch_assoc()) {
            return $data_mahasiswa;
        }
    }


}


?>
