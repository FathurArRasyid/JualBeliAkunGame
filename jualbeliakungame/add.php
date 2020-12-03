
<?php  
 $connect = mysqli_connect("localhost", "root", "", "jualbeliakungame");  

 ?>

<!DOCTYPE html>
<html>
<head>

	<title>Tambah</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  

	</style>
</head>
<body>
<div class="container" style="width:500px;"> 
	<center><h3>TAMBAH Akun</h3></center>
	<form action="add.php" method="post" class="form-control">
        <label>ID AKUN</label>
           <input type="text" name="id_akun" class="form-control">
        <label>ID Penjual</label>
           <input type="text" name="id_penjual" class="form-control">
        <label>NAMA GAME</label>
           <input type="text" name="nama" class="form-control">
        <label>HARGA</label>
           <input type="text" name="harga" class="form-control">
        <label>SPESIFIKASI</label>
           <input type="text" name="spesifikasi" class="form-control">
        <input type="submit" name="submit" class="submit" value="simpan"></td>
        <a href="homepenjual.php">BACK</a>
        
    </form>
    <?php
    if(isset($_POST['submit'])) {
        $id_akun = $_POST['id_akun'];
        $id_penjual = $_POST['id_penjual'];
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $spesifikasi = $_POST['spesifikasi'];
        $connect = mysqli_connect("localhost", "root", "", "jualbeliakungame");  

        $result = mysqli_query($connect, "INSERT INTO AkunGame (id_akun, id_penjual, nama, harga, spesifikasi) 
        VALUES('$id_akun','$id_penjual', '$nama','$harga','$spesifikasi')");
        echo "Account added successfully";
        header("Location: homepenjual.php");
    }
    ?>
    
</body>
</html>




