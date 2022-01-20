@extends('adminlte::page')

@section('title', '- Registar Usuario')

@section('content_header')
    <h1>Registro de usuarios</h1>
@stop

@section('content')

    {{-- <div class="container text-center">
        <p class="text-success h4">
            Esta función aún no esta implementada, por favor contáctate con el desarrollador del sitio.
        </p>
    </div> --}}
    <x-form-register-user />

@stop

@section('footer')

    <div class="pull-right hidden-xs">
        <b>Version</b> 1.0
    </div>
    <strong>Copyright © {{ date('Y') }} Deptarmento de Tecnología UNAN-MANAGUA.</strong> All rights reserved.

@stop

@section('css')

@stop

@section('js')
    <script>
        function show(p, p2, e) {
            const eye = document.getElementById(p);
            const password = document.getElementById(p2)
            const eyePssword = document.getElementById(e)
            eye.addEventListener('click', (e) => {
                if (password.type === 'password') {
                    password.type = 'text';
                    eyePssword.classList.add('fa-eye-slash');
                } else {
                    password.type = 'password';
                    eyePssword.classList.remove('fa-eye-slash');
                    eyePssword.classList.add('fa-eye');
                }
            });
        }
        show('password_one', 'password', 'eye');
        show('password_two', 'password_confirmation', 'eye_two')
    </script>

@stop
