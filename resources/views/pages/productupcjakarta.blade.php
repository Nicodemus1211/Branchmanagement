
@extends('layouts.main')

@section('title')
Kantor UPC JAKARTA
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
            <div class="row">
                <div class="col-lg-12 wonderful-title px-5 text-center">
                    <h1>KANTOR CABANG PEGADAIAN</h1>
                    <h5>DEPOK</h5>
                    <p>JALAN SILIWANGI NO.20 PANCORAN MAS</P>
                    <p>Depok, Pancoran mas</p>
                    <p>Depok, Jawa Barat</p>
                    <p>Telp. 02129384524</p>
                    <p></p>
                </div>
            </div>

            <div class="container m-5">
                <div class="row gap-3">

                        <div class="card " style="width: 15rem;">
                            <p><a href="https://www.pegadaian.co.id/produk/jasa-titipan" >
                                <img src="img/gadai-titipan-emas-produk.png" class="card-img-top mt-3" alt="..."></a></p>
                            <div class="card-body text-center mt-2 w-3">
                                <h5>Gadai Titip Emas</h5>
                            <p class="card-text text-center">
                                Pegadaian Gadai Emas adalah adalah pemberian kredit dengan sistem
                                gadai yang diberikan ke seluruh golongan nasabah untuk
                                ....
                            </div>
                        </div>


                    <div class="card" style="width: 15rem;">
                        <p><a href="https://www.pegadaian.co.id/produk/gadai-non-emas">
                        <img src="img/gadai-non-emas.png" class="card-img-top mt-3" alt="..."></a></p>
                        <div class="card-body text-center mt-2 w-3">
                            <h5>Gadai non Emas</h5>
                        <p class="card-text">	Gadai Non Emas adalah pemberian kredit dengan sistem gadai yang diberikan ke seluruh golongan nasabah untuk ... </p>
                        </div>
                    </div>

                    <div class="card" style="width: 15rem;">
                        <p><a href="https://www.pegadaian.co.id/produk/gadai-kendaraan">
                            <img src="img/gadai-kendaraan.png" class="card-img-top mt-3" alt="..."></a></p>
                        <div class="card-body text-center mt-2 w-3">
                            <h5>Gadai Kendaraan</h5>
                        <p class="card-text"> 	Gadai Kendaraan Syariah adalah pemberian pinjaman secara syariah dengan sistem gadai yang diberikan ke seluruh golongan ...</p>
                        </div>
                    </div>


                    <div class="card" style="width: 15rem;">
                        <p><a href="https://www.pegadaian.co.id/produk/gadai-emas">
                            <img src="img/gadai-emas-produk.png" class="card-img-top mt-3" alt="..."></a></p>

                        <div class="card-body text-center">
                            <h5>Gadai Emas</h5>
                        <p class="card-text">Pegadaian Gadai Emas adalah adalah pemberian kredit dengan sistem
                            gadai yang diberikan ke seluruh golongan nasabah untuk, ...</p>
                        </div>
                    </div>


                    <div class="card" style="width: 15rem;">
                        <img src="img/gadai-titipan-emas-produk.png" class="card-img-top mt-3" alt="...">
                        <div class="card-body text-center">
                            <h5>Gadai Titip Emas</h5>
                          <p class="card-text">...</p>
                        </div>
                    </div>


                    <div class="card" style="width: 15rem;">
                        <img src="img/gadai-non-emas.png" class="card-img-top mt-3" alt="...">
                        <div class="card-body text-center">
                            <h5>Gadai non Emas</h5>
                          <p class="card-text">...</p>
                        </div>
                    </div>


                    <div class="card" style="width: 15rem;">
                        <img src="img/gadai-kendaraan.png" class="card-img-top mt-3" alt="...">
                        <div class="card-body text-center">
                            <h5>Gadai Titip Emas</h5>
                          <p class="card-text">...</p>
                        </div>
                    </div>


                    <div class="card" style="width: 15rem;">
                        <img src="img/gadai-emas-produk.png" class="card-img-top mt-3" alt="...">
                        <div class="card-body text-center">
                            <h5>Gadai Emas</h5>
                          <p class="card-text">...</p>
                        </div>
                    </div>


                </div>
            </div>


        </div>
    </div>
</div>

{{-- endkantorpust --}}

@endsection
