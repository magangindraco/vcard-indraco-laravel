@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar Admin -->

            <!-- Main Content -->
            <div class="col-md-9" style="background-color: #F8F9FA; min-height: 100vh;">
                <!-- Cards Section (Daftar Kartu Nama) -->
                <div class="row mt-4">
                    @foreach ($businessCards as $businessCard)
                        <div class="col-md-6 mb-4">
                            <div class="card h-100 text-center shadow-sm card-3d">
                                <!-- Foto Profil -->
                                <img src="{{ asset('storage/' . $businessCard->photo) }}"
                                    class="card-img-top rounded-circle mt-4 mx-auto img-fluid"
                                    style="width: 100px; height: 100px; object-fit: cover;"
                                    alt="{{ $businessCard->name }}">

                                <!-- Info Kartu Nama -->
                                <div class="card-body">
                                    <h5 class="card-title">{{ $businessCard->name }}</h5>
                                    <p class="card-text text-muted">{{ $businessCard->position }}</p>
                                    <p class="card-text text-muted">{{ $businessCard->phone_number }}</p>
                                    <p class="card-text text-muted">{{ $businessCard->email }}</p>
                                </div>

                                <!-- Tombol Aksi dengan Ikon dan Efek Hover -->
                                <div class="card-footer bg-white d-flex justify-content-center gap-2">
                                    <a href="{{ route('business-cards.show', $businessCard->name) }}"
                                        class="btn btn-outline-info btn-sm action-btn" style="flex: 1; max-width: 80px;">
                                        <img src="{{ asset('assets/img/ikon-show.png') }}" width="25" height="25" alt=""
                                            class="mb-1">
                                        <span>Show</span>
                                    </a>
                                    
                                    <a href="{{ route('business-cards.edit', $businessCard->name) }}"
                                        class="btn btn-outline-warning btn-sm action-btn" style="flex: 1; max-width: 80px;">
                                        <img src="{{ asset('assets/img/ikon-edit.png') }}" width="25" height="25" alt=""
                                            class="mb-1"><br>
                                        <span>Edit</span>
                                    </a>

                                    <form action="{{ route('business-cards.destroy', $businessCard->name) }}"
                                        method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm action-btn"
                                            style="flex: 1; max-width: 80px;">
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

        /* Kartu 3D */
        .card-3d {
            perspective: 1000px;
            transition: transform 0.5s;
        }

        .card-3d:hover {
            transform: translateY(-10px) rotateY(5deg) rotateX(5deg);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        /* Shadow tambahan */
        .card {
            transition: box-shadow 0.3s ease;
        }

        .card:hover {
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
        }
    </style>
@endsection
