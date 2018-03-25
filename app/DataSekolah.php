<?php

namespace App;
use App\Mahasiswa;
use Illuminate\Database\Eloquent\Model;

class DataSekolah extends Model
{
  protected $table = 'datasekolah';

  protected $fillable = ['nomor_peserta','jenis_sekolah', 'status_sekolah', 'prov_sekolah', 'kab_sekolah', 'jur_sekolah',
                          'graduate', 'pilihan1', 'pilihan2'];
  protected $guarded = ['created_at', 'updated_at'];

  public function studies(){
    return $this->belongsTo('App\Mahasiswa', 'nomor_peserta');
  }
}
