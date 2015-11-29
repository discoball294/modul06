
<!DOCTYPE html>
<html>
<head>
    <title>Menu</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<form method="POST" action="prosesDaftar.php">
    <label>User ID </label><input type="text" name="userid" required class="text"><br>
    <label>Nama </label><input type="text" name="nama" required class="text"><br>
    <label>Alamat</label><input type="text" name="alamat" required class="text"><br>
    <label>Kota</label><input type="text" name="kota" required class="text"><br>
    <label>Password</label><input type="text" name="pass" required class="text"><br>
    <input type="submit" value="Daftar" class="btn btn-blue">
    <input type="reset" value="Batal" class="btn btn-red">
</form>
</body>
</html>