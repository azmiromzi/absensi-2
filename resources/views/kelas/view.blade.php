
@extends('layouts.app')

@section('content')

                {{-- <div class="alert alert-success bg-success alert-dismissible text-white text-bold m-3 mb-1 " role="alert">
                    <span class="text-sm">login sukses</span>
                    <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close"> --}}
                    {{-- <span aria-hidden="true">&times;</span> --}}
                    {{-- </button>
                </div> --}}

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Detail Kelas {{ $kelas->kelas }}</h1>
                    {{-- @dd($kela->id) --}}
                </div>



                <!-- Content Row -->

                <div class="container-fluid ">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Table Siswa </h1>


                    <!-- DataTales Example -->
                    <div class="card shadow ">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-dark table-striped" id="dataTable" >
                                    <thead>
                                        <tr>
                                            <th>Nama Siswa</th>
                                            <th>Nik</th>
                                            <th>Status</th>
                                            <th>Age</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nama Siswa</th>
                                            <th>Nik</th>
                                            <th>Status</th>
                                            <th>Age</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($users as $user )

                                        <tr>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->nik }}</td>
                                            <td>Edinburgh</td>
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

