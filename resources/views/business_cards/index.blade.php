@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach ($cards as $card)
            <div class="card mt-4" style="width: 18rem;">
                <div class="card text-center mx-auto" style="width: 18rem; padding: 20px;">
                    <!-- Wrapper untuk logo dan avatar dengan justify-content-center -->
                    <div class="d-flex justify-content-center flex-column align-items-center">
                        <!-- Logo perusahaan di atas avatar -->
                        <img src="{{ asset('images/indraco.jpg') }}" alt="Company Logo"
                            style="width: 100px; margin-bottom: 15px;">

                        <!-- Avatar (Foto Profil) -->
                        <img src="{{ asset('storage/' . $card->photo) }}" class="rounded-circle mx-auto"
                            style="width: 150px;" alt="{{ $card->name }}">

                        <!-- Nama -->
                        <h5 class="mt-3">{{ $card->name }}</h5>

                        <!-- Nama Perusahaan -->
                        <h5 class="mt-3">Indraco</h5>

                        <!-- Nama dan Jabatan -->
                        <h4 class="mt-3">{{ $card->name }}</h4>
                        <p>{{ $card->position }}</p>

                        <!-- Tombol-tombol -->
                        <a href="https://indraco.com" class="btn btn-primary mt-2">Website Indraco</a>
                        <a href="https://sda.co.id" class="btn btn-secondary mt-2">Website SDA</a>
                        <a href="{{ url('storage/vcf/' . $card->name . '.vcf') }}" class="btn btn-success mt-2">Save
                            Contact</a>

                        <!-- Informasi Kontak -->
                        <div class="mt-4">
                            <p><strong>Phone:</strong> {{ $card->phone_number }}</p>
                            <p><strong>Email:</strong> {{ $card->email }}</p>
                            <p><strong>Address:</strong> Alamat Perusahaan</p>
                        </div>
                    </div>
                </div>
        @endforeach
    </div>
@endsection
