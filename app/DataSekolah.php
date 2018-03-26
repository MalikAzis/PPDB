<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class DataSekolah extends Model
{
  protected $table = 'datasekolah';

  protected $fillable = ['mahasiswa_id','jenis_sekolah', 'status_sekolah', 'prov_sekolah', 'kab_sekolah', 'jur_sekolah',
                          'graduate', 'pilihan1', 'pilihan2'];

  public function mahasiswa()
  {
    return $this->belongsTo('App\Mahasiswa');
  }
}
