@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-12">
        <h1>Dashboard KostKon</h1>
        <p class="lead">Selamat datang, {{ Auth::user()->name }}! 👋</p>
    </div>
</div>

<div class="row">
    <div class="col-md-4 mb-4">
        <div class="card text-white bg-primary">
            <div class="card-body">
                <h5 class="card-title">Total Users</h5>
                <h2 class="card-text">{{ \App\Models\User::count() }}</h2>
            </div>
        </div>
    </div>
    
    <div class="col-md-4 mb-4">
        <div class="card text-white bg-success">
            <div class="card-body">
                <h5 class="card-title">Admin Users</h5>
                <h2 class="card-text">{{ \App\Models\User::where('role', 'admin')->count() }}</h2>
            </div>
        </div>
    </div>
    
    <div class="col-md-4 mb-4">
        <div class="card text-white bg-info">
            <div class="card-body">
                <h5 class="card-title">Penyewa Users</h5>
                <h2 class="card-text">{{ \App\Models\User::where('role', 'penyewa')->count() }}</h2>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Quick Actions</h5>
            </div>
            <div class="card-body">
                <div class="d-grid gap-2 d-md-flex">
                    <a href="/users" class="btn btn-primary">Manage Users</a>
                    <a href="/users/create" class="btn btn-success">Tambah User Baru</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection