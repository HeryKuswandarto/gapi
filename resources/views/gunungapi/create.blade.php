@extends('master.admin')

@section('judul_halaman', 'Gunungapi - Add New Data')

@section('konten')
<a href="{{route('gunungapi.index')}}">Back</a>
<br/>
<form action="{{ route('gunungapi.store') }}" method="post">
   {{csrf_field()}}
   Kode<br/><input type="text" name="code" required="required"><br/>
   Nama Gunungapi<br/><input type="text" name="name" required="required"><br/>
   Nama Lain<br/><input type="text" name="othername" required="required"><br/>
   Latitude/Lintang<br/><input type="number" name="latitude" required="required"><br/>
   Longitude/Bujur<br/><input type="number" name="longitude" required="required"><br/>
   Altitude<br/><input type="number" name="altitude" required="required"><br/>
   Region/Propinsi<br/><input type="text" name="region" required="required"><br/><br/>
   <input type="submit" value ="Save">
</form>
@endsection
