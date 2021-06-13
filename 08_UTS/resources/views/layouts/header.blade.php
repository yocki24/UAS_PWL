<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    
    <title>Sixteen Clothing HTML Template</title>
    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--
    
    TemplateMo 546 Sixteen Clothing
    
    https://templatemo.com/tm-546-sixteen-clothing
    
    -->
    
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    
    </head>
    
    <!-- Header -->
    <header class="">
          <nav class="navbar navbar-expand-lg">
            <div class="container">
              <a class="navbar-brand" href="/index"><h2>Sixteen <em>Clothing</em></h2></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item {{Request::path() === 'index' ? 'active' : ''}}">
                    <a class="nav-link" href="/index">Home
                      <span class="sr-only">(current)</span>
                    </a>
                  </li> 
                  <li class="nav-item {{Request::path() === 'product' ? 'active' : ''}}">
                    <a class="nav-link" href="/product">Our Products</a>
                  </li>
                  <li class="nav-item {{Request::path() === 'about' ? 'active' : ''}}">
                    <a class="nav-link" href="/about">About Us</a>
                  </li>
                  <li class="nav-item {{Request::path() === 'contact' ? 'active' : ''}}">
                    <a class="nav-link" href="/contact">Contact Us</a>
                  </li>
                  @if(Auth::check())
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Account</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="/home">Profile</a>
                      <a class="dropdown-item" href="/products" target="_blank">Update Products</a>
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
                  @else
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Profil</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="/login">Login</a>
                      <a class="dropdown-item" href="/register">Register</a>
                    </div>
                  </li>
                  @endif
                </ul>
              </div>
            </div>
          </nav>
        </header>
        <body