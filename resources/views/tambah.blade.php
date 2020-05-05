<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel </title>
</head>
<body>
 
	<h2>Data Pegawai</h2>
 
	<a href="/tb_pegawai"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/tb_pegawai/store" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="nama" required="required"> <br/>
		Jabatan <input type="text" name="jabatan" required="required"> <br/>
		Umur <input type="number" name="umur" required="required"> <br/>
		Alamat<input type="text" name="alamat" required="required"> <br/>
		JenisKelamin<input type="text" name="jeniskelamin" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>