@extends('admin.mainappss')
@section('title')Dashboard @endsection
@section('content')
    <section id="header" class="header">
        <div class="container mb-3 mt-3">
        <h1>Selamat Datang Admin</h1>
            <marquee behavior="" direction=""><h1>Selamat Datang Admin</h1></marquee>
            
            <div class=container>
                <div class="row row-cols-1 pt-4 row-cols-md-3 g-3 mb-3">
                    <div class="col">
                        <div class="card text-bg-danger mb-3" style="max-width: 18rem;">
                            <div class="card-header">Data Pengumuman</div>
                            <div class="card-body">
                                <h1 class="card-title">2</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card text-bg-warning mb-3" style="max-width: 18rem;">
                            <div class="card-header">Data Pendaftaran</div>
                            <div class="card-body">
                                <h1 class="card-title">2</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card text-bg-success mb-3" style="max-width: 18rem;">
                            <div class="card-header">User</div>
                            <div class="card-body">
                                <h1 class="card-title">2</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>     
        </div>       
    </section>
@endsection