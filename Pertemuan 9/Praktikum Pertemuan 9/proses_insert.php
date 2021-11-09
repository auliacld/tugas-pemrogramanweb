<?php

    include("koneksi.php");

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $id_user = $_POST['id_user'];

    $query = "insert into identitas values ('', '$nama', '$alamat', $id_user)";
    
    if(mysqli_query($koneksi, $query)){
        header("Location: index.php");
    }else{
        header("Location: edit.php?id_identitas=$id_identitas");
    }

?>