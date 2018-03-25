<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Mina" rel="stylesheet">

    <title>PPDB</title>
  </head>
  <body>
    <div class="container" style="margin-top:5%;">
      <div class="jumbotron">
        <div class="col-md-12 banner">
          <h1 class="text-center">PPDB ONLINE UNIVERSITAS KADIRI</h1>
        </div>
        <div class="row">
          <div class="col-md-12">
              <form action="/studies" method="post">
                  <label><b>Data Sekolah</b></label>
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

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
