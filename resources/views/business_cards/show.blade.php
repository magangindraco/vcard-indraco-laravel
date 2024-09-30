@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card mt-4" style="width: 18rem;">
        <div class="card-body text-center">
            <img src="{{ asset('storage/' . $card->photo) }}" class="rounded-circle" style="width: 150px;" alt="{{ $card->name }}">
            <h5 class="mt-3">Indraco</h5>
            <h4 class="mt-3">{{ $card->name }}</h4>
            <p>{{ $card->position }}</p>
            <a href="{{ url('storage/vcf/' . $card->name . '.vcf') }}" class="btn btn-success mt-2">Save Contact</a>
            <div class="mt-4">
                <p><strong>Phone:</strong> {{ $card->phone_number }}</p>
                <p><strong>Email:</strong> {{ $card->email }}</p>
                <p><strong>Address:</strong> Alamat Perusahaan</p>
            </div>
        </div>
    </div>
</div>
@endsection
