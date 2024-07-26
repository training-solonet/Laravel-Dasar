<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create SISWA</title>
</head>
<body>
    <h1>Tambah Data Siswa</h1>


    <div class="form-container">
        <form action="/siswa/store" method="POST">
            @csrf
            <div class="mb-3">
                <label for="id_siswa"  class="form-label">ID siswa:</label>
                <input type="text"  class="form-control" name="id_siswa" required >
            </div>
 
            <div class="mb-3">
                <label for="nama_siswa"  class="form-label">Nama siswa:</label>
                <input type="text"  class="form-control" name="nama_siswa" required >
            </div>

            <div class="mb-3">
                <label for="kelas_siswa"  class="form-label">Kelas siswa:</label>
        <input type="text"  class="form-control" name="kelas_siswa" required >
            </div>
 
            <div class="mb-3">
                <label class="form-label" for="jurusan">Jurusan siswa:</label>
        <input class="form-control" type="text" name="jurusan" required > 
            </div>
 
           
            <button type="submit" class="btn btn-primary" name="proses">Tambah Data</button>
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