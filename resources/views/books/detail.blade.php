@extends('layout/main')

@section('title','Bagian 3')

@section('container')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-6 text-center">
            <h1>
               Detail Buku
            </h1>
            <div class="card" style="width: 18rem;">
      
                <div class="card-body">
                  <h5 class="card-title">{{ $book->judul }}</h5>
                  <h6 class="card-subtitle mt-2 mb-3 text-left">Penulis : {{ $book->penulis }}</h6>
                  <p class="card-text text-left">Penerbit : {{ $book->penerbit }}</p>
                  <p class="card-text text-left">Tahun terbit : {{ $book->tahun_terbit }}</p>
                  <p class="card-text text-left">Stock : {{ $book->stock }}</p>
           
                </div>
            </div>
        </div>
    </div>
</div>
@endsection