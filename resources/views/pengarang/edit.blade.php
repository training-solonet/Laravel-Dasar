@extends('template')

@section('content')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Edit pengarang</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-secondary" href="{{ route('pengarang.index') }}"> Back</a>
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

<form action="{{ route('pengarang.update',$pengarang->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>nama:</strong>
                <input type="text" name="nama" value="{{ $pengarang->nama }}" class="form-control" placeholder="nama">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat:</strong>
                <input type="text" name="alamat" value="{{ $pengarang->alamat }}" class="form-control"
                    placeholder="Alamat">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No. Telp:</strong>
                <input type="number" name="no_telp" value="{{ $pengarang->no_telp }}" class="form-control"
                    placeholder="Nomor Telepon">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Lahir:</strong>
                <input type="date" name="tgl_lahir" value="{{ $pengarang->tgl_lahir }}" class="form-control"
                    placeholder="Tanggal Lahir">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-left">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>

</form>
@endsection