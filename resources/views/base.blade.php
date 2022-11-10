<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profesor</title>

    <!-- Bootstrap -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Bootstrap -->
    
    <script src="https://kit.fontawesome.com/c8e5690449.js" crossorigin="anonymous"></script>
</head>

<body>
    <header id="main-header">
        <div class="container-fluid p-3">
        <div class="row h-auto">
            <div class="col-lg-6 col-md-6 col-sm-6 d-flex justify-content-start">
            <a id="logo-header" href="#">
                <span class="logouaslp mx-5"> <img src="{{asset('storage/images/uaslpimage.png')}}" height="290" width="190" alt="uaslp"></span>
            </a> <!-- / #logo-header -->
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 d-flex justify-content-end">
            <p> <i class="fa-sharp fa-solid fa-circle-user"></i> Iniciar sesion</p>
            </div>
        </div>
        </div>
    </header>
    <div class="fondoFooter"></div>
    <div class="navbartotal">
        <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">PMPCA</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#"><strong> Oferta educativa</strong></a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <strong> Información academica</strong>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#"><strong>Cursos</strong></a></li>
                    <li><a class="dropdown-item" href="#"><strong>Profesores y areas de especialización</strong></a></li>
                    <li><a class="dropdown-item" href="#"><strong>Becas</strong></a></li>
                    <li><a class="dropdown-item" href="#"><strong>Biblioteca</strong></a></li>
                    <li>
                    <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#"><strong>Estadisticas</strong></a></li>
                </ul>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#"><strong>Normativa y comité academico</strong></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#"><strong>Alumnos</strong></a>
                </li>
                <li class="nav-item">
                <a class="nav-link disabled"><strong>Egresados</strong></a>
                </li>
            </ul>
            <form class="d-flex" role="buscar">
                <input class="form-control me-2" type="buscar" placeholder="Buscar" aria-label="Buscar">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
            </div>
        </div>
        </nav>
    </div>
    <div class="fondoFooter"></div>
    <footer id="main-footer">
        <div class=¨container-fluid¨>
        <div class="row">
            <div class="col-12 col-sm-6">
            <div class="izquierda">
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                <br>
                <span>Av. Manuel Nava #201, 2do. piso </span><br>
                <span> Zona Universitaria, C.P. 78000 </span><br>
                <span>San Luis Potosí, S.L.P., México </span><br>
                <span>Tel. +52 (444) 826 2439</span><br>
                <span>© 2022 Todos los derechos reservados.</span>
            </div>
            </div>
            <div class="col-12 col-sm-6">
            <div class="derecha d-flex justify-content-center">
                <a href="#"><i class="fa-sharp fa-solid fa-phone"></i></a>
                <span>444 8 26 24 35 &nbsp &nbsp</span>

                <a href="#"><i class="fa-regular fa-envelope"></i></a>
                <span>pmpca@uaslp.mx</span>
            </div>
            </div>
        </div>
        </div>
    </footer> <!-- / #main-footer -->
</body>
</html>