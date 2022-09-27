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

        /* #content-section {
            padding: 0px;
        } */

        table th {
            text-align: left;
            padding-left: 5px;
            padding-right: 5px;
        }

        td {
            padding-left: 5px;
            padding-right: 5px;
        }



        #mapid{
        padding: 0;
        margin: 0;
		width: 100%;
		height: 600px;
	}
    </style>
    {{-- <link rel="stylesheet" href="leaflet/leaflet.css">
    <script src="leaflet/leaflet.js" ></script> --}}

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="">
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>


    {{-- <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin=""/>
	<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script> --}}
	{{-- <script src="leaflet.ajax.min.js"></script> --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-ajax/2.1.0/leaflet.ajax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-ajax/2.1.0/leaflet.ajax.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li style="color:FFFFFF">
                    Sistem Informasi Gunungapi
                </li>
            </ul>

            <ul class="navbar-nav">

                <li class="{{ (request()->is('gapi/admin*')) ? 'active' : ''}} nav-item float-right">
                    <a class="nav-link py-0" href="auth/login">Login <span
                            class="sr-only">(current)</span></a>
                </li>

            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        @yield('konten')
    </div>

</body>

</html>
