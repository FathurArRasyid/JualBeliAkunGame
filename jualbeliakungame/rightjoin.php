<?php  
 $connect = mysqli_connect("localhost", "root", "", "jualbeliakungame");  
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Thank You For Ordering</title>
	<style type="text/css">
		* {
			font-family: "Trebuchet MS";
		}
		h1 {
			text-transform: uppercase;
			color: navy;
		}
		table {
			border: 1px solid #ddeeee;
			border-collapse: collapse;
			border-spacing: 0;
			width: 70%;
			margin: 10px auto 10px auto;
		}
		th, td {
			border: 1px solid #ddeeee;
			padding: 20px;
			text-align: left;
		}
	</style>
</head>
<body>
	<center><h1>Thank You For Ordering</h1></center>
    <form method="GET" action="inner_join.php" style="text-align: center;"></form>
    <table>
		<thead>
			<tr>
				<th>Id Penjual</th>
				<th>Email Penjual</th>
				<th>Id Akun</th>
				<th>Nama Game</th>
                <th>Harga</th>
                <th>Spesifikasi</th>

			</tr>
		</thead>
        <?php
		 $connect = mysqli_connect("localhost", "root", "", "jualbeliakungame");  
        $sql=mysqli_query($connect, "SELECT A.id_penjual, A.email, B.id_akun, B.nama, B.harga, B.spesifikasi 
							FROM penjual A RIGHT JOIN AkunGame B 
							ON A.id_penjual = B.id_penjual");
            while($d = mysqli_fetch_array($sql)){  
            
            ?>
        <tr>
          <td><?php echo $d['id_penjual']; ?></td>
          <td><?php echo $d['email']; ?></td>
          <td><?php echo $d['id_akun']; ?></td>
          <td><?php echo $d['nama']; ?></td>
          <td><?php echo $d['harga']; ?></td>
          <td><?php echo $d['spesifikasi'];?></td>
          
        </tr>
      <?php
      }
      ?> 
	</table>
</body>
</html>
