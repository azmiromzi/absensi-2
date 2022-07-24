
@extends('layouts.app')

@section('content')

{{-- <span aria-hidden="true">&times;</span> --}}
                {{-- <div class="alert alert-success bg-success alert-dismissible text-white text-bold m-3 mb-1 " role="alert">
                    <span class="text-sm">login sukses</span>
                    <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
                    </button>
                </div> --}}

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Create Admin</h1>

                </div>



                <!-- Content Row -->

                <div class="container-fluid mt-5">
                    <div class="row mx-auto justify-content-center">
                        <div class="col-md-6 justify-content-center">
                            <div class="card shadow">
                                <div class="card-header">
                                    <h2>Form Admin</h2>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('admin.store') }}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                        <div class="my-2">
                                            <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" required placeholder="Name">
                                        </div>

                                        <div class="my-2">
                                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required placeholder="Email">
                                        </div>

                                        <div class="my-2">
                                            <input type="password" class="form-control" id="password" name="password" aria-describedby="emailHelp" required placeholder="Password">
                                        </div>

                                        <div class="my-2">
                                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" aria-describedby="emailHelp" required placeholder="Password_confirmation">
                                        </div>
                                        <div class="dropdown">
                                            <select  class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" name="kelas_id"
                                            style="background-color:#f49507 ; color: #fff; ">
                                            @foreach ($kelas as $kela )

                                                    {{-- <option value="{{ $role->id }} {{ old('role_id' == $role->id) ? 'selected' : '' }}" style="">{{ $role->name }}</option> --}}
                                                    <option value="{{ $kela->id }}">{{ $kela->kelas }}</option>
                                                    @endforeach
                                            </select>
                                        </div>
                                        {{-- <input class="form-control" type="checkbox" value="{{ $kela->kelas }}" name="kelas_id" @error('kelas_id') is-invalid @enderror required > --}}
                                        <input class="form-control" type="hidden" value="1" name="is_admin" @error('is_admin') is-invalid @enderror required >
                                        <input class="form-control" type="hidden" value="0" name="absen" @error('absen') is-invalid @enderror required >
                                        <input class="form-control" type="hidden" value="0" name="nik" @error('absen') is-invalid @enderror required >
                                        </div>
                                        <button type="submit" class="btn btn-primary">Create Admin</button>
                                      </form>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>



<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

@endsection

