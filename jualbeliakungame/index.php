<?php  
 $connect = mysqli_connect("localhost", "root", "", "jualbeliakungame");  
 session_start();   
 if(isset($_POST["register"]))  
 {  
      if(empty($_POST["nama"]) && empty($_POST["password"]) && empty($_POST["email"]) && empty($_POST["nohp"]))  
      {  
           echo '<script>alert("Both Fields are required")</script>';  
      }  
      else  
      {  
           $id_pembeli = mysqli_real_escape_string($connect, $_POST["id_pembeli"]);
           $Nama = mysqli_real_escape_string($connect, $_POST["nama"]);  
           $Password = mysqli_real_escape_string($connect, $_POST["password"]);
           $Email = mysqli_real_escape_string($connect, $_POST["email"]);
           $Nohp = mysqli_real_escape_string($connect, $_POST["nohp"]);   
           $Password = md5($Password);  
           $query = "INSERT INTO pembeli (id_pembeli, nama, password, email, Nohp) VALUES('$id_pembeli', '$Nama', '$Password', '$Email', '$Nohp')";  
           if(mysqli_query($connect, $query))  
           {  
                echo '<script>alert("Registration Done")</script>';  
           }  
      }  
 }  
 if(isset($_POST["login"]))  
 {  
      if(empty($_POST["nama"]) && empty($_POST["password"]))  
      {  
           echo '<script>alert("Both Fields are required")</script>';  
      }  
      else  
      {  
           $Nama = mysqli_real_escape_string($connect, $_POST["nama"]);  
           $Password = mysqli_real_escape_string($connect, $_POST["password"]);  
           $Password = md5($Password);  
           $query = "SELECT * FROM pembeli WHERE nama = '$Nama' AND password = '$Password'";  
           $result = mysqli_query($connect, $query);  
           if(mysqli_num_rows($result) > 0)  
           {  
                $_SESSION['Nama'] = $Nama;  
                header("location:home.php");  
           }  
           else  
           {  
                echo '<script>alert("Wrong User Details")</script>';  
           }  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Akun Game</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h3 align="center">Jual Beli Akun Game</h3>  
                <h3 align="center">Form Pembeli</h3> 
                <br />   
                <?php  
                if(isset($_GET["action"]) == "login")  
                {  
                ?>  
                <h3 align="center">Login</h3>  
                <br />  
                <form method="post">  
                     <label>Masukan Nama</label>  
                     <input type="text" name="nama" class="form-control" />  
                     <br />  
                     <label>Masukan Password</label>  
                     <input type="password" name="password" class="form-control" />  
                     <br />  
                     <input type="submit" name="login" value="Login" class="btn btn-info" />  
                     <br />  
                     <p align="center"><a href="index.php">Register</a></p> 
                     <p align="center"><a href="Penjual.php">Sebagai Penjual?</a></p>  
                </form>  
                <?php       
                }  
                else  
                {  
                ?>  
                <h3 align="center">Register</h3> 
                <form method="post"> 
                    <label>Username</label>  
                     <input type="text" name="id_pembeli" class="form-control" />  
                     <br />  
                     <label>Masukan Nama</label>  
                     <input type="text" name="nama" class="form-control" />  
                     <br />
                     <label>Masukan Password</label>  
                     <input type="password" name="password" class="form-control" />  
                     <br />  
                     <label>Masukan Email</label>
                     <input type="text" name="email" class="form-control"/>
                     <br />
                     <label>Masukan No Hp</label>
                     <input type="number" name="nohp" class="form-control"/>
                     <br />
                     <input type="submit" name="register" value="Register" class="btn btn-info" />  
                     <br />  
                     <p align="center"><a href="index.php?action=login">Login</a></p>
                     <p align="center"><a href="Penjual.php">Sebagai Penjual?</a></p>  
                </form>  
                <?php  
                }  
                ?>  
           </div>  
      </body>  
 </html>  