@extends('master.admin')

@section('judul_halaman', 'Gunungapi')

@section('konten')
<a href = "create">Add New Data</a>
<br/>
<br/>
<table border="1">
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
            <a href="edit/{{$g->id}}"><img style="padding-left:10px; padding-right:10px;" src="/images/editb.png"></a>
            <a onclick="return confirm('Are you sure?')" href="destroy/{{$g->id}}"><img style="padding-left:10px; padding-right:10px;" src="/images/Trashb.png"></a>
        </td>
    </tr>
    @endforeach
</table>

@endsection
