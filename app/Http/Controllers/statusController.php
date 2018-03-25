<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use App\DataSekolah;
use Illuminate\Http\Request;


class statusController extends Controller
{
  public function index()
  {
    return view('status');
  }

  public function show(Request $request)
  {
    $data = Mahasiswa::wherenomor($request->nomor)->first();
    return view('view',['data'=>$data]);
  }
}
