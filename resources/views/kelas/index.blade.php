@extends('layouts.app')

@section('content')
 <!-- Page Wrapper -->
 <div id="wrapper">

    <!-- Sidebar -->
    @include('layouts.sidebar')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            @include('layouts.nav')
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid image-content-index img-fluid p-5 text-center shadow-1-strong rounded mb-5 mx-auto ">
                <h3>Kelas</h3>
                <div class="">
                    <p>coba Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni, reiciendis incidunt. Aut quaerat, eos ut quos laborum ullam hic quasi tempore sed, fugiat blanditiis, quam tempora dolore quibusdam totam cum voluptatibus nisi ea minus? Autem accusamus, ut magni cum nam repellat beatae pariatur, modi reprehenderit iure tenetur ullam adipisci praesentium reiciendis officiis vero eos nobis natus voluptas similique. Vero quas eligendi fuga eveniet eos. Iste ab, placeat inventore nam vel laborum animi nihil accusamus expedita necessitatibus. Delectus, tempora beatae. Perspiciatis, saepe quisquam. Vero ea consequatur minus pariatur excepturi vel, non suscipit quaerat amet tempore! Alias aspernatur molestiae deleniti temporibus incidunt.</p>
                </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        @include('layouts.footer')
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

@endsection
