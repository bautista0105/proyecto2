
<!doctype html>

<html lang="en">
  <head>
    
    @yield('head')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.js"></script>
    <title>Gestiòn De Proyectos</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">
    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.1/examples/dashboard/dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">GPLDS</a>
  
  
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="/login">Sesiones</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">
              <span data-feather="home"></span>
              Dashboard
              
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('proyecto.index')}}">
              <span data-feather="file"></span>
              Registro De Proyectos
            </a>
          </li>
        
          <li class="nav-item">
            <a class="nav-link" href="{{route('avances.index')}}">
              <span data-feather="layers"></span>
              Avances
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link"href="{{route('estadisticas.index')}}">
              <span data-feather="bar-chart-2"></span>
              Estadisticas
            </a>
          </li>
        </ul>
        </div>
    </nav>
        </div>
      </div>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
       @yield('contenido')
        
        
      </main>
      


      @yield('js')
      <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
