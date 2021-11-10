@extends('master.admin')

@section('judul_halaman', 'Gunungapi - Edit')

@section('konten')

<a href="{{route('gunungapi.index')}}">Back</a>
<br/>
<form action="{{ route('gunungapi.update') }}" method="post">
   {{csrf_field()}}
   <input type="hidden" name="id" value="{{$gunungapi->id}}"><br/>
   Kode<br/><input type="text" name="code" required="required" value="{{$gunungapi->code}}"><br/>
   Nama Gunungapi<br/><input type="text" name="name" required="required" value="{{$gunungapi->name}}"><br/>
   Nama Lain<br/><input type="text" name="othername" required="required" value="{{$gunungapi->othername}}"><br/>
   Latitude/Lintang<br/><input type="number" name="latitude" required="required" value="{{$gunungapi->latitude}}"><br/>
   Longitude/Bujur<br/><input type="number" name="longitude" required="required" value="{{$gunungapi->longitude}}"><br/>
   Altitude<br/><input type="number" name="altitude" required="required" value="{{$gunungapi->altitude}}"><br/>
   Region/Propinsi<br/><input type="text" name="region" required="required" value="{{$gunungapi->region}}"><br/><br/>
   <input type="submit" value ="Save">
</form>

@endsection
