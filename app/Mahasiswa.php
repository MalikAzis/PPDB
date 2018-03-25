<?php

namespace App;
use App\DataSekolah;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
  protected $table = 'mahasiswa';

  protected $guarded = ['id','created_at, updated_at'];

  public function studies(){
    return $this->hasOne('App\DataSekolah', 'nomor_peserta');
  }
}
