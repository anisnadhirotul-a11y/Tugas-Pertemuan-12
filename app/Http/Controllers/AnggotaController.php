<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Anggota;
use App\Http\Requests\StoreAnggotaRequest;
 
class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $anggotas = Anggota::latest()->get();
        
        // Statistik
        $totalAnggota = Anggota::count();
        $anggotaAktif = Anggota::where('status', 'Aktif')->count();
        $anggotaNonaktif = Anggota::where('status', 'Nonaktif')->count();
        
        return view('anggota.index', compact(
            'anggotas',
            'totalAnggota',
            'anggotaAktif',
            'anggotaNonaktif'
        ));
    }
 
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $anggota = Anggota::findOrFail($id);
        return view('anggota.show', compact('anggota'));
    }
 
    // Methods lainnya akan diimplementasi di pertemuan 13
    public function create() 
    {
        return view('anggota.create');
    }
    public function store(StoreAnggotaRequest $request)
    {
        try {
        // Create anggota baru dengan validated data
        Anggota::create($request->validated());
        
        // Redirect dengan success message
        return redirect()->route('anggota.index')
                         ->with('success', 'Anggota berhasil ditambahkan!');
                         
    } catch (\Exception $e) {
        // Redirect dengan error message jika gagal
        return redirect()->back()
                         ->withInput()
                         ->with('error', 'Gagal menambahkan anggota: ' . $e->getMessage());
    }
}
    public function edit(string $id) { }
    public function update(Request $request, string $id) { }
    public function destroy(string $id) { }
}