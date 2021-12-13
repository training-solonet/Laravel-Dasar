@extends('template')

@section('content')
<div class="container">
    <div class="row mt-5 mb-5"></div>
        <div class="col-lg-12 mb-5">
            <div class="float-left">
                <h2>Daftar Buku</h2>
            </div>
            <div class="float-right mb-5">
                <a href="{{ route('buku.create') }}" class="btn btn-success">Tambah Buku</a>
            </div>
        </div>
    </div>


@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{ {$message} }</p>
    </div>
@endif

    <table class="table table-bordered">
        <tr>
            <th>Judul</th>
            <th>Tahun Terbir</th>
            <th>Penerbit</th>
            <th>Pengarang</th>
            <th width="200px" class="text-center">Aksi</th>
        </tr>
    
        @foreach ($buku as $dataBuku)
        <tr>    
            <td class="text-center">{{ $dataBuku->judul }}</td>
            <td class="text-center">{{ $dataBuku->tahun_terbit }}</td>
            <td class="text-center">{{ $dataBuku->penerbit }}</td>
            <td class="text-center">{{ $dataBuku->id_pengarang }}</td>
            <td class="text-center">
                <form method="POST" action="{{ route('buku.destroy', $dataBuku->id) }}">
                    <a href="{{ route('buku.edit', $dataBuku->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    @csrf
                    @method('DELETE')
    
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin?')">
                        Delete
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>

@endsection