<?php

    include("koneksi.php");

    $id_identitas = $_POST['id_identitas'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    $query = "update identitas set nama = '$nama', alamat = '$alamat' where id_identitas = $id_identitas";
    
    if(mysqli_query($koneksi, $query)){
        header("Location: index.php");
    }else{
        header("Location: edit.php?id_identitas=$id_identitas");
    }

?>