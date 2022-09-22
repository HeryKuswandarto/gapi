@extends('master.admin')

@section('judul_halaman', 'Peta Kawasan Rawan Bencana - Add New Data')

@section('konten')
<div class="row">
    <div class="col">
        <a href="{{route('krb.index')}}">Back</a>
    </div>
</div>

<div class="row mt-5">
    <div class="col-md-6">
        <form action="{{ route('krb.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="gunungapi_id">Gunungapi</label>
                <select name="gunungapi_id" class="form-control" id="gunungapi-options">
                    @foreach ($gunungapis as $gunungapi)
                        <option value="{{$gunungapi->id}}">{{$gunungapi->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="tahun">Tahun terbit</label>
                <input name="tahun" type="number" step=1 class="form-control" required>
                <small class="form-text text-muted">Masukkan tahun erupsi.</small>
            </div>

            <div class="form-group">
                <label for="fileshp">File GeoJSON</label>
                <br>
                <input name="fileshp" type="file"  required>
                <small class="form-text text-muted">Pilih file GeoJSON untuk ditampilkan di peta interaktif</small>
            </div>

            <div class="form-group">
                <label for="filejpg">File jpg</label>
                <br>
                <input name="filejpg" type="file"  required>
                <small class="form-text text-muted">Pilih file jpg agar bisa didownload user</small>
            </div>

            <button class="btn btn-primary" type="submit">Simpan data</button>
        </form>
    </div>
</div>

@endsection
