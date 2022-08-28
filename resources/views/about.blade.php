@extends('layouts.main')

@section('container')
    <h2>Halaman About</h2>
    <h5>{{ $name }}</h5>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">
@endsection