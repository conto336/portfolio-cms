<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Carlos J Conto - Backend Developer</title>
    <link rel="stylesheet" href="{{ asset('assets/fonts/flat-icon/flaticon.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div id="content-wrapper">

        <x-header />

        @yield('content')

        <footer class="footer footer--bg">
            {{-- <hr style="border: 0;border-top: 1px solid #525B60;display:block;margin-top: 40px;"> --}}
            <div class="container text-center">

                <p class="footer__paragraph">Carlos J Conto Copyright &copy; {{ date('Y') }} , All Rights Reserved.
                </p>
            </div>
        </footer>
    </div>
    <script src="{{ asset('assets/jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous">
    </script>
    {{-- <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script> --}}
    <script src="{{ asset('js/mixitup.js') }}"></script>

    <script>
        $(function() {
            $('a[href^="#"]').click(function() {
                var destino = $(this.hash);
                if (destino.length == 0) {
                    destino = $('a[name="' + this.hash.substr(1) + '"]');
                }
                if (destino.length == 0) {
                    destino = $('html');
                }
                $('html, body').animate({
                    scrollTop: destino.offset().top
                }, 700);
                return false;
            });
        });
        // calling mixitup
        var mixer = mixitup(".portfolio");
    </script>
</body>

</html>
