<!DOCTYPE html>
<html>
<head>
    <title>Auth in Laravel</title>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
 
<body>
 
    <nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #e3f2fd;">
        <div class="container text-center">
            <a class="navbar-brand mr-auto" href="#">Authentication</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register-user') }}">Register</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="{{ route('signout') }}">Logout</a>
                    </li>

                    <div class=" "  style=" width:1100px; text-align:right; ">
                    <p class="mb-0 mt-2"><span class="text-danger">User_</span>
                       [ {{$user = \Auth::user()->name;}} ]
                    </p>
                    </div>
                    @endguest
                </ul>
            </div>
        </div>
        
        
         
    </nav>

    @yield('content')
    
</body>
 
</html>