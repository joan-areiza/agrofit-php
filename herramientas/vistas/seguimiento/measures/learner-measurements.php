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
                    <a href="../../../../src/features/measurements/learner-measurements/learner-measurements.html" class="enlace-nav activo nav-link bg-white text-success fw-bold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
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
                    <a href="../../../../src/features/attendance/learner-attendance/learner-attendance.html" class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
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
                                <a href="../../../../src/features/measurements/learner-measurements/learner-measurements.html" class="enlace-nav activo nav-link bg-white text-success fw-bold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
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
                                <a href="../../../../src/features/attendance/learner-attendance/learner-attendance.html" class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
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
                    <section id="valoracion-biometrica" class="seccion-evaluacion bg-white text-success border border-success rounded-4 p-4 p-md-5 shadow-sm">
                        <!-- ENCABEZADO DEL MÓDULO -->
                        <header class="evaluacion-header d-flex flex-column flex-md-row justify-content-between align-items-stretch align-items-md-start gap-3 mb-4 pb-3 border-bottom border-success">
                            <div class="header-info-principal">
                                <span class="badge-subtitulo badge bg-success text-white rounded-pill px-3 py-2 fw-bold mb-2 d-inline-flex align-items-center gap-1">
                                    <ion-icon name="pulse-outline"></ion-icon>
                                    MÓDULO DE EVALUACIÓN
                                </span>
                                <h1 class="h2 fw-bold text-success mb-1">Valoración Biométrica y Técnica</h1>
                                <p class="descripcion-header text-success mb-0">Captura de parámetros físicos para la optimización de la rutina de
                                    entrenamiento.</p>
                            </div>
                            <div class="tarjeta-aprendiz card bg-white text-success border border-success rounded-4 px-3 py-2 d-flex flex-row align-items-center gap-3 shadow-sm flex-shrink-0">
                                <div class="info-aprendiz d-flex flex-column">
                                    <span class="label-aprendiz small fw-bold text-success">APRENDIZ</span>
                                    <span class="nombre-aprendiz fw-bold text-success">Juan Pérez</span>
                                </div>
                                <span class="id-aprendiz badge bg-success text-white rounded-pill px-3 py-2 fw-semibold">ID-88291</span>
                            </div>
                        </header>

                        <!-- CONTENIDO PRINCIPAL EN GRID (DOS COLUMNAS) -->
                        <div class="grid-evaluacion row g-4">
                            <!-- COLUMNA IZQUIERDA -->
                            <div class="col-12 col-lg-6">
                                <div class="columna-evaluacion d-flex flex-column gap-4">
                                    <!-- BLOQUE 1: DATOS ANTROPOMÉTRICOS -->
                                    <div class="tarjeta-evaluacion card bg-white text-success border border-success rounded-4 p-3 p-md-4 shadow-sm">
                                        <div class="titulo-tarjeta d-flex align-items-start gap-3 mb-3">
                                            <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center fs-5 flex-shrink-0"
                                                >
                                                <ion-icon name="scale-outline"></ion-icon>
                                            </div>
                                            <div>
                                                <h3 class="h5 fw-bold text-success mb-1">Datos Antropométricos</h3>
                                                <span class="subtexto-tarjeta small text-success d-block">Medidas básicas para el cálculo de tasas
                                                    metabólicas.</span>
                                            </div>
                                        </div>

                                        <div class="grid-medidas row g-2 mb-3">
                                            <div class="col-12 col-sm-4">
                                                <div class="input-grupo">
                                                    <label for="peso" class="form-label small fw-bold text-success d-flex align-items-center gap-1 mb-1">
                                                        <ion-icon name="scale-outline"></ion-icon> PESO ACTUAL
                                                    </label>
                                                    <div class="input-unidad input-group">
                                                        <input type="number" id="peso" class="form-control border-success text-success fw-semibold" value="75" min="0" step="0.1">
                                                        <span class="unidad input-group-text bg-white text-success border-success fw-semibold">kg</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <div class="input-grupo">
                                                    <label for="altura" class="form-label small fw-bold text-success d-flex align-items-center gap-1 mb-1">
                                                        <ion-icon name="resize-outline"></ion-icon> ALTURA
                                                    </label>
                                                    <div class="input-unidad input-group">
                                                        <input type="number" id="altura" class="form-control border-success text-success fw-semibold" value="178" min="0">
                                                        <span class="unidad input-group-text bg-white text-success border-success fw-semibold">cm</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <div class="card-imc border border-success rounded-3 p-2 h-100 d-flex flex-column justify-content-center bg-white">
                                                    <div class="imc-label small fw-bold text-success d-flex align-items-center gap-1">
                                                        <ion-icon name="trending-up-outline"></ion-icon> IMC SUGERIDO
                                                    </div>
                                                    <div class="imc-resultado d-flex align-items-center justify-content-between gap-2 mt-1">
                                                        <span id="valor-imc" class="fs-5 fw-bold text-success">23.7</span>
                                                        <span id="estado-imc" class="badge-imc imc-normal badge bg-success text-white rounded-pill px-2 py-1 fw-semibold">Normal</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="seccion-perimetros">
                                            <label class="titulo-subgrupo small fw-bold text-success d-block mb-2">PERÍMETROS MUSCULARES (MM)</label>
                                            <div class="grid-perimetros row g-2">
                                                <div class="col-6">
                                                    <input type="number" id="pecho" class="form-control border-success text-success fw-semibold" placeholder="Pecho">
                                                </div>
                                                <div class="col-6">
                                                    <input type="number" id="cintura" class="form-control border-success text-success fw-semibold" placeholder="Cintura">
                                                </div>
                                                <div class="col-6">
                                                    <input type="number" id="brazos" class="form-control border-success text-success fw-semibold" placeholder="Brazos">
                                                </div>
                                                <div class="col-6">
                                                    <input type="number" id="piernas" class="form-control border-success text-success fw-semibold" placeholder="Piernas">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- BLOQUE 2: CONDICIONES MÉDICAS Y RIESGOS -->
                                    <div class="tarjeta-evaluacion card bg-white text-success border border-success rounded-4 p-3 p-md-4 shadow-sm">
                                        <div class="titulo-tarjeta d-flex align-items-start gap-3 mb-3">
                                            <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center fs-5 flex-shrink-0"
                                                >
                                                <ion-icon name="heart-outline" class="icono-rojo"></ion-icon>
                                            </div>
                                            <div>
                                                <h3 class="h5 fw-bold text-success mb-1">Condiciones Médicas y Riesgos</h3>
                                                <span class="subtexto-tarjeta small text-success d-block">Identificación de limitaciones para la seguridad del
                                                    aprendiz.</span>
                                            </div>
                                        </div>

                                        <div class="grid-checkboxes row g-2 mb-3">
                                            <div class="col-6 col-sm-4">
                                                <div class="form-check">
                                                    <input class="form-check-input border-success" type="checkbox" id="cond-diabetes">
                                                    <label class="form-check-label small fw-semibold text-success" for="cond-diabetes">Diabetes</label>
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-4">
                                                <div class="form-check">
                                                    <input class="form-check-input border-success" type="checkbox" id="cond-epoc">
                                                    <label class="form-check-label small fw-semibold text-success" for="cond-epoc">EPOC</label>
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-4">
                                                <div class="form-check">
                                                    <input class="form-check-input border-success" type="checkbox" id="cond-hipertension">
                                                    <label class="form-check-label small fw-semibold text-success" for="cond-hipertension">Hipertensión</label>
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-4">
                                                <div class="form-check">
                                                    <input class="form-check-input border-success" type="checkbox" id="cond-asma" checked>
                                                    <label class="form-check-label small fw-semibold text-success" for="cond-asma">Asma</label>
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-4">
                                                <div class="form-check">
                                                    <input class="form-check-input border-success" type="checkbox" id="cond-lesiones">
                                                    <label class="form-check-label small fw-semibold text-success" for="cond-lesiones">Lesiones Previas</label>
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-4">
                                                <div class="form-check">
                                                    <input class="form-check-input border-success" type="checkbox" id="cond-otros">
                                                    <label class="form-check-label small fw-semibold text-success" for="cond-otros">Otros</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="seccion-adjunto">
                                            <label for="archivo-medico" class="titulo-subgrupo small fw-bold text-success d-block mb-2">Adjuntar Documentación Médica (Opcional)</label>
                                            <div class="zona-drop border border-success rounded-4 p-4 text-center bg-white position-relative" id="zona-drop">
                                                <input type="file" id="archivo-medico" accept=".pdf,.jpg,.jpeg,.png"
                                                    class="input-archivo-oculto position-absolute top-0 start-0 w-100 h-100 opacity-0" style="cursor: pointer;">
                                                <div class="contenido-drop d-flex flex-column align-items-center gap-1">
                                                    <div class="icono-drop bg-success text-white rounded-circle d-flex align-items-center justify-content-center fs-4 mb-1"
                                                        >
                                                        <ion-icon name="cloud-upload-outline"></ion-icon>
                                                    </div>
                                                    <p id="texto-drop" class="small fw-bold text-success mb-0">Haga clic o arrastre certificados de EPS</p>
                                                    <span class="subtexto-drop small text-success">Formatos permitidos: PDF, JPG (Máx 5MB)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- COLUMNA DERECHA -->
                            <div class="col-12 col-lg-6">
                                <div class="columna-evaluacion d-flex flex-column gap-4">
                                    <!-- BLOQUE 3: NIVEL DE ACTIVIDAD DIARIA -->
                                    <div class="tarjeta-evaluacion card bg-white text-success border border-success rounded-4 p-3 p-md-4 shadow-sm">
                                        <h3 class="h5 fw-bold text-success mb-1">Nivel de Actividad Diaria</h3>
                                        <span class="subtexto-tarjeta small text-success d-block mb-3">Estilo de vida fuera del gimnasio.</span>

                                        <div class="contenedor-range">
                                            <input type="range" id="actividad-slider" min="1" max="3" value="2" step="1"
                                                class="slider-actividad form-range">
                                            <div class="labels-slider d-flex justify-content-between mt-2">
                                                <span data-step="1" class="small fw-bold text-success">SEDENTARIO</span>
                                                <span data-step="2" class="activo small fw-bold text-success text-decoration-underline">MODERADO</span>
                                                <span data-step="3" class="small fw-bold text-success">ATLETA</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- BLOQUE 4: COMPLEXIÓN FÍSICA -->
                                    <div class="tarjeta-evaluacion card bg-white text-success border border-success rounded-4 p-3 p-md-4 shadow-sm">
                                        <h3 class="h5 fw-bold text-success mb-3">Complexión Física</h3>
                                        <div class="opciones-complexion d-flex flex-column gap-2">
                                            <div class="opcion-card border border-success rounded-3 p-3 d-flex align-items-center gap-3 bg-white" data-complexion="ectomorfo" role="button" tabindex="0">
                                                <div class="avatar-letra bg-success text-white rounded-circle d-flex align-items-center justify-content-center fw-bold flex-shrink-0"
                                                    >E</div>
                                                <div class="info-card flex-grow-1">
                                                    <h4 class="h6 fw-bold text-success mb-0">Ectomorfo</h4>
                                                    <p class="small text-success mb-0">Complexión delgada, metabolismo rápido.</p>
                                                </div>
                                                <ion-icon name="checkmark-circle-outline" class="icono-check fs-4 text-success flex-shrink-0"></ion-icon>
                                            </div>

                                            <div class="opcion-card seleccionada border border-success rounded-3 p-3 d-flex align-items-center gap-3 bg-white" data-complexion="mesomorfo" role="button" tabindex="0">
                                                <div class="avatar-letra badge-verde bg-success text-white rounded-circle d-flex align-items-center justify-content-center fw-bold flex-shrink-0"
                                                    >M</div>
                                                <div class="info-card flex-grow-1">
                                                    <h4 class="h6 fw-bold text-success mb-0">Mesomorfo</h4>
                                                    <p class="small text-success mb-0">Complexión atlética, gana músculo fácil.</p>
                                                </div>
                                                <ion-icon name="checkmark-circle" class="icono-check fs-4 text-success flex-shrink-0"></ion-icon>
                                            </div>

                                            <div class="opcion-card border border-success rounded-3 p-3 d-flex align-items-center gap-3 bg-white" data-complexion="endomorfo" role="button" tabindex="0">
                                                <div class="avatar-letra bg-success text-white rounded-circle d-flex align-items-center justify-content-center fw-bold flex-shrink-0"
                                                    >E</div>
                                                <div class="info-card flex-grow-1">
                                                    <h4 class="h6 fw-bold text-success mb-0">Endomorfo</h4>
                                                    <p class="small text-success mb-0">Complexión robusta, tendencia a reserva.</p>
                                                </div>
                                                <ion-icon name="checkmark-circle-outline" class="icono-check fs-4 text-success flex-shrink-0"></ion-icon>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- ALERTA / ESTADO DE VALIDACIÓN -->
                                    <div class="alerta-incompleto alert bg-white text-success border border-success rounded-4 p-3 d-flex align-items-start gap-3 mb-0 shadow-sm" id="alerta-estado" role="alert">
                                        <ion-icon name="alert-circle-outline" class="fs-4 text-success flex-shrink-0 mt-1"></ion-icon>
                                        <div>
                                            <h4 class="h6 fw-bold text-success mb-1">Información Incompleta</h4>
                                            <p class="small text-success mb-0">Debe completar al menos Peso, Altura y Perímetro de Pecho para habilitar el guardado.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- BOTÓN DE GUARDADO -->
                                    <button type="button" class="btn-guardar btn btn-success text-white rounded-pill py-3 px-4 fw-semibold d-flex align-items-center justify-content-center gap-2 w-100" id="btn-guardar-valoracion" disabled>
                                        <span>Guardar Valoración y Continuar</span>
                                        <ion-icon name="arrow-forward-outline"></ion-icon>
                                    </button>

                                    <div class="pie-alerta-veridicos d-flex align-items-center justify-content-center gap-2 small fw-bold text-success text-center">
                                        <ion-icon name="information-circle-outline"></ion-icon>
                                        <span>ASEGÚRESE DE QUE LOS DATOS SON VERÍDICOS</span>
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