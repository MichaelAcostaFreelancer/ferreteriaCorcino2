<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ferretería Corcino - Tu tienda de confianza</title>
    <link rel="stylesheet" href="bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --verde-principal: #2d7a3e;
            --verde-claro: #3d9a4e;
            --azul-principal: #0066cc;
            --azul-oscuro: #004a99;
            --rojo-principal: #e63946;
            --gris-fondo: #f8f9fa;
            --gris-texto: #555;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--gris-texto);
            line-height: 1.6;
            background-color: #fff;
        }

        /* ===== NAVBAR ===== */
        .navbar {
            background: linear-gradient(135deg, var(--verde-principal) 0%, var(--azul-principal) 100%) !important;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            padding: 0.8rem 0;
        }

        .navbar-brand {
            font-size: 1.6rem;
            font-weight: 800;
            color: white !important;
            letter-spacing: 0.5px;
        }

        .navbar-brand i {
            margin-right: 8px;
        }

        .nav-link {
            color: white !important;
            font-weight: 600;
            margin: 0 8px;
            position: relative;
            transition: all 0.3s ease;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 3px;
            background-color: var(--rojo-principal);
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        /* ===== HERO SECTION ===== */
        .hero-section {
            background: linear-gradient(135deg, var(--verde-principal) 0%, var(--azul-principal) 50%, var(--rojo-principal) 100%);
            color: white;
            padding: 120px 20px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 400px;
            height: 400px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 50%;
        }

        .hero-section::after {
            content: '';
            position: absolute;
            bottom: -30%;
            left: -5%;
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 50%;
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }

        .hero-section h1 {
            font-size: 3.5rem;
            font-weight: 900;
            margin-bottom: 20px;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.2);
            line-height: 1.2;
        }

        .hero-section .lead {
            font-size: 1.35rem;
            margin-bottom: 40px;
            opacity: 0.95;
            font-weight: 300;
        }

        .btn-hero {
            background-color: var(--rojo-principal);
            border: none;
            color: white;
            font-weight: 700;
            padding: 14px 50px;
            border-radius: 50px;
            transition: all 0.3s ease;
            font-size: 1.1rem;
            display: inline-block;
        }

        .btn-hero:hover {
            background-color: #d62839;
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(230, 57, 70, 0.3);
            color: white;
        }

        /* ===== SECTION GENERAL ===== */
        section {
            padding: 80px 20px;
        }

        .section-title {
            position: relative;
            font-size: 2.5rem;
            font-weight: 900;
            color: var(--verde-principal);
            margin-bottom: 50px;
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .section-title::after {
            content: '';
            display: block;
            width: 100px;
            height: 5px;
            background: linear-gradient(90deg, var(--azul-principal), var(--rojo-principal));
            margin: 15px auto 0;
            border-radius: 3px;
        }

        /* ===== NOSOTROS SECTION ===== */
        #nosotros {
            background-color: var(--gris-fondo);
        }

        .card-mvv {
            background: white;
            border: none;
            border-radius: 15px;
            padding: 40px 30px;
            margin: 25px 0;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .card-mvv::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
        }

        .card-mvv.mision::before {
            background-color: var(--verde-principal);
        }

        .card-mvv.vision::before {
            background-color: var(--azul-principal);
        }

        .card-mvv.valores::before {
            background-color: var(--rojo-principal);
        }

        .card-mvv:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
        }

        .card-mvv h3 {
            font-size: 1.8rem;
            font-weight: 800;
            margin-bottom: 20px;
            color: var(--verde-principal);
        }

        .card-mvv.vision h3 {
            color: var(--azul-principal);
        }

        .card-mvv.valores h3 {
            color: var(--rojo-principal);
        }

        .card-mvv p {
            color: var(--gris-texto);
            line-height: 1.8;
            font-size: 1rem;
        }

        /* ===== PRODUCTOS SECTION ===== */
        #productos {
            background-color: white;
        }

        .producto-card {
            background: white;
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            height: 100%;
        }

        .producto-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }

        .producto-img {
            background: linear-gradient(135deg, var(--verde-principal) 0%, var(--azul-principal) 100%);
            height: 280px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 4.5rem;
            position: relative;
        }

        .producto-card:nth-child(2) .producto-img {
            background: linear-gradient(135deg, var(--azul-principal) 0%, var(--verde-claro) 100%);
        }

        .producto-card:nth-child(3) .producto-img {
            background: linear-gradient(135deg, var(--rojo-principal) 0%, var(--azul-principal) 100%);
        }

        .producto-card:nth-child(4) .producto-img {
            background: linear-gradient(135deg, var(--verde-claro) 0%, var(--rojo-principal) 100%);
        }

        .producto-content {
            padding: 30px;
        }

        .producto-content h5 {
            color: var(--verde-principal);
            font-weight: 800;
            font-size: 1.3rem;
            margin-bottom: 15px;
        }

        .producto-content p {
            color: var(--gris-texto);
            font-size: 0.95rem;
            line-height: 1.6;
        }

        /* ===== CONTACTO SECTION ===== */
        #contacto {
            background: linear-gradient(135deg, var(--verde-principal) 0%, var(--azul-principal) 100%);
            color: white;
        }

        .contacto-container {
            max-width: 550px;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.95);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
        }

        .contacto-container h2 {
            color: var(--verde-principal);
            font-weight: 900;
            margin-bottom: 10px;
            text-align: center;
        }

        .contacto-subtitle {
            text-align: center;
            color: var(--gris-texto);
            margin-bottom: 30px;
            font-size: 0.95rem;
        }

        .form-label {
            color: var(--verde-principal);
            font-weight: 700;
            margin-bottom: 8px;
        }

        .form-control {
            border: 2px solid #ddd;
            border-radius: 8px;
            padding: 12px 15px;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            margin-bottom: 15px;
        }

        .form-control:focus {
            border-color: var(--rojo-principal);
            box-shadow: 0 0 0 0.2rem rgba(230, 57, 70, 0.15);
            outline: none;
        }

        textarea.form-control {
            resize: vertical;
            min-height: 120px;
            font-family: inherit;
        }

        .btn-enviar {
            background-color: var(--rojo-principal);
            color: white;
            border: none;
            padding: 14px 40px;
            font-weight: 700;
            border-radius: 8px;
            transition: all 0.3s ease;
            width: 100%;
            font-size: 1rem;
            cursor: pointer;
            margin-top: 10px;
        }

        .btn-enviar:hover {
            background-color: #d62839;
            transform: translateY(-2px);
            box-shadow: 0 5px 20px rgba(230, 57, 70, 0.3);
        }

        /* ===== FOOTER ===== */
        footer {
            background: var(--verde-principal);
            color: white;
            padding: 50px 20px 30px;
            text-align: center;
        }

        footer h5 {
            font-weight: 900;
            margin-bottom: 15px;
            font-size: 1.5rem;
        }

        footer p {
            margin: 8px 0;
            opacity: 0.9;
        }

        .footer-links {
            margin: 25px 0;
        }

        .footer-links a {
            color: var(--rojo-principal);
            text-decoration: none;
            margin: 0 15px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .footer-links a:hover {
            color: white;
            text-decoration: underline;
        }

        footer .small {
            opacity: 0.8;
        }

        /* ===== ALERT MESSAGES ===== */
        .alert {
            border-radius: 10px;
            border: none;
            margin-bottom: 20px;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
        }

        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 768px) {
            .hero-section h1 {
                font-size: 2.2rem;
            }

            .hero-section .lead {
                font-size: 1.1rem;
            }

            section {
                padding: 50px 15px;
            }

            .section-title {
                font-size: 2rem;
            }

            .contacto-container {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>
    <!-- ===== NAVBAR ===== -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container-fluid px-4">
            <a class="navbar-brand" href="#inicio">
                <i class="bi bi-hammer"></i> Ferretería Corcino
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#inicio">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#nosotros">Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link" href="#productos">Productos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ===== HERO SECTION ===== -->
    <section id="inicio" class="hero-section">
        <div class="container hero-content">
            <h1>Ferretería Corcino</h1>
            <p class="lead">Tu tienda de confianza para todos tus proyectos de construcción y reparación</p>
            <a href="#contacto" class="btn-hero">Contáctanos</a>
        </div>
    </section>

    <!-- ===== NOSOTROS ===== -->
    <section id="nosotros">
        <div class="container">
            <h2 class="section-title">Quiénes Somos</h2>
            <div class="row mt-5">
                <div class="col-lg-4 col-md-12">
                    <div class="card-mvv mision">
                        <h3><i class="bi bi-target"></i> Misión</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card-mvv vision">
                        <h3><i class="bi bi-eye"></i> Visión</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card-mvv valores">
                        <h3><i class="bi bi-heart"></i> Valores</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== PRODUCTOS ===== -->
    <section id="productos">
        <div class="container">
            <h2 class="section-title">Nuestros Productos</h2>
            <div class="row mt-5 g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="producto-card">
                        <div class="producto-img">🔨</div>
                        <div class="producto-content">
                            <h5>Herramientas</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Herramientas de calidad profesional para todos tus proyectos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="producto-card">
                        <div class="producto-img">🪛</div>
                        <div class="producto-content">
                            <h5>Tornillería</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amplio surtido de tornillos, tuercas y accesorios variados.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="producto-card">
                        <div class="producto-img">🎨</div>
                        <div class="producto-content">
                            <h5>Pintura</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pinturas, barnices y acabados de la mejor calidad.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="producto-card">
                        <div class="producto-img">💡</div>
                        <div class="producto-content">
                            <h5>Electricidad</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Materiales eléctricos e iluminación profesional.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CONTACTO ===== -->
    <section id="contacto">
        <div class="container">
            <div class="contacto-container">
                <h2>Ponte en Contacto</h2>
                <p class="contacto-subtitle">Envíanos tu consulta y nos comunicaremos contigo lo antes posible</p>
                
                <?php
                // Mostrar mensajes de éxito o error si existen
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
                        <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="+1 (555) 123-4567" required>
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
    </section>

    <!-- ===== FOOTER ===== -->
    <footer>
        <div class="container">
            <h5>Ferretería Corcino</h5>
            <p>Tu tienda de confianza desde hace más de 20 años</p>
            
            <div class="footer-links">
                <a href="#inicio">Inicio</a>
                <a href="#nosotros">Nosotros</a>
                <a href="#productos">Productos</a>
                <a href="#contacto">Contacto</a>
            </div>

            <hr class="my-3" style="background-color: rgba(255,255,255,0.2)">
            
            <p class="mb-1"><i class="bi bi-geo-alt"></i> Calle Principal 123, Ciudad</p>
            <p class="mb-1"><i class="bi bi-telephone"></i> Teléfono: (555) 123-4567</p>
            <p class="mb-3"><i class="bi bi-envelope"></i> Email: info@ferreteria.com</p>

            <p class="small">&copy; 2024 Ferretería Corcino. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script src="bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Validación de formulario
        (function () {
            'use strict';
            window.addEventListener('load', function () {
                var forms = document.querySelectorAll('.needs-validation');
                Array.prototype.slice.call(forms).forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        }());

        // Alarma y notificación post envío del formulario
        window.addEventListener('load', function() {
            // Obtener el parámetro de estado del URL
            const urlParams = new URLSearchParams(window.location.search);
            const status = urlParams.get('status');
            
            if (status === 'success') {
                // Reproducir sonido de éxito
                reproducirSonidoExito();
                
                // Mostrar notificación de escritorio (si está permitida)
                if (Notification.permission === 'granted') {
                    mostrarNotificacionEscritorio('¡Éxito!', 'Tu mensaje ha sido enviado correctamente. Nos pondremos en contacto pronto.');
                }
                
                // Mostrar alerta visual
                mostrarAlarmaExito();
                
                // Limpiar URL
                window.history.replaceState({}, document.title, window.location.pathname);
                
            } else if (status === 'error') {
                // Reproducir sonido de error
                reproducirSonidoError();
                
                // Mostrar notificación de escritorio
                if (Notification.permission === 'granted') {
                    mostrarNotificacionEscritorio('Error', 'Ha ocurrido un error al enviar el mensaje.');
                }
                
                // Mostrar alerta visual
                mostrarAlarmaError();
                
                // Limpiar URL
                window.history.replaceState({}, document.title, window.location.pathname);
            }
        });

        // Solicitar permisos de notificación
        if (Notification.permission === 'default') {
            Notification.requestPermission();
        }

        // Función para reproducir sonido de éxito
        function reproducirSonidoExito() {
            // Usar Web Audio API para generar un sonido de éxito
            const audioContext = new (window.AudioContext || window.webkitAudioContext)();
            const oscillator = audioContext.createOscillator();
            const gainNode = audioContext.createGain();
            
            oscillator.connect(gainNode);
            gainNode.connect(audioContext.destination);
            
            oscillator.frequency.value = 800;
            oscillator.type = 'sine';
            
            gainNode.gain.setValueAtTime(0.3, audioContext.currentTime);
            gainNode.gain.exponentialRampToValueAtTime(0.01, audioContext.currentTime + 0.5);
            
            oscillator.start(audioContext.currentTime);
            oscillator.stop(audioContext.currentTime + 0.5);
        }

        // Función para reproducir sonido de error
        function reproducirSonidoError() {
            const audioContext = new (window.AudioContext || window.webkitAudioContext)();
            const oscillator = audioContext.createOscillator();
            const gainNode = audioContext.createGain();
            
            oscillator.connect(gainNode);
            gainNode.connect(audioContext.destination);
            
            oscillator.frequency.value = 300;
            oscillator.type = 'sine';
            
            gainNode.gain.setValueAtTime(0.3, audioContext.currentTime);
            gainNode.gain.exponentialRampToValueAtTime(0.01, audioContext.currentTime + 0.5);
            
            oscillator.start(audioContext.currentTime);
            oscillator.stop(audioContext.currentTime + 0.5);
        }

        // Función para mostrar notificación de escritorio
        function mostrarNotificacionEscritorio(titulo, mensaje) {
            new Notification(titulo, {
                icon: 'data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><text y=".9em" font-size="90">🏢</text></svg>',
                body: mensaje,
                tag: 'ferreteria-notificacion',
                requireInteraction: true
            });
        }

        // Función para mostrar alarma visual de éxito con animación
        function mostrarAlarmaExito() {
            const alarma = document.createElement('div');
            alarma.style.cssText = `
                position: fixed;
                top: 20px;
                right: 20px;
                background: linear-gradient(135deg, #2d7a3e 0%, #3d9a4e 100%);
                color: white;
                padding: 25px 30px;
                border-radius: 10px;
                box-shadow: 0 10px 40px rgba(0,0,0,0.3);
                font-size: 16px;
                font-weight: bold;
                z-index: 9999;
                max-width: 400px;
                animation: slideInRight 0.5s ease-out, slideOutRight 0.5s ease-in 4.5s forwards;
                display: flex;
                align-items: center;
                gap: 15px;
            `;
            
            alarma.innerHTML = `
                <span style="font-size: 24px;">✓</span>
                <div>
                    <div style="margin-bottom: 5px;">¡Mensaje Enviado!</div>
                    <div style="font-size: 14px; opacity: 0.9;">Tu consulta ha sido recibida correctamente.</div>
                </div>
            `;
            
            document.body.appendChild(alarma);
            
            // Agregar estilos de animación
            if (!document.querySelector('style[data-ferreteria-alarm]')) {
                const style = document.createElement('style');
                style.setAttribute('data-ferreteria-alarm', 'true');
                style.textContent = `
                    @keyframes slideInRight {
                        from {
                            transform: translateX(450px);
                            opacity: 0;
                        }
                        to {
                            transform: translateX(0);
                            opacity: 1;
                        }
                    }
                    
                    @keyframes slideOutRight {
                        from {
                            transform: translateX(0);
                            opacity: 1;
                        }
                        to {
                            transform: translateX(450px);
                            opacity: 0;
                        }
                    }
                `;
                document.head.appendChild(style);
            }
            
            // Eliminar la alarma después de 5 segundos
            setTimeout(() => {
                alarma.remove();
            }, 5000);
        }

        // Función para mostrar alarma visual de error con animación
        function mostrarAlarmaError() {
            const alarma = document.createElement('div');
            alarma.style.cssText = `
                position: fixed;
                top: 20px;
                right: 20px;
                background: linear-gradient(135deg, #e63946 0%, #d62839 100%);
                color: white;
                padding: 25px 30px;
                border-radius: 10px;
                box-shadow: 0 10px 40px rgba(0,0,0,0.3);
                font-size: 16px;
                font-weight: bold;
                z-index: 9999;
                max-width: 400px;
                animation: slideInRight 0.5s ease-out, slideOutRight 0.5s ease-in 4.5s forwards;
                display: flex;
                align-items: center;
                gap: 15px;
            `;
            
            alarma.innerHTML = `
                <span style="font-size: 24px;">✕</span>
                <div>
                    <div style="margin-bottom: 5px;">¡Error!</div>
                    <div style="font-size: 14px; opacity: 0.9;">No pudimos enviar tu mensaje. Intenta nuevamente.</div>
                </div>
            `;
            
            document.body.appendChild(alarma);
            
            // Agregar estilos de animación
            if (!document.querySelector('style[data-ferreteria-alarm]')) {
                const style = document.createElement('style');
                style.setAttribute('data-ferreteria-alarm', 'true');
                style.textContent = `
                    @keyframes slideInRight {
                        from {
                            transform: translateX(450px);
                            opacity: 0;
                        }
                        to {
                            transform: translateX(0);
                            opacity: 1;
                        }
                    }
                    
                    @keyframes slideOutRight {
                        from {
                            transform: translateX(0);
                            opacity: 1;
                        }
                        to {
                            transform: translateX(450px);
                            opacity: 0;
                        }
                    }
                `;
                document.head.appendChild(style);
            }
            
            // Eliminar la alarma después de 5 segundos
            setTimeout(() => {
                alarma.remove();
            }, 5000);
        }
    </script>
</body>
</html>
