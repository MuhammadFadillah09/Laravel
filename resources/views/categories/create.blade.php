@extends('layout')

@section('content')
    <h2>Tambah Kategori</h2>
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nama Kategori" required>
        <button type="submit">Tambah Kategori</button>
    </form>
@endsection
