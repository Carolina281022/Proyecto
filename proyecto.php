<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Helping Hands</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
    html,
    body {
        height: 100%;
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        min-height: 100vh;
        width: 100vw;
        background:
            linear-gradient(rgba(245, 240, 230, 0.95), rgba(245, 240, 230, 0.95)),
            url('https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?auto=format&fit=crop&w=1200&q=80');
        background-size: cover;
        background-attachment: fixed;
        background-position: center;
    }

    body {
        min-height: 100vh;
        width: 100vw;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        align-items: stretch;
        position: relative;
    }

    .global-header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 110px;
        background: rgba(255, 255, 255, 0.92);
        z-index: 2000;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.07);
    }

    .logo-global {
        position: absolute;
        left: 30px;
        top: 10px;
        width: 90px;
        height: 90px;
        border-radius: 16px;
        object-fit: cover;
        border: 3px solid #f9a825;
        background: #fff;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
    }

    .titulo-global {
        margin: 0;
        font-size: 2.7rem;
        color: #005744;
        font-weight: bold;
        letter-spacing: 2px;
        text-align: center;
        width: 100%;
        z-index: 2;
        text-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
    }

    body>*:not(.global-header) {
        margin-top: 120px !important;
    }

    /* Oculta logo/título duplicados en dashboard/sidebar */
    .sidebar .logo-container,
    .logo-title-center {
        display: none !important;
    }

    /* Contenedor ancho para bienvenida/contacto */
    .wide-container {
        background: #fff;
        border-radius: 16px;
        box-shadow: 0 4px 24px rgba(0, 0, 0, 0.10);
        padding: 2.5rem 2rem 2rem 2rem;
        max-width: 700px;
        width: 95vw;
        margin: 0 auto 2.5rem auto;
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: center;
        z-index: 2;
    }

    .button-container {
        display: flex;
        gap: 1rem;
        justify-content: center;
        margin-bottom: 2rem;
        width: 100%;
        z-index: 2;
    }

    .btn {
        padding: 0.8rem 1.5rem;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        font-size: 1rem;
        font-weight: bold;
        transition: background 0.2s;
    }

    .btn-primary {
        background-color: #005744;
        color: white;
    }

    .btn-primary:hover {
        background-color: #004535;
    }

    .btn-secondary {
        background-color: #e0e0e0;
        color: #005744;
    }

    .btn-accent {
        background-color: #f9a825;
        color: #fff;
    }

    .btn-accent:hover {
        background-color: #c17900;
    }

    .welcome-section {
        background: #f5f0e6;
        border-radius: 8px;
        padding: 1.5rem 1rem;
        margin-bottom: 0;
        text-align: center;
        width: 100%;
        box-sizing: border-box;
    }

    .welcome-section h2 {
        margin-top: 0;
        color: #005744;
        font-size: 1.3rem;
        margin-bottom: 1rem;
    }

    .welcome-section p {
        margin: 0.5rem 0;
        color: #333;
        font-size: 1rem;
    }

    .form-group {
        margin-bottom: 1rem;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        width: 100%;
    }

    .form-group label {
        margin-bottom: 0.3rem;
        font-weight: 500;
    }

    .form-group input,
    .form-group textarea,
    .form-group select {
        width: 100%;
        padding: 0.7rem;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 1rem;
    }

    .form-links {
        margin-top: 1rem;
        display: flex;
        justify-content: space-between;
        font-size: 0.95rem;
        width: 100%;
    }

    .form-links a {
        color: #005744;
        text-decoration: underline;
        cursor: pointer;
    }

    /* Dashboard */
    #dashboard {
        display: none;
        min-height: 100vh;
        width: 100vw;
        background: transparent;
        position: absolute;
        top: 0;
        left: 0;
        z-index: 3;
        justify-content: center;
        align-items: flex-start;
    }

    .dashboard-wrapper {
        display: flex;
        flex-direction: row;
        width: 100vw;
        min-height: 100vh;
        justify-content: flex-start;
        align-items: flex-start;
    }

    .sidebar {
        width: 230px;
        background-color: #005744;
        color: white;
        height: 100vh;
        padding: 30px 20px;
        position: sticky;
        top: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        border-radius: 0;
    }

    .logo {
        width: 120px;
        height: 120px;
        border-radius: 16px;
        object-fit: cover;
        margin-bottom: 10px;
        background: #fff;
        border: 4px solid #f9a825;
        box-shadow: 0 4px 24px rgba(0, 0, 0, 0.10);
    }

    .logo-container h2 {
        font-size: 2rem;
        font-weight: bold;
        color: #fff;
        letter-spacing: 1.5px;
        margin: 0;
        text-align: center;
        text-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
    }

    .sidebar nav ul {
        list-style: none;
        padding: 0;
        margin: 0;
        width: 100%;
    }

    .sidebar nav ul li {
        margin-bottom: 20px;
    }

    .sidebar nav ul li a {
        color: white;
        text-decoration: none;
        font-size: 1.1rem;
        display: block;
        padding: 10px 0;
        transition: background 0.2s;
        border-radius: 4px;
        text-align: center;
    }

    .sidebar nav ul li a:hover {
        background: rgba(255, 255, 255, 0.1);
    }

    .main-content {
        margin-left: 0;
        padding: 40px 30px 80px 30px;
        min-height: 100vh;
        background: #fff;
        border-radius: 0;
        box-shadow: 0 4px 24px rgba(0, 0, 0, 0.10);
        width: 100vw;
        max-width: calc(100vw - 230px);
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    /* Servicios */
    .contenedor {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 1.5rem;
        margin-bottom: 2rem;
        width: 100%;
        max-width: 1000px;
        margin-left: auto;
        margin-right: auto;
    }

    .tarjeta {
        background: #f9f9f9;
        border: 1px solid #ddd;
        border-radius: 12px;
        padding: 1.2rem;
        text-align: center;
        cursor: pointer;
        transition: box-shadow 0.2s;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
    }

    .tarjeta:hover {
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.10);
        background: #f5f0e6;
    }

    #detalles {
        display: none;
        background: #f9f9f9;
        border-radius: 12px;
        padding: 1.5rem;
        margin-bottom: 2rem;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        width: 100%;
        max-width: 1000px;
        margin-left: auto;
        margin-right: auto;
    }

    #detalles ul {
        padding-left: 0;
        list-style: none;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1.5rem;
        justify-content: center;
        align-items: stretch;
        width: 100%;
    }

    .professional-card {
        display: flex;
        flex-direction: column;
        align-items: center;
        background: #fff;
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        padding: 1rem;
        width: 100%;
        box-shadow: 0 1px 4px rgba(0, 0, 0, 0.04);
        min-height: 180px;
        justify-content: center;
        position: relative;
    }

    .professional-card img {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 0.5rem;
        border: 2px solid #f9a825;
        background: #eee;
    }

    .professional-card .prof-name {
        font-weight: bold;
        font-size: 1.1rem;
        margin-bottom: 0.3rem;
        color: #005744;
    }

    .professional-card .prof-exp {
        font-size: 0.98rem;
        color: #888;
        margin-bottom: 0.2rem;
    }

    /* Rating y Contacto - contenedores anchos */
    .rating-container,
    .contact-info,
    .form-container {
        background: #f9f9f9;
        border-radius: 16px;
        padding: 2.5rem 2rem 2rem 2rem;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        max-width: 700px;
        width: 95vw;
        margin: 0 auto 2rem auto;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .rating {
        display: flex;
        flex-direction: row-reverse;
        justify-content: flex-end;
        gap: 0.2rem;
    }

    .rating input[type="radio"] {
        display: none;
    }

    .rating label {
        font-size: 2rem;
        color: #ccc;
        cursor: pointer;
        transition: color 0.2s;
    }

    .rating input[type="radio"]:checked~label,
    .rating label:hover,
    .rating label:hover~label {
        color: #ffd700;
    }

    .contact-info h2,
    .rating-container h2 {
        margin-top: 0;
        color: #005744;
        font-size: 1.5rem;
        margin-bottom: 1.5rem;
        text-align: center;
    }

    .contact-info p {
        margin: 0.5rem 0;
        color: #333;
        font-size: 1.08rem;
        text-align: center;
    }

    .form-group label {
        font-weight: bold;
    }

    .form-group textarea {
        resize: vertical;
        min-height: 80px;
    }

    .whatsapp-btn {
        display: inline-block;
        margin-top: 1rem;
        background: #25d366;
        color: #fff;
        padding: 0.7rem 1.2rem;
        border-radius: 4px;
        text-decoration: none;
        font-weight: bold;
        transition: background 0.2s;
    }

    .whatsapp-btn:hover {
        background: #128c7e;
    }

    @media (max-width: 1100px) {

        .main-content,
        #detalles,
        .contenedor {
            max-width: 98vw;
        }

        #detalles ul {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 700px) {
        .dashboard-wrapper {
            flex-direction: column;
            align-items: center;
        }

        .sidebar {
            width: 100vw;
            height: auto;
            border-radius: 16px 16px 0 0;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
        }

        .main-content {
            margin-left: 0;
            border-radius: 0 0 16px 16px;
            width: 100vw;
            max-width: 100vw;
        }

        #detalles ul {
            grid-template-columns: 1fr;
        }

        .contact-info,
        .rating-container,
        .form-container,
        .wide-container {
            max-width: 98vw;
        }
    }

    footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100vw;
        background: #f5f0e6;
        color: #333;
        text-align: center;
        padding: 1rem 0;
        font-size: 1rem;
        z-index: 100;
        border-top: 1px solid #e0e0e0;
    }
    </style>
