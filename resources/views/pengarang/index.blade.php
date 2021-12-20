@extends('template')

@section('content')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Daftar pengarang</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-success" href="{{ route('pengarang.create') }}"> Tambah pengarang</a>
        </div>
    </div>
</div>

@if($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table id="myTable" class="table table-bordered">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No. Telp</th>
            <th>Tanggal Lahir</th>
            <th width="280px" class="text-center">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pengarang as $pengarangs)
            <tr>
                <td>{{ $pengarangs->nama }}</td>
                <td>{{ $pengarangs->alamat }}</td>
                <td>{{ $pengarangs->no_telp }}</td>
                <td>{{ $pengarangs->tgl_lahir }}</td>
                {{-- <td>{{ $pengarangs->pengarang->nama }}</td> --}}
                <td class="text-center">
                    <form action="{{ route('pengarang.destroy',$pengarangs->id) }}"
                        method="POST">

                        <a class="btn btn-primary btn-sm"
                            href="{{ route('pengarang.edit',$pengarangs->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>


</table>


@endsection