<!DOCTYPE html>
<html>
<head>
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
$user = $_POST['userid'];
$query = "SELECT * FROM user WHERE user LIKE '" . $user . "'";
$data = mysqli_query($dbc, $query);
$row = mysqli_fetch_assoc($data);
if(mysqli_num_rows($data) == 0){
    echo "<script>
alert('Username tidak ada , silahkan isi kembali dengan username yang berbeda');
window.location.href='edit.php';
</script>";
}
else {

?>
<form method="POST" action="prosesUpdate.php">
    <label>User</label><input readonly name="userid" value="<? echo $row['user']; ?>" class="text" ><br>
    <label>Nama </label><input type="text" name="nama" value="<? echo $row['nama']; ?>" required class="text"><br>
    <label>Alamat</label><input type="text" name="alamat" value="<? echo $row['alamat']; ?>" required class="text"><br>
    <label>Kota</label><input type="text" name="kota" value="<? echo $row['kota']; ?>" required class="text"><br>
    <label>Password</label><input type="text" name="pass" value="<? echo $row['password']; ?>" required class="text"><br>
    <input type="submit" value="Edit" class="btn btn-blue">
    <input type="reset" value="Batal" class="btn btn-red">
</form>
</body>
</html><?}