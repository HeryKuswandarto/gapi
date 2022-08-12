@extends('master.admin')

@section('judul_halaman', 'Jenis Stasiun - Add New Data')

@section('konten')
<div class="row">
    <div class="col">
        <a href="{{route('jenisstasiun.index')}}">Back</a>
    </div>
</div>

<div class="row mt-5">
    <div class="col-md-6">
        <form action="{{ route('jenisstasiun.store') }}" method="post">
            @csrf

            <div class="form-group">
                <label for="jenis">Jenis Stasiun</label>
                <input name="jenis" type="text" class="form-control" required>
                <small class="form-text text-muted">Masukkan jenis stasiun (misal: kegempaan, visual, gps, dll).</small>
            </div>

            <button class="btn btn-primary" type="submit">Simpan data</button>
        </form>
    </div>
</div>

@endsection
