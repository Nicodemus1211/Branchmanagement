
@extends('layouts.main')

@section('title')
Kantor CP DEPOK
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
                    <h1>KANTOR CABANG PEGADAIAN</h1>
                    <h5>DEPOK</h5>
                    <p>JALAN SILIWANGI NO.20 PANCORAN MAS.
                    Depok, Pancoran mas</p>
                    <p>Depok, Jawa Barat</p>
                    <p>Telp. 02129384524 HP. 081119301555</p>

                </div>
            </div>


            <h1>PINJAMAN GADAI</h1>
            <div class="container m-5">
                <div class="row gap-3">
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
                        <p><a href="https://www.pegadaian.co.id/produk/gadai-tabungan-emas">
                            <img src="img/tabungan-emas.png" class="card-img-top mt-3" alt="..."></a></p>

                        <div class="card-body text-center">
                            <h5>Tabungan Emas</h5>
                          <p class="card-text">Gadai Tabungan Emas adalah gadai dengan agunan berupa emas titipan milik nasabah, artinya tabungan emas dari Pegadaian yang ....</p>
                        </div>
                    </div>


                    <div class="card" style="width: 15rem;">
                        <p><a href="https://www.pegadaian.co.id/produk/gadai-angsuran-emas">
                            <img src="img/lingkaran-titipan-emas-1.png" class="card-img-top mt-3" alt="..."></a></p>

                        <div class="card-body text-center">
                            <h5>Gadai Angsuran Emas</h5>
                          <p class="card-text">Gadai Angsuran Emas adalah kredit sistem gadai kepada semua golongan nasabah untuk kebutuhan produktif maupun konsumtif menggunakan jaminan emas, baik emas batangan maupun ....</p>
                        </div>
                    </div>

                    <div class="card" style="width: 15rem;">
                        <p><a href="https://www.pegadaian.co.id/produk/gadai-efek">
                            <img src="img/gadai-efek.png" class="card-img-top mt-3" alt="..."></a></p>

                        <div class="card-body text-center">
                            <h5>Gadai Efek</h5>
                          <p class="card-text">Gadai efek merupakan layanan pemberian pinjaman dengan jangka waktu hingga 90 hari dengan jaminan berbentuk saham dan atau ....</p>
                        </div>
                    </div>

                    <div class="card" style="width: 15rem;">
                        <p><a href="https://www.pegadaian.co.id/produk/gadai-emas-syariah">
                            <img src="img/gadai-emas-syariah.png" class="card-img-top mt-3" alt="..."></a></p>

                        <div class="card-body text-center">
                            <h5>Gadai Emas Syariah</h5>
                          <p class="card-text">Gadai Emas Syariah adalah pemberian pinjaman secara syariah dengan sistem gadai yang diberikan ke seluruh golongan nasabah untuk kebutuhan konsumtif maupun produktif dengan ....</p>
                        </div>
                    </div>

                    <div class="card" style="width: 15rem;">
                        <p><a href="https://www.pegadaian.co.id/produk/gadai-non-emas-syariah">
                            <img src="img/gadai-non-emas-syariah.png" class="card-img-top mt-3" alt="..."></a></p>

                        <div class="card-body text-center">
                            <h5>Gadai Non Emas Syariah</h5>
                          <p class="card-text">Gadai Non Emas Syariah adalah produk Pegadaian untuk memberikan pinjaman dana tunai dengan jaminan berupa gawai, elektronik atau barang rumah tangga lainnya dengan ....</p>
                        </div>
                    </div>

                    <div class="card" style="width: 15rem;">
                        <p><a href="https://www.pegadaian.co.id/produk/gadai-kendaraan-syariah">
                            <img src="img/gadai-kendaraan-syariah.png" class="card-img-top mt-3" alt="..."></a></p>

                        <div class="card-body text-center">
                            <h5>Gadai Kendaraan Syariah</h5>
                          <p class="card-text">Gadai Kendaraan Syariah adalah pemberian pinjaman secara syariah dengan sistem gadai yang diberikan ke seluruh golongan nasabah untuk kebutuhan konsumtif maupun  ....</p>
                        </div>
                    </div>

{{-- END PINJAMAN GADAI --}}

