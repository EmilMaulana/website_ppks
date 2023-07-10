@extends('layouts.dashboard')

@section('content')

<div class="container-fluid" id="container-wrapper">
    <div class="row">
        <div class="col-lg-12 mb-4">
            <!-- Simple Tables -->
            <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Semua Pengguna</h6>
                    <a href="/home/artikel/tambah" class="btn btn-sm btn-success"><i class="fas fa-plus"></i> Upload Artikel</a>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                        <tr>
                            <th>No </th>
                            <th>Judul</th>
                            <th>Tanggal Posting</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($artikels as $artikel)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $artikel->title }}</td>
                                    <td>{{ $artikel->created_at }}</td>
                                    <td>
                                        <a href="/home/artikel/{{ $artikel->title }}/edit" class="btn btn-sm btn-primary">Edit</a>
                                        <a href="/home/artikel/{{ $artikel->title }}" class="btn btn-sm btn-danger">Hapus</a>
                                    </td>
                                    {{-- <td>{{ $artikel->created_at->diffForHumans() }}</td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            <div class="card-footer"></div>
        </div>
    </div>
</div>

@endsection