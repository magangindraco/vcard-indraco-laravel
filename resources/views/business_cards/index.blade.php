@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar Admin -->
            <div class="col-md-3" style="background-color: #5D5D5D; padding-top: 20px; min-height: 100vh;">
                <!-- Logo Indraco di bagian atas sidebar -->
                <div class="text-center mb-4">
                    <img src="{{ asset('assets/img/logo-color.png') }}" alt="Indraco Logo" style="width: 100px;">
                    <h4 class="text-white mt-2">Indraco Admin</h4>
                </div>

                <!-- Menu Navigasi dengan tombol terpisah -->
                <div class="d-flex flex-column gap-2">
                    <!-- Tombol Dashboard -->
                    {{-- <a href="#" class="btn btn-outline-light text-start"
                        style="display: flex; justify-content: flex-start; align-items: center;">
                        <i class="fas fa-tachometer-alt mr-2"></i> Dashboard
                    </a> --}}

                    <!-- Tombol Users -->
                    {{-- <a href="#" class="btn btn-outline-light text-start"
                        style="display: flex; justify-content: flex-start; align-items: center;">
                        <i class="fas fa-users mr-2"></i> Users
                    </a> --}}

                    <!-- Tombol Kartu Nama -->
                    {{-- <a href="#" class="btn btn-outline-light text-start"
                        style="display: flex; justify-content: flex-start; align-items: center;">
                        <i class="fas fa-id-card mr-2"></i> Kartu Nama
                    </a> --}}

                    <!-- Tombol Tambah Kartu Nama -->
                    <a href="{{ route('business-cards.create') }}" target="_blank" class="btn btn-outline-light mt-4 text-start">
                        <img src="{{ asset('assets/img/ikon-kartu nama.png') }}" width="25" height="25" alt=""
                            class="mb-1">
                        <span>Tambah Kartu Nama</span>
                    </a>

                </div>
            </div>

            <!-- Main Content -->
            <div class="col-md-9" style="background-color: #F8F9FA; min-height: 100vh;">
                <!-- Cards Section (Daftar Kartu Nama) -->
                <div class="row mt-4">
                    @foreach ($businessCards as $businessCards)
                        <div class="col-md-6 mb-4">
                            <div class="card h-100 text-center shadow-sm" style="border-radius: 10px;">
                                <!-- Foto Profil -->
                                <img src="{{ asset('storage/' . $businessCards->photo) }}"
                                    class="card-img-top rounded-circle mt-4 mx-auto"
                                    style="width: 100px; height: 100px; object-fit: cover;"
                                    alt="{{ $businessCards->name }}">

                                <!-- Info Kartu Nama -->
                                <div class="card-body">
                                    <h5 class="card-title">{{ $businessCards->name }}</h5>
                                    <p class="card-text text-muted">{{ $businessCards->position }}</p>
                                    <p class="card-text text-muted">{{ $businessCards->phone_number }}</p>
                                    <p class="card-text text-muted">{{ $businessCards->email }}</p>
                                </div>

                                <!-- Tombol Aksi dengan Ikon dan Efek Hover -->
                                <div class="card-footer bg-white d-flex justify-content-center gap-2">
                                    <a href="{{ route('business-cards.show', $businessCards->name) }}"
                                        class="btn btn-outline-info btn-sm action-btn" style="width: 80px;">
                                        <img src="{{ asset('assets/img/ikon-show.png') }}" width="25" height="25" alt=""
                                            class="mb-1">
                                        <span>Show</span>
                                    </a>
                                    
                                    <a href="{{ route('business-cards.edit', $businessCards->name) }}"
                                        class="btn btn-outline-warning btn-sm action-btn" style="width: 80px;">
                                        <img src="{{ asset('assets/img/ikon-edit.png') }}" width="25" height="25" alt=""
                                            class="mb-1"><br>
                                        <span>Edit</span>
                                    </a>

                                    <form action="{{ route('business-cards.destroy', $businessCards->name) }}"
                                        method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm action-btn"
                                            style="width: 80px;">
                                            <img src="{{ asset('assets/img/ikon-eraser.png') }}" width="25" height="25" alt=""
                                            class="mb-1">
                                        <span>Hapus</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Efek Hover CSS -->
    <style>
        /* Efek hover untuk tombol di sidebar */
        .btn-outline-light:hover {
            background-color: #ffffff;
            color: #5D5D5D;
            border-color: #ffffff;
        }

        /* Efek hover untuk tombol action pada kartu nama */
        .action-btn {
            transition: background-color 0.3s, color 0.3s;
        }

        .action-btn:hover {
            background-color: #007bff;
            color: white;
            border-color: #007bff;
        }

        .btn-outline-info:hover {
            background-color: #17a2b8;
            color: white;
        }

        .btn-outline-warning:hover {
            background-color: #ffc107;
            color: white;
        }

        .btn-outline-danger:hover {
            background-color: #dc3545;
            color: white;
        }

        /* Efek transisi umum */
        .btn {
            transition: background-color 0.3s, color 0.3s;
        }
    </style>
@endsection
