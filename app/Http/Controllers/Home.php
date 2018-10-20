<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class Home extends Controller
{
    //
    public function index(){

        $mahasiswa = Mahasiswa::all();
        return $mahasiswa;

        // return view('home', [
        //     'mahasiswa' => $mahasiswa,
        // ]);
    }
    
    public function create(){
        $mahasiswa = new Mahasiswa();
        $mahasiswa->nim_mahasiswa = '11451101639';
        $mahasiswa->nama = 'Dinal Copy';
        $mahasiswa->email = 'radinal@copy.com';
        $mahasiswa->id_jurusan = '2';
        $mahasiswa->kelas = 'C';
        $mahasiswa->tgl_lahir = '1996-11-29';
        
        $response = null;

        if ($mahasiswa->save()){
            $response['message'] = 'Data saved!';
            $response['data'] = $mahasiswa;

        } else {
            $response = 'Failed!';
        }

        return $response;
        
    }

    public function update($id){
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->nama = "Diedit dari controller";
        $response = null;

        if ($mahasiswa->save()){
            $response['message'] = 'Data terupdate!';
            $response['data'] = $mahasiswa;
        } else {
            $response['message'] = 'Failed!';
        }

        return $response;
    }

    public function view($id){
        $mahasiswa = Mahasiswa::find($id);

        return view('mahasiswa', [
            'mahasiswa' => $mahasiswa,
        ]);
    }

    public function delete($id){
        $mahasiswa = Mahasiswa::find($id);

        if ($mahasiswa!=null && $mahasiswa->delete()){
            $response['message'] = 'Data berhasil terhapus!';
        } else {
            $response['message'] = 'Failed!';
        }

        return $response;

    }
}
