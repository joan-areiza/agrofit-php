<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agrofit | Modulo - Administrador</title>
    <link rel="icon" type="image/png" href="../../../assets/img/sena-logo.png">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body class="bg-white text-success min-vh-100 d-flex flex-column">
    <header class="navbar navbar-expand-lg navbar-dark bg-success sticky-top shadow-sm py-3">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center gap-3">
                <a class="navbar-brand d-flex align-items-center m-0" href="../../../../src/features/dashboards/admin-dashboard/admin-dashboard.html">
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
            <h5 class="offcanvas-title fw-bold text-white" id="mobileMenuLabel">AGROFIT • ADMINISTRADOR</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Cerrar"></button>
        </div>
        <div class="offcanvas-body d-flex flex-column justify-content-between py-4">
            <nav class="nav-barra-lateral d-flex flex-column gap-2">
                <a href="../../../../src/features/dashboards/admin-dashboard/admin-dashboard.html"
                    class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                    <ion-icon name="home"></ion-icon> Inicio
                </a>
                <a href="../../../../src/features/users/user-management/user-management.html"
                    class="enlace-nav activo nav-link bg-white text-success fw-bold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                    <ion-icon name="person"></ion-icon> Control de Usuarios
                </a>
                <a href="../../../../src/features/equipment/equipment-management/equipment-management.html"
                    class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                    <ion-icon name="shield"></ion-icon> Control de Maquinaria
                </a>
                <a href="../../../../src/features/schedules/schedule-management/schedule-management.html"
                    class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                    <ion-icon name="today"></ion-icon> Control de Horarios
                </a>
                <a href="../../../../src/features/programs/program-management/program-management.html"
                    class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                    <ion-icon name="school"></ion-icon> Control de Programas
                </a>
                <a href="../../../../src/features/messaging/admin-messages/admin-messages.html"
                    class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                    <ion-icon name="notifications"></ion-icon> Mensajes
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
                        <a href="../../../../src/features/dashboards/admin-dashboard/admin-dashboard.html"
                            class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                            <ion-icon name="home"></ion-icon> Inicio
                        </a>
                        <a href="../../../../src/features/users/user-management/user-management.html"
                            class="enlace-nav activo nav-link bg-white text-success fw-bold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                            <ion-icon name="person"></ion-icon> Control de Usuarios
                        </a>
                        <a href="../../../../src/features/equipment/equipment-management/equipment-management.html"
                            class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                            <ion-icon name="shield"></ion-icon> Control de Maquinaria
                        </a>
                        <a href="../../../../src/features/schedules/schedule-management/schedule-management.html"
                            class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                            <ion-icon name="today"></ion-icon> Control de Horarios
                        </a>
                        <a href="../../../../src/features/programs/program-management/program-management.html"
                            class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                            <ion-icon name="school"></ion-icon> Control de Programas
                        </a>
                        <a href="../../../../src/features/messaging/admin-messages/admin-messages.html"
                            class="enlace-nav nav-link text-white fw-semibold rounded-pill px-3 py-2 d-flex align-items-center gap-2">
                            <ion-icon name="notifications"></ion-icon> Mensajes
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
                    <section id="gestion-usuarios" class="modulo-gestion bg-white text-success border border-success rounded-4 p-4 p-md-5 shadow-sm">
                        <div class="encabezado-modulo mb-4 pb-3 border-bottom border-success">
                            <span class="badge-subtitulo badge bg-success text-white rounded-pill px-3 py-2 fw-bold mb-2 d-inline-block">CONTROL DE ACCESO</span>
                            <h1 class="titulo-modulo h2 fw-bold text-success mb-1">Gestión de Usuarios y Roles</h1>
                            <p class="descripcion-modulo text-success mb-0">Control de estados, permisos y accesos del personal y aprendices.</p>
                        </div>

                        <div class="contenedor-tabla-usuarios table-responsive">
                            <table class="tabla-usuarios table align-middle mb-0">
                                <thead>
                                    <tr class="text-success small">
                                        <th class="text-success">USUARIO</th>
                                        <th class="text-success">DOCUMENTO</th>
                                        <th class="text-success">ROL EN SISTEMA</th>
                                        <th class="text-success">FICHA / CARGO</th>
                                        <th class="text-success">ESTADO</th>
                                        <th class="texto-derecha text-end text-success">ACCIÓN</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="info-usuario">
                                                <span class="nombre-usuario fw-bold text-success d-block">Jairo Andrés Pérez Gómez</span>
                                                <span class="email-usuario small text-success">jairo.perez@misena.edu.co</span>
                                            </div>
                                        </td>
                                        <td class="text-success">CC 1002345678</td>
                                        <td><span class="tag-rol aprendiz badge bg-white text-success border border-success rounded-pill px-3 py-1">APRENDIZ</span></td>
                                        <td class="text-success">2694520</td>
                                        <td><span class="badge-estado activo badge bg-success text-white rounded-pill px-3 py-2">Activo</span></td>
                                        <td class="texto-derecha text-end">
                                            <button type="button" class="btn-accion btn-suspender btn btn-outline-success rounded-pill px-4 py-1 fw-semibold"
                                                onclick="cambiarEstado(this)">Suspender</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="info-usuario">
                                                <span class="nombre-usuario fw-bold text-success d-block">Laura María Sánchez Rivas</span>
                                                <span class="email-usuario small text-success">laura.instructor@sena.edu.co</span>
                                            </div>
                                        </td>
                                        <td class="text-success">CC 1098765432</td>
                                        <td><span class="tag-rol instructor badge bg-white text-success border border-success rounded-pill px-3 py-1">INSTRUCTOR</span></td>
                                        <td class="text-success">Acondicionamiento Físico y Biomecánica Deportiva</td>
                                        <td><span class="badge-estado activo badge bg-success text-white rounded-pill px-3 py-2">Activo</span></td>
                                        <td class="texto-derecha text-end">
                                            <button type="button" class="btn-accion btn-suspender btn btn-outline-success rounded-pill px-4 py-1 fw-semibold"
                                                onclick="cambiarEstado(this)">Suspender</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="info-usuario">
                                                <span class="nombre-usuario fw-bold text-success d-block">Carlos Eduardo Montoya Vega</span>
                                                <span class="email-usuario small text-success">coordinacion.agrofit@sena.edu.co</span>
                                            </div>
                                        </td>
                                        <td class="text-success">CC 79845123</td>
                                        <td><span class="tag-rol administrador badge bg-white text-success border border-success rounded-pill px-3 py-1">ADMINISTRADOR</span></td>
                                        <td class="text-success">Coordinador General de Bienestar y Gimnasio</td>
                                        <td><span class="badge-estado activo badge bg-success text-white rounded-pill px-3 py-2">Activo</span></td>
                                        <td class="texto-derecha text-end">
                                            <button type="button" class="btn-accion btn-suspender btn btn-outline-success rounded-pill px-4 py-1 fw-semibold"
                                                onclick="cambiarEstado(this)">Suspender</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="info-usuario">
                                                <span class="nombre-usuario fw-bold text-success d-block">Rodrigo Castro Benítez</span>
                                                <span class="email-usuario small text-success">vigilancia.gimnasio@sena.edu.co</span>
                                            </div>
                                        </td>
                                        <td class="text-success">CC 52431980</td>
                                        <td><span class="tag-rol funcionario badge bg-white text-success border border-success rounded-pill px-3 py-1">FUNCIONARIO</span></td>
                                        <td class="text-success">Seguridad y Control de Ingreso</td>
                                        <td><span class="badge-estado activo badge bg-success text-white rounded-pill px-3 py-2">Activo</span></td>
                                        <td class="texto-derecha text-end">
                                            <button type="button" class="btn-accion btn-suspender btn btn-outline-success rounded-pill px-4 py-1 fw-semibold"
                                                onclick="cambiarEstado(this)">Suspender</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="info-usuario">
                                                <span class="nombre-usuario fw-bold text-success d-block">Martha Elena Gómez Quintero</span>
                                                <span class="email-usuario small text-success">martha.limpieza@sena.edu.co</span>
                                            </div>
                                        </td>
                                        <td class="text-success">CC 41982345</td>
                                        <td><span class="tag-rol funcionario badge bg-white text-success border border-success rounded-pill px-3 py-1">FUNCIONARIO</span></td>
                                        <td class="text-success">Desinfección, Higiene y Mantenimiento de Máquinas</td>
                                        <td><span class="badge-estado activo badge bg-success text-white rounded-pill px-3 py-2">Activo</span></td>
                                        <td class="texto-derecha text-end">
                                            <button type="button" class="btn-accion btn-suspender btn btn-outline-success rounded-pill px-4 py-1 fw-semibold"
                                                onclick="cambiarEstado(this)">Suspender</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="info-usuario">
                                                <span class="nombre-usuario fw-bold text-success d-block">Andrés Felipe Torres Valencia</span>
                                                <span class="email-usuario small text-success">andres.instructor.apoyo@sena.edu.co</span>
                                            </div>
                                        </td>
                                        <td class="text-success">CC 1014567890</td>
                                        <td><span class="tag-rol funcionario badge bg-white text-success border border-success rounded-pill px-3 py-1">FUNCIONARIO</span></td>
                                        <td class="text-success">Instructor de Sala y Asistente Técnico</td>
                                        <td><span class="badge-estado activo badge bg-success text-white rounded-pill px-3 py-2">Activo</span></td>
                                        <td class="texto-derecha text-end">
                                            <button type="button" class="btn-accion btn-suspender btn btn-outline-success rounded-pill px-4 py-1 fw-semibold"
                                                onclick="cambiarEstado(this)">Suspender</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="info-usuario">
                                                <span class="nombre-usuario fw-bold text-success d-block">Valentina Ríos Castañeda</span>
                                                <span class="email-usuario small text-success">valentina.rios@misena.edu.co</span>
                                            </div>
                                        </td>
                                        <td class="text-success">CC 1005678912</td>
                                        <td><span class="tag-rol aprendiz badge bg-white text-success border border-success rounded-pill px-3 py-1">APRENDIZ</span></td>
                                        <td class="text-success">2694520</td>
                                        <td><span class="badge-estado adaptacion badge bg-white text-success border border-success rounded-pill px-3 py-2">En Adaptación</span></td>
                                        <td class="texto-derecha text-end">
                                            <button type="button" class="btn-accion btn-activar btn btn-success text-white rounded-pill px-4 py-1 fw-semibold"
                                                onclick="cambiarEstado(this)">Activar</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="carrusel-usuarios-wrapper mt-4">
                            <div class="carrusel-usuarios-container row g-3" id="carruselUsuarios">
                                <div class="col-12 col-md-6">
                                    <div class="tarjeta-usuario tarjeta-novedad card bg-white text-success border border-success rounded-4 h-100 p-3 shadow-sm">
                                        <div class="tarjeta-header d-flex justify-content-between align-items-center mb-2">
                                            <span class="tag-rol aprendiz badge bg-white text-success border border-success rounded-pill px-3 py-1">APRENDIZ</span>
                                            <span class="badge-estado activo badge bg-success text-white rounded-pill px-3 py-1">Activo</span>
                                        </div>
                                        <h3 class="h6 fw-bold text-success mb-1">Jairo Andrés Pérez Gómez</h3>
                                        <p class="email-tarjeta small text-success mb-2">jairo.perez@misena.edu.co</p>
                                        <div class="tarjeta-body small text-success mb-3">
                                            <p class="mb-1"><strong>Doc:</strong> CC 1002345678</p>
                                            <p class="mb-0"><strong>Ficha/Cargo:</strong> 2694520</p>
                                        </div>
                                        <button type="button" class="btn-accion btn-suspender btn btn-outline-success rounded-pill px-4 py-1 fw-semibold mt-auto"
                                            onclick="cambiarEstado(this)">Suspender</button>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="tarjeta-usuario tarjeta-novedad card bg-white text-success border border-success rounded-4 h-100 p-3 shadow-sm">
                                        <div class="tarjeta-header d-flex justify-content-between align-items-center mb-2">
                                            <span class="tag-rol instructor badge bg-white text-success border border-success rounded-pill px-3 py-1">INSTRUCTOR</span>
                                            <span class="badge-estado activo badge bg-success text-white rounded-pill px-3 py-1">Activo</span>
                                        </div>
                                        <h3 class="h6 fw-bold text-success mb-1">Laura María Sánchez Rivas</h3>
                                        <p class="email-tarjeta small text-success mb-2">laura.instructor@sena.edu.co</p>
                                        <div class="tarjeta-body small text-success mb-3">
                                            <p class="mb-1"><strong>Doc:</strong> CC 1098765432</p>
                                            <p class="mb-0"><strong>Ficha/Cargo:</strong> Acondicionamiento Físico y Biomecánica Deportiva</p>
                                        </div>
                                        <button type="button" class="btn-accion btn-suspender btn btn-outline-success rounded-pill px-4 py-1 fw-semibold mt-auto"
                                            onclick="cambiarEstado(this)">Suspender</button>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="tarjeta-usuario tarjeta-novedad card bg-white text-success border border-success rounded-4 h-100 p-3 shadow-sm">
                                        <div class="tarjeta-header d-flex justify-content-between align-items-center mb-2">
                                            <span class="tag-rol administrador badge bg-white text-success border border-success rounded-pill px-3 py-1">ADMINISTRADOR</span>
                                            <span class="badge-estado activo badge bg-success text-white rounded-pill px-3 py-1">Activo</span>
                                        </div>
                                        <h3 class="h6 fw-bold text-success mb-1">Carlos Eduardo Montoya Vega</h3>
                                        <p class="email-tarjeta small text-success mb-2">coordinacion.agrofit@sena.edu.co</p>
                                        <div class="tarjeta-body small text-success mb-3">
                                            <p class="mb-1"><strong>Doc:</strong> CC 79845123</p>
                                            <p class="mb-0"><strong>Ficha/Cargo:</strong> Coordinador General de Bienestar y Gimnasio</p>
                                        </div>
                                        <button type="button" class="btn-accion btn-suspender btn btn-outline-success rounded-pill px-4 py-1 fw-semibold mt-auto"
                                            onclick="cambiarEstado(this)">Suspender</button>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="tarjeta-usuario tarjeta-novedad card bg-white text-success border border-success rounded-4 h-100 p-3 shadow-sm">
                                        <div class="tarjeta-header d-flex justify-content-between align-items-center mb-2">
                                            <span class="tag-rol aprendiz badge bg-white text-success border border-success rounded-pill px-3 py-1">APRENDIZ</span>
                                            <span class="badge-estado adaptacion badge bg-white text-success border border-success rounded-pill px-3 py-1">En Adaptación</span>
                                        </div>
                                        <h3 class="h6 fw-bold text-success mb-1">Valentina Ríos Castañeda</h3>
                                        <p class="email-tarjeta small text-success mb-2">valentina.rios@misena.edu.co</p>
                                        <div class="tarjeta-body small text-success mb-3">
                                            <p class="mb-1"><strong>Doc:</strong> CC 1005678912</p>
                                            <p class="mb-0"><strong>Ficha/Cargo:</strong> 2694520</p>
                                        </div>
                                        <button type="button" class="btn-accion btn-activar btn btn-success text-white rounded-pill px-4 py-1 fw-semibold mt-auto"
                                            onclick="cambiarEstado(this)">Activar</button>
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
                        <div class="bg-white text-success rounded-circle d-flex align-items-center justify-content-center fs-4">
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
                            <strong class="text-success">Administrador</strong>
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