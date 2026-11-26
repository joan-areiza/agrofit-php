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
        <a class="navbar-brand d-flex align-items-center m-0"
          href="../../../../src/features/dashboards/coach-dashboard/coach-dashboard.html">
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
      <h5 class="offcanvas-title fw-bold text-white" id="mobileMenuLabel">AGROFIT • ENTRENADOR</h5>
      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Cerrar"></button>
    </div>
    <div class="offcanvas-body d-flex flex-column justify-content-between py-4">
      <nav class="nav-barra-lateral d-flex flex-column gap-2">
        <a href="../../../../src/features/dashboards/coach-dashboard/coach-dashboard.html"
          class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
          <ion-icon name="home"></ion-icon> Inicio
        </a>
        <a href="../../../../src/features/routines/coach-routines/coach-routines.html"
          class="enlace-nav activo nav-link bg-white text-success fw-bold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
          <ion-icon name="clipboard"></ion-icon> Control de Rutinas
        </a>
        <a href="../../../../src/features/measurements/coach-assessments/coach-assessments.html"
          class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
          <ion-icon name="person"></ion-icon> Consultar Aprendices
        </a>
        <a href="../../../../src/features/attendance/coach-attendance/coach-attendance.html"
          class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
          <ion-icon name="checkmark-circle"></ion-icon> Validar Asistencia
        </a>
        <a href="../../../../src/features/measurements/coach-measurements/coach-measurements.html"
          class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
          <ion-icon name="clipboard"></ion-icon> Registrar Medidas
        </a>
        <a href="#"
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
            <a href="../../../../src/features/dashboards/coach-dashboard/coach-dashboard.html"
              class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
              <ion-icon name="home"></ion-icon> Inicio
            </a>
            <a href="../../../../src/features/routines/coach-routines/coach-routines.html"
              class="enlace-nav activo nav-link bg-white text-success fw-bold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
              <ion-icon name="clipboard"></ion-icon> Control de Rutinas
            </a>
            <a href="../../../../src/features/measurements/coach-assessments/coach-assessments.html"
              class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
              <ion-icon name="person"></ion-icon> Consultar Aprendices
            </a>
            <a href="../../../../src/features/attendance/coach-attendance/coach-attendance.html"
              class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
              <ion-icon name="checkmark-circle"></ion-icon> Validar Asistencia
            </a>
            <a href="../../../../src/features/measurements/coach-measurements/coach-measurements.html"
              class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
              <ion-icon name="clipboard"></ion-icon> Registrar Medidas
            </a>
            <a href="#"
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
          <section id="detalle-solicitud" class="modulo-solicitud">
            <div class="header-solicitud mb-3">
              <div class="migas-pan d-flex align-items-center gap-2 small text-success">
                <span>Auditoría de Aprendiz</span>
                <span class="separador">|</span>
                <span class="usuario-actual fw-bold">Carlos Ruiz</span>
              </div>
            </div>

            <div class="tarjeta-perfil bg-white text-success border border-success rounded-4 p-4 mb-4 shadow-sm d-flex flex-wrap justify-content-between align-items-center gap-3">
              <div class="info-usuario d-flex align-items-center gap-3">
                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=150&q=80"
                  alt="Carlos Ruiz Jiménez" class="avatar-usuario rounded-circle object-fit-cover border border-success" width="64" height="64">
                <div class="datos-usuario">
                  <h2 class="h4 fw-bold text-success mb-1">Carlos Ruiz Jiménez</h2>
                  <p class="meta-usuario small text-success mb-0 d-flex flex-wrap gap-3">
                    <span>ID: 10928374</span>
                    <span>Programa: Gestión Deportiva</span>
                  </p>
                </div>
              </div>

              <div class="metricas-progreso d-flex flex-wrap gap-3">
                <div class="insignia-progreso bg-white border border-success rounded-4 px-3 py-2 d-flex align-items-center gap-2">
                  <ion-icon name="calendar-outline" class="fs-4 text-success"></ion-icon>
                  <div>
                    <small class="d-block fw-bold text-success">SEMANA DE ADAPTACIÓN</small>
                    <strong class="text-success">Día 7 de 7</strong>
                  </div>
                </div>
                <div class="insignia-progreso destacado bg-success text-white border border-success rounded-4 px-3 py-2 d-flex align-items-center gap-2">
                  <ion-icon name="pulse-outline" class="fs-4 text-white"></ion-icon>
                  <div>
                    <small class="d-block fw-bold text-white" >PROGRESO GENERAL</small>
                    <strong class="text-white">100% Completado</strong>
                  </div>
                </div>
              </div>
            </div>

            <div class="grid-solicitud row g-4 align-items-start">
              <div class="columna-principal col-12 col-xl-8 d-flex flex-column gap-4">

                <!-- Carrusel de Evidencias -->
                <div class="seccion-carrusel bg-white text-success border border-success rounded-4 p-4 shadow-sm">
                  <div class="encabezado-seccion d-flex justify-content-between align-items-center mb-3 pb-2 border-bottom border-success">
                    <h3 class="h5 fw-bold text-success d-flex align-items-center gap-2 mb-0">
                      <ion-icon name="videocam-outline"></ion-icon> Galería de Evidencias
                    </h3>
                    <div class="d-flex align-items-center gap-2">
                      <span class="tag-contador badge bg-success text-white rounded-pill px-3 py-1">6 Archivos</span>
                      <button type="button" class="btn-carrusel btn-prev btn btn-outline-success rounded-circle d-inline-flex align-items-center justify-content-center"
                        id="carruselPrev" aria-label="Anterior" >
                        <ion-icon name="chevron-back-outline"></ion-icon>
                      </button>
                      <button type="button" class="btn-carrusel btn-next btn btn-outline-success rounded-circle d-inline-flex align-items-center justify-content-center"
                        id="carruselNext" aria-label="Siguiente" >
                        <ion-icon name="chevron-forward-outline"></ion-icon>
                      </button>
                    </div>
                  </div>

                  <div class="contenedor-carrusel overflow-hidden">
                    <div class="track-carrusel d-flex gap-3" id="carruselTrack">
                      <!-- Card 1 -->
                      <div class="tarjeta-evidencia card bg-white text-success border border-success rounded-4 overflow-hidden flex-shrink-0">
                        <div class="media-container position-relative">
                          <span class="badge-tipo video badge bg-success text-white position-absolute top-0 start-0 m-2 rounded-pill px-2 py-1 d-inline-flex align-items-center gap-1">
                            <ion-icon name="videocam"></ion-icon> VIDEO
                          </span>
                          <img src="https://images.unsplash.com/photo-1574680096145-d05b474e2155?auto=format&fit=crop&w=400&q=80"
                            alt="Sentadilla técnica libre" class="w-100 h-100 object-fit-cover">
                        </div>
                        <div class="info-evidencia p-3">
                          <small class="d-block text-success mb-1">Lunes, 12 Oct</small>
                          <h4 class="h6 fw-bold text-success mb-0">Sentadilla técnica libre</h4>
                        </div>
                      </div>

                      <!-- Card 2 -->
                      <div class="tarjeta-evidencia card bg-white text-success border border-success rounded-4 overflow-hidden flex-shrink-0">
                        <div class="media-container position-relative">
                          <span class="badge-tipo video badge bg-success text-white position-absolute top-0 start-0 m-2 rounded-pill px-2 py-1 d-inline-flex align-items-center gap-1">
                            <ion-icon name="videocam"></ion-icon> VIDEO
                          </span>
                          <img src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?auto=format&fit=crop&w=400&q=80"
                            alt="Press de banca" class="w-100 h-100 object-fit-cover">
                        </div>
                        <div class="info-evidencia p-3">
                          <small class="d-block text-success mb-1">Martes, 13 Oct</small>
                          <h4 class="h6 fw-bold text-success mb-0">Press de banca (Máquina)</h4>
                        </div>
                      </div>

                      <!-- Card 3 -->
                      <div class="tarjeta-evidencia card bg-white text-success border border-success rounded-4 overflow-hidden flex-shrink-0">
                        <div class="media-container position-relative">
                          <span class="badge-tipo foto badge bg-success text-white position-absolute top-0 start-0 m-2 rounded-pill px-2 py-1 d-inline-flex align-items-center gap-1">
                            <ion-icon name="camera"></ion-icon> PHOTO
                          </span>
                          <img src="https://images.unsplash.com/photo-1517838277536-f5f99be501cd?auto=format&fit=crop&w=400&q=80"
                            alt="Postura inicial Peso Muerto" class="w-100 h-100 object-fit-cover">
                        </div>
                        <div class="info-evidencia p-3">
                          <small class="d-block text-success mb-1">Miércoles, 14 Oct</small>
                          <h4 class="h6 fw-bold text-success mb-0">Postura inicial Peso Muerto</h4>
                        </div>
                      </div>

                      <!-- Card 4 -->
                      <div class="tarjeta-evidencia card bg-white text-success border border-success rounded-4 overflow-hidden flex-shrink-0">
                        <div class="media-container position-relative">
                          <span class="badge-tipo video badge bg-success text-white position-absolute top-0 start-0 m-2 rounded-pill px-2 py-1 d-inline-flex align-items-center gap-1">
                            <ion-icon name="videocam"></ion-icon> VIDEO
                          </span>
                          <img src="https://images.unsplash.com/photo-1581009146145-b5ef050c2e1e?auto=format&fit=crop&w=400&q=80"
                            alt="Remo con mancuerna" class="w-100 h-100 object-fit-cover">
                        </div>
                        <div class="info-evidencia p-3">
                          <small class="d-block text-success mb-1">Jueves, 15 Oct</small>
                          <h4 class="h6 fw-bold text-success mb-0">Remo con mancuerna</h4>
                        </div>
                      </div>

                      <!-- Card 5 -->
                      <div class="tarjeta-evidencia card bg-white text-success border border-success rounded-4 overflow-hidden flex-shrink-0">
                        <div class="media-container position-relative">
                          <span class="badge-tipo foto badge bg-success text-white position-absolute top-0 start-0 m-2 rounded-pill px-2 py-1 d-inline-flex align-items-center gap-1">
                            <ion-icon name="camera"></ion-icon> PHOTO
                          </span>
                          <img src="https://images.unsplash.com/photo-1583454110551-21f2fa2afe61?auto=format&fit=crop&w=400&q=80"
                            alt="Combinación Biceps/Triceps" class="w-100 h-100 object-fit-cover">
                        </div>
                        <div class="info-evidencia p-3">
                          <small class="d-block text-success mb-1">Viernes, 16 Oct</small>
                          <h4 class="h6 fw-bold text-success mb-0">Combinación Bíceps/Tríceps</h4>
                        </div>
                      </div>

                      <!-- Card 6 -->
                      <div class="tarjeta-evidencia card bg-white text-success border border-success rounded-4 overflow-hidden flex-shrink-0">
                        <div class="media-container position-relative">
                          <span class="badge-tipo video badge bg-success text-white position-absolute top-0 start-0 m-2 rounded-pill px-2 py-1 d-inline-flex align-items-center gap-1">
                            <ion-icon name="videocam"></ion-icon> VIDEO
                          </span>
                          <img src="https://images.unsplash.com/photo-1434682881908-b43d0467b798?auto=format&fit=crop&w=400&q=80"
                            alt="Zancadas controladas" class="w-100 h-100 object-fit-cover">
                        </div>
                        <div class="info-evidencia p-3">
                          <small class="d-block text-success mb-1">Sábado, 17 Oct</small>
                          <h4 class="h6 fw-bold text-success mb-0">Zancadas controladas</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Bitácora de Ejecución -->
                <div class="seccion-bitacora bg-white text-success border border-success rounded-4 p-4 shadow-sm">
                  <div class="encabezado-seccion d-flex justify-content-between align-items-center mb-3 pb-2 border-bottom border-success">
                    <h3 class="h5 fw-bold text-success d-flex align-items-center gap-2 mb-0">
                      <ion-icon name="journal-outline"></ion-icon> Bitácora de Ejecución
                    </h3>
                  </div>

                  <div class="lista-bitacora d-flex flex-column gap-3">
                    <div class="item-bitacora bg-white border border-success rounded-4 p-3 d-flex flex-wrap align-items-center justify-content-between gap-3">
                      <div class="d-flex align-items-center gap-3">
                        <div class="badge-dia bg-success text-white rounded-3 px-3 py-2 text-center fw-bold">
                          <small class="d-block">DÍA</small>
                          <span class="fs-5">1</span>
                        </div>
                        <div class="detalles-ejecucion">
                          <h4 class="h6 fw-bold text-success mb-1">Familiarización Máquinas</h4>
                          <div class="tags-ejercicio d-flex flex-wrap gap-2">
                            <span class="badge bg-white text-success border border-success rounded-pill px-2 py-1 d-inline-flex align-items-center gap-1">
                              <ion-icon name="barbell-outline"></ion-icon> Leg Press
                            </span>
                            <span class="badge bg-white text-success border border-success rounded-pill px-2 py-1 d-inline-flex align-items-center gap-1">
                              <ion-icon name="barbell-outline"></ion-icon> Chest Press
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex align-items-center gap-3">
                        <div class="meta-duracion text-end">
                          <small class="d-block fw-bold text-success" >DURACIÓN</small>
                          <div class="tiempo fw-bold text-success d-inline-flex align-items-center gap-1">
                            <ion-icon name="time-outline"></ion-icon> 45 min
                          </div>
                        </div>
                        <div class="estado-check completado fs-3 text-success">
                          <ion-icon name="checkmark-circle-outline"></ion-icon>
                        </div>
                      </div>
                    </div>

                    <div class="item-bitacora bg-white border border-success rounded-4 p-3 d-flex flex-wrap align-items-center justify-content-between gap-3">
                      <div class="d-flex align-items-center gap-3">
                        <div class="badge-dia bg-success text-white rounded-3 px-3 py-2 text-center fw-bold">
                          <small class="d-block">DÍA</small>
                          <span class="fs-5">2</span>
                        </div>
                        <div class="detalles-ejecucion">
                          <h4 class="h6 fw-bold text-success mb-1">Técnica de Tren Superior</h4>
                          <div class="tags-ejercicio d-flex flex-wrap gap-2">
                            <span class="badge bg-white text-success border border-success rounded-pill px-2 py-1 d-inline-flex align-items-center gap-1">
                              <ion-icon name="barbell-outline"></ion-icon> Lat Pulldown
                            </span>
                            <span class="badge bg-white text-success border border-success rounded-pill px-2 py-1 d-inline-flex align-items-center gap-1">
                              <ion-icon name="barbell-outline"></ion-icon> Shoulder Press
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex align-items-center gap-3">
                        <div class="meta-duracion text-end">
                          <small class="d-block fw-bold text-success" >DURACIÓN</small>
                          <div class="tiempo fw-bold text-success d-inline-flex align-items-center gap-1">
                            <ion-icon name="time-outline"></ion-icon> 50 min
                          </div>
                        </div>
                        <div class="estado-check completado fs-3 text-success">
                          <ion-icon name="checkmark-circle-outline"></ion-icon>
                        </div>
                      </div>
                    </div>

                    <div class="item-bitacora bg-white border border-success rounded-4 p-3 d-flex flex-wrap align-items-center justify-content-between gap-3">
                      <div class="d-flex align-items-center gap-3">
                        <div class="badge-dia bg-success text-white rounded-3 px-3 py-2 text-center fw-bold">
                          <small class="d-block">DÍA</small>
                          <span class="fs-5">3</span>
                        </div>
                        <div class="detalles-ejecucion">
                          <h4 class="h6 fw-bold text-success mb-1">Técnica de Tren Inferior</h4>
                          <div class="tags-ejercicio d-flex flex-wrap gap-2">
                            <span class="badge bg-white text-success border border-success rounded-pill px-2 py-1 d-inline-flex align-items-center gap-1">
                              <ion-icon name="barbell-outline"></ion-icon> Leg Extension
                            </span>
                            <span class="badge bg-white text-success border border-success rounded-pill px-2 py-1 d-inline-flex align-items-center gap-1">
                              <ion-icon name="barbell-outline"></ion-icon> Leg Curl
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex align-items-center gap-3">
                        <div class="meta-duracion text-end">
                          <small class="d-block fw-bold text-success" >DURACIÓN</small>
                          <div class="tiempo fw-bold text-success d-inline-flex align-items-center gap-1">
                            <ion-icon name="time-outline"></ion-icon> 55 min
                          </div>
                        </div>
                        <div class="estado-check completado fs-3 text-success">
                          <ion-icon name="checkmark-circle-outline"></ion-icon>
                        </div>
                      </div>
                    </div>

                    <div class="item-bitacora bg-white border border-success rounded-4 p-3 d-flex flex-wrap align-items-center justify-content-between gap-3">
                      <div class="d-flex align-items-center gap-3">
                        <div class="badge-dia bg-success text-white rounded-3 px-3 py-2 text-center fw-bold">
                          <small class="d-block">DÍA</small>
                          <span class="fs-5">4</span>
                        </div>
                        <div class="detalles-ejecucion">
                          <h4 class="h6 fw-bold text-success mb-1">Resistencia Aeróbica</h4>
                          <div class="tags-ejercicio d-flex flex-wrap gap-2">
                            <span class="badge bg-white text-success border border-success rounded-pill px-2 py-1 d-inline-flex align-items-center gap-1">
                              <ion-icon name="walk-outline"></ion-icon> Treadmill
                            </span>
                            <span class="badge bg-white text-success border border-success rounded-pill px-2 py-1 d-inline-flex align-items-center gap-1">
                              <ion-icon name="walk-outline"></ion-icon> Elliptical
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex align-items-center gap-3">
                        <div class="meta-duracion text-end">
                          <small class="d-block fw-bold text-success" >DURACIÓN</small>
                          <div class="tiempo fw-bold text-success d-inline-flex align-items-center gap-1">
                            <ion-icon name="time-outline"></ion-icon> 60 min
                          </div>
                        </div>
                        <div class="estado-check completado fs-3 text-success">
                          <ion-icon name="checkmark-circle-outline"></ion-icon>
                        </div>
                      </div>
                    </div>

                    <div class="item-bitacora bg-white border border-success rounded-4 p-3 d-flex flex-wrap align-items-center justify-content-between gap-3">
                      <div class="d-flex align-items-center gap-3">
                        <div class="badge-dia bg-success text-white rounded-3 px-3 py-2 text-center fw-bold">
                          <small class="d-block">DÍA</small>
                          <span class="fs-5">5</span>
                        </div>
                        <div class="detalles-ejecucion">
                          <h4 class="h6 fw-bold text-success mb-1">Combinación Funcional</h4>
                          <div class="tags-ejercicio d-flex flex-wrap gap-2">
                            <span class="badge bg-white text-success border border-success rounded-pill px-2 py-1 d-inline-flex align-items-center gap-1">
                              <ion-icon name="fitness-outline"></ion-icon> Kettlebells
                            </span>
                            <span class="badge bg-white text-success border border-success rounded-pill px-2 py-1 d-inline-flex align-items-center gap-1">
                              <ion-icon name="fitness-outline"></ion-icon> Steps
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex align-items-center gap-3">
                        <div class="meta-duracion text-end">
                          <small class="d-block fw-bold text-success" >DURACIÓN</small>
                          <div class="tiempo fw-bold text-success d-inline-flex align-items-center gap-1">
                            <ion-icon name="time-outline"></ion-icon> 50 min
                          </div>
                        </div>
                        <div class="estado-check completado fs-3 text-success">
                          <ion-icon name="checkmark-circle-outline"></ion-icon>
                        </div>
                      </div>
                    </div>

                    <div class="item-bitacora bg-white border border-success rounded-4 p-3 d-flex flex-wrap align-items-center justify-content-between gap-3">
                      <div class="d-flex align-items-center gap-3">
                        <div class="badge-dia bg-success text-white rounded-3 px-3 py-2 text-center fw-bold">
                          <small class="d-block">DÍA</small>
                          <span class="fs-5">6</span>
                        </div>
                        <div class="detalles-ejecucion">
                          <h4 class="h6 fw-bold text-success mb-1">Evaluación de Postura</h4>
                          <div class="tags-ejercicio d-flex flex-wrap gap-2">
                            <span class="badge bg-white text-success border border-success rounded-pill px-2 py-1 d-inline-flex align-items-center gap-1">
                              <ion-icon name="barbell-outline"></ion-icon> Smith Machine
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex align-items-center gap-3">
                        <div class="meta-duracion text-end">
                          <small class="d-block fw-bold text-success" >DURACIÓN</small>
                          <div class="tiempo fw-bold text-success d-inline-flex align-items-center gap-1">
                            <ion-icon name="time-outline"></ion-icon> 45 min
                          </div>
                        </div>
                        <div class="estado-check completado fs-3 text-success">
                          <ion-icon name="checkmark-circle-outline"></ion-icon>
                        </div>
                      </div>
                    </div>

                    <div class="item-bitacora bg-white border border-success rounded-4 p-3 d-flex flex-wrap align-items-center justify-content-between gap-3">
                      <div class="d-flex align-items-center gap-3">
                        <div class="badge-dia bg-success text-white rounded-3 px-3 py-2 text-center fw-bold">
                          <small class="d-block">DÍA</small>
                          <span class="fs-5">7</span>
                        </div>
                        <div class="detalles-ejecucion">
                          <h4 class="h6 fw-bold text-success mb-1">Consolidación Semanal</h4>
                          <div class="tags-ejercicio d-flex flex-wrap gap-2">
                            <span class="badge bg-white text-success border border-success rounded-pill px-2 py-1 d-inline-flex align-items-center gap-1">
                              <ion-icon name="barbell-outline"></ion-icon> Crossover
                            </span>
                            <span class="badge bg-white text-success border border-success rounded-pill px-2 py-1 d-inline-flex align-items-center gap-1">
                              <ion-icon name="barbell-outline"></ion-icon> Leg Press
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex align-items-center gap-3">
                        <div class="meta-duracion text-end">
                          <small class="d-block fw-bold text-success" >DURACIÓN</small>
                          <div class="tiempo fw-bold text-success d-inline-flex align-items-center gap-1">
                            <ion-icon name="time-outline"></ion-icon> 60 min
                          </div>
                        </div>
                        <div class="estado-check completado fs-3 text-success">
                          <ion-icon name="checkmark-circle-outline"></ion-icon>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>

              <!-- Columna Lateral -->
              <div class="columna-lateral col-12 col-xl-4 d-flex flex-column gap-4">

                <div class="card-panel bg-white text-success border border-success rounded-4 p-4 shadow-sm">
                  <h4 class="titulo-panel h5 fw-bold text-success mb-1">Acción Requerida</h4>
                  <p class="desc-panel small text-success mb-3">Revise cuidadosamente la evidencia antes de tomar una decisión.</p>
                  <div class="acciones-panel d-flex flex-column gap-2">
                    <button type="button" class="btn-accion btn-aprobar btn btn-success text-white rounded-pill py-2 fw-semibold d-inline-flex align-items-center justify-content-center gap-2"
                      id="btnConfigurarRutina">
                      <ion-icon name="create-outline"></ion-icon> Configurar Rutina
                    </button>
                    <button type="button" class="btn-accion btn-aprobar btn btn-success text-white rounded-pill py-2 fw-semibold d-inline-flex align-items-center justify-content-center gap-2">
                      <ion-icon name="checkmark-circle-outline"></ion-icon> Aprobar Solicitud
                    </button>
                    <button type="button" class="btn-accion btn-rechazar btn btn-outline-success rounded-pill py-2 fw-semibold d-inline-flex align-items-center justify-content-center gap-2">
                      <ion-icon name="close-circle-outline"></ion-icon> Rechazar Solicitud
                    </button>
                  </div>
                  <div class="nota-informativa border border-success rounded-4 p-3 mt-3 d-flex gap-2 align-items-start">
                    <ion-icon name="information-circle-outline" class="fs-5 text-success flex-shrink-0"></ion-icon>
                    <p class="small text-success mb-0">Al aprobar, el aprendiz desbloqueará automáticamente el módulo de "Ejecución de Rutina".</p>
                  </div>
                </div>

                <div class="card-panel bg-white text-success border border-success rounded-4 p-4 shadow-sm">
                  <h4 class="titulo-panel h5 fw-bold text-success mb-3">Información Biométrica</h4>
                  <ul class="lista-biometrica list-unstyled m-0 d-flex flex-column gap-2">
                    <li class="d-flex justify-content-between align-items-center pb-2 border-bottom border-success small">
                      <span>Estatura</span> <strong class="text-success">1.78 m</strong>
                    </li>
                    <li class="d-flex justify-content-between align-items-center pb-2 border-bottom border-success small">
                      <span>Peso Actual</span> <strong class="text-success">74.5 kg</strong>
                    </li>
                    <li class="d-flex justify-content-between align-items-center pb-2 border-bottom border-success small">
                      <span>IMC</span> <strong class="text-success">23.5 (Normal)</strong>
                    </li>
                    <li class="d-flex justify-content-between align-items-center small">
                      <span>Objetivo</span>
                      <span class="tag-objetivo badge bg-success text-white rounded-pill px-3 py-1 fw-semibold">Hipertrofia</span>
                    </li>
                  </ul>
                </div>

                <div class="card-panel bg-white text-success border border-success rounded-4 p-4 shadow-sm">
                  <h4 class="titulo-panel h5 fw-bold text-success d-flex align-items-center gap-2 mb-3">
                    <ion-icon name="chatbox-ellipses-outline"></ion-icon> Observaciones Previas
                  </h4>
                  <p class="texto-observacion small text-success border-start border-4 border-success ps-3 py-1 fst-italic mb-0">
                    "El aprendiz muestra buena predisposición. Requiere supervisión en el agarre de poleas durante el día 4.
                    Su técnica de sentadilla ha mejorado notablemente respecto al primer registro."
                  </p>
                </div>

                <div class="panel-links bg-white text-success border border-success rounded-4 p-4 shadow-sm d-flex flex-column gap-2">
                  <a href="#" class="link-descarga small fw-semibold text-success text-decoration-none d-inline-flex align-items-center gap-2">
                    <ion-icon name="document-text-outline"></ion-icon> Descargar historial completo (PDF)
                  </a>
                  <a href="#" class="link-descarga small fw-semibold text-success text-decoration-none d-inline-flex align-items-center gap-2">
                    <ion-icon name="arrow-forward-outline"></ion-icon> Ver ficha antropométrica
                  </a>
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