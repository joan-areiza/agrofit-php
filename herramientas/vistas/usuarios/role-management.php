<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agrofit | Gestión de Roles y Permisos</title>
    <link rel="icon" type="image/png" href="../../../assets/img/sena-logo.png">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
</head>

<body class="bg-white text-success min-vh-100 d-flex flex-column">

    <!-- Encabezado superior -->
    <header class="navbar navbar-expand-lg navbar-dark bg-success sticky-top shadow-sm py-3">
        <div class="container-fluid px-4">
            <a class="navbar-brand d-flex align-items-center gap-2 m-0" href="../../../index.php">
                <img src="../../../assets/img/agrofit-logo.png" alt="Logo Agrofit" height="45">
                <span class="fw-bold text-white">AGROFIT</span>
            </a>

            <div class="d-flex align-items-center gap-2">
                <a href="../dashboards/admin-dashboard.php"
                    class="btn btn-outline-light rounded-pill px-3 fw-semibold">
                    <i class="bi bi-arrow-left"></i> Volver al Panel
                </a>
                <button type="button" class="btn btn-light text-success rounded-pill px-4 fw-semibold"
                    data-bs-toggle="modal" data-bs-target="#modalRol" id="btnAbrirNuevoRol">
                    <i class="bi bi-plus-circle"></i> Nuevo Rol
                </button>
            </div>
        </div>
    </header>

    <!-- Contenido principal -->
    <main class="container-fluid flex-grow-1 px-4 py-4">
        <!-- Encabezado de sección -->
        <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4 pb-3 border-bottom border-success">
            <div>
                <span class="badge bg-success text-white rounded-pill px-3 py-2 mb-2">
                    <i class="bi bi-shield-lock"></i> Administración de Acceso
                </span>
                <h1 class="h2 fw-bold text-success mb-1">Gestión de Roles y Permisos</h1>
                <p class="text-success mb-0">Configura los roles del sistema y define qué módulos puede consultar o administrar cada perfil.</p>
            </div>

            <!-- Buscador y filtro -->
            <div class="d-flex flex-wrap gap-2">
                <select id="filtroEstadoRol" class="form-select border-success text-success rounded-pill px-3" aria-label="Filtrar por estado">
                    <option value="todos" selected>Todos los estados</option>
                    <option value="Activo">Activos</option>
                    <option value="Inactivo">Inactivos</option>
                </select>
                <input type="search" id="buscarRol" class="form-control border-success text-success rounded-pill px-3"
                    placeholder="Buscar rol...">
            </div>
        </div>

        <!-- Tarjetas resumen -->
        <div class="row g-3 mb-4">
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="card bg-white text-success border border-success rounded-4 p-3 shadow-sm h-100">
                    <small class="fw-bold text-uppercase">Roles configurados</small>
                    <span class="fs-2 fw-bold" id="totalRolesCount">4</span>
                    <small class="text-success">Perfiles base de Agrofit</small>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="card bg-white text-success border border-success rounded-4 p-3 shadow-sm h-100">
                    <small class="fw-bold text-uppercase">Roles activos</small>
                    <span class="fs-2 fw-bold" id="rolesActivosCount">4</span>
                    <small class="text-success">Habilitados para iniciar sesión</small>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="card bg-white text-success border border-success rounded-4 p-3 shadow-sm h-100">
                    <small class="fw-bold text-uppercase">Módulos controlados</small>
                    <span class="fs-2 fw-bold">7</span>
                    <small class="text-success">Inicio, Rutinas, Seguimiento, Gimnasio...</small>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="card bg-white text-success border border-success rounded-4 p-3 shadow-sm h-100">
                    <small class="fw-bold text-uppercase">Rol principal</small>
                    <span class="fs-4 fw-bold">Administrador</span>
                    <small class="text-success">Acceso global al sistema</small>
                </div>
            </div>
        </div>

        <!-- Tabla de roles -->
        <div class="card bg-white text-success border border-success rounded-4 shadow-sm mb-4">
            <div class="card-header bg-success text-white rounded-top-4 py-3 px-4 d-flex justify-content-between align-items-center">
                <h2 class="h5 fw-bold mb-0"><i class="bi bi-list-check"></i> Listado de Roles</h2>
                <span class="badge bg-white text-success rounded-pill px-3 py-1" id="contadorFilas">4 roles</span>
            </div>

            <div class="table-responsive p-3">
                <table class="table table-hover align-middle mb-0" id="tablaRoles">
                    <thead class="table-light text-success border-success">
                        <tr>
                            <th>ID</th>
                            <th>Nombre del Rol</th>
                            <th>Descripción</th>
                            <th>Módulos Habilitados</th>
                            <th>Estado</th>
                            <th class="text-end">Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="cuerpoTablaRoles">
                        <tr data-nombre="administrador" data-estado="Activo">
                            <td class="fw-semibold">1</td>
                            <td class="fw-bold">Administrador</td>
                            <td>Supervisión global, usuarios, programas, maquinaria, horarios y mensajes.</td>
                            <td>
                                <span class="badge bg-success text-white rounded-pill">Inicio</span>
                                <span class="badge bg-success text-white rounded-pill">Rutinas</span>
                                <span class="badge bg-success text-white rounded-pill">Seguimiento</span>
                                <span class="badge bg-success text-white rounded-pill">Gimnasio</span>
                                <span class="badge bg-success text-white rounded-pill">Programas</span>
                                <span class="badge bg-success text-white rounded-pill">Usuarios</span>
                                <span class="badge bg-success text-white rounded-pill">Contacto</span>
                            </td>
                            <td><span class="badge bg-success text-white rounded-pill px-3">Activo</span></td>
                            <td class="text-end">
                                <button type="button" class="btn btn-sm btn-outline-success rounded-pill px-3 btn-editar-rol"
                                    data-id="1" data-nombre="Administrador"
                                    data-descripcion="Supervisión global, usuarios, programas, maquinaria, horarios y mensajes."
                                    data-estado="Activo"
                                    data-modulos="inicio,rutinas,seguimiento,gimnasio,programas,usuarios,contacto">
                                    <i class="bi bi-pencil"></i> Editar
                                </button>
                            </td>
                        </tr>

                        <tr data-nombre="entrenador" data-estado="Activo">
                            <td class="fw-semibold">2</td>
                            <td class="fw-bold">Entrenador</td>
                            <td>Prescripción y control de rutinas, validación de asistencia, medidas y directorio.</td>
                            <td>
                                <span class="badge bg-success text-white rounded-pill">Inicio</span>
                                <span class="badge bg-success text-white rounded-pill">Rutinas</span>
                                <span class="badge bg-success text-white rounded-pill">Seguimiento</span>
                                <span class="badge bg-success text-white rounded-pill">Contacto</span>
                            </td>
                            <td><span class="badge bg-success text-white rounded-pill px-3">Activo</span></td>
                            <td class="text-end">
                                <button type="button" class="btn btn-sm btn-outline-success rounded-pill px-3 btn-editar-rol"
                                    data-id="2" data-nombre="Entrenador"
                                    data-descripcion="Prescripción y control de rutinas, validación de asistencia, medidas y directorio."
                                    data-estado="Activo"
                                    data-modulos="inicio,rutinas,seguimiento,contacto">
                                    <i class="bi bi-pencil"></i> Editar
                                </button>
                            </td>
                        </tr>

                        <tr data-nombre="funcionario" data-estado="Activo">
                            <td class="fw-semibold">3</td>
                            <td class="fw-bold">Funcionario</td>
                            <td>Control de ingreso, aforo, protocolo de higiene y apoyo en sala.</td>
                            <td>
                                <span class="badge bg-success text-white rounded-pill">Inicio</span>
                                <span class="badge bg-success text-white rounded-pill">Seguimiento</span>
                                <span class="badge bg-success text-white rounded-pill">Gimnasio</span>
                                <span class="badge bg-success text-white rounded-pill">Contacto</span>
                            </td>
                            <td><span class="badge bg-success text-white rounded-pill px-3">Activo</span></td>
                            <td class="text-end">
                                <button type="button" class="btn btn-sm btn-outline-success rounded-pill px-3 btn-editar-rol"
                                    data-id="3" data-nombre="Funcionario"
                                    data-descripcion="Control de ingreso, aforo, protocolo de higiene y apoyo en sala."
                                    data-estado="Activo"
                                    data-modulos="inicio,seguimiento,gimnasio,contacto">
                                    <i class="bi bi-pencil"></i> Editar
                                </button>
                            </td>
                        </tr>

                        <tr data-nombre="aprendiz" data-estado="Activo">
                            <td class="fw-semibold">4</td>
                            <td class="fw-bold">Aprendiz</td>
                            <td>Consulta de rutinas, semana de adaptación, progreso, asistencia, medidas y mensajes.</td>
                            <td>
                                <span class="badge bg-success text-white rounded-pill">Inicio</span>
                                <span class="badge bg-success text-white rounded-pill">Rutinas</span>
                                <span class="badge bg-success text-white rounded-pill">Seguimiento</span>
                                <span class="badge bg-success text-white rounded-pill">Contacto</span>
                            </td>
                            <td><span class="badge bg-success text-white rounded-pill px-3">Activo</span></td>
                            <td class="text-end">
                                <button type="button" class="btn btn-sm btn-outline-success rounded-pill px-3 btn-editar-rol"
                                    data-id="4" data-nombre="Aprendiz"
                                    data-descripcion="Consulta de rutinas, semana de adaptación, progreso, asistencia, medidas y mensajes."
                                    data-estado="Activo"
                                    data-modulos="inicio,rutinas,seguimiento,contacto">
                                    <i class="bi bi-pencil"></i> Editar
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <!-- Modal Crear / Editar Rol -->
    <div class="modal fade" id="modalRol" tabindex="-1" aria-labelledby="modalRolLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content bg-white text-success border border-success rounded-4 shadow">
                <div class="modal-header bg-success text-white rounded-top-4">
                    <h2 class="modal-title h5 fw-bold mb-0" id="modalRolLabel">Registrar Rol</h2>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>

                <form id="formRol" method="POST" action="../../controlador/rolControl.php">
                    <div class="modal-body p-4">
                        <input type="hidden" id="rolId" name="id_rol">

                        <div class="row g-3 mb-3">
                            <div class="col-12 col-md-8">
                                <label for="nombreRol" class="form-label fw-semibold">Nombre del Rol *</label>
                                <input type="text" id="nombreRol" name="nombre_rol"
                                    class="form-control border-success text-success"
                                    placeholder="Ej. Coordinador" required>
                            </div>
                            <div class="col-12 col-md-4">
                                <label for="estadoRol" class="form-label fw-semibold">Estado *</label>
                                <select id="estadoRol" name="estado_rol" class="form-select border-success text-success" required>
                                    <option value="Activo" selected>Activo</option>
                                    <option value="Inactivo">Inactivo</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="descripcionRol" class="form-label fw-semibold">Descripción *</label>
                            <textarea id="descripcionRol" name="descripcion_rol" rows="2"
                                class="form-control border-success text-success"
                                placeholder="Describe las responsabilidades de este rol..." required></textarea>
                        </div>

                        <div>
                            <label class="form-label fw-semibold d-block mb-2">Permisos por Módulo del Menú</label>
                            <div class="row g-2 border border-success rounded-3 p-3">
                                <div class="col-6 col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input border-success modulo-check" type="checkbox"
                                            name="modulos[]" value="inicio" id="modInicio">
                                        <label class="form-check-label fw-semibold" for="modInicio">Inicio</label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input border-success modulo-check" type="checkbox"
                                            name="modulos[]" value="rutinas" id="modRutinas">
                                        <label class="form-check-label fw-semibold" for="modRutinas">Rutinas</label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input border-success modulo-check" type="checkbox"
                                            name="modulos[]" value="seguimiento" id="modSeguimiento">
                                        <label class="form-check-label fw-semibold" for="modSeguimiento">Seguimiento</label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input border-success modulo-check" type="checkbox"
                                            name="modulos[]" value="gimnasio" id="modGimnasio">
                                        <label class="form-check-label fw-semibold" for="modGimnasio">Gimnasio</label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input border-success modulo-check" type="checkbox"
                                            name="modulos[]" value="programas" id="modProgramas">
                                        <label class="form-check-label fw-semibold" for="modProgramas">Programas</label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input border-success modulo-check" type="checkbox"
                                            name="modulos[]" value="usuarios" id="modUsuarios">
                                        <label class="form-check-label fw-semibold" for="modUsuarios">Usuarios</label>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input border-success modulo-check" type="checkbox"
                                            name="modulos[]" value="contacto" id="modContacto">
                                        <label class="form-check-label fw-semibold" for="modContacto">Contacto</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer border-top border-success">
                        <button type="button" class="btn btn-outline-success rounded-pill px-4 fw-semibold"
                            data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-success text-white rounded-pill px-4 fw-semibold">
                            <i class="bi bi-check-lg"></i> Guardar Rol
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Pie de página -->
    <footer class="bg-success text-white py-3 mt-auto">
        <div class="container-fluid px-4 d-flex flex-wrap justify-content-between align-items-center small">
            <span>&copy; 2026 AGROFIT • SENA</span>
            <a href="https://www.sena.edu.co/" target="_blank" class="text-white text-decoration-none fw-semibold">www.sena.edu.co</a>
        </div>
    </footer>

    <!-- Bootstrap JS & SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>