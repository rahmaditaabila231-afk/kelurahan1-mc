@extends('layouts.app')

@section('title', 'Surat Kelurahan')
@section('content')
<div class="card p-4">
    <h3>Daftar Pengajuan Surat Kelurahan</h3>
        <div class="d-flex justify-content-between align-items-center mb-3">
            <a href="{{ route('surat.create') }}" class="btn btn-primary btn-sm">
                <i class="fas fa-plus-circle mr-1"></i> Tambah Pengajuan Surat
            </a>
        </div>

        @if(session('sukses'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="icon fas fa-check-circle mr-2"></i> {{ session('sukses') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
    <table class="table table-striped table-bordered mt-3">
        <thead>
            <tr>
                <th>No Surat</th>
                <th>Jenis Surat</th>
                <th>Nama Pemohon</th>
                <th>NIK Pemohon</th>
                <th>Tanggal Ajuan</th>
            </tr>
        </thead>
        <tbody>

            @foreach($semuaSurat as $s)
            <tr>
                <td>{{ $s->nomor_surat }}</td>
                <td>{{ $s->jenis_surat }}</td>
                <td>{{ $s->penduduk->nama }}</td>
                <td>{{ $s->penduduk->nik }}</td>
                <td>{{ $s->tanggal_ajuan }}</td>
            </tr>
            @endforeach
        </tbody>    
    </table>
</div>
@endsection