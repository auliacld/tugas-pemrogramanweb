<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

    <?php
        include ("koneksi.php");
        $id_identitas = $_GET['id_identitas'];

        $query = "select * from identitas where id_identitas = $id_identitas";
        $hasil = mysqli_query($koneksi, $query);
        $row = mysqli_fetch_assoc($hasil);
    ?>
    <h1>Edit Data</h1>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="id_identitas" value="<?php echo $row['id_identitas']; ?>">
        Nama : <input type="text" name="nama" value="<?php echo $row['nama']; ?>"><br/>
        Alamat : <textarea name="alamat"><?php echo $row['alamat']; ?></textarea><br/>
        <input type="submit" value="simpan">
    </form>
</body>
</html>