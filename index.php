<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ferretería Corcino 2 | La Culata</title>
    <link rel="stylesheet" href="bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container-fluid px-4">
            <a class="navbar-brand d-flex align-items-center" href="#inicio">
                <img src="images/logo.png" alt="Logo Ferretería Corcino" width="42" height="42" class="me-2">
                Ferretería Corcino 2
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#inicio">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#nosotros">Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link" href="#productos">Servicios</a></li>
                    <li class="nav-item"><a class="nav-link" href="#fototeca">Fototeca</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="inicio" class="hero-section">
        <div class="container hero-content text-center">
            <span class="hero-badge"><i class="bi bi-stars"></i> Tu ferretería en La Culata</span>
            <h1 class="hero-title">Construye con confianza, repara con estilo.</h1>
            <p class="hero-text mx-auto">Ferretería Corcino 2 ofrece servicio ferretero completo: desde piedra y materiales, hasta herramientas, electricidad y atención personalizada para tu proyecto.</p>
            <div class="hero-actions justify-content-center">
                <a href="#contacto" class="btn-hero">Escríbenos ahora</a>
                <a href="#productos" class="btn-secondary">Ver servicios</a>
            </div>
            <div class="hero-stats mt-5">
                <div class="hero-stat">
                    <h3>8AM - 6PM</h3>
                    <p>Lunes a sábado. Domingos no laboramos.</p>
                </div>
                <div class="hero-stat">
                    <h3>809-846-7111</h3>
                    <p>Contacto directo para pedidos y asesoría.</p>
                </div>
                <div class="hero-stat">
                    <h3>Honestidad</h3>
                    <p>Transparencia y disciplina en cada venta.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="nosotros" class="section bg-light">
        <div class="container">
            <h2 class="section-title">Quiénes Somos</h2>
            <div class="row gy-4 mt-5">
                <div class="col-lg-4">
                    <div class="feature-card">
                        <div class="card-body">
                            <div class="badge-pill"><i class="bi bi-flag"></i> Misión</div>
                            <h5>Brindar un buen servicio y progresar</h5>
                            <p>Ser la ferretería más cercana y confiable de La Culata, acompañando a todos nuestros clientes en cada trabajo y obra.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feature-card">
                        <div class="card-body">
                            <div class="badge-pill"><i class="bi bi-heart"></i> Valores</div>
                            <h5>Honestidad, transparencia y disciplina</h5>
                            <p>Ofrecemos precios claros, atención honesta y compromiso real con cada persona que compra o pide asesoría.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="feature-card">
                        <div class="card-body">
                            <div class="badge-pill"><i class="bi bi-tools"></i> Nuestro servicio</div>
                            <h5>Todo lo que necesitas en una ferretería</h5>
                            <p>Materiales de construcción, piedra, herramientas, electricidad, pintura y todo lo que se encuentra en una ferretería lo tenemos nosotros.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="productos" class="section">
        <div class="container">
            <h2 class="section-title">Nuestros Productos y Servicios</h2>
            <div class="row gy-4 mt-5">
                <div class="col-lg-3 col-sm-6">
                    <div class="servicio-card">
                        <div class="card-body text-center">
                            <i class="bi bi-hammer"></i>
                            <h5>Herramientas</h5>
                            <p>Martillos, sierras, taladros y más para todo tipo de proyecto.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="servicio-card">
                        <div class="card-body text-center">
                            <i class="bi bi-bricks"></i>
                            <h5>Materiales</h5>
                            <p>Piedra, cemento, arena y bloques para construcción y reformas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="servicio-card">
                        <div class="card-body text-center">
                            <i class="bi bi-lightning-charge"></i>
                            <h5>Electricidad</h5>
                            <p>Cables, enchufes, focos y accesorios eléctricos de calidad.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="servicio-card">
                        <div class="card-body text-center">
                            <i class="bi bi-droplet-half"></i>
                            <h5>Pintura</h5>
                            <p>Pinturas, barnices y acabados para espacios de interior y exterior.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="fototeca" class="section bg-light">
        <div class="container">
            <h2 class="section-title">Fototeca</h2>
            <div class="gallery-grid mt-4">
                <div class="fototeca-card"><img src="images/imagen%201.jpeg" alt="Vista interior de la ferretería"></div>
                <div class="fototeca-card"><img src="images/imagen%202.jpeg" alt="Productos y herramientas en exhibición"></div>
                <div class="fototeca-card"><img src="images/imagen%203.jpeg" alt="Estantes con materiales de construcción"></div>
                <div class="fototeca-card"><img src="images/imagen%204.jpeg" alt="Atención personalizada en el local"></div>
            </div>
        </div>
    </section>

    <section id="contacto" class="section">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-6">
                    <div class="contacto-container">
                        <h2>Contáctanos</h2>
                        <p class="contacto-subtitle">Escríbenos tu consulta y te responderemos con rapidez. ¡Estamos aquí para ayudarte!</p>
                        <?php
                        if (isset($_GET['status'])) {
                            if ($_GET['status'] === 'success') {
                                echo '<div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                                        <strong>¡Éxito!</strong> Tu mensaje ha sido enviado correctamente. Nos pondremos en contacto pronto.
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
                                      </div>';
                            } elseif ($_GET['status'] === 'error') {
                                $mensaje_error = isset($_GET['mensaje']) ? htmlspecialchars($_GET['mensaje']) : 'Ha ocurrido un error. Por favor, intenta nuevamente.';
                                echo '<div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
                                        <strong>Error:</strong> ' . $mensaje_error . '
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
                                      </div>';
                            }
                        }
                        ?>
                        <form method="POST" action="procesar_contacto.php" class="needs-validation" novalidate>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre Completo</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Tu nombre" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="tu@correo.com" required>
                            </div>
                            <div class="mb-3">
                                <label for="telefono" class="form-label">Teléfono</label>
                                <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="809-846-7111" required>
                            </div>
                            <div class="mb-3">
                                <label for="asunto" class="form-label">Asunto</label>
                                <input type="text" class="form-control" id="asunto" name="asunto" placeholder="Asunto de tu consulta" required>
                            </div>
                            <div class="mb-3">
                                <label for="mensaje" class="form-label">Mensaje</label>
                                <textarea class="form-control" id="mensaje" name="mensaje" placeholder="Cuéntanos tu consulta..." required></textarea>
                            </div>
                            <button type="submit" class="btn-enviar">Enviar Mensaje</button>
                        </form>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="contacto-ficha h-100">
                        <h3>Información de la Ferretería</h3>
                        <div class="info-line"><i class="bi bi-geo-alt"></i><span>Ubicación: La Culata</span></div>
                        <div class="info-line"><i class="bi bi-clock"></i><span>Horario: 8AM - 6PM lunes a sábado</span></div>
                        <div class="info-line"><i class="bi bi-phone"></i><span>Teléfono: <a href="tel:8098467111">809-846-7111</a></span></div>
                        <div class="info-line"><i class="bi bi-facebook"></i><span><a href="https://www.facebook.com/p/Ferreter%C3%ACa-corcino-100051038156498/?locale=es_LA" target="_blank" rel="noreferrer">Facebook</a></span></div>
                        <div class="info-line"><i class="bi bi-instagram"></i><span><a href="https://www.instagram.com/ferreteria_corcino/" target="_blank" rel="noreferrer">Instagram</a></span></div>
                        <p>Servicios ferreteros desde la piedra hasta materiales de construcción y todo lo que se encuentre en una ferretería lo tenemos nosotros.</p>
                        <p>En Ferretería Corcino 2 encontrarás atención honesta, asesoría transparente y productos confiables para tus trabajos.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row align-items-center gy-4">
                <div class="col-lg-6 text-center text-lg-start">
                    <h5>Ferretería Corcino 2</h5>
                    <p>Honestidad, transparencia y disciplina en cada proyecto.</p>
                </div>
                <div class="col-lg-6 text-center text-lg-end">
                    <div class="footer-links">
                        <a href="#inicio">Inicio</a>
                        <a href="#nosotros">Nosotros</a>
                        <a href="#productos">Servicios</a>
                        <a href="#contacto">Contacto</a>
                    </div>
                </div>
            </div>
            <div class="footer-contact mt-4">
                <p><i class="bi bi-geo-alt"></i> La Culata</p>
                <p><i class="bi bi-phone"></i> 809-846-7111</p>
                <p><i class="bi bi-clock"></i> Lun-Sáb 8AM - 6PM</p>
            </div>
            <p class="small mt-4">&copy; 2026 Ferretería Corcino 2. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script src="bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js"></script>
    <script>
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                var forms = document.querySelectorAll('.needs-validation');
                Array.prototype.slice.call(forms).forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
</body>

</html>