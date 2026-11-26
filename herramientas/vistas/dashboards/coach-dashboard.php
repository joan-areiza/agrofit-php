<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agrofit | Modulo - Entrenador</title>
    <!-- Favicon actualizado a assets/img/ -->
    <link rel="icon" type="image/png" href="../../../assets/img/sena-logo.png">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body class="bg-white text-success min-vh-100 d-flex flex-column">
    <header class="navbar navbar-expand-lg navbar-dark bg-success sticky-top shadow-sm py-3">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center gap-3">
                <a class="navbar-brand d-flex align-items-center m-0" href="../../../index.php">
                    <img src="../../../assets/img/agrofit-logo.png" alt="Logo de la plataforma" class="logo-agrofit" height="50">
                </a>

                <div class="marca-barra-lateral d-flex align-items-center gap-2 text-white" id="btnPerfil" role="button" tabindex="0">
                    <span class="icono-perfil d-inline-flex align-items-center justify-content-center bg-white text-success rounded-circle fs-5"
                        >
                        <ion-icon name="person"></ion-icon>
                    </span>
                    <span class="version-marca fw-semibold text-white">
                        <?php session_start();	echo $_SESSION['loginUsuSesion']; ?>
                    </span>
                </div>
            </div>

            <button class="menu-movil navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobile-menu"
                aria-controls="mobile-menu" aria-label="Menú">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end">
                <div class="header-buttons d-flex gap-2">
                    <button type="button" class="btn btn-outline-light rounded-pill px-4 fw-semibold"
                        data-bs-toggle="modal" data-bs-target="#modalPerfil">Mi Perfil</button>
                    <a href="../../controlador/loginControl.php?opcion=salir"
                        class="btn btn-light text-success rounded-pill px-4 fw-semibold btn-logout" id="btnLogout">Cerrar Sesión</a>
                </div>
            </div>
        </div>
    </header>

    <div class="offcanvas offcanvas-end bg-success text-white" tabindex="-1" id="mobile-menu"
        aria-labelledby="mobileMenuLabel">
        <div class="offcanvas-header border-bottom border-white">
            <h5 class="offcanvas-title fw-bold text-white" id="mobileMenuLabel">AGROFIT • ENTRENADOR</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Cerrar"></button>
        </div>
        <div class="offcanvas-body d-flex flex-column justify-content-between py-4">
            <nav class="nav-barra-lateral d-flex flex-column gap-2">
                <a href="coach-dashboard.php" class="enlace-nav activo nav-link bg-white text-success fw-bold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                    <ion-icon name="home"></ion-icon> Inicio
                </a>
                <a href="#" class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                    <ion-icon name="clipboard"></ion-icon> Control de Rutinas
                </a>
                <a href="#" class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                    <ion-icon name="person"></ion-icon> Consultar Aprendices
                </a>
                <a href="#" class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                    <ion-icon name="checkmark-circle"></ion-icon> Validar Asistencia
                </a>
                <a href="#" class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                    <ion-icon name="clipboard"></ion-icon> Registrar Medidas
                </a>
                <a href="#" class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                    <ion-icon name="mail-unread"></ion-icon> Mensajes
                </a>
                <a href="../../controlador/loginControl.php?opcion=salir"
                    class="enlace-nav btn-logout nav-link text-white border border-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2 mt-2">
                    <ion-icon name="exit"></ion-icon> Cerrar Sesión
                </a>
            </nav>

            <div class="pie-barra-lateral pt-3 border-top border-white small text-white">
                <p class="mb-1">&copy; 2026 Todos los derechos reservados | <a href="https://www.sena.edu.co/" target="_blank" class="text-white fw-semibold text-decoration-none">SENA</a></p>
                <a href="#" title="Pagina del SENA" target="_blank" class="text-white text-decoration-none">Términos &amp; Privacidad</a>
            </div>
        </div>
    </div>

    <div class="container-fluid flex-grow-1 px-4 py-4">
        <div class="row g-4">
            <!-- Barra lateral de navegación en escritorio -->
            <aside class="col-lg-3 col-xl-2 d-none d-lg-block">
                <div class="bg-success text-white rounded-4 p-3 shadow-sm h-100 d-flex flex-column justify-content-between">
                    <nav class="nav-barra-lateral d-flex flex-column gap-2">
                        <a href="coach-dashboard.php"
                            class="enlace-nav activo nav-link bg-white text-success fw-bold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                            <ion-icon name="home"></ion-icon> Inicio
                        </a>
                        <a href="#" class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                            <ion-icon name="clipboard"></ion-icon> Control de Rutinas
                        </a>
                        <a href="#" class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                            <ion-icon name="person"></ion-icon> Consultar Aprendices
                        </a>
                        <a href="#" class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                            <ion-icon name="checkmark-circle"></ion-icon> Validar Asistencia
                        </a>
                        <a href="#" class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                            <ion-icon name="clipboard"></ion-icon> Registrar Medidas
                        </a>
                        <a href="#" class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                            <ion-icon name="mail-unread"></ion-icon> Mensajes
                        </a>
                        <a href="../../controlador/loginControl.php?opcion=salir"
                            class="enlace-nav btn-logout nav-link text-white border border-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2 mt-2">
                            <ion-icon name="exit"></ion-icon> Cerrar Sesión
                        </a>
                    </nav>

                    <div class="pie-barra-lateral pt-3 mt-4 border-top border-white small text-white">
                        <p class="mb-1">&copy; 2026 Todos los derechos reservados | <a href="https://www.sena.edu.co/" target="_blank" class="text-white fw-semibold text-decoration-none">SENA</a></p>
                        <a href="#" title="Pagina del SENA" target="_blank" class="text-white text-decoration-none">Términos &amp; Privacidad</a>
                    </div>
                </div>
            </aside>

            <!-- Contenido principal -->
            <main class="principal-doc col-lg-9 col-xl-10">
                <div class="contenido-doc">
                    <section id="dashboard" class="seccion-dashboard">
                        <div class="banner-panel bg-success text-white rounded-4 p-4 p-md-5 mb-4 shadow-sm">
                            <div class="tag-instructor badge bg-white text-success rounded-pill px-3 py-2 fw-semibold mb-3 d-inline-flex align-items-center gap-2">
                                <ion-icon name="sparkles-outline"></ion-icon>
                                <span>Instructor Deportivo SENA • Acondicionamiento Físico y Biomecánica Deportiva</span>
                            </div>
                            <h1 class="titulo-panel display-6 fw-bold text-white mb-2">Panel de Control de Entrenamiento</h1>
                            <p class="descripcion-panel lead text-white mb-0">
                                Monitorea el progreso de los aprendices, evalúa ejecuciones biomecánicas y valida asistencias a
                                la sala AGROFIT.
                            </p>
                        </div>

                        <div class="contenedor-carrusel mb-4">
                            <div class="carrusel-track row g-4" id="carruselTrack">
                                <div class="col-12 col-sm-6 col-xl-3">
                                    <div class="tarjeta-metrica card bg-white text-success border border-success rounded-4 h-100 p-3 shadow-sm">
                                        <div class="card-body d-flex justify-content-between align-items-center p-1">
                                            <div class="metrica-info">
                                                <span class="label-metrica small fw-bold text-success d-block mb-1">APRENDICES A CARGO</span>
                                                <h2 class="valor-metrica fs-1 fw-bold text-success mb-1">2</h2>
                                                <span class="subtexto-metrica small text-success d-block">Fichas ADSO y Biocomercio</span>
                                            </div>
                                            <div class="icono-metrica bg-success text-white rounded-circle d-flex align-items-center justify-content-center fs-4 flex-shrink-0"
                                                >
                                                <ion-icon name="people-outline"></ion-icon>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-xl-3">
                                    <div class="tarjeta-metrica card bg-white text-success border border-success rounded-4 h-100 p-3 shadow-sm">
                                        <div class="card-body d-flex justify-content-between align-items-center p-1">
                                            <div class="metrica-info">
                                                <span class="label-metrica small fw-bold text-success d-block mb-1">VALIDACIONES PENDIENTES</span>
                                                <h2 class="valor-metrica fs-1 fw-bold text-success mb-1">1</h2>
                                                <span class="subtexto-metrica small text-success d-block">Requieren revisión</span>
                                            </div>
                                            <div class="icono-metrica bg-success text-white rounded-circle d-flex align-items-center justify-content-center fs-4 flex-shrink-0"
                                                >
                                                <ion-icon name="calendar-outline"></ion-icon>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-xl-3">
                                    <div class="tarjeta-metrica card bg-white text-success border border-success rounded-4 h-100 p-3 shadow-sm">
                                        <div class="card-body d-flex justify-content-between align-items-center p-1">
                                            <div class="metrica-info">
                                                <span class="label-metrica small fw-bold text-success d-block mb-1">RUTINAS PRESCRITAS</span>
                                                <h2 class="valor-metrica fs-1 fw-bold text-success mb-1">3</h2>
                                                <span class="subtexto-metrica small text-success d-block">Planes activos en gimnasio</span>
                                            </div>
                                            <div class="icono-metrica bg-success text-white rounded-circle d-flex align-items-center justify-content-center fs-4 flex-shrink-0"
                                               >
                                                <ion-icon name="barbell-outline"></ion-icon>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-xl-3">
                                    <div class="tarjeta-metrica card bg-white text-success border border-success rounded-4 h-100 p-3 shadow-sm">
                                        <div class="card-body d-flex justify-content-between align-items-center p-1">
                                            <div class="metrica-info">
                                                <span class="label-metrica small fw-bold text-success d-block mb-1">CUMPLIMIENTO PROMEDIO</span>
                                                <h2 class="valor-metrica fs-1 fw-bold text-success mb-1">84%</h2>
                                                <span class="subtexto-metrica meta small fw-bold text-success d-block">Meta de horas lúdicas SENA</span>
                                            </div>
                                            <div class="icono-metrica bg-success text-white rounded-circle d-flex align-items-center justify-content-center fs-4 flex-shrink-0"
                                                >
                                                <ion-icon name="ribbon-outline"></ion-icon>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="carrusel-indicadores" id="carruselIndicadores"></div>
                        </div>

                        <div class="tarjeta-revision card bg-white text-success border border-success rounded-4 p-4 shadow-sm">
                            <div class="header-revision mb-3">
                                <span class="badge-revision badge bg-success text-white rounded-pill px-3 py-1 fw-bold mb-2 d-inline-block">PENDIENTE DE REVISIÓN</span>
                                <h2 class="titulo-solicitudes h5 fw-bold text-success d-flex align-items-center gap-2 mb-0">
                                    <ion-icon name="calendar-outline"></ion-icon>
                                    Solicitudes de Asistencia por Aprobar (1)
                                </h2>
                            </div>

                            <div class="lista-solicitudes d-flex flex-column gap-3">
                                <div class="item-solicitud bg-white border border-success rounded-3 p-3 d-flex flex-wrap justify-content-between align-items-center gap-3"
                                    id="solicitud-1">
                                    <div class="detalles-aprendiz">
                                        <span class="nombre-aprendiz fw-bold text-success d-block">Jairo Andrés Pérez Gómez</span>
                                        <span class="info-ficha small text-success">Ficha: 2694520 • Rutina: Acondicionamiento Integral ADSO - Fase
                                            A</span>
                                    </div>
                                    <div class="acciones-solicitud d-flex flex-wrap gap-2">
                                        <button type="button" class="btn-secundario btn btn-outline-success rounded-pill px-4 py-2 fw-semibold d-inline-flex align-items-center gap-1"
                                            onclick="verVideo()">
                                            <ion-icon name="videocam-outline"></ion-icon> Ver Video
                                        </button>
                                        <button type="button" class="btn-aprobar btn btn-success text-white rounded-pill px-4 py-2 fw-semibold d-inline-flex align-items-center gap-1"
                                            onclick="aprobarSolicitud('solicitud-1')">
                                            <ion-icon name="checkmark-circle-outline"></ion-icon> Aprobar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </main>
        </div>
    </div>

    <!-- ============================================================ -->
    <!-- MODAL DE PERFIL & DATOS DE CONTACTO -->
    <!-- ============================================================ -->
    <div class="modal fade" id="modalPerfil" tabindex="-1" aria-labelledby="modalPerfilLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content bg-white text-success rounded-4 shadow border border-success">
                <div class="modal-header bg-success text-white rounded-top-4">
                    <div class="d-flex align-items-center gap-3">
                        <div class="bg-white text-success rounded-circle d-flex align-items-center justify-content-center fs-4"
                            >
                            <ion-icon name="person-outline"></ion-icon>
                        </div>
                        <div>
                            <h2 class="modal-title h5 fw-bold text-white mb-0" id="modalPerfilLabel">Mi Perfil &amp; Datos de Contacto</h2>
                            <p class="small text-white mb-0">Actualiza tus canales de notificación y bioseguridad</p>
                        </div>
                    </div>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar modal"></button>
                </div>

                <div class="modal-body p-4">
                    <div class="border border-success rounded-4 p-3 mb-4 d-flex flex-wrap align-items-center gap-3">
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=200&q=80"
                            alt="Foto de perfil" class="rounded-circle object-fit-cover border border-success" width="72" height="72">
                        <div class="flex-grow-1">
                            <span class="d-block fw-bold text-success mb-2">Fotografía del Perfil</span>
                            <div class="d-flex flex-wrap gap-2">
                                <button type="button" class="btn btn-outline-success rounded-pill px-3 py-1 fw-semibold">
                                    <ion-icon name="camera-outline"></ion-icon> Cambiar Foto
                                </button>
                                <button type="button" class="btn btn-success text-white rounded-pill px-3 py-1 fw-semibold">
                                    <ion-icon name="trash-outline"></ion-icon> Quitar
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="row g-3 border border-success rounded-4 p-3 mb-4">
                        <div class="col-12 col-sm-6">
                            <span class="small fw-bold text-success d-block">NOMBRES Y APELLIDOS</span>
                            <strong class="text-success">Jairo Andrés Pérez Gómez</strong>
                        </div>
                        <div class="col-12 col-sm-6">
                            <span class="small fw-bold text-success d-block">DOCUMENTO</span>
                            <strong class="text-success">CC 1002345678</strong>
                        </div>
                        <div class="col-12 col-sm-6">
                            <span class="small fw-bold text-success d-block">FICHA DE FORMACIÓN</span>
                            <strong class="text-success">2694520</strong>
                        </div>
                        <div class="col-12 col-sm-6">
                            <span class="small fw-bold text-success d-block">ROL EN EL SISTEMA</span>
                            <strong class="text-success">Entrenador</strong>
                        </div>
                    </div>

                    <form id="formPerfil" class="mb-4">
                        <div class="mb-3">
                            <label for="correo" class="form-label fw-semibold text-success">Correo Electrónico (Institucional o Personal) *</label>
                            <input type="email" id="correo" class="form-control border-success text-success" value="jairo.perez@misena.edu.co" required>
                        </div>

                        <div class="mb-3">
                            <label for="telefono" class="form-label fw-semibold text-success">Teléfono Celular *</label>
                            <input type="tel" id="telefono" class="form-control border-success text-success" value="3124567890" required>
                        </div>

                        <div class="mb-0">
                            <label for="contactoEmergencia" class="form-label fw-semibold text-success">Contacto de Emergencia / Acudiente</label>
                            <input type="tel" id="contactoEmergencia" class="form-control border-success text-success" value="3159876543">
                        </div>
                    </form>

                    <div class="border border-success rounded-4 p-3">
                        <div class="d-flex align-items-center gap-2 fw-bold text-success mb-1">
                            <ion-icon name="warning-outline"></ion-icon>
                            <strong>Zona de Seguridad de Cuenta</strong>
                        </div>
                        <p class="small text-success mb-2">Puedes radicar una solicitud formal para cancelar tu cuenta de AGROFIT y transferir tu historial
                            lúdico.</p>
                        <a href="#" class="small fw-bold text-success text-decoration-none">Solicitar eliminación permanente de mi cuenta</a>
                    </div>
                </div>

                <div class="modal-footer border-top border-success">
                    <button type="button" class="btn btn-outline-success rounded-pill px-4 fw-semibold" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" form="formPerfil" class="btn btn-success text-white rounded-pill px-4 fw-semibold d-inline-flex align-items-center gap-1">
                        <ion-icon name="save-outline"></ion-icon> Guardar Cambios
                    </button>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer bg-success text-white py-5 mt-auto">
        <div class="container">
            <div class="row g-4 justify-content-between align-items-start">
                <div class="col-12 col-md-6">
                    <h4 class="h6 fw-bold text-uppercase text-white mb-3">También nos encontrarás en:</h4>
                    <div class="icons d-flex flex-wrap gap-2 fs-4 mb-3 text-white">
                        <ion-icon name="logo-facebook"></ion-icon>
                        <ion-icon name="logo-linkedin"></ion-icon>
                        <ion-icon name="logo-youtube"></ion-icon>
                        <ion-icon name="logo-instagram"></ion-icon>
                        <ion-icon name="logo-x"></ion-icon>
                        <ion-icon name="logo-tiktok"></ion-icon>
                    </div>
                    <p class="mb-1 text-white">@SENAcomunica</p>
                    <a href="https://www.sena.edu.co" title="Pagina del SENA" target="_blank"
                        class="text-white fw-semibold text-decoration-none">www.sena.edu.co</a>
                </div>

                <div class="col-12 col-md-6 text-md-end">
                    <p class="mb-2 text-white">&copy; 2026 Todos los derechos reservados | <a href="https://www.sena.edu.co/"
                            target="_blank" class="text-white fw-semibold text-decoration-none">SENA</a>
                        - Servicio Nacional de Aprendizaje.</p>
                    <a href="#" title="Pagina del SENA" target="_blank"
                        class="text-white fw-semibold text-decoration-none small">
                        Términos &amp; Privacidad</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <!-- Librería de alertas (confirmaciones de cierre de sesión, ayuda, etc...) -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@8.0.13/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@8.0.13/dist/ionicons/ionicons.js"></script>
</body>

</html>