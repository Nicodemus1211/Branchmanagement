@extends('Admin/layout/Admin')

@section('title')
  Daftar Product
@endsection

@section('content')
<div class="container mx-5 my-5 mt-5">
<h4>Daftar Product</h4>
 <!-- collection section  -->
 <div class="collection-section bg-white">
    <div class="container">
        <h2 class="text-green text-center">Which one do you want to see ?</h2>
        <h1 CLASS="Text-green text-center">Product</h1>

        <div class="card-header">
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                  <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                  <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                      <i class="fas fa-search fa-sm"></i>
                    </button>
                  </div>
                </div>
              </form>
            <a href="{{ route('tableproduct') }}" class="btn btn-sm btn-primary" style="float: right">
                Tambah Data
            </a>
        </div>

        <div class="produk-content">
            <div class="row d-flex">
                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="produk-card text-center mx-2">
                        <img src="img/GADAIEMAS.jpg" class="card-img-top mt-3 " style="object-fit:fill" alt="..."></a></p>
                        <div class="card__info">
                            <span class="card__category"> PINJAMAN GADAI </span>
                            <h3 class="card__title">Gadai Emas</h3>
                            <span class="card__by"> To <a href="https://www.pegadaian.co.id/produk/gadai-emas" class="card__author" title="author">MORE ... </a></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="collection-card text-center mx-2">
                        <img src="img/TABUNGANEMAS.JPG" class="card-img-top mt-3 " style="object-fit:fill" alt="..."></a></p>
                        <div class="card__info">
                            <span class="card__category"> LAYANAN JASA</span>
                            <h3 class="card__title">Tabungan Emas</h3>
                            <span class="card__by"> To <a href="https://www.pegadaian.co.id/produk/tabungan-emas" class="card__author" title="author">MORE ... </a></span>
                        </div>
                        <div class="btn btn-make-this-one bg-green text-white rounded-0">Make this one</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="collection-card text-center mx-2">
                        <img src="img/GADAIKENDARAAN.JPG" class="card-img-top mt-3" alt="..."></a></p>
                        <div class="card__info">
                            <span class="card__category"> PINJAMAN NON GADAI </span>
                            <h3 class="card__title">Cicil Kendaraan</h3>
                            <span class="card__by"> To <a href="https://www.pegadaian.co.id/produk/cicil-kendaraan" class="card__author" title="author">MORE ... </a></span>
                        </div>
                        <div class="btn btn-make-this-one bg-green text-white rounded-0">Make this one</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="collection-card text-center mx-2">
                        <img src="img/KURPEGADAIAN.webp" class="card-img-top mt-3" alt="..."></a></p>
                        <div class="card__info">
                            <span class="card__category"> PINJAMAN NON GADAI</span>
                            <h3 class="card__title">Pegadaian KUR Syariah</h3>
                            <span class="card__by"> To <a href="https://www.pegadaian.co.id/produk/pegadaian-kur-syariah" class="card__author" title="author">MORE ... </a></span>
                            </div>
                        <div class="btn btn-make-this-one bg-green text-white rounded-0">Make this one</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="collection-card text-center mx-2">
                        <img src="img/kantorpeg1.jpg" class="card-img-top mt-3" alt="..."></a></p>
                        <div class="card__info">
                            <span class="card__category"> PINJAMAN GADAI </span>
                            <h3 class="card__title">Gadai Emas</h3>
                            <span class="card__by"> To <a href="https://www.pegadaian.co.id/produk/gadai-emas" class="card__author" title="author">MORE ... </a></span>
                        </div>
                        <div class="btn btn-make-this-one bg-green text-white rounded-0">Make this one</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="collection-card text-center mx-2">
                        <img src="img/kantorpeg1.jpg" class="card-img-top mt-3" alt="..."></a></p>
                        <div class="card__info">
                            <span class="card__category"> LAYANAN JASA</span>
                            <h3 class="card__title">Tabungan Emas</h3>
                            <span class="card__by"> To <a href="https://www.pegadaian.co.id/produk/tabungan-emas" class="card__author" title="author">MORE ... </a></span>
                        </div>
                        <div class="btn btn-make-this-one bg-green text-white rounded-0">Make this one</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="collection-card text-center mx-2">
                        <img src="img/kantorpeg1.jpg" class="card-img-top mt-3" alt="..."></a></p>
                        <div class="card__info">
                            <span class="card__category"> LAYANAN JASA</span>
                            <h3 class="card__title">Tabungan Emas</h3>
                            <span class="card__by"> To <a href="https://www.pegadaian.co.id/produk/tabungan-emas" class="card__author" title="author">MORE ... </a></span>
                        </div> <div class="btn btn-make-this-one bg-green text-white rounded-0">Make this one</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="collection-card text-center mx-2">
                        <img src="img/kantorpeg1.jpg" class="card-img-top mt-3" alt="..."></a></p>
                        <div class="card__info">
                            <span class="card__category"> LAYANAN JASA</span>
                            <h3 class="card__title">Tabungan Emas</h3>
                            <span class="card__by"> To <a href="https://www.pegadaian.co.id/produk/tabungan-emas" class="card__author" title="author">MORE ... </a></span>
                        </div>
                        <div class="btn btn-make-this-one bg-green text-white rounded-0">Make this one</div>
                    </div>
                </div>
        {{-- <div class="card-header">
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                  <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                  <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                      <i class="fas fa-search fa-sm"></i>
                    </button>
                  </div>
                </div>
              </form>
            <a href="{{route('fromproduk')}}" class="btn btn-sm btn-primary" style="float: right">
                Tambah Data
            </a>
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

        <section class="produk-cards">
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

        </section> --}}

    </div>
 </div>
</div>
@endsection
