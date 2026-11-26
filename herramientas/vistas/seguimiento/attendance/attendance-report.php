<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agrofit | Modulo - Aprendiz</title>
    <link rel="icon" type="image/png" href="../../../public/assets/img/sena-logo.png">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


</head>

<body class="bg-white text-success min-vh-100 d-flex flex-column">

    <header class="navbar navbar-expand-lg navbar-dark bg-success sticky-top shadow-sm py-3">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center gap-3">
                <a class="navbar-brand d-flex align-items-center m-0" href="../../../../src/features/dashboards/learner-dashboard/learner-dashboard.html">
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
            <h5 class="offcanvas-title fw-bold text-white" id="mobileMenuLabel">AGROFIT • APRENDIZ</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Cerrar"></button>
        </div>
        <div class="offcanvas-body d-flex flex-column justify-content-between py-4">
            <nav class="nav-barra-lateral d-flex flex-column gap-2">
                <div class="item-nav">
                    <a href="../../../../src/features/dashboards/learner-dashboard/learner-dashboard.html" class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                        <ion-icon name="home"></ion-icon> Inicio
                    </a>
                </div>

                <div class="item-nav">
                    <a href="../../../../src/features/measurements/learner-measurements/learner-measurements.html" class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                        <ion-icon name="person"></ion-icon> Medidas
                    </a>
                </div>

                <div class="item-nav">
                    <a href="../../../../src/features/orientation/adaptation-week/adaptation-week.html" class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                        <ion-icon name="barbell"></ion-icon> Semana de Adaptación
                    </a>
                </div>

                <div class="item-nav">
                    <a href="../../../../src/features/routines/learner-routines/learner-routines.html" class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                        <ion-icon name="clipboard"></ion-icon> Rutinas
                    </a>
                </div>

                <div class="item-nav">
                    <a href="../../../../src/features/attendance/learner-attendance/learner-attendance.html" class="enlace-nav activo nav-link bg-white text-success fw-bold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                        <ion-icon name="checkmark-circle"></ion-icon> Asistencia
                    </a>
                </div>

                <div class="item-nav">
                    <a href="../../../../src/features/progress/routine-progress/routine-progress.html" class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                        <ion-icon name="sparkles"></ion-icon> Progreso
                    </a>
                </div>

                <div class="item-nav">
                    <a href="../../../../src/features/messaging/learner-messages/learner-messages.html" class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
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
                                    <span class="texto-marca small text-white fw-medium">Aprendiz</span>
                                    <span class="version-marca fw-semibold text-white">Juan Perez</span>
                                </div>
                            </div>
                        </div>

                        <!-- Navegación: enlaces a cada módulo/sección de la plataforma -->
                        <nav class="nav-barra-lateral d-flex flex-column gap-2">

                            <div class="item-nav">
                                <a href="../../../../src/features/dashboards/learner-dashboard/learner-dashboard.html" class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                                    <ion-icon name="home"></ion-icon> Inicio
                                </a>
                            </div>

                            <div class="item-nav">
                                <a href="../../../../src/features/measurements/learner-measurements/learner-measurements.html" class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                                    <ion-icon name="person"></ion-icon> Medidas
                                </a>
                            </div>

                            <div class="item-nav">
                                <a href="../../../../src/features/orientation/adaptation-week/adaptation-week.html" class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                                    <ion-icon name="barbell"></ion-icon> Semana de Adaptación
                                </a>
                            </div>

                            <div class="item-nav">
                                <a href="../../../../src/features/routines/learner-routines/learner-routines.html" class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                                    <ion-icon name="clipboard"></ion-icon> Rutinas
                                </a>
                            </div>

                            <div class="item-nav">
                                <a href="../../../../src/features/attendance/learner-attendance/learner-attendance.html" class="enlace-nav activo nav-link bg-white text-success fw-bold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                                    <ion-icon name="checkmark-circle"></ion-icon> Asistencia
                                </a>
                            </div>

                            <div class="item-nav">
                                <a href="../../../../src/features/progress/routine-progress/routine-progress.html" class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                                    <ion-icon name="sparkles"></ion-icon> Progreso
                                </a>
                            </div>

                            <div class="item-nav">
                                <a href="../../../../src/features/messaging/learner-messages/learner-messages.html" class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
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
                    <!-- ============================================================ -->
                    <!-- SECTION -->
                    <!-- ============================================================ -->
                    <section id="historial-asistencia" class="historial-container bg-white text-success border border-success rounded-4 p-4 p-md-5 shadow-sm">

                        <!-- Encabezado de la Sección -->
                        <header class="historial-header d-flex flex-column flex-md-row justify-content-between align-items-stretch align-items-md-start gap-3 mb-4 pb-3 border-bottom border-success">
                            <div class="header-texto">
                                <h1 class="h2 fw-bold text-success mb-1">Mi Historial de Asistencias</h1>
                                <p class="text-success mb-0">Monitorea tu disciplina y constancia. Aquí puedes ver el estado de tus solicitudes de asistencia enviadas tras cada entrenamiento.</p>
                            </div>
                            <!-- Botón para ir al módulo de registro de asistencia -->
                            <a href="../../../../src/features/attendance/learner-attendance/learner-attendance.html"
                                class="btn-accion-header btn btn-success text-white rounded-pill py-2 px-4 fw-semibold d-inline-flex align-items-center justify-content-center gap-2 text-decoration-none flex-shrink-0">
                                <ion-icon name="add-circle-outline"></ion-icon>
                                Registrar Hoy
                            </a>
                        </header>

                        <!-- Grid de Tarjetas de Métricas Superior -->
                        <div class="grid-metricas row g-3 mb-4">
                            <!-- Tarjeta 1: Sesiones Totales -->
                            <div class="col-12 col-sm-6 col-xl-3">
                                <article class="tarjeta-metrica card bg-white text-success border border-success rounded-4 h-100 p-3 shadow-sm">
                                    <div class="metrica-top d-flex justify-content-between align-items-center mb-2">
                                        <div class="icono-metrica verde bg-success text-white rounded-circle d-flex align-items-center justify-content-center fs-5 flex-shrink-0"
                                            >
                                            <ion-icon name="checkmark-circle-outline"></ion-icon>
                                        </div>
                                        <span class="badge-periodo badge bg-white text-success border border-success rounded-pill px-3 py-1 fw-semibold">Mensual</span>
                                    </div>
                                    <span class="label-metrica small fw-bold text-success">Sesiones Totales</span>
                                    <span class="valor-metrica fs-2 fw-bold text-success my-1">14</span>
                                    <div class="comparativa-metrica d-flex align-items-center gap-1 small text-success">
                                        <ion-icon name="trending-up-outline"></ion-icon>
                                        <span>2 más que el mes pasado</span>
                                    </div>
                                </article>
                            </div>

                            <!-- Tarjeta 2: Constancia Mensual -->
                            <div class="col-12 col-sm-6 col-xl-3">
                                <article class="tarjeta-metrica card bg-white text-success border border-success rounded-4 h-100 p-3 shadow-sm">
                                    <div class="metrica-top d-flex justify-content-between align-items-center mb-2">
                                        <div class="icono-metrica verde bg-success text-white rounded-circle d-flex align-items-center justify-content-center fs-5 flex-shrink-0"
                                            >
                                            <ion-icon name="disc-outline"></ion-icon>
                                        </div>
                                        <span class="badge-periodo badge bg-white text-success border border-success rounded-pill px-3 py-1 fw-semibold">Mensual</span>
                                    </div>
                                    <span class="label-metrica small fw-bold text-success">Constancia Mensual</span>
                                    <span class="valor-metrica fs-2 fw-bold text-success my-1">85%</span>
                                    <div class="comparativa-metrica d-flex align-items-center gap-1 small text-success">
                                        <ion-icon name="trending-up-outline"></ion-icon>
                                        <span>Superas tu promedio</span>
                                    </div>
                                </article>
                            </div>

                            <!-- Tarjeta 3: Registros Oficiales -->
                            <div class="col-12 col-sm-6 col-xl-3">
                                <article class="tarjeta-metrica card bg-white text-success border border-success rounded-4 h-100 p-3 shadow-sm">
                                    <div class="metrica-top d-flex justify-content-between align-items-center mb-2">
                                        <div class="icono-metrica verde bg-success text-white rounded-circle d-flex align-items-center justify-content-center fs-5 flex-shrink-0"
                                            >
                                            <ion-icon name="shield-checkmark-outline"></ion-icon>
                                        </div>
                                        <span class="badge-periodo badge bg-white text-success border border-success rounded-pill px-3 py-1 fw-semibold">Mensual</span>
                                    </div>
                                    <span class="label-metrica small fw-bold text-success">Registros Oficiales</span>
                                    <span class="valor-metrica fs-2 fw-bold text-success my-1">12</span>
                                    <div class="comparativa-metrica d-flex align-items-center gap-1 small text-success">
                                        <ion-icon name="trending-up-outline"></ion-icon>
                                        <span>Confirmados por instructor</span>
                                    </div>
                                </article>
                            </div>

                            <!-- Tarjeta 4: Pendientes -->
                            <div class="col-12 col-sm-6 col-xl-3">
                                <article class="tarjeta-metrica card bg-white text-success border border-success rounded-4 h-100 p-3 shadow-sm">
                                    <div class="metrica-top d-flex justify-content-between align-items-center mb-2">
                                        <div class="icono-metrica gris bg-success text-white rounded-circle d-flex align-items-center justify-content-center fs-5 flex-shrink-0"
                                            >
                                            <ion-icon name="time-outline"></ion-icon>
                                        </div>
                                        <span class="badge-periodo badge bg-white text-success border border-success rounded-pill px-3 py-1 fw-semibold">Mensual</span>
                                    </div>
                                    <span class="label-metrica small fw-bold text-success">Pendientes</span>
                                    <span class="valor-metrica fs-2 fw-bold text-success my-1">02</span>
                                    <div class="comparativa-metrica d-flex align-items-center gap-1 small text-success">
                                        <ion-icon name="trending-up-outline"></ion-icon>
                                        <span>En revisión técnica</span>
                                    </div>
                                </article>
                            </div>
                        </div>

                        <!-- Sección Principal: Gráfica + Resumen -->
                        <div class="grid-panel-grafica row g-4">

                            <!-- Panel Izquierdo: Gráfica de Actividad -->
                            <div class="col-12 col-lg-8">
                                <div class="card-panel card bg-white text-success border border-success rounded-4 h-100 p-3 p-md-4 shadow-sm">
                                    <div class="panel-header mb-3">
                                        <h2 class="h5 fw-bold text-success d-flex align-items-center gap-2 mb-1">
                                            <ion-icon name="trending-up-outline" class="icono-titulo"></ion-icon>
                                            Actividad por Semanas (Mayo)
                                        </h2>
                                        <p class="small text-success mb-0">Frecuencia de entrenamiento semanal</p>
                                    </div>

                                    <!-- Gráfica de Barras con utilidades de Bootstrap -->
                                    <div class="grafica-wrapper d-flex align-items-end gap-3 pt-3" >
                                        <div class="lineas-guia d-flex flex-column justify-content-between h-100 small fw-semibold text-success pe-2">
                                            <span>8</span>
                                            <span>6</span>
                                            <span>4</span>
                                            <span>2</span>
                                            <span>0</span>
                                        </div>
                                        <div class="barras-contenedor flex-grow-1 h-100 border-bottom border-success border-dashed d-flex justify-content-around align-items-end gap-2 pt-2">
                                            <div class="columna-barra d-flex flex-column align-items-center justify-content-end h-100 flex-fill" >
                                                <div class="barra w-100 bg-success rounded-top-3"  data-valor="4"></div>
                                                <span class="label-semana small fw-semibold text-success mt-2 text-center">Semana 1</span>
                                            </div>
                                            <div class="columna-barra d-flex flex-column align-items-center justify-content-end h-100 flex-fill" >
                                                <div class="barra w-100 bg-success rounded-top-3"  data-valor="3"></div>
                                                <span class="label-semana small fw-semibold text-success mt-2 text-center">Semana 2</span>
                                            </div>
                                            <div class="columna-barra d-flex flex-column align-items-center justify-content-end h-100 flex-fill" >
                                                <div class="barra w-100 bg-success rounded-top-3"  data-valor="5"></div>
                                                <span class="label-semana small fw-semibold text-success mt-2 text-center">Semana 3</span>
                                            </div>
                                            <div class="columna-barra d-flex flex-column align-items-center justify-content-end h-100 flex-fill" >
                                                <div class="barra w-100 bg-success rounded-top-3"  data-valor="2"></div>
                                                <span class="label-semana small fw-semibold text-success mt-2 text-center">Semana 4</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Panel Derecho: Resumen del Mes -->
                            <div class="col-12 col-lg-4">
                                <div class="card-panel card-resumen card bg-white text-success border border-success rounded-4 h-100 p-3 p-md-4 shadow-sm d-flex flex-column justify-content-between">
                                    <div>
                                        <h2 class="h5 fw-bold text-success mb-3">Resumen de Mayo</h2>

                                        <!-- Barra de Progreso del Objetivo -->
                                        <div class="meta-progreso-wrapper mb-4">
                                            <div class="meta-progreso-info d-flex justify-content-between small text-success mb-2">
                                                <span class="fw-semibold">Objetivo Mensual</span>
                                                <strong class="fw-bold">12 / 16 sesiones</strong>
                                            </div>
                                            <div class="barra-progreso-bg progress border border-success rounded-pill bg-white" >
                                                <div class="barra-progreso-fill progress-bar bg-success" role="progressbar" 
                                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                        <!-- Detalles del Resumen -->
                                        <div class="grid-resumen-detalles row g-2 mb-3">
                                            <div class="col-6">
                                                <div class="caja-resumen border border-success rounded-3 p-3 h-100 d-flex flex-column">
                                                    <span class="label-resumen small fw-bold text-success">MÁS FRECUENTE</span>
                                                    <strong class="valor-resumen fw-bold text-success mt-1">Pierna / Core</strong>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="caja-resumen border border-success rounded-3 p-3 h-100 d-flex flex-column">
                                                    <span class="label-resumen small fw-bold text-success">INSTRUCTOR GUÍA</span>
                                                    <strong class="valor-resumen fw-bold text-success mt-1">Carlos Ruiz</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <p class="nota-motivacional small fst-italic text-success mb-0 pt-3 border-top border-success">
                                        "¡Vas por buen camino, Juan! Te faltan solo 4 sesiones aprobadas para alcanzar tu medalla de constancia de este mes."
                                    </p>
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