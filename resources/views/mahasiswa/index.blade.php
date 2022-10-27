<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<p> MAHASISWA</P>
<div class="list-group">
  <a href="{{ URL::to('mahasiswa/pendaftaran') }}" class="list-group-item list-group-item-action list-group-item-info">Pendaftaran</a>
  <a href="{{ URL::to('mahasiswa/ujian') }}" class="list-group-item list-group-item-action list-group-item-light">Ujian</a>
  <a href="{{ URL::to('mahasiswa/nilai') }}" class="list-group-item list-group-item-action list-group-item-dark">Nilai</a>
</div>
</body>
</html>