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
                <a class="navbar-brand d-flex align-items-center m-0" href="./welcome-dashboard-learner.html">
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
            <h5 class="offcanvas-title fw-bold text-white" id="mobileMenuLabel">AGROFIT • APRENDIZ</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Cerrar"></button>
        </div>
        <div class="offcanvas-body d-flex flex-column justify-content-between py-4">
            <nav class="nav-barra-lateral d-flex flex-column gap-2">
                <a href="./welcome-dashboard-learner.html"
                    class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                    <ion-icon name="home"></ion-icon> Bienvenida
                </a>
                <a href="./measurements.html"
                    class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                    <ion-icon name="person"></ion-icon> Medidas
                </a>
                <a href="./adaptation-week.html"
                    class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                    <ion-icon name="barbell"></ion-icon> Semana de Adaptación
                </a>
                <a href="./learner-routines.html"
                    class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                    <ion-icon name="clipboard"></ion-icon> Rutinas
                </a>
                <a href="./learner-attendance.html"
                    class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                    <ion-icon name="checkmark-circle"></ion-icon> Asistencia
                </a>
                <a href="./routine-progress.html"
                    class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                    <ion-icon name="sparkles"></ion-icon> Progreso
                </a>
                <a href="./learner-messages.html"
                    class="enlace-nav activo nav-link bg-white text-success fw-bold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
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
                        <a href="./welcome-dashboard-learner.html"
                            class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                            <ion-icon name="home"></ion-icon> Bienvenida
                        </a>
                        <a href="./measurements.html"
                            class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                            <ion-icon name="person"></ion-icon> Medidas
                        </a>
                        <a href="./adaptation-week.html"
                            class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                            <ion-icon name="barbell"></ion-icon> Semana de Adaptación
                        </a>
                        <a href="./learner-routines.html"
                            class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                            <ion-icon name="clipboard"></ion-icon> Rutinas
                        </a>
                        <a href="./learner-attendance.html"
                            class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                            <ion-icon name="checkmark-circle"></ion-icon> Asistencia
                        </a>
                        <a href="./routine-progress.html"
                            class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                            <ion-icon name="sparkles"></ion-icon> Progreso
                        </a>
                        <a href="./learner-messages.html"
                            class="enlace-nav activo nav-link bg-white text-success fw-bold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
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
                    <section id="buzon-mensajeria" class="modulo-mensajeria bg-white text-success border border-success rounded-4 p-4 p-md-5 shadow-sm">
                        <header class="encabezado-buzon d-flex flex-wrap justify-content-between align-items-start gap-3 mb-4 pb-3 border-bottom border-success">
                            <div class="titulo-buzon">
                                <h1 class="h2 fw-bold text-success d-flex align-items-center gap-2 mb-1">
                                    <span>Buzón de Mensajería</span>
                                    <span class="badge-contador badge bg-success text-white rounded-pill px-3 py-1 fs-6">2</span>
                                </h1>
                                <p class="text-success mb-0">Gestiona tus comunicaciones con instructores, nutricionistas y soporte técnico del gimnasio.</p>
                            </div>
                            <div class="acciones-encabezado d-flex flex-wrap gap-2">
                                <button type="button" class="btn-secundario btn btn-outline-success rounded-pill px-4 py-2 fw-semibold d-inline-flex align-items-center gap-2">
                                    <ion-icon name="checkmark-done-outline"></ion-icon> Marcar todo como leído
                                </button>
                                <button type="button" class="btn-primario btn btn-success text-white rounded-pill px-4 py-2 fw-semibold d-inline-flex align-items-center gap-2">
                                    <ion-icon name="add-outline"></ion-icon> Nuevo Mensaje
                                </button>
                            </div>
                        </header>

                        <div class="grid-mensajeria row g-4 align-items-start">
                            <aside class="panel-filtros col-12 col-lg-4 col-xl-3">
                                <div class="bg-white border border-success rounded-4 p-3 shadow-sm">
                                    <div class="caja-buscar mb-3">
                                        <input type="text" class="form-control bg-white text-success border border-success rounded-pill px-4 py-2"
                                            placeholder="Instructor o asunto...">
                                    </div>

                                    <nav class="lista-filtros d-flex flex-column gap-2">
                                        <button type="button" class="filtro-btn activo btn btn-success text-white rounded-pill px-3 py-2 fw-semibold d-flex align-items-center gap-2 text-start">
                                            <ion-icon name="mail-unread-outline"></ion-icon> Todos los mensajes
                                        </button>
                                        <button type="button" class="filtro-btn btn btn-outline-success rounded-pill px-3 py-2 fw-semibold d-flex align-items-center gap-2 text-start">
                                            <ion-icon name="mail-outline"></ion-icon>
                                            <span>No leídos</span>
                                            <span class="badge-filtro badge bg-success text-white rounded-pill ms-auto">2</span>
                                        </button>
                                        <button type="button" class="filtro-btn btn btn-outline-success rounded-pill px-3 py-2 fw-semibold d-flex align-items-center gap-2 text-start">
                                            <ion-icon name="bookmark-outline"></ion-icon> Importantes
                                        </button>
                                    </nav>

                                    <div class="separador border-top border-success my-3"></div>

                                    <nav class="lista-filtros d-flex flex-column gap-2">
                                        <button type="button" class="filtro-btn secundario btn btn-outline-success rounded-pill px-3 py-2 fw-semibold d-flex align-items-center gap-2 text-start">
                                            <ion-icon name="archive-outline"></ion-icon> Mensajes archivados
                                        </button>
                                        <button type="button" class="filtro-btn secundario btn btn-outline-success rounded-pill px-3 py-2 fw-semibold d-flex align-items-center gap-2 text-start">
                                            <ion-icon name="trash-outline"></ion-icon> Papelera
                                        </button>
                                    </nav>

                                    <div class="card-status-rutinas border border-success rounded-4 p-3 mt-4 text-center">
                                        <div class="icono-check-circulo bg-success text-white rounded-circle d-inline-flex align-items-center justify-content-center fs-4 mb-2"
                                            >
                                            <ion-icon name="checkmark-outline"></ion-icon>
                                        </div>
                                        <h3 class="h6 fw-bold text-success mb-1">¡Al día con tus rutinas!</h3>
                                        <p class="small text-success mb-3">Has completado todas tus interacciones pendientes de hoy.</p>
                                        <button type="button" class="btn-card-historial btn btn-outline-success rounded-pill w-100 py-1 fw-semibold">Ver historial</button>
                                    </div>
                                </div>
                            </aside>

                            <main class="panel-contenido-mensajes col-12 col-lg-8 col-xl-9">
                                <div class="bg-white border border-success rounded-4 overflow-hidden shadow-sm">
                                    <div class="encabezado-lista bg-success text-white px-4 py-3 d-flex justify-content-between align-items-center">
                                        <span class="fw-bold">Lista de Mensajes <small class="text-white ms-2">Mostrando 5 resultados</small></span>
                                        <button type="button" class="btn-opciones btn btn-outline-light rounded-circle d-inline-flex align-items-center justify-content-center"
                                            >
                                            <ion-icon name="ellipsis-vertical-outline"></ion-icon>
                                        </button>
                                    </div>

                                    <ul class="lista-mensajes list-unstyled m-0" id="lista-mensajes">
                                        <li class="item-mensaje no-leido activo p-3 p-md-4 border-bottom border-success d-flex gap-3 align-items-start" data-id="1">
                                            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=100&auto=format&fit=crop"
                                                alt="Carlos Rodríguez" class="avatar-remitente rounded-circle object-fit-cover border border-success flex-shrink-0" width="46" height="46">
                                            <div class="contenido-mensaje flex-grow-1">
                                                <div class="info-remitente d-flex flex-wrap justify-content-between align-items-center gap-2 mb-1">
                                                    <div class="d-flex flex-wrap align-items-center gap-2">
                                                        <h4 class="h6 fw-bold text-success mb-0">Carlos Rodríguez</h4>
                                                        <span class="rol-tag badge bg-success text-white rounded-pill px-2 py-1">HEAD COACH - HIIT</span>
                                                    </div>
                                                    <span class="tiempo-envio small text-success fw-semibold">Hace 2 horas</span>
                                                </div>
                                                <h5 class="asunto-mensaje small fw-bold text-success mb-1">Ajuste en tu rutina de pierna</h5>
                                                <p class="snippet-mensaje small text-success mb-0">Hola Juan, he revisado tus progresos y creo que es momento de subir el peso en prensa. He actualizado tu plan...</p>
                                            </div>
                                        </li>

                                        <li class="item-mensaje p-3 p-md-4 border-bottom border-success d-flex gap-3 align-items-start" data-id="2">
                                            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=100&auto=format&fit=crop"
                                                alt="Marta Silvestre" class="avatar-remitente rounded-circle object-fit-cover border border-success flex-shrink-0" width="46" height="46">
                                            <div class="contenido-mensaje flex-grow-1">
                                                <div class="info-remitente d-flex flex-wrap justify-content-between align-items-center gap-2 mb-1">
                                                    <div class="d-flex flex-wrap align-items-center gap-2">
                                                        <h4 class="h6 fw-bold text-success mb-0">Marta Silvestre</h4>
                                                        <span class="rol-tag badge bg-white text-success border border-success rounded-pill px-2 py-1">NUTRICIONISTA</span>
                                                    </div>
                                                    <span class="tiempo-envio small text-success">Hoy, 09:15 AM</span>
                                                </div>
                                                <h5 class="asunto-mensaje small fw-bold text-success mb-1">Recordatorio: Consulta de Seguimiento</h5>
                                                <p class="snippet-mensaje small text-success mb-0">No olvides que mañana a las 10:00 AM tenemos nuestra sesión para ajustar los macros de este mes.</p>
                                            </div>
                                        </li>

                                        <li class="item-mensaje no-leido p-3 p-md-4 border-bottom border-success d-flex gap-3 align-items-start" data-id="3">
                                            <div class="avatar-remitente icono-sistema bg-success text-white rounded-circle d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0"
                                                >
                                                <ion-icon name="fitness-outline"></ion-icon>
                                            </div>
                                            <div class="contenido-mensaje flex-grow-1">
                                                <div class="info-remitente d-flex flex-wrap justify-content-between align-items-center gap-2 mb-1">
                                                    <div class="d-flex flex-wrap align-items-center gap-2">
                                                        <h4 class="h6 fw-bold text-success mb-0">Sistema AGROFIT</h4>
                                                        <span class="rol-tag badge bg-success text-white rounded-pill px-2 py-1">NOTIFICACIONES</span>
                                                    </div>
                                                    <span class="tiempo-envio small text-success fw-semibold">Ayer</span>
                                                </div>
                                                <h5 class="asunto-mensaje small fw-bold text-success mb-1">¡Nueva Insignia Desbloqueada!</h5>
                                                <p class="snippet-mensaje small text-success mb-0">Felicidades, has completado 20 asistencias consecutivas este mes. ¡Sigue así, campeón!</p>
                                            </div>
                                        </li>

                                        <li class="item-mensaje p-3 p-md-4 border-bottom border-success d-flex gap-3 align-items-start" data-id="4">
                                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&auto=format&fit=crop"
                                                alt="Roberto Gómez" class="avatar-remitente rounded-circle object-fit-cover border border-success flex-shrink-0" width="46" height="46">
                                            <div class="contenido-mensaje flex-grow-1">
                                                <div class="info-remitente d-flex flex-wrap justify-content-between align-items-center gap-2 mb-1">
                                                    <div class="d-flex flex-wrap align-items-center gap-2">
                                                        <h4 class="h6 fw-bold text-success mb-0">Roberto Gómez</h4>
                                                        <span class="rol-tag badge bg-white text-success border border-success rounded-pill px-2 py-1">INSTRUCTOR POWERLIFTING</span>
                                                    </div>
                                                    <span class="tiempo-envio small text-success">Hace 2 días</span>
                                                </div>
                                                <h5 class="asunto-mensaje small fw-bold text-success mb-1">Técnica de Peso Muerto</h5>
                                                <p class="snippet-mensaje small text-success mb-0">Vi tu video de ayer. Buen trabajo, pero recuerda mantener la espalda más neutra en la fase inicial del tirón.</p>
                                            </div>
                                        </li>

                                        <li class="item-mensaje p-3 p-md-4 border-bottom border-success d-flex gap-3 align-items-start" data-id="5">
                                            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=100&auto=format&fit=crop"
                                                alt="Admin Fitness" class="avatar-remitente rounded-circle object-fit-cover border border-success flex-shrink-0" width="46" height="46">
                                            <div class="contenido-mensaje flex-grow-1">
                                                <div class="info-remitente d-flex flex-wrap justify-content-between align-items-center gap-2 mb-1">
                                                    <div class="d-flex flex-wrap align-items-center gap-2">
                                                        <h4 class="h6 fw-bold text-success mb-0">Admin Fitness</h4>
                                                        <span class="rol-tag badge bg-white text-success border border-success rounded-pill px-2 py-1">ADMINISTRACIÓN</span>
                                                    </div>
                                                    <span class="tiempo-envio small text-success">Hace 3 días</span>
                                                </div>
                                                <h5 class="asunto-mensaje small fw-bold text-success mb-1">Mantenimiento del Área de Pesas</h5>
                                                <p class="snippet-mensaje small text-success mb-0">Estimados socios, el área de pesas libres estará cerrada por mantenimiento técnico este domingo de 8 a 12.</p>
                                            </div>
                                        </li>
                                    </ul>

                                    <footer class="paginacion-mensajes px-4 py-3 d-flex justify-content-between align-items-center small text-success">
                                        <span>Página 1 de 1</span>
                                        <div class="btn-paginacion d-flex gap-2">
                                            <button type="button" class="btn btn-outline-success rounded-pill px-3 py-1 small fw-semibold" disabled>Anterior</button>
                                            <button type="button" class="btn btn-outline-success rounded-pill px-3 py-1 small fw-semibold" disabled>Siguiente</button>
                                        </div>
                                    </footer>
                                </div>
                            </main>
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