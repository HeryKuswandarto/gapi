@extends('master.admin')

@section('judul_halaman', 'Stasiun - Add New Data')

@section('konten')
<div class="row">
    <div class="col">
        <a href="{{route('stasiun.index')}}">Back</a>
    </div>
</div>

<div class="row mt-5">
    <div class="col-md-6">
        <form action="{{ route('stasiun.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Nama Stasiun</label>
                <input name="name" type="text" class="form-control" required>
                <small class="form-text text-muted">Masukkan nama stasiun.</small>
            </div>

            <div class="form-group">
                <label for="gunungapi_id">Gunungapi</label>
                <select name="gunungapi_id" class="form-control" id="gunungapi-options">
                    @foreach ($gunungapis as $gunungapi)
                        <option value="{{$gunungapi->id}}">{{$gunungapi->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="jenis_id">Jenis Stasiun</label>
                <select name="jenisstasiun_id" class="form-control" id="jenisstasiun-options">
                    @foreach ($jenisstasiuns as $jenisstasiun)
                       <option value="{{$jenisstasiun->id}}">{{$jenisstasiun->jenis}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="code">Code</label>
                <input name="code" type="text" class="form-control" required>
                <small class="form-text text-muted">Masukkan kode untuk link data.</small>
            </div>

            <div class="form-group">
                <label for="latitude">Latitude/Lintang</label>
                <input name="latitude" type="number" step="any" class="form-control" required>
                <small class="form-text text-muted">Koordinat latitude/lintang stasiun.</small>
            </div>

            <div class="form-group">
                <label for="longitude">Longitude/Bujur</label>
                <input name="longitude" type="number" step="any" class="form-control" required>
                <small class="form-text text-muted">Koordinat longitude/bujur stasiun.</small>
            </div>

            <div class="form-group">
                <label for="altitude">Altitude/Ketinggian (dalam meter)</label>
                <input name="altitude" type="number" class="form-control" required>
                <small class="form-text text-muted">Altitude atau ketinggian stasiun dalam mdpl.</small>
            </div>


            <button class="btn btn-primary" type="submit">Simpan data</button>
        </form>
    </div>
</div>

@endsection
