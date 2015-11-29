<?php
/**
 * Created by PhpStorm.
 * User: bryan
 * Date: 11/27/15
 * Time: 9:09 PM
 */
//connect database
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_NAME','modul06');

$dbc=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
if(mysqli_connect_error())
    die('Tidak dapat terhubung dengan database'.mysql_error());
else
    echo "Koneksi berhasil";
