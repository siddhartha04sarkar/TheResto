<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Resto - A Restaurant App</title>

    <!--Bootstrap cdn css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--Bootstrap cdn js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!--Font Awesome cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <div>
            <nav class="navbar navbar-expand-lg navbar-dark bg-info">
                <a class="navbar-brand" href="/">The Resto</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                    <a class="nav-item nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="/list">List</a>
                    <a class="nav-item nav-link" href="/add">Add</a>
                    
                    @if(Session::get('user'))
                    <a class="nav-item nav-link" href="logout">Logout, {{ Session::get('user') }}</a>
                    @else
                    <a class="nav-item nav-link" href="login">Login</a>
                    <a class="nav-item nav-link" href="register">Register</a>
                    @endif
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <br>
    <br>
    <div class="container">
        @yield('content')
    </div>
    <br>
    <br>
     <footer>
        <div class="container-fluid text-center bg-info text-light">
            <span>Copyright &copy; {{ date('Y') }} by SiddharthaSarkar.</span>
        </div>
     </footer>
</body>
</html>