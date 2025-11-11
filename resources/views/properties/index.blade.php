@extends('layouts.app')

@section('title', 'Daftar Properti')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Daftar Properti</h2>
    <a href="{{ route('properties.create') }}" class="btn btn-primary">+ Tambah Properti</a>
</div>

<div class="card">
    <div class="card-body">
        @if($properties->count() > 0)
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Properti</th>
                        <th>Alamat</th>
                        <th>Harga</th>
                        <th>Kontak</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($properties as $property)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <strong>{{ $property->name }}</strong>
                            @if($property->description)
                            <br><small class="text-muted">{{ Str::limit($property->description, 50) }}</small>
                            @endif
                        </td>
                        <td>{{ Str::limit($property->address, 50) }}</td>
                        <td>{{ $property->price_range }}</td>
                        <td>
                            @if($property->contact_phone)
                            <small>{{ $property->contact_phone }}</small><br>
                            @endif
                            @if($property->contact_email)
                            <small>{{ $property->contact_email }}</small>
                            @endif
                        </td>
                        <td>
                            <span class="badge {{ $property->status_badge }}">
                                {{ $property->status }}
                            </span>
                        </td>
                        <td>
                            <a href="{{ route('properties.show', $property->id) }}" class="btn btn-sm btn-info">Detail</a>
                            <a href="{{ route('properties.edit', $property->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('properties.destroy', $property->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" 
                                        onclick="return confirm('Hapus properti ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @else
        <div class="text-center py-4">
            <h5 class="text-muted">Belum ada properti</h5>
            <a href="{{ route('properties.create') }}" class="btn btn-primary mt-2">Tambah Properti Pertama</a>
        </div>
        @endif
    </div>
</div>
@endsection