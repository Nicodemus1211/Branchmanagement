@extends('layout/app')

@section('title')
    Pegadaian
@endsection

@section('content')
<div class="container">
  <div id="carouselExampleCaptions" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../Assets/img/Kantor pusat.jpeg" class="d-block img-slide" alt="..." />
          <div class="carousel-caption d-none d-md-block"></div>
        </div>
        <div class="carousel-item">
          <img src="../Assets/img/sapa.jpeg" class="d-block img-slide" alt="..." />
          <div class="carousel-caption d-none d-md-block"></div>
        </div>
        <div class="carousel-item">
          <img src="../Assets/img/gempita.jpg" class="d-block img-slide" alt="..." />
          <div class="carousel-caption d-none d-md-block"></div>
        </div>
        <div class="carousel-item">
          <img src="../Assets/img/gempita2.jpg" class="d-block img-slide" alt="..." />
          <div class="carousel-caption d-none d-md-block"></div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
   <!-- Most picked destination start -->

   <div class="container mb-5">
    <p class="oren mt-5 pt-5">Recommended</p>
    <div class="d-flex justify-content-between">
        <h4>Most Picked Product</h4>
        <button type="button" class=" btn btn-success px-5"> <a href="https://www.pegadaian.co.id/">See all</a> </button>
    </div>
    <div class="row text-white wrapper2">
        <div class="col-xxl-3 col-md-6 col-12">
            <div class="item">
                <div class="gambarrelated">
                    <h4>Gadai Emas</h4><br />
                    <p>Pegadaian</p>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-md-6 col-12">
            <div class="item2">
                <div class="gambarrelated">
                    <h4>Gadai non Emas</h4><br />
                    <p>Pegadaian</p>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-md-6 col-12">
            <div class="item3">
                <div class="gambarrelated">
                    <h4>Gadai Kendaraan</h4><br />
                    <p>Pegadaian</p>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-md-6 col-12">
            <div class="item4">
                <div class="gambarrelated">
                    <h4>Tabungan Emas</h4><br />
                    <p>Pegadaian</p>
                </div>
            </div>
        </div>
    </div>
</div>

   <!-- Most picked destination end -->
</div>

<!-- why us  -->
<div class="section-why-us bg-gray">
  <div class="container">
      <h2 class="text-green text text-center">Why Us</h2>
      <div class="row text-center why-us-content">
          <div class="col-lg-4 col-md-6 col-sm-4">
              <div class="card-why bg-green text-white px-5">
                  <p class="title">Misi</p>
                  <p>Memberikan manfaat dan keuntungan optimal bagi seluruh stakeholder dengan mengembangkan  bisnis inti</p>
              </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-4">
              <div class="card-why bg-green text-white px-5">
                  <p class="title">Misi</p>
                  <p>Memperluas jangkauan layanan UMKM melalui sinergi Ultra Mikro untuk meningkatkan proposisi nilai ke nasabah dan stakeholder</p>
              </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-4">
              <div class="card-why bg-green text-white px-5">
                  <p class="title">Misi</p>
                  <p>Memberikan service excellence dengan fokus nasabah</p>
              </div>
          </div>
          <div class="see">
              <button type="button" class="btn btn-success" ><a href="https://www.pegadaian.co.id/">Lihat Semua</a> </button>
          </div>
      </div>
  </div>
</div>
<!-- end of why us  -->



{{-- cabang --}}
<div class="container ">
  
  <div class="card shadow mt-3">
    <div class="card-header">
        <h6>Daftar Kantor Pegadaian</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="text-center">
                    <tr>
                        <th>Nama</th>
                        <th>Telephone</th>
                        <th>No. Hp</th>
                        <th>Alamat</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <td>Kantor Pusat (Konvensional)</td>
                        <td>0213155550</td>
                        <td>-</td>
                        <td><a href="https://goo.gl/maps/7dFTUYqJLs7sqtB99">Tinjau Lokasi</a></td>
                      
                    </tr>
                    <tr>
                        <td>Wilayah 1 Medan</td>
                        <td>0614567247</td>
                        <td>-</td>
                        <td><a href="https://goo.gl/maps/eCza1agneHApW9MC8">Tinjau Lokasi</a></td>
                    </tr>
                    <tr>
                        <td>Wilayah 2 Pekanbaru</td>
                        <td>076139195</td>
                        <td>-</td>
                        <td><a href="https://goo.gl/maps/6Xe92XSn4LB2TM4w7">Tinjau Lokasi</a></td>
                    </tr>
                    <tr>
                        <td>Wilayah 3 Palembang</td>
                        <td>0711361529</td>
                        <td>-</td>
                        <td><a href="https://goo.gl/maps/qUBENLJjBH7uiFDx9">Tinjau Lokasi</a></td>
                    </tr>
                    <tr>
                        <td>Wilayah 4 Balikpapan</td>
                        <td>0542762002</td>
                        <td>-</td>
                        <td><a href="https://goo.gl/maps/bRobExxQB1drvvP18">Tinjau Lokasi</a></td>
                    </tr>
                   
                </tbody>
            </table>
        </div>
    </div>
  </div>
</div>

{{-- end cabang --}}



@endsection