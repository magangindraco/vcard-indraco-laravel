@extends('layouts.app')

@section('title', 'Edit Kartu Nama')

@section('content')
    <h1>Edit Kartu Nama</h1>
    <form action="{{ route('business-cards.update', $card->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $card->name }}" required>
        <input type="file" name="photo">
        <input type="text" name="position" value="{{ $card->position }}" required>
        <input type="text" name="phone_number" value="{{ $card->phone_number }}" required>
        <input type="email" name="email" value="{{ $card->email }}" required>
        <button type="submit">Update</button>
    </form>
@endsection
