@extends('template')

@section('content')
    <div class="container mt-5">
        <div class="text-center">
            <h1> Edit Buku</h1>
        </div>
<form method="post" action="{{ route('buku.update',$edit->id) }}">
  @method('PUT')
    @csrf

  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error )
        <li>{{ $error }}</li>

      @endforeach
    </ul>
  </div>
  @endif


    <div class="form-group">
      <label for="exampleFormControlInput1">Judul</label>
      <input type="text" class="form-control" value="{{ $edit->judul }}" name="judul">
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1">Tahun terbit</label>
        <input type="text" class="form-control" value="{{ $edit->tahun_terbit }}" name="tahun_terbit">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Penerbit</label>
        <input type="text" class="form-control" value="{{ $edit->penerbit }}" name="penerbit">
      </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">pengarang</label>
      <select class="form-control" value="{{ $edit->pengarang }}" name="id_pengarang" >
        <option value="1">mega</option>
        <option value="2">kusuma</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
 </form>
