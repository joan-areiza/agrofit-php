<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agrofit | Rutinas Diarias</title>
    <link rel="icon" type="image/png" href="../../../public/assets/img/sena-logo.png">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body class="bg-white text-success min-vh-100 d-flex flex-column">
    <header class="navbar navbar-expand-lg navbar-dark bg-success sticky-top shadow-sm py-3">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center gap-3">
                <a class="navbar-brand d-flex align-items-center m-0"
                    href="../../../../src/features/dashboards/learner-dashboard/learner-dashboard.html">
                    <img src="../../../public/assets/img/agrofit-logo.png" alt="Logo de la plataforma" class="logo-agrofit" height="50">
                </a>

                <div class="marca-barra-lateral d-flex align-items-center gap-2 text-white" id="btnPerfil" role="button" tabindex="0">
                    <span class="icono-perfil d-inline-flex align-items-center justify-content-center bg-white text-success rounded-circle fs-5">
                        <ion-icon name="person"></ion-icon>
                    </span>
                    <span class="version-marca fw-semibold text-white">Juan Perez</span>
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
                    <a href="#" class="btn btn-light text-success rounded-pill px-4 fw-semibold btn-logout" id="btnLogout">Cerrar Sesión</a>
                </div>
            </div>
        </div>
    </header>

    <div class="offcanvas offcanvas-end bg-success text-white" tabindex="-1" id="mobile-menu"
        aria-labelledby="mobileMenuLabel">
        <div class="offcanvas-header border-bottom border-white">
            <h5 class="offcanvas-title fw-bold text-white" id="mobileMenuLabel">AGROFIT • APRENDIZ</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Cerrar"></button>
        </div>
        <div class="offcanvas-body d-flex flex-column justify-content-between py-4">
            <nav class="nav-barra-lateral d-flex flex-column gap-2">
                <a href="../../../../src/features/dashboards/learner-dashboard/learner-dashboard.html"
                    class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                    <ion-icon name="home"></ion-icon> Inicio
                </a>
                <a href="../../../../src/features/measurements/learner-measurements/learner-measurements.html"
                    class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                    <ion-icon name="person"></ion-icon> Medidas
                </a>
                <a href="../../../../src/features/orientation/adaptation-week/adaptation-week.html"
                    class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                    <ion-icon name="barbell"></ion-icon> Semana de Adaptación
                </a>
                <a href="../../../../src/features/routines/learner-routines/learner-routines.html"
                    class="enlace-nav activo nav-link bg-white text-success fw-bold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                    <ion-icon name="clipboard"></ion-icon> Rutinas
                </a>
                <a href="../../../../src/features/attendance/learner-attendance/learner-attendance.html"
                    class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                    <ion-icon name="checkmark-circle"></ion-icon> Asistencia
                </a>
                <a href="../../../../src/features/progress/routine-progress/routine-progress.html"
                    class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                    <ion-icon name="sparkles"></ion-icon> Progreso
                </a>
                <a href="../../../../src/features/messaging/learner-messages/learner-messages.html"
                    class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                    <ion-icon name="mail-unread"></ion-icon> Mensajes
                </a>
                <a href="#" class="enlace-nav btn-logout nav-link text-white border border-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2 mt-2">
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
                        <a href="../../../../src/features/dashboards/learner-dashboard/learner-dashboard.html"
                            class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                            <ion-icon name="home"></ion-icon> Inicio
                        </a>
                        <a href="../../../../src/features/measurements/learner-measurements/learner-measurements.html"
                            class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                            <ion-icon name="person"></ion-icon> Medidas
                        </a>
                        <a href="../../../../src/features/orientation/adaptation-week/adaptation-week.html"
                            class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                            <ion-icon name="barbell"></ion-icon> Semana de Adaptación
                        </a>
                        <a href="../../../../src/features/routines/learner-routines/learner-routines.html"
                            class="enlace-nav activo nav-link bg-white text-success fw-bold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                            <ion-icon name="clipboard"></ion-icon> Rutinas
                        </a>
                        <a href="../../../../src/features/attendance/learner-attendance/learner-attendance.html"
                            class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                            <ion-icon name="checkmark-circle"></ion-icon> Asistencia
                        </a>
                        <a href="../../../../src/features/progress/routine-progress/routine-progress.html"
                            class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                            <ion-icon name="sparkles"></ion-icon> Progreso
                        </a>
                        <a href="../../../../src/features/messaging/learner-messages/learner-messages.html"
                            class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                            <ion-icon name="mail-unread"></ion-icon> Mensajes
                        </a>
                        <a href="#" class="enlace-nav btn-logout nav-link text-white border border-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2 mt-2">
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
                    <section id="modulo-rutinas" class="rutinas-container bg-white text-success border border-success rounded-4 p-4 p-md-5 shadow-sm">

                        <!-- Encabezado -->
                        <header class="rutinas-header d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4 pb-3 border-bottom border-success">
                            <div>
                                <h2 class="h3 fw-bold text-success mb-1">Mis Rutinas Diarias</h2>
                                <p class="text-success mb-0">Selecciona tu plan de hoy y comienza tu sesión de entrenamiento.</p>
                            </div>

                            <div class="d-flex flex-wrap align-items-center gap-2">
                                <a href="../../../../src/features/routines/automated-routines/automated-routines.html"
                                    class="btn btn-outline-success rounded-pill px-3 py-2 fw-semibold d-inline-flex align-items-center gap-2">
                                    <ion-icon name="hardware-chip-outline"></ion-icon>
                                    <span>Automatizar Rutina</span>
                                </a>
                                <span class="badge-fase badge bg-success text-white rounded-pill px-3 py-2 fw-semibold">Semana 4 - Fase Volumen</span>
                            </div>
                        </header>

                        <div class="rutinas-grid row g-4 align-items-start">

                            <div class="rutinas-main-col col-12 col-xl-8 d-flex flex-column gap-4">

                                <!-- Carrusel de Rutinas -->
                                <div class="planes-seccion bg-white border border-success rounded-4 p-4 shadow-sm">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h3 class="h5 fw-bold text-success d-flex align-items-center gap-2 mb-0">
                                            <ion-icon name="checkmark-circle-outline"></ion-icon> Planes Disponibles
                                        </h3>
                                        <div class="d-flex gap-2">
                                            <button type="button" class="carrusel-btn prev btn btn-outline-success rounded-circle d-inline-flex align-items-center justify-content-center"
                                                id="btnPrev" aria-label="Anterior" >
                                                <ion-icon name="chevron-back-outline"></ion-icon>
                                            </button>
                                            <button type="button" class="carrusel-btn next btn btn-outline-success rounded-circle d-inline-flex align-items-center justify-content-center"
                                                id="btnNext" aria-label="Siguiente" >
                                                <ion-icon name="chevron-forward-outline"></ion-icon>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="carrusel-wrapper overflow-hidden">
                                        <div class="carrusel-track-container overflow-hidden">
                                            <div class="carrusel-track d-flex gap-3" id="carruselTrack">

                                                <article class="card-plan activa card bg-white text-success border border-success rounded-4 overflow-hidden flex-shrink-0 shadow-sm"
                                                    data-rutina="push" >
                                                    <div class="position-relative">
                                                        <span class="badge-dificultad alta badge bg-success text-white position-absolute top-0 end-0 m-2 rounded-pill px-2 py-1">Alta</span>
                                                        <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?auto=format&fit=crop&w=400&q=80"
                                                            alt="Push Day" class="w-100 object-fit-cover" height="115">
                                                    </div>
                                                    <div class="card-plan-content p-3 d-flex flex-column flex-grow-1">
                                                        <h4 class="h6 fw-bold text-success mb-1">Push Day - Hipertrofia</h4>
                                                        <p class="small text-success mb-3">Enfoque en pecho, hombros y tríceps para máxima ganancia muscular.</p>
                                                        <ul class="plan-stats list-unstyled m-0 mt-auto pt-2 border-top border-success d-flex justify-content-between gap-2 small fw-semibold text-success">
                                                            <li class="d-inline-flex align-items-center gap-1"><ion-icon name="time-outline"></ion-icon> 65 min</li>
                                                            <li class="d-inline-flex align-items-center gap-1"><ion-icon name="flame-outline"></ion-icon> 450 kcal</li>
                                                            <li class="d-inline-flex align-items-center gap-1"><ion-icon name="barbell-outline"></ion-icon> 4 ejerc.</li>
                                                        </ul>
                                                    </div>
                                                </article>

                                                <article class="card-plan card bg-white text-success border border-success rounded-4 overflow-hidden flex-shrink-0 shadow-sm"
                                                    data-rutina="leg" >
                                                    <div class="position-relative">
                                                        <span class="badge-dificultad alta badge bg-success text-white position-absolute top-0 end-0 m-2 rounded-pill px-2 py-1">Alta</span>
                                                        <img src="https://images.unsplash.com/photo-1434682881908-b43d0467b798?auto=format&fit=crop&w=400&q=80"
                                                            alt="Leg Day" class="w-100 object-fit-cover" height="115">
                                                    </div>
                                                    <div class="card-plan-content p-3 d-flex flex-column flex-grow-1">
                                                        <h4 class="h6 fw-bold text-success mb-1">Leg Day - Fuerza Base</h4>
                                                        <p class="small text-success mb-3">Construcción de potencia en tren inferior con ejercicios compuestos.</p>
                                                        <ul class="plan-stats list-unstyled m-0 mt-auto pt-2 border-top border-success d-flex justify-content-between gap-2 small fw-semibold text-success">
                                                            <li class="d-inline-flex align-items-center gap-1"><ion-icon name="time-outline"></ion-icon> 75 min</li>
                                                            <li class="d-inline-flex align-items-center gap-1"><ion-icon name="flame-outline"></ion-icon> 600 kcal</li>
                                                            <li class="d-inline-flex align-items-center gap-1"><ion-icon name="barbell-outline"></ion-icon> 4 ejerc.</li>
                                                        </ul>
                                                    </div>
                                                </article>

                                                <article class="card-plan card bg-white text-success border border-success rounded-4 overflow-hidden flex-shrink-0 shadow-sm"
                                                    data-rutina="hiit" >
                                                    <div class="position-relative">
                                                        <span class="badge-dificultad media badge bg-white text-success border border-success position-absolute top-0 end-0 m-2 rounded-pill px-2 py-1">Media</span>
                                                        <img src="https://images.unsplash.com/photo-1517838277536-f5f99be501cd?auto=format&fit=crop&w=400&q=80"
                                                            alt="Full Body HIIT" class="w-100 object-fit-cover" height="115">
                                                    </div>
                                                    <div class="card-plan-content p-3 d-flex flex-column flex-grow-1">
                                                        <h4 class="h6 fw-bold text-success mb-1">Full Body HIIT</h4>
                                                        <p class="small text-success mb-3">Sesión metabólica de alta intensidad para quema de grasa.</p>
                                                        <ul class="plan-stats list-unstyled m-0 mt-auto pt-2 border-top border-success d-flex justify-content-between gap-2 small fw-semibold text-success">
                                                            <li class="d-inline-flex align-items-center gap-1"><ion-icon name="time-outline"></ion-icon> 45 min</li>
                                                            <li class="d-inline-flex align-items-center gap-1"><ion-icon name="flame-outline"></ion-icon> 550 kcal</li>
                                                            <li class="d-inline-flex align-items-center gap-1"><ion-icon name="barbell-outline"></ion-icon> 3 ejerc.</li>
                                                        </ul>
                                                    </div>
                                                </article>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Lista Dinámica de Ejercicios -->
                                <div class="ejercicios-seccion bg-white border border-success rounded-4 p-4 shadow-sm">
                                    <div class="ejercicios-header mb-3">
                                        <h3 class="h5 fw-bold text-success mb-1">Push Day - Hipertrofia</h3>
                                        <p class="small text-success mb-0">Enfoque en pecho, hombros y tríceps para máxima ganancia muscular.</p>
                                    </div>

                                    <div class="progreso-bar-container mb-4">
                                        <label class="form-label d-flex justify-content-between align-items-center small fw-bold text-success mb-2">
                                            <span>Progreso de la sesión</span>
                                            <span>0%</span>
                                        </label>
                                        <div class="progreso-bar progress border border-success bg-white" >
                                            <div class="progreso-fill progress-bar bg-success" ></div>
                                        </div>
                                    </div>

                                    <h4 class="h6 fw-bold text-success d-flex align-items-center gap-2 mb-3">
                                        <ion-icon name="list-outline"></ion-icon> Lista de Ejercicios
                                    </h4>

                                    <div class="ejercicios-lista d-flex flex-column gap-2">
                                        <label class="item-ejercicio d-flex align-items-center gap-3 bg-white border border-success rounded-4 p-3 shadow-sm">
                                            <img src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?auto=format&fit=crop&w=100&q=80"
                                                alt="Press de Banca" class="rounded-3 object-fit-cover border border-success flex-shrink-0" width="46" height="46">
                                            <div class="ejercicio-info flex-grow-1">
                                                <h5 class="h6 fw-bold text-success mb-1">Press de Banca Plano</h5>
                                                <p class="small text-success mb-0">4 series • 8-10 reps • <span class="fw-bold">80kg</span></p>
                                            </div>
                                            <input type="checkbox" class="check-ejercicio form-check-input border-success flex-shrink-0" >
                                        </label>

                                        <label class="item-ejercicio d-flex align-items-center gap-3 bg-white border border-success rounded-4 p-3 shadow-sm">
                                            <img src="https://images.unsplash.com/photo-1581009146145-b5ef050c2e1e?auto=format&fit=crop&w=100&q=80"
                                                alt="Press Militar" class="rounded-3 object-fit-cover border border-success flex-shrink-0" width="46" height="46">
                                            <div class="ejercicio-info flex-grow-1">
                                                <h5 class="h6 fw-bold text-success mb-1">Press Militar con Barra</h5>
                                                <p class="small text-success mb-0">3 series • 10-12 reps • <span class="fw-bold">40kg</span></p>
                                            </div>
                                            <input type="checkbox" class="check-ejercicio form-check-input border-success flex-shrink-0">
                                        </label>

                                        <label class="item-ejercicio d-flex align-items-center gap-3 bg-white border border-success rounded-4 p-3 shadow-sm">
                                            <img src="https://images.unsplash.com/photo-1583454110551-21f2fa2afe61?auto=format&fit=crop&w=100&q=80"
                                                alt="Aperturas" class="rounded-3 object-fit-cover border border-success flex-shrink-0" width="46" height="46">
                                            <div class="ejercicio-info flex-grow-1">
                                                <h5 class="h6 fw-bold text-success mb-1">Aperturas en Polea Alta</h5>
                                                <p class="small text-success mb-0">3 series • 15 reps • <span class="fw-bold">15kg</span></p>
                                            </div>
                                            <input type="checkbox" class="check-ejercicio form-check-input border-success flex-shrink-0" >
                                        </label>

                                        <label class="item-ejercicio d-flex align-items-center gap-3 bg-white border border-success rounded-4 p-3 shadow-sm">
                                            <img src="https://images.unsplash.com/photo-1532029837206-abbe2b7620e3?auto=format&fit=crop&w=100&q=80"
                                                alt="Elevaciones Laterales" class="rounded-3 object-fit-cover border border-success flex-shrink-0" width="46" height="46">
                                            <div class="ejercicio-info flex-grow-1">
                                                <h5 class="h6 fw-bold text-success mb-1">Elevaciones Laterales</h5>
                                                <p class="small text-success mb-0">4 series • 12-15 reps • <span class="fw-bold">10kg</span></p>
                                            </div>
                                            <input type="checkbox" class="check-ejercicio form-check-input border-success flex-shrink-0">
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Panel Lateral -->
                            <aside class="rutinas-sidebar-col col-12 col-xl-4 d-flex flex-column gap-4">
                                <div class="panel-card timer-card bg-white text-success border border-success rounded-4 p-4 text-center shadow-sm">
                                    <div class="card-head d-flex align-items-center justify-content-center gap-2 mb-2">
                                        <ion-icon name="timer-outline" class="fs-4 text-success"></ion-icon>
                                        <h3 class="h5 fw-bold text-success mb-0">Control de Sesión</h3>
                                    </div>
                                    <p class="timer-desc small text-success mb-3">El tiempo no puede pausarse para mantener la intensidad.</p>

                                    <div class="timer-box border border-success rounded-4 p-3 mb-3">
                                        <small class="d-block fw-bold text-success" >TIEMPO TRANSCURRIDO</small>
                                        <div class="timer-display display-6 fw-bold text-success mt-1" id="timeString">00:00:00</div>
                                    </div>

                                    <button type="button" class="btn-start btn btn-success text-white rounded-pill w-100 py-2 fw-semibold d-inline-flex align-items-center justify-content-center gap-2"
                                        id="btnIniciar" onclick="solicitarConfirmacion()">
                                        <ion-icon name="play-outline"></ion-icon> Comenzar
                                    </button>

                                    <button type="button" class="btn-reiniciar btn btn-outline-success rounded-pill w-100 py-2 mt-2 fw-semibold d-inline-flex align-items-center justify-content-center gap-1"
                                        id="btnReiniciar" onclick="reiniciarSesion()">
                                        <ion-icon name="refresh-outline"></ion-icon> Reiniciar Sesión
                                    </button>

                                    <div class="alert-info border border-success rounded-4 p-3 mt-3 d-flex gap-2 align-items-start text-start small text-success">
                                        <ion-icon name="information-circle-outline" class="fs-5 flex-shrink-0"></ion-icon>
                                        <span>Al reiniciar, se perderá todo el progreso de la sesión actual.</span>
                                    </div>
                                </div>

                                <div class="panel-card consejo-card bg-white text-success border border-success rounded-4 p-4 shadow-sm">
                                    <span class="consejo-tag badge bg-success text-white rounded-pill px-3 py-1 fw-bold">CONSEJO DEL ENTRENADOR</span>
                                    <blockquote class="small text-success border-start border-4 border-success ps-3 my-3 fst-italic">
                                        "Mantén un descanso de 60-90 segundos entre series para optimizar la recuperación muscular sin perder el bombeo."
                                    </blockquote>
                                    <div class="autor-box d-flex align-items-center gap-3">
                                        <div class="avatar-autor bg-success text-white rounded-circle d-inline-flex align-items-center justify-content-center fw-bold flex-shrink-0"
                                            >JD</div>
                                        <div>
                                            <strong class="d-block small fw-bold text-success">Juan Delgado</strong>
                                            <small class="text-success">Head Coach</small>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                        </div>

                        <!-- Modal de Confirmación -->
                        <div class="modal fade" id="confirmModal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content style-modal bg-white text-success border border-success rounded-4 shadow">
                                    <div class="modal-header bg-success text-white rounded-top-4">
                                        <h5 class="modal-title fw-bold text-white mb-0">¿Iniciar Rutina?</h5>
                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body p-4 text-success">
                                        Una vez iniciada la rutina, el temporizador avanzará y el progreso comenzará a ser registrado.
                                    </div>
                                    <div class="modal-footer border-top border-success">
                                        <button type="button" class="btn btn-outline-success rounded-pill px-4 fw-semibold" data-bs-dismiss="modal">Cancelar</button>
                                        <button type="button" class="btn btn-success text-white rounded-pill px-4 fw-semibold" onclick="confirmarInicio()">Confirmar e Iniciar</button>
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
                            <strong class="text-success">Aprendiz</strong>
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
                        <p class="small text-success mb-2">Puedes radicar una solicitud formal para cancelar tu cuenta de AGROFIT y transferir tu historial lúdico.</p>
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

    <!-- Librería de alertas -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@8.0.13/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@8.0.13/dist/ionicons/ionicons.js"></script>
</body>

</html>