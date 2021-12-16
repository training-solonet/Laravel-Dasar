@extends("template")

@section("content")
<center>
    <h1>Halaman Create</h1>
</center>

<form method="POST" action="{{ route('pengarang.store') }}">
    @csrf

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" name="nama" class="form-control" value="{{ old('nama') }}" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Alamat</label>
    <input type="text" name="alamat" class="form-control" value="{{ old('alamat') }}" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">No Telp</label>
    <input type="number" name="no_telp" class="form-control" value="{{ old('no_telp') }}" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
 <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Tgl Lahir</label>
    <input type="date" name="tgl_lahir" class="form-control" value="{{ old('tgl_lahir') }}" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
