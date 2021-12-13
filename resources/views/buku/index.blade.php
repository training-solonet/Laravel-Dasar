@extends('template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Daftar Buku</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-succes" href="{{ route('buku.create') }}"> Tambah Buku </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('succes'))
    <div class="alert alert-succes">
        <p>{{ $message }}</p>

    </div>
    @endif

<table class="table table-bordered">
    <tr>
        <th>Judul</th>
        <th>Tahun Terbit</th>
        <th>penerbit</th>
        <th>pengarang</th>
        <th width="280px" class="text-center">Aksi</th>
    </tr>
    @foreach ($buku as $bukus)
    <tr>
        <td>{{ $bukus->judul }}</td>
        <td>{{ $bukus->tahun_terbit }}</td>
        <td>{{ $bukus->penerbit }}</td>
        <td>{{ $bukus->id_pengarang }}</td>
        <td class="text-center">
            <form action="{{ route('buku.destroy',$bukus->id) }}" method="POST">
            <a class="btn btn-primary btn-sm" href="{{ route('buku.destroy',$bukus->id) }}">Edit</a>

            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-danger btn-sm" onclick="return 
            confirm(Apakah Anda Yakin ingin menghapus data ini?)">Delete</button>
            </form>
        </td>
    </tr>
        
    @endforeach

</table>

@endsection