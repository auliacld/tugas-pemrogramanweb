<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
</head>
<body>
	<form name="" action="proses_get.php" method="get">
		<table>
			<tr>
				<td> Nama </td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>

			<tr>
				<td> Umur </td>
				<td>:</td>
				<td><input type="text" name="umur"></td>
			</tr>

			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><textarea name="alamat" cols="30" rows="10"></textarea></td>
			</tr>

			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><input type="radio" id="perempuan" name="JK" value="Perempuan"> <label for="perempuan"> Perempuan </label> <input type="radio" id="lelaki" name="JK" value="Lelaki"> <label for="lelaki"> Lelaki </label></td>
			</tr>

			<tr>
				<td>Hobi</td>
				<td>:</td>
				<td>
					<input type="checkbox" name="hobi[]" value="Belajar"> Belajar <br>

					<input type="checkbox" name="hobi[]" value="Belajar"> Berenang <br>

				</td>
			</tr>

			<tr>
				
				<td colspan="3"><input type="submit" value="simpan" name="tombol"></td>
			</tr>
	
		</table>
	</form>
</body>
</html>