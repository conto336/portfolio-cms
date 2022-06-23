@extends('layouts.app-v1')

@section('css')
    <style>
        .card {
            border: 0px solid rgba(0, 0, 0, .125);
        }
    </style>
@endsection

@section('hero')
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="hero-container" data-aos="fade-in">
            <h1 class="text-center">Carlos J Conto</h1>
            <p class="text-center"><span class="typed"
                    data-typed-items="Ingeniero en Electrónica, Desarrollador Web"></span></p>
        </div>
    </section>
@endsection

@section('content')
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="section-title text-justify">
                <h2>Acerca de mi!</h2>
                <div class="container">
                    {!! $me->about !!}
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                    <img src="{{ asset('assets/images/profile.jpg') }}" class="img-fluid" alt=""
                        style="border-radius: 20px">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                    <h3>Ingeniero Electrónico &amp; Desarrollador web.</h3>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li>
                                    <i class="icofont-rounded-right"></i>
                                    <strong>@lang('resources.location'):</strong> Niquinohomo, Masaya, NIC.
                                </li>
                                <li>
                                    <i class="icofont-rounded-right"></i>
                                    <strong>Email:</strong> {{ $me->email }}
                                </li>
                                <li>
                                    <i class="icofont-rounded-right"></i>
                                    <strong>Perfil Github:</strong>
                                    <a href="{{ $me->github }}" target="_blank" rel="noreferrer">Conto336</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center">
                        <div class="row">
                            <div class="col-sm-8 mb-2">
                                <a class="btn btn-primary button" href="{{ asset('cv/CV.pdf') }}" download>
                                    Descargar CV
                                </a>
                            </div>
                            <div class="col-sm-4 mb-2">
                                <a href="#contact" class="btn btn-primary button"> Contáctame</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
        <div class="container">

            <div class="section-title">
                <h2>@lang('resources.skill')</h2>
                <p>@lang('resources.about_skill')</p>
            </div>

            <div class="row no-gutters">

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch mb-2" data-aos="fade-up">
                    <div class="card">
                        <div class="card-body">
                            <div class="count-box">
                                <p title="HTML">
                                    <i class="fab fa-html5" style="color: #F16524"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch mb-2" data-aos="fade-up"
                    data-aos-delay="100">
                    <div class="card">
                        <div class="card-body">
                            <div class="count-box">
                                <p title="CSS">
                                    <i class="fab fa-css3-alt" style="color: #2277FF"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch mb-2" data-aos="fade-up"
                    data-aos-delay="200">
                    <div class="card">
                        <div class="card-body">
                            <div class="count-box">
                                <p title="Bootstrap">
                                    <i class="fab fa-bootstrap" style="color: #593377"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch mb-2" data-aos="fade-up"
                    data-aos-delay="300">
                    <div class="card">
                        <div class="card-body">
                            <div class="count-box">
                                <p title="JavaScript">
                                    <i class="fab fa-js-square" style="color: #F7DF1E"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch mb-2" data-aos="fade-up"
                    data-aos-delay="300">
                    <div class="card">
                        <div class="card-body">
                            <div class="count-box">
                                <p title="PHP">
                                    <i class="fab fa-php" style="color: #787CB4"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch mb-2" data-aos="fade-up"
                    data-aos-delay="300">
                    <div class="card">
                        <div class="card-body">
                            <div class="count-box">
                                <p title="Laravel">
                                    <i class="fab fa-laravel" style="color: #FF291A"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
                    <div class="card">
                        <div class="card-body">
                            <div class="count-box">
                                <p title="React Js">
                                    <i class="fab fa-react fa-reactj" style="color: #61DBFB"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
                    <div class="card">
                        <div class="card-body">
                            <div class="count-box">
                                <p title="React Native">
                                    <i class="fab fa-react fa-reactN" style="color: #61DBFB"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Facts Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
        <div class="container">

            <div class="section-title">
                <h2>Resumen</h2>
            </div>

            <div class="row">
                <div class="col-lg-6" data-aos="fade-up">
                    <h3 class="resume-title">Resumen</h3>
                    <div class="resume-item pb-0">
                        <h4>{{ $me->name }} {{ $me->lastname }}</h4>
                        <p>
                            <em>
                                Desarrollador Laravel con 1+ año de experiencia, conocimientos intermedios en JavaScript &
                                React
                            </em>
                        </p>
                    </div>

                    <h3 class="resume-title">Educación</h3>
                    <div class="resume-item">
                        <h4>Ingenieria Electrónica</h4>
                        <h5>2015 - 2021</h5>
                        <p><em>Universidad Nacional Autónoma de Nicaragua</em></p>
                    </div>
                   
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="resume-title">Experiencia</h3>

                    <div class="resume-item">
                        <h4>Freelance</h4>
                        <h5>Actualmente</h5>
                        <ul>
                            <li>
                                Actualmente trabajo como Desarrollador Web Freelance.
                            </li>
                        </ul>
                    </div>

                    <div class="resume-item">
                        <h4>Desarrollador Web</h4>
                        <h5>2022 - Actualmente</h5>
                        <p><em>BAgents </em></p>
                        <ul>
                            <li>
                                Desarrollador Web utilizando el Framework Laravel.
                            </li>
                            <li>
                                Desarrollo de aplicaciones web para el uso de pequeñas y medianas empresas.
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Portafolio</h2>
                @if ($projects->count() > 0)
                    <p>
                        Estos son algunos de los Proyectos en los que he trabajado
                    </p>
                @endif
            </div>

            {{-- <div class="row" data-aos="fade-up">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                    </ul>
                </div>
            </div> --}}

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
                @forelse ($projects as $project)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ $project->cover_1 }}" class="img-fluid" alt="{{ $project->name }}">
                            <div class="portfolio-links">
                                <a href="{{ $project->url }}" title="Ver en Github" target="_blank" rel="noreferer">
                                    <i class="bx bxl-github"></i></i>
                                </a>
                                <a href="{{ route('proyect', $project->slug) }}" title="More Details">
                                    <i class="bx bx-link"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-sm-12">
                        <x-alert-success>
                            No hay proyectos disponibles aún.
                        </x-alert-success>
                    </div>
                @endforelse
            </div>

        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Contacto</h2>
            </div>

            <div class="row" data-aos="fade-in">

                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i class="icofont-google-map"></i>
                            <h4>Ubicación:</h4>
                            <p>Niquinohomo, Masaya, Nicaragua</p>
                        </div>

                        <iframe src="{{ $location }}" frameborder="0" style="border:0; width: 100%; height: 290px;"
                            allowfullscreen></iframe>
                    </div>

                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form action="{{ route('sendmail') }}" method="POST" role="form" class="php-email-form">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name">Nombre</label>
                                <input type="text" name="name" class="form-control" id="name"
                                    value="{{ old('name') }}" placeholder="Ingresa tu nombre ..." />
                                @error('name')
                                    <div class="validate my-1" style="display: block">
                                        <x-alert-danger>
                                            {{ $message }}
                                        </x-alert-danger>
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Email</label>
                                <input type="email" class="form-control" name="email" id="email"
                                    value="{{ old('email') }}" placeholder="Ingresa tu email ..." />
                                @error('email')
                                    <div class="validate my-1" style="display: block">
                                        <x-alert-danger>
                                            {{ $message }}
                                        </x-alert-danger>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Asunto</label>
                            <input type="text" class="form-control" name="subject" id="subject"
                                value="{{ old('subject') }}" placeholder="Dime el asunto de tu mensaje" />
                            @error('subject')
                                <div class="validate my-1" style="display: block">
                                    <x-alert-danger>
                                        {{ $message }}
                                    </x-alert-danger>
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name">Mensaje</label>
                            <textarea class="form-control" name="message" rows="10" data-rule="required"
                                data-msg="Please write something for us"></textarea>
                            @error('message')
                                <div class="validate my-1" style="display: block">
                                    <x-alert-danger>
                                        {{ $message }}
                                    </x-alert-danger>
                                </div>
                            @enderror
                        </div>

                        <div class="text-center">
                            <button class="btn btn-primary" type="submit">Enviar</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->
