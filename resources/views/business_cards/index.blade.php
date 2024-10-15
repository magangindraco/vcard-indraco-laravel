@extends('layouts.app')

@section('content')
    <style>
        /* Styles for the sidebar */
        .sidebar {
            background-color: #5D5D5D;
            min-height: 100vh;
            transition: width 0.3s ease;
            overflow: hidden;
            position: relative;
        }

        .sidebar.collapsed {
            width: 60px;
        }

        /* Styles for the main content */
        .main-content {
            background-color: #F8F9FA;
            min-height: 100vh;
            transition: margin-left 0.3s ease;
            padding: 20px;
        }

        .sidebar-toggle {
            cursor: pointer;
            font-size: 25px;
            color: white;
            position: absolute;
            left: 15px;
            top: 15px;
            z-index: 999;
            transition: transform 0.3s ease;
        }

        /* Styles for the cards */
        .card {
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        /* Scrollable Section */
        .scrollable {
            max-height: 500px;
            overflow-y: auto;
            padding: 10px;
            border-radius: 10px;
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        /* Sidebar text animation */
        .sidebar a {
            transition: opacity 0.3s ease, transform 0.3s ease;
        }

        .sidebar.collapsed .sidebar-text {
            opacity: 0;
            transform: translateX(-20px);
        }

        .sidebar:not(.collapsed) .sidebar-text {
            opacity: 1;
            transform: translateX(0);
        }
    </style>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar Admin -->
            <div class="col-md-3 sidebar" id="sidebar">
                <!-- Toggle Button -->
                <div class="sidebar-toggle" onclick="toggleSidebar()">☰</div>

                <!-- Logo Indraco di bagian atas sidebar -->
                <div class="text-center mb-4">
                    <img src="{{ asset('assets/img/logo-color.png') }}" alt="Indraco Logo" style="width: 100px;">
                    <h4 class="text-white mt-2">Indraco Admin</h4>
                </div>

                <!-- Menu Navigasi dengan tombol terpisah -->
                <div class="d-flex flex-column gap-2">
                    <!-- Tombol Tambah Kartu Nama -->
                    <a href="{{ route('business-cards.create') }}" class="btn btn-outline-light mt-4 text-start">
                        <img src="{{ asset('public-assets-bootstraps-icons/plus-circle.svg') }}" width="20" height="20" alt="">
                        <span class="sidebar-text">Tambah Kartu Nama</span>
                    </a>
                    <a href="{{ url('/about') }}" class="btn btn-outline-light text-start">
                        <img src="{{ asset('public-assets-bootstraps-icons/info-circle.svg') }}" width="20" height="20" alt="">
                        <span class="sidebar-text">About</span>
                    </a>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-md-9 main-content" id="main-content">
                <!-- Cards Section (Daftar Kartu Nama) -->
                <div class="row mt-4 scrollable">
                    @foreach ($businessCards as $businessCard)
                        <div class="col-md-6 mb-4">
                            <div class="card h-100 text-center shadow-sm" style="border-radius: 10px;">
                                <!-- Foto Profil -->
                                <img src="{{ asset('storage/' . $businessCard->photo) }}"
                                    class="card-img-top rounded-circle mt-4 mx-auto"
                                    style="width: 100px; height: 100px; object-fit: cover;"
                                    alt="{{ $businessCard->name }}">

                                <!-- Info Kartu Nama -->
                                <div class="card-body">
                                    <h5 class="card-title">{{ $businessCard->name }}</h5>
                                    <p class="card-text text-muted">{{ $businessCard->position }}</p>
                                    <p class="card-text text-muted">{{ $businessCard->phone_number }}</p>
                                    <p class="card-text text-muted">{{ $businessCard->email }}</p>
                                </div>

                                <!-- Tombol Aksi dengan Ikon Bootstrap Icons -->
                                <div class="card-footer d-flex justify-content-around bg-light">
                                    <!-- Show -->
                                    <a href="{{ route('business-cards.show', $businessCard->name) }}" class="btn btn-info btn-sm d-flex align-items-center">
                                        <img src="{{ asset('public-assets-bootstraps-icons/eye.svg') }}" width="20" height="20" alt="">
                                        <span class="sidebar-text">Show</span>
                                    </a>
                                    
                                    <!-- Edit -->
                                    <a href="{{ route('business-cards.edit', $businessCard->name) }}" class="btn btn-warning btn-sm d-flex align-items-center">
                                        <img src="{{ asset('public-assets-bootstraps-icons/pencil.svg') }}" width="20" height="20" alt="">
                                        <span class="sidebar-text">Edit</span>
                                    </a>

                                    <!-- Delete -->
                                    <form action="{{ route('business-cards.destroy', $businessCard->name) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm d-flex align-items-center">
                                            <img src="{{ asset('public-assets-bootstraps-icons/trash.svg') }}" width="20" height="20" alt="">
                                            <span class="sidebar-text">Hapus</span>
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

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const mainContent = document.getElementById('main-content');

            sidebar.classList.toggle('collapsed');
            if (sidebar.classList.contains('collapsed')) {
                mainContent.style.marginLeft = "60px"; // Adjust this value as needed
            } else {
                mainContent.style.marginLeft = "240px"; // Adjust this value as needed
            }
        }
    </script>
@endsection
