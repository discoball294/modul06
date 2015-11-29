<?php
/**
 * Created by PhpStorm.
 * User: bryan
 * Date: 11/29/15
 * Time: 3:32 PM
 */
require "dbConnect.php";

$user=$_POST['userid'];
$nama=$_POST['nama'];
$alamat=$_POST['kota'];
$kota=$_POST['alamat'];
$pass=$_POST['pass'];

$checkResult="SELECT * FROM user WHERE user LIKE '%".$user."%'";
$result=mysqli_query($dbc,$checkResult);

if(mysqli_num_rows($result) > 0){
    echo "<script>
alert('Username sudah ada, silahkan isi kembali dengan username yang berbeda');
window.location.href='daftar.php';
</script>";
}
else {

$query="INSERT INTO `user` (`user`, `nama`, `alamat`, `kota`, `password`) VALUES ('".$user."','".$nama."', '".$alamat."', '".$kota."', '".$pass."')";
mysqli_query($dbc,$query);
echo "<script>
alert('Berhasil registrasi');
window.location.href='index.php';
</script>";
}