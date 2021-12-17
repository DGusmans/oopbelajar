<?php
?>

<html>
<head>
    <title> Data Mobil</title>
</head>
<body>
<<h1 align="center"> Data Mobil</h1>
<a align="center" href="formtambahmobil.php">Tambah Mobil</a>
<table border="1" align="center">
    <tr>
        <td>id</td>
        <td>Merek</td>
        <td>Tipe</td>
        <td>Plat No</td>
    </tr>
    <?php
    require_once 'mobil.php';
    $mobil=new mobil();
    $result=$mobil->view();
    foreach ($result as $data){
        echo "<tr>
        <td>$data[id]</td>
        <td>$data[Merek]</td>
        <td>$data[Tipe]</td>
        <td>$data[Platno]</td>
        <td>edit</td>
        </tr>";

    }
    ?>

</table>

</body>

</html>
