@extends("template")

@section("content")
<center>
    <h1>Halaman Edit</h1>
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
    <label for="exampleInputEmail1" class="form-label">Pengarang</label>
    <select name="id_pengarang" class="form-control" aria-label="Default select example">
        @foreach ($pengarang as $dataPengarang)
            @if ($buku->id_pengarang === $dataPengarang->id)
                <option selected value="{{ $dataPengarang->id }}">{{ $dataPengarang->nama }}</option>
            @else
                <option value="{{ $dataPengarang->id }}">{{ $dataPengarang->nama }}</option>
            @endif

        @endforeach
</select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
