<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaControler extends Controller
{
    public function insertElq()
    {
        // $mhs = new Mahasiswa();
        // $mhs->nama = "Muhammad Rafky Hidayatullah";
        // $mhs->npm = "2226250125";
        // $mhs->tempat_lahir = "Palembang";
        // $mhs->tanggal_Lahir = date("Y-m-d");
        // $mhs->save();
        // dump($mhs);

        //mass assignment
        $mhs = Mahasiswa::insert([
            'nama' => 'Muhamamd Rafky Hidayatullah',
            'npm' => '2226250125',
            'tempat_lahir' => 'Palembang',
            'tanggal_lahir' => date('2004-09-27')],
        [
            'nama' =>'Tyr',
            'npm' => '2226250555',
            'tempat_lahir' => 'asgard',
            'tanggal_lahir' => date('2004-04-04')
        ]);
        dump($mhs);

            //data lebih dari satu


    }

    public function updateElq(){

    }


}
