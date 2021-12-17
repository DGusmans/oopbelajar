<?php
require_once "mobil.php";
if (isset($_POST['simpan'])) {

    $merek=trim($_POST['merek']);
    $tipe=trim($_POST['tipe']);
    $plat=trim($_POST['plat']);
    $mobil=new mobil();


    $mobil->tambah($merek,$tipe,$plat);

}
