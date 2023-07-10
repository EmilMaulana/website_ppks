@extends('layouts.dashboard')

@section('content')

<div class="container-fluid" id="container-wrapper">
    <div class="row">
        <div class="col-lg-12 mb-4">
            @if (session()->has('success'))
            <div class="alert alert-primary text-white alert-dismissible fade show" role="alert">
                {{ session('success') }}
            {{-- <button type="button" class="btn-close text-white" data-bs-dismiss="alert"></button> --}}
            </div>
        @endif
        <!-- Simple Tables -->
        <div class="card">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Simple Tables</h6>
            </div>
            <div class="table-responsive">
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
                <tr>
                    <th>Laporan ID</th>
                    <th>Nama Pelapor</th>
                    <th>Jenis Kasus</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($laporans as $laporan)
                        <tr>
                            <td>LAP-0{{ $laporan->id }}</td>
                            <td>{{ $laporan->nama }}</td>
                            <td>{{ $laporan->jenis_kasus }}</td>
                            <td>
                                @if ($laporan->status_id == 0)
                                    <span class="badge badge-danger">Ditinjau</span>
                                @elseif ($laporan->status_id == 1)
                                    <span class="badge badge-primary">Diproses</span>
                                @else
                                    <span class="badge badge-success">Selesai</span>
                                @endif
                            </td>
                            <td><a href="/home/laporan-masuk/{{ $laporan->id }}" class="btn btn-sm btn-primary">Detail</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
            <div class="card-footer"></div>
        </div>
        </div>
    </div>
</div>

@endsection