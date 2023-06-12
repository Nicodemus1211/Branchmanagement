@extends('Admin/layout/Admin')

@section('title')
    Pegadaian - Product
@endsection

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tabel product
    </h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card">

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
                <a href="{{ route('formproduk') }}" class="btn btn-sm btn-primary" style="float: right">
                    Tambah Data
                </a>
            </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name Product</th>
                            <th>Detail Product</th>
                            <th>Tanggal Di tambahkan</th>
                            <th>Update by</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td></td>
                            <td>depok</td>
                            <td></td>
                            <td></td>
                            <td></td>

                            <td>
                                {{-- <form action="{{ route() }}" method="post">
                                    @csrf
                                    @method('delete') --}}
                                    <a
                                        class="btn btn-sm btn-outline-success">
                                        Edit
                                    </a> |
                                    <a
                                        class="btn btn-sm btn-outline-warning">
                                        Show
                                    </a> |
                                    <button type="submit" class="btn btn-sm btn-outline-danger"
                                        onclick="return confirm('Apakah Anda Yakin?')">Delete
                                    </button>
                                {{-- </form> --}}
                            </td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>jakarta</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>  <a
                                class="btn btn-sm btn-outline-success">
                                Edit
                            </a> |
                            <a
                                class="btn btn-sm btn-outline-warning">
                                Show
                            </a> |
                            <button type="submit" class="btn btn-sm btn-outline-danger"
                                onclick="return confirm('Apakah Anda Yakin?')">Delete
                            </button>
                            </td>
                        </tr>

                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>  <a
                                class="btn btn-sm btn-outline-success">
                                Edit
                            </a> |
                            <a
                                class="btn btn-sm btn-outline-warning">
                                Show
                            </a> |
                            <button type="submit" class="btn btn-sm btn-outline-danger"
                                onclick="return confirm('Apakah Anda Yakin?')">Delete
                            </button>
                            </td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>bojongsari</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>  <a
                                class="btn btn-sm btn-outline-success">
                                Edit
                            </a> |
                            <a
                                class="btn btn-sm btn-outline-warning">
                                Show
                            </a> |
                            <button type="submit" class="btn btn-sm btn-outline-danger"
                                onclick="return confirm('Apakah Anda Yakin?')">Delete
                            </button>
                            </td>
                        </tr>

                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>  <a
                                class="btn btn-sm btn-outline-success">
                                Edit
                            </a> |
                            <a
                                class="btn btn-sm btn-outline-warning">
                                Show
                            </a> |
                            <button type="submit" class="btn btn-sm btn-outline-danger"
                                onclick="return confirm('Apakah Anda Yakin?')">Delete
                            </button>
                            </td>
                        </tr>

                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>

                            <td>  <a
                                class="btn btn-sm btn-outline-success">
                                Edit
                            </a> |
                            <a
                                class="btn btn-sm btn-outline-warning">
                                Show
                            </a> |
                            <button type="submit" class="btn btn-sm btn-outline-danger"
                                onclick="return confirm('Apakah Anda Yakin?')">Delete
                            </button>
                            </td>
                        </tr>

                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>  <a
                                class="btn btn-sm btn-outline-success">
                                Edit
                            </a> |
                            <a
                                class="btn btn-sm btn-outline-warning">
                                Show
                            </a> |
                            <button type="submit" class="btn btn-sm btn-outline-danger"
                                onclick="return confirm('Apakah Anda Yakin?')">Delete
                            </button>
                            </td>
                        </tr>

                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>  <a
                                class="btn btn-sm btn-outline-success">
                                Edit
                            </a> |
                            <a
                                class="btn btn-sm btn-outline-warning">
                                Show
                            </a> |
                            <button type="submit" class="btn btn-sm btn-outline-danger"
                                onclick="return confirm('Apakah Anda Yakin?')">Delete
                            </button>
                            </td>
                        </tr>

                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>  <a
                                class="btn btn-sm btn-outline-success">
                                Edit
                            </a> |
                            <a
                                class="btn btn-sm btn-outline-warning">
                                Show
                            </a> |
                            <button type="submit" class="btn btn-sm btn-outline-danger"
                                onclick="return confirm('Apakah Anda Yakin?')">Delete
                            </button>
                            </td>
                        </tr>

                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>  <a
                                class="btn btn-sm btn-outline-success">
                                Edit
                            </a> |
                            <a
                                class="btn btn-sm btn-outline-warning">
                                Show
                            </a> |
                            <button type="submit" class="btn btn-sm btn-outline-danger"
                                onclick="return confirm('Apakah Anda Yakin?')">Delete
                            </button>
                            </td>
                        </tr>

                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>  <a
                                class="btn btn-sm btn-outline-success">
                                Edit
                            </a> |
                            <a
                                class="btn btn-sm btn-outline-warning">
                                Show
                            </a> |
                            <button type="submit" class="btn btn-sm btn-outline-danger"
                                onclick="return confirm('Apakah Anda Yakin?')">Delete
                            </button>
                            </td>
                        </tr>








                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
