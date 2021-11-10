@extends('master.admin')

@section('judul_halaman', 'Gunungapi - Add New Data')

@section('konten')
<div class="row">
    <div class="col">
        <a href="{{route('gunungapi.index')}}">Back</a>
    </div>
</div>

<div class="row mt-5">
    <div class="col-md-6">
        <form action="{{ route('gunungapi.store') }}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="kode">Kode Gunung Api</label>
                <input name="code" type="text" class="form-control" required>
                <small class="form-text text-muted">Masukkan kode gunung api.</small>
            </div>

            <div class="form-group">
                <label for="name">Nama Gunung Api</label>
                <input name="name" type="text" class="form-control" required>
                <small class="form-text text-muted">Masukkan nama gunung api.</small>
            </div>

            <div class="form-group">
                <label for="othername">Nama Lain Gunung Api</label>
                <input name="othername" type="text" class="form-control" required>
                <small class="form-text text-muted">Masukkan alias atau nama lain gunung api.</small>
            </div>

            <div class="form-group">
                <label for="latitude">Latitude/Lintang</label>
                <input name="latitude" type="number" class="form-control" required>
                <small class="form-text text-muted">Koordinat latitude/lintang gunung api.</small>
            </div>

            <div class="form-group">
                <label for="longitude">Latitude/Bujur</label>
                <input name="longitude" type="number" class="form-control" required>
                <small class="form-text text-muted">Koordinat longitude/bujur gunung api.</small>
            </div>

            <div class="form-group">
                <label for="altitude">Altitude/Ketinggian (dalam meter)</label>
                <input name="altitude" type="number" class="form-control" required>
                <small class="form-text text-muted">Altitude atau ketinggian gunung api dalam mdpl.</small>
            </div>

            <div class="form-group">
                <label for="region">Region/Provinsi</label>
                <input name="region" type="text" class="form-control" required>
                <small class="form-text text-muted">Lokasi provinsi gunung api.</small>
            </div>

            <button class="btn btn-primary" type="submit">Simpan data</button>
        </form>
    </div>
</div>

@endsection
