@extends('template')

@section('content')
<div class="container d-flex flex-column mt-5">
    <h1>Form Update</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route('buku.update', $id) }}" method="post">
        @method('PUT') 
        @csrf
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input name="judul" type="text" class="form-control" id="judul" value="{{ $judul }}" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
            <input name="tahun_terbit" type="number" min="1900" max="2022" step="1" value="{{ $tahun_terbit }}" class="form-control" id="tahun_terbit" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="penerbit" class="form-label">Penerbit</label>
            <input name="penerbit" type="text" class="form-control" id="penerbit" value="{{ $penerbit }}" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="id_pengarang" class="form-label">Id Pengarang</label>
            <select name="id_pengarang" class="form-control" value="{{ $id_pengarang }}" aria-label="Default select example">
                <option selected>Open this select menu</option>
                @if ($id_pengarang)
                <option selected value="{{ $id_pengarang }}">{{ $id_pengarang }}</option>
                @endif
                
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection