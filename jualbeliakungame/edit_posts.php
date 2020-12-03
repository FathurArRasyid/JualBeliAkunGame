<?php
$connect = mysqli_connect("localhost", "root", "", "jualbeliakungame"); 

$nama = $_POST['nama'];
$harga  = $_POST['harga'];
$spesifikasi  = $_POST['spesifikasi'];

$id = $_POST['id'];

$sql = "UPDATE posts SET title='$title', body = '$body', tags ='$tags' WHERE id_akun= '$id'";

if (mysqli_query($connect, $sql)) {
    header("location: homepenjual.php");
} else {
    echo "Gagal Update Data $sql. " . mysqli_error($connect);
}
mysqli_close($link);