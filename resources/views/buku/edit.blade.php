@extends("template")

@section("content")
<center>
    <h1>Halaman Create</h1>
</center>

<form method="POST" action="{{ route('buku.update', $buku->id) }}">
    @method('PUT')
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
    <label for="exampleInputEmail1" class="form-label">Judul</label>
    <input type="text" name="judul" class="form-control" value="{{ $buku->judul }}" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Tahun terbit</label>
    <input type="text" name="tahun_terbit" class="form-control" value="{{ $buku->tahun_terbit }}" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Penerbit</label>
    <input type="text" name="penerbit" class="form-control" value="{{ $buku->penerbit }}" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <select name="id_pengarang" value="{{ $buku->id_pengarang }} class="form-select" aria-label="Default select example">
        <option value="1">Roni</option>
        <option value="2">Angello</option>
</select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