@endsection

@section('js')
    <script>
        @if (session()->has('success'))
            toastr["success"]("{{ session()->get('success') }}")
        @endif
        @if (session()->has('error'))
            toastr["error"]("{{ session()->get('error') }}")
        @endif
        @error('name')
            toastr["error"]("{{ $message }}")
        @enderror
        @error('email')
            toastr["error"]("{{ $message }}")
        @enderror
        @error('subject')
            toastr["error"]("{{ $message }}")
        @enderror
        @error('message')
            toastr["error"]("{{ $message }}")
        @enderror
        $(function() {
            var animateHtml = anime({
                targets: '.fa-html5',
                rotate: {
                    value: 360,
                    duration: 2500,
                    loop: true,
                },
            });

            var animateCss = anime({
                targets: '.fa-css3-alt',
                rotate: {
                    value: 360,
                    duration: 2500,
                    loop: true,
                },
            });

            var animateBootstrap = anime({
                targets: '.fa-bootstrap',
                rotate: {
                    value: 360,
                    duration: 2500,
                    loop: true,
                },
            });

            var animateJs = anime({
                targets: '.fa-js-square',
                rotate: {
                    value: 360,
                    duration: 2500,
                    loop: true,
                },
            });

            var animatePhp = anime({
                targets: '.fa-php',
                rotate: {
                    value: 360,
                    duration: 2500,
                    loop: true,
                },
            });

            var animateLaravel = anime({
                targets: '.fa-laravel',
                rotate: {
                    value: 360,
                    duration: 2500,
                    loop: true,
                },
            });

            var animateReact = anime({
                targets: '.fa-reactj',
                rotate: {
                    value: 360,
                    duration: 2500,
                    loop: true,
                },
            });

            var animateReactN = anime({
                targets: '.fa-reactN',
                rotate: {
                    value: 360,
                    duration: 2500,
                    loop: true,
                },
            });

            document.querySelector('.fa-html5').onclick = animateHtml.restart;
            document.querySelector('.fa-css3-alt').onclick = animateCss.restart;
            document.querySelector('.fa-bootstrap').onclick = animateBootstrap.restart;
            document.querySelector('.fa-js-square').onclick = animateJs.restart;
            document.querySelector('.fa-php').onclick = animatePhp.restart;
            document.querySelector('.fa-laravel').onclick = animateLaravel.restart;
            document.querySelector('.fa-reactj').onclick = animateReact.restart;
            document.querySelector('.fa-reactN').onclick = animateReactN.restart;
        })
    </script>
@endsection
