@extends('layouts.admin')

@section('title', 'Todos los Projectos')

@section('content')
    <div class="blog-list-wrapper">
        <!-- Blog List Items -->
        <div class="row">
            @if ($projects->count() === 0)
                <div class="col-sm-12">
                    <x-alert-success>
                        No tiénes proyectos por el momento
                    </x-alert-success>
                </div>
            @else
                @foreach ($projects as $project)
                    <div class="col-md-6 col-12">
                        <div class="card">
                            <a href="#">
                                <img class="card-img-top img-fluid" src="{{ $project->cover_1 }}" alt="Blog Post pic" />
                            </a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#" class="blog-title-truncate text-body-heading">
                                        {{ $project->name }}
                                    </a>
                                </h4>
                                <div class="media">
                                    <div class="media-body">
                                        <small class="text-muted">
                                            {{ Carbon\Carbon::parse($project->created_at)->isoFormat('D MMMM YYYY') }}
                                        </small>
                                    </div>
                                </div>
                                <div class="my-1 py-25">
                                    <a href="javascript:void(0);">
                                        <div class="badge badge-pill badge-light-info mr-50">
                                            {{ $project->category }}
                                        </div>
                                    </a>
                                </div>
                                <p class="card-text blog-content-truncate">
                                    {!! $project->description !!}
                                </p>
                                <hr />
                                <div class="d-flex justify-content-end align-items-center">
                                    <a href="{{ route('create.project.edit', [$project->id, $project->slug]) }}"
                                        class="font-weight-bold">Editar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
        <!--/ Blog List Items -->

        <!-- Pagination -->
        {{-- <div class="row">
            <div class="col-12">
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center mt-2">
                        <li class="page-item prev-item"><a class="page-link" href="javascript:void(0);"></a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                        <li class="page-item active" aria-current="page"><a class="page-link"
                                href="javascript:void(0);">4</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">5</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">6</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">7</a></li>
                        <li class="page-item next-item"><a class="page-link" href="javascript:void(0);"></a></li>
                    </ul>
                </nav>
            </div>
        </div> --}}
        <!--/ Pagination -->
    </div>
@endsection
