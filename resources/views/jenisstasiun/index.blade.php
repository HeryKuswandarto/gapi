@extends('master.admin')

@section('judul_halaman', 'Jenis Stasiun')
@section('konten')
<p>Memberikan informasi data jenis stasiun yang tersedia pada sistem</p>
<div class="row">
    <div class="col">
        <a href="{{ route('jenisstasiun.create') }}">Add New Data</a>
    </div>
</div>

@if ($jenisstasiuns->isNotEmpty())
<div class="row mt-5">
    <div class="col">
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <th>Jenis Stasiun</th>
                    <th>Option</th>
                </tr>
                @foreach($jenisstasiuns as $j)
                <tr>
                    <td>{{$j->jenis}}</td>
                    <td>
                        <a href="edit/{{$j->id}}"><img style="padding-left:10px; padding-right:10px;"
                                src="/images/editb.png"></a>
                        <a onclick="return confirm('Are you sure?')" href="{{ route('jenisstasiun.destroy', $j) }}"><img
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
            Belum ada data jenis stasiun
        </div>
    </div>
</div>
@endif

@endsection
