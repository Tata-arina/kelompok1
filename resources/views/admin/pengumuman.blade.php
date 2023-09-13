@extends('admin.mainapps')
@section('title')Pengumuman @endsection
@section('content')
    <section id="pengumuman">
        <div class="container mb-5 mt-5">
            <table class="table">
                <thead>
                <a href="/createpengumuman" class="btn bg-btn mb-2">Tambahkan Pengumuman</a>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">First</th>
                    <th scope="col">Second</th>
                    <th scope="col">Third</th>
                    <th scope="col">Fourth</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>
                            <a href="/editpengumuman" class="btn bg-btn">edit</a>
                            <a href="/" class="btn bg-btn">delete</a>
                            <a href="/" class="btn bg-btn">detail</a>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>
                            <a href="/editpengumuman" class="btn bg-btn">edit</a>
                            <a href="/" class="btn bg-btn">delete</a>
                            <a href="/" class="btn bg-btn">detail</a>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                        <td>
                            <a href="/editpengumuman" class="btn bg-btn">edit</a>
                            <a href="/" class="btn bg-btn">delete</a>
                            <a href="/" class="btn bg-btn">detail</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
@endsection