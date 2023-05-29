@extends('layouts.main')

@section('title')
Kantor CP BOJONGSARI
@endsection

@section('content')
{{-- Product --}}
<div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/BNGempita-Cicil-Emas-1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/BNKartu-Emas-Scaled.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/BNTitipan-Emas.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/BNtransaksipegadaian.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>



{{-- endproduct --}}



{{-- Kantor Pusat --}}
<div class="kantor ">
        <div class="container mt-5">
            <div class="row p-2">
                <div class="col-lg-12 cabang__title px-5 mt-5 text-center">
                    <h1>KANTOR CABANG PEGADAIAN</h1>
                    <h5>CP BOJONGSARI</h5>
                    <p>JALAN RAYA CIPUTAT PARUNG NO.99 H SAWANGAN, Bojong Sari Baru, Sawangan</p>
                    <p>Depok, Jawa Barat</p>
                    <p>Telp. 021518614588 HP. 0811193073333</p>

                </div>
            </div>
            <div class="conten">
                <div class="container">
                  <div class="row">
                    <div class="col-6 most-text px-5">
                      <h4>Recommend</h4>
                      <h2>Most Product Pegadaian</h2>
                    </div>
                    <div class="col-6 text-end px-5">
                      <button>See all</button>
                    </div>
                  </div>


                        <section class="cards">
                            <article class="card card--1">
                                <div class="card__img"></div>
                                <a href="#" class="card_link">
                                    <div class="card__img--hover"></div>
                                </a>
                                <div class="card__info">
                                    <span class="card__category"> PINJAMAN GADAI </span>
                                    <h3 class="card__title">Gadai Emas</h3>
                                    <span class="card__by"> To <a href="https://www.pegadaian.co.id/produk/gadai-emas" class="card__author" title="author">MORE ... </a></span>
                                </div>
                            </article>


                            <article class="card card--2">
                                <div class="card__img"></div>
                                <a href="#" class="card_link">
                                    <div class="card__img--hover"></div>
                                </a>
                                <div class="card__info">
                                    <span class="card__category"> LAYANAN JASA</span>
                                    <h3 class="card__title">Tabungan Emas</h3>
                                    <span class="card__by"> To <a href="https://www.pegadaian.co.id/produk/tabungan-emas" class="card__author" title="author">MORE ... </a></span>
                                </div>
                            </article>

                            <article class="card card--3">
                                    <div class="card__img"></div>
                                    <a href="#" class="card_link">
                                    <div class="card__img--hover"></div>
                                    </a>
                                    <div class="card__info">
                                        <span class="card__category"> PINJAMAN NON GADAI </span>
                                        <h3 class="card__title">Cicil Kendaraan</h3>
                                        <span class="card__by"> To <a href="https://www.pegadaian.co.id/produk/cicil-kendaraan" class="card__author" title="author">MORE ... </a></span>
                                    </div>
                            </article>

                            <article class="card card--4">
                                    <div class="card__img"></div>
                                    <a href="#" class="card_link">
                                    <div class="card__img--hover"></div>
                                    </a>
                                    <div class="card__info">
                                    <span class="card__category"> PINJAMAN NON GADAI</span>
                                    <h3 class="card__title">Pegadaian KUR Syariah</h3>
                                    <span class="card__by"> To <a href="https://www.pegadaian.co.id/produk/pegadaian-kur-syariah" class="card__author" title="author">MORE ... </a></span>
                                    </div>
                            </article>
                        </section>





                  </div>
                </div>
              </div>

        </div>
    </div>
</div>

{{-- endkantor --}}

@endsection
