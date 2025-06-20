<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Nilai;
use Illuminate\Support\Facades\DB;
class NilaiController extends Controller
{
 /**
 * Display a listing of the resource.
 */
 public function index()
 {
 // Mengambil semua data nilai
 $nilai = Nilai::all();

 // Mengirim data ke view
 return view('nilai.index', ['nilai' => $nilai]);
 }
 /**
 * Show the form for creating a new resource.
 */
 public function create()
 {
 // Menampilkan form tambah data
 return view('nilai.tambah');
 }
 /**
 * Store a newly created resource in storage.
 */
 public function store(Request $request)
 {
 // Validasi input
 $this->validate($request, [
 'normorinduksiswa' => 'required|max:5',
 'nilaiangka' => 'required|numeric',
 'sks' => 'required|numeric'
 ]);

 // Menyimpan data ke database
 Nilai::create([
 'normorinduksiswa' => $request->normorinduksiswa,
 'nilaiangka' => $request->nilaiangka,
 'sks' => $request->sks
 ]);

 // Redirect ke halaman index
 return redirect('/eas')->with('success', 'Data berhasil
ditambahkan!');
 }

 /**
 * Menghapus data nilai
 */
 public function hapus($id)
 {
 // Menghapus data nilai berdasarkan id
 $nilai = Nilai::find($id);
 $nilai->delete();

 // Redirect ke halaman index
 return redirect('/eas')->with('success', 'Data berhasil
dihapus!');
 }
}
