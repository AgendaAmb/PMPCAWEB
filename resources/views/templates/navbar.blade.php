<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<script src="{{ asset('js/app.js') }}" defer></script>

<div class="navbartotal">
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <strong>PMPCA</strong>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"><strong>Directorio</strong></a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#"><strong>Colaboración social</strong></a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#"><strong>Protocolo de ética</strong></a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <strong>Oferta educativa</strong>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"><strong>Doctorado</strong></a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#"><strong>Maestría</strong></a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#"><strong>Maestría doble titulación</strong></a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <strong> Información academica</strong>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"><strong>Cursos</strong></a></li>
                            <li><a class="dropdown-item" href="#"><strong>Profesores y áreas de
                                        especialización</strong></a></li>
                            <li><a class="dropdown-item" href="#"><strong>Becas</strong></a></li>
                            <li><a class="dropdown-item" href="#"><strong>Bibliotecas</strong></a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#"><strong>Estadísticas</strong></a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url("/comite")}}"><strong>Comité academico y normativa</strong></a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <strong>Alumnos</strong>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"><strong>Tutorias</strong></a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#"><strong>Calendario</strong></a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#"><strong>Trámites</strong></a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#"><strong>Procesos administrativos</strong></a>
                            </li>
                        </ul>
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
