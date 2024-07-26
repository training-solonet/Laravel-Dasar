<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Tambah Data Peminjam</title>
</head>
<body>
  <h1>Tambah Data Peminjam</h1>

    <div class="form-container">
        <form action="/peminjam/store" method="post">
            @csrf   
            <div class="mb-3">
                <label for="siswa" class="form-label">Pilih Nama Siswa:</label>
                <select class="form-control" name="id_siswa" id="siswa">
                    @foreach ($siswa as $s);
                        <option value="{{$s->id_siswa}}">{{$s->nama_siswa}}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="mb-3">
                <label for="buku" class="form-label">Pilih Nama Buku:</label>
                <select class="form-control" name="id_buku" id="buku">
                 @foreach ($buku as $b);
                    <option value="{{$b->id_buku}}">{{$b->nama_buku}}</option>
                 @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="tgl_pinjam" class="form-label">Masukan Tanggal:</label>
                <input type="date" class="form-control" name="tgl_pinjam" id="tgl_pinjam" value="">
            </div>

            <button type="submit" class="btn btn-primary" name="proses">Tambahkan Data</button>
        </form>
    </div>
    </body>
    </html>
    
    
    
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            flex-direction: column; 
            align-items: center;
            background-color: #f8f9fa; 
        }
        h1 {
            margin-top: 20px; 
            margin-bottom: 20px; 
        }
        .form-container {
            width: 100%;
            max-width: 650px; 
            padding: 20px;
            background-color: #ffffff; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
            border-radius: 10px; 
        }
    </style>