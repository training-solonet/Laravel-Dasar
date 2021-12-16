@extends('template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Daftar pengarang</h2>
            </div>
            <div class="float-right">
                <a href="{{ route('pengarang.create') }}" class="btn btn-success">Tambah pengarang</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success" role="alert">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No.Telephone</th>
            <th>Tgl.Lahir</th>
            <th class="text-center" width="280px">aksi</th>
        </tr>
        @foreach ($pengarang as $dataPengarang)
        <tr>
            <td>{{ $dataPengarang->nama }}</td>
            <td>{{ $dataPengarang->alamat }}</td>
            <td>{{ $dataPengarang->no_telp }}</td>
            l<td>{{ $dataPengarang->tgl_lahir }}</td>
            <td class="text-center">
                <form action="{{ route('pengarang.destroy', $dataPengarang->id) }}" method="POST">
                    <a href="{{ route('pengarang.edit', $dataPengarang->id) }}" class="btn btn-primary btn-sm">EDIT</a>
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
