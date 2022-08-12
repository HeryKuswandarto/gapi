@extends('master.admin')

@section('judul_halaman', 'Stasiun - Edit')

@section('konten')
<div class="row">
    <div class="col">
        <a href="{{route('stasiun.index')}}">Back</a>
    </div>
</div>

<div class="row mt-5">
    <div class="col-md-6">
        <form action="{{ route('stasiun.update', $stasiun) }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Nama Stasiun</label>
                <input name="name" value="{{$stasiun->name}}" type="text" class="form-control" required>
                {{-- <small class="form-text text-muted">Masukkan nama stasiun.</small> --}}
            </div>

            <div class="form-group">
                <label for="gunungapi_id">Gunungapi</label>
                <select name="gunungapi_id" class="form-control" id="gunungapi-options">
                    @foreach ($gunungapis as $gunungapi)
                        <option value="{{$gunungapi->id}}" {{($gunungapi->id == $stasiun->gunungapi_id) ? 'selected' : '' }}>{{$gunungapi->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="jenis_id">Jenis Stasiun</label>
                <select name="jenisstasiun_id" class="form-control" id="jenisstasiun-options">
                    @foreach ($jenisstasiuns as $jenisstasiun)
                       {{--<option value="{{$jenisstasiun->id}}">{{$jenisstasiun->jenis}}</option>--}}
                       {{--<option value="{{$jenisstasiun->id}}" {{($jenisstasiun->id == $jenisstasiunSelected) ? 'selected' : '' }}>{{$jenisstasiun->jenis}}</option>--}}
                       <option value="{{$jenisstasiun->id}}" {{$jenisstasiun->id == $stasiun->jenis_id ? 'selected' : ''  }}>{{$jenisstasiun->jenis}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="code">Code</label>
                <input name="code" value="{{$stasiun->code}}" type="text" class="form-control" required>
                {{-- <small class="form-text text-muted">Masukkan kode untuk link data.</small> --}}
            </div>

            <div class="form-group">
                <label for="latitude">Latitude/Lintang</label>
                <input name="latitude" value="{{$stasiun->latitude}}" type="number" step="any" class="form-control" required>
                {{-- <small class="form-text text-muted">Koordinat latitude/lintang stasiun.</small> --}}
            </div>

            <div class="form-group">
                <label for="longitude">Longitude/Bujur</label>
                <input name="longitude" value="{{$stasiun->longitude}}" type="number" step="any" class="form-control" required>
                {{-- <small class="form-text text-muted">Koordinat longitude/bujur stasiun.</small> --}}
            </div>

            <div class="form-group">
                <label for="altitude">Altitude/Ketinggian (dalam meter)</label>
                <input name="altitude" value="{{$stasiun->altitude}}" type="number" class="form-control" required>
                {{-- <small class="form-text text-muted">Altitude atau ketinggian stasiun dalam mdpl.</small> --}}
            </div>


            <button class="btn btn-primary" type="submit">Simpan data</button>
        </form>
    </div>
</div>

@endsection
