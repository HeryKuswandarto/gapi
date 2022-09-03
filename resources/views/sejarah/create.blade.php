@extends('master.admin')

@section('judul_halaman', 'Sejarah - Add New Data')

@section('konten')
<div class="row">
    <div class="col">
        <a href="{{route('sejarah.index')}}">Back</a>
    </div>
</div>

<div class="row mt-5">
    <div class="col-md-6">
        <form action="{{ route('sejarah.store') }}" method="post">
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
                <label for="tahun">Tahun</label>
                <input name="tahun" type="number" step=1 class="form-control" required>
                <small class="form-text text-muted">Masukkan tahun erupsi.</small>
            </div>

            <div class="form-group">
                <label for="vei">VEI</label>
                <input name="vei" type="number" step=1 class="form-control" required>
                <small class="form-text text-muted">Masukkan Volcanic Explosivity Index</small>
            </div>

            <div class="form-group">
                <label for="keterangan">Deskripsi</label>
                <input name="keterangan" type="text" class="form-control" required>
                <small class="form-text text-muted">Masukkan deskripsi erupsi.</small>
            </div>

            <button class="btn btn-primary" type="submit">Simpan data</button>
        </form>
    </div>
</div>

@endsection
