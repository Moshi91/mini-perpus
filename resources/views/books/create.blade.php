@extends('layouts.app')

@section('title', 'Tambah Buku')

@section('content')
<h3>Tambah Buku</h3>
<form action="{{ route('books.store') }}" method="POST" class="card card-body">
    @csrf
    @include('books._form')
</form>
@endsection