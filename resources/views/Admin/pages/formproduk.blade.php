@extends('Admin/layout/Admin')

@section('title')
   FORM PRODUK
@endsection

@section('content')
<div class="container mx-5 my-5 mt-5">
<h4>Form Produk</h4>
<form>

    <div class="drag-area mt-5 p-3">
        <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
        <header>Drag & Drop to Upload File</header>
        <span>or</span>
        <button>Browser File</button>
        <input type="file"hidden>
    </div>
    <div class="mb-3">
      <label for="exampleInputnamaproduk" class="form-label">Nama Produk</label>
      <input type="text" class="form-control" id="exampleInputnamaproduk">
    </div>
    <div class="mb-3">
        <label for="exampleInputnamaproduk" class="form-label">Detail Produk</label>
        <input type="text" class="form-control" id="exampleInputnamaproduk">
      </div>
     <div class="mb-3">
                                <label class="form-label">Tanggal Di Tambahkan</label>
                                <input type="date" class="form-control  @error('tgl_ditambah') is-invalid @enderror"
                                    name="tgl_ditambah">
                                @error('tgl_ditambah')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

       <div class="mb-3">
                                <label class="form-label">Tanggal Di Edit</label>
                                <input type="date" class="form-control  @error('tgl_edit') is-invalid @enderror"
                                    name="tgl_edit">
                                @error('tgl_edit')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

      <div class="mb-3 ">
        <label for="exampleInputcreateby" class="form-label">Create by</label>
        <input type="text" class="form-control" id="exampleInputcreateby" aria-describedby="createby">
      </div>
      <div class="mb-3">
        <label for="exampleInputeditby" class="form-label">Update by</label>
        <input type="text" class="form-control" id="exampleInputeditby">
      </div>


    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button class="btn btn-light" type="submit">
        Batal
    </button>

    <button class="btn btn-success" type="submit">
       Simpan
    </button>
  </form>
</div>
@endsection
