<!DOCTYPE html>
<html>
<head>
	<title>Tambah Laporan Hasil Penangkapan Ikan</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"><link href="style.css" rel="stylesheet">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<form name="" action="proses_post.php" method="post">
		   <div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://i.ibb.co/WGYjHM8/depositphotos-386816156-stock-illustration-hand-drawn-colorful-sailboat-isolated-removebg-preview.png" alt=""/>
                        <h3>Sistem Manajemen Pelaporan</h3>
                        <p>Dikembangkan untuk mendukung implementasi program dan kegiatan pembangunan perikanan tangkap di Indonesia</p>
                        <input type="submit" name="" value="Login"/><br/>
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
                                <h3 class="register-heading">Laporan Hasil Penangkapan Ikan</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="fname"placeholder="Nama Depan Nelayan *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="lname"placeholder="Nama Belakang Nelayan *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="address"placeholder="Alamat Nelayan *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control"  name="daerah"placeholder="Nama Daerah Penangkapan" value="" />
                                        </div>
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="male" checked>
                                                    <span> Lelaki </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="female">
                                                    <span>Perempuan </span> 
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Jumlah Hasil Tangkapan *" name="jumlah" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Alat Utama/Bantu Penangkapan *" name="alat" value="" />
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" name="karakter">
            
                                                <option>Perairan Dangkal</option>
                                                <option>Perairan Dalam</option>
                                           
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="jalur" placeholder="Jalur Penangkapan Ikan di WPPNRI *" value="" />
                                        </div>
                                        <input type="submit" class="btnRegister" name="tombol"  value="Simpan"/>
                                    </div>
                                </div>
                            </div>
                           
</body>
</html>