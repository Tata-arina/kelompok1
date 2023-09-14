@extends('admin.mainapps')
@section('title')Pengumuman @endsection
@section('content')
    <section id="pengumuman">
        <div class="container mb-5 mt-5">
            <table class="table">
                <thead>
                <a href="/createpengumuman" class="btn btn-secondary mb-5 mt-5">Tambahkan Pengumuman</a>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">First</th>
                    <th scope="col">Second</th>
                    <th scope="col">Third</th>
                    <th scope="col">Fourth</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pengumumen as $Pengumuman)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{$Pengumuman->judul_pengumuman}}</td>
                        <td>{{$Pengumuman->isi_pengumuman}}</td>
                        <td><img src="{{ asset('storage/' . $Pengumuman->gambar_pengumuman) }}" alt="" width="20%"></td>
                        <td>
                            <a href="/editpengumuman" class="btn btn-danger">edit</a>
                            <a href="/" class="btn btn-warning">delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </section>
@endsection
