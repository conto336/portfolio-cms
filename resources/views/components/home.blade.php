<!doctype html>
<html lang="es">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{ config('app.name') }} - @yield('title')</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500&display=swap">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/css/custom/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/css/custom/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/css/custom/style.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/css/custom/media-queries.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/css/loader.css') }}">
    @yield('css')
    <!-- Favicon and touch icons -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="icon" sizes="189x256" href="{{ asset('favicon.ico') }}">
    <x-loader />
</head>

<body>

    <x-navegation-menu />
    <!-- Wrapper -->
    <div class="wrapper">
        {{-- <!-- Sidebar -->
			<div class="sidebar">
				
				<!-- close sidebar menu -->
				<div class="dismiss">
					<i class="fas fa-arrow-left"></i>
				</div>
				
				<div class="logo">
					<h3><a href="index.html">Bootstrap 4 Template with Sidebar Menu</a></h3>
				</div>
				
				<ul class="list-unstyled menu-elements">
					<li class="active">
						<a class="scroll-link" href="#top-content"><i class="fas fa-home"></i> Home</a>
					</li>
					<li>
						<a class="scroll-link" href="#section-1"><i class="fas fa-cog"></i> What we do</a>
					</li>
					<li>
						<a class="scroll-link" href="#section-2"><i class="fas fa-user"></i> About us</a>
					</li>
					<li>
						<a class="scroll-link" href="#section-5"><i class="fas fa-pencil-alt"></i> Portfolio</a>
					</li>
					<li>
						<a class="scroll-link" href="#section-6"><i class="fas fa-envelope"></i> Contact us</a>
					</li>
					<li>
						<a href="#otherSections" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" role="button" aria-controls="otherSections">
							<i class="fas fa-sync"></i>Other sections
						</a>
						<ul class="collapse list-unstyled" id="otherSections">
							<li>
								<a class="scroll-link" href="#section-3">Our projects</a>
							</li>
							<li>
								<a class="scroll-link" href="#section-4">We think that...</a>
							</li>
						</ul>
					</li>
				</ul>
				
				<div class="to-top">
					<a class="btn btn-primary btn-customized-3" href="#" role="button">
	                    <i class="fas fa-arrow-up"></i> Top
	                </a>
				</div>
				
				<div class="dark-light-buttons">
					<a class="btn btn-primary btn-customized-4 btn-customized-dark" href="#" role="button">Dark</a>
					<a class="btn btn-primary btn-customized-4 btn-customized-light" href="#" role="button">Light</a>
				</div>
			
			</div> --}}
        <!-- End sidebar -->

        <!-- Dark overlay -->
        <div class="overlay"></div>

        <!-- Content -->
        <div class="content">

            {{-- <!-- open sidebar menu -->
				<a class="btn btn-primary btn-customized open-menu" href="#" role="button">
                    <i class="fas fa-align-left"></i> <span>Menu</span>
                </a> --}}
            {{ $slot }}

            <div class="to-top m-2 text-right">
                <a class="btn btn-primary btn-customized-3" href="#" role="button">
                    <i class="fas fa-arrow-up"></i>
                </a>
            </div>

            <!-- Footer -->
            <footer class="footer-container bg-dark">

                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <p>© {{ date('Y') }} Departamento de Tecnología UNAN-MANGUA.</p>
                        </div>
                        <div class="col-md-6 text-right">
                            <p>Designed by: Carlos J Conto <i class="fas fa-robot"></i></p>
                        </div>
                    </div>
                </div>

            </footer>
        </div>
        <!-- End content -->
    </div>
    <!-- End wrapper -->

    <!-- Javascript -->
    <script src="{{ asset('vendor/js/custom/jquery-3.3.1.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    {{-- <script src="{{ asset('vendor/js/custom/jquery-migrate-3.0.0.min.js') }}"></script> --}}
    <script src="{{ asset('vendor/js/custom/jquery.backstretch.min.js') }}"></script>
    <script src="{{ asset('vendor/js/custom/wow.min.js') }}"></script>
    <script src="{{ asset('vendor/js/custom/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('vendor/js/custom/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('vendor/js/custom/scripts.js') }}"></script>
    <script src="{{ asset('vendor/js/loader.js') }}"></script>
    @yield('js')
</body>

</html>
