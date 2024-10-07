@extends('layouts.app')

@section('title', 'Edit Kartu Nama')

@section('content')
    <h1>Edit Kartu Nama</h1>
    <form action="{{ route('business-cards.update', $businessCards->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $businessCards->name }}" required>
        <input type="file" name="photo">
        <input type="text" name="position" value="{{ $businessCards->position }}" required>
        <input type="text" name="phone_number" value="{{ $businessCards->phone_number }}" required>
        <input type="email" name="email" value="{{ $businessCards->email }}" required>
        <button type="submit">Update</button>
    </form>
@endsection
