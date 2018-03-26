@extends('layouts.master')


@section('content')

<div class="container">
    <div class="col-lg-12 well">
    <div class="row">
      <form action="/status" method="post">
        <div class="col-sm-12">
          <div class="row">
            <div class="col-sm-12 form-group">
              <label>Masukkan Nomor Pendaftaran*</label>
              <input autocomplete="off" type="text" placeholder="Nomor Pendaftaran" name="nim" class="form-control">
              @if($errors->has('nim'))
              <span style="color:red;">{{ $errors->first('nim') }}</span>
              @endif
            </div>
          </div>
          <input type="submit" name="submit" value="Kirim" class="pull-right">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
      </div>
      </div>
    </form>
    </div>
  </div>

@endsection('content')
