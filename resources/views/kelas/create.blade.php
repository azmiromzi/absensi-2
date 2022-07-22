
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
                    <h1 class="h3 mb-0 text-gray-800">Create Kelas</h1>

                </div>



                <!-- Content Row -->

                <div class="container-fluid mt-5">
                    <div class="row mx-auto justify-content-center">
                        <div class="col-md-6 justify-content-center">

                            <form action="{{ route('kelas.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                  <label for="kelasName" class="form-label">Create Class</label>
                                  <input type="text" class="form-control" id="kelasName" name="kelas" aria-describedby="emailHelp">
                                  <div id="emailHelp" class="form-text">Create Your New Class</div>
                                </div>
                                <button type="submit" class="btn btn-primary">Create</button>
                              </form>
                        </div>
                    </div>


                </div>



<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

@endsection