</head>

<body>
    <!-- Header global -->
    <div class="global-header">
        <h1 class="titulo-global">Helping Hands</h1>
    </div>
    <!-- Landing Page -->
    <div id="landing-page">
        <div class="wide-container">
            <div class="button-container">
                <button class="btn btn-primary" onclick="showLogin()">Iniciar Sesión</button>
                <button class="btn btn-secondary" onclick="showRegister()">Registrarse</button>
            </div>
            <div class="welcome-section" id="welcome-section">
                <h2>¡Bienvenido a Helping Hands!</h2>
                <p>En un mundo donde la colaboración y la solidaridad marcan la diferencia, Helping Hands nace con el
                    propósito de conectar a personas con profesionales capacitados en diversas áreas, brindando
                    soluciones eficientes y de calidad.</p>
                <p>Ya sea que necesites asesoramiento, ayuda profesional o simplemente una mano amiga, estamos aquí para
                    hacerte la vida más fácil.</p>
                <p>¡Gracias por confiar en Helping Hands!</p>
            </div>
            <!-- Authentication Forms -->
            <form id="loginForm" style="display: none;">
                <div class="form-group">
                    <label for="loginEmail">Correo Electrónico:</label>
                    <input type="email" id="loginEmail" required>
                </div>
                <div class="form-group">
                    <label for="loginPassword">Contraseña:</label>
                    <input type="password" id="loginPassword" required>
                </div>
                <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                <div class="form-links">
                    <a href="#" onclick="showForgotPassword()">¿Olvidaste tu contraseña?</a>
                    <a href="#" onclick="showRegister()">Registrarse</a>
                </div>
            </form>
            <form id="registrationForm" style="display: none;">
                <div class="form-group">
                    <label for="nombre">Nombre Completo:</label>
                    <input type="text" id="nombre" required>
                </div>
                <div class="form-group">
                    <label for="fechaNacimiento">Fecha de Nacimiento:</label>
                    <input type="date" id="fechaNacimiento" required>
                </div>
                <div class="form-group">
                    <label for="cedula">Cédula de Ciudadanía:</label>
                    <input type="text" id="cedula" required>
                </div>
                <div class="form-group">
                    <label for="email">Correo Electrónico:</label>
                    <input type="email" id="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Número de Celular:</label>
                    <input type="tel" id="phone" required>
                </div>
                <div class="form-group">
                    <label for="ciudad">Ciudad:</label>
                    <input type="text" id="ciudad" required>
                </div>
                <div class="form-group">
                    <label for="direccion">Dirección:</label>
                    <input type="text" id="direccion" required>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" required>
                </div>
                <div class="form-group">
                    <label for="confirmPassword">Confirmar Contraseña:</label>
                    <input type="password" id="confirmPassword" required>
                </div>
                <button type="submit" class="btn btn-accent">Registrarse</button>
            </form>
            <form id="resetPasswordForm" style="display: none;">
                <div class="form-group">
                    <label for="resetEmail">Correo Electrónico:</label>
                    <input type="email" id="resetEmail" required>
                </div>
                <div class="form-group">
                    <label for="resetPhone">Número de Teléfono:</label>
                    <input type="tel" id="resetPhone" required>
                </div>
                <div class="form-group">
                    <label for="newPassword">Nueva Contraseña:</label>
                    <input type="password" id="newPassword" required>
                </div>
                <div class="form-group">
                    <label for="resetConfirmPassword">Confirmar Contraseña:</label>
                    <input type="password" id="resetConfirmPassword" required>
                </div>
                <button type="submit" class="btn btn-primary">Restablecer Contraseña</button>
            </form>
        </div>
    </div>
    <!-- Dashboard -->
    <div id="dashboard">
        <div class="dashboard-wrapper">
            <div class="sidebar">
                <div class="logo-container">
                    <img src="logo.png" alt="Helping Hands Logo" class="logo">
                    <h2>Helping Hands</h2>
                </div>
                <nav>
                    <ul>
                        <li><a href="#" onclick="showSection('servicios')">Servicios</a></li>
                        <li><a href="#" onclick="showSection('puntuacion')">Puntuación</a></li>
                        <li><a href="#" onclick="showSection('contacto')">Contacto</a></li>
                        <li><a href="#" onclick="logout()">Cerrar Sesión</a></li>
                    </ul>
                </nav>
            </div>
            <div class="main-content">
                <!-- Servicios -->
                <section id="servicios">
                    <h2>Servicios Profesionales</h2>
                    <div class="contenedor">
                        <div class="tarjeta" onclick="mostrarDetalles('chefs')">
                            <h3>Cocineros (Chefs)</h3>
                            <p>Expertos en gastronomía</p>
                        </div>
                        <div class="tarjeta" onclick="mostrarDetalles('enfermeros')">
                            <h3>Enfermeros/as</h3>
                            <p>Cuidado profesional de la salud</p>
                        </div>
                        <div class="tarjeta" onclick="mostrarDetalles('constructores')">
                            <h3>Maestros de Construcción</h3>
                            <p>Experiencia en obras y reformas</p>
                        </div>
                        <div class="tarjeta" onclick="mostrarDetalles('plomeros')">
                            <h3>Plomeros</h3>
                            <p>Soluciones en plomería</p>
                        </div>
                        <div class="tarjeta" onclick="mostrarDetalles('electricistas')">
                            <h3>Electricistas</h3>
                            <p>Instalaciones y reparaciones</p>
                        </div>
                        <div class="tarjeta" onclick="mostrarDetalles('cerrajeros')">
                            <h3>Cerrajeros</h3>
                            <p>Servicios de cerrajería</p>
                        </div>
                        <div class="tarjeta" onclick="mostrarDetalles('generales')">
                            <h3>Servicios Generales</h3>
                            <p>Mantenimiento integral</p>
                        </div>
                        <div class="tarjeta" onclick="mostrarDetalles('manicuristas')">
                            <h3>Manicuristas y Estilistas</h3>
                            <p>Belleza y cuidado personal</p>
                        </div>
                        <div class="tarjeta" onclick="mostrarDetalles('domiciliarios')">
                            <h3>Domiciliarios</h3>
                            <p>Entregas y mensajería</p>
                        </div>
                        <div class="tarjeta" onclick="mostrarDetalles('psicologos')">
                            <h3>Psicólogos</h3>
                            <p>Atención psicológica</p>
                        </div>
                        <div class="tarjeta" onclick="mostrarDetalles('abogados')">
                            <h3>Abogados</h3>
                            <p>Asesoría legal</p>
                        </div>
                        <div class="tarjeta" onclick="mostrarDetalles('docentes')">
                            <h3>Docentes Particulares</h3>
                            <p>Clases personalizadas</p>
                        </div>
                    </div>
                    <div id="detalles">
                        <h2 id="titulo-profesion"></h2>
                        <p id="descripcion-profesion"></p>
                        <h3>Profesionales Disponibles:</h3>
                        <ul id="lista-profesionales"></ul>
                        <button onclick="ocultarDetalles()" class="btn btn-secondary">Volver</button>
                    </div>
                </section>
                <!-- Puntuación -->
                <section id="puntuacion" style="display: none;">
                    <h2>Calificar Servicio</h2>
                    <div class="rating-container">
                        <form id="ratingForm">
                            <div class="form-group">
                                <label for="serviceSelect">Seleccionar Servicio:</label>
                                <select id="serviceSelect" required>
                                    <option value="">Seleccione un servicio</option>
                                    <option value="chefs">Cocineros (Chefs)</option>
                                    <option value="enfermeros">Enfermeros/as</option>
                                    <option value="constructores">Maestros de Construcción</option>
                                    <option value="plomeros">Plomeros</option>
                                    <option value="electricistas">Electricistas</option>
                                    <option value="cerrajeros">Cerrajeros</option>
                                    <option value="generales">Servicios Generales</option>
                                    <option value="manicuristas">Manicuristas y Estilistas</option>
                                    <option value="domiciliarios">Domiciliarios</option>
                                    <option value="psicologos">Psicólogos</option>
                                    <option value="abogados">Abogados</option>
                                    <option value="docentes">Docentes Particulares</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Calificación:</label>
                                <div class="rating">
                                    <input type="radio" name="rating" value="5" id="star5"><label for="star5">★</label>
                                    <input type="radio" name="rating" value="4" id="star4"><label for="star4">★</label>
                                    <input type="radio" name="rating" value="3" id="star3"><label for="star3">★</label>
                                    <input type="radio" name="rating" value="2" id="star2"><label for="star2">★</label>
                                    <input type="radio" name="rating" value="1" id="star1"><label for="star1">★</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="comment">Comentario:</label>
                                <textarea id="comment" rows="4"></textarea>
                            </div>
                            <button type="submit" class="btn btn-accent">Enviar Calificación</button>
                        </form>
                    </div>
                </section>
                <!-- Contacto -->
                <section id="contacto" style="display: none;">
                    <div class="contact-info">
                        <h2>Contacto</h2>
                        <p>📧 <strong>Email:</strong> handshelping113@gmail.com</p>
                        <p>📞 <strong>Teléfono:</strong> +57 324 836 6082</p>
                        <p>📍 <strong>Dirección:</strong> San Juan de Rioseco, Cundinamarca, Colombia</p>
                        <a href="https://wa.me/573248366082" target="_blank" class="whatsapp-btn">
                            Chatear en WhatsApp
                        </a>
                    </div>
                    <div class="form-container">
                        <form id="contactForm">
                            <div class="form-group">
                                <label for="contactName">Nombre:</label>
                                <input type="text" id="contactName" name="nombre" required>
                            </div>
                            <div class="form-group">
                                <label for="contactEmail">Correo Electrónico:</label>
                                <input type="email" id="contactEmail" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="mensaje">Mensaje:</label>
                                <textarea id="mensaje" name="mensaje" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <footer>
        <p>&copy; 2025 Helping Hands - Servicios Profesionales</p>
    </footer>
    <script>
    // Mostrar/ocultar landing y dashboard
    function showDashboard() {
        document.getElementById('landing-page').style.display = 'none';
        document.getElementById('dashboard').style.display = 'flex';
        showSection('servicios');
    }

    function showLanding() {
        document.getElementById('landing-page').style.display = 'flex';
        document.getElementById('dashboard').style.display = 'none';
        document.getElementById('welcome-section').style.display = 'block';
        document.getElementById('loginForm').style.display = 'none';
        document.getElementById('registrationForm').style.display = 'none';
        document.getElementById('resetPasswordForm').style.display = 'none';
    }
    // Mostrar formularios de autenticación
    function showLogin() {
        document.getElementById('loginForm').style.display = 'block';
        document.getElementById('registrationForm').style.display = 'none';
        document.getElementById('resetPasswordForm').style.display = 'none';
        document.getElementById('welcome-section').style.display = 'none';
    }

    function showRegister() {
        document.getElementById('loginForm').style.display = 'none';
        document.getElementById('registrationForm').style.display = 'block';
        document.getElementById('resetPasswordForm').style.display = 'none';
        document.getElementById('welcome-section').style.display = 'none';
    }

    function showForgotPassword() {
        document.getElementById('loginForm').style.display = 'none';
        document.getElementById('registrationForm').style.display = 'none';
        document.getElementById('resetPasswordForm').style.display = 'block';
        document.getElementById('welcome-section').style.display = 'none';
    }
    // Dashboard navigation
    function showSection(section) {
        ['servicios', 'puntuacion', 'contacto'].forEach(id => {
            document.getElementById(id).style.display = (id === section) ? 'block' : 'none';
        });
        if (section === 'servicios') ocultarDetalles();
    }
    // Servicios y detalles (con fotos y experiencia)
    const profesiones = {
        chefs: {
            titulo: 'Cocineros (Chefs)',
            descripcion: 'Expertos en gastronomía para eventos y servicios a domicilio.',
            profesionales: [{
                    nombre: 'Carlos Ramírez',
                    foto: 'https://randomuser.me/api/portraits/men/1.jpg',
                    experiencia: 8
                },
                {
                    nombre: 'María González',
                    foto: 'https://randomuser.me/api/portraits/women/1.jpg',
                    experiencia: 5
                },
                {
                    nombre: 'Pedro Chef',
                    foto: 'https://randomuser.me/api/portraits/men/15.jpg',
                    experiencia: 12
                }
            ]
        },
        enfermeros: {
            titulo: 'Enfermeros/as',
            descripcion: 'Cuidado profesional de la salud en el hogar.',
            profesionales: [{
                    nombre: 'Ana López',
                    foto: 'https://randomuser.me/api/portraits/women/2.jpg',
                    experiencia: 7
                },
                {
                    nombre: 'Juan Pérez',
                    foto: 'https://randomuser.me/api/portraits/men/2.jpg',
                    experiencia: 10
                },
                {
                    nombre: 'Sandra Nurse',
                    foto: 'https://randomuser.me/api/portraits/women/11.jpg',
                    experiencia: 4
                }
            ]
        },
        constructores: {
            titulo: 'Maestros de Construcción',
            descripcion: 'Experiencia en obras y reformas.',
            profesionales: [{
                    nombre: 'Roberto Silva',
                    foto: 'https://randomuser.me/api/portraits/men/3.jpg',
                    experiencia: 15
                },
                {
                    nombre: 'Miguel Torres',
                    foto: 'https://randomuser.me/api/portraits/men/4.jpg',
                    experiencia: 9
                },
                {
                    nombre: 'Luis Constructor',
                    foto: 'https://randomuser.me/api/portraits/men/16.jpg',
                    experiencia: 20
                }
            ]
        },
        plomeros: {
            titulo: 'Plomeros',
            descripcion: 'Soluciones en plomería para el hogar y empresas.',
            profesionales: [{
                    nombre: 'Luis Morales',
                    foto: 'https://randomuser.me/api/portraits/men/5.jpg',
                    experiencia: 11
                },
                {
                    nombre: 'Pedro Sánchez',
                    foto: 'https://randomuser.me/api/portraits/men/6.jpg',
                    experiencia: 6
                },
                {
                    nombre: 'Mario Plomero',
                    foto: 'https://randomuser.me/api/portraits/men/17.jpg',
                    experiencia: 13
                }
            ]
        },
        electricistas: {
            titulo: 'Electricistas',
            descripcion: 'Instalaciones y reparaciones eléctricas.',
            profesionales: [{
                    nombre: 'José García',
                    foto: 'https://randomuser.me/api/portraits/men/7.jpg',
                    experiencia: 14
                },
                {
                    nombre: 'Ricardo Díaz',
                    foto: 'https://randomuser.me/api/portraits/men/8.jpg',
                    experiencia: 8
                },
                {
                    nombre: 'Elena Luz',
                    foto: 'https://randomuser.me/api/portraits/women/12.jpg',
                    experiencia: 5
                }
            ]
        },
        cerrajeros: {
            titulo: 'Cerrajeros',
            descripcion: 'Servicios de cerrajería y apertura de puertas.',
            profesionales: [{
                    nombre: 'Fernando Ruiz',
                    foto: 'https://randomuser.me/api/portraits/men/9.jpg',
                    experiencia: 10
                },
                {
                    nombre: 'Alberto Castro',
                    foto: 'https://randomuser.me/api/portraits/men/10.jpg',
                    experiencia: 7
                },
                {
                    nombre: 'Sonia Llaves',
                    foto: 'https://randomuser.me/api/portraits/women/13.jpg',
                    experiencia: 6
                }
            ]
        },
        generales: {
            titulo: 'Servicios Generales',
            descripcion: 'Mantenimiento integral y limpieza.',
            profesionales: [{
                    nombre: 'Carmen Rojas',
                    foto: 'https://randomuser.me/api/portraits/women/3.jpg',
                    experiencia: 9
                },
                {
                    nombre: 'Diana Vargas',
                    foto: 'https://randomuser.me/api/portraits/women/4.jpg',
                    experiencia: 7
                },
                {
                    nombre: 'Jorge General',
                    foto: 'https://randomuser.me/api/portraits/men/18.jpg',
                    experiencia: 12
                }
            ]
        },
        manicuristas: {
            titulo: 'Manicuristas y Estilistas',
            descripcion: 'Belleza y cuidado personal a domicilio.',
            profesionales: [{
                    nombre: 'Laura Mendoza',
                    foto: 'https://randomuser.me/api/portraits/women/5.jpg',
                    experiencia: 6
                },
                {
                    nombre: 'Patricia López',
                    foto: 'https://randomuser.me/api/portraits/women/6.jpg',
                    experiencia: 8
                },
                {
                    nombre: 'Estefanía Nails',
                    foto: 'https://randomuser.me/api/portraits/women/14.jpg',
                    experiencia: 4
                }
            ]
        },
        domiciliarios: {
            titulo: 'Domiciliarios',
            descripcion: 'Entregas y mensajería rápida.',
            profesionales: [{
                    nombre: 'Andrés Torres',
                    foto: 'https://randomuser.me/api/portraits/men/11.jpg',
                    experiencia: 3
                },
                {
                    nombre: 'Carlos Mendez',
                    foto: 'https://randomuser.me/api/portraits/men/12.jpg',
                    experiencia: 5
                },
                {
                    nombre: 'Domi Express',
                    foto: 'https://randomuser.me/api/portraits/men/19.jpg',
                    experiencia: 7
                }
            ]
        },
        psicologos: {
            titulo: 'Psicólogos',
            descripcion: 'Atención psicológica profesional.',
            profesionales: [{
                    nombre: 'Sofía Ramírez',
                    foto: 'https://randomuser.me/api/portraits/women/7.jpg',
                    experiencia: 9
                },
                {
                    nombre: 'Marcela Vélez',
                    foto: 'https://randomuser.me/api/portraits/women/8.jpg',
                    experiencia: 6
                },
                {
                    nombre: 'Dr. Pablo',
                    foto: 'https://randomuser.me/api/portraits/men/20.jpg',
                    experiencia: 15
                }
            ]
        },
        abogados: {
            titulo: 'Abogados',
            descripcion: 'Asesoría legal y representación.',
            profesionales: [{
                    nombre: 'Gabriel Herrera',
                    foto: 'https://randomuser.me/api/portraits/men/13.jpg',
                    experiencia: 18
                },
                {
                    nombre: 'Hugo Martínez',
                    foto: 'https://randomuser.me/api/portraits/men/14.jpg',
                    experiencia: 10
                },
                {
                    nombre: 'Abogada Luz',
                    foto: 'https://randomuser.me/api/portraits/women/15.jpg',
                    experiencia: 7
                }
            ]
        },
        docentes: {
            titulo: 'Docentes Particulares',
            descripcion: 'Clases personalizadas para todas las edades.',
            profesionales: [{
                    nombre: 'Isabel Castro',
                    foto: 'https://randomuser.me/api/portraits/women/9.jpg',
                    experiencia: 11
                },
                {
                    nombre: 'Martha Jiménez',
                    foto: 'https://randomuser.me/api/portraits/women/10.jpg',
                    experiencia: 14
                },
                {
                    nombre: 'Profesor Mario',
                    foto: 'https://randomuser.me/api/portraits/men/21.jpg',
                    experiencia: 20
                }
            ]
        }
    };

    function mostrarDetalles(profesion) {
        const data = profesiones[profesion];
        if (!data) return;
        document.getElementById('detalles').style.display = 'block';
        document.getElementById('titulo-profesion').textContent = data.titulo;
        document.getElementById('descripcion-profesion').textContent = data.descripcion;
        const ul = document.getElementById('lista-profesionales');
        ul.innerHTML = '';
        data.profesionales.forEach(prof => {
            const li = document.createElement('li');
            li.className = 'professional-card';
            li.innerHTML = `
          <img src="${prof.foto}" alt="${prof.nombre}">
          <span class="prof-name">${prof.nombre}</span>
          <span class="prof-exp"><i class="fas fa-briefcase"></i> ${prof.experiencia} años de experiencia</span>
        `;
            ul.appendChild(li);
        });
        // Ocultar tarjetas
        document.querySelector('.contenedor').style.display = 'none';
    }

    function ocultarDetalles() {
        document.getElementById('detalles').style.display = 'none';
        document.querySelector('.contenedor').style.display = 'grid';
    }
    // Logout
    function logout() {
        showLanding();
    }
    // Form handlers (simulados)
    document.addEventListener('DOMContentLoaded', function() {
        // Login
        document.getElementById('loginForm').onsubmit = function(e) {
            e.preventDefault();
            showDashboard();
        };
        // Registro
        document.getElementById('registrationForm').onsubmit = function(e) {
            e.preventDefault();
            alert('Registro exitoso. Ahora puede iniciar sesión.');
            showLogin();
        };
        // Reset password
        document.getElementById('resetPasswordForm').onsubmit = function(e) {
            e.preventDefault();
            alert('Contraseña restablecida. Ahora puede iniciar sesión.');
            showLogin();
        };
        // Contacto
        document.getElementById('contactForm').onsubmit = function(e) {
            e.preventDefault();
            alert('Mensaje enviado correctamente.');
            this.reset();
        };
        // Rating
        document.getElementById('ratingForm').onsubmit = function(e) {
            e.preventDefault();
            alert('¡Gracias por tu calificación!');
            this.reset();
        };
    });
    // Inicialización
    showLanding();
    </script>
</body>

</html>
</html>
