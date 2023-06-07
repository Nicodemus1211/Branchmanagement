@extends('Admin/layout/Admin')

@section('title')
    Pegadaian - Daftar Kantor
@endsection

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tabel Kantor
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
                <a href="{{ route('formkantor') }}" class="btn btn-sm btn-primary" style="float: right">
                    Tambah Data
                </a>
            </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
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
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td>2011/07/25</td>
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
                            <td>Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>San Francisco</td>
                            <td>66</td>
                            <td>2009/01/12</td>
                            <td>
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
                            </td>
                        </tr>
                        <tr>
                            <td>Cedric Kelly</td>
                            <td>Senior Javascript Developer</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                            <td>2012/03/29</td>
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
                            <td>Airi Satou</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>33</td>
                            <td>2008/11/28</td>
                            <td>
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
                            </td>
                        </tr>
                        <tr>
                            <td>Brielle Williamson</td>
                            <td>Integration Specialist</td>
                            <td>New York</td>
                            <td>61</td>
                            <td>2012/12/02</td>
                            <td>
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
                            </td>
                        </tr>
                        <tr>
                            <td>Herrod Chandler</td>
                            <td>Sales Assistant</td>
                            <td>San Francisco</td>
                            <td>59</td>
                            <td>2012/08/06</td>
                            <td>
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
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
