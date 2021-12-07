<!DOCTYPE html>
<html lang="en">
<head>
    <title>Persegi Panjang</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container mt-5">
    <h2>Luas Persegi Panjang</h2>
    <form method="POST" action="/luas-persegi-panjang">
    @csrf
    <div class="form-group">
        <label>Panjang</label>
        <input type="number" placeholder="Masukan Panjang" class="form-control" name="panjang">
    </div>
    <div class="form-group">
        <label>Lebar</label>
        <input type="number" placeholder="Masukan Lebar" class="form-control" name="lebar">
    </div>
    <button type="submit" class="btn btn-primary">Hitung</button>
    </form>
</div>

</body>
</html>