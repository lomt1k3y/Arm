<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/iziToast.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/iziToast.min.js') }}"></script>
    <style>
        /* Анимация для логотипа */
        .logo-animation {
            transition: transform 0.3s ease;
        }

        .logo-animation:active {
            transform: translate(7px, 3px)
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg rounded m-3" aria-label="Thirteenth navbar example">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11" aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
                <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                    <rect width="24" height="24" fill="none" />
                    <path fill="none" stroke="#eb5e28" stroke-linecap="round" stroke-linejoin="round" d="M3 6.001h18m-18 6h18m-18 6h18" />
                </svg>
            </button>

            <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">
                <a class="navbar-brand text-white fs-5 col-lg-3 me-0 px-3 menu-items logo-animation" href="{{ route('welcome') }}">
                    <span class="bordered-text">arm</span>
                    <span class="badge">new</span>
                </a>
                <ul class="navbar-nav col-lg-6 justify-content-lg-center">
                    <li class="nav-item">
                        <a class="nav-link fs-6 px-3 menu-items" aria-current="page" href="{{ route('welcome') }}">главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6 px-3 menu-items" href="#">играть</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6 px-3 menu-items" href="#">контакты</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6 px-3 menu-items" href="{{ route(name: 'donate') }}">пополнение</a>
                    </li>
                </ul>
                <div class="d-lg-flex col-lg-3 justify-content-lg-end">
                    @if (Auth::User())
                        <a href="home" class="text-decoration-none text-none fs-5 nav-item-lc"> {{ Auth::User()->name }} </a>
                    @else
                        <a href="{{ route('steamAuth') }}" class="svg-link">
                            <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon" width="1.8em" height="1.8em" viewBox="0 0 24 24">
                                <rect width="24" height="24" fill="none" />
                                <path class="svg-path" fill="#ADB5BD" opacity="0.8" d="M12 2a10 10 0 0 1 10 10a10 10 0 0 1-10 10c-4.6 0-8.45-3.08-9.64-7.27l3.83 1.58a2.84 2.84 0 0 0 2.78 2.27c1.56 0 2.83-1.27 2.83-2.83v-.13l3.4-2.43h.08c2.08 0 3.77-1.69 3.77-3.77s-1.69-3.77-3.77-3.77s-3.78 1.69-3.78 3.77v.05l-2.37 3.46l-.16-.01c-.59 0-1.14.18-1.59.49L2 11.2C2.43 6.05 6.73 2 12 2M8.28 17.17c.8.33 1.72-.04 2.05-.84s-.05-1.71-.83-2.04l-1.28-.53c.49-.18 1.04-.19 1.56.03c.53.21.94.62 1.15 1.15c.22.52.22 1.1 0 1.62c-.43 1.08-1.7 1.6-2.78 1.15c-.5-.21-.88-.59-1.09-1.04zm9.52-7.75c0 1.39-1.13 2.52-2.52 2.52a2.52 2.52 0 0 1-2.51-2.52a2.5 2.5 0 0 1 2.51-2.51a2.52 2.52 0 0 1 2.52 2.51m-4.4 0c0 1.04.84 1.89 1.89 1.89c1.04 0 1.88-.85 1.88-1.89s-.84-1.89-1.88-1.89c-1.05 0-1.89.85-1.89 1.89" />
                            </svg>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <script>
        $(document).ready(function () {
            // Обработка клика по логотипу
            $('.logo-animation').on('click', function () {
                $(this).addClass('active');
                setTimeout(() => {
                    $(this).removeClass('active');
                }, 300); // Удаляем класс через 300 мс
            });
        });
    </script>
</body>
</html>
