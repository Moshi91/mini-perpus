@extends('layouts.app')

@section('title', 'Edit Buku')

@section('content')
<h3>Edit Buku</h3>
<form action="{{ route('books.update', $book) }}" method="POST" class="card card-body">
    @csrf
    @method('PUT')
    @include('books._form')
</form>
@endsection