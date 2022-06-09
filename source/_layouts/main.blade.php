<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="{{ $page->getUrl() }}">
    <meta name="description" content="{{ $page->description }}">
    <title>{{ $page->title }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
</head>

<body>

    <div class="wrapper">

        <header>

            <div class="navbar-wrapper">

                <nav class="navbar">

                    <div class="navbar-brand">
                        <a href="/">
                            <h3 class="navbar-brand-text">
                                <i class="fa-solid fa-heart"></i>
                                {{$page->company}}
                            </h3>
                        </a>
                    </div>


                    <div class="navbar-items">

                        <button class="navbar-toggler">
                            <i class="fa-solid fa-bars fa-lg"></i>
                        </button>

                        <ul>
                            <li class="{{ $page->selected('/') }}">
                                <a class="{{ $page->selected('/') }}" href="{{ $page->baseUrl }}/">Beranda</a>
                            </li>

                            <li class="{{ $page->selected('project') }}">
                                <a class="{{ $page->selected('project') }}" href="{{ $page->baseUrl }}/project">Project</a>
                            </li>

                            <li class="{{ $page->selected('docs') }}">
                                <a class="{{ $page->selected('docs') }}" href="{{ $page->baseUrl }}/docs">Docs</a>
                            </li>

                            <li class="{{ $page->selected('blog') }}">
                                <a class="{{ $page->selected('blog') }}" href="{{ $page->baseUrl }}/blog">Blog</a>
                            </li>

                            <li class="{{ $page->selected('contact') }}">
                                <a class="{{ $page->selected('contact') }}" href="{{ $page->baseUrl }}/contact">Contact</a>
                            </li>
                            
                        </ul>
                    </div>
                </nav>
            </div>

        </header>

        <main class="main">
            @yield('body')
        </main>

        <footer class="footer flex justify-content-between flex-sm-column align-items-center">
            <p class="color-4">© {{ date('M, Y') }}, By: Fadly Dzil</p>
            <p class="color-4">Powered By: <a href="https://jigsaw.tighten.com/" target="_blank" rel="noreferrer">Laravel Jigsaw</a> </p>
        </footer>

    </div>

</body>

</html>