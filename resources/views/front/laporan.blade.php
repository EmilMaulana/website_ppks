@extends('layouts.main')

@section('content')

<div class="row justify-content-center mt-4">
    <div class="col-md-10">
        @if (session()->has('success'))
            <div class="alert alert color-1 text-white alert-dismissible fade show my-5" role="alert">
                {{ session('success') }}
            <button type="button" class="btn-close text-white" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if(!auth()->check())
            <div class="alert alert-info text-white alert-dismissible fade show my-5" role="alert">
                <h4>Silahkan Login Terlebih Dahulu</h4>
            <button type="button" class="btn-close text-white" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @else
            <div class="card">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-9 mb-3">
                            <h6 class="btn btn color-1 text-white">Identitas Pelapor</h6>
                            <form method="POST" action="/lapor" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mt-2">
                                    <label for="nama" class="text-dark fw-bold">1. Nama Pelapor atau Korban (optional)</label>
                                    <input id="nama" type="text" placeholder="Panji Gumilang" class="form-control br @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autocomplete="nama" autofocus>
                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mt-2">
                                    <label for="Usia" class="text-dark fw-bold">2. Usia</label>
                                    <input id="usia" type="text" placeholder="18 Tahun" class="form-control br @error('usia') is-invalid @enderror" name="usia" value="{{ old('usia') }}" required autocomplete="usia" autofocus>
                                    @error('usia')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mt-2">
                                    <label for="npm" class="text-dark fw-bold">3. NPM (optional)</label>
                                    <input id="npm" type="text" placeholder="13 Digit" class="form-control br @error('npm') is-invalid @enderror" name="npm" value="{{ old('npm') }}" required autocomplete="npm" autofocus>
                                    @error('npm')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mt-2">
                                    <label for="Jenis Kelamin" class="text-dark fw-bold">3. Jenis Kelamin</label>
                                    <div class="r">
                                        <input class="form-check-input" value="Laki-Laki" type="radio" name="jenis_kelamin" id="jenis_kelamin">
                                        <label class="form-check-label" for="jenis_kelamin">
                                            Laki-Laki
                                        </label>
                                        <input class="form-check-input ml-3" value="Perempuan" type="radio" name="jenis_kelamin" id="jenis_kelamin">
                                        <label class="form-check-label" for="jenis_kelamin">
                                            Perempuan
                                        </label>
                                    </div>
                                    {{-- <input id="usia" type="text" placeholder="18 Tahun" class="form-control br @error('usia') is-invalid @enderror" name="usia" value="{{ old('usia') }}" required autocomplete="usia" autofocus> --}}
                                    @error('usia')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <h6 class="btn btn color-1 text-white mt-4">Latar Kejadian</h6>
                                <div class="form-group mt-2">
                                    <label for="tempat" class="text-dark fw-bold">1. Tempat</label>
                                    <input id="tempat" type="text" placeholder="Ruang Kelas K4-068" class="form-control br @error('tempat') is-invalid @enderror" name="tempat" value="{{ old('tempat') }}" required autocomplete="tempat" autofocus>
                                    @error('tempat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mt-2">
                                    <label for="tanggal" class="text-dark fw-bold">2. Tanggal</label>
                                    <input id="tanggal" type="date" placeholder="7 Juli 2023" class="form-control br @error('tanggal') is-invalid @enderror" name="tanggal" value="{{ old('tanggal') }}" required autocomplete="tanggal" autofocus>
                                    @error('tanggal')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mt-2">
                                    <label for="waktu" class="text-dark fw-bold">3. Waktu</label>
                                    <input id="waktu" type="time" placeholder="7 Juli 2023" class="form-control br @error('waktu') is-invalid @enderror" name="waktu" value="{{ old('waktu') }}" required autocomplete="waktu" autofocus>
                                    @error('waktu')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <h6 class="btn btn color-1 text-white mt-4">Data Kejadian</h6>
                                <div class="form-group mt-2">
                                    <label for="jenis_kasus" class="text-dark fw-bold">1. Jenis Kasus</label>
                                    <input id="jenis_kasus" type="text" placeholder="Pelecehan, Pemerkosaan, Cat Calling DLL" class="form-control br @error('jenis_kasus') is-invalid @enderror" name="jenis_kasus" value="{{ old('jenis_kasus') }}" required autocomplete="jenis_kasus" autofocus>
                                    @error('jenis_kasus')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mt-2">
                                    <label for="ciri_pelaku" class="text-dark fw-bold">2. Ciri-Ciri Pelaku</label>
                                    <input id="ciri_pelaku" type="text" placeholder="Topi Merah, Rambut Gondrong DLL" class="form-control br @error('ciri_pelaku') is-invalid @enderror" name="ciri_pelaku" value="{{ old('ciri_pelaku') }}" required autocomplete="ciri_pelaku" autofocus>
                                    @error('ciri_pelaku')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mt-2">
                                    <label for="kronologi" class="text-dark fw-bold">3. Kronologi Kejadian</label>
                                    <textarea name="kronologi" id="kronologi" class="form-control @error('kronologi') is-invalid @enderror" name="kronologi" id="kronologi" cols="30" rows="4"></textarea>
                                    @error('kronologi')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mt-2">
                                    <label for="image" class="text-dark fw-bold">4. Bukti Kejadian</label>
                                    <input id="image" type="file"  class="form-control br @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="image" autofocus>
                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mt-5 ">
                                    <button type="submit" class="btn btn color-1 text-white"><i class="fa-solid fa-file-arrow-up"></i> Upload Laporan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>

@endsection