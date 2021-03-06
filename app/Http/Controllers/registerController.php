<?php

namespace App\Http\Controllers;


use App\Mahasiswa;
use App\DataSekolah;
use App\Events\DataCreated;
use Illuminate\Http\Request;
use Barryvdh\DomPDF;
use PDF;

class registerController extends Controller
{

  public function index(){
    return view('index');
  }

  public function register(){
    return view('ppdb');
  }

  public function data(){

    $data_m = \App\Mahasiswa::with('datasekolah')->get();
    return $data_m;
  }

  public function show($nomor_peserta){

    $data_m = \App\Mahasiswa::with('datasekolah')->wherenomor_peserta($nomor_peserta)->first();
    return (['data'=>$data_m]);
  }


  public function store(Request $request)
  {
    $no = '18'.rand(0, 2000);

    $this->validate($request,[
      'nama_depan'    => 'required',
      'nama_belakang' => 'required',
      'jk'            => 'required',
      'jalan'         => 'required',
      'kota'          => 'required',
      'provinsi'      => 'required',
      'kodepos'       => 'required',
      'negara'        => 'required',
      'tempat_lahir'  => 'required',
      'tanggal_lahir' => 'required',
      'email'         => 'required',
      'telp'          => 'required',
      'agama'         => 'required',
    ]);
    $user = Mahasiswa::create([
      'nomor_peserta' => $no.$request->pilihan1,
      'nama_depan'    => $request->nama_depan,
      'nama_belakang' => $request->nama_belakang,
      'jk'            => $request->jk,
      'jalan'         => $request->jalan,
      'kota'          => $request->kota,
      'provinsi'      => $request->provinsi,
      'kodepos'       => $request->kodepos,
      'negara'        => $request->negara,
      'tempat_lahir'  => $request->tempat_lahir,
      'tanggal_lahir' => $request->tanggal_lahir,
      'email'         => $request->email,
      'telp'          => $request->telp,
      'agama'         => $request->agama,
      'token'         => str_random(20)
    ]);

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

    $data = $user->datasekolah()->create([
      'jenis_sekolah'     => $request->jenis_sekolah,
      'status_sekolah'    => $request->status_sekolah,
      'prov_sekolah'      => $request->prov_sekolah,
      'kab_sekolah'       => $request->kab_sekolah,
      'jur_sekolah'       => $request->jur_sekolah,
      'graduate'          => $request->graduate,
      'pilihan1'          => $request->pilihan1,
      'pilihan2'          => $request->pilihan2,
    ]);

    event(new DataCreated($user));

    return redirect('/');
  }

  public function pdf() {
    $pdf = PDF::loadView('pdf_data');
    return $pdf->download('data.pdf');
}

}
