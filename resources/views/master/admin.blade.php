<html>
<head>
    <title>Gunungapi</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

 <style type="text/css">
  .navbar {min-height: 15px;}
  .navbar-brand {padding: 0 15px; height: 15px; line-height: 15px;}
  #content-section {
      padding:5px;
  }
  table th{text-align:center; padding-left:5px; padding-right:5px;} td{padding-left:5px; padding-right:5px;} 
</style>

</head>
<body>
    <div class="container-fluid">
	<h4>Sistem Informasi Gunungapi</h4>
    </div>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
  	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
	            <li class="{{ (request()->is('gapi/gunungapi*')) ? 'active' : ''}} nav-item">
                    <a class="nav-link py-0" href="../gunungapi/index">Gunungapi</a>
                </li>
	            <li class="{{ (request()->is('gapi/stasiun*')) ? 'active' : ''}} nav-item">
                    <a class="nav-link py-0" href="../stasiun/index">Stasiun Pemantauan</a>
                </li>
	            <li class="{{ (request()->is('gapi/sejarah*')) ? 'active' : ''}} nav-item">
                    <a class="nav-link py-0" href="../sejarah/index">Sejarah Letusan</a>
                </li>
	            <li class="{{ (request()->is('gapi/krb*')) ? 'active' : ''}} nav-item">
                    <a class="nav-link py-0" href="../krb/index">Peta Kawasan Rawan Bencana</a>
                </li>
                <li class="{{ (request()->is('gapi/admin*')) ? 'active' : ''}} nav-item">
                    <a class="nav-link py-0" href="../admin/index">Admin <span class="sr-only">(current)</span></a>
               </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item float-right dropdown">
                <a class="nav-link py-0 dropdown-toggle"  data-toggle="dropdown" href="#">{{ auth()->user()->name ?? 'Blm login' }}</a>
                    <div class="dropdown-menu">
                        <!-- <a class="dropdown-item" href="#">Logout</a> -->
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
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


    <h4> @yield('judul_halaman')</h4>
    <div id="content-section">
        @yield('konten')
    </div>
    <!--
    <footer>
	<center>
 		Ini footer
 	</center>
    </footer>
    -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
