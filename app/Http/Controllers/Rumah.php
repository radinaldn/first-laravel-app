<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class Rumah extends Controller
{
    //

    public function index(){
        $mahasiswa = Mahasiswa::all();
        return view('rumah/index', [
            'mahasiswas'=>$mahasiswa,
        ]);
    }

    public function create(){

        if (request()->isMethod('POST')){
            $mahasiswa = new Mahasiswa;
            $mahasiswa->nim_mahasiswa = request()->input('mhs_nim');
            $mahasiswa->nama = request()->input('nama');
            $mahasiswa->email = request()->input('email');
            $mahasiswa->id_jurusan = request()->input('id_jurusan');
            $mahasiswa->kelas = request()->input('kelas');
            $mahasiswa->tgl_lahir = request()->input('tgl_lahir');
            $mahasiswa->save();
        }

        return view('mahasiswa/create');
    }
}
