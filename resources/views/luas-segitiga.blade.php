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

    <form method="" action="/segitiga">
        <div class="container mt-5">
        <h2>Luas Segitiga :</h2>
            <div class="form-group">
            <b><label>Alas :</label></b>
            <p>{{ $alas }}</p>
            </div>
            <div class="form-group">
            <b><label>Tinggi :</label></b>
            <p>{{ $tinggi }}</p>
            </div>
            <div class="form-group">
            <b><label>Luas Segitiga :</label></b>
            <p>{{ $luas }}</p>
            </div>
            <button type="submit" class="btn btn-primary">kembali</button>
        </div>
    </form>
</body>
</html> 