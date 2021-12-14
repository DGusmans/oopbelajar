<?php
class mobil{
    function view(){
        require_once "koneksi.php";
        $data=new koneksi();
        $koneksi=$data->connect();
        $sql="select * from mobil";
        $hasil=$koneksi->query($sql);
        while ($isi=$hasil->fetch_assoc()){
            $baris[]=$isi;
        }
        $koneksi->close();
        return $baris;

    }

}