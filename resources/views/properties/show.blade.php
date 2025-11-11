@extends('layouts.app')

@section('title', $property->name)

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="mb-0">{{ $property->name }}</h4>
                <span class="badge {{ $property->status_badge }}">
                    {{ $property->status }}
                </span>
            </div>
            <div class="card-body">
                <h6>Alamat:</h6>
                <p class="text-muted">{{ $property->address }}</p>
                
                <h6>Deskripsi:</h6>
                <p>{{ $property->description ?? 'Tidak ada deskripsi' }}</p>
                
                <div class="row">
                    <div class="col-md-6">
                        <h6>Range Harga:</h6>
                        <p>{{ $property->price_range }}</p>
                    </div>
                    <div class="col-md-6">
                        <h6>Kontak:</h6>
                        <p>
                            @if($property->contact_phone)
                            <strong>Telp:</strong> {{ $property->contact_phone }}<br>
                            @endif
                            @if($property->contact_email)
                            <strong>Email:</strong> {{ $property->contact_email }}
                            @endif
                        </p>
                    </div>
                </div>
                
                <div class="row mt-3">
                    <div class="col-md-6">
                        <strong>Dibuat:</strong> {{ $property->created_at->format('d M Y H:i') }}<br>
                        <strong>Diupdate:</strong> {{ $property->updated_at->format('d M Y H:i') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Aksi</h5>
            </div>
            <div class="card-body">
                <div class="d-grid gap-2">
                    <a href="{{ route('properties.index') }}" class="btn btn-secondary">
                        Kembali ke Daftar
                    </a>
                    <a href="{{ route('properties.edit', $property->id) }}" class="btn btn-warning">
                        Edit Properti
                    </a>
                    <form action="{{ route('properties.destroy', $property->id) }}" method="POST" class="d-grid">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" 
                                onclick="return confirm('Hapus properti ini?')">Hapus Properti</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection