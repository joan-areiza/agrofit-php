<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agrofit | Modulo - Administrador</title>
    <!-- Favicon actualizado a assets/img/[cite: 7] -->
    <link rel="icon" type="image/png" href="../../../assets/img/sena-logo.png">

    <!-- ==================== BASE ==================== -->
    <!-- Reset -->
    <link rel="stylesheet" href="../../css/reset.css">

    <!-- Variables -->
    <link rel="stylesheet" href="../../css/variables.css">

    <!-- Fonts -->
    <link rel="stylesheet" href="../../css/fonts.css">

    <!-- Estilos generales -->
    <link rel="stylesheet" href="../../css/general.css">

    <!-- ==================== COMPONENTES ==================== -->
    <!-- Sidebar / Menú lateral -->
    <link rel="stylesheet" href="../../css/sidebar.css">

    <!-- Botones -->
    <link rel="stylesheet" href="../../css/buttons.css">

    <!-- Scroll -->
    <link rel="stylesheet" href="../../css/scroll.css">

    <!-- Footer -->
    <link rel="stylesheet" href="../../css/footer.css">

    <!-- ==================== FRAMEWORKS ==================== -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- ==================== RESPONSIVE ==================== -->
    <link rel="stylesheet" href="../../css/responsive.css">

    <!-- ==================== PÁGINA ==================== -->
    <!-- Bienvenida -->
    <link rel="stylesheet" href="../../css/dashboards/admin-dashboard.css">
</head>

<body>

    <!-- Botón que despliega/oculta la barra lateral en pantallas pequeñas -->
    <button class="menu-movil" id="menuMovil" aria-label="Toggle navigation">
        Menú
    </button>

    <!-- Fondo oscuro que aparece detrás del menú cuando está abierto en móvil -->
    <div class="superposicion" id="superposicion"></div>

    <!-- Barra lateral: menú principal de navegación -->
    <aside class="barra-lateral" id="barraLateral">

        <!-- Encabezado: logo + nombre del administrador -->
        <div class="encabezado-barra-lateral">
            <div class="marca-barra-lateral" id="btnPerfil" role="button" tabindex="0">
                <div class="icono-perfil">
                    <ion-icon name="person"></ion-icon>
                </div>
                <div class="info-perfil-texto">
                    <span class="version-marca">
                        <?php session_start();	echo $_SESSION['loginUsuSesion']; ?>
                    </span>
                </div>
            </div>
        </div>

        <!-- Navegación: enlaces a cada módulo/sección de la plataforma -->
        <nav class="nav-barra-lateral">

            <div class="item-nav">
                <a href="admin-dashboard.php" class="enlace-nav activo">
                    <ion-icon name="home"></ion-icon> Inicio
                </a>
            </div>

            <div class="item-nav">
                <a href="#" class="enlace-nav">
                    <ion-icon name="person"></ion-icon> Control de Usuarios
                </a>
            </div>

            <div class="item-nav">
                <a href="#" class="enlace-nav">
                    <ion-icon name="shield"></ion-icon> Control de Maquinaria
                </a>
            </div>

            <div class="item-nav">
                <a href="#" class="enlace-nav">
                    <ion-icon name="today"></ion-icon> Control de Horarios
                </a>
            </div>

            <div class="item-nav">
                <a href="#" class="enlace-nav">
                    <ion-icon name="school"></ion-icon> Control de Programas
                </a>
            </div>

            <div class="item-nav">
                <a href="#" class="enlace-nav">
                    <ion-icon name="notifications"></ion-icon> Mensajes
                </a>
            </div>

            <!-- Cierre de sesión: redirige al login e invoca confirmación vía SweetAlert2 -->
            <div class="item-nav">
                <a href="../../controlador/loginControl.php?opcion=salir" class="enlace-nav btn-logout" id="btnLogout">
                    <ion-icon name="exit"></ion-icon> Cerrar Sesión
                </a>
            </div>
        </nav>

        <!-- Pie de la barra lateral: créditos institucionales -->
        <footer class="pie-barra-lateral">
            <p>&copy; 2026 Todos los derechos reservados | <a href="https://www.sena.edu.co/" target="_blank">SENA</a> -</p>
            <a href="#" title="Pagina del SENA" target="_blank">Términos & Privacidad</a>
        </footer>
    </aside>

    <!-- Contenido principal: aquí se renderizan las secciones activas -->
    <main class="principal-doc">
        <div class="contenido-doc">
            <!-- ============================================================ -->
            <!-- SECTION -->
            <!-- ============================================================ -->
            <section id="panel-agrofit" class="seccion-dashboard">

                <div class="banner-agrofit">
                    <div class="badge-coordinacion">
                        <ion-icon name="sparkles-outline"></ion-icon>
                        <span>Coordinación General • Bienestar al Aprendiz SENA</span>
                    </div>
                    <h1 class="titulo-panel">Panel de Administración Global AGROFIT</h1>
                    <p class="descripcion-panel">
                        Supervisa el estado de la infraestructura deportiva, la asignación de roles, programas de
                        formación y aforos de las jornadas.
                    </p>
                </div>

                <div class="grid-kpi">
                    <div class="tarjeta-kpi">
                        <div class="kpi-info">
                            <span class="kpi-etiqueta">USUARIOS REGISTRADOS</span>
                            <div class="kpi-valor">7</div>
                            <span class="kpi-subtexto">Aprendices, Instructores y Staff</span>
                        </div>
                        <div class="kpi-icono">
                            <ion-icon name="people-outline"></ion-icon>
                        </div>
                    </div>

                    <div class="tarjeta-kpi">
                        <div class="kpi-info">
                            <span class="kpi-etiqueta">MÁQUINAS OPERATIVAS</span>
                            <div class="kpi-valor">5 <span class="kpi-total">/ 6</span></div>
                            <span class="kpi-subtexto">1 en mantenimiento preventivo</span>
                        </div>
                        <div class="kpi-icono">
                            <ion-icon name="build-outline"></ion-icon>
                        </div>
                    </div>

                    <div class="tarjeta-kpi">
                        <div class="kpi-info">
                            <span class="kpi-etiqueta">FICHAS VINCULADAS</span>
                            <div class="kpi-valor-texto">4 Programas</div>
                            <span class="kpi-subtexto">ADSO, Biocomercio, Agro</span>
                        </div>
                        <div class="kpi-icono">
                            <ion-icon name="folder-open-outline"></ion-icon>
                        </div>
                    </div>

                    <div class="tarjeta-kpi">
                        <div class="kpi-info">
                            <span class="kpi-etiqueta">AFORO PROMEDIO DIARIO</span>
                            <div class="kpi-valor">78%</div>
                            <span class="kpi-subtexto">120 visitas por día</span>
                        </div>
                        <div class="kpi-icono">
                            <ion-icon name="pulse-outline"></ion-icon>
                        </div>
                    </div>
                </div>

                <div class="contenedor-carrusel">
                    <h2 class="subtitulo-seccion">Nuestras Instalaciones y Jornadas</h2>

                    <div class="carrusel-wrapper">
                        <button class="btn-carrusel prev" id="carruselPrev" aria-label="Anterior">
                            <ion-icon name="chevron-back-outline"></ion-icon>
                        </button>

                        <div class="carrusel-pista" id="carruselPista">
                            <div class="tarjeta-novedad carrusel-item">
                                <img src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?auto=format&fit=crop&w=600&q=80"
                                    alt="Gimnasio AGROFIT">
                                <div class="carrusel-contenido">
                                    <h3>Área de Musculación</h3>
                                    <p>Equipamiento de alta tecnología para el entrenamiento de aprendices.</p>
                                </div>
                            </div>

                            <div class="tarjeta-novedad carrusel-item">
                                <img src="https://images.unsplash.com/photo-1571902943202-507ec2618e8f?auto=format&fit=crop&w=600&q=80"
                                    alt="Zona Cardiovascular">
                                <div class="carrusel-contenido">
                                    <h3>Zona Cardiovascular</h3>
                                    <p>Espacios acondicionados para el desarrollo de resistencia física.</p>
                                </div>
                            </div>

                            <div class="tarjeta-novedad carrusel-item">
                                <img src="https://images.unsplash.com/photo-1517838277536-f5f99be501cd?auto=format&fit=crop&w=600&q=80"
                                    alt="Talleres de Bienestar">
                                <div class="carrusel-contenido">
                                    <h3>Jornadas de Salud</h3>
                                    <p>Acompañamiento integral por parte del equipo de Bienestar al Aprendiz.</p>
                                </div>
                            </div>
                        </div>

                        <button class="btn-carrusel next" id="carruselNext" aria-label="Siguiente">
                            <ion-icon name="chevron-forward-outline"></ion-icon>
                        </button>
                    </div>
                </div>

            </section>
        </div>
    </main>

    <!-- ============================================================ -->
    <!-- MODAL DE PERFIL & DATOS DE CONTACTO -->
    <!-- ============================================================ -->
    <div class="modal-overlay" id="modalPerfilOverlay">
        <div class="modal-perfil-container">
            <!-- Encabezado del Modal -->
            <div class="modal-perfil-header">
                <div class="header-info">
                    <div class="header-icon">
                        <ion-icon name="person-outline"></ion-icon>
                    </div>
                    <div>
                        <h2>Mi Perfil & Datos de Contacto</h2>
                        <p>Actualiza tus canales de notificación y bioseguridad</p>
                    </div>
                </div>
                <button class="btn-close-modal" id="btnClosePerfil" aria-label="Cerrar modal">&times;</button>
            </div>

            <!-- Cuerpo del Modal -->
            <div class="modal-perfil-body">

                <!-- Sección: Foto de Perfil -->
                <div class="card-seccion flex-row align-center">
                    <div class="avatar-preview">
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=200&q=80"
                            alt="Foto de perfil">
                    </div>
                    <div class="avatar-actions">
                        <span class="seccion-label">Fotografía del Perfil</span>
                        <div class="button-group">
                            <button class="btn-secondary-outline">
                                <ion-icon name="camera-outline"></ion-icon> Cambiar Foto
                            </button>
                            <button class="btn-danger-outline">
                                <ion-icon name="trash-outline"></ion-icon> Quitar
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sección: Información Personal (Solo lectura) -->
                <div class="card-seccion grid-info">
                    <div class="info-item">
                        <span class="info-label">NOMBRES Y APELLIDOS</span>
                        <strong class="info-value">Jairo Andrés Pérez Gómez</strong>
                    </div>
                    <div class="info-item">
                        <span class="info-label">DOCUMENTO</span>
                        <strong class="info-value">CC 1002345678</strong>
                    </div>
                    <div class="info-item">
                        <span class="info-label">FICHA DE FORMACIÓN</span>
                        <strong class="info-value highlight-green">2694520</strong>
                    </div>
                    <div class="info-item">
                        <span class="info-label">ROL EN EL SISTEMA</span>
                        <strong class="info-value">Administrador</strong>
                    </div>
                </div>

                <!-- Sección: Formulario de Contacto -->
                <form id="formPerfil" class="form-perfil">
                    <div class="form-group">
                        <label for="correo">Correo Electrónico (Institucional o Personal) *</label>
                        <div class="input-icon-wrapper">
                            <ion-icon name="mail-outline"></ion-icon>
                            <input type="email" id="correo" value="jairo.perez@misena.edu.co" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="telefono">Teléfono Celular *</label>
                        <div class="input-icon-wrapper">
                            <ion-icon name="call-outline"></ion-icon>
                            <input type="tel" id="telefono" value="3124567890" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="contactoEmergencia">Contacto de Emergencia / Acudiente</label>
                        <div class="input-icon-wrapper">
                            <ion-icon name="call-outline"></ion-icon>
                            <input type="tel" id="contactoEmergencia" value="3159876543">
                        </div>
                    </div>
                </form>

                <!-- Sección: Zona de Seguridad -->
                <div class="card-seccion zona-peligro">
                    <div class="peligro-header">
                        <ion-icon name="warning-outline"></ion-icon>
                        <strong>Zona de Seguridad de Cuenta</strong>
                    </div>
                    <p>Puedes radicar una solicitud formal para cancelar tu cuenta de AGROFIT y transferir tu historial lúdico.</p>
                    <a href="#" class="link-eliminar">Solicitar eliminación permanente de mi cuenta</a>
                </div>

            </div>

            <!-- Pie del Modal (Acciones) -->
            <div class="modal-perfil-footer">
                <button class="btn-cancelar" id="btnCancelPerfil">Cancelar</button>
                <button class="btn-guardar" type="submit" form="formPerfil">
                    <ion-icon name="save-outline"></ion-icon> Guardar Cambios
                </button>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Librería de alertas (confirmaciones de cierre de sesión, ayuda, etc...) -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- JS SIDEBAR -->
    <script src="../../js/sidebar.js"></script>

    <!-- JS propio -->
    <script src="../../js/dashboards/admin-dashboard.js"></script>

    <!-- ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@8.0.13/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@8.0.13/dist/ionicons/ionicons.js"></script>
</body>

</html>