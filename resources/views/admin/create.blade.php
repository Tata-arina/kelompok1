@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Daftar Admin Baru</h2>
        <form method="POST" action="{{ route('admin.update', $admin->id) }}">
            @csrf
            @metho('PUT')
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" name="name" class="form-control" value="{{ $admin->name }}" required>
            </div>
            <div class="form-group">
                <label for="email">email</label>
                <input type="email" name="email" class="form-control" value="{{ $admin->email }}" required>
            </div>
            <div class="form-group">
                <label for="password">password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button class="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
@endsection