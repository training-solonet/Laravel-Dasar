@extends('template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Daftar Buku</h2>
            </div>
            <div class="float-right">
                <a href="{{ route('buku.create') }}" class="btn btn-success"> Tambah Buku</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert--success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>judul</th>
            <th>Tahun Terbit</th>
            <th>Penerbit</th>
            <th>Pengarang</th>
            <th class="text-center" width="280px">aksi</th>
        </tr>
        @foreach ($buku as $dataBuku)

        <tr>
            <td>{{ $dataBuku->judul }}</td>
            <td>{{ $dataBuku->tahun_terbit }}</td>
            <td>{{ $dataBuku->penerbit }}</td>
            <td>{{ $dataBuku->id_pengarang }}</td>
            <td class="text-center">
                <form action="{{ route('buku.destroy', $dataBuku->id) }}" method="POST">
                    <a href="{{ route('buku.edit', $dataBuku->id) }}" class="btn btn-primary btn-sm">EDIT</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm
                    ('Apakah Anada Yakin Ingin Menghapus Data INi')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
