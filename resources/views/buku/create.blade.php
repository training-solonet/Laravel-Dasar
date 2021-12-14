@extends('template')

@section('content')
    <div class="container mt-5">
        <div class="text-center">
            <h1> Tambah Buku</h1>
        </div>
<form method="POST" action="{{ route('buku.store') }}">
    @csrf
    <div class="form-group">
      <label for="exampleFormControlInput1">Judul</label>
      <input type="text" class="form-control" name="judul" required>
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1">Tahun terbit</label>
        <input type="text" class="form-control" name="tahun_terbit" required>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Penerbit</label>
        <input type="text" class="form-control" name="penerbit" required> 
      </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">pengarang</label>
      <select class="form-control" name="id_pengarang" required>
        <option value="1">zidan</option>
        <option value="2">klobot</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button> 
 </form>

  @endsection