<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Agrofit</title>
    <link rel="icon" type="image/png" href="assets/img/sena-logo.png">
</head>

<body class="bg-white text-success min-vh-100 d-flex flex-column">
    <header class="navbar navbar-expand-lg navbar-dark bg-success sticky-top shadow-sm py-3">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="index.php">
                <img src="assets/img/agrofit-logo.png" alt="Logo de la plataforma" class="logo-agrofit" height="50">
            </a>

            <button class="menu-movil navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobile-menu"
                aria-controls="mobile-menu" aria-label="Menú">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between">
                <nav class="navbar-links mx-auto">
                    <ul class="navbar-nav gap-3 mb-0">
                        <li class="nav-item"><a class="nav-link text-white fw-semibold" href="index.php">INICIO</a></li>
                        <li class="nav-item"><a class="nav-link text-white fw-semibold" href="herramientas/vistas/about.php">ACERCA DE</a></li>
                        <li class="nav-item"><a class="nav-link text-white fw-semibold" href="herramientas/vistas/contacto/contact.php">UBICACIÓN & CONTACTO</a></li>
                    </ul>
                </nav>

                <div class="header-buttons d-flex gap-2">
                    <button type="button" class="btn-login-header btn btn-outline-light rounded-pill px-4"
                        data-bs-toggle="modal" data-bs-target="#loginModal">Iniciar Sesión</button>
                    <button type="button" class="btn-register-header btn btn-light text-success fw-semibold rounded-pill px-4"
                        data-bs-toggle="modal" data-bs-target="#registerModal">Registrarse</button>
                </div>
            </div>
        </div>
    </header>

    <div class="offcanvas offcanvas-end bg-success text-white" tabindex="-1" id="mobile-menu"
        aria-labelledby="mobileMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title fw-bold text-white" id="mobileMenuLabel">AGROFIT</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Cerrar"></button>
        </div>
        <div class="offcanvas-body d-flex flex-column justify-content-center align-items-center gap-3 text-center">
            <a href="index.php" class="text-decoration-none text-white fw-bold fs-2 text-break">INICIO</a>
            <a href="herramientas/vistas/about.php" class="text-decoration-none text-white fw-bold fs-2 text-break">ACERCA DE</a>
            <a href="herramientas/vistas/contacto/contact.php" class="text-decoration-none text-white fw-bold fs-2 text-break">UBICACIÓN & CONTACTO</a>
        </div>
    </div>

    <section class="hero bg-success text-white py-5" id="hero">
        <div class="container py-4">
            <div class="text-box text-center mx-auto mb-5" data-reveal="fade-up">
                <h1 class="display-4 fw-bold text-white">Entrenamiento, Rutinas &amp;
                    <span class="d-block text-white">Seguimiento de Horas Lúdicas</span>
                </h1>
                <p class="lead mx-auto my-4 text-white">Plataforma institucional para el control integral del gimnasio AGROFIT. Diseñada para aprendices,
                    instructores deportivos y funcionarios del SENA con evaluación biométrica, control de maquinaria y
                    registro de asistencias.</p>
                <div class="d-flex flex-wrap justify-content-center gap-3">
                    <button type="button" class="hero-btn hero-login-btn btn btn-light text-success fw-semibold btn-lg rounded-pill px-5 py-3"
                        data-bs-toggle="modal" data-bs-target="#loginModal">Acceder a AgroFit</button>
                    <a href="herramientas/vistas/about.php"
                        class="hero-btn hero-about-btn btn btn-outline-light fw-semibold btn-lg rounded-pill px-5 py-3">Más información</a>
                </div>
            </div>

            <div class="row g-4 justify-content-center mb-4">
                <div class="col-12 col-sm-6 col-lg-3" data-reveal="fade-left" data-reveal-delay="1">
                    <div class="hero-col card bg-white text-success border-0 rounded-4 h-100 text-center p-3 shadow-sm">
                        <div class="card-body">
                            <h3 class="h2 fw-bold text-success">60 Hrs</h3>
                            <p class="paragraph-decoration text-success mb-0 fw-medium">Horas Lúdicas Certificables</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3" data-reveal="fade-up" data-reveal-delay="2">
                    <div class="hero-col card bg-white text-success border-0 rounded-4 h-100 text-center p-3 shadow-sm">
                        <div class="card-body">
                            <h3 class="h2 fw-bold text-success">100%</h3>
                            <p class="paragraph-decoration text-success mb-0 fw-medium">Maquinaria Monitoreada</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3" data-reveal="fade-up" data-reveal-delay="3">
                    <div class="hero-col card bg-white text-success border-0 rounded-4 h-100 text-center p-3 shadow-sm">
                        <div class="card-body">
                            <h3 class="h2 fw-bold text-success">14+</h3>
                            <p class="paragraph-decoration text-success mb-0 fw-medium">Músculos con Mapeo Realista</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3" data-reveal="fade-right" data-reveal-delay="4">
                    <div class="hero-col card bg-white text-success border-0 rounded-4 h-100 text-center p-3 shadow-sm">
                        <div class="card-body">
                            <h3 class="h2 fw-bold text-success">2 Jornadas</h3>
                            <p class="paragraph-decoration text-success mb-0 fw-medium">Mañana y Tarde</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-4">
                <a href="#about-us" class="scroll-down d-inline-flex align-items-center justify-content-center text-decoration-none">
                    <div class="scroll-circle rounded-circle bg-white text-success d-flex align-items-center justify-content-center shadow p-3">
                        <ion-icon name="arrow-down-outline" class="fs-4"></ion-icon>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Sobre Nosotros -->
    <section class="about-us bg-white text-success py-5" id="about-us">
        <div class="container py-3 text-center">
            <h2 class="h1 fw-bold text-success border-bottom border-success border-3 pb-2 d-inline-block mb-5"
                data-reveal="fade-down">Sobre Nosotros</h2>

            <!-- Fila superior de perfiles -->
            <div class="about-row row g-4 justify-content-center mb-5">
                <div class="about-col col-12 col-md-4" data-reveal="fade-up" data-reveal-delay="1">
                    <div class="card border border-success bg-white text-success rounded-4 h-100 p-3">
                        <div class="card-body">
                            <span class="badge bg-success text-white rounded-pill px-3 py-2 fs-6 mb-2">Elena</span>
                            <p class="text-success mb-0 fw-medium">Dueña</p>
                        </div>
                    </div>
                </div>
                <div class="about-col col-12 col-md-4" data-reveal="fade-up" data-reveal-delay="2">
                    <div class="card border border-success bg-white text-success rounded-4 h-100 p-3">
                        <div class="card-body">
                            <span class="badge bg-success text-white rounded-pill px-3 py-2 fs-6 mb-2">Camilo</span>
                            <p class="text-success mb-0 fw-medium">Entrenador</p>
                        </div>
                    </div>
                </div>
                <div class="about-col col-12 col-md-4" data-reveal="fade-up" data-reveal-delay="3">
                    <div class="card border border-success bg-white text-success rounded-4 h-100 p-3">
                        <div class="card-body">
                            <span class="badge bg-success text-white rounded-pill px-3 py-2 fs-6 mb-2">Dayana</span>
                            <p class="text-success mb-0 fw-medium">Entrenadora</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Fila inferior de barras -->
            <div class="stats-row row g-4 text-start">
                <div class="stat-box col-12 col-md-6" data-reveal="fade-left" data-reveal-delay="1">
                    <h4 class="h6 fw-semibold text-success mb-2">Zona Cardio</h4>
                    <div class="progress bg-white border border-success rounded-pill" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-fill progress-bar bg-success" "></div>
                    </div>
                </div>
                <div class="stat-box col-12 col-md-6" data-reveal="fade-right" data-reveal-delay="2">
                    <h4 class="h6 fw-semibold text-success mb-2">Zona Máquinas Guiadas</h4>
                    <div class="progress bg-white border border-success rounded-pill" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-fill progress-bar bg-success" "></div>
                    </div>
                </div>
                <div class="stat-box col-12 col-md-6" data-reveal="fade-left" data-reveal-delay="3">
                    <h4 class="h6 fw-semibold text-success mb-2">Zona Peso Libre</h4>
                    <div class="progress bg-white border border-success rounded-pill" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-fill progress-bar bg-success" "></div>
                    </div>
                </div>
                <div class="stat-box col-12 col-md-6" data-reveal="fade-right" data-reveal-delay="4">
                    <h4 class="h6 fw-semibold text-success mb-2">Zona Funcional</h4>
                    <div class="progress bg-white border border-success rounded-pill" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-fill progress-bar bg-success" "></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Instalaciones -->
    <section class="equipment bg-success text-white py-5">
        <div class="container py-3 text-center">
            <h2 class="h1 fw-bold text-white border-bottom border-white border-3 pb-2 d-inline-block mb-5"
                data-reveal="fade-down">Instalaciones</h2>
            <div class="equipment-grid row g-4">
                <div class="equipment-col col-12 col-sm-6 col-lg-4" data-reveal="fade-up" data-reveal-delay="1">
                    <div class="card bg-white text-success border-0 rounded-4 overflow-hidden h-100 shadow-sm">
                        <img src="assets/img/instalaciones1.jpg" alt="Bicicletas estáticas" class="card-img-top object-fit-cover">
                        <div class="card-body d-flex align-items-center justify-content-center py-3">
                            <h3 class="card-title h5 fw-semibold text-success mb-0 text-center">Bicicletas estáticas</h3>
                        </div>
                    </div>
                </div>
                <div class="equipment-col col-12 col-sm-6 col-lg-4" data-reveal="scale-in" data-reveal-delay="2">
                    <div class="card bg-white text-success border-0 rounded-4 overflow-hidden h-100 shadow-sm">
                        <img src="assets/img/instalaciones2.jpg" alt="Sala Principal" class="card-img-top object-fit-cover">
                        <div class="card-body d-flex align-items-center justify-content-center py-3">
                            <h3 class="card-title h5 fw-semibold text-success mb-0 text-center">Sala Principal</h3>
                        </div>
                    </div>
                </div>
                <div class="equipment-col col-12 col-sm-6 col-lg-4" data-reveal="fade-up" data-reveal-delay="3">
                    <div class="card bg-white text-success border-0 rounded-4 overflow-hidden h-100 shadow-sm">
                        <img src="assets/img/instalaciones3.jpg" alt="Clases Dirigidas" class="card-img-top object-fit-cover" >
                        <div class="card-body d-flex align-items-center justify-content-center py-3">
                            <h3 class="card-title h5 fw-semibold text-success mb-0 text-center">Clases Dirigidas</h3>
                        </div>
                    </div>
                </div>
                <div class="equipment-col col-12 col-sm-6 col-lg-4" data-reveal="scale-in" data-reveal-delay="4">
                    <div class="card bg-white text-success border-0 rounded-4 overflow-hidden h-100 shadow-sm">
                        <img src="assets/img/instalaciones4.jpg" alt="Sala de Máquinas" class="card-img-top object-fit-cover" >
                        <div class="card-body d-flex align-items-center justify-content-center py-3">
                            <h3 class="card-title h5 fw-semibold text-success mb-0 text-center">Sala de Máquinas</h3>
                        </div>
                    </div>
                </div>
                <div class="equipment-col col-12 col-sm-6 col-lg-4" data-reveal="fade-left" data-reveal-delay="5">
                    <div class="card bg-white text-success border-0 rounded-4 overflow-hidden h-100 shadow-sm">
                        <img src="assets/img/instalaciones5.jpg" alt="Entrenamiento Funcional" class="card-img-top object-fit-cover" >
                        <div class="card-body d-flex align-items-center justify-content-center py-3">
                            <h3 class="card-title h5 fw-semibold text-success mb-0 text-center">Entrenamiento Funcional</h3>
                        </div>
                    </div>
                </div>
                <div class="equipment-col col-12 col-sm-6 col-lg-4" data-reveal="fade-right" data-reveal-delay="6">
                    <div class="card bg-white text-success border-0 rounded-4 overflow-hidden h-100 shadow-sm">
                        <img src="assets/img/instalaciones6.jpg" alt="Área Libre" class="card-img-top object-fit-cover" >
                        <div class="card-body d-flex align-items-center justify-content-center py-3">
                            <h3 class="card-title h5 fw-semibold text-success mb-0 text-center">Área Libre</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="equipment-dots d-flex justify-content-center gap-2 mt-4" id="equipmentDots" aria-label="Indicadores de instalaciones"></div>
        </div>
    </section>

    <!-- Horarios -->
    <section class="schedule bg-white text-success py-5" id="horarios">
        <div class="container py-3 text-center">
            <h2 class="h1 fw-bold text-success border-bottom border-success border-3 pb-2 d-inline-block mb-5"
                data-reveal="fade-down">Horarios</h2>

            <div class="schedule-cards-container row g-4 justify-content-center mx-auto" data-reveal="fade-up" data-reveal-delay="2">
                <div class="col-12 col-md-6 col-lg-5">
                    <div class="time-card open card bg-success text-white border-0 rounded-4 h-100 text-center p-4 shadow-sm">
                        <div class="card-body d-flex flex-column align-items-center">
                            <div class="icon-box fs-1 mb-2 text-white">
                                <ion-icon name="time-outline"></ion-icon>
                            </div>
                            <h3 class="h5 fw-bold text-white">Lunes a Viernes</h3>
                            <p class="hours text-white mb-3">08:00 a.m. - 05:00 p.m.</p>
                            <span class="badge-open badge rounded-pill bg-white text-success fw-semibold px-4 py-2">Abierto</span>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-5">
                    <div class="time-card closed card bg-white text-success border border-success rounded-4 h-100 text-center p-4">
                        <div class="card-body d-flex flex-column align-items-center">
                            <div class="icon-box fs-1 mb-2 text-success">
                                <ion-icon name="moon-outline"></ion-icon>
                            </div>
                            <h3 class="h5 fw-bold text-success">Fines de Semana</h3>
                            <p class="hours text-success mb-3">Sábados y Domingos</p>
                            <span class="badge-closed badge rounded-pill bg-success text-white fw-semibold px-4 py-2">Cerrado</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonios -->
    <section class="testimonials bg-success text-white py-5">
        <div class="container py-3 text-center">
            <h2 class="h1 fw-bold text-white border-bottom border-white border-3 pb-2 d-inline-block mb-3"
                data-reveal="fade-down">Testimonios</h2>
            <p class="text-white fs-5 mb-5" data-reveal="fade-in" data-reveal-delay="1">¿Nuestros estudiantes que dicen?</p>
            <div class="row g-4 justify-content-center text-start">
                <div class="col-12 col-lg-6" data-reveal="fade-left" data-reveal-delay="1">
                    <div class="testimonial-col card bg-white text-success border-0 rounded-4 h-100 p-4 shadow-sm">
                        <div class="card-body d-flex align-items-start gap-3">
                            <img src="assets/img/user1.jpg" alt="Cristina" class="rounded-circle object-fit-cover border border-success flex-shrink-0" width="56" height="56">
                            <div>
                                <p class="paragraph-testimonial text-success fst-italic mb-3">
                                    "Desde que empecé a entrenar aquí he notado un cambio increíble, tanto física como mentalmente.
                                    Los entrenadores están siempre pendientes y el ambiente hace que tengas ganas de seguir
                                    mejorando."
                                </p>
                                <h3 class="h6 fw-bold text-success mb-1">Cristina Sánchez</h3>
                                <div class="text-success">
                                    <ion-icon class="star-icon" name="star"></ion-icon>
                                    <ion-icon class="star-icon" name="star"></ion-icon>
                                    <ion-icon class="star-icon" name="star"></ion-icon>
                                    <ion-icon class="star-icon" name="star"></ion-icon>
                                    <ion-icon class="star-icon" name="star-half"></ion-icon>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6" data-reveal="fade-right" data-reveal-delay="2">
                    <div class="testimonial-col card bg-white text-success border-0 rounded-4 h-100 p-4 shadow-sm">
                        <div class="card-body d-flex align-items-start gap-3">
                            <img src="assets/img/user2.jpg" alt="David" class="rounded-circle object-fit-cover border border-success flex-shrink-0" width="56" height="56">
                            <div>
                                <p class="paragraph-testimonial text-success fst-italic mb-3">
                                    "Excelente gimnasio, con buenas instalaciones y un ambiente muy motivador. Llevo varios meses
                                    entrenando y he conseguido mejorar mi fuerza y mi condición física mucho más de lo que
                                    esperaba."
                                </p>
                                <h3 class="h6 fw-bold text-success mb-1">David Martínez</h3>
                                <div class="text-success">
                                    <ion-icon class="star-icon" name="star"></ion-icon>
                                    <ion-icon class="star-icon" name="star"></ion-icon>
                                    <ion-icon class="star-icon" name="star"></ion-icon>
                                    <ion-icon class="star-icon" name="star"></ion-icon>
                                    <ion-icon class="star-icon" name="star-half"></ion-icon>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Contacto -->
    <section class="cta contact bg-white text-success text-center py-5" id="contact">
        <div class="container py-4">
            <h2 class="display-6 fw-bold text-success mb-4" data-reveal="scale-in">Plataforma Deportiva Oficial SENA &bull; AGROFIT</h2>
            <a href="herramientas/vistas/contacto/contact.php"
                class="hero-btn btn btn-success text-white fw-semibold btn-lg rounded-pill px-5 py-3">Contactar</a>
        </div>
    </section>

    <!-- Modal Iniciar Sesión -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content bg-white text-success rounded-4 shadow border border-success p-4">
                <div class="modal-header border-0 pb-2">
                    <h2 class="modal-title h4 fw-bold text-center text-success w-100 mb-0" id="loginModalLabel">Iniciar Sesión</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body pt-2">
                        <div class="mb-3">
                            <label for="login-document-type" class="form-label fw-semibold text-success" >Tipo de documento</label>
                            <select id="login-document-type" name="login-document-type" class="form-select border-success text-success" style="cursor: pointer;">
                                <option value="" selected>Seleccione su tipo de documento</option>
                                <option value="CC">Cédula de Ciudadanía</option>
                                <option value="TI">Tarjeta de Identidad</option>
                                <option value="CE">Cédula de Extranjería</option>
                                <option value="PPT">Permiso por Protección Temporal</option>
                                <option value="PEP">Permiso Especial de Permanencia</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="login-num-document" class="form-label fw-semibold text-success">Número de Identificación</label>
                            <input type="number" id="login-num-document" name="login-num-document"
                                class="form-control border-success text-success" inputmode="numeric" 
                                title="Digite el número de identificación"
                                placeholder=" " >
                        </div>

                        <div class="mb-3">
                            <label for="login-password" class="form-label fw-semibold text-success">Contraseña</label>
                            <input type="password" id="login-password" name="login-password"
                                class="form-control border-success text-success"
                                title="Digite la contraseña" placeholder=" " >
                        </div>

                        <div class="mb-3">
                            <a href="#" class="link-success text-decoration-none small fw-semibold"
                                data-bs-toggle="modal" data-bs-target="#forgotPasswordModal">¿Olvidaste tu contraseña?</a>
                        </div>

                        <button type="button" id="entrarBtn" class="btn btn-success text-white w-100 rounded-pill py-2 fw-semibold">Iniciar Sesión</button>
                        <div class="text-center mt-4">
                            <p class="small mb-0 text-success">¿No tienes una cuenta? <a href="#"
                                    class="link-success fw-bold text-decoration-none" data-bs-toggle="modal"
                                    data-bs-target="#registerModal">Registrarse</a></p>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Registrarse -->
    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content bg-white text-success rounded-4 shadow border border-success p-4">
                <div class="modal-header border-0 pb-2">
                    <h2 class="modal-title h4 fw-bold text-center text-success w-100 mb-0" id="registerModalLabel">Registrarse</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body pt-2">
                        <div class="mb-3">
                            <label for="register-rol" class="form-label fw-semibold text-success">Tipo de cuenta</label>
                            <select id="register-rol" name="register-rol" class="form-select border-success text-success" style="cursor: pointer;">
                                <option value=""  selected>Seleccione su tipo de cuenta</option>
                                <option value="APR">Cuenta de Aprendiz</option>
                                <option value="ENT">Cuenta de Entrenador</option>
                                <option value="FUN">Cuenta de Funcionario</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="register-document-type" class="form-label fw-semibold text-success">Tipo de documento</label>
                            <select id="register-document-type" name="register-document-type"
                                class="form-select border-success text-success" style="cursor: pointer;">
                                <option value="" selected>Seleccione su tipo de documento</option>
                                <option value="CC">Cédula de Ciudadanía</option>
                                <option value="TI">Tarjeta de Identidad</option>
                                <option value="CE">Cédula de Extranjería</option>
                                <option value="PPT">Permiso por Protección Temporal</option>
                                <option value="PEP">Permiso Especial de Permanencia</option>
                                <option value="PEP">Otro</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="register-num-document" class="form-label fw-semibold text-success">Número de Identificación</label>
                            <input type="text" id="register-num-document" name="register-num-document"
                                class="form-control border-success text-success" inputmode="numeric" 
                                title="Digite un número de identificación"
                                placeholder=" " >
                        </div>

                        <div class="mb-3">
                            <label for="birthday" class="form-label fw-semibold text-success">Fecha de nacimiento</label>
                            <input type="date" name="birthday" id="birthday" class="form-control border-success text-success" style="cursor: pointer;">
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label fw-semibold text-success">Nombres</label>
                            <input type="text" name="name" id="name" class="form-control border-success text-success" title="Digite sus nombres"
                                placeholder="" >
                        </div>

                        <div class="mb-3">
                            <label for="last-name" class="form-label fw-semibold text-success">Apellidos</label>
                            <input type="text" name="last-name" id="last-name" class="form-control border-success text-success" title="Digite sus apellidos"
                                placeholder="" >
                        </div>

                        <div class="mb-3">
                            <span class="form-label d-block fw-semibold text-success small mb-2">Género</span>
                            <div class="d-flex gap-4">
                                <div class="form-check">
                                    <input class="form-check-input border-success" type="radio" name="genre" id="genre-m" value="1" style="cursor: pointer;">
                                    <label class="form-check-label small text-success" for="genre-m">Hombre</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input border-success" type="radio" name="genre" id="genre-f" value="2" style="cursor: pointer;">
                                    <label class="form-check-label small text-success" for="genre-f">Mujer</label>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="marital-status" class="form-label fw-semibold text-success">Estado civil</label>
                            <select name="marital-status" id="marital-status" class="form-select border-success text-success" style="cursor: pointer;">
                                <option value=""  selected>Seleccione su estado civil</option>
                                <option value="">Viudo</option>
                                <option value="">Soltero</option>
                                <option value="">Casado</option>
                                <option value="">Union Libre</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="register-blood-type" class="form-label fw-semibold text-success">Tipo de sangre</label>
                            <select id="register-blood-type" name="register-blood-type"
                                class="form-select border-success text-success" style="cursor: pointer;">
                                <option value=""  selected>Seleccione su tipo de sangre</option>
                                <option value='A+'>A+</option>
                                <option value='A-'>A-</option>
                                <option value='B+'>B+</option>
                                <option value='B'>B-</option>
                                <option value='AB+'>AB+</option>
                                <option value='AB-'>AB-</option>
                                <option value='O+'>O+</option>
                                <option value='O-'>O-</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="health" class="form-label fw-semibold text-success">¿Presenta alguna discapacidad?</label>
                            <input type="text" name="health" id="health" class="form-control border-success text-success" title="Digite su discapacidad"
                                placeholder="" >
                        </div>

                        <div class="mb-3">
                            <label for="email-register" class="form-label fw-semibold text-success">Correo electrónico institucional</label>
                            <input type="email" id="email-register" name="email-register"
                                class="form-control border-success text-success"
                                title="Digite un correo institucional @soy.sena.edu.co" placeholder=" " >
                        </div>

                        <div class="mb-3">
                            <label for="password-register" class="form-label fw-semibold text-success">Contraseña</label>
                            <input type="password" id="password-register" name="password-register"
                                class="form-control border-success text-success"
                                title="Digite una contraseña" placeholder=" " >
                        </div>

                        <div class="mb-3">
                            <label for="confirm-password-register" class="form-label fw-semibold text-success">Confirmar contraseña</label>
                            <input type="password" id="confirm-password-register" name="confirm-password-register"
                                class="form-control border-success text-success"
                                title="Confirme la contraseña" placeholder=" " >
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label fw-semibold text-success">Número de telèfono</label>
                            <input type="number" name="phone" id="phone" class="form-control border-success text-success"
                                inputmode="numeric"
                                title="Digite un número de teléfono" placeholder="" >
                        </div>

                        <div class="mb-3">
                            <label for="mun" class="form-label fw-semibold text-success">Municipio de nacimiento</label>
                            <input type="text" name="mun" id="mun" class="form-control border-success text-success" title="Digite su municipio de nacimiento"
                                placeholder="" >
                        </div>

                        <div class="mb-3">
                            <label for="dir" class="form-label fw-semibold text-success">Direcciòn de residencia</label>
                            <input type="text" name="dir" id="dir" class="form-control border-success text-success" title="Digite su dirección de residencia"
                                placeholder="" >
                        </div>

                        <div class="mb-3">
                            <label for="eps" class="form-label fw-semibold text-success">EPS</label>
                            <select class="form-select border-success text-success" name="eps" id="eps" style="cursor: pointer;">
                                <option value=""  selected>Seleccione su EPS</option>
                                <option value="">Sanitas</option>
                                <option value="">Sura</option>
                                <option value="">Coomeva</option>
                                <option value="">Compensar</option>
                                <option value="">Salud Total</option>
                                <option value="">Otra</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="school" class="form-label fw-semibold text-success">Centro de formación</label>
                            <select name="school" id="school" class="form-select border-success text-success" style="cursor: pointer;">
                                <option value=""  selected>Seleccione su centro de formación</option>
                                <option value="">Agropecuario</option>
                                <option value="">Otro</option>
                            </select>
                        </div>

                        <div class="form-check mb-3">
                            <input type="checkbox" class="form-check-input border-success" id="terms-check" style="cursor: pointer;">
                            <label class="form-check-label small text-success" for="terms-check">Yo acepto los términos & condiciones</label>
                        </div>

                        <button type="button" class="btn btn-success text-white w-100 rounded-pill py-2 fw-semibold">Registrarse</button>
                        <div class="text-center mt-4">
                            <p class="small mb-0 text-success">¿Ya tienes una cuenta? <br> <a href="#"
                                    class="link-success fw-bold text-decoration-none" data-bs-toggle="modal"
                                    data-bs-target="#loginModal">Iniciar Sesión</a></p>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Recuperar Contraseña -->
    <div class="modal fade" id="forgotPasswordModal" tabindex="-1" aria-labelledby="forgotPasswordModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content bg-white text-success rounded-4 shadow border border-success p-4">
                <div class="modal-header border-0 pb-2">
                    <h2 class="modal-title h4 fw-bold text-center text-success w-100 mb-0" id="forgotPasswordModalLabel">Recuperar contraseña</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body pt-2">
                        <div class="mb-3">
                            <label for="recovery-email" class="form-label fw-semibold text-success">Correo electrónico institucional</label>
                            <input type="email" id="recovery-email" name="recovery-email"
                                class="form-control border-success text-success"
                                title="Digite el correo institucional @soy.sena.edu.co" placeholder=" " >
                        </div>
                        <button type="button" id="activarBtn" class="btn btn-success text-white w-100 rounded-pill py-2 fw-semibold">Enviar código</button>
                        <div class="text-center mt-4">
                            <p class="small mb-0 text-success">¿Recuerdas tu contraseña? <br><a href="#"
                                    class="link-success fw-bold text-decoration-none" data-bs-toggle="modal"
                                    data-bs-target="#loginModal">Iniciar Sesión</a></p>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer bg-success text-white py-5 mt-auto">
        <div class="container">
            <div class="row g-4 justify-content-between align-items-start">
                <div class="col-12 col-md-6" data-reveal="fade-up" data-reveal-delay="1">
                    <h4 class="h6 fw-bold text-uppercase text-white mb-3">También nos encontrarás en:</h4>
                    <div class="icons d-flex flex-wrap gap-2 fs-4 mb-3 text-white" data-reveal="fade-up" data-reveal-delay="2">
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

                <div class="col-12 col-md-6 text-md-end" data-reveal="fade-up" data-reveal-delay="3">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" src="herramientas/js/login.js" defer></script>
    <script type="module" src="https://unpkg.com/ionicons@8.0.13/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@8.0.13/dist/ionicons/ionicons.js"></script>

</body>

</html>