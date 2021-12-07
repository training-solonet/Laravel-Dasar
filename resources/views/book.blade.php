<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book</title>
</head>
<body>
    Ini Halaman Buku

    <ul>
        @foreach ($data as $a )
        <li>
            {{ $a['buku'] }}
        </li>
        @endforeach
    </ul>
</body>
</html>
