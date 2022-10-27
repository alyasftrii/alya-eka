<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
     <div class="container">
        <a class="navbar-brand" href="/">Toko</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" datatarget="#navbarNav" aria-controls="navbarNav" aria-expanded="false" arialabel="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="mr-auto navbar-nav"></ul>
          <ul class="navbar-nav">
          <li class="nav-item active">
              <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">2
              <a class="nav-link" href="#">Produk</a>
          </li>
          <li class="nav-item">
             <a class="nav-link" href="{{ URL::to('kategoriproduk') }}">kategori</a>
          </li>
          <li class="nav-item">
             <a class="nav-link" href="{{ URL::to('kategori') }}">Kategori</a>
          </li>
          <li class="nav-item">
             <a class="nav-link" href="{{ URL::to('kontak') }}">Kontak</a>
          </li>
          <li class="nav-item">
             <a class="nav-link" href="{{ URL::to('about') }}">Tentang Kami</a>
          </li>
          
          <li class="nav-item">
             <a class="nav-link" href="#">Login</a>
          </li>
          </ul>
        </div>
     </div>
   </nav>
</body>
</html>