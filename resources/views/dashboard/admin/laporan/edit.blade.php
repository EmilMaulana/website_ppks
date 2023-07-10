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
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="row justify-content-center">
                                <div class="col-md-10">
                                    <h6 class="btn btn-danger text-white">Identitas Pelapor</h6>
                                </div>
                                <div class="col-md-2">
                                    <div class="row justify-content-end">
                                        @if ($laporan->status_id == 0)
                                            <button type="button" class="btn btn-danger mr-2">
                                                Ditinjau
                                            </button>
                                        @elseif ($laporan->status_id == 1)
                                            <button type="button" class="btn btn-primary mr-2">
                                                Diproses
                                            </button>
                                        @else
                                            <button type="button" class="btn btn-success mr-2">
                                                Selesai
                                            </button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <form method="POST" action="/update/status_id/{{ $laporan->id }}" enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <div class="form-group mt-2">
                                    <input id="user_id" type="hidden" value="{{ $laporan->user_id }}" readonly placeholder="Panji Gumilang" class="form-control br @error('user_id') is-invalid @enderror" name="user_id" value="{{ old('user_id') }}" required autocomplete="user_id" autofocus>
                                    <label for="nama" class="text-dark fw-bold">1. Nama Pelapor atau Korban (optional)</label>
                                    <input id="nama" type="text" value="{{ $laporan->nama }}" readonly placeholder="Panji Gumilang" class="form-control br @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autocomplete="nama" autofocus>
                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mt-2">
                                    <label for="Usia" class="text-dark fw-bold">2. Usia</label>
                                    <input id="usia" type="text" value="{{ $laporan->usia }}" readonly placeholder="18 Tahun" class="form-control br @error('usia') is-invalid @enderror" name="usia" value="{{ old('usia') }}" required autocomplete="usia" autofocus>
                                    @error('usia')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mt-2">
                                    <label for="npm" class="text-dark fw-bold">3. NPM (optional)</label>
                                    <input id="npm" type="text" value="{{ $laporan->npm }}" readonly placeholder="13 Digit" class="form-control br @error('npm') is-invalid @enderror" name="npm" value="{{ old('npm') }}" required autocomplete="npm" autofocus>
                                    @error('npm')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mt-2">
                                    <label for="Jenis Kelamin" class="text-dark fw-bold">3. Jenis Kelamin</label>
                                    <div class="row">
                                        <div class="col-md-2 ml-4">
                                            <input class="form-check-input form-checked" value="" type="radio" name="status_id" id="status_id">
                                            <label class="form-check-label" for="status_id">
                                                {{ $laporan->jenis_kelamin }}
                                            </label>
                                        </div>
                                    </div>
                                    {{-- <input id="usia" type="text" placeholder="18 Tahun" class="form-control br @error('usia') is-invalid @enderror" name="usia" value="{{ old('usia') }}" required autocomplete="usia" autofocus> --}}
                                    @error('usia')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <h6 class="btn btn-danger text-white mt-4">Latar Kejadian</h6>
                                <div class="form-group mt-2">
                                    <label for="tempat" class="text-dark fw-bold">1. Tempat</label>
                                    <input id="tempat" type="text" value="{{ $laporan->tempat }}" readonly placeholder="Ruang Kelas K4-068" class="form-control br @error('tempat') is-invalid @enderror" name="tempat" value="{{ old('tempat') }}" required autocomplete="tempat" autofocus>
                                    @error('tempat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mt-2">
                                    <label for="tanggal" class="text-dark fw-bold">2. Tanggal</label>
                                    <input id="tanggal" type="date" value="{{ $laporan->tanggal }}" readonly placeholder="7 Juli 2023" class="form-control br @error('tanggal') is-invalid @enderror" name="tanggal" value="{{ old('tanggal') }}" required autocomplete="tanggal" autofocus>
                                    @error('tanggal')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mt-2">
                                    <label for="waktu" class="text-dark fw-bold">3. Waktu</label>
                                    <input id="waktu" type="time" value="{{ $laporan->waktu }}" readonly placeholder="7 Juli 2023" class="form-control br @error('waktu') is-invalid @enderror" name="waktu" value="{{ old('waktu') }}" required autocomplete="waktu" autofocus>
                                    @error('waktu')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <h6 class="btn btn-danger mt-4">Data Kejadian</h6>
                                <div class="form-group mt-2">
                                    <label for="jenis_kasus" class="text-dark fw-bold">1. Jenis Kasus</label>
                                    <input id="jenis_kasus" type="text" value="{{ $laporan->jenis_kasus }}" readonly placeholder="Pelecehan, Pemerkosaan, Cat Calling DLL" class="form-control br @error('jenis_kasus') is-invalid @enderror" name="jenis_kasus" value="{{ old('jenis_kasus') }}" required autocomplete="jenis_kasus" autofocus>
                                    @error('jenis_kasus')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mt-2">
                                    <label for="ciri_pelaku" class="text-dark fw-bold">2. Ciri-Ciri Pelaku</label>
                                    <input id="ciri_pelaku" type="text" value="{{ $laporan->ciri_pelaku }}" readonly placeholder="Topi Merah, Rambut Gondrong DLL" class="form-control br @error('ciri_pelaku') is-invalid @enderror" name="ciri_pelaku" value="{{ old('ciri_pelaku') }}" required autocomplete="ciri_pelaku" autofocus>
                                    @error('ciri_pelaku')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mt-2">
                                    <label for="kronologi" class="text-dark fw-bold">3. Kronologi Kejadian</label>
                                    <textarea name="kronologi" id="kronologi" value="" readonly class="form-control @error('kronologi') is-invalid @enderror" name="kronologi" id="kronologi" cols="30" rows="4">{{ $laporan->kronologi }}</textarea>
                                    
                                </div>
                                <div class="form-group mt-2">
                                    <label for="image" class="text-dark fw-bold">4. Bukti Kejadian</label>
                                    @if ($laporan->image)
                                        <img src="{{ asset('storage/' . $laporan->image) }}" class="img-preview img-fluid mb-3 col-sm-8 d-block">
                                    @else
                                        <img class="img-preview img-fluid mb-3 col-sm-8">
                                    @endif
                                    {{-- <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()"> --}}
                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="row mt-5">
                                    <label for="status_id" class="form-label">Status Laporan</label>
                                    <select name="status_id" id="status_id" class="form-control mb-3" placeholder="">
                                        {{-- @foreach ($categories as $category) --}}
                                            <option value="0">Ditinjau</option>
                                            <option value="1">Diproses</option>
                                            <option value="2">Selesai</option>
                                        {{-- @endforeach --}}
                                    </select>      
                                    <button type="submit" class="btn btn-danger mt-2 ml-auto">Simpan Perubahan</button>  
                                </div>
                                {{-- <div class="mt-5 ">
                                    <button type="submit" class="btn btn color-1 text-white"><i class="fa-solid fa-file-arrow-up"></i> Upload Laporan</button>
                                </div> --}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function() {
        fetch('/author/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    })

    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display ='block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function (oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }

    }
</script>

@endsection