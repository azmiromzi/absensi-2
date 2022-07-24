
@extends('layouts.app')

@section('content')
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Edit Admin</h1>

                </div>

                <div class="row mt-5">
                    <div class="col-md-6 mx-auto">
                        <div class="card">
                            <div class="card-header"> <h2 class="text-center">Edit Your Profile</h2></div>
                            <div class="card-body">
                                <form action="{{ route('admin.update', $admin->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="name" value="{{ $admin->name }}" id="name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="email" type="email" value="{{ $admin->email }}"  id="email">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="password" name="password" value="{{ $admin->password }}" name="password"  id="password">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="password_confirmation" class="col-sm-2 col-form-label">Password confirmation</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="password" name="password_confirmation" value="{{ $admin->password }}"  name="password_confirmation" id="password_confirmation" autocomplete="new-password" required>
                                    </div>
                                </div>
                                <button class="btn btn-primary w-100" type="submit">Edit Your Profile</button>
                            </form>
                            </div>
                        </div>

                    </div>
                </div>



<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

@endsection

