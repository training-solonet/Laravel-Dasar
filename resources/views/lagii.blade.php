<!DOCTYPE html>
<html lang="en">

<head>
    <title>Luas Segitiga</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container mt-5">
        <h2>Luas Segitiga</h2>
        <form action="/segitiga">
            @csrf
            <div class="form-group">
                <label>Alas :</label>
                <input class="form-control" name="panjang" value="{{ $alas }}" disabled>
            </div>
            <div class="form-group">
                <label>Tinggi :</label>
                <input class="form-control" name="lebar" value="{{ $tinggi }}" disabled>
            </div>
            <div class="form-group">
                <label>Luas :</label>
                <input class="form-control" value="{{ $luas }}" disabled>
            </div>
            <button type="submit" class="btn btn-primary">kembali</button>
        </form>
    </div>

</body>

</html>