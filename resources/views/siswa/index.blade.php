@extends('layouts.app')

@section('content')

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Siswa</h1>

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
                    <h1 class="h3 mb-2 text-gray-800">Table Siswa</h1>


                    <!-- DataTales Example -->
                    <div class="card shadow ">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-dark table-striped" id="dataTable" >
                                    <thead>
                                        <tr>
                                            <th>Nama Siswa</th>
                                            <th>Kelas</th>
                                            <th>Nik</th>
                                            <th>Age</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nama Siswa</th>
                                            <th>Kelas</th>
                                            <th>Nik</th>
                                            <th>Age</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($students as $student )

                                        <tr>
                                            <td>{{ $student->name }}</td>
                                            @if ($student->kelas_id === 0)

                                            <td>kelas tidak ada</td>
                                            @else
                                            <td>{{ $student->kelas->kelas }}</td>
                                            @endif
                                            <td>{{ $student->nik }}</td>
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
