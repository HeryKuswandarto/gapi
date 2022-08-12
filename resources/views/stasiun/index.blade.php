@extends('master.admin')

@section('judul_halaman', 'Stasiun Pemantauan')

@section('konten')
<p>Memberikan informasi data stasiun pemantauan yang tersedia pada sistem</p>
<div class="row">
    <div class="col">
        <a href="{{ route('stasiun.create') }}">Add New Data</a>
    </div>
</div>


@if ($stasiuns->isNotEmpty())
<div class="row mt-5">
    <div class="col">
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <th>Nama Stasiun</th>
                    <th>Gunungapi</th>
                    <th>Jenis Stasiun</th>
                    <th>Code</th>
                    <th>Latitude</th>
                    <th>Longoitude</th>
                    <th>Altitude</th>
                    <th>Option</th>
                </tr>
                @foreach($stasiuns as $s)
                <tr>
                    <td>{{$s->name}}</td>
                    <td>{{$s->gunungapi->name}}</td>
                    <td>{{$s->jenisstasiun->jenis}}</td>
                    <td>{{$s->code}}</td>
                    <td>{{$s->latitude}}</td>
                    <td>{{$s->longitude}}</td>
                    <td>{{$s->altitude}}</td>
                    <td>
                        <a href="edit/{{$s->id}}"><img style="padding-left:10px; padding-right:10px;"
                                src="/images/editb.png"></a>
                        <a onclick="return confirm('Are you sure?')" href="{{ route('stasiun.destroy', $s) }}"><img
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
            Belum ada data stasiun pengamatan
        </div>
    </div>
</div>
@endif

@endsection
