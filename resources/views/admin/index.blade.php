@extends('master.admin')

@section('judul_halaman', 'Admin')
@section('konten')
<p>Memberikan informasi data admin yang tersedia pada sistem</p>
<div class="row">
    <div class="col">
        <a href="{{ route('admin.create') }}">Add New Data</a>
    </div>
</div>

@if ($admins->isNotEmpty())
<div class="row mt-5">
    <div class="col">
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Option</th>
                </tr>
                @foreach($admins as $a)
                <tr>
                    <td>{{$a->name}}</td>
                    <td>{{$a->email}}</td>
                    <td>
                        <a onclick="return confirm('Are you sure?')" href="{{ route('admin.destroy', $a) }}"><img
                                style="padding-left:10px; padding-right:10px;" src="/images/Trashb.png"></a>
                    </td>
                </tr>
                @endforeach
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>
    </div>
</div>
@else
<div class="row mt-2">
    <div class="col">
        <div class="alert alert-danger" role="alert">
            Belum ada data admin
        </div>
    </div>
</div>
@endif

@endsection
