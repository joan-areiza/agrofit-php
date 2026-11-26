<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Agrofit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
</head>

<body class="bg-white text-success">

    <!-- Barra superior: solo en celular/tablet, con el botón que abre el menú -->
    <nav class="navbar navbar-dark bg-success d-lg-none shadow-sm">
        <div class="container-fluid">
            <button class="navbar-toggler border-white" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#menuLateral" aria-controls="menuLateral" aria-label="Abrir menú">
                <span class="navbar-toggler-icon"></span>
            </button>
            <span class="navbar-brand mb-0 h1 text-white fw-bold">AGROFIT</span>
        </div>
    </nav>

    <div class="d-flex min-vh-100">

        <!-- ================= MENÚ LATERAL ================= -->
        <aside class="offcanvas-lg offcanvas-start bg-success text-white flex-shrink-0" tabindex="-1" id="menuLateral"
            aria-labelledby="tituloMenu">

            <!-- Encabezado visible solo cuando el menú se abre en celular -->
            <div class="offcanvas-header border-bottom border-white">
                <h5 class="offcanvas-title text-white fw-bold" id="tituloMenu">AGROFIT</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                    data-bs-target="#menuLateral" aria-label="Cerrar"></button>
            </div>

            <div class="offcanvas-body d-flex flex-column p-3 h-100">

                <!-- Logo / nombre: solo en pantallas grandes -->
                <a href="#"
                    class="d-none d-lg-flex align-items-center gap-2 mb-3 pb-3 text-white text-decoration-none border-bottom border-white">
                    <i class="bi bi-box-seam fs-4 text-white"></i>
                    <span class="fs-5 fw-semibold text-white">AGROFIT</span>
                </a>

                <ul class="nav nav-pills flex-column gap-1 mb-auto" id="listaMenu">

                    <!-- Opción simple (sin submenú) -->
                    <li class="nav-item">
                        <a class="nav-link active bg-white text-success fw-semibold d-flex align-items-center gap-2"
                            href="#">
                            <i class="bi bi-house-door"></i> Inicio
                        </a>
                    </li>

                    <!-- Opción con submenú: Usuarios -->
                    <li class="nav-item">
                        <a class="nav-link text-white d-flex align-items-center gap-2" href="#subUsuarios" role="button"
                            data-bs-toggle="collapse" aria-expanded="false" aria-controls="subUsuarios">
                            <i class="bi bi-people"></i> Usuarios
                            <i class="bi bi-chevron-down ms-auto"></i>
                        </a>
                        <div class="collapse" id="subUsuarios" data-bs-parent="#listaMenu">
                            <ul class="nav flex-column gap-1 mt-1 ps-4">
                                <li><a class="nav-link text-white small" href="#">Listar usuarios</a></li>
                                <li><a class="nav-link text-white small" href="#">Registrar usuario</a></li>
                                <li><a class="nav-link text-white small" href="#">Roles</a></li>
                            </ul>
                        </div>
                    </li>

                    <!-- Opción con submenú: Reportes -->
                    <li class="nav-item">
                        <a class="nav-link text-white d-flex align-items-center gap-2" href="#subReportes" role="button"
                            data-bs-toggle="collapse" aria-expanded="false" aria-controls="subReportes">
                            <i class="bi bi-bar-chart"></i> Reportes
                            <i class="bi bi-chevron-down ms-auto"></i>
                        </a>
                        <div class="collapse" id="subReportes" data-bs-parent="#listaMenu">
                            <ul class="nav flex-column gap-1 mt-1 ps-4">
                                <li><a class="nav-link text-white small" href="#">Diario</a></li>
                                <li><a class="nav-link text-white small" href="#">Mensual</a></li>
                            </ul>
                        </div>
                    </li>

                    <!-- Opción con submenú: Configuración -->
                    <li class="nav-item">
                        <a class="nav-link text-white d-flex align-items-center gap-2" href="#subConfig" role="button"
                            data-bs-toggle="collapse" aria-expanded="false" aria-controls="subConfig">
                            <i class="bi bi-gear"></i> Configuración
                            <i class="bi bi-chevron-down ms-auto"></i>
                        </a>
                        <div class="collapse" id="subConfig" data-bs-parent="#listaMenu">
                            <ul class="nav flex-column gap-1 mt-1 ps-4">
                                <li><a class="nav-link text-white small" href="#">Áreas</a></li>
                                <li><a class="nav-link text-white small" href="#">Cargos</a></li>
                                <li><a class="nav-link text-white small" href="#">Centros</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>

                <!-- Pie del menú: usuario y salir -->
                <div class="border-top border-white pt-3 mt-3">
                    <div class="d-flex align-items-center gap-2 mb-2 px-2 small text-white">
                        <i class="bi bi-person-circle fs-5 text-white"></i>
                        <!-- En PHP: <?= htmlspecialchars($_SESSION['loguinUsuSesion']) ?> -->
                        <span>Nombre del usuario</span>
                    </div>
                    <!-- Ajusta la ruta a tu archivo de login -->
                    <a class="nav-link text-white d-flex align-items-center gap-2" href="login.php?opcion=salir" id="btnLogout">
                        <i class="bi bi-box-arrow-right"></i> Salir
                    </a>
                </div>
            </div>
        </aside>

        <!-- ================= CONTENIDO ================= -->
        <main class="flex-grow-1 p-4 bg-white text-success">
            <h1 class="h3 fw-bold text-success">Contenido de la página</h1>
            <p class="text-success">Aquí va el contenido de cada pantalla.</p>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" src="herramientas/js/logout.js" defer></script>
</body>

</html>