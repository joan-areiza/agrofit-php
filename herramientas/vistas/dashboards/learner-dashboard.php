<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Agrofit | Modulo - Aprendiz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="../../../assets/img/sena-logo.png">
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

    <div class="d-flex vh-100 overflow-hidden">

        <!-- ================= MENÚ LATERAL ================= -->
        <aside class="offcanvas-lg offcanvas-start bg-success text-white flex-shrink-0"
        tabindex="-1"
        id="menuLateral"
        aria-labelledby="tituloMenu">

            <!-- Encabezado visible solo cuando el menú se abre en celular -->
            <div class="offcanvas-header border-bottom border-white">
                <h5 class="offcanvas-title text-white fw-bold" id="tituloMenu">AGROFIT</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                    data-bs-target="#menuLateral" aria-label="Cerrar"></button>
            </div>

            <div class="offcanvas-body d-flex flex-column p-3 h-100">

                <!-- Logo / nombre: solo en pantallas grandes -->
                <a href="learner-dashboard.php"
                    class="d-none d-lg-flex align-items-center gap-2 mb-3 pb-3 text-white text-decoration-none border-bottom border-white">
                    <i class="bi bi-box-seam fs-4 text-white"></i>
                    <span class="fs-5 fw-semibold text-white">AGROFIT</span>
                </a>

                <ul class="nav nav-pills flex-column gap-1 mb-auto" id="listaMenu">

                    <!-- Opción simple (sin submenú) -->
                    <li class="nav-item">
                        <a class="nav-link active bg-white text-success fw-semibold d-flex align-items-center gap-2"
                            href="learner-dashboard.php">
                            <i class="bi bi-house-door"></i> Inicio
                        </a>
                    </li>

                    <!-- Opción con submenú: Rutinas -->
                    <li class="nav-item">
                        <a class="nav-link text-white d-flex align-items-center gap-2" href="#subRutinas" role="button"
                            data-bs-toggle="collapse" aria-expanded="false" aria-controls="subRutinas">
                            <i class="bi bi-people"></i> Rutinas
                            <i class="bi bi-chevron-down ms-auto"></i>
                        </a>
                        <div class="collapse" id="subRutinas" data-bs-parent="#listaMenu">
                            <ul class="nav flex-column gap-1 mt-1 ps-4">
                                <li><a class="nav-link text-white small" href="../rutinas/automated-routines.php">Generador de Rutinas</a></li>
                                <li><a class="nav-link text-white small" href="../rutinas/learner-routines.php">Mis Rutinas - Aprendiz</a></li>
                            </ul>
                        </div>
                    </li>

                    <!-- Opción con submenú: Seguimiento -->
                    <li class="nav-item">
                        <a class="nav-link text-white d-flex align-items-center gap-2" href="#subSeguimiento" role="button"
                            data-bs-toggle="collapse" aria-expanded="false" aria-controls="subSeguimiento">
                            <i class="bi bi-people"></i> Seguimiento
                            <i class="bi bi-chevron-down ms-auto"></i>
                        </a>
                        <div class="collapse" id="subSeguimiento" data-bs-parent="#listaMenu">
                            <ul class="nav flex-column gap-1 mt-1 ps-4">
                                <li><a class="nav-link text-white small" href="../seguimiento/adaptation-week.php">Semana de Adaptación</a></li>
                                <li><a class="nav-link text-white small" href="../seguimiento/routine-progress.php">Progreso</a></li>
                                <li><a class="nav-link text-white small" href="../seguimiento/attendance/learner-attendance.php">Asistencias - Aprendiz</a></li>
                                <li><a class="nav-link text-white small" href="../seguimiento/attendance/attendance-report.php">Reporte de Asistencia</a></li>
                                <li><a class="nav-link text-white small" href="../seguimiento/measures/learner-measurements.php">Medidas - Aprendiz</a></li>

                            </ul>
                        </div>
                    </li>

                    <!-- Opción con submenú: Contacto -->
                    <li class="nav-item">
                        <a class="nav-link text-white d-flex align-items-center gap-2" href="#subContacto" role="button"
                            data-bs-toggle="collapse" aria-expanded="false" aria-controls="subContacto">
                            <i class="bi bi-people"></i> Contacto
                            <i class="bi bi-chevron-down ms-auto"></i>
                        </a>
                        <div class="collapse" id="subContacto" data-bs-parent="#listaMenu">
                            <ul class="nav flex-column gap-1 mt-1 ps-4">
                                <li><a class="nav-link text-white small" href="../contacto/messages/learner-messages.php">Mensajes - Aprendiz</a></li>
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
                    <div class="d-flex align-items-center gap-2 mb-2 px-2 small text-white" role="button" tabindex="0" data-bs-toggle="modal" data-bs-target="#modalPerfil">
                        <i class="bi bi-person-circle fs-5 text-white"></i>
                        <!-- En PHP: <?= htmlspecialchars($_SESSION['loginUsuSesion']) ?> -->
                        <span>Nombre del usuario</span>
                    </div>
                    <!-- Ajusta la ruta a tu archivo de login -->
                    <a class="nav-link text-white d-flex align-items-center gap-2" href="../../controlador/loginControl.php?opcion=salir" id="btnLogout">
                        <i class="bi bi-box-arrow-right"></i> Salir
                    </a>
                </div>
            </div>
        </aside>

        <!-- ================= CONTENIDO ================= -->
        <main class="flex-grow-1 p-2 p-md-4 bg-white text-success overflow-auto h-100">
                    <section id="dashboard-inicio" class="dashboard-seccion">
                        <div class="bienvenida-header d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4 pb-3 border-bottom border-success">
                            <div class="bienvenida-texto">
                                <h1 class="h2 fw-bold text-success mb-1">Bienvenido, <span>
                                    <?php session_start();	echo $_SESSION['loginUsuSesion']; ?>
                                </span></h1>
                                <p class="text-success mb-0">Es un gran día para superar tus límites.</p>
                            </div>
                            <span class="badge-nivel badge bg-success text-white rounded-pill px-4 py-2 fs-6 d-inline-flex align-items-center gap-2">
                                <ion-icon name="trending-up-outline"></ion-icon> Nivel Inicial
                            </span>
                        </div>

                        <div class="card-alerta exito bg-success text-white rounded-4 p-4 d-flex flex-wrap align-items-center justify-content-between gap-3 mb-4 shadow-sm">
                            <div class="d-flex align-items-center gap-3 flex-grow-1">
                                <div class="alerta-icono fs-1 text-white d-flex align-items-center">
                                    <ion-icon name="checkmark-circle"></ion-icon>
                                </div>
                                <div class="alerta-contenido">
                                    <h3 class="h5 fw-bold text-white mb-1">¡Solicitud aprobada con éxito!</h3>
                                    <p class="text-white mb-0">Has completado satisfactoriamente tu <strong>Semana de Adaptación</strong>. Ahora tienes
                                        acceso total a todas las funcionalidades de entrenamiento y seguimiento.</p>
                                </div>
                            </div>
                            <button type="button" class="btn-alerta btn btn-light text-success fw-semibold rounded-pill px-4 py-2">Comenzar Entrenamiento</button>
                        </div>

                        <div class="dashboard-grid row g-4">
                            <div class="columna-principal col-12 col-xl-8">
                                <div class="seccion-cabecera d-flex justify-content-between align-items-center mb-3">
                                    <h3 class="h4 fw-bold text-success d-flex align-items-center gap-2 mb-0">
                                        <ion-icon name="newspaper-outline"></ion-icon> Novedades del Gimnasio
                                    </h3>
                                    <div class="carrusel-controles d-flex gap-2">
                                        <button type="button" class="carrusel-btn btn btn-outline-success rounded-circle d-inline-flex align-items-center justify-content-center"
                                            id="prevBtn" aria-label="Anterior" >
                                            <ion-icon name="chevron-back-outline"></ion-icon>
                                        </button>
                                        <button type="button" class="carrusel-btn btn btn-outline-success rounded-circle d-inline-flex align-items-center justify-content-center"
                                            id="nextBtn" aria-label="Siguiente" >
                                            <ion-icon name="chevron-forward-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>

                                <div class="carrusel-contenedor overflow-hidden mb-4">
                                    <div class="carrusel-track d-flex gap-3" id="carruselTrack">
                                        <article class="tarjeta-novedad card bg-white text-success border border-success rounded-4 overflow-hidden flex-shrink-0" >
                                            <div class="tarjeta-imagen position-relative" >
                                                <span class="etiqueta verde badge bg-success text-white rounded-pill px-3 py-1 position-absolute top-0 start-0 m-2">Instalaciones</span>
                                                <img src="https://images.unsplash.com/photo-1540497077202-7c8a3999166f?auto=format&fit=crop&w=600&q=80"
                                                    alt="Máquinas de cardio" class="w-100 h-100 object-fit-cover">
                                            </div>
                                            <div class="tarjeta-cuerpo card-body d-flex flex-column">
                                                <span class="tiempo-publicacion small fw-bold text-success mb-1">HACE 2 HORAS</span>
                                                <h4 class="h6 fw-bold text-success mb-2">Nuevas Máquinas de Cardio en Zona A</h4>
                                                <p class="small text-success mb-3 flex-grow-1">Hemos renovado nuestro equipo de cardio con la última tecnología de
                                                    LifeFitness para tus entrenamientos.</p>
                                                <a href="#" class="enlace-mas text-success fw-bold text-decoration-none d-inline-flex align-items-center gap-1">
                                                    Leer más <ion-icon name="arrow-forward-outline"></ion-icon>
                                                </a>
                                            </div>
                                        </article>

                                        <article class="tarjeta-novedad card bg-white text-success border border-success rounded-4 overflow-hidden flex-shrink-0" >
                                            <div class="tarjeta-imagen position-relative" >
                                                <span class="etiqueta verde badge bg-success text-white rounded-pill px-3 py-1 position-absolute top-0 start-0 m-2">Evento</span>
                                                <img src="https://images.unsplash.com/photo-1490645935967-10de6ba17061?auto=format&fit=crop&w=600&q=80"
                                                    alt="Plato saludable" class="w-100 h-100 object-fit-cover">
                                            </div>
                                            <div class="tarjeta-cuerpo card-body d-flex flex-column">
                                                <span class="tiempo-publicacion small fw-bold text-success mb-1">MAÑANA, 10:00 AM</span>
                                                <h4 class="h6 fw-bold text-success mb-2">Taller de Nutrición: Macros y Micros</h4>
                                                <p class="small text-success mb-3 flex-grow-1">Aprende a balancear tu dieta según tus objetivos de entrenamiento con nuestra
                                                    especialista.</p>
                                                <a href="#" class="enlace-mas text-success fw-bold text-decoration-none d-inline-flex align-items-center gap-1">
                                                    Leer más <ion-icon name="arrow-forward-outline"></ion-icon>
                                                </a>
                                            </div>
                                        </article>

                                        <article class="tarjeta-novedad card bg-white text-success border border-success rounded-4 overflow-hidden flex-shrink-0" >
                                            <div class="tarjeta-imagen position-relative" >
                                                <span class="etiqueta verde badge bg-success text-white rounded-pill px-3 py-1 position-absolute top-0 start-0 m-2">Desafío</span>
                                                <img src="https://images.unsplash.com/photo-1517838277536-f5f99be501cd?auto=format&fit=crop&w=600&q=80"
                                                    alt="Remo indoor" class="w-100 h-100 object-fit-cover">
                                            </div>
                                            <div class="tarjeta-cuerpo card-body d-flex flex-column">
                                                <span class="tiempo-publicacion small fw-bold text-success mb-1">OCTUBRE 2026</span>
                                                <h4 class="h6 fw-bold text-success mb-2">Reto Mensual: 50km de Remo</h4>
                                                <p class="small text-success mb-3 flex-grow-1">Participa en el reto del mes y gana una sesión de entrenamiento totalmente
                                                    personalizada.</p>
                                                <a href="#" class="enlace-mas text-success fw-bold text-decoration-none d-inline-flex align-items-center gap-1">
                                                    Leer más <ion-icon name="arrow-forward-outline"></ion-icon>
                                                </a>
                                            </div>
                                        </article>
                                    </div>
                                </div>

                                <div class="banner-accion bg-success text-white rounded-4 p-4 p-md-5 position-relative overflow-hidden shadow-sm">
                                    <div class="banner-texto position-relative z-1" >
                                        <h3 class="h3 fw-bold text-white mb-2">¿Listo para hoy?</h3>
                                        <p class="text-white mb-4">Tu plan de entrenamiento personalizado te está esperando. Registra tus progresos y
                                            alcanza tus metas.</p>
                                        <button type="button" class="btn-banner btn btn-light text-success fw-bold rounded-pill px-4 py-2 d-inline-flex align-items-center gap-2">
                                            Explorar mi rutina <ion-icon name="arrow-forward-outline"></ion-icon>
                                        </button>
                                    </div>
                                    <div class="banner-icono-fondo position-absolute end-0 bottom-0 text-white opacity-25 pe-3 pb-2"
                                        >
                                        <ion-icon name="barbell-outline"></ion-icon>
                                    </div>
                                </div>
                            </div>

                            <aside class="columna-lateral col-12 col-xl-4 d-flex flex-column gap-4">
                                <div class="tarjeta-panel bg-white text-success border border-success rounded-4 p-4 shadow-sm">
                                    <div class="panel-cabecera mb-3">
                                        <h4 class="h5 fw-bold text-success d-flex align-items-center gap-2 mb-0">
                                            <ion-icon name="flash-outline"></ion-icon> Mi Resumen
                                        </h4>
                                    </div>
                                    <div class="grid-metricas row g-3 mb-3 text-center">
                                        <div class="col-6">
                                            <div class="metrica-caja bg-success text-white rounded-3 p-3">
                                                <span class="metrica-numero d-block fs-2 fw-bold">0</span>
                                                <span class="metrica-etiqueta small fw-bold">SESIONES</span>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="metrica-caja bg-success text-white rounded-3 p-3">
                                                <span class="metrica-numero d-block fs-2 fw-bold">7</span>
                                                <span class="metrica-etiqueta small fw-bold">DÍAS ADAPT.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hito-progreso pt-3 border-top border-success">
                                        <div class="hito-texto mb-2">
                                            <span class="fw-bold text-success d-block">Próximo Hito</span>
                                            <small class="text-success">Faltan 5 sesiones para "Constancia Bronce"</small>
                                        </div>
                                        <div class="progress bg-white border border-success rounded-pill" >
                                            <div class="progress-bar bg-success w-25" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tarjeta-panel bg-white text-success border border-success rounded-4 p-4 shadow-sm">
                                    <div class="panel-cabecera mb-3">
                                        <h4 class="h5 fw-bold text-success mb-0">Atajos Rápidos</h4>
                                    </div>
                                    <ul class="lista-atajos list-unstyled d-flex flex-column gap-2 mb-0">
                                        <li>
                                            <a href="#" class="item-atajo d-flex align-items-center gap-3 p-2 rounded-3 text-decoration-none text-success border border-success">
                                                <div class="icono-atajo bg-success text-white rounded-3 d-flex align-items-center justify-content-center fs-5 flex-shrink-0" >
                                                    <ion-icon name="calendar-outline"></ion-icon>
                                                </div>
                                                <div class="texto-atajo">
                                                    <strong class="d-block small fw-bold">Mi Horario</strong>
                                                    <span class="small">Consulta tus días asignados</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="item-atajo d-flex align-items-center gap-3 p-2 rounded-3 text-decoration-none text-success border border-success">
                                                <div class="icono-atajo bg-success text-white rounded-3 d-flex align-items-center justify-content-center fs-5 flex-shrink-0">
                                                    <ion-icon name="time-outline"></ion-icon>
                                                </div>
                                                <div class="texto-atajo">
                                                    <strong class="d-block small fw-bold">Historial</strong>
                                                    <span class="small">Mira tus entrenos pasados</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="item-atajo d-flex align-items-center gap-3 p-2 rounded-3 text-decoration-none text-success border border-success">
                                                <div class="icono-atajo bg-success text-white rounded-3 d-flex align-items-center justify-content-center fs-5 flex-shrink-0" >
                                                    <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                                                </div>
                                                <div class="texto-atajo">
                                                    <strong class="d-block small fw-bold">Instructor</strong>
                                                    <span class="small">Enviar mensaje a tu coach</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="tarjeta-panel ayuda-card bg-success text-white rounded-4 p-4 shadow-sm">
                                    <h4 class="h5 fw-bold text-white mb-2">¿Necesitas ayuda?</h4>
                                    <p class="small text-white mb-3">Si tienes dudas sobre cómo usar una máquina o realizar un ejercicio, contacta a un
                                        instructor en sala.</p>
                                    <a href="contacto/contact.php" class="enlace-ayuda btn btn-light text-success rounded-pill px-4 py-2 fw-semibold text-decoration-none d-inline-flex align-items-center gap-1">
                                        Guía de usuario <ion-icon name="chevron-forward-outline"></ion-icon>
                                    </a>
                                </div>
                            </aside>
                        </div>
                    </section>
        </main>
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

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Librería de alertas SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" src="../../../herramientas/js/logout.js" defer></script>
    <script type="text/javascript" src="../../../herramientas/js/reveal.js" defer></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@8.0.13/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@8.0.13/dist/ionicons/ionicons.js"></script>
</body>

</html>