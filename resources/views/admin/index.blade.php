
@extends('layouts.app')

@section('content')

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Admin</h1>

                </div>

                <!-- Content Row -->
                <div class="row">

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Total Siswa</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">700</div>
                                    </div>
                                    <div class="col-auto">
                                        <span class="material-symbols-outlined fs-1">
                                            groups
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body ">
                                <div class="row no-gutters align-items-center justify-content-between">
                                    <div class="col-md-7 ">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Total Admin</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">10</div>
                                    </div>
                                    <div class="col-2 "  >
                                        <i class="material-symbols-outlined  fs-1"  >
                                            group
                                            </i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body ">
                                <div class="row no-gutters align-items-center justify-content-between">
                                    <div class="col-md-7 ">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Jumlah Kelas</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">2</div>
                                    </div>
                                    <div class="col-2 "  >
                                        <i class="material-symbols-outlined fs-1"  >
                                            account_balance
                                            </i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Pending Requests Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            Jumlah Siswa Masuk</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                    </div>
                                    <div class="col-auto">
                                        <span class="material-symbols-outlined fs-1">
                                            person
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Row -->

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-flex justify-content-between mb-3">
                        <h1 class="h3 mb-2 text-gray-800">Table Admin</h1>
                        <a class="btn btn-primary" href="{{ route('admin.create') }}" role="button">Create New Admin</a>
                    </div>


                    <!-- DataTales Example -->
                    <div class="card shadow ">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table border-dark  border" id="dataTable" >
                                    <thead class="c-head-table">
                                        <tr>
                                            <th>Nama Admin</th>
                                            <th>Nip</th>
                                            <th>action</th>
                                            <th>Age</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    {{-- <tfoot>
                                        <tr>
                                            <th>Nama Admin</th>
                                            <th>Nip</th>
                                            <th>action</th>
                                            <th>Age</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot> --}}
                                    <tbody>
                                        @foreach ($admins as $admin )

                                        <tr>
                                            <td>{{ $admin->name }}</td>
                                            <td>System Architect</td>
                                            <td>
                                                <a href="{{ route('admin.show', $admin->id) }}" class="btn btn-success px-2 pt-2 pb-1 mb-1">
                                                    <span class="material-symbols-outlined">visibility</span>
                                                </a>
                                            <a href="{{ route('admin.edit', $admin->id) }}" class="btn btn-success px-2 pt-2 pb-1 mb-1">
                                                <span class="material-symbols-outlined">edit</span>
                                            </a>
                                            <form action="{{ route('admin.destroy', $admin->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger px-2 pt-2 pb-1 mb-1" href="{{ route('logout') }}" onclick="return confirm('Apakah anda akan menghapus data ini?')">
                                                    <span class="material-symbols-outlined">delete</span>
                                                </button>
                                            </form>
                                            </td>
                                            <td>61</td>
                                            <td>$320,800</td>
                                        </tr>
                                        @endforeach



                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>



<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

@endsection

