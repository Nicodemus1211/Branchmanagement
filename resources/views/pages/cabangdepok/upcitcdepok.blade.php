@extends('layouts.main')

@section('title')
Kantor UPC ITC DEPOK
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
        <div class="container">
            <div class="row">
                <div class="col-lg-12 wonderful-title px-5 text-center">
                    <h1>KANTOR UNIT PELAYANAN CABANG</h1>
                    <h5>UPC ITC DEPOK</h5>
                    <p>JALAN MARGIONDA RAYA RUKO ITC DEPOK BLOK C NO.A03 LT.U BEJI, Pondok cina, Beji</p>
                    <p>Depok, Jawa Barat</p>
                    <p>Telp. 02129420326 HP. - </p>

                </div>
            </div>


        </div>
    </div>
</div>

{{-- endkantor --}}

@endsection
