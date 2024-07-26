<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit buku</title>
</head>
<body>
    <h1>Edit Data Buku</h1>
            

    <div class="form-container">
        <form action="/buku/{{$data->id_buku}}" method="POST">
            
            {{-- wajib pakai jika update --}}
            @csrf
            @method('PUT')

        <div class="mb-3">
            <label class="form-label for="id_buku">ID Buku:</label>
            <input class="form-control" type="text" name="id_buku" value="{{$data->id_buku}}" readonly>
        </div>

        <div class="mb-3">
            <label   class="form-label for="nama_buku">Nama Buku:</label>
            <input class="form-control" type="text" name="nama_buku" value="{{$data->nama_buku}}"> 
        </div>

        <div class="mb-3">
            <label  class="form-label for="genre_buku">Genre Buku:</label>
            <input class="form-control" type="text" name="genre_buku" value="{{$data->genre_buku}}"> 
        </div>

        <div class="mb-3">
            <label  class="form-label for="tahun_terbit">Tahun Terbit:</label>
            <input class="form-control" type="text" name="tahun_terbit" value="{{$data->tahun_terbit}}">
        </div>
           
            <button type="submit" class="btn btn-primary" name="proses">Edit Data</button>
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