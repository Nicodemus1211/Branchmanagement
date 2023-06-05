@extends('layouts.main')

@section('title')
TENTANG KAMI
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
        <img src="img/tentangkamibanner1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/tentangkamibanner2.jpeg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/tentangkamibanner3.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/tentangkamibanner4.jpg" class="d-block w-100" alt="...">
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

{{-- tentangkami --}}
<div class="section">
<div class="container">
    <div class="row">

        <div class="col-6 mt-5">
            <h1>
                Visi
            </h1>
            <h3>"Menjadi <span>The Most Valuable Financial Company</span> di Indonesia
            dan sebagai Agen Inklusi Keuangan Pilihan Utama Masyarakat</h3>
            <br>
            <h1>Misi</h1>
           <h3> 1. Memberikan <span>manfaat dan keuntungan optimal</span>
            bagi seluruh stakeholder dengan<span>mengembangkan bisnis</span></h3>
            <h3> 2. <span>Memperluas Jangkauan layanan UMKM melalui</span>
            sinergi Ultra Mikro Untuk menungkatkan Proposisi nilai ke nasabah dan stake Holer</h3>
            <h3> 3. <span>Memberikan service excellence dengan fokus nasabah melali :</span>
            <h5> - Bisnis proses yang lenih sederhana dan gigital</h5>
            <h5> - Teknologi informasi yang handal dan mutakhir</h5>
            <h5> - Praktek manajemen risiko yang kokoh</h5>
            <h5> - SDM yang profesional berbudaya kinerja baik</h5>
            </h3>
        </div>

        <div class="col-6 mt-5 mr-5 p-5 d-relative">
            <img src="img/pegadaian2.jpg" alt="" style="width: 80% ">     </div>

        </div>
{{-- bagian2 --}}

        <div class="container mt-5 p-5" id="bagian2">

                <form class="row g-3 p-5 needs-validation bg-white" novalidate>
                    <h1>Silahkan isi formulir dibawah untuk mengirim pesan</h1>
                    <div class="col-md-6 mt-5">
                      <h4 for="validationCustom01" class="form-label">First name</h4>
                      <input type="text" class="form-control" id="validationCustom01" value="" required>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                    <div class="col-md-6 mt-5">
                      <h4 for="validationCustom02" class="form-label">Last name</h4>
                      <input type="text" class="form-control" id="validationCustom02" value="" required>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                    <div class="col-md-6">
                      <h4 for="validationCustomUsername" class="form-label bg-color-green">Email</h4>
                      <div class="input-group has-validation">
                        <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                          Please choose a username.
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                        <h4 for="validationCustom05" class="form-label">Telphone</h4>
                        <input type="text" class="form-control" id="validationCustom05" required>
                        <div class="invalid-feedback">
                          Please insert a valid telephone.
                        </div>
                      </div>
                    <div class="col-md-6">
                      <h4 for="validationCustom03" class="form-label">Alamat</h4>
                      <input type="text" class="form-control"  id="validationCustom03" required>
                      <div class="invalid-feedback">
                        Please provide a valid city.
                      </div>
                    </div>
                    <div class="col-md-6">
                      <h4 for="validationCustom04" class="form-label">City</h4>
                      <select class="form-select" id="validationCustom04" required>
                        <option selected disabled value="">Choose...</option>
                        <option>Sumatera</option>
                        <option>Jawa</option>
                        <option>Kalimantan</option>
                        <option>Sulawesi</option>
                        <option>Bali</option>
                        <option>Batam</option>
                      </select>
                      <div class="invalid-feedback">
                        Please select a valid state.
                      </div>
                    </div>

                    <div class="col-md-12">
                        <h4 for="validationCustomJudul" class="form-label">Judul</h4>
                        <input type="text" class="form-control" id="validationCustom02" value="" required>
                      </div>
                    <div class="col-md-12">
                        <h4 for="validationCustomkategori" class="form-label">Kategori</h4>
                        <select class="form-select" aria-label="Default select example" >
                            <option selected>Choose... </option>
                            <option value="1">Informasi</option>
                            <option value="2">Pengaduan</option>

                          </select>
                    </div>
                    <div class="form-floating">
                        <h4 for="floatingTextarea2">Pesan</h4>
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 200px"></textarea>

                      </div>

                    <div class="col-12 mt-5">
                      <button class="btn btn-success" type="submit">Kirim</button>
                    </div>
                  </form>

        </div>
</div>
</div>
@endsection>
