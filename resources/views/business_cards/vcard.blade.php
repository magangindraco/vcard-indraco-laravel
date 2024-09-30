@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card text-center">
        <div class="card-header">
            <h2>{{ $card->position }}</h2>
        </div>
        <div class="card-body">
            <img src="{{ asset('storage/' . $card->photo) }}" class="rounded-circle mb-3" style="width: 150px;" alt="Foto Profil">
            <h4>{{ $card->name }}</h4>

            <div class="mt-3">
                <a href="http://indraco.com" class="btn btn-primary">VCard Indraco</a>
                <a href="http://sda.co.id" class="btn btn-secondary">Sda</a>
                <a href="#" class="btn btn-success">Save Contact</a>
            </div>

            <div class="mt-4">
                <p>Telepon: {{ $card->phone_number }}</p>
                <p>Email: {{ $card->email }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
