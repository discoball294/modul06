<?php
/**
 * Created by PhpStorm.
 * User: bryan
 * Date: 11/29/15
 * Time: 5:11 PM
 */
require 'dbConnect.php';
$query = 'SELECT * FROM user';
$data = mysqli_query($dbc, $query);

if (mysqli_num_rows($data) == 0) {
    echo 'Tabel tidak memiliki data.';
} else {
    $row = mysqli_fetch_assoc($data);

}
?>
<table border="1">
    <thead>
    <th>User</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Kota</th>
    <th>password</th>
    </thead>
<?
foreach ($data as $row) {
    echo "<tr>";
    echo "<td>".$row['user']."</td>";
    echo "<td>".$row['nama']."</td>";
    echo "<td>".$row['alamat']."</td>";
    echo "<td>".$row['kota']."</td>";
    echo "<td>".$row['password']."</td>";
    echo "</tr>";
}?></table>