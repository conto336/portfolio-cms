@extends('layouts.app')

@section('content')
    <section class="about" id="about">
        <div class="container about__container--narrow">
            <div class="page-section">
                <h2 class="page-section__title">@lang('resources.about')</h2>
                <img class="page-section__title-style" src="assets/images/title-style.png" alt="">
                {{-- <p class="page-section__paragraph">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p> --}}
                <div class="row">
                    <div class="col-md-4">
                        <div class="about__image">
                            <img class="img-fluid" src="{{ asset('assets/images/profile.jpg') }}" alt=""
                                style="border-radius: 20px">
                        </div>
                    </div>
                    <div class="col-md-8 about__content">
                        <p class="about__description">
                            @lang('resources.about_me')
                        </p>
                        <div class="row row--margin-top">
                            <div class="col-md-5">
                                <p class="about__bio">
                                    <strong>@lang('resources.name') :</strong> {{ $me->name . ' ' . $me->lastname }}
                                </p>
                                <p class="about__bio">
                                    <strong>@lang('resources.age') :</strong> {{ $me->age }}
                                </p>
                            </div>

                            <div class="col-md-5">
                                <p class="about__bio">
                                    <strong>@lang('resources.job') :</strong> {{ $me->job }}
                                </p>
                                <p class="about__bio">
                                    <strong>@lang('resources.location') :</strong> {{ $me->location }}
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-5 mx-auto text-center">
                                <a class="button button--colorful button--margin" href="#">DOWNLOAD CV</a>
                            </div>

                            <div class="col-sm-6 col-md-5 mx-auto text-center">
                                <a class="button button--colorful button--margin" href="#">HIRE ME</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="skill skill--bg" id="skill">
        <div class="container my-3 skill__container--narrow">
            <div class="page-section mt-3">
                <h2 class="page-section__title page-section__title--white">@lang('resources.skill')</h2>
                <img class="page-section__title-style" src="assets/images/title-style-white.png" alt="">
                <p class="page-section__paragraph page-section__paragraph--white">
                    @lang('resources.about_skill')
                </p>
                <div class="row mb-3">
                    <x-card-skill name="LARAVEL" logo="assets/images/laravel.png" color="#dc3545" />

                    <x-card-skill name="PYTHON" logo="assets/images/piton.png" color="#FFAC1B" />

                    <x-card-skill name="PHP" logo="assets/images/php.png" color="#6f42c1" />

                    <x-card-skill name="BOOTSTRAP" logo="assets/images/bootstrap.png" color="#6f42c1" />

                    <x-card-skill name="JAVASCRIPT" logo="assets/images/js.png" color="#FFAC1B" />

                    <x-card-skill name="REACT JS" logo="assets/images/physics.png" color="#17a2b8" />

                </div>
            </div>
        </div>
    </section>

    {{-- <section class="service">
        <div class="container">
            <div class="page-section">
                <h2 class="page-section__title">MY SERVICES</h2>
                <img class="page-section__title-style" src="assets/images/title-style.png" alt="">
                <p class="page-section__paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                <div class="row gutters-70">
                    <div class="col-md-4">
                        <div class="thumbnail text-center">
                            <img src="assets/images/logo-design.png" alt="">
                            <h4 class="service__single-section__title">LOGO DESIGN</h4>
                            <p class="service__single-section__paragraph">magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail text-center">
                            <img src="assets/images/website-design.png" alt="">
                            <h4 class="service__single-section__title">WEBSITE DESIGN</h4>
                            <p class="service__single-section__paragraph">magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail text-center">
                            <img src="assets/images/support.png" alt="">
                            <h4 class="service__single-section__title">SUPPORT</h4>
                            <p class="service__single-section__paragraph">magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section class="overview overview--bg">
        <div class="container">
            <div class="page-section">
                <div class="row gutters-140">
                    <div class="col-xs-6 col-lg-3 overview__single-section">
                        <i class="material-icons">headset_mic</i>
                        <h2 class="overview__single-section__number">220</h2>
                        <p class="overview__single-section__title">Hand to Work</p>
                    </div>
                    <div class="col-xs-6 col-lg-3 overview__single-section">
                        <i class="material-icons">mood</i>
                        <h2 class="overview__single-section__number">530</h2>
                        <p class="overview__single-section__title">Happy Client</p>
                    </div>
                    <div class="col-xs-6 col-lg-3 overview__single-section">
                        <i class="material-icons">assignment_turned_in</i>
                        <h2 class="overview__single-section__number">780</h2>
                        <p class="overview__single-section__title">Finished Project</p>
                    </div>
                    <div class="col-xs-6 col-lg-3 overview__single-section">
                        <i class="material-icons">local_bar</i>
                        <h2 class="overview__single-section__number">970</h2>
                        <p class="overview__single-section__title">Cups of coffe</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="portfolio" id="portfolio">
        <div class="container">
            <div class="page-section">
                <h2 class="page-section__title">@lang('resources.portfolio')</h2>
                <img class="page-section__title-style" src="assets/images/title-style.png" alt="">
                <p class="page-section__paragraph">@lang('resources.portfolio_about')</p>
                <div class="portfolio__button-group">
                    <a class="button button--default" data-filter="all" href="#">ALL</a>
                    <a class="button button--default" data-filter=".category-a" href="#">DEVELOPMENT</a>
                    <a class="button button--default" data-filter=".category-b" href="#">DESIGN</a>
                    <a class="button button--default" data-filter=".category-c" href="#">HTML</a>
                    <a class="button button--default" data-filter=".category-d" href="#">JAVA</a>
                </div>
                <div class="row gutters-40">
                    <div class="col-md-4">
                        <div class="portfolio__single-section mix category-a category-b category-c" data-order="1">
                            <img class="portfolio__single-section__image img-responsive" src="assets/images/portfolio-1.png"
                                alt="">
                            <div class="portfolio__single-section__overlay">
                                <div class="overlay-content">
                                    <h4>LOGO DESIGN</h4>
                                    <p>Designer</p>
                                </div>
                                <div class="portfolio__single-section__search-icon">
                                    <a href="#"><img src="assets/images/search-icon.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="portfolio__single-section mix category-a category-c" data-order="2">
                            <img class="portfolio__single-section__image img-responsive" src="assets/images/portfolio-2.png"
                                alt="">
                            <div class="portfolio__single-section__overlay">
                                <div class="overlay-content">
                                    <h4>WEBSITE DESIGN</h4>
                                    <p>Designer</p>
                                </div>
                                <div class="portfolio__single-section__search-icon">
                                    <a href="#"><img src="assets/images/search-icon.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="portfolio__single-section mix category-c" data-order="3">
                            <img class="portfolio__single-section__image img-responsive" src="assets/images/portfolio-3.png"
                                alt="">
                            <div class="portfolio__single-section__overlay">
                                <div class="overlay-content">
                                    <h4>LOGO DESIGN</h4>
                                    <p>Designer</p>
                                </div>
                                <div class="portfolio__single-section__search-icon">
                                    <a href="#"><img src="assets/images/search-icon.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-40">
                    <div class="col-md-4">
                        <div class="portfolio__single-section mix category-b category-d" data-order="4">
                            <img class="portfolio__single-section__image img-responsive" src="assets/images/portfolio-4.png"
                                alt="">
                            <div class="portfolio__single-section__overlay">
                                <div class="overlay-content">
                                    <h4>PHOTOGRAPHY</h4>
                                    <p>photographer</p>
                                </div>
                                <div class="portfolio__single-section__search-icon">
                                    <a href="#"><img src="assets/images/search-icon.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="portfolio__single-section mix category-b category-d" data-order="5">
                            <img class="portfolio__single-section__image img-responsive" src="assets/images/portfolio-5.png"
                                alt="">
                            <div class="portfolio__single-section__overlay">
                                <div class="overlay-content">
                                    <h4>WEBSITE DESIGN</h4>
                                    <p>Designer</p>
                                </div>
                                <div class="portfolio__single-section__search-icon">
                                    <a href="#"><img src="assets/images/search-icon.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="portfolio__single-section mix category-d" data-order="6">
                            <img class="portfolio__single-section__image img-responsive" src="assets/images/portfolio-6.png"
                                alt="">
                            <div class="portfolio__single-section__overlay">
                                <div class="overlay-content">
                                    <h4>LOGO DESIGN</h4>
                                    <p>Designer</p>
                                </div>
                                <div class="portfolio__single-section__search-icon">
                                    <a href="#"><img src="assets/images/search-icon.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="skill skill--bg" id="contact">
        <div class="container">
            <div class="page-section mb-3">
                <h2 class="page-section__title page-section__title--white">@lang('resources.contact_me')</h2>
                <img class="page-section__title-style" src="assets/images/title-style-white.png" alt="">
                <p class="page-section__paragraph page-section__paragraph--white">
                </p>
                <div class="container">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="page-section__title page-section__title">@lang('resources.location')</h4>
                                    <iframe src="{{ $location }}" frameborder="0"
                                        style="border:0; width: 100%; height: 376px;" allowfullscreen="">
                                    </iframe>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <form action="#" method="post" role="form" class="php-email-form">
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <label for="name">@lang('resources.name')</label>
                                                <input type="text" name="name" class="form-control" id="name"
                                                    data-rule="minlen:4" data-msg="Please enter at least 4 chars"
                                                    placeholder="Ingresa tu nombre ...">
                                                <div class="validate"></div>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="name">Email</label>
                                                <input type="email" class="form-control" name="email" id="email"
                                                    data-rule="email" data-msg="Please enter a valid email"
                                                    placeholder="Ingresa tu email ...">
                                                <div class="validate"></div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <label for="name">@lang('resources.subject')</label>
                                                <input type="text" class="form-control" name="subject" id="subject"
                                                    data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject"
                                                    placeholder="Dime el asunto de tu mensaje">
                                            </div>
                                            <div class="validate"></div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-12 mt-3">
                                                <label for="name">@lang('resources.message')</label>
                                                <textarea class="form-control" name="message" rows="5" data-rule="required"
                                                    data-msg="Please write something for us"></textarea>
                                            </div>
                                            <div class="validate"></div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="button button--colorful" id="btn" style="border: 0px">
                                                Enviar
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
    </section>

    {{-- <section class="blog">
        <div class="container">
            <div class="page-section">
                <h2 class="page-section__title">BLOG POST</h2>
                <img class="page-section__title-style" src="assets/images/title-style.png" alt="">
                <p class="page-section__paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                <div class="row gutters-40">
                    <div class="col-md-4">
                        <div class="thumbnail text-center">
                            <img class="img-responsive" src="assets/images/blog-1.png" alt="">
                            <p class="blog__single__date">MAY 25 , 2017 </p>
                            <i class="material-icons">comment</i> 5
                            <a href="#">
                                <h4 class="blog__single__title">HEADLINE LATEST WORLD NEWS</h4>
                            </a>
                            <p class="blog__single__paragraph">orem ipsum dolor sit amet, consectetur adipisicing
                                elit, sed do eiusmod tempor incididunt ut labore et dolore Ut enim ad minim veniam
                                <a href="#"><span class="blog__single__paragraph--read-more">READ
                                        MORE...</span></a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail text-center">
                            <img src="assets/images/blog-2.png" alt="">
                            <p class="blog__single__date">MAY 25 , 2017 </p>
                            <i class="material-icons">comment</i> 5
                            <a href="#">
                                <h4 class="blog__single__title">HEADLINE LATEST WORLD NEWS</h4>
                            </a>
                            <p class="blog__single__paragraph">orem ipsum dolor sit amet, consectetur adipisicing
                                elit, sed do eiusmod tempor incididunt ut labore et dolore Ut enim ad minim veniam
                                <a href="#"><span class="blog__single__paragraph--read-more">READ
                                        MORE...</span></a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail text-center">
                            <img src="assets/images/blog-3.png" alt="">
                            <p class="blog__single__date">MAY 25 , 2017 </p>
                            <i class="material-icons">comment</i> 5
                            <a href="#">
                                <h4 class="blog__single__title">HEADLINE LATEST WORLD NEWS</h4>
                            </a>
                            <p class="blog__single__paragraph">orem ipsum dolor sit amet, consectetur adipisicing
                                elit, sed do eiusmod tempor incididunt ut labore et dolore Ut enim ad minim veniam
                                <a href="#"><span class="blog__single__paragraph--read-more">READ
                                        MORE...</span></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
