<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>welcome</title>
</head>
<body>
    <h1>selamat datang {{$name}} sebagai {{$role}}</h1>

    @if ($role == 'admin')
    <a href="/siswa">Menuju Halaman Peminjaman</a>

    @elseif ($role == 'member')
    <a href="/">Menuju Halaman Semua Data</a>    
    @endif

    
</body>
</html>
