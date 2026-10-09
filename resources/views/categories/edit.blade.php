@extends('layouts.app')

@section('title', 'Edit Kategori')

@section('content')
<h3>Edit Kategori</h3>
<form action="{{ route('categories.update', $category) }}" method="POST" class="card card-body">
    @csrf
    @method('PUT')
    @include('categories._form')
</form>
@endsection