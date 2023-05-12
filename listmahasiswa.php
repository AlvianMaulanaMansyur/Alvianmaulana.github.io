<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud PHP dan mysqli </title>
</head>

<body>
    <h2>Crud PHP dan MySQLi</h2>
    <br />
    <a href="tambahmahasiswa.php"> + TAMBAH MAHASISWA</a>
    <br />
    <br />
    <table border="1">
        <tr>
            <th>NO</th>
            <th>Nama</th>
            <th>NIM</th>
            <Th>Alamat</Th>
            <th>opsi</th>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "select * from Mahasiswa");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['nim']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $d['id'] ?>">EDIT</a>
                    <a href="hapus.php?id=<?php echo $d['id'] ?>">HAPUS</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>
