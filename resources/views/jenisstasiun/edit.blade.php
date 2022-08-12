@extends('master.admin')

@section('judul_halaman', 'Jenis Stasiun - Edit')

@section('konten')
<div class="row">
    <div class="col">
        <a href="{{ route('jenisstasiun.index') }}">Back</a>
    </div>
</div>

<div class="row mt-5">
    <div class="col-md-6">
        <form action="{{ route('jenisstasiun.update', $jenisstasiun) }}" method="post">
            @csrf
            <div class="form-group">
                <label for="jenis">Kode Gunung Api</label>
                <input name="jenis" value="{{ $jenisstasiun->jenis }}" type="text" class="form-control" required>
                <small class="form-text text-muted">Masukkan jenis stasiun (misal: kegempaan, visual, GPS, dll).</small>
            </div>

            <button class="btn btn-primary" type="submit">Update data</button>
        </form>
    </div>
</div>
@endsection
