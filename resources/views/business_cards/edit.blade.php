@extends('layouts.app')

@section('title', 'Edit Kartu Nama')

@section('content')


    <h1>Edit Kartu Nama</h1>
    <form action="{{ route('business-cards.update', $businessCard->name) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <!-- <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" name="name" class="form-control" required>
        </div> -->

        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" name="name" value="{{ $businessCard->name }}" required>
        </div>

        <input type="file" name="photo">

        <input type="text" name="position" value="{{ $businessCard->position }}" required>

        <input type="text" name="mobile" value="{{ $businessCard->mobile }}" required>

        <input type="text" name="office" value="{{ $businessCard->office }}" required>

        <input type="email" name="email" value="{{ $businessCard->email }}" required>

        <button type="submit">Update</button>
    </form>
@endsection
