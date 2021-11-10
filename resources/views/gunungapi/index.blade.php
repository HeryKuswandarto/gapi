@extends('master.admin')

@section('judul_halaman', 'Gunungapi')

@section('konten')
<div class="row">
    <div class="col">
        <a href="{{ route('gunungapi.create') }}">Add New Data</a>
    </div>
</div>

@if ($gunungapis->isNotEmpty())
<div class="row mt-5">
    <div class="col">
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <th>Kode</th>
                    <th>Nama Gunungapi</th>
                    <th>Nama Lain</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th>Altitude</th>
                    <th>Region</th>
                    <th>Option</th>
                </tr>
                @foreach($gunungapis as $g)
                <tr>
                    <td>{{$g->code}}</td>
                    <td>{{$g->name}}</td>
                    <td>{{$g->othername}}</td>
                    <td>{{$g->latitude}}</td>
                    <td>{{$g->longitude}}</td>
                    <td>{{$g->altitude}}</td>
                    <td>{{$g->region}}</td>
                    <td>
                        <a href="edit/{{$g->id}}"><img style="padding-left:10px; padding-right:10px;"
                                src="/images/editb.png"></a>
                        <a onclick="return confirm('Are you sure?')" href="{{ route('gunungapi.destroy', $g) }}"><img
                                style="padding-left:10px; padding-right:10px;" src="/images/Trashb.png"></a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@else
<div class="row mt-2">
    <div class="col">
        <div class="alert alert-danger" role="alert">
            Belum ada data gunung api
        </div>
    </div>
</div>
@endif

@endsection
