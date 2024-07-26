
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar With Bootstrap</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
                <div class="d-flex">
                    <button class="toggle-btn" type="button">
                        <i class="lni lni-grid-alt"></i>
                    </button>
                    <div class="sidebar-logo">
                        <a href="#">xixixi  </a>
                    </div>
                </div>
                <ul class="sidebar-nav">
                <li class="sidebar-item">
                        <a href="/siswa" class="sidebar-link">
                            <i class="lni lni-user"></i>
                            <span>Tabel Siswa</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="/buku" class="sidebar-link">
                            <i class="lni lni-agenda"></i>
                            <span>Tabel Buku</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="lni lni-popup"></i>
                            <span>Tabel Peminjaman</span>
                        </a>
                    </li>
                </ul>
            </aside>

        <div class="main p-3">
            <div class="text-center">
                <h1>
                    Data Peminjam
                </h1>
            </div>

            {{-- tombol create --}}
            <a class="btnCreate" href="/peminjam/insert">
                <input type="button" value="Create Data"></a>

            <table style="margin-top: 30px" class="table">
                <thead>
                <tr>
                    <th>Nama Siswa</th>
                    <th>Jurusan</th>
                    <th>Nama Buku</th>
                    <th>Tanggal Pinjam</th>
                    <th colspan="2">Aksi</th>
                </tr>
       
                </thead>
                <tbody>
                    @forelse ($data as $p)
                        <tr>
                            <td>{{ $p->siswa->nama_siswa }}</td>
                            <td>{{ $p->siswa->jurusan }}</td>
                            <td>{{ $p->buku->nama_buku }}</td>
                                    {{-- library php carbon untuk merubah format date dari Y-m-d jadi d-m-Y --}}
                            <td>{{ \Carbon\Carbon::parse($p->tgl_pinjam)->format('d-m-Y') }}</td>

                            <td><a href="/peminjam/{{$p->id_pinjam}}/edit"><input type="button" value="Update"></a></td>

                            <form action="/peminjam/{{$p->id_pinjam}}" method="POST">
                                @csrf
                                @method('delete')

                                <td><a><input type="submit" value="Delete"></a></td>
                            
                            </form>
                        </tr>
                    @empty
                        <tr><td colspan="6">Tidak ada data</td></tr>
                    @endforelse
                </tbody>
            </table>
            
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>