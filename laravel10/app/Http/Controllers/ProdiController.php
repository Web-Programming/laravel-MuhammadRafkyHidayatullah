<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdiController extends Controller
{
    public function allJoinFacade()
    {
    $kampus = "Universitas Multi Data Palembang";
    $result = DB::select('select mahasiswas.*, prodis.nama as nama_prodi from prodis, mahasiswas where prodis.id = mahasiswas.prodi_id');
    return view('prodi.index', ['allmahasiswaprodi' => $result, 'kampus' => $kampus]);
    }

    public function create()
    {
        return view('prodi.create');
    }

    public function store(Request $request)
    {
        // dump($request);
        // echo $request->nama;

        $validateData = $request->validate([
            'nama'=> 'required|min:5|max:20'
        ]);
        // dump($validateData);
        // echo $validateData['nama'];

        $prodi = new Prodi();//buat object prodi
        $prodi->nama = $validateData['nama'];//simpan nilai input ($validateData['nama']) ke dalam property nama prodi ($prodi->nama)
        $prodi->save(); //simpan dalam table prodi

        //return "data prodi $prodi->nama Berhasil disimpan kedalam data base"; //tampilkan pesan berhasil
        $request->session()->flash('info', "data prodi $prodi->nama Berhasil disimpan kedalam data base");
        return redirect()->route('prodi.create');

    }
}
