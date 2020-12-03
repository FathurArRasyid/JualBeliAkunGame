<?php 
$connect = mysqli_connect("localhost", "root", "", "jualbeliakungame");  

if(isset($_GET['delete']))
{
    $id = $_GET['delete'];
    mysqli_query($connect, "DELETE FROM AkunGame WHERE id_akun='$id'");
    header("location:homepenjual.php");
}
?>