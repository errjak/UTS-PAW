<?php
$konek = mysqli_connect("localhost", "root", "", "db_066");
$result = [];
$resultset = mysqli_query($konek, "SELECT * FROM tbl_dio");
while ($res = mysqli_fetch_assoc($resultset)) {
    $result[] = $res;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tables</title>
    <style>
        table,
        th,
        td {
            border: 1px solid;
        }
    </style>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>nama</th>
                <th>email</th>
                <th>alamat</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($result as $res2) :
            ?>
                <tr>
                    <td> <?php
                            echo $res2["id_dio"];
                            ?>
                    </td>
                    <td> <?php
                            echo $res2["nama_dio"];
                            ?>
                    </td>
                    <td> <?php
                            echo $res2["email_dio"];
                            ?>
                    </td>
                    <td> <?php
                            echo $res2["alamat_dio"];
                            ?>
                    </td>
                    <td>
                        <button>
                            <a href="edit.php?id=<?php echo $res2["id_dio"]; ?>">edit</a>
                        </button>
                        <button>
                            <a href="delete.php?id=<?php echo $res2["id_dio"]; ?>">delete</a>
                        </button>
                    </td>

                </tr>
            <?php
            endforeach;
            ?>
        </tbody>
        <button>
            <a href="tambah.php?id=<?php echo $res2["id_dio"]; ?>">tambah</a>
        </button>
    </table>
</body>

</html>