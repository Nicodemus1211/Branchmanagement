@extends('Admin/layout/Admin')

@section('title')
  Daftar Kantor
@endsection

@section('content')
<div class="container mx-5 my-5 mt-5">
<h4>Daftar Kantor</h4>
 <!-- collection section  -->
 <div class="collection-section bg-white">
    <div class="container">
        <h2 class="text-green text-center">Which one do you want to see ?</h2>
        <h1 CLASS="Text-green text-center">KANTOR</h1>
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
            <a href="{{ route('tableadmin') }}" class="btn btn-sm btn-primary" style="float: right">
                Tambah Data
            </a>
        </div>
        <div class="collection-content">
            <div class="row d-flex">
                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="collection-card text-center mx-2">
                        <img src="img/kantorpeg1.jpg" class="card-img-top mt-3" alt="..."></a></p>
                        <div class="collection-image bg-green"></div>
                        <h5 class="card__category"> CP DEPOK </h5>
                        <p class="card__title">No Telp : 0217522216</p>
                        <p class="card__title">No HP : 081118526999</p>
                        <p class="text-green mt-2">Alamat <a href="{{route('cpdepok')}}" class="card__author" title="author">MORE ... </a></p>
                        <div class="btn btn-make-this-one bg-green text-white rounded-0">Make this one</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="collection-card text-center mx-2">
                        <img src="img/kantorpeg1.jpg" class="card-img-top mt-3" alt="..."></a></p>
                        <div class="collection-image bg-green"></div>
                        <h5 class="card__category"> CP BOJONGSARI</h5>
                        <p class="card__title">No Telp : 02518614588</p>
                        <p class="card__title">No HP : 081119307333</p>
                        <p class="text-green mt-2">Alamat <a href="{{route('cpbojongsari')}}" class="card__author" title="author">MORE ... </a></p>
                        <div class="btn btn-make-this-one bg-green text-white rounded-0">Make this one</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="collection-card text-center mx-2">
                        <img src="img/kantorpeg1.jpg" class="card-img-top mt-3" alt="..."></a></p>
                        <div class="collection-image bg-green"></div>
                        <h5 class="card__category"> CP KELAPA DUA </h5>
                        <p class="card__title">No Telp : 02129384524</p>
                        <p class="card__title">No HP : 081119301555</p>
                        <p class="text-green mt-2">Alamat <a href="{{route('cpkelapadua')}}" class="card__author" title="author">MORE ... </a></p>
                        <div class="btn btn-make-this-one bg-green text-white rounded-0">Make this one</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="collection-card text-center mx-2">
                        <img src="img/kantorpeg1.jpg" class="card-img-top mt-3" alt="..."></a></p>
                        <div class="collection-image bg-green"></div>
                        <h5 class="card__category"> UPC LEUWINANGGUNG </h5>
                        <p class="card__title">No Telp : 08528801817</p>
                        <p class="card__title">No HP : </p>
                        <p class="text-green mt-2">Alamat <a href="{{route('upcleuwinanggung')}}" class="card__author" title="author">MORE ... </a></p>
                        <div class="btn btn-make-this-one bg-green text-white rounded-0">Make this one</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="collection-card text-center mx-2">
                        <img src="img/kantorpeg1.jpg" class="card-img-top mt-3" alt="..."></a></p>
                        <div class="collection-image bg-green"></div>
                        <h5 class="card__category"> CP CISALAK </h5>
                        <p class="card__title">No Telp : 021873028</p>
                        <p class="card__title">No HP : 081119307555</p>
                        <p class="text-green mt-2">Alamat <a href="{{route('cpcisalak')}}" class="card__author" title="author">MORE ... </a></p>
                        <div class="btn btn-make-this-one bg-green text-white rounded-0">Make this one</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="collection-card text-center mx-2">
                        <img src="img/kantorpeg1.jpg" class="card-img-top mt-3" alt="..."></a></p>
                        <div class="collection-image bg-green"></div>
                        <h5 class="card__category"> CP PANCORAN MAS </h5>
                        <p class="card__title">No Telp : 02177204767</p>
                        <p class="card__title">No HP : 081110697333</p>
                        <p class="text-green mt-2">Alamat <a href="{{route('cppancoranmas')}}" class="card__author" title="author">MORE ... </a></p>
                        <div class="btn btn-make-this-one bg-green text-white rounded-0">Make this one</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="collection-card text-center mx-2">
                        <img src="img/kantorpeg1.jpg" class="card-img-top mt-3" alt="..."></a></p>
                        <div class="collection-image bg-green"></div>
                        <h5 class="card__category"> UPC KOTA KEMBANG </h5>
                        <p class="card__title">No Telp : 0212909738</p>
                        <p class="card__title">No HP : - </p>
                        <p class="text-green mt-2">Alamat <a href="{{route('upckotakembang')}}" class="card__author" title="author">MORE ... </a></p>
                        <div class="btn btn-make-this-one bg-green text-white rounded-0">Make this one</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="collection-card text-center mx-2">
                        <img src="img/kantorpeg1.jpg" class="card-img-top mt-3" alt="..."></a></p>
                        <div class="collection-image bg-green"></div>
                        <h5 class="card__category"> UPC CITAYAM </h5>
                        <p class="card__title">No Telp : 02187983115</p>
                        <p class="card__title">No HP : - </p>
                        <p class="text-green mt-2">Alamat <a href="{{route('upccitayam')}}" class="card__author" title="author">MORE ... </a></p>
                        <div class="btn btn-make-this-one bg-green text-white rounded-0">Make this one</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
