<?php

if(isset($_POST['update']))
{   
    $connect = mysqli_connect("localhost", "root", "", "jualbeliakungame");

    $id_akun = $_POST['id_akun'];
    $id_penjual = $_POST['id_penjual'];
    $nama=$_POST['nama'];
    $harga=$_POST['harga'];
    $spesifikasi=$_POST['spesifikasi'];
    $result = mysqli_query($connect, "UPDATE AkunGame SET id_akun='$id_akun', id_penjual='$id_penjual' nama='$nama',
     harga='$harga', spesifikasi='$spesifikasi', WHERE id_akun='$id_akun'");
    header("Location: homepenjual.php");

    if($result)
    {
        echo 'Data Telah Di Update';
    }else{
        echo 'Gagal Update';
    }
    mysqli_close($connect);
}
?>