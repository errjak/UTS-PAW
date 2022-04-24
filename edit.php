<?php
$konek = mysqli_connect("localhost", "root", "", "db_066");

$id = $_GET["id"];
$dio = mysqli_query($konek, "SELECT * FROM tbl_dio where id_dio=$id");
$result = mysqli_fetch_assoc($dio);
$data = $result;

if (isset($_POST["submit"])) {
    $nama = $_POST["nama_dio"];
    $email = $_POST["email_dio"];
    $alamat = $_POST["alamat_dio"];
    $insert = mysqli_query($konek, "UPDATE tbl_dio SET nama_dio='$nama', email_dio='$email', alamat_dio='$alamat' where id_dio=$id");
    $hasil = mysqli_affected_rows($konek);
    if ($hasil > 0) {
        echo header('Location:index.php');
    } else {
        echo "<script>
                alert('Mohon maaf, Data anda belum berhasil dirubah');
        </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit</title>
</head>

<body>
    <h1>Merubah Data</h1>
    <form method="post" action="">
        <input type="hidden" value="<?php echo $data['id_dio']; ?>">
        <div>
            <label for="inputnama">Nama :</label>
            <input type="text" name="nama_dio" placeholder="Masukkan Nama" value="<?php echo $data['nama_dio']; ?>" required />
        </div>
        <div>
            <label for="inputemail">Email :</label>
            <input type="text" name="email_dio" placeholder="Masukkan Email" value="<?php echo $data['email_dio']; ?>" required />
        </div>
        <div>
            <label>Alamat :</label>
            <input type="text" name="alamat_dio" placeholder="Masukkan Email" value="<?php echo $data['alamat_dio']; ?>" required />
        </div>
        <div>
            <button type="submit" name="submit" class="btn btn-success">Submit</button>
        </div>
    </form>
</body>
</html>