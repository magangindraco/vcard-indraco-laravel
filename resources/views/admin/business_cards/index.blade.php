@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Admin: Kelola Kartu Nama</h1>
    <a href="{{ route('business-cards.create') }}" class="btn btn-primary mb-3">Tambah Kartu Nama</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Foto</th>
                <th>Jabatan</th>
                <th>Nomor Telepon</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cards as $card)
            <tr>
                <td>{{ $card->name }}</td>
                <td><img src="{{ asset('storage/' . $card->photo) }}" style="width: 50px;" alt="Foto"></td>
                <td>{{ $card->position }}</td>
                <td>{{ $card->phone_number }}</td>
                <td>{{ $card->email }}</td>
                <td>
                    <a href="{{ route('business-cards.edit', $card->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('business-cards.destroy', $card->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
