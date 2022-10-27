
      @extends('layouts.template')
@section('content')
<!-- carousel -->
<div class="container">
<div class="row">
    <div class="col">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/slide1.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/slide2.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/slide3.jpg') }}" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" dataslide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" dataslide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
           </a>
        </div>
    </div>
</div>
<!-- end carousel -->

<!-- end kategori produk -->
<!-- produk Promo-->
<div class="row mt-4">
    <div class="col col-md-12 col-sm-12 mb-4">
        <h2 class="text-center">Promo</h2>
</div>
<!-- produk pertama -->
<div class="col-md-4">
    <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('produk/satu') }}">
            <img src="{{asset('images/slide3.jpg') }}" alt="foto produk" class="card-img-top">
        </a>
        <div class="card-body">
            <a href="{{ URL::to('produk/satu') }}" class="text-decoration-none">
                <p class="card-text">Produk Pertama</p>
            </a>
            <div class="row mt-4">
                <div class="col">
                    <button class="btn btn-light">
                        <i class="far fa-heart"></i>
                    </button>
                </div>
                <div class="col-auto">
                    <p>
                        <del>Rp. 15.000,00</del>
                        <br />
                        Rp. 10.000,00
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- produk kedua -->
<div class="col-md-4">
    <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('produk/dua') }}">
            <img src="{{asset('images/slide3.jpg') }}" alt="foto produk" class="card-img-top">
        </a>
        <div class="card-body">
            <a href="{{ URL::to('produk/dua') }}" class="text-decoration-none">
                <p class="card-text">Produk Kedua</p>
            </a>
            <div class="row mt-4">
                <div class="col">
                    <button class="btn btn-light">
                        <i class="far fa-heart"></i>
                    </button>
                </div>
                    <div class="col-auto">
                        <p>
                            <del>Rp. 15.000,00</del>
                            <br />
                             Rp. 10.000,00
                        </p>
                    </div>
            </div>
        </div>
    </div>
</div>
<!-- produk ketiga -->
<div class="col-md-4">
    <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('produk/tiga') }}">
            <img src="{{asset('images/slide3.jpg') }}" alt="foto produk" class="card-img-top">
        </a>
        <div class="card-body">
            <a href="{{ URL::to('produk/tiga') }}" class="text-decoration-none">
                <p class="card-text">Produk Ketiga</p>
            </a>
            <div class="row mt-4">
                <div class="col">
                    <button class="btn btn-light">
                        <i class="far fa-heart"></i>
                    </button>
                </div>
                <div class="col-auto">
                    <p>
                        <del>Rp. 15.000,00</del>
                        <br />
                            Rp. 10.000,00
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- end produk promo -->
<!-- produk Terbaru-->
<div class="row mt-4">
    <div class="col col-md-12 col-sm-12 mb-4">
        <h2 class="text-center">Terbaru</h2>
</div>
<!-- produk pertama -->
<div class="col-md-4">
    <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('produk/satu') }}">
            <img src="{{asset('images/slide2.jpg') }}" alt="foto produk" class="card-img-top">
        </a>
        <div class="card-body">
            <a href="{{ URL::to('produk/satu') }}" class="text-decoration-none">
                <p class="card-text">Produk Pertama</p>
            </a>
            <div class="row mt-4">
                <div class="col">
                    <button class="btn btn-light">
                        <i class="far fa-heart"></i>
                    </button>
                </div>
                <div class="col-auto">
                    <p>
                       Rp. 10.000,00
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- produk kedua -->
<div class="col-md-4">
    <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('produk/dua') }}">
            <img src="{{asset('images/slide2.jpg') }}" alt="foto produk" class="card-img-top">
        </a>
        <div class="card-body">
            <a href="{{ URL::to('produk/dua') }}" class="text-decoration-none">
                <p class="card-text">Produk Kedua</p>
            </a>
            <div class="row mt-4">
                <div class="col">
                    <button class="btn btn-light">
                        <i class="far fa-heart"></i>
                    </button>
                </div>
                <div class="col-auto">
                    <p>
                        Rp. 10.000,00
                    </p>
               </div>
            </div>
        </div>
    </div>
</div>
<!-- produk ketiga -->
<div class="col-md-4">
    <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('produk/tiga') }}">
            <img src="{{asset('images/slide2.jpg') }}" alt="foto produk" class="card-img-top">
        </a>
        <div class="card-body">
            <a href="{{ URL::to('produk/tiga') }}" class="text-decoration-none">
                <p class="card-text">Produk Ketiga</p>
            </a>
            <div class="row mt-4">
                <div class="col">
                    <button class="btn btn-light">
                        <i class="far fa-heart"></i>
                    </button>
                </div>
                <div class="col-auto">
                    <p>
                        Rp. 10.000,00
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- end produk terbaru -->
<!-- tentang toko -->
 <hr>
   <div class="row mt-4">
      <div class="col">
        <h5 class="text-center">toko Online Menggunakan Laravel</h5>
            <p>Toko adalah demo membangun toko online menggunakan laravel framework. Didalam demo ini terdapat user bisa menginput data kategori, produk dan transaksi. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic laborum aliquam dolorum sequi nulla maiores quos incidunt veritatis numquam suscipit.Cumque dolore rem obcaecati. Eos quod ad non veritatis assumenda.</p>
            <p>Toko adalah demo membangun toko online menggunakan laravel framework. Didalam demo ini terdapat user bisa menginput data kategori, produk dan transaksi. Modul Laravel | Eka Yuniar, S.Kom., MMSI Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic laborum aliquam dolorum sequi nulla maiores quos incidunt veritatis numquam suscipit. Cumque dolore rem obcaecati. Eos quod ad non veritatis assumenda.</p>
            <p class="text-center">
               <a href="" class="btn btn-outline-secondary"> Baca selengkapnya</a>
            </p>
    </div>
</div>
</p>
</div>
@endsection
    </body>
</html>