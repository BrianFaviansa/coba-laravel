@extends('layouts.main')

@section('container')
    <h1>Halaman About</h1>
    <h3>Halo, nama saya {{ $name }}</h3>
    <p>kontak saya di {{ $email }}</p>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">

@endsection
