@extends('user.mainapps')
@section('title') pengumuman @endsection
@section('content')
    <section id="Beranda">
        <div class="container-fluid" id="baground">
            <div class="container text-center" style="margin-top: 70px;" id="pembuka">
                <h1 class="text-warning fw-bold">PENERIMAAN PESERTA DIDIK BARU <br> SMA NEGERI 19 PALEMBANG 2023/2024 <br>
                    Registrasi Online melalui</h1>
                <a href="portal"><button type="button" class="btn btn-secondary m-3">Portal Simbels</button></a>
            </div>
        </div>

        <div class="container mb-4 py-5">
            <div class="card" style="max-width: 100%; height: 250px;">
                @foreach ($pengumumen as $Pengumuman)
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('storage/' . $Pengumuman->gambar_pengumuman) }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        <h3 class="card-title fw-bold"> {{ $Pengumuman->judul_pengumuman }}</h3>
                        <p class="card-text">{{ $Pengumuman->isi_pengumuman }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
        
            </div>
        </div>
    </section>
    
@endsection