<h1>Pinjaman Non Gadai</h1>
                    <div class="card" style="width: 15rem;">
                        <p><a href="https://www.pegadaian.co.id/produk/cicil-emas">
                            <img src="img/cicil-emas.png" class="card-img-top mt-3" alt="..."></a></p>
                        <div class="card-body text-center">
                            <h5>Cicil Emas</h5>
                          <p class="card-text"> Pegadaian Cicil Emas adalah layanan pembiayaan emas batangan kepada masyarakat secara cicilan. Cicil Emas dapat menjadi alternatif pilihan investasi yang aman untuk mewujudkan ...</p>
                        </div>
                    </div>


                    <div class="card" style="width: 15rem;">
                        <p><a href="https://www.pegadaian.co.id/produk/pinjaman-usaha">
                            <img src="img/pinjaman-usaha.png" class="card-img-top mt-3" alt="..."></a></p>

                        <div class="card-body text-center">
                            <h5>Pinjaman Usaha</h5>
                          <p class="card-text">Pegadaian Pinjaman Usaha adalah adalah pemberian kredit dengan angsuran bulanan yang diberikan kepada pelaku Usaha Kecil dan Menengah UKM untuk pengembangan usaha dengan...</p>
                        </div>
                    </div>


                    <div class="card " style="width: 15rem;">
                        <p><a href="https://www.pegadaian.co.id/produk/pinjaman-usaha-syariah" >
                            <img src="img/pinjaman-usaha.png" class="card-img-top mt-3" alt="..."></a></p>
                        <div class="card-body text-center mt-2 w-3">
                            <h5>Pinjaman Usaha Syariah</h5>
                        <p class="card-text text-center">
                            Pinjaman Usaha Syariah adalah pinjaman dengan angsuran bulanan yang diberikan kepada Usaha Kecil dan
                            Menengah UKM untuk pengembangan usaha dengan ....
                        </div>
                    </div>


                    <div class="card" style="width: 15rem;">
                        <p><a href="https://www.pegadaian.co.id/produk/pinjaman-serbaguna" >
                        <img src="img/pinjaman-serbaguna.png" class="card-img-top mt-3" alt="..."></a></p>
                        <div class="card-body text-center">
                            <h5>Pinjaman Serbaguna</h5>
                          <p class="card-text">Pinjaman Serba Guna adalah kredit yang diberikan kepada karyawan dan non karyawan untuk keperluan konsumtif dengan agunan BPKB kendaraan bermotor ...</p>
                        </div>
                    </div>

                    <div class="card" style="width: 15rem;">
                        <p><a href="https://www.pegadaian.co.id/produk/cicil-kendaraan" >
                        <img src="img/image-cicil-kendaraan-produk.png" class="card-img-top mt-3" alt="..."></a></p>
                        <div class="card-body text-center">
                            <h5>Cicil Kendaraan</h5>
                          <p class="card-text">Pegadaian Cicil Kendaraan adalah pemberian pinjaman dengan prinsip syariah kepada pengusaha mikro/kecil, karyawan serta profesional guna ...</p>
                        </div>
                    </div>

                    <div class="card" style="width: 15rem;">
                        <p><a href="https://www.pegadaian.co.id/produk/cicil-emas" >
                        <img src="img/Produk-Cicil-Emas.png" class="card-img-top mt-3" alt="..."></a></p>
                        <div class="card-body text-center">
                            <h5>Cicil Emas</h5>
                          <p class="card-text">	Pegadaian Cicil Emas adalah layanan pembiayaan emas batangan kepada masyarakat secara cicilan. Cicil Emas dapat menjadi alternatif pilihan ...</p>
                        </div>
                    </div>

                    <div class="card" style="width: 15rem;">
                        <p><a href="https://www.pegadaian.co.id/produk/cicil-emas-arisan" >
                        <img src="img/Produk-Cicil-Emas.png" class="card-img-top mt-3" alt="..."></a></p>
                        <div class="card-body text-center">
                            <h5>Cicil Emas Arisan</h5>
                          <p class="card-text">	Cicil Emas Arisan adalah pilihan layanan investasi emas batangan secara angsuran untuk kelompok arisan dengan harga yang pasti dan ...</p>
                        </div>
                    </div>

                    <div class="card" style="width: 15rem;">
                        <p><a href="https://www.pegadaian.co.id/produk/cicil-emasku" >
                        <img src="img/Cicil-Emas.png" class="card-img-top mt-3" alt="..."></a></p>
                        <div class="card-body text-center">
                            <h5>Cicil Emasku</h5>
                          <p class="card-text">	Pegadaian Cicil EmasKu adalah produk pembiayaan emas batangan yang di tujukan untuk seluruh masyarakat yang ingin berinvestasi emas, ...</p>
                        </div>
                    </div>

                    <div class="card" style="width: 15rem;">
                        <p><a href="https://www.pegadaian.co.id/produk/gadai-sertifikat" >
                        <img src="img/solusigadai1.png" class="card-img-top mt-3" alt="..."></a></p>
                        <div class="card-body text-center">
                            <h5>Gadai Sertifikat</h5>
                          <p class="card-text">	Pegadaian Gadai Sertifikat adalah pembiayaan berbasis syariah yang diberikan kepada masyarakat berpenghasilan tetap/rutin, ...</p>
                        </div>
                    </div>

                    <div class="card" style="width: 15rem;">
                        <p><a href="https://www.pegadaian.co.id/produk/pegadaian-kur-syariah" >
                        <img src="img/tabemas.png" class="card-img-top mt-3" alt="..."></a></p>
                        <div class="card-body text-center">
                            <h5>Pegadaian KUR Syariah</h5>
                          <p class="card-text">	Pegadaian KUR Syariah adalah fasilitas pinjaman kepada Rahin Nasabah yang memiliki usaha produktif untuk, ...</p>
                        </div>
                    </div>


<h1>LAYANAN JASA</h1>

                    <div class="card" style="width: 15rem;">
                        <p><a href="https://www.pegadaian.co.id/produk/tabungan-emas" >
                        <img src="img/tabungan-emas.png" class="card-img-top mt-3" alt="..."></a></p>
                        <div class="card-body text-center">
                            <h5>Tabungan Emas</h5>
                          <p class="card-text">Tabungan Emas Pegadaian adalah layanan penitipan saldo emas yang memudahkan masyarakat untuk berinvestasi emas. ...</p>
                        </div>
                    </div>


                    <div class="card" style="width: 15rem;">
                        <p><a href="https://www.pegadaian.co.id/produk/jasa-kirim-dan-terima-uang" >
                        <img src="img/pengiriman-emas.png" class="card-img-top mt-3" alt="..."></a></p>
                        <div class="card-body text-center">
                            <h5>Jasa Pengiriman Uang</h5>
                          <p class="card-text">Pegadaian Jasa Pengiriman Uang, layanan pengiriman dan penerimaan uang dari dalam dan luar negeri yang bekerjasama dengan beberapa Perusahaan ...</p>
                        </div>
                    </div>

                    <div class="card" style="width: 15rem;">
                        <p><a href="https://www.pegadaian.co.id/produk/jasa-pembayaran-online" >
                        <img src="img/pengiriman-emas.png" class="card-img-top mt-3" alt="..."></a></p>
                        <div class="card-body text-center">
                            <h5>Jasa Pembayaran Online</h5>
                          <p class="card-text">Pegadaian Jasa Pembayaran Online merupakan layanan pembayaran berbagai tagihan bulanan, pembelian pulsa, pembelian tiket, pembayaran finance, pembayaran premi BPJS, dan lain-lain. ...</p>
                        </div>
                    </div>

                    <div class="card" style="width: 15rem;">
                        <p><a href="https://www.pegadaian.co.id/produk/jasa-sertifikasi" >
                        <img src="img/pengiriman-emas.png" class="card-img-top mt-3" alt="..."></a></p>
                        <div class="card-body text-center">
                            <h5>Jasa Sertifikasi</h5>
                          <p class="card-text">Jasa Sertifikasi adalah jasa pengujian terhadap sebuah batu mulia, emas dan perhiasan lainnya yang dilakukan oleh gemologis di laboratorium gemologi untuk mengetahui ...</p>
                        </div>
                    </div>

                    <div class="card" style="width: 15rem;">
                        <p><a href="https://www.pegadaian.co.id/produk/jasa-taksiran" >
                        <img src="img/pengiriman-emas.png" class="card-img-top mt-3" alt="..."></a></p>
                        <div class="card-body text-center">
                            <h5>Jasa Taksiran</h5>
                          <p class="card-text">Pegadaian Jasa Taksiran dalah layanan kepada masyarakat yang ingin mengetahui karatase dan kualitas harta ...</p>
                        </div>
                    </div>

                    <div class="card" style="width: 15rem;">
                        <p><a href="https://www.pegadaian.co.id/produk/jasa-titipan" >
                        <img src="img/pengiriman-emas.png" class="card-img-top mt-3" alt="..."></a></p>
                        <div class="card-body text-center">
                            <h5>Jasa Titipan</h5>
                          <p class="card-text">Pegadaian Jasa Titipan adalah layanan kepada masyarakat yang ingin menitipkan barang berharga seperti ...</p>
                        </div>
                    </div>

                    <div class="card" style="width: 15rem;">
                        <p><a href="https://www.pegadaian.co.id/produk/safe-deposit-box" >
                        <img src="img/pengiriman-emas.png" class="card-img-top mt-3" alt="..."></a></p>
                        <div class="card-body text-center">
                            <h5>Safe Deposito Box </h5>
                          <p class="card-text">Safe Deposit Box merupakan jasa penyewaan kotak penyimpanan barang atau ...</p>
                        </div>
                    </div>


                {{-- </div>
            </div> --}}



        </div>
    </div>
</div>

{{-- endkantorpust --}}

@endsection
