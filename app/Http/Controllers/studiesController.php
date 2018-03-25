<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataSekolah;
use App\Mahasiswa;

class studiesController extends Controller
{

  public function daftar(){
    return view('form2');
  }

  public function createData(Request $request)
  {
    $this->validate($request,[
      'jenis_sekolah'    => 'required',
      'status_sekolah'   => 'required',
      'prov_sekolah'     => 'required',
      'kab_sekolah'      => 'required',
      'jur_sekolah'      => 'required',
      'graduate'         => 'required',
      'pilihan1'         => 'required',
      'pilihan2'         => 'required',
    ]);

    $register = DataSekolah::create([
      'jenis_sekolah'     => $request->jenis_sekolah,
      'status_sekolah'    => $request->status_sekolah,
      'prov_sekolah'      => $request->prov_sekolah,
      'kab_sekolah'       => $request->kab_sekolah,
      'jur_sekolah'       => $request->jur_sekolah,
      'graduate'          => $request->graduate,
      'pilihan1'          => $request->pilihan1,
      'pilihan2'          => $request->pilihan2,
      'token'             => str_random(20),
    ]);
  }
}
