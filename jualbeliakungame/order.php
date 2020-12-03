
<?php  
 $connect = mysqli_connect("localhost", "root", "", "jualbeliakungame");  

 ?>

<!DOCTYPE html>
<html>  
      <head>  
           <title>Menambahkan Order</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
<body>
    <br /><br />
    <div class="container" style="width:400px;">
    <h3 align = center>Input Keterangan Order</h3>
	<form action ="order.php" method="post" class="form-control">
           <label>Username</label>
           <input type="text" name="id_pembeli" class="form-control">
           <br />
            <label>Tanggal Hari Ini</label>
           <input type="text" name="tgl_order" class="form-control">
           <br />
            <input type="submit" name="submit" class="submit" value="simpan"></td>
            <a href="homepenjual.php">BACK</a>
    </form>
    <?php
    if(isset($_POST['submit'])) {
        $user = $_POST['id_pembeli'];
        $tangal = $_POST['tgl_order'];
        $connect = mysqli_connect("localhost", "root", "", "jualbeliakungame");  

        $result = mysqli_query($connect, "INSERT INTO order (id_pembeli, tgl_order) VALUES('$id_pembeli','$tgl_order')");
        echo "Account added successfully";
        header("Location: inner_join.php");
    }
    ?>
    
</body>

</html>




