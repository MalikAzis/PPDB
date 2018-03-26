<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
  protected $table = 'mahasiswa';

  protected $guarded = ['id','created_at, updated_at'];

  public function datasekolah()
  {
    return $this->hasOne('App\DataSekolah');
  }

}
