
@extends('layouts.app')

@section('content')

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Edit Kelas</h1>

                </div>



                <!-- Content Row -->

                <div class="container-fluid mt-5">
                    <div class="row mx-auto justify-content-center">
                        <div class="col-md-6 justify-content-center">

                            <form action="{{ route('kelas.update', $kelas->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                  <label for="kelasName" class="form-label">Update Class</label>
                                  <input type="text" class="form-control" id="kelasName" name="kelas" value="{{ $kelas->kelas }}" aria-describedby="emailHelp">
                                  <div id="emailHelp" class="form-text">Update Your New Class</div>
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                              </form>
                        </div>
                    </div>


                </div>



<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

@endsection

