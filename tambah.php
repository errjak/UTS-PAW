<?php
$konek = mysqli_connect("localhost", "root", "", "db_066");
if (isset($_POST["submit"])) {
    $nama = $_POST["nama_dio"];
    $email = $_POST["email_dio"];
    $alamat = $_POST["alamat_dio"];
    $insert = mysqli_query($konek, "INSERT INTO tbl_dio values ('','$nama','$email','$alamat')");
    $result = mysqli_affected_rows(($konek));
    if ($result > 0) {
        echo header('Location:index.php');
    } else {
        echo "<script>
                alert('Mohon maaf, Data belum bisa ditambahkan');
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tambah</title>
</head>

<body>
    <h1>Menambahkan Data Baru</h1>
    <form method="post" action="">
        <div>
            <label for="inputnamaxyz">Nama :</label>
            <input type="text" name="nama_dio" placeholder="Masukkan Nama" required />
        </div>
        <div>
            <label for="inputemailxyz">Email :</label>
            <input type="text" name="email_dio" placeholder="Masukkan Email" required />
        </div>
        <div>
            <label>Alamat :</label>
            <input type="text" name="alamat_dio" placeholder="Masukkan Alamat" required />
        </div>
        <div>
            <button type="submit" name="submit" class="btn btn-success">Submit</button>
        </div>
    </form>

</body>

</html>