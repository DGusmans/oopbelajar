<?php
class koneksi{
    private $host="localhost";
    private $user="root";
    private $pass="";
    private $database="test";

    public function connect(){
        $query=new mysqli($this->host, $this->user, $this->pass,
            $this->database);

        if ($query->connect_error){
            echo "Koneksi Gagal: (".$query->connect_error.")";
        }
        return $query;
    }
}