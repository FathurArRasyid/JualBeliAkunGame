<?php  
 $connect = mysqli_connect("localhost", "root", "", "jualbeliakungame");  
 session_start();  
 ?>
<!doctype html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title> Home Page</title>
    </head>
        <body>
        <div class="container" style="width:800px;">  
            <h3 align="center">Welcome</h3>
            <br />
            <h3 align="center">Daftar Akun Game Anda</h3>
            <a href="add.php">Add Account For Sell</a>
            <table class="table">
            <thead class="thead-dark">
            <tr>
            <th scope="col">No</th>
            <th scope="col">Id Akun</th>
            <th scope="col">Id Penjual</th>
            <th scope="col">Nama Game</th>
            <th scope="col">Harga</th>
            <th scope="col">Spesifikasi</th>
            <th scope="col">Aksi</th>
            </tr>

            <?php 
            $data = mysqli_query($connect,"SELECT * FROM AkunGame");  
            $no = 1;
            while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['id_akun']; ?></td>
            <td><?php echo $d['id_penjual']; ?></td>
            <td><?php echo $d['nama']; ?></td>
            <td><?php echo $d['harga']; ?></td>
            <td><?php echo $d['spesifikasi']; ?></td>
            <td><a href="update.php?update=<?php echo $d["id_akun"]; ?>">Update</a> |
                <a href="delete.php?delete=<?php echo $d["id_akun"]; ?>">Delete</a>
            </td></tr>
            </tr>
            <?php } ?>
            </thead>

            </table>
        </body>
</html>