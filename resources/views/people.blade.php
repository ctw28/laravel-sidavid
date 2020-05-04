
@extends('template/main')

@section('title', 'SIDAVID19')

@section('container')
<h2>Daftar Orang</h2>
@if (session('info'))
    <div class="alert alert-success">
        {{ session('info') }}
    </div>
@endif
<a href="{{route('people/tambah')}}" class="btn btn-primary mt-3 mb-4">Tambah Data</a>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">NIK</th>
      <th scope="col">NAMA</th>
      <th scope="col">ALAMAT</th>
      <th scope="col">UMUR</th>
      <th scope="col">JENIS KELAMIN</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach($peoples as $orang)
    <tr>
      <td>{{$loop->iteration}}</td>
      <td>{{$orang->nik}}</td>
      <td>{{$orang->nama}}</td>
      <td>{{$orang->alamat}}</td>
      <td>{{$orang->umur}}</td>
      <td>{{$orang->jenis_kelamin}}</td>
      <td>
        <button class="btn btn-warning btn-small">Edit</button> 
        <button class="btn btn-danger btn-small">Hapus</button> 
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection