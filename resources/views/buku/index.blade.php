@extends('template')

@section('content')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2> daftar buku </h2>
        </div>

        <div class="float-right">
            <a class="btn btn-succes" href="{{ route('buku.create') }}"> Tambah buku </a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th> judul </th>
        <th> tahun terbit </th>
        <th> penerbit </th>
        <th> pengarang </th>
        <th width="280px"class="text-center">Aksi</th>
    </tr>

@foreach ($buku as $bukus )
<tr>
    <td>{{ $bukus->judul }}</td>   
    <td>{{ $bukus->tahun_terbit }}</td>
    <td>{{ $bukus->penerbit }}</td>
    <td>{{ $bukus->id_pengarang }}</td>
    <td class="text-center">

            <form action="{{ route('buku.destroy',$bukus->id) }}" method="POST">

                <a class="btn btn-primary btn-sm" href="{{ route('buku.edit',$bukus->id) }}"> edit</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('apakah anda yakin menghapus data ini?')">DELETE</button>
            </form>
        </td>
    </td>
</tr>

@endforeach
</table>
@endsection