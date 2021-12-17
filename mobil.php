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
    function tambah($merek,$tipe,$plat){
        require_once "koneksi.php";
        $data=new koneksi();
        $koneksi=$data->connect();

        $merek=$koneksi->real_escape_string($merek);
        $tipe=$koneksi->real_escape_string($tipe);
        $plat=$koneksi->real_escape_string($plat);

        $query="INSERT INTO mobil (Merek,Tipe,Platno) 
                VALUES ('$merek','$tipe','$plat' )";
        $eksekusi=$koneksi->query($query);
        header("Location:tampilmobil.php");





    }

}