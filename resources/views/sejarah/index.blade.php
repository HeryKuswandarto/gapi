@extends('master.admin')

@section('judul_halaman', 'Sejarah Letusan')

@section('konten')
<p>Memberikan informasi data sejarah letusan gunungapi yang tersedia pada sistem</p>
<div class="row">
    <div class="col">
        <a href="{{ route('sejarah.create') }}">Add New Data</a>
    </div>
</div>


@if ($sejarahs->isNotEmpty())
<div class="row mt-5">
    <div class="col">
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th style="width:20%">Gunungapi</th>
                    <th style="width:10%">Tahun</th>
                    <th style="width:10%">VEI</th>
                    <th style="width:45%">Keterangan</th>
                    <th style="width:15%">Option</th>
                </tr>
                </thead>
                <tbody>
                @foreach($sejarahs as $s)
                <tr>
                    <td>{{$s->gunungapi->name}}</td>
                    <td>{{$s->tahun}}</td>
                    <td>{{$s->vei}}</td>
                    <td>{{$s->keterangan}}</td>
                    <td>
                        <a href="edit/{{$s->id}}"><img style="padding-left:10px; padding-right:10px;"
                                src="/images/editb.png"></a>
                        <a onclick="return confirm('Are you sure?')" href="{{ route('sejarah.destroy', $s) }}"><img
                                style="padding-left:10px; padding-right:10px;" src="/images/Trashb.png"></a>
                    </td>
                </tr>
                @endforeach
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
           </tbody>
            </table>
        </div>
    </div>
</div>
@else
<div class="row mt-2">
    <div class="col">
        <div class="alert alert-danger" role="alert">
            Belum ada sejarah letusan gunungapi
        </div>
    </div>
</div>
@endif

<p>Volcanic Explosivity Index atau VEI adalah ukuran relatif dari erupsi
    gunungapi. Karakteristik yang digunakan untuk menentukan skala VEI adalah
    volume priklastik yang dikeluarkan saat erupsi</p>
<p>
        <<img style="padding-left:10px; padding-right:10px;"
        src="/images/vei.png" width="450" height="500">
</p>
@endsection
