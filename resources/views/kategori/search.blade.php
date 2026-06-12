@extends('layouts.app')

@section('content')

<div class="container mt-5">

    <h1>Hasil Pencarian Kategori</h1>

    <div class="alert alert-info">
        Keyword pencarian:
        <strong>{{ $keyword }}</strong>
    </div>

    @forelse ($hasil as $kategori)

        <div class="card mb-3 shadow">

            <div class="card-body">

                <h4>
                    {{ $kategori['nama'] }}
                </h4>

                <p>{{ $kategori['deskripsi'] }}</p>

                <span class="badge bg-primary">
                    {{ $kategori['jumlah_buku'] }} Buku
                </span>

            </div>

        </div>

    @empty

        <div class="alert alert-danger">
            Data kategori tidak ditemukan
        </div>

    @endforelse

</div>

@endsection