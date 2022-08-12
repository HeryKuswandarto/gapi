<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Informasi gunung api">
    <meta name="author" content="Hery Kuswandarto">
    <title>Gunungapi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <style type="text/css">
        .navbar {
            min-height: 15px;
        }

        .navbar-brand {
            padding: 0 15px;
            height: 15px;
            line-height: 15px;
        }

        #content-section {
            padding: 5px;
        }

        table th {
            text-align: left;
            padding-left: 5px;
            padding-right: 5px;
        }

        td {
            padding-left: 5px;
            padding-right: 5px;
        }
    </style>

</head>

<body>
    <div class="container-fluid">
        <h4>Sistem Informasi Gunungapi</h4>
    </div>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="{{ (request()->is('gapi/gunungapi*')) ? 'active' : ''}} nav-item">
                    <a class="nav-link py-0" href="{{ route('gunungapi.index') }}">Gunungapi</a>
                </li>
                <li class="{{ (request()->is('gapi/jenisstasiun*')) ? 'active' : ''}} nav-item">
                    <a class="nav-link py-0" href="{{ route('jenisstasiun.index') }}">Jenis Stasiun</a>
                </li>
                <li class="{{ (request()->is('gapi/stasiun*')) ? 'active' : ''}} nav-item">
                    <a class="nav-link py-0" href="{{ route('stasiun.index') }}">Stasiun Pemantauan</a>
                </li>
                <li class="{{ (request()->is('gapi/sejarah*')) ? 'active' : ''}} nav-item">
                    <a class="nav-link py-0" href="{{ route('sejarah.index') }}">Sejarah Letusan</a>
                </li>
                <li class="{{ (request()->is('gapi/krb*')) ? 'active' : ''}} nav-item">
                    <a class="nav-link py-0" href="{{ route('krb.index') }}">Peta Kawasan Rawan Bencana</a>
                </li>
                <li class="{{ (request()->is('gapi/admin*')) ? 'active' : ''}} nav-item">
                    <a class="nav-link py-0" href="{{ route('admin.index') }}">Admin <span
                            class="sr-only">(current)</span></a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item float-right dropdown">
                    <a class="nav-link py-0 dropdown-toggle" data-toggle="dropdown" href="#">{{ auth()->user()->name ??
                        'Blm login' }}</a>
                    <div class="dropdown-menu">
                        <!-- <a class="dropdown-item" href="#">Logout</a> -->
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>


                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <h1 class="mt-5"> @yield('judul_halaman')</h1>
        @yield('konten')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous">
    </script>
</body>

</html>
