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
                    <section id="modulo-rutinas" class="modulo-rutinas">
                        <div class="rutinas-grid row g-4 align-items-start">

                            <!-- Constructor de rutina -->
                            <div class="col-12 col-xl-7">
                                <article class="tarjeta-panel constructor-panel bg-white text-success border border-success rounded-4 p-4 p-md-5 shadow-sm">
                                    <header class="encabezado-panel mb-4 pb-3 border-bottom border-success">
                                        <span class="badge-tag badge bg-success text-white rounded-pill px-3 py-1 fw-bold mb-2 d-inline-block">CONSTRUCTOR</span>
                                        <h2 class="titulo-panel h4 fw-bold text-success d-flex align-items-center gap-2 mb-0">
                                            <ion-icon name="barbell-outline"></ion-icon>
                                            Crear Nueva Rutina de Entrenamiento
                                        </h2>
                                    </header>

                                    <form id="form-crear-rutina" class="form-rutina d-flex flex-column gap-3">
                                        <div class="grupo-campo">
                                            <label for="nombre-rutina" class="label-campo form-label fw-semibold text-success">Nombre de la Rutina *</label>
                                            <input type="text" id="nombre-rutina" class="input-texto form-control border-success text-success"
                                                placeholder="Ej. Hipertrofia Tren Superior ADSO - Fase 2" required>
                                        </div>

                                        <div class="fila-campos row g-3">
                                            <div class="grupo-campo col-12 col-md-6">
                                                <label for="objetivo-rutina" class="label-campo form-label fw-semibold text-success">Objetivo</label>
                                                <select id="objetivo-rutina" class="select-campo form-select border-success text-success">
                                                    <option value="Aumentar Masa Muscular">Aumentar Masa Muscular</option>
                                                    <option value="Fuerza">Fuerza</option>
                                                    <option value="Adaptación Física">Adaptación Física</option>
                                                    <option value="Resistencia">Resistencia</option>
                                                </select>
                                            </div>

                                            <div class="grupo-campo col-12 col-md-6">
                                                <label for="nivel-rutina" class="label-campo form-label fw-semibold text-success">Nivel</label>
                                                <select id="nivel-rutina" class="select-campo form-select border-success text-success">
                                                    <option value="Principiante">Principiante</option>
                                                    <option value="Intermedio" selected>Intermedio</option>
                                                    <option value="Avanzado">Avanzado</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="contenedor-ejercicios mt-2">
                                            <span class="label-campo d-block fw-semibold text-success mb-2">
                                                Ejercicios Incluidos en la Rutina (<span id="contador-seleccionados">2</span>)
                                            </span>

                                            <div class="carrusel-vertical d-flex flex-column gap-2 border border-success rounded-4 p-3"
                                                id="carrusel-ejercicios">
                                                <label class="item-ejercicio seleccionado d-flex align-items-center justify-content-between gap-3 border border-success bg-success text-white rounded-3 p-3 m-0">
                                                    <span class="texto-ejercicio small fw-semibold">Press de Banca Plano con Barra Olímpica (Banco Plano Olímpico de Pecho)</span>
                                                    <input type="checkbox" value="Press de Banca Plano" class="form-check-input border-success flex-shrink-0" checked>
                                                </label>

                                                <label class="item-ejercicio seleccionado d-flex align-items-center justify-content-between gap-3 border border-success bg-success text-white rounded-3 p-3 m-0">
                                                    <span class="texto-ejercicio small fw-semibold">Aperturas Pectorales en Polea Crossover (Polea Doble Crossover)</span>
                                                    <input type="checkbox" value="Aperturas Pectorales" class="form-check-input border-success flex-shrink-0" checked>
                                                </label>

                                                <label class="item-ejercicio d-flex align-items-center justify-content-between gap-3 border border-success bg-white text-success rounded-3 p-3 m-0">
                                                    <span class="texto-ejercicio small fw-semibold">Jalón al Pecho con Agarre Prono Amplio (Dorsalera / Polea Alta)</span>
                                                    <input type="checkbox" value="Jalón al Pecho" class="form-check-input border-success flex-shrink-0">
                                                </label>

                                                <label class="item-ejercicio d-flex align-items-center justify-content-between gap-3 border border-success bg-white text-success rounded-3 p-3 m-0">
                                                    <span class="texto-ejercicio small fw-semibold">Prensa Inclinada de Cuádriceps 45° (Prensa de Piernas 45°)</span>
                                                    <input type="checkbox" value="Prensa Inclinada 45°" class="form-check-input border-success flex-shrink-0">
                                                </label>
                                            </div>
                                        </div>

                                        <div class="d-grid gap-2 mt-3">
                                            <button type="submit" class="btn-guardar btn btn-success text-white rounded-pill py-2 fw-semibold d-inline-flex align-items-center justify-content-center gap-2">
                                                <ion-icon name="add-circle-outline"></ion-icon>
                                                Guardar y Asignar Rutina
                                            </button>

                                            <a href="coach-routines.php"
                                                class="btn-regresar btn btn-outline-success rounded-pill py-2 fw-semibold d-inline-flex align-items-center justify-content-center gap-2 text-decoration-none">
                                                <ion-icon name="arrow-back-outline"></ion-icon>
                                                Regresar
                                            </a>
                                        </div>
                                    </form>
                                </article>
                            </div>

                            <!-- Banco de rutinas -->
                            <div class="col-12 col-xl-5">
                                <article class="tarjeta-panel banco-panel bg-white text-success border border-success rounded-4 p-4 p-md-5 shadow-sm">
                                    <header class="encabezado-panel mb-4 pb-3 border-bottom border-success">
                                        <h2 class="titulo-banco h4 fw-bold text-success mb-0">Banco de Rutinas del Centro</h2>
                                    </header>

                                    <div class="lista-banco d-flex flex-column gap-3" id="lista-banco-rutinas">
                                        <div class="card-rutina-banco bg-white border border-success rounded-4 p-3 d-flex justify-content-between align-items-start gap-3 shadow-sm">
                                            <div class="info-rutina-banco">
                                                <span class="badge-tag tag-objetivo badge bg-success text-white rounded-pill px-3 py-1 fw-bold mb-2 d-inline-block">Aumentar Masa Muscular</span>
                                                <h3 class="nombre-rutina-banco h6 fw-bold text-success mb-1">Acondicionamiento Integral ADSO - Fase A</h3>
                                                <p class="meta-rutina-banco small text-success mb-0">5 ejercicios configurados</p>
                                            </div>
                                            <button type="button" class="btn-eliminar-rutina btn btn-outline-success rounded-circle d-inline-flex align-items-center justify-content-center flex-shrink-0"
                                                aria-label="Eliminar rutina" >
                                                <ion-icon name="trash-outline"></ion-icon>
                                            </button>
                                        </div>

                                        <div class="card-rutina-banco bg-white border border-success rounded-4 p-3 d-flex justify-content-between align-items-start gap-3 shadow-sm">
                                            <div class="info-rutina-banco">
                                                <span class="badge-tag tag-objetivo badge bg-success text-white rounded-pill px-3 py-1 fw-bold mb-2 d-inline-block">Aumentar Masa Muscular</span>
                                                <h3 class="nombre-rutina-banco h6 fw-bold text-success mb-1">Fuerza Inferior &amp; Tren Posterior - SENA Fit</h3>
                                                <p class="meta-rutina-banco small text-success mb-0">4 ejercicios configurados</p>
                                            </div>
                                            <button type="button" class="btn-eliminar-rutina btn btn-outline-success rounded-circle d-inline-flex align-items-center justify-content-center flex-shrink-0"
                                                aria-label="Eliminar rutina" >
                                                <ion-icon name="trash-outline"></ion-icon>
                                            </button>
                                        </div>

                                        <div class="card-rutina-banco bg-white border border-success rounded-4 p-3 d-flex justify-content-between align-items-start gap-3 shadow-sm">
                                            <div class="info-rutina-banco">
                                                <span class="badge-tag tag-objetivo badge bg-success text-white rounded-pill px-3 py-1 fw-bold mb-2 d-inline-block">Adaptación Física</span>
                                                <h3 class="nombre-rutina-banco h6 fw-bold text-success mb-1">Semana de Adaptación &amp; Acondicionamiento Básico</h3>
                                                <p class="meta-rutina-banco small text-success mb-0">2 ejercicios configurados</p>
                                            </div>
                                            <button type="button" class="btn-eliminar-rutina btn btn-outline-success rounded-circle d-inline-flex align-items-center justify-content-center flex-shrink-0"
                                                aria-label="Eliminar rutina" >
                                                <ion-icon name="trash-outline"></ion-icon>
                                            </button>
                                        </div>
                                    </div>
                                </article>
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