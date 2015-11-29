<?php
/**
 * Created by PhpStorm.
 * User: bryan
 * Date: 11/29/15
 * Time: 4:34 PM
 */
require "dbConnect.php";
$user = $_POST['userid'];
$nama = $_POST['nama'];
$alamat = $_POST['kota'];
$kota = $_POST['alamat'];
$pass = $_POST['pass'];

$checkResult = "SELECT * FROM user WHERE user LIKE '%" . $user . "%'";
$result = mysqli_query($dbc, $checkResult);


$query = "UPDATE `user` SET `user`='" . $user . "',`nama`='" . $nama . "',`alamat`='" . $alamat . "',`kota`='" . $kota . "',`password`='" . $pass . "' WHERE user LIKE '%" . $user . "%'";
mysqli_query($dbc, $query);
echo "<script>
alert('Berhasil update');
window.location.href='index.php';
</script>";
