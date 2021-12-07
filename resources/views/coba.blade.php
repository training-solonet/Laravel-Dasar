<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>
    Ini Halaman Buku {{ $judul }}
    </h3>
    @foreach ($data as $dataku )
        <li>{{ $dataku['buku'] }}</li>
    @endforeach
</body>
</html>