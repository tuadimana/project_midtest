<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class PegawaiController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$tb_pegawai = DB::table('tb_pegawai')->get();
 
    	// mengirim data pegawai ke view index
    	return view('index',['tb_pegawai' => $tb_pegawai]);
 
    }
    	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{
 
		// memanggil view tambah
		return view('tambah');
 
	}
		// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('tb_pegawai')->insert([
			'pegawai_nama' => $request->nama,
			'pegawai_jabatan' => $request->jabatan,
			'pegawai_umur' => $request->umur,
			'pegawai_alamat' => $request->alamat,
			'pegawai_jenis_kelamin' => $request->jeniskelamin

	]);
		// alihkan halaman ke halaman pegawai
		return redirect('/tb_pegawai');
	}
		// method untuk edit data pegawai
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$tb_pegawai = DB::table('tb_pegawai')->where('pegawai_id',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('edit',['tb_pegawai' => $tb_pegawai]);
 	}
 		// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('tb_pegawai')->where('pegawai_id',$request->id)->update([
			'pegawai_nama' => $request->nama,
			'pegawai_jabatan' => $request->jabatan,
			'pegawai_umur' => $request->umur,
			'pegawai_alamat' => $request->alamat,
			'pegawai_jenis_kelamin' => $request->jeniskelamin
	]);
		// alihkan halaman ke halaman pegawai
		return redirect('/tb_pegawai');
	}
		// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('tb_pegawai')->where('pegawai_id',$id)->delete();
		
		// alihkan halaman ke halaman pegawai
		return redirect('/tb_pegawai');
	}
}
