@extends('master.admin')

@section('judul_halaman', 'Admin - Add New Data')

@section('konten')
<div class="row">
    <div class="col">
        <a href="{{route('admin.index')}}">Back</a>
    </div>
</div>

<div class="row mt-5">
    <div class="col-md-6">

        {{-- menampilkan error validasi--}}
        @if (count($errors)>0)
           <div class="alert alert-danger">
               <ul>
                    @foreach ($errors->all() as $error)
                       <li>{{$error}}</li>
                    @endforeach
               </ul>
           </div>
        @endif

        <form action="{{ route('admin.store') }}" method="post" >
            @csrf

            <div class="form-group">
                <label for="name">Nama</label>
                <input name="name" type="text" class="form-control" value = "{{old('name')}}" required>
                <small class="form-text text-muted">Masukkan nama.</small>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input name="email" type="email"  class="form-control" value = "{{old('email')}}" required>
                <small class="form-text text-muted">Masukkan email.</small>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input name="password" type="password"  class="form-control" value = "{{old('password')}}" required>
                <small class="form-text text-muted">Masukkan password.</small>
            </div>

            <div class="form-group">
                <label for="passwordconfirm">Password-confirm</label>
                <input name="passwordconfirm" type="password"  class="form-control" value = "{{old('passwordconfirm')}}" required>
                <small class="form-text text-muted">Masukkan lagi password.</small>
            </div>

            <button class="btn btn-primary" type="submit">Simpan data</button>
        </form>
    </div>
</div>

@endsection
