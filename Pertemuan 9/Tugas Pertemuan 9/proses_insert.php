<?php

    include("koneksi.php");

    $namadepan = $_POST['fname'];
    $namabelakang = $_POST['lname'];
    $id_user = $_POST['id_user'];

    $query = "insert into informasi_nelayan values ('', '$nama', '$alamat', $id_user)";
    
    if(mysqli_query($koneksi, $query)){
        header("Location: index.php");
    }else{
        header("Location: insert.php?id_identitas=$id_identitas");
    }

?>