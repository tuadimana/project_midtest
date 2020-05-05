<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel </title>
</head>
<body>

	<h2>Edit Pegawai</h2>
 
	<a href="/tb_pegawai"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($tb_pegawai as $p)
	<form action="/tb_pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br/>
		Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br/>
		Umur <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br/>
		Alamat <input type="text" required="required" name="alamat" value="{{ $p->pegawai_alamat }}"> <br/>
		JenisKelamin <input type="text" required="required" name="jeniskelamin" value="{{ $p->pegawai_jenis_kelamin }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 
</body>
</html>