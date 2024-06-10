{{-- resources/views/categories/edit.blade.php --}}
@extends('layout')

@section('content')
    <div class="container">
        <h2>Edit Kategori</h2>
        <form action="{{ route('categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="text" name="name" value="{{ $category->name }}" required>
            <button type="submit">Update Kategori</button>
        </form>
    </div>
@endsection
