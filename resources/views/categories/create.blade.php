@extends('layouts.app')

@section('title', 'Tambah Kategori')

@section('content')
<h3>Tambah Kategori</h3>
<form action="{{ route('categories.store') }}" method="POST" class="card card-body">
    @csrf
    @include('categories._form')
</form>
@endsection