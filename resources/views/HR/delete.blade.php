@extends('layouts.app')

@section('title', 'Konfirmasi Hapus HR')

@section('content')
<div class="container">
    <div class="card shadow-sm border-0">
        <div class="card-header bg-danger text-white">
            <h4 class="mb-0">Konfirmasi Hapus HR</h4>
        </div>
        <div class="card-body">
            <p class="mb-4">Apakah Anda yakin ingin menghapus data HR berikut?</p>

            <ul class="list-group mb-4">
                <li class="list-group-item">
                    <strong>Nama:</strong> {{ $hr->nama }}
                </li>
                <li class="list-group-item">
                    <strong>Jabatan:</strong> {{ $hr->jabatan }}
                </li>
            </ul>

            <form action="{{ route('hr.destroy', $hr->id) }}" method="POST" class="d-flex justify-content-between">
                @csrf
                @method('DELETE')

                <a href="{{ route('hr.index') }}" class="btn btn-secondary">
                    ← Batal
                </a>
                <button type="submit" class="btn btn-danger">
                    <i class="bi bi-trash me-1"></i> Hapus HR
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
