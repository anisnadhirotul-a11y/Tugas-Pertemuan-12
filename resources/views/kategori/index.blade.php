@extends('layouts.app')

@section('content')

<div class="container mt-5">

    <h1 class="mb-4">Daftar Kategori Buku</h1>

    <div class="row">

        @foreach ($kategori_list as $kategori)

        <div class="col-md-4 mb-4">

            <div class="card shadow h-100">

                <div class="card-body">

                    <h4>{{ $kategori['nama'] }}</h4>

                    <p>{{ $kategori['deskripsi'] }}</p>

                    <span class="badge bg-primary">
                        {{ $kategori['jumlah_buku'] }} Buku
                    </span>

                    <hr>

                    <a href="{{ route('kategori.show', $kategori['id']) }}"
                       class="btn btn-success">
                        Detail
                    </a>

                </div>

            </div>

        </div>

        @endforeach

    </div>

</div>

@endsection