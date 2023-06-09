<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <style>
        .main {
            height: 100vh;
            background-color: ;
        }
        .sidebar {
            background-color:rgba(255, 166, 0, 0.749);
        
        }



    </style>
</head>
<body>

<div class="main d-flex flex-column justify-content-between">
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            @if (Auth::check())
                <a href="/logout" class="btn btn-success">Logout</a>
                @else
            <a href="/login " class="btn btn-success">Login</a>
            @endif
            <a class="navbar-brand" href="#">Pinjaman Buku</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark offcanvas</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="/home">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                  </a>
                  <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>
            </ul>
        </div>
    </div>
        </div>
    </nav>
    <br>
    <br>
    <div>
        @if (Auth::check())
        @if (Auth::user()->Status == 'inactive') 
        <div class="alert alert-danger text-center">
            <div>Hallo {{Auth::user()->username}}!</div>
            Akun Anda Belum Terverifikasi Mungkin Ada Beberapa Fitur Yang Tidak Dapat Anda Access <br>
            Silahkan Hubungi Admin Untuk Prosses Verifikasi
        </div>
        @endif
        @endif
    </div>
        <div class="body-content h-100">
            <div class="row g-0 h-100">
                <div class="sidebar col-2 p-3">
                    <ul>
                        <li>Books</li>
                        <li>Categories</li>
                        <li>Users</li>
                        <li>Rent Log</li>
                        <li>Profile</li>
                        <li>Logout</li>
                    </ul>
                </div>
                <div class="content col-10 p-5">
                    @yield('content')
                    <div>ppp</div>
                </div>
            </div>

        </div>
    </div>







    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>