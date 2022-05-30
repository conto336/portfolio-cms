@extends('layouts.app-v1')


@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h4>Detalles del proyecto <strong>{{ $project->name }}</strong></h4>
                <ol>
                    <li><a href="/">Inicio</a></li>
                    <li>Detalles del proyecto</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="portfolio-details-container">

                <div class="owl-carousel portfolio-details-carousel">
                    <img src="{{ $project->cover_1 }}" class="img-fluid" alt="">
                    <img src="{{ $project->cover_2 }}" class="img-fluid" alt="">
                    <img src="{{ $project->cover_3 }}" class="img-fluid" alt="">
                </div>

                <div class="portfolio-info">
                    <h3>Información del proyecto</h3>
                    <ul>
                        <li>
                            <strong>Categoria</strong>: {{ $project->category }}
                        </li>
                        <li>
                            <strong>Cliente</strong>: {{ $project->customer }}
                        </li>
                        <li>
                            <strong>Repositorio</strong>: <a href="{{ $project->url }}" target="_blank" rel="noreferer">Github </a>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="portfolio-description">
                <h2>{{ $project->name }}</h2>
                <p>
                    {!! $project->description !!}
                </p>
            </div>

        </div>
    </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->
@endsection
