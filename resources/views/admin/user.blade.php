@extends('admin.mainapps')
@section('title')
    User
@endsection
@section('content')
    <section id="users">
        <div class="container mb-5 mt-5">
            <table class="table">
                <thead>
                    <a href="/register" class="btn btn-secondary mb-5 mt-5">Tambahkan User</a>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Option</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $user)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <a href="/edituser/{{ $user->id }}" class="btn btn-danger">edit</a>
                                <a href="/deleteuser/{{ $user->id }}" class="btn btn-warning">delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </section>
@endsection
