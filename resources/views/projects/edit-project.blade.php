@extends('layouts.admin')

@section('title', 'Editar Projecto ' . $project->name)

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/editors/quill/katex.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('app-assets/vendors/css/editors/quill/monokai-sublime.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/editors/quill/quill.snow.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/forms/form-quill-editor.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/page-blog.css') }}">
@endsection

@section('header')
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Editar Projecto</h2>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Editar
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <!-- Blog Edit -->
    <div class="blog-edit-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <!-- Form -->
                        @if (session()->has('success'))
                            <x-alert-success>
                                {{ session()->get('success') }}
                            </x-alert-success>
                        @endif
                        <form id="project" action="{{ route('create.project.update', $project) }}" method="POST"
                            class="mt-2" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-4 col-12">
                                    <div class="form-group mb-2">
                                        <label for="blog-edit-title">Título</label>
                                        <input type="text" id="name" name="name" class="form-control"
                                            placeholder="Ingrese el nombre" value="{{ $project->name }}" />

                                    </div>
                                    @error('name')
                                        <x-alert-danger>
                                            {{ $message }}
                                        </x-alert-danger>
                                    @enderror
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group mb-2">
                                        <label for="blog-edit-category">Categoria</label>
                                        <select id="category" name="category" class="select2 form-control" multiple>
                                            <option value="{{ $project->category }}" selected>{{ $project->category }}</option>
                                            <option value="Desarrollo Web">Desarrollo Web</option>
                                            <option value="Móvil">Móvil</option>
                                        </select>
                                    </div>
                                    @error('category')
                                        <x-alert-danger>
                                            {{ $message }}
                                        </x-alert-danger>
                                    @enderror
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group mb-2">
                                        <label for="blog-edit-slug">Slug</label>
                                        <input type="text" id="slug" name="slug" class="form-control"
                                            placeholder="ingrese-el-slug" value="{{ $project->slug }}" />
                                    </div>
                                    @error('slug')
                                        <x-alert-danger>
                                            {{ $message }}
                                        </x-alert-danger>
                                    @enderror
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group mb-2">
                                        <label for="github">Github</label>
                                        <input type="text" id="github" name="github" class="form-control"
                                            placeholder="url repositorio" value="{{ $project->url }}" />
                                    </div>
                                    @error('github')
                                        <x-alert-danger>
                                            {{ $message }}
                                        </x-alert-danger>
                                    @enderror
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="form-group mb-2">
                                        <label for="customer">Cliente</label>
                                        <input type="text" id="customer" name="customer" class="form-control"
                                            placeholder="Cliente del Proyecto" value="{{ $project->customer }}" />
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group mb-2">
                                        <label>Descripción</label>
                                        <div id="blog-editor-wrapper">
                                            <div id="editor"></div>
                                            <textarea name="description" id="description" style="display: none"></textarea>
                                        </div>
                                        @error('description')
                                            <x-alert-danger>
                                                {{ $message }}
                                            </x-alert-danger>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-4 mb-2">
                                    <div class="border rounded p-2">
                                        <h4 class="mb-1">Cover 1</h4>
                                        <div class="media flex-column flex-md-row">
                                            <img src="{{ $project->cover_1 }}"
                                                id="cover_1_feature" class="rounded mr-2 mb-1 mb-md-0" width="170"
                                                height="110" alt="Blog Featured Image" />
                                            <div class="media-body">
                                                <small class="text-muted">Required image resolution 800x400, image size
                                                    10mb.</small>
                                                <p class="my-50">
                                                    <a href="javascript:void(0);"
                                                        id="image-text_1">C:\fakepath\banner.jpg</a>
                                                </p>
                                                <div class="d-inline-block">
                                                    <div class="form-group mb-0">
                                                        <div class="custom-file">
                                                            <input type="file" name="cover_1" class="custom-file-input"
                                                                id="cover_1" accept="image/*" />
                                                            <label class="custom-file-label" for="cover_1">Choose
                                                                file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @error('cover_1')
                                        <x-alert-danger>
                                            {{ $message }}
                                        </x-alert-danger>
                                    @enderror
                                </div>

                                <div class="col-4 mb-2">
                                    <div class="border rounded p-2">
                                        <h4 class="mb-1">Cover 2</h4>
                                        <div class="media flex-column flex-md-row">
                                            <img src="{{ $project->cover_2 }}"
                                                id="cover_2_feature" class="rounded mr-2 mb-1 mb-md-0" width="170"
                                                height="110" alt="Blog Featured Image" />
                                            <div class="media-body">
                                                <small class="text-muted">Required image resolution 800x400, image size
                                                    10mb.</small>
                                                <p class="my-50">
                                                    <a href="javascript:void(0);"
                                                        id="image-text_2">C:\fakepath\banner.jpg</a>
                                                </p>
                                                <div class="d-inline-block">
                                                    <div class="form-group mb-0">
                                                        <div class="custom-file">
                                                            <input type="file" name="cover_2" class="custom-file-input"
                                                                id="cover_2" accept="image/*" />
                                                            <label class="custom-file-label" for="cover_2">Choose
                                                                file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @error('cover_2')
                                        <x-alert-danger>
                                            {{ $message }}
                                        </x-alert-danger>
                                    @enderror
                                </div>
                                <div class="col-4 mb-2">
                                    <div class="border rounded p-2">
                                        <h4 class="mb-1">Cover 3</h4>
                                        <div class="media flex-column flex-md-row">
                                            <img src="{{ $project->cover_3 }}"
                                                id="cover_3_feature" class="rounded mr-2 mb-1 mb-md-0" width="170"
                                                height="110" alt="Blog Featured Image" />
                                            <div class="media-body">
                                                <small class="text-muted">Required image resolution 800x400, image size
                                                    10mb.</small>
                                                <p class="my-50">
                                                    <a href="javascript:void(0);"
                                                        id="image-text_3">C:\fakepath\banner.jpg</a>
                                                </p>
                                                <div class="d-inline-block">
                                                    <div class="form-group mb-0">
                                                        <div class="custom-file">
                                                            <input type="file" name="cover_3" class="custom-file-input"
                                                                id="cover_3" accept="image/*" />
                                                            <label class="custom-file-label" for="cover_3">Choose
                                                                file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @error('cover_3')
                                        <x-alert-danger>
                                            {{ $message }}
                                        </x-alert-danger>
                                    @enderror
                                </div>
                                <div class="col-12 mt-50 text-center">
                                    <button type="submit" class="btn btn-primary mr-1" id="save">
                                        <i data-feather="save"></i> Guardar
                                    </button>
                                </div>
                            </div>
                        </form>
                        <!--/ Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ Blog Edit -->
@endsection

@section('js')
    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('ckeditor5/ckeditor.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/ui/jquery.sticky.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/editors/quill/katex.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/editors/quill/highlight.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/editors/quill/quill.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('app-assets/js/scripts/pages/page-blog-edit.js') }}"></script>
    <!-- END: Page JS-->

    <script src="{{ asset('app-assets/vendors/js/forms/validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>
    <!-- END: Page Vendor JS-->
    <script>
        $(function() {
            if ($(".alert")) {
                setTimeout(() => {
                    $(".alert").fadeIn("slow").alert('close');
                }, 2000);
            }

            $(".ql-editor").html("{!! $project->description !!}");

            $("form#project").on('submit', function() {
                var contentEditor = $(".ql-editor").html();
                $("#description").val(contentEditor);
            });

            var slug = $("#name");
            slug.on('keyup', function() {
                var content = slug.val()
                $("#slug").val(content.toLowerCase().split(" ").join("-").normalize('NFD')
                    .replace(/([^n\u0300-\u036f]|n(?!\u0303(?![\u0300-\u036f])))[\u0300-\u036f]+/gi,
                        "$1")
                    .normalize());
            });

        });
    </script>
@endsection
