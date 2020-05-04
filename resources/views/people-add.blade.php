
@extends('template/main')

@section('title', 'SIDAVID19')

@section('container')
<h3>Form Tambah Data Orang</h3>
<form method='post' action='/people' class='mt-3'>
@csrf
  <div class="form-group">
    <label for="nik">NIK*</label>
    <input type="number" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" value="{{old('nik')}}">
    @error('nik')
    <div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
  </div>
  <div class="form-group">
    <label for="nama">Nama Lengkap*</label>
    <input type="text" class="form-control" name="nama">
  </div>
  <div class="form-group">
    <label for="alamat">Alamat*</label>
    <textarea class="form-control" name="alamat">
    </textarea>
  </div>
  <div class="form-group">
    <label for="jenis_kelamin">Jenis Kelamin*</label><br>
    <div class="form-check form-check-inline ">
        <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio1" value="L">
        <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio2" value="P">
        <label class="form-check-label" for="inlineRadio2">Perempuan</label>
    </div>
  </div>
  <div class="form-group">
    <label for="umur">Umur*</label>
    <input type="number" class="form-control" name="umur">
  </div>
  <button type="submit" class="btn btn-primary">Tambah Data</button>
</form>
@endsection