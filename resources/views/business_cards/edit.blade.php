@extends('layouts.app')

@section('title', 'Edit Kartu Nama')

@section('content')
<style>
    body {
        font-family: 'Arial', sans-serif;
        background: linear-gradient(135deg, #f7f9fc 0%, #e3e6ea 100%);
        margin: 0;
        padding: 0px;
        overflow: hidden;
    }

    .container {
        max-width: 600px;
        margin: auto;
        background: #fff;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
        position: relative;
        overflow: hidden;
    }

    h1 {
        color: #333;
        margin-bottom: 20px;
        text-align: center;
        position: relative;
    }

    .form-elegant {
        display: flex;
        flex-direction: column;
        position: relative;
    }

    .form-group {
        margin-bottom: 20px;
        display: flex;
        flex-direction: column;
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
        width: 100%;
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
        margin-top: 20px;
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
        margin-top: 20px;
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
    <h1>Edit Kartu Nama</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('business-cards.update', $businessCard->name) }}" method="POST" enctype="multipart/form-data" class="form-elegant">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" id="name" name="name" value="{{ old('name', $businessCard->name) }}" placeholder="Masukkan Nama" required>
        </div>

        @if ($businessCard->photo)
            <div class="form-group">
                <label>Foto Saat Ini</label>
                <img src="{{ asset('storage/' . $businessCard->photo) }}" alt="Current Photo" class="img-thumbnail mb-2" style="max-width: 100%;">
            </div>
        @endif

        <div class="form-group">
            <label for="photo">Foto</label>
            <input type="file" name="photo">
        </div>

        <div class="form-group">
            <label for="position">Jabatan</label>
            <input type="text" id="position" name="position" value="{{ old('position', $businessCard->position) }}" placeholder="Masukkan Jabatan" required>
        </div>

        <div class="form-group">
            <label for="mobile">Nomor Mobile</label>
            <input type="text" id="mobile" name="mobile" value="{{ old('mobile', $businessCard->mobile) }}" placeholder="Masukkan Nomor Mobile" required>
        </div>

        <div class="form-group">
            <label for="office">Nomor Office</label>
            <input type="text" id="office" name="office" value="{{ old('office', $businessCard->office) }}" placeholder="Masukkan Nomor Office" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email', $businessCard->email) }}" placeholder="Masukkan Email" required>
        </div>

        <div class="button-container">
            <a href="{{ route('business-cards.index') }}" class="btn-back">Kembali</a>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
@endsection
