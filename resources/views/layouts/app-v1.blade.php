<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Carlos J Conto</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="{{ asset('v-1/assets/img/favico.svg') }}" rel="icon">
    <link href="{{ asset('v-1/assets/img/favico.svg') }}" rel="apple-touch-icon">

    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <link href="{{ asset('v-1/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('v-1/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('v-1/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('v-1/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('v-1/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('v-1/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('v-1/Waves/waves.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link href="{{ asset('v-1/assets/css/style.css') }}" rel="stylesheet">
    @yield('css')
</head>

<body>

    <!-- ======= Mobile nav toggle button ======= -->
    <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="d-flex flex-column">

            <div class="profile">
                <img src="{{ asset('assets/images/profile.jpg') }}" alt="" class="img-fluid rounded-circle"
                    width="50">
                <h1 class="text-light"><a href="/">Carlos Conto</a></h1>
                <div class="social-links mt-3 text-center">
                    <a href="#" class="twitter">
                        <i class="bx bxl-twitter"></i>
                    </a>
                    <a href="https://github.com/conto336" class="google-plus" target="_blank" rel="noreferrer">
                        <i class="bx bxl-github"></i>
                    </a>
                    <a href="https://linkedin.com/in/carlos-j-conto336" class="linkedin" target="_blank"
                        rel="noreferrer">
                        <i class="bx bxl-linkedin"></i>
                    </a>
                </div>
            </div>

            <nav class="nav-menu">
                <ul>
                    <li class="active">
                        <a href="{{ route('welcome') }}"><i class="bx bx-home"></i>
                            <span>
                                Inicio
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ request()->routeIs('welcome') ? '#about' : '/#about' }}">
                            <i class="bx bx-user"></i>
                            <span>Acerca</span></a>
                    </li>
                    <li>
                        <a href="{{ request()->routeIs('welcome') ? '#resume' : '/#resume' }}">
                            <i class="bx bx-file-blank"></i>
                            <span>Resumen</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ request()->routeIs('welcome') ? '#portfolio' : '/#portfolio' }}">
                            <i class="bx bx-book-content"></i>
                            <span>Portafolio</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ request()->routeIs('welcome') ? '#contact' : '/#contact' }}">
                            <i class="bx bx-envelope"></i>
                            <span>Contacto</span>
                        </a>
                    </li>

                </ul>
            </nav><!-- .nav-menu -->
            <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    @yield('hero')
    <!-- End Hero -->

    <main id="main">
        @yield('content')
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Carlos Conto</span></strong>
            </div>
        </div>
    </footer><!-- End  Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('v-1/assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('v-1/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('v-1/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('v-1/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('v-1/assets/vendor/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('v-1/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('v-1/assets/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('v-1/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('v-1/assets/vendor/typed.js/typed.min.js') }}"></script>
    <script src="{{ asset('v-1/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('animatejs/anime.min.js') }}"></script>
    <script src="{{ asset('v-1/Waves/waves.min.js') }}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- Template Main JS File -->
    <script src="{{ asset('v-1/assets/js/main.js') }}"></script>

    <script type="text/javascript">
        $(function() {
            Waves.attach('.btn', ['waves-float']);
            Waves.init();

            $("a").on('click', function() {
                if ($(this).find('i')) {
                    var home = $(this).find('i');
                    if (home.hasClass('bx-home')) {
                        location.href = "{{ route('welcome') }}";
                    }
                }
            });
        });
    </script>
    @yield('js')
</body>

</html>
