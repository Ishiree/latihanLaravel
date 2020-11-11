@extends('layout/main')

@section('title','Books')

@section('container')
<div class="container">
  <div class="row justify-content-md-center">
      <div class="col-6">
          <h1> Daftar Buku </h1>
        @foreach( $books as $book )
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $book -> judul }}
              <a href="/books/{{ $book->id }}" class="badge badge-primary badge-pill">detail</a>
            </li>
          </ul>
        @endforeach
      </div>
  </div>
</div>
@endsection