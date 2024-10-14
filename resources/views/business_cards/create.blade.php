@extends('layouts.app')

@section('title', 'Tambah Kartu Nama')

@section('content')
<style>
    body {
        font-family: 'Arial', sans-serif;
        background: linear-gradient(135deg, #f7f9fc 0%, #e3e6ea 100%);
        margin: 0;
        padding: 20px;
        overflow: hidden; /* Prevent scrollbars from appearing during animations */
    }

    .container {
        max-width: 600px;
        margin: auto;
        background: #fff;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        position: relative; /* For positioning pseudo-elements */
        overflow: hidden; /* Prevents overflow of pseudo-elements */
    }

    .container:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.4);
    }

    .container::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 300%;
        height: 300%;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        animation: pulse 6s infinite;
        z-index: 0;
    }

    @keyframes pulse {
        0% {
            transform: scale(0.9);
            opacity: 0.5;
        }
        50% {
            transform: scale(1);
            opacity: 0.3;
        }
        100% {
            transform: scale(0.9);
            opacity: 0.5;
        }
    }

    h1 {
        color: #333;
        margin-bottom: 20px;
        text-align: center;
        position: relative;
        z-index: 1; /* Bring text above the pulse effect */
    }

    .form-elegant {
        display: flex;
        flex-direction: column;
        position: relative; /* For positioning text above the pulse */
        z-index: 1; /* Bring form above the pulse effect */
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        margin-bottom: 5px;
        color: #555;
        font-weight: bold;
    }

    input[type="text"],
    input[type="file"],
    input[type="email"] {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    input[type="text"]:focus,
    input[type="file"]:focus,
    input[type="email"]:focus {
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }

    .btn-primary {
        background-color: #007bff;
        color: white;
        padding: 10px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease, transform 0.2s ease;
        position: relative;
        z-index: 1; /* Bring button above the pulse effect */
    }

    .btn-primary:hover {
        background-color: #0056b3;
        transform: translateY(-2px);
    }

    .btn-back {
        background-color: #6c757d;
        color: white;
        padding: 10px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease, transform 0.2s ease;
        text-align: center;
        text-decoration: none;
        position: relative;
        z-index: 1; /* Bring button above the pulse effect */
    }

    .btn-back:hover {
        background-color: #5a6268;
        transform: translateY(-2px);
    }

    .button-container {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
    }
</style>

<div class="container">
    <h1 class="text-center mb-4">Buat Kartu Bisnis</h1>
    <form action="{{ route('business-cards.store') }}" method="POST" enctype="multipart/form-data" class="form-elegant">
        @csrf
        <!-- Input untuk file .vcf -->
        <div class="form-group">
            <label for="vcard">Unggah File VCF</label>
            <input type="file" name="vcard" class="form-control" accept=".vcf">
        </div>
        
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="photo">Foto</label>
            <input type="file" name="photo" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="position">Jabatan</label>
            <input type="text" name="position" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="mobile">Nomor Mobile</label>
            <input type="text" name="mobile" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="office">Nomor Office</label>
            <input type="text" name="office" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="button-container">
            <a href="{{ route('business-cards.index') }}" class="btn-back">Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>
@endsection
