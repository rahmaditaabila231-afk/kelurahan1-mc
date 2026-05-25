@extends('layouts.app')

@section('title', 'Data Penduduk')

@section('content')
  <h1>Data Penduduk</h1>
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{ $id }}</td>
        <td>{{ $nama }}</td>
        <td>{{ $alamat }}</td>
        <td>
          {{ $action }}
        </td>
      </tr>
    </tbody>
  </table>
@endsection