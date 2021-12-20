@extends('template')

@section('content')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Edit Buku</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-secondary" href="{{ route('buku.index') }}"> Back</a>
        </div>
    </div>
</div>

@if($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('buku.update',$buku->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Judul:</strong>
                <input type="text" name="judul" value="{{ $buku->judul }}" class="form-control" placeholder="Judul">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tahun Terbit:</strong>
                <input type="text" name="tahun_terbit" value="{{ $buku->tahun_terbit }}" class="form-control"
                    placeholder="Tahun Terbit">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Penerbit:</strong>
                <input type="text" name="penerbit" value="{{ $buku->penerbit }}" class="form-control"
                    placeholder="Penerbit">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pengarang:</strong>
                <select type="number" name="id_pengarang" value="{{ $buku->id_pengarang }}" class="form-control"
                    placeholder="Pengarang">
                    @foreach($pengarang as $pengarangs)
                        @if($buku->id_pengarang === $pengarangs->id)
                            <option selected value="{{ $pengarangs->id }}">{{ $pengarangs->nama }}</option>
                        @else
                            <option value="{{ $pengarangs->id }}">{{ $pengarangs->nama }}</option>
                        @endif

                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-left">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>

</form>
@endsection