{{-- @extends('layouts.app')

@section('title', 'Tambah Kartu Nama')

@section('content')
    <h1>Tambah Kartu Nama</h1>
    <form action="{{ route('business-cards.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="Nama" required>
        <input type="file" name="photo" required>
        <input type="text" name="position" placeholder="Jabatan" required>
        <input type="text" name="phone_number" placeholder="Nomor Telepon" required>
        <input type="email" name="email" placeholder="Email" required>
        <button type="submit">Simpan</button>
    </form>
@endsection --}}

@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('business-cards.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
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
            <label for="phone_number">Nomor Telepon</label>
            <input type="text" name="phone_number" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
    </form>
</div>
@endsection
