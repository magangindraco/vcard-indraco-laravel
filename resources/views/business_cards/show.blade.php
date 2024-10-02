@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="card text-center" style="width: 100%; max-width: 400px; padding: 20px;">
            <!-- Logo perusahaan di atas profil, di tengah -->
            <img src="{{ asset('images/indraco.jpg') }}" alt="Company Logo"
                style="width: 120px; margin-bottom: 15px; display: block; margin-left: auto; margin-right: auto;">

            <!-- Avatar (Foto Profil) -->
            <div style="width: 150px; height: 150px; overflow: hidden; border-radius: 50%; margin: 0 auto;">
                <img src="{{ asset('storage/' . $card->photo) }}" style="width: 100%; height: 100%; object-fit: cover;"
                    alt="{{ $card->name }}">
            </div>

            <h5 class="mt-3">INDRACO</h5>
            <h6>PT.INDRACO GLOBAL INDONESIA</h6>
            <h6>{{ $card->job_title }}</h6> <!-- Menampilkan Jabatan -->

            <!-- Kotak pembungkus tombol -->
            <div class="mt-4 p-3"
                style="background-color: #383838; border-radius: 0px; width: calc(100% + 40px); margin-left: -20px; margin-right: -20px;">
                <!-- Tombol dengan ikon di atas teks di dalam flexbox -->
                <div class="d-flex justify-content-between gap-2">
                    <!-- Tombol 1: Website Indraco -->
                    <a href="https://indraco.com" target="_blank"
                        class="flex-fill d-flex flex-column align-items-center justify-content-center"
                        style="height: 70px; text-decoration: none; color: white;">
                        <i class="fas fa-globe mb-1" style="font-size: 24px; color: white;"></i>
                        <span>Website Indraco</span>
                    </a>

                    <!-- Tombol 2: Website SDA -->
                    <a href="https://sda.co.id" target="_blank"
                        class="flex-fill d-flex flex-column align-items-center justify-content-center"
                        style="height: 70px; text-decoration: none; color: white;">
                        <i class="fas fa-building mb-1" style="font-size: 24px; color: white;"></i>
                        <span>Website SDA</span>
                    </a>

                    <!-- Tombol 3: Save Contact -->
                    <a href="#" class="flex-fill d-flex flex-column align-items-center justify-content-center"
                        style="height: 70px; text-decoration: none; color: white;">
                        <i class="fas fa-address-book mb-1" style="font-size: 24px; color: white;"></i>
                        <span>Save Contact</span>
                    </a>
                </div>
            </div>

            <!-- Informasi tambahan di bawah tombol -->
            <div class="p-3"
                style="background-color: #444444; border-radius: 0px; padding-left: 20px; padding-right: 20px; width: calc(100% + 40px); margin-left: -20px;">
                <!-- Menampilkan nomor telepon -->
                <p class="d-flex align-items-center" style="color: white;">
                    <i class="fas fa-phone-alt mr-2" style="margin-right: 10px;"></i>
                    {{ $card->phone_number }}
                </p>

                <!-- Menampilkan nomor posisi -->
                <p class="d-flex align-items-center" style="color: white;">
                    <i class="fas fa-phone-alt mr-2" style="margin-right: 10px;"></i>
                    {{ $card->position }}
                </p>

                <!-- Menampilkan email -->
                <p class="d-flex align-items-center" style="color: white;">
                    <i class="fas fa-envelope mr-2" style="margin-right: 10px;"></i>
                    <a href="mailto:{{ $card->email }}" style="text-decoration: none; color: inherit;">
                        {{ $card->email }}
                    </a>
                </p>

                <!-- Menampilkan alamat (jika ada) -->
                @if ($card->address)
                    <p class="d-flex align-items-center" style="color: white;">
                        <i class="fas fa-map-marker-alt mr-2" style="margin-right: 10px;"></i>
                        {{ $card->address }}
                    </p>
                @endif

                <!-- Menampilkan website Indraco -->
                <p class="d-flex align-items-center" style="color: white;">
                    <i class="fas fa-globe mr-2" style="margin-right: 10px;"></i>
                    <a href="https://indraco.com" target="_blank" style="text-decoration: none; color: inherit;">
                        www.indraco.com
                    </a>
                </p>
            </div>

            <!-- Konten Contact Us -->
            <div class="p-3"
                style="background-color: #444444; border-radius: 0px; padding-left: 20px; padding-right: 20px; width: calc(100% + 40px); margin-left: -20px;">
                <h4 style="color: white;">CONTACT US</h4>
                <P style="color: white">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo nulla fugiat suscipit
                    distinctio nihil eaque esse tenetur ullam voluptate dignissimos minus labore molestias excepturi
                    explicabo saepe, perferendis a dolorum ipsum?</P>


                <!-- Pembungkus tiga kotak sejajar -->
                <div class="d-flex justify-content-between gap-2 mt-3 align-items-stretch">
                    <!-- Kotak 1: our office -->
                    <div class="flex-fill d-flex flex-column gap-2 align-items-center justify-content-start"
                        style="border: 2px solid white; min-height: 170px; color: white; padding: 10px; border-radius: 10px;">
                        <i class="fa-regular fa-building mb-2" style="font-size: 24px; margin-top: 10px;"></i>
                        <span>Our Office</span>
                        <small style="font-size:10px; text-align: center;">Jalan Semeru Industri 1 <br> No.133-135<br>Kec. Driyorejo,Gresik <br>61177 <br>Jawa Timur <br>Indonesia</small>
                    </div>

                    <!-- Kotak 2: lets talk -->
                    <div class="flex-fill d-flex flex-column gap-2 align-items-center justify-content-start"
                        style="border: 2px solid white; min-height: 170px; color: white; padding: 10px; border-radius: 10px;">
                        <i class="fa-solid fa-phone-volume mb-2" style="font-size: 24px; margin-top: 10px;"></i>
                        <span>Let's Talk</span>
                        <small style="font-size:10px; text-align: center;">T. +62 31 756 8777</small>
                    </div>

                    <!-- Kotak 3: email inquiry -->
                    <div class="flex-fill d-flex flex-column gap-2 align-items-center justify-content-start"
                        style="border: 2px solid white; min-height: 170px; color: white; padding: 10px; border-radius: 10px;">
                        <i class="fa-solid fa-envelope mb-2" style="font-size: 24px; margin-top: 10px;"></i>
                        <span>Email Inquiry</span>
                        <small style="font-size:10px; text-align: center;">E. info@indraco.com</small>
                    </div>
                </div>




            </div>
        </div>
    </div>
    </div>

    <!-- Tambahan styling -->
    <style>
        /* Style agar avatar selalu lingkaran */
        .rounded-circle {
            object-fit: cover;
            width: 100%;
            height: 100%;
        }

        /* Jarak antara ikon dan teks di dalam p */
        p i {
            margin-right: 10px;
        }
    </style>
@endsection
