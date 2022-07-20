<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Grayscale - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('frontend2/css/styles.css') }}" rel="stylesheet" />
    </head>
    <body id="page-top">
      
        <header class="masthead">
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex">
                    <div class="text-center">
                        <h1 class="mx-auto my-0 text-uppercase">Absensi SMKN 46</h1>

                        <p class=" d-block mx-auto " style="width: 90%; color: black; font-weight: bold; font-size: 24px">Welcome to the application made by students of SMKN 46 Jakarta, This application was made with the help of templates and frameworks, This application serves to record student attendance at SMKN 46 Jakarta.</p>
                        <div class="d-grid gap-2 col-4 mx-auto">
                            <a href="{{ route('login') }}" class="btn btn-dark" type="button">Login</a>
                            <a href="{{ route('register') }}" class="btn btn-dark" type="button">Register</a>
                          </div>
                        {{-- <a class="btn btn-primary" href="#about">Get Started</a>
                        <a class="btn btn-primary " href="#about">Get Started</a> --}}
                    </div>
                </div>
            </div>
        </header>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
