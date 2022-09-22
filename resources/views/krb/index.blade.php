@extends('master.admin')

@section('judul_halaman', 'Peta Kawasan Rawan Bencana Gunungapi')

@section('konten')
<p>Memberikan informasi data peta KRB yang tersedia pada sistem</p>
<div class="row">
    <div class="col">
        <a href="{{ route('krb.create') }}">Add New Data</a>
    </div>
</div>


@if ($krbs->isNotEmpty())
<div class="row mt-5">
    <div class="col">
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <th>Gunungapi</th>
                    <th>Tahun</th>
                    <th>File GeoJSON</th>
                    <th>File JPG</th>
                    <th>Option</th>
                </tr>
                @foreach($krbs as $s)
                <tr>
                    <td>{{$s->gunungapi->name}}</td>
                    <td>{{$s->tahun}}</td>
                    <td>{{$s->fileshp}}</td>
                    <td>{{$s->filejpg}}</td>
                    <td>
                        <a href="edit/{{$s->id}}"><img style="padding-left:10px; padding-right:10px;"
                                src="/images/editb.png"></a>
                        <a onclick="return confirm('Are you sure?')" href="{{ route('krb.destroy', $s) }}"><img
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
            Belum ada data peta KRB
        </div>
    </div>
</div>
@endif

@endsection
