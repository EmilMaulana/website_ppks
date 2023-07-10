@extends('layouts.dashboard')

@section('content')

<div class="container-fluid" id="container-wrapper">
    <div class="row">
        <div class="col-lg-12 mb-4">
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
                    @foreach ($riwayats as $riwayat)
                        <tr>
                            <td>LAP-0{{ $riwayat->id }}</td>
                            <td>{{ $riwayat->nama }}</td>
                            <td>{{ $riwayat->jenis_kasus }}</td>
                            <td>
                                @if ($riwayat->status_id == 0)
                                    <span class="badge badge-danger">Ditinjau</span>
                                @elseif ($riwayat->status_id == 1)
                                    <span class="badge badge-primary">Diproses</span>
                                @else
                                    <span class="badge badge-success">Selesai</span>
                                @endif
                            </td>
                            <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
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