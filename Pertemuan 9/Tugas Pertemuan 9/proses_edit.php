<?php

    include("koneksi.php");

    $id_nelayan = $_POST['id_nelayan'];
    $fname = $_POST['fname'];
    $lname= $_POST['lname'];
    $alamat = $_POST['alamat'];
    $daerah_penangkapan= $_POST['daerah_penangkapan'];
    $jumlah_tangkapan= $_POST['jumlah_tangkapan'];
    $alat_penangkapan= $_POST['alat_penangkapan'];
    $wilayah_wppnri= $_POST['wilayah_wppnri'];

    $query = "update informasi_nelayan set fname = '$fname', lname = '$lname', alamat = '$alamat', daerah_penangkapan ='$daerah_penangkapan', jumlah_tangkapan = '$jumlah_tangkapan',
    alat_penangkapan = '$alat_penangkapan', wilayah_wppnri = '$wilayah_wppnri'  where id_nelayan = $id_nelayan";
    
    if(mysqli_query($koneksi, $query)){
        header("Location: index.php");
    }else{
        header("Location: edit.php?id_nelayan=$id_nelayan");
    }

?>