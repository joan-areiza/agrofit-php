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
                        <a class="nav-link active bg-success text-light fw-semibold d-flex align-items-center gap-2"
                            href="learner-dashboard.php">
                            <i class="bi bi-house-door"></i> Inicio
                        </a>
                    </li>

                    <!-- Opción con submenú: Rutinas -->
                    <li class="nav-item">
                        <a class="nav-link bg-white text-success d-flex align-items-center gap-2" href="#subRutinas" role="button"
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
            <div class="card shadow-sm mt-4">
					<div class="card-body">
						<div class="row g-2 align-items-end">
							<div class="col-md-8">
								<label for="txtArea" class="form-label">Nombre del área</label>
								<!-- stopPropagation permite escribir aunque el body tenga onkeydown="return false" -->
								<input type="text" class="form-control" id="txtArea" name="txtArea"
									   placeholder="Escriba el nombre del área" onkeydown="event.stopPropagation()">
							</div>
							<div class="col-md-4 d-grid">
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalRutinas">
									Abrir modal
								</button>
							</div>
						</div>
					</div>
			</div>
            <!--   inicio de modal crear rutina --> 				
			<div class="modal fade" id="modalRutinas" tabindex="-1" aria-labelledby="modalAreaLabel" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="modalAreaLabel">Área ingresada</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
							</div>
							<div class="modal-body">
								<div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Fecha registro</label>
                                    <input type="date" id='fechaRegistroUsuario' name='fechaRegistroUsuario' class="form-control" title='' style='cursor:pointer;' >
                                </div>	
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Identificaciòn</label>
                                    <input type="text" id='numeroIdentificacionUsuario' name='numeroIdentificacionUsuario' class="form-control" title='' style='cursor:pointer;' >
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Nombres</label>
                                    <input type="text" id='nombresUsuario' name='nombresUsuario' class="form-control" title='' style='cursor:pointer;' placeholder='Ingerse el nombre de usuario' >
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Nombres</label>
                                    <select id='idArea_FK' name='idArea_FK' class="form-control" title='' style='cursor:pointer;' >
                                            <option value='0' >Seleccioines:.</option>
                                            <option value='1' >Sistemas</option>
                                            <option value='2' >Carnicos</option>
                                            <option value='3' >Deportes</option>
                                            <option value='4' >Lacteos</option>
                                            <option value='5' >Especies menores</option>
                                    </select>
                                </div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
								<button type="button" class="btn btn-success">Guardar</button>
							</div>
						</div>
					</div>
			</div>
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