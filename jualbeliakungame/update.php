<html>
<head>    
    <head>
	<title>Edit</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
</head>
</head>
<body>
    <h2 align='center' line-height='50%'>Edit Data Akun</h2>
    <?php
    $connect = mysqli_connect("localhost", "root", "", "jualbeliakungame");
    $id_akun = $_GET['update'];
    $result = mysqli_query($connect, "SELECT * FROM AkunGame WHERE id_akun='$id_akun'");
    while($user_data = mysqli_fetch_array($result))
    {
    ?>
    <div class="container" style="width:500px;"> 
    <form action="updateproses.php" method="post" class="form-control"><br>  
           Id Akun  :<input type="text" name="id_akun" ><br>
           Id Penjual :<input type="text" name="id_penjual" ><br>
           Nama Game : <input type="text" name="nama" ><br>
           Harga : <input type="text" name="harga" ><br>
           Spesifikasi :<input type="text" name="spesifikasi" >
		   <input type="submit" name="update"  value="update">
    </form>
    <?php } ?>
</div>
</body>
</html>
