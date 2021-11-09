<!DOCTYPE html>
<html>
<head>
	<title>Laporan Hasil Penangkapan Ikan</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"><link href="style.css" rel="stylesheet">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<?php
    include ("koneksi.php");

    $query = "select * from informasi_nelayan";
    $hasil = mysqli_query($koneksi, $query);
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
                                <h3 class="register-heading">Tabel Laporan Hasil Penangkapan Ikan</h3>
                                <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama Depan</th>
            <th>Nama Belakang</th>
            <th>Alamat</th>
            <th>Daerah Penangkapan</th>
            <th>Jumlah Tangkapan</th>
            <th>Alat Penangkapan</th>
            <th>Wilayah WPPNRI</th>
            <th colspan="3">Aksi</th>
        </tr>
        <?php
        while($row = mysqli_fetch_array($hasil)){
            echo "<tr>";
            echo "<td>".$row['id_nelayan']."</td>";
            echo "<td>".$row['fname']."</td>";
            echo "<td>".$row['lname']."</td>";
            echo "<td>".$row['alamat']."</td>";
            echo "<td>".$row['daerah_penangkapan']."</td>";
            echo "<td>".$row['jumlah_tangkapan']."</td>";
            echo "<td>".$row['alat_penangkapan']."</td>";
            echo "<td>".$row['wilayah_wppnri']."</td>";
            echo "<td><a href='insert.php?id_nelayan=".$row['id_nelayan']."'>Tambah</a></td>";
            echo "<td><a href='edit.php?id_nelayan=".$row['id_nelayan']."'>Edit</a></td>";
            echo "<td><a href='delete.php?id_nelayan=".$row['id_nelayan']."'>Delete</a></td>";
          
            echo "</tr>";
        }
        
        
        ?>  
    </table>
                           
</body>
</html>