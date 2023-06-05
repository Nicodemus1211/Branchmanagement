@extends('Admin/layout/Admin')

@section('title')
   FORM EDIT PRODUK
@endsection

@section('content')
<div class="container mx-5 my-5 mt-5">
<h4>Form Produk</h4>
<form>
    <div class="mb-3 mt-4">
      <label for="exampleInputkodeproduk" class="form-label">Kode Produk</label>
      <input type="text" class="form-control" id="exampleInputkodeproduk" aria-describedby="kodeProduk">
    </div>
    <div class="mb-3">
      <label for="exampleInputnamaproduk" class="form-label">Nama Produk</label>
      <input type="text" class="form-control" id="exampleInputnamaproduk">
    </div>
    <div class="mb-3 ">
        <label for="exampleInputtglditambahkan" class="form-label">Tanggal Di Tambahkan</label>
        <input type="text" class="form-control" id="exampleInputtglditambahkan" aria-describedby="tglditambahkan">
      </div>
      <div class="mb-3">
        <label for="exampleInputtgledit" class="form-label">Tanggal Di Edit</label>
        <input type="text" class="form-control" id="exampleInputtgledit">
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
