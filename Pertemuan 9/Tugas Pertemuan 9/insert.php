<!DOCTYPE html>
<html lang="en">
<head>
	<title>Laporan Hasil Penangkapan Ikan</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"><link href="style.css" rel="stylesheet">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

    <?php
        include ("koneksi.php");
        $id_nelayan = $_POST['id_nelayan'];

        $query = "select * from informasi_nelayan where id_nelayan = $id_nelayan";
        $hasil = mysqli_query($koneksi, $query); 
        $row = mysqli_fetch_array($hasil);
    ?>

<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://i.ibb.co/WGYjHM8/depositphotos-386816156-stock-illustration-hand-drawn-colorful-sailboat-isolated-removebg-preview.png" alt=""/>
                        <h3>Sistem Manajemen Pelaporan</h3>
                        <p>Dikembangkan untuk mendukung implementasi program dan kegiatan pembangunan perikanan tangkap di Indonesia</p>
                        <input type="submit" name="" value="Tambah"/><br/>
                        
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Laporan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="print.php" role="tab" aria-controls="profile" aria-selected="false">Print</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Tambah Laporan Hasil Penangkapan Ikan</h3>
    <h1>Tambah Data</h1>
    <form action="proses_insert.php" method="POST">
        <input type="hidden" name="id_nelayan" value="<?php echo $row['id_nelayan']; ?>">
        Nama Depan : <input type="text" name="fname" value=""><br/>
        Nama Belakang : <input type="text" name="lname" value=""><br/>
        Alamat : <textarea name="alamat" value=""></textarea><br/>
        Daerah Penangkapan : <input type="text" name="daerah_penangkapan" value=""><br/>
        Jumlah Penangkapan : <input type="text" name="jumlah_tangkapan" value=""><br/>
        Alat Penangkapan : <input type="text" name="alat_penangkapan" value=""><br/>
        Wilayah WPPNRI : <input type="text" name="wilayah_wppnri" value=""><br/>
        <input type="submit" value="simpan">
    </form>
</body>
</html>