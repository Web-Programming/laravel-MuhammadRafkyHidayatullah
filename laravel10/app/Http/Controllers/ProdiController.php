<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        dump($request);
        // echo $request->nama;
    }
}
