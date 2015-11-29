<!DOCTYPE html>
<html><head>
<link rel="stylesheet" href="css/style.css">
<title>Edit Data</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: bryan
 * Date: 11/29/15
 * Time: 4:09 PM
 */


require "dbConnect.php";
$user=$_POST['userid'];
$query="SELECT * FROM user WHERE user LIKE '".$user."'";
$data = mysqli_query($dbc,$query);
$row=mysqli_fetch_assoc($data);



?>
<form method="POST">
<label>Nama </label><input type="text" name="nama" value="<? echo $row['nama']; ?>" required class="text"><br>
<label>Alamat</label><input type="text" name="alamat" value="<? echo $row['alamat']; ?>" required class="text"><br>
<label>Kota</label><input type="text" name="kota" value="<? echo $row['kota']; ?>" required class="text"><br>
<label>Password</label><input type="text" name="pass" value="<? echo $row['password']; ?>" required class="text"><br>
</form>
</body>
</html>