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
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>
                            <a href="/editpengumuman" class="btn btn-danger">edit</a>
                            <a href="/" class="btn btn-warning">delete</a>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>
                            <a href="/editpengumuman" class="btn btn-danger">edit</a>
                            <a href="/" class="btn btn-warning">delete</a>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                        <td>
                            <a href="/editpengumuman" class="btn btn-danger">edit</a>
                            <a href="/" class="btn btn-warning">delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
@endsection
