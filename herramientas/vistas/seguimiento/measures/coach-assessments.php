<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agrofit | Modulo - Entrenador</title>
    <link rel="icon" type="image/png" href="../../../public/assets/img/sena-logo.png">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


</head>

<body class="bg-white text-success min-vh-100 d-flex flex-column">

    <header class="navbar navbar-expand-lg navbar-dark bg-success sticky-top shadow-sm py-3">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center gap-3">
                <a class="navbar-brand d-flex align-items-center m-0" href="../../../../src/features/dashboards/coach-dashboard/coach-dashboard.html">
                    <img src="../../../public/assets/img/agrofit-logo.png" alt="Logo de la plataforma" class="logo-agrofit" height="50">
                </a>

                <div class="marca-barra-lateral d-flex align-items-center gap-2 text-white" id="btnPerfil" role="button" tabindex="0">
                    <span class="icono-perfil d-inline-flex align-items-center justify-content-center bg-white text-success rounded-circle fs-5"
                        >
                        <ion-icon name="person"></ion-icon>
                    </span>
                    <span class="version-marca fw-semibold text-white">Juan Perez</span>
                </div>
            </div>

            <button class="menu-movil navbar-toggler" id="menuMovil" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobile-menu"
                aria-controls="mobile-menu" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end">
                <div class="header-buttons d-flex gap-2">
                    <button type="button" class="btn btn-outline-light rounded-pill px-4 fw-semibold" id="btnAbrirPerfilHeader">Mi Perfil</button>
                    <a href="#" class="btn btn-light text-success rounded-pill px-4 fw-semibold btn-logout" id="btnLogout">Cerrar Sesión</a>
                </div>
            </div>
        </div>
    </header>

    <div class="superposicion d-none" id="superposicion"></div>

    <div class="offcanvas offcanvas-end bg-success text-white" tabindex="-1" id="mobile-menu"
        aria-labelledby="mobileMenuLabel">
        <div class="offcanvas-header border-bottom border-white">
            <h5 class="offcanvas-title fw-bold text-white" id="mobileMenuLabel">AGROFIT • ENTRENADOR</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Cerrar"></button>
        </div>
        <div class="offcanvas-body d-flex flex-column justify-content-between py-4">
            <nav class="nav-barra-lateral d-flex flex-column gap-2">
                <div class="item-nav">
                    <a href="../../../../src/features/dashboards/coach-dashboard/coach-dashboard.html" class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                        <ion-icon name="home"></ion-icon> Inicio
                    </a>
                </div>

                <div class="item-nav">
                    <a href="../../../../src/features/routines/coach-routines/coach-routines.html" class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                        <ion-icon name="clipboard"></ion-icon> Control de Rutinas
                    </a>
                </div>

                <div class="item-nav">
                    <a href="../../../../src/features/measurements/coach-assessments/coach-assessments.html"
                        class="enlace-nav activo nav-link bg-white text-success fw-bold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                        <ion-icon name="person"></ion-icon> Consultar Aprendices
                    </a>
                </div>

                <div class="item-nav">
                    <a href="../../../../src/features/attendance/coach-attendance/coach-attendance.html" class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                        <ion-icon name="checkmark-circle"></ion-icon> Validar Asistencia
                    </a>
                </div>

                <div class="item-nav">
                    <a href="../../../../src/features/measurements/coach-measurements/coach-measurements.html" class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                        <ion-icon name="clipboard"></ion-icon> Registrar Medidas
                    </a>
                </div>

                <div class="item-nav">
                    <a href="#" class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                        <ion-icon name="mail-unread"></ion-icon> Mensajes
                    </a>
                </div>

                <div class="item-nav mt-2 pt-2 border-top border-white">
                    <a href="#" class="enlace-nav btn-logout nav-link text-white border border-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2" id="btnLogoutMobile">
                        <ion-icon name="exit"></ion-icon> Cerrar Sesión
                    </a>
                </div>
            </nav>

            <footer class="pie-barra-lateral pt-3 border-top border-white small text-white">
                <p class="mb-1">&copy; 2026 Todos los derechos reservados | <a href="https://www.sena.edu.co/" target="_blank" class="text-white fw-semibold text-decoration-none">SENA</a> -</p>
                <a href="#" title="Pagina del SENA" target="_blank" class="text-white text-decoration-none">
                    Términos &amp; Privacidad</a>
            </footer>
        </div>
    </div>

    <div class="container-fluid flex-grow-1 px-4 py-4">
        <div class="row g-4">
            <!-- Barra lateral: menú principal de navegación -->
            <aside class="barra-lateral col-lg-3 col-xl-2 d-none d-lg-block" id="barraLateral">
                <div class="bg-success text-white rounded-4 p-3 shadow-sm h-100 d-flex flex-column justify-content-between">
                    <div>
                        <!-- Encabezado: logo + nombre del aprendiz -->
                        <div class="encabezado-barra-lateral pb-3 mb-3 border-bottom border-white">
                            <div class="marca-barra-lateral d-flex align-items-center gap-2" role="button" tabindex="0">
                                <div class="icono-perfil bg-white text-success rounded-circle d-flex align-items-center justify-content-center fs-5 flex-shrink-0"
                                    >
                                    <ion-icon name="person"></ion-icon>
                                </div>
                                <div class="info-perfil-texto d-flex flex-column">
                                    <span class="texto-marca small text-white fw-medium">Entrenador</span>
                                    <span class="version-marca fw-semibold text-white">Juan Perez</span>
                                </div>
                            </div>
                        </div>

                        <!-- Navegación: enlaces a cada módulo/sección de la plataforma -->
                        <nav class="nav-barra-lateral d-flex flex-column gap-2">

                            <div class="item-nav">
                                <a href="../../../../src/features/dashboards/coach-dashboard/coach-dashboard.html" class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                                    <ion-icon name="home"></ion-icon> Inicio
                                </a>
                            </div>

                            <div class="item-nav">
                                <a href="../../../../src/features/routines/coach-routines/coach-routines.html" class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                                    <ion-icon name="clipboard"></ion-icon> Control de Rutinas
                                </a>
                            </div>

                            <div class="item-nav">
                                <a href="../../../../src/features/measurements/coach-assessments/coach-assessments.html"
                                    class="enlace-nav activo nav-link bg-white text-success fw-bold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                                    <ion-icon name="person"></ion-icon> Consultar Aprendices
                                </a>
                            </div>

                            <div class="item-nav">
                                <a href="../../../../src/features/attendance/coach-attendance/coach-attendance.html" class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                                    <ion-icon name="checkmark-circle"></ion-icon> Validar Asistencia
                                </a>
                            </div>

                            <div class="item-nav">
                                <a href="../../../../src/features/measurements/coach-measurements/coach-measurements.html" class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                                    <ion-icon name="clipboard"></ion-icon> Registrar Medidas
                                </a>
                            </div>

                            <div class="item-nav">
                                <a href="#" class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                                    <ion-icon name="mail-unread"></ion-icon> Mensajes
                                </a>
                            </div>

                            <!-- Cierre de sesión: redirige al login e invoca confirmación vía SweetAlert2 -->
                            <div class="item-nav mt-2 pt-2 border-top border-white">
                                <a href="#" class="enlace-nav btn-logout nav-link text-white border border-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2" id="btnLogoutSidebar">
                                    <ion-icon name="exit"></ion-icon> Cerrar Sesión
                                </a>
                            </div>
                        </nav>
                    </div>

                    <!-- Pie de la barra lateral: créditos institucionales -->
                    <footer class="pie-barra-lateral pt-3 mt-4 border-top border-white small text-white">
                        <p class="mb-1">&copy; 2026 Todos los derechos reservados | <a href="https://www.sena.edu.co/" target="_blank" class="text-white fw-semibold text-decoration-none">SENA</a> -</p>
                        <a href="#" title="Pagina del SENA" target="_blank" class="text-white text-decoration-none">
                            Términos &amp; Privacidad</a>
                    </footer>
                </div>
            </aside>

            <!-- Contenido principal: aquí se renderizan las secciones activas (Bienvenida, Semana de Adaptación, Ayuda, etc...) -->
            <main class="principal-doc col-lg-9 col-xl-10">
                <div class="contenido-doc">
                    <section id="directorio-aprendices" class="directorio-seccion bg-white text-success border border-success rounded-4 p-4 p-md-5 shadow-sm">

                        <!-- ENCABEZADO Y FILTROS -->
                        <div class="tarjeta-filtro-directorio card bg-white text-success border border-success rounded-4 p-3 p-md-4 mb-4 shadow-sm">
                            <div class="d-flex flex-column flex-lg-row justify-content-between align-items-stretch align-items-lg-center gap-3">
                                <div class="encabezado-directorio">
                                    <span class="badge-modulo badge bg-success text-white rounded-pill px-3 py-2 fw-bold mb-2 d-inline-block">GESTIÓN DE GRUPOS</span>
                                    <h1 class="titulo-directorio h2 fw-bold text-success mb-1">Directorio de Aprendices SENA</h1>
                                    <p class="subtitulo-directorio text-success mb-0">Filtra por ficha de formación, consulta medidas antropométricas
                                        y envía recomendaciones directas.</p>
                                </div>

                                <div class="controles-filtro d-flex flex-column flex-sm-row gap-2 align-items-stretch align-items-sm-center flex-shrink-0">
                                    <div class="select-wrapper">
                                        <select id="filtroFicha" class="select-filtro form-select border-success text-success rounded-pill fw-semibold">
                                            <option value="todas">Todas las Fichas</option>
                                            <option value="2694520">Ficha 2694520</option>
                                        </select>
                                    </div>

                                    <div class="busqueda-wrapper input-group">
                                        <span class="icono-busqueda input-group-text bg-white text-success border-success rounded-start-pill">
                                            <ion-icon name="search-outline"></ion-icon>
                                        </span>
                                        <input type="text" id="inputBuscar" class="input-busqueda form-control border-success text-success rounded-end-pill" placeholder="Buscar aprendiz...">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- CARRUSEL / GRID DE TARJETAS -->
                        <div class="carrusel-contenedor position-relative d-flex align-items-center gap-2">
                            <button class="btn-carrusel prev btn btn-outline-success rounded-circle d-inline-flex align-items-center justify-content-center flex-shrink-0"
                                id="btnPrev" type="button" aria-label="Anterior" >
                                <ion-icon name="chevron-back-outline"></ion-icon>
                            </button>

                            <div class="carrusel-track-wrapper flex-grow-1 overflow-hidden py-1" id="carruselWrapper">
                                <div class="carrusel-track row g-4" id="carruselTrack">

                                    <!-- Tarjeta 1: Jairo -->
                                    <div class="col-12 col-md-6 col-xl-4">
                                        <div class="tarjeta-aprendiz card bg-white text-success border border-success rounded-4 h-100 p-3 p-md-4 shadow-sm d-flex flex-column gap-3"
                                            data-ficha="2694520" data-nombre="jairo andrés pérez gómez" data-primer-nombre="Jairo Andrés">
                                            <div class="encabezado-aprendiz d-flex flex-column gap-2">
                                                <div class="d-flex justify-content-end">
                                                    <span class="badge-estado activo badge bg-success text-white rounded-pill px-3 py-1 fw-semibold text-nowrap">Activo</span>
                                                </div>
                                                <div class="perfil-info d-flex gap-3 align-items-center">
                                                    <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=250"
                                                        alt="Jairo Pérez" class="foto-perfil rounded-circle object-fit-cover border border-success flex-shrink-0"
                                                        width="54" height="54">
                                                    <div>
                                                        <h3 class="nombre-aprendiz h6 fw-bold text-success mb-1">Jairo Andrés Pérez Gómez</h3>
                                                        <div class="doc-aprendiz small fw-semibold text-success text-nowrap">Doc: 1002345678</div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="detalles-aprendiz border border-success rounded-3 p-3 d-flex flex-column justify-content-between gap-2 bg-white mt-auto">
                                                <div class="fila-detalle d-flex justify-content-between align-items-center gap-2 small">
                                                    <span class="label text-success">Ficha:</span>
                                                    <span class="valor valor-bold fw-bold text-success text-end">2694520</span>
                                                </div>
                                                <div class="fila-detalle d-flex justify-content-between align-items-start gap-2 small">
                                                    <span class="label text-success flex-shrink-0">Programa:</span>
                                                    <span class="valor valor-bold fw-bold text-success text-end">Análisis y Desarrollo de Software (ADSO)</span>
                                                </div>
                                                <div class="fila-detalle d-flex justify-content-between align-items-center gap-2 small">
                                                    <span class="label text-success">Adaptación:</span>
                                                    <span class="valor estado-completada fw-bold text-success text-end">Completada</span>
                                                </div>
                                            </div>

                                            <button type="button" class="btn-mensaje btn btn-success text-white rounded-pill py-2 px-3 fw-semibold d-flex align-items-center justify-content-center gap-2 w-100 btn-abrir-modal">
                                                <ion-icon name="chatbox-ellipses-outline"></ion-icon>
                                                Enviar Mensaje
                                            </button>
                                        </div>
                                    </div>

                                    <!-- Tarjeta 2: Valentina -->
                                    <div class="col-12 col-md-6 col-xl-4">
                                        <div class="tarjeta-aprendiz card bg-white text-success border border-success rounded-4 h-100 p-3 p-md-4 shadow-sm d-flex flex-column gap-3"
                                            data-ficha="2694520" data-nombre="valentina ríos castañeda" data-primer-nombre="Valentina">
                                            <div class="encabezado-aprendiz d-flex flex-column gap-2">
                                                <div class="d-flex justify-content-end">
                                                    <span class="badge-estado adaptacion badge bg-white text-success border border-success rounded-pill px-3 py-1 fw-semibold text-nowrap">En Adaptación</span>
                                                </div>
                                                <div class="perfil-info d-flex gap-3 align-items-center">
                                                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&q=80&w=250"
                                                        alt="Valentina Ríos" class="foto-perfil rounded-circle object-fit-cover border border-success flex-shrink-0"
                                                        width="54" height="54">
                                                    <div>
                                                        <h3 class="nombre-aprendiz h6 fw-bold text-success mb-1">Valentina Ríos Castañeda</h3>
                                                        <div class="doc-aprendiz small fw-semibold text-success text-nowrap">Doc: 1005678912</div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="detalles-aprendiz border border-success rounded-3 p-3 d-flex flex-column justify-content-between gap-2 bg-white mt-auto">
                                                <div class="fila-detalle d-flex justify-content-between align-items-center gap-2 small">
                                                    <span class="label text-success">Ficha:</span>
                                                    <span class="valor valor-bold fw-bold text-success text-end">2694520</span>
                                                </div>
                                                <div class="fila-detalle d-flex justify-content-between align-items-start gap-2 small">
                                                    <span class="label text-success flex-shrink-0">Programa:</span>
                                                    <span class="valor valor-bold fw-bold text-success text-end">Análisis y Desarrollo de Software (ADSO)</span>
                                                </div>
                                                <div class="fila-detalle d-flex justify-content-between align-items-center gap-2 small">
                                                    <span class="label text-success">Adaptación:</span>
                                                    <span class="valor estado-encurso fw-bold text-success text-end">En Curso</span>
                                                </div>
                                            </div>

                                            <button type="button" class="btn-mensaje btn btn-success text-white rounded-pill py-2 px-3 fw-semibold d-flex align-items-center justify-content-center gap-2 w-100 btn-abrir-modal">
                                                <ion-icon name="chatbox-ellipses-outline"></ion-icon>
                                                Enviar Mensaje
                                            </button>
                                        </div>
                                    </div>

                                    <!-- Tarjeta 3: Carlos -->
                                    <div class="col-12 col-md-6 col-xl-4">
                                        <div class="tarjeta-aprendiz card bg-white text-success border border-success rounded-4 h-100 p-3 p-md-4 shadow-sm d-flex flex-column gap-3"
                                            data-ficha="2694520" data-nombre="carlos mendoza" data-primer-nombre="Carlos">
                                            <div class="encabezado-aprendiz d-flex flex-column gap-2">
                                                <div class="d-flex justify-content-end">
                                                    <span class="badge-estado activo badge bg-success text-white rounded-pill px-3 py-1 fw-semibold text-nowrap">Activo</span>
                                                </div>
                                                <div class="perfil-info d-flex gap-3 align-items-center">
                                                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&q=80&w=250"
                                                        alt="Carlos Mendoza" class="foto-perfil rounded-circle object-fit-cover border border-success flex-shrink-0"
                                                        width="54" height="54">
                                                    <div>
                                                        <h3 class="nombre-aprendiz h6 fw-bold text-success mb-1">Carlos Mendoza</h3>
                                                        <div class="doc-aprendiz small fw-semibold text-success text-nowrap">Doc: 1009876543</div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="detalles-aprendiz border border-success rounded-3 p-3 d-flex flex-column justify-content-between gap-2 bg-white mt-auto">
                                                <div class="fila-detalle d-flex justify-content-between align-items-center gap-2 small">
                                                    <span class="label text-success">Ficha:</span>
                                                    <span class="valor valor-bold fw-bold text-success text-end">2694520</span>
                                                </div>
                                                <div class="fila-detalle d-flex justify-content-between align-items-start gap-2 small">
                                                    <span class="label text-success flex-shrink-0">Programa:</span>
                                                    <span class="valor valor-bold fw-bold text-success text-end">Análisis y Desarrollo de Software (ADSO)</span>
                                                </div>
                                                <div class="fila-detalle d-flex justify-content-between align-items-center gap-2 small">
                                                    <span class="label text-success">Adaptación:</span>
                                                    <span class="valor estado-completada fw-bold text-success text-end">Completada</span>
                                                </div>
                                            </div>

                                            <button type="button" class="btn-mensaje btn btn-success text-white rounded-pill py-2 px-3 fw-semibold d-flex align-items-center justify-content-center gap-2 w-100 btn-abrir-modal">
                                                <ion-icon name="chatbox-ellipses-outline"></ion-icon>
                                                Enviar Mensaje
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button class="btn-carrusel next btn btn-outline-success rounded-circle d-inline-flex align-items-center justify-content-center flex-shrink-0"
                                id="btnNext" type="button" aria-label="Siguiente" >
                                <ion-icon name="chevron-forward-outline"></ion-icon>
                            </button>
                        </div>

                    </section>
                </div>
            </main>
        </div>
    </div>

    <!-- MODAL ENVIAR MENSAJE -->
    <div class="modal-overlay d-none" id="modalMensaje">
        <div class="modal fade show d-block bg-dark bg-opacity-50" tabindex="-1" aria-labelledby="modalMensajeLabel" aria-modal="true" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-contenido modal-content bg-white text-success rounded-4 shadow border border-success">
                    <div class="modal-header bg-success text-white rounded-top-4">
                        <h2 class="modal-titulo modal-title h5 fw-bold text-white mb-0" id="modalMensajeLabel">Enviar Mensaje a <span id="modalNombreAprendiz">Jairo Andrés</span></h2>
                        <button type="button" class="btn-close btn-close-white" id="btnCerrarModalX" aria-label="Cerrar"></button>
                    </div>

                    <form id="formMensaje" onsubmit="event.preventDefault();">
                        <div class="modal-body p-4">
                            <div class="grupo-input mb-3">
                                <label for="tituloMensaje" class="modal-label form-label fw-semibold text-success">Título del Mensaje</label>
                                <input type="text" id="tituloMensaje" class="modal-input form-control border-success text-success"
                                    placeholder="Ej. Corrección postural en press" required>
                            </div>

                            <div class="grupo-input mb-0">
                                <label for="cuerpoMensaje" class="modal-label form-label fw-semibold text-success">Mensaje / Recomendación</label>
                                <textarea id="cuerpoMensaje" class="modal-textarea form-control border-success text-success" rows="4"
                                    placeholder="Escribe aquí tu recomendación deportiva para el aprendiz..." required></textarea>
                            </div>
                        </div>

                        <div class="modal-acciones modal-footer border-top border-success">
                            <button type="button" class="btn-modal-cancelar btn btn-outline-success rounded-pill px-4 fw-semibold" id="btnCerrarModal">Cancelar</button>
                            <button type="submit" class="btn-modal-enviar btn btn-success text-white rounded-pill px-4 fw-semibold d-inline-flex align-items-center gap-1" id="btnEnviarMensaje">
                                <ion-icon name="send-outline"></ion-icon> Enviar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================================ -->
    <!-- MODAL DE PERFIL & DATOS DE CONTACTO -->
    <!-- ============================================================ -->
    <div class="modal-overlay d-none" id="modalPerfilOverlay">
        <div class="modal fade show d-block bg-dark bg-opacity-50" tabindex="-1" aria-labelledby="modalPerfilLabel" aria-modal="true" role="dialog">
            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-perfil-container modal-content bg-white text-success rounded-4 shadow border border-success">
                    <!-- Encabezado del Modal -->
                    <div class="modal-perfil-header modal-header bg-success text-white rounded-top-4">
                        <div class="header-info d-flex align-items-center gap-3">
                            <div class="header-icon bg-white text-success rounded-circle d-flex align-items-center justify-content-center fs-4 flex-shrink-0"
                                >
                                <ion-icon name="person-outline"></ion-icon>
                            </div>
                            <div>
                                <h2 class="modal-title h5 fw-bold text-white mb-0" id="modalPerfilLabel">Mi Perfil &amp; Datos de Contacto</h2>
                                <p class="small text-white mb-0">Actualiza tus canales de notificación y bioseguridad</p>
                            </div>
                        </div>
                        <button type="button" class="btn-close-modal btn-close btn-close-white" id="btnClosePerfil" aria-label="Cerrar modal"></button>
                    </div>

                    <!-- Cuerpo del Modal -->
                    <div class="modal-perfil-body modal-body p-4">

                        <!-- Sección: Foto de Perfil -->
                        <div class="card-seccion border border-success rounded-4 p-3 mb-4 d-flex flex-wrap align-items-center gap-3">
                            <div class="avatar-preview flex-shrink-0">
                                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=200&q=80"
                                    alt="Foto de perfil" class="rounded-circle object-fit-cover border border-success" width="72" height="72">
                            </div>
                            <div class="avatar-actions flex-grow-1">
                                <span class="seccion-label d-block fw-bold text-success mb-2">Fotografía del Perfil</span>
                                <div class="button-group d-flex flex-wrap gap-2">
                                    <button type="button" class="btn-secondary-outline btn btn-outline-success rounded-pill px-3 py-1 fw-semibold">
                                        <ion-icon name="camera-outline"></ion-icon> Cambiar Foto
                                    </button>
                                    <button type="button" class="btn-danger-outline btn btn-success text-white rounded-pill px-3 py-1 fw-semibold">
                                        <ion-icon name="trash-outline"></ion-icon> Quitar
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Sección: Información Personal (Solo lectura) -->
                        <div class="card-seccion grid-info row g-3 border border-success rounded-4 p-3 mb-4">
                            <div class="col-12 col-sm-6">
                                <div class="info-item">
                                    <span class="info-label small fw-bold text-success d-block">NOMBRES Y APELLIDOS</span>
                                    <strong class="info-value text-success">Jairo Andrés Pérez Gómez</strong>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="info-item">
                                    <span class="info-label small fw-bold text-success d-block">DOCUMENTO</span>
                                    <strong class="info-value text-success">CC 1002345678</strong>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="info-item">
                                    <span class="info-label small fw-bold text-success d-block">FICHA DE FORMACIÓN</span>
                                    <strong class="info-value highlight-green text-success">2694520</strong>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="info-item">
                                    <span class="info-label small fw-bold text-success d-block">ROL EN EL SISTEMA</span>
                                    <strong class="info-value text-success">Aprendiz</strong>
                                </div>
                            </div>
                        </div>

                        <!-- Sección: Formulario de Contacto -->
                        <form id="formPerfil" class="form-perfil mb-4">
                            <div class="form-group mb-3">
                                <label for="correo" class="form-label fw-semibold text-success">Correo Electrónico (Institucional o Personal) *</label>
                                <div class="input-icon-wrapper input-group">
                                    <span class="input-group-text bg-white text-success border-success">
                                        <ion-icon name="mail-outline"></ion-icon>
                                    </span>
                                    <input type="email" id="correo" class="form-control border-success text-success" value="jairo.perez@misena.edu.co" required>
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label for="telefono" class="form-label fw-semibold text-success">Teléfono Celular *</label>
                                <div class="input-icon-wrapper input-group">
                                    <span class="input-group-text bg-white text-success border-success">
                                        <ion-icon name="call-outline"></ion-icon>
                                    </span>
                                    <input type="tel" id="telefono" class="form-control border-success text-success" value="3124567890" required>
                                </div>
                            </div>

                            <div class="form-group mb-0">
                                <label for="contactoEmergencia" class="form-label fw-semibold text-success">Contacto de Emergencia / Acudiente</label>
                                <div class="input-icon-wrapper input-group">
                                    <span class="input-group-text bg-white text-success border-success">
                                        <ion-icon name="call-outline"></ion-icon>
                                    </span>
                                    <input type="tel" id="contactoEmergencia" class="form-control border-success text-success" value="3159876543">
                                </div>
                            </div>
                        </form>

                        <!-- Sección: Zona de Seguridad -->
                        <div class="card-seccion zona-peligro border border-success rounded-4 p-3">
                            <div class="peligro-header d-flex align-items-center gap-2 fw-bold text-success mb-1">
                                <ion-icon name="warning-outline"></ion-icon>
                                <strong>Zona de Seguridad de Cuenta</strong>
                            </div>
                            <p class="small text-success mb-2">Puedes radicar una solicitud formal para cancelar tu cuenta de AGROFIT y transferir tu historial
                                lúdico.</p>
                            <a href="#" class="link-eliminar small fw-bold text-success text-decoration-none">Solicitar eliminación permanente de mi cuenta</a>
                        </div>

                    </div>

                    <!-- Pie del Modal (Acciones) -->
                    <div class="modal-perfil-footer modal-footer border-top border-success">
                        <button type="button" class="btn-cancelar btn btn-outline-success rounded-pill px-4 fw-semibold" id="btnCancelPerfil">Cancelar</button>
                        <button type="submit" form="formPerfil" class="btn-guardar btn btn-success text-white rounded-pill px-4 fw-semibold d-inline-flex align-items-center gap-1">
                            <ion-icon name="save-outline"></ion-icon> Guardar Cambios
                        </button>
                    </div>
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