@extends('Admin/layout/Admin')

@section('title')
   FORM KANTOR
@endsection

@section('content')
<div class="container mx-5 my-5">
    <h4>Form Add KANTOR</h4>
    <form class="row g-3">
        <div class="col-md-4 mt-5">
          <label for="validationDefault01" class="form-label">Nama Kantor</label>
          <input type="text" class="form-control" id="validationDefault01" value="" required>
        </div>
        <div class="col-md-4 mt-5">
          <label for="validationDefault02" class="form-label">Kode</label>
          <input type="text" class="form-control" id="validationDefault02" value="" required>
        </div>
        <div class="col-md-4 mt-5">
          <label for="validationDefault021" class="form-label">Level</label>
          <div class="input-group">

            <input type="text" class="form-control" id="validationDefault02" value="" required>
          </div>
        </div>

        <div class="col-md-3 mt-3">

            <label class="form-label">Tanggal Operasi</label>
            <input type="date" class="form-control  @error('tgl_lahir') is-invalid @enderror"
                name="tgl_lahir">
            @error('tgl_lahir')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>
        <div class="col-md-3 mt-3">

            <label class="form-label">Tanggal Di Tambahkan</label>
            <input type="date" class="form-control  @error('tgl_lahir') is-invalid @enderror"
                name="tgl_lahir">
            @error('tgl_lahir')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>
        <div class="col-md-3 mt-3">

            <label class="form-label">Tanggal Di Update</label>
            <input type="date" class="form-control  @error('tgl_lahir') is-invalid @enderror"
                name="tgl_lahir">
            @error('tgl_lahir')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>

        <div class="col-md-4 mt-5">
            <label for="validationDefault01" class="form-label">Kantor Induk</label>
            <input type="text" class="form-control" id="validationDefault01" value="" required>
          </div>
          <div class="col-md-4 mt-5">
            <label for="validationDefault02" class="form-label">Status</label>
            <input type="text" class="form-control" id="validationDefault02" value="" required>
          </div>
          <div class="col-md-4 mt-5">
            <label for="validationDefault02" class="form-label">Produk Diterima</label>
            <input type="text" class="form-control" id="validationDefault02" value="" required>
          </div>

        <div class="col-md-4 mt-5">
            <label for="validationDefault01" class="form-label">Nama NPWP</label>
            <input type="text" class="form-control" id="validationDefault01" value="" required>
          </div>
          <div class="col-md-4 mt-5">
            <label for="validationDefault02" class="form-label">No NPWP</label>
            <input type="text" class="form-control" id="validationDefault02" value="" required>
          </div>
          <div class="col-md-4 mt-5">
            <label for="validationDefault02" class="form-label">KODE KANTOR PAJAK</label>
            <input type="text" class="form-control" id="validationDefault02" value="" required>
          </div>



            <div class="col-md-6 mt-3">
                <label for="validationDefault021 " class="form-label">No. Telp</label>
              <input type="text" class="form-control" placeholder="" aria-label="no telp">
            </div>
            <div class="col-md-6 mt-3">
                <label for="validationDefault021 " class="form-label">No. Handphone</label>
              <input type="text" class="form-control" placeholder="" aria-label="no hp">
            </div>



            <div class="col-md-4 mt-3">
                <label for="validationDefault021 " class="form-label">Nama Jalan Kantor</label>
              <input type="text" class="form-control" placeholder="" aria-label="Nama Jalan Kantor">
            </div>
            <div class="col-md-4 mt-3">
                <label for="validationDefault021 " class="form-label">RT</label>
              <input type="text" class="form-control" placeholder="" aria-label="RT">
            </div>
            <div class="col-md-4 mt-3">
                <label for="validationDefault021 " class="form-label">RW</label>
              <input type="text" class="form-control" placeholder="" aria-label="RW">
            </div>


            <div class="col-md-4 mt-3">
                <label for="validationDefault021 " class="form-label">Nama Kelurahan</label>
              <input type="text" class="form-control" placeholder="" aria-label="nama kelurahan">
            </div>
            <div class="col-md-4 mt-3">
                <label for="validationDefault021 " class="form-label">Kode Pos</label>
              <input type="text" class="form-control" placeholder="" aria-label="kode pos">
            </div>
            <div class="col-md-4 mt-3">
                <label for="validationDefault021 " class="form-label">Kode Kelurahan</label>
              <input type="text" class="form-control" placeholder="" aria-label="kode kelurahan">
            </div>


            <div class="col-md-6 mt-3">
                <label for="validationDefault021 " class="form-label">Nama Kecamatan</label>
              <input type="text" class="form-control" placeholder="" aria-label="Nama Kecamatan">
            </div>
            <div class="col-md-6 mt-3">
                <label for="validationDefault021 " class="form-label">Kode Kecamatan</label>
              <input type="text" class="form-control" placeholder="" aria-label="kode kecamatan">
            </div>

            <div class="col-md-6 mt-3">
                <label for="validationDefault021 " class="form-label">Nama kabupaten</label>
              <input type="text" class="form-control" placeholder="" aria-label="Nama kabupaten">
            </div>
            <div class="col-md-6 mt-3">
                <label for="validationDefault021 " class="form-label">kode Kabupaten</label>
              <input type="text" class="form-control" placeholder="" aria-label="kode kabupaten">
            </div>


            <div class="col-md-6 mt-3">
                <label for="validationDefault021 " class="form-label">Nama Provinsi</label>
              <input type="text" class="form-control" placeholder="" aria-label="nama provinci">
            </div>
            <div class="col-md-6 mt-3">
                <label for="validationDefault021 " class="form-label">Kode Provinsi</label>
              <input type="text" class="form-control" placeholder="" aria-label="kode provinci">
            </div>


            <div class="col-md-6 mt-3">
                <label for="validationDefault021 " class="form-label">Create by </label>
              <input type="text" class="form-control" placeholder="" aria-label="create by">
            </div>
            <div class="col-md-6 mt-3">
                <label for="validationDefault021 " class="form-label">Update by </label>
              <input type="text" class="form-control" placeholder="" aria-label="update by">
            </div>


            {{-- <div class="col-md-4 mt-3">
                <label for="validationDefault021 " class="form-label">Nama Kecamatan</label>
              <input type="text" class="form-control" placeholder="" aria-label="Nama Kecamatan">
            </div>
            <div class="col-md-4 mt-3">
                <label for="validationDefault021 " class="form-label">kode Kabupaten</label>
              <input type="text" class="form-control" placeholder="" aria-label="kode kabupaten">
            </div>
            <div class="col-md-4 mt-3">
                <label for="validationDefault021 " class="form-label">Kode Kecamatan</label>
              <input type="text" class="form-control" placeholder="" aria-label="kode kecamatan">
            </div> --}}








            <div class="col-12 mt-5">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                <label class="form-check-label" for="invalidCheck2">
                Agree to terms and conditions
                </label>
            </div>
            </div>

            <div class="col-12 mt-3">
                <button class="btn btn-light" type="submit">Batal</button>

            <button class="btn btn-success" type="submit">
               Simpan
            </button>


            </div>

      </form>
</div>

@endsection
