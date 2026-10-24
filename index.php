<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuscathan Digital | Asesoría en Banca Digital y Finanzas</title>
    <meta name="description" content="Agencia de asesoría en banca digital. Te ayudamos a gestionar tus finanzas de forma segura, prevenir fraudes y optimizar tus operaciones en línea. Por Victor Hugo Rios Linares.">
    
    <!-- Fuentes de Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    
    <!-- CSS Integrado para que no falle -->
    <style>
        :root {
            --primary: #0A1628; /* Azul profundo corporativo */
            --accent: #00A8E8;  /* Azul digital brillante */
            --bg: #F8F9FA;
            --text: #333;
            --text-light: #666;
            --white: #FFF;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Open Sans', sans-serif; background: var(--bg); color: var(--text); line-height: 1.6; }
        a { text-decoration: none; color: inherit; }
        ul { list-style: none; }
        img { max-width: 100%; display: block; }
        h1, h2, h3, h4 { font-family: 'Montserrat', sans-serif; color: var(--primary); }

        .container { width: 90%; max-width: 1200px; margin: 0 auto; }

        /* Banner de Advertencia (Anti-Phishing Google Ads) */
        .legal-banner { background: var(--primary); color: var(--white); text-align: center; padding: 12px; font-size: 0.85rem; border-bottom: 3px solid var(--accent); }
        .legal-banner strong { color: var(--accent); }

        /* Header */
        header { background: var(--white); padding: 15px 0; box-shadow: 0 2px 10px rgba(0,0,0,0.1); position: sticky; top: 0; z-index: 100; }
        .header-grid { display: flex; justify-content: space-between; align-items: center; }
        .logo h1 { font-size: 1.5rem; font-weight: 800; text-transform: uppercase; }
        .logo span { color: var(--accent); }
        nav ul { display: flex; gap: 20px; font-weight: 600; font-size: 0.9rem; }
        nav a:hover { color: var(--accent); }
        
        /* Botones */
        .btn { display: inline-block; padding: 12px 24px; background: var(--accent); color: var(--white); font-weight: 800; border-radius: 4px; transition: 0.3s; font-family: 'Montserrat', sans-serif; border: none; cursor: pointer; text-transform: uppercase; letter-spacing: 1px; }
        .btn:hover { background: #0086b3; transform: translateY(-2px); }
        .btn-outline { background: transparent; border: 2px solid var(--white); color: var(--white); }
        .btn-outline:hover { background: var(--white); color: var(--primary); }

        /* Hero */
        .hero { background: linear-gradient(rgba(10, 22, 40, 0.85), rgba(10, 22, 40, 0.85)), url('https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=1920&q=80') center/cover; padding: 100px 20px; text-align: center; color: var(--white); }
        .hero h2 { font-size: clamp(2rem, 5vw, 3.5rem); color: var(--white); margin-bottom: 20px; line-height: 1.2; }
        .hero p { font-size: 1.2rem; max-width: 700px; margin: 0 auto 30px; opacity: 0.9; }

        /* Servicios */
        .products { padding: 80px 0; }
        .section-title { text-align: center; font-size: 2.2rem; margin-bottom: 40px; }
        .grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px; }
        .card { background: var(--white); border-radius: 8px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: 0.3s; border-bottom: 4px solid var(--accent); }
        .card:hover { transform: translateY(-5px); box-shadow: 0 10px 25px rgba(0,0,0,0.1); }
        .card img { width: 100%; height: 200px; object-fit: cover; }
        .card-content { padding: 25px; }
        .card h3 { font-size: 1.3rem; margin-bottom: 10px; }
        .card p { color: var(--text-light); font-size: 0.95rem; }

        /* Promociones / Convenios */
        .promo-section { background: var(--white); padding: 80px 0; border-top: 1px solid #eee; border-bottom: 1px solid #eee; }
        .promo-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center; }
        .promo-text h2 { font-size: 2.2rem; margin-bottom: 20px; color: var(--primary); }
        .promo-text p { margin-bottom: 15px; font-size: 1.05rem; }
        .promo-box { background: var(--bg); padding: 40px; border-radius: 8px; text-align: center; border: 2px dashed var(--accent); box-shadow: 0 10px 30px rgba(0,0,0,0.05); }
        .promo-box h3 { font-size: 1.5rem; margin-bottom: 10px; }
        .bank-badge { background: var(--primary); color: var(--white); padding: 15px; font-size: 1.4rem; font-weight: 800; border-radius: 8px; margin: 20px 0; font-family: 'Montserrat', sans-serif; }
        .small-text { font-size: 0.8rem; color: var(--text-light); margin-top: 15px; }
        .highlight-text { color: var(--accent); font-weight: 800; font-size: 1.2rem; display: block; margin-top: 15px; }

        /* Contacto y Footer */
        footer { background: var(--primary); color: #bbb; padding: 60px 0 20px; }
        .footer-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 40px; margin-bottom: 40px; }
        .footer-grid h4 { color: var(--white); margin-bottom: 15px; font-size: 1.2rem; }
        .footer-grid p { font-size: 0.9rem; margin-bottom: 10px; }
        .legal-disclaimer { background: #050D1A; padding: 20px; border-left: 4px solid var(--accent); margin-bottom: 30px; font-size: 0.85rem; border-radius: 4px; color: #ccc; }
        .legal-disclaimer strong { color: var(--accent); }
        .copyright { text-align: center; border-top: 1px solid #333; padding-top: 20px; font-size: 0.8rem; }

        @media (max-width: 768px) {
            .header-grid { flex-direction: column; gap: 15px; }
            nav ul { flex-wrap: wrap; justify-content: center; }
            .promo-grid { grid-template-columns: 1fr; }
            .hero { padding: 60px 20px; }
        }
    </style>
</head>
<body>

    <!-- Banner de Advertencia (Crítico para Google Ads) -->
    <div class="legal-banner">
        <strong>Aviso Comercial:</strong> Cuscathan Digital es una agencia independiente de asesoría financiera. <strong>NO somos una entidad bancaria</strong> ni solicitamos contraseñas.
    </div>

    <!-- Header -->
    <header>
        <div class="container header-grid">
            <div class="logo">
                <h1>Cuscathan <span>Digital</span></h1>
            </div>
            <nav>
                <ul>
                    <li><a href="#servicios">Servicios</a></li>
                    <li><a href="#promociones">Convenios</a></li>
                    <li><a href="#contacto">Contacto</a></li>
                </ul>
            </nav>
            <a href="#contacto" class="btn">Asesoría Gratis</a>
        </div>
    </header>

    <!-- Hero -->
    <section class="hero">
        <div class="container">
            <h2>Domina tus Finanzas con Asesoría en Banca Digital</h2>
            <p>Te ayudamos a navegar el mundo de la banca en línea de forma segura. Prevención de fraudes, gestión de cuentas y optimización de tus servicios financieros.</p>
            <a href="#servicios" class="btn btn-outline">Conocer Servicios</a>
        </div>
    </section>

    <!-- Servicios (Productos) -->
    <section id="servicios" class="products container">
        <h2 class="section-title">Nuestras Áreas de Asesoría</h2>
        <div class="grid">
            <div class="card">
                <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&w=600&q=80" alt="Seguridad Digital">
                <div class="card-content">
                    <h3>Prevención de Fraudes</h3>
                    <p>Te enseñamos a proteger tus cuentas, detectar phishing y evitar robos en tus aplicaciones bancarias.</p>
                </div>
            </div>
            <div class="card">
                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=600&q=80" alt="Gestión Financiera">
                <div class="card-content">
                    <h3>Gestión de Cuentas</h3>
                    <p>Asesoría para entender tus estados de cuenta, manejar tarjetas de crédito y organizar tus finanzas.</p>
                </div>
            </div>
            <div class="card">
                <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?auto=format&fit=crop&w=600&q=80" alt="Trámites en Línea">
                <div class="card-content">
                    <h3>Trámites Digitales</h3>
                    <p>Te guiamos paso a paso para que realices tus operaciones bancarias en línea sin errores y con total seguridad.</p>
                </div>
            </div>
            <div class="card">
                <img src="https://images.unsplash.com/photo-1579532537598-459ecdaf39cc?auto=format&fit=crop&w=600&q=80" alt="Educación Financiera">
                <div class="card-content">
                    <h3>Educación Financiera</h3>
                    <p>Cursos y talleres para que tomes el control de tu dinero y aproveches los beneficios de la banca moderna.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Promociones / Convenios -->
    <section id="promociones" class="promo-section">
        <div class="container promo-grid">
            <div class="promo-text">
                <h2>Beneficios para clientes de <em>Banco Davivienda</em></h2>
                <p>En Cuscathan Digital valoramos a nuestros usuarios. Si eres tarjetahabiente o cliente activo de <strong>Banco Davivienda El Salvador</strong>, tenemos un beneficio especial para ti.</p>
                <p>Agenda tu primera consulta de asesoría digital y obtén:</p>
                <span class="highlight-text">¡Una revisión gratuita de seguridad en tus aplicaciones bancarias!</span>
                <p class="small-text">* Válido solo para clientes que presenten su documento oficial. Este es un servicio independiente de consultoría; no somos el banco.</p>
            </div>
            <div class="promo-box">
                <h3>Convenio de Asesoría</h3>
                <p>Exclusivo para clientes de:</p>
                <div class="bank-badge">Banco Davivienda</div>
                <p>Al agendar tu consulta digital.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contacto">
        <div class="container">
            <div class="footer-grid">
                <div>
                    <h4>Cuscathan Digital</h4>
                    <p>Agencia de asesoría en banca digital, finanzas personales y prevención de fraudes en El Salvador.</p>
                </div>
                <div>
                    <h4>Contacto</h4>
                    <p>📍 Calle Principal, Local 5, San Salvador.</p>
                    <p>📞 +503 2222 0000</p>
                    <p>✉️ contacto@cuscathandigital.com</p>
                </div>
                <div>
                    <h4>Anunciante</h4>
                    <p>Responsable de la campaña:</p>
                    <p><strong>Victor Hugo Rios Linares</strong></p>
                </div>
            </div>
            
            <div class="legal-disclaimer">
                <p><strong>Aviso Legal Importante:</strong> Cuscathan Digital es una agencia de asesoría y consultoría financiera independiente. <strong>NO somos una entidad bancaria ni financiera.</strong> No solicitamos contraseñas, datos de tarjetas de crédito ni acceso a cuentas bancarias. </p>
                <p>La mención de Banco Davivienda es únicamente con fines informativos para identificar a los usuarios que pueden acceder a nuestros servicios de consultoría. No existe una relación oficial de representación.</p>
            </div>

            <div class="copyright">
                <p>© 2026 Cuscathan Digital. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

</body>
</html>
