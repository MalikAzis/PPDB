@extends('layouts.master')

    @section('content')
    <div class="container" style="margin-top:3%;">
      <div class="jumbotron">
        <div class="row">
          <div class="col-md-12">
              <form action="/register" method="post">
                {{csrf_field()}}
                  <label><b>Identitas Diri</b></label>
                  <p>Isikan Identitas Diri Anda Dengan Benar. (dalam menulis menggunakan huruf BESAR/BALOK)</p>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="nama">Nama Depan</label>
                      <input type="text" name="nama_depan" value="{{ old('nama-depan') }}" class="form-control" required>
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="nama">Nama Belakang</label>
                      <input type="text" name="nama_belakang" value="{{ old('nama-belakang') }}" class="form-control" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="jeniskelamin">Jenis Kelamin</label><br>
                    <div class="radio">
                      <label><input type="radio" name="jk" value="Laki-laki" required>Laki-laki</label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" name="jk" value="Perempuan" required>Perempuan</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" value="{{ old('tempat_lahir') }}" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label>Agama</label>
                    <select class="form-control agama" name="agama" required>
                      <option value="0">Choose</option>
                      <option value="islam">Islam</option>
                      <option value="kristen">Kristen</option>
                      <option value="katholik">Katholik</option>
                      <option value="budha">Budha</option>
                      <option value="hindu">Hindu</option>
                    </select>
                  </div>

                  <div class="alamat">
                    <label><b>Alamat</b></label>
                    <div class="form-group">
                      <label for="alamat">Jalan</label>
                      <input type="text" name="jalan" value="{{ old('jalan') }}" class="form-control" required>
                    </div>
                    <div class="row">
                      <div class="col-md-6 form-group">
                        <label for="alamat">Kode Pos</label>
                        <input type="number" name="kodepos" value="{{ old('kodepos') }}" class="form-control" required>
                      </div>
                      <div class="col-md-6 form-group">
                        <label for="negara">Negara</label>
                        <input type="text" name="negara" value="{{ old('negara') }}" class="form-control" required>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 form-group">
                        <label for="kota">Kota</label>
                        <input type="text" name="kota" value="{{ old('kota') }}" class="form-control" required>
                      </div>
                      <div class="col-md-6 form-group">
                        <label for="provinsi">Provinsi</label>
                        <input type="text" name="provinsi" value="{{ old('provinsi') }}" class="form-control" required>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="telp"><b>Telepon</b></label>
                    <input type="number" name="telp" value="{{ old('telp') }}" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="nama"><b>Email</b></label>
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control" required>
                  </div>
                  <hr>

                  <label><b>Data Sekolah</b></label>
                  <p>Isikan Pendidikan Terakhir Anda</p>
                  <div class="form-group">
                    <label>Jenis Sekolah</label>
                    <select class="form-control" name="jenis_sekolah" required>
                      <option value="SMA">SMA</option>
                      <option value="SMK">SMK</option>
                      <option value="MA">MA</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Status Sekolah</label>
                    <select class="form-control" name="status_sekolah" required>
                      <option value="Negeri">Negeri</option>
                      <option value="Swasta">Swasta</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="prov_sekolah">Provinsi Sekolah</label>
                    <input type="text" name="prov_sekolah" value="{{ old('prov_sekolah') }}" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="kab_sekolah">Kabupaten Sekolah</label>
                    <input type="text" name="kab_sekolah" value="{{ old('kab_sekolah') }}" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="jur_sekolah">Jurusan Sekolah</label>
                    <input type="text" name="jur_sekolah" value="{{ old('jur_sekolah') }}" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="graduate">Tahun Lulus</label>
                    <input type="number" name="graduate" value="{{ old('graduate') }}" class="form-control" required>
                  </div>
                  <hr>
                  <label><b>Pilihan Program Studi</b></label>
                  <div class="form-group">
                    <label for="nama">Pilihan Pertama</label>
                      <select class="program_studi form-control" name="pilihan1" value="{{ old('program_studi') }}">
                      <option value="">Program Studi</option>
                      <option value="63101">Ilmu Administrasi (S2)</option>
                      <option value="74101">Ilmu Hukum (S2)</option>
                      <option value="14901">Profesi Ners (Profesi)</option>
                      <option value="63201">Ilmu Administrasi Negara</option>
                      <option value="74201">Ilmu Hukum</option>
                      <option value="54211">Agroteknologi</option>
                      <option value="54201">Agribisnis</option>
                      <option value="60201">Ekonomi Pembangunan</option>
                      <option value="61201">Manajemen</option>
                      <option value="22201">Teknik Sipil</option>
                      <option value="26201">Teknik Industri</option>
                      <option value="14201">Ilmu Keperawatan</option>
                      <option value="48201">Farmasi</option>
                      <option value="13353">Analisis Kesehatan (D4)</option>
                      <option value="15301">Bidan Pendidik (D4)</option>
                      <option value="15401">Kebidanan (D3)</option>
                      <option value="20401">Teknik Elektro Medik (D3)</option>
                    </select><br>
                  </div>
                  <div class="form-group">
                    <label for="nama">Pilihan Kedua</label>
                      <select class="program_studi form-control" name="pilihan2" value="{{ old('program_studi') }}">
                      <option value="">Program Studi</option>
                      <option value="63101">Ilmu Administrasi (S2)</option>
                      <option value="74101">Ilmu Hukum (S2)</option>
                      <option value="14901">Profesi Ners (Profesi)</option>
                      <option value="63201">Ilmu Administrasi Negara</option>
                      <option value="74201">Ilmu Hukum</option>
                      <option value="54211">Agroteknologi</option>
                      <option value="54201">Agribisnis</option>
                      <option value="60201">Ekonomi Pembangunan</option>
                      <option value="61201">Manajemen</option>
                      <option value="22201">Teknik Sipil</option>
                      <option value="26201">Teknik Industri</option>
                      <option value="14201">Ilmu Keperawatan</option>
                      <option value="48201">Farmasi</option>
                      <option value="13353">Analisis Kesehatan (D4)</option>
                      <option value="15301">Bidan Pendidik (D4)</option>
                      <option value="15401">Kebidanan (D3)</option>
                      <option value="20401">Teknik Elektro Medik (D3)</option>
                    </select><br>
                  </div>
                  <input type="submit" name="submit" value="Kirim" class="pull-right">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
              </form>
          </div>
        </div>
      </div>
    </div>
    @endsection('content')
