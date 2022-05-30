{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')

                <x-jet-section-border />
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

                <x-jet-section-border />
            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.two-factor-authentication-form')
                </div>

                <x-jet-section-border />
            @endif

            <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                <x-jet-section-border />

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.delete-user-form')
                </div>
            @endif
        </div>
    </div>
</x-app-layout> --}}

@extends('layouts.admin')

@section('title', $user->name)

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/editors/quill/katex.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('app-assets/vendors/css/editors/quill/monokai-sublime.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/editors/quill/quill.snow.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/forms/form-quill-editor.css') }}">
@endsection

@section('content')
    <!-- users edit start -->
    <section class="app-user-edit">
        <div class="card">
            @if (session()->has('success'))
                <div class="my-2">
                    <x-alert-success>
                        {{ session()->get('success') }}
                    </x-alert-success>
                </div>
            @endif
            <div class="card-body">
                <ul class="nav nav-pills" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center active" id="account-tab" data-toggle="tab"
                            href="#account" aria-controls="account" role="tab" aria-selected="true">
                            <i data-feather="user"></i><span class="d-none d-sm-block">Account</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center" id="social-tab" data-toggle="tab" href="#social"
                            aria-controls="social" role="tab" aria-selected="false">
                            <i data-feather="share-2"></i><span class="d-none d-sm-block">Social</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <!-- Account Tab starts -->
                    <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
                        <!-- users edit media object start -->
                        <div class="media mb-2">
                            <img src="{{ $user->profile_photo_url }}" alt="users avatar"
                                class="user-avatar users-avatar-shadow rounded mr-2 my-25 cursor-pointer" height="90"
                                width="90" />
                            <div class="media-body mt-50">
                                <h4>{{ $user->name }}</h4>
                                <div class="col-12 d-flex mt-1 px-0">
                                    <label class="btn btn-primary mr-75 mb-0" for="change-picture">
                                        <span class="d-none d-sm-block">Change</span>
                                        <input class="form-control" type="file" id="change-picture" hidden
                                            accept="image/png, image/jpeg, image/jpg" />
                                        <span class="d-block d-sm-none">
                                            <i class="mr-0" data-feather="edit"></i>
                                        </span>
                                    </label>
                                    <button class="btn btn-outline-secondary d-none d-sm-block">Remove</button>
                                    <button class="btn btn-outline-secondary d-block d-sm-none">
                                        <i class="mr-0" data-feather="trash-2"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- users edit media object ends -->
                        <!-- users edit account form start -->
                        <form action="{{ route('update', $user) }}" class="basic-info" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="name">Nombre</label>
                                        <input type="text" class="form-control" value="{{ $user->name }}" name="name"
                                            id="name" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="lastname">Apellido</label>
                                        <input type="text" class="form-control" value="{{ $user->lastname }}"
                                            name="lastname" id="lastname" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="email">E-mail</label>
                                        <input type="email" class="form-control" value="{{ $user->email }}"
                                            name="email" id="email" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="job">Job</label>
                                        <input type="text" class="form-control" value="{{ $user->job }}" name="job"
                                            id="job" />
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="age">Edad</label>
                                        <input type="text" class="form-control" value="{{ $user->age }}" name="age"
                                            id="age" />
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="location">Ubicación</label>
                                        <input type="text" class="form-control" value="{{ $user->location }}"
                                            name="location" id="location" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="username">Contraseña</label>
                                        <div class="input-group input-group-merge form-password-toggle">
                                            <input class="form-control form-control-merge" id="password" type="password"
                                                name="password" aria-describedby="login-password" tabindex="2" />
                                            <div class="input-group-append">
                                                <span class="input-group-text cursor-pointer">
                                                    <i data-feather="eye"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group mb-2">
                                        <label>Descripción</label>
                                        <div id="blog-editor-wrapper">
                                            <div id="editor"></div>
                                            <textarea name="about" id="about" style="display: none"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex flex-sm-row flex-column mt-2">
                                    <button type="submit" class="btn btn-primary mb-1 mb-sm-0 mr-0 mr-sm-1">
                                        <i class="fa-solid fa-cloud-arrow-up"></i> Actualizar
                                    </button>
                                </div>
                            </div>
                        </form>
                        <!-- users edit account form ends -->
                    </div>
                    <!-- Account Tab ends -->

                    <!-- Social Tab starts -->
                    <div class="tab-pane" id="social" aria-labelledby="social-tab" role="tabpanel">
                        <!-- users edit social form start -->
                        <form action="{{ route('update', $user) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-lg-4 col-md-6 form-group">
                                    <label for="twitter-input">Twitter</label>
                                    <div class="input-group input-group-merge">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3">
                                                <i data-feather="twitter" class="font-medium-2"></i>
                                            </span>
                                        </div>
                                        <input id="twitter" type="text" class="form-control" name="twitter"
                                            value="{{ $user->twitter }}" placeholder="{{ $user->twitter }}"
                                            aria-describedby="basic-addon3" />
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 form-group">
                                    <label for="linkedin-input">Linkedin</label>
                                    <div class="input-group input-group-merge">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon4">
                                                <i data-feather="linkedin" class="font-medium-2"></i>
                                            </span>
                                        </div>
                                        <input id="link" name="link" type="text" class="form-control"
                                            value="{{ $user->link }}" placeholder="{{ $user->link }}"
                                            aria-describedby="basic-addon4" />
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 form-group">
                                    <label for="github-input">Github</label>
                                    <div class="input-group input-group-merge">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon9">
                                                <i data-feather="github" class="font-medium-2"></i>
                                            </span>
                                        </div>
                                        <input id="git" name="git" type="text" class="form-control"
                                            value="{{ $user->git }}" placeholder="{{ $user->git }}"
                                            aria-describedby="basic-addon9" />
                                    </div>
                                </div>

                                <div class="col-12 d-flex flex-sm-row flex-column mt-2">
                                    <button type="submit" class="btn btn-primary mb-1 mb-sm-0 mr-0 mr-sm-1">
                                        <i class="fa-solid fa-cloud-arrow-up"></i> Actualizar
                                    </button>
                                </div>
                            </div>
                        </form>
                        <!-- users edit social form ends -->
                    </div>
                    <!-- Social Tab ends -->
                </div>
            </div>
        </div>
    </section>
    <!-- users edit ends -->
@endsection

@section('js')
    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('app-assets/vendors/js/ui/jquery.sticky.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>
    <!-- END: Page Vendor JS-->
    <script src="{{ asset('app-assets/vendors/js/editors/quill/katex.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/editors/quill/highlight.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/editors/quill/quill.min.js') }}"></script>

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('app-assets/js/scripts/pages/app-user-edit.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/components/components-navs.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/pages/page-blog-edit.js') }}"></script>

    <script>
        $(function() {
            $("form.basic-info").on('submit', function() {
                var content = $(".ql-editor").html();
                $("#about").val(content);
            });
        });
    </script>
@endsection
