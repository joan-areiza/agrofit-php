<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Agrofit | Modulo - Admin</title>
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
                <a href="learner-admin.php"
                    class="d-none d-lg-flex align-items-center gap-2 mb-3 pb-3 text-white text-decoration-none border-bottom border-white">
                    <i class="bi bi-box-seam fs-4 text-white"></i>
                    <span class="fs-5 fw-semibold text-white">AGROFIT</span>
                </a>

                <ul class="nav nav-pills flex-column gap-1 mb-auto" id="listaMenu">

                    <!-- Opción simple (sin submenú) -->
                    <li class="nav-item">
                        <a class="nav-link active bg-white text-success fw-semibold d-flex align-items-center gap-2"
                            href="admin-dashboard.php">
                            <i class="bi bi-house-door"></i> Inicio
                        </a>
                    </li>

                    <!-- Opción con submenú: Gimnasio -->
                    <li class="nav-item">
                        <a class="nav-link text-white d-flex align-items-center gap-2" href="#subGimnasio" role="button"
                            data-bs-toggle="collapse" aria-expanded="false" aria-controls="subGimnasio">
                            <i class="bi bi-people"></i> Gimnasio
                            <i class="bi bi-chevron-down ms-auto"></i>
                        </a>
                        <div class="collapse" id="subGimnasio" data-bs-parent="#listaMenu">
                            <ul class="nav flex-column gap-1 mt-1 ps-4">
                                <li><a class="nav-link text-white small" href="../gimnasio/equipment-management.php">Gestión de Máquinas</a></li>
                                <li><a class="nav-link text-white small" href="../gimnasio/schedule-management.php">Gestión de Horarios</a></li>
                            </ul>
                        </div>
                    </li>

                    <!-- Opción con submenú: Programas -->
                    <li class="nav-item">
                        <a class="nav-link text-white d-flex align-items-center gap-2" href="#subProgramas" role="button"
                            data-bs-toggle="collapse" aria-expanded="false" aria-controls="subProgramas">
                            <i class="bi bi-people"></i> Programas
                            <i class="bi bi-chevron-down ms-auto"></i>
                        </a>
                        <div class="collapse" id="subProgramas" data-bs-parent="#listaMenu">
                            <ul class="nav flex-column gap-1 mt-1 ps-4">
                                <li><a class="nav-link text-white small" href="../programas/program-management.php">Gestión de Programas</a></li>

                            </ul>
                        </div>
                    </li>

                    <!-- Opción con submenú: Usuarios -->
                    <li class="nav-item">
                        <a class="nav-link text-white d-flex align-items-center gap-2" href="#subUsuarios" role="button"
                            data-bs-toggle="collapse" aria-expanded="false" aria-controls="subUsuarios">
                            <i class="bi bi-people"></i> Usuarios
                            <i class="bi bi-chevron-down ms-auto"></i>
                        </a>
                        <div class="collapse" id="subUsuarios" data-bs-parent="#listaMenu">
                            <ul class="nav flex-column gap-1 mt-1 ps-4">
                                <li><a class="nav-link text-white small" href="../usuarios/user-management.php">Gestión de Usuarios</a></li>
                                <li><a class="nav-link text-white small" href="../usuarios/role-management.php">Gestión de Roles</a></li>
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
                                <li><a class="nav-link text-white small" href="../contacto/messages/admin-messages.php">Mensajes - Admin</a></li>
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
            <h1 class="h3 fw-bold text-success">Contenido de la página</h1>
            <p class="text-success">Aquí va el contenido de cada pantalla.</p>
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
    <script type="text/javascript" src="../herramientas/js/logout.js" defer></script>
    <script type="text/javascript" src="../herramientas/js/reveal.js" defer></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@8.0.13/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@8.0.13/dist/ionicons/ionicons.js"></script>
</body>

</html>