@extends('template')

@section('content')
<div class="container d-flex flex-column mt-5">
    <h1>Form Input</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="POST" action="{{ route('buku.store') }}">
        @csrf   
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input name="judul" type="text" class="form-control" id="judul" value="{{ old('judul') }}" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
            <input name="tahun_terbit" type="number" min="1900" max="2022" step="1" value="{{ old('judul') }}" class="form-control" id="tahun_terbit" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="penerbit" class="form-label">Penerbit</label>
            <input name="penerbit" type="text" class="form-control" id="penerbit" value="{{ old('judul') }}" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="id_pengarang" class="form-label">Id Pengarang</label>
            <select name="id_pengarang" class="form-control" value="{{ old('judul') }}" for="id_pengarang" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection