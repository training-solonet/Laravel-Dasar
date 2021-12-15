@extends('template')

@section('content')

<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="text-center">
            <h2>Tambah Buku</h2>
        </div>
<form method="POST" action="{{ route('buku.store') }}">

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    @csrf
<div class="container mt-5">
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Judul</label>
    <input type="text" class="form-control" value="{{ old('judul') }}" name="judul" id="exampleFormControlInput1" placeholder="judul">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Tahun Terbit</label>
    <input type="date" class="form-control" value="{{ old('tahun_terbit') }}" name="tahun_terbit" id="exampleFormControlInput1" placeholder="Tahun Terbit">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Penerbit</label>
    <input type="text" class="form-control" value="{{ old('penerbit') }}" name="penerbit" id="exampleFormControlInput1" placeholder="penerbit">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">pengarang</label>
    <select class="form-control" value="{{ old('id_pengarang') }}" name="id_pengarang">
      <option value="1">Mega</option>
      <option value="2">Kusuma</option>
    </select>
  </div>
  <div class="text-center">
    <button type="submit" class="btn btn-primary">Simpan</button>
  </div>
</div>
</form>
@endsection
