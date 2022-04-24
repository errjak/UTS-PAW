<?php
$konek = mysqli_connect("localhost", "root", "", "db_066");
$id = $_GET["id"];
$dio = mysqli_query($konek, "DELETE FROM tbl_dio where id_dio = $id");
$hasil = mysqli_affected_rows($konek);
if ($hasil > 0) {
    echo header('location:index.php');
} else {
    echo "<script>
                alert('Mohon maaf, Data anda belum berhasil dihapus');
        </script>";
}
