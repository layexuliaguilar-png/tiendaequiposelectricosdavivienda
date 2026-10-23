<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agencia Cuscathan Limited | Equipos Eléctricos y Ferretería en El Salvador</title>
    <meta name="description" content="Venta de equipos eléctricos, cables, breakers y herramientas. Descuentos exclusivos para clientes de Banco Davivienda El Salvador. Agencia Cuscathan Limited.">
    
    <!-- Fuentes de Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    
    <!-- CSS Integrado para que no falle -->
    <style>
        :root {
            --primary: #0A1628; /* Azul profundo */
            --accent: #F39C12;  /* Amarillo eléctrico */
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
        .btn { display: inline-block; padding: 12px 24px; background: var(--accent); color: var(--primary); font-weight: 800; border-radius: 4px; transition: 0.3s; font-family: 'Montserrat', sans-serif; border: none; cursor: pointer; text-transform: uppercase; letter-spacing: 1px; }
        .btn:hover { background: #e67e22; transform: translateY(-2px); color: var(--white); }
        .btn-outline { background: transparent; border: 2px solid var(--white); color: var(--white); }
        .btn-outline:hover { background: var(--white); color: var(--primary); }

        /* Hero */
        .hero { background: linear-gradient(rgba(10, 22, 40, 0.8), rgba(10, 22, 40, 0.8)), url('https://images.unsplash.com/photo-1558402529-d2638a7023e9?auto=format&fit=crop&w=1920&q=80') center/cover; padding: 100px 20px; text-align: center; color: var(--white); }
        .hero h2 { font-size: clamp(2rem, 5vw, 3.5rem); color: var(--white); margin-bottom: 20px; line-height: 1.2; }
        .hero p { font-size: 1.2rem; max-width: 700px; margin: 0 auto 30px; opacity: 0.9; }

        /* Productos */
        .products { padding: 80px 0; }
        .section-title { text-align: center; font-size: 2.2rem; margin-bottom: 40px; }
        .grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px; }
        .card { background: var(--white); border-radius: 8px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: 0.3s; border-bottom: 4px solid var(--accent); }
        .card:hover { transform: translateY(-5px); box-shadow: 0 10px 25px rgba(0,0,0,0.1); }
        .card img { width: 100%; height: 200px; object-fit: cover; }
        .card-content { padding: 25px; }
        .card h3 { font-size: 1.3rem; margin-bottom: 10px; }
        .card p { color: var(--text-light); font-size: 0.95rem; }

        /* Promociones Davivienda */
        .promo-section { background: var(--white); padding: 80px 0; border-top: 1px solid #eee; border-bottom: 1px solid #eee; }
        .promo-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center; }
        .promo-text h2 { font-size: 2.2rem; margin-bottom: 20px; color: var(--primary); }
        .promo-text p { margin-bottom: 15px; font-size: 1.05rem; }
        .promo-box { background: var(--bg); padding: 40px; border-radius: 8px; text-align: center; border: 2px dashed var(--accent); box-shadow: 0 10px 30px rgba(0,0,0,0.05); }
        .promo-box h3 { font-size: 1.5rem; margin-bottom: 10px; }
        .bank-badge { background: #E30613; color: var(--white); padding: 15px; font-size: 1.4rem; font-weight: 800; border-radius: 8px; margin: 20px 0; font-family: 'Montserrat', sans-serif; }
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
        <strong>Aviso Comercial:</strong> Agencia Cuscathan Limited es una ferretería de equipos eléctricos. <strong>NO somos Banco Davivienda.</strong> Las promociones son un descuento comercial para clientes de dicho banco.
    </div>

    <!-- Header -->
    <header>
        <div class="container header-grid">
            <div class="logo">
                <h1>Agencia <span>Cuscathan Limited</span></h1>
            </div>
            <nav>
                <ul>
                    <li><a href="#productos">Equipos</a></li>
                    <li><a href="#promociones">Promociones Davivienda</a></li>
                    <li><a href="#contacto">Contacto</a></li>
                </ul>
            </nav>
            <a href="#contacto" class="btn">Cotizar Ahora</a>
        </div>
    </header>

    <!-- Hero -->
    <section class="hero">
        <div class="container">
            <h2>Potencia tu hogar o negocio con los mejores equipos eléctricos</h2>
            <p>Vendemos cables, breakers, iluminación LED y herramientas profesionales. Calidad y seguridad garantizada en El Salvador.</p>
            <a href="#productos" class="btn btn-outline">Ver Catálogo</a>
        </div>
    </section>

    <!-- Productos -->
    <section id="productos" class="products container">
        <h2 class="section-title">Nuestro Catálogo Eléctrico</h2>
        <div class="grid">
            <div class="card">
                <img src="https://images.unsplash.com/photo-1558486012-817176f84c6d?auto=format&fit=crop&w=600&q=80" alt="Cables y Alambres">
                <div class="card-content">
                    <h3>Cables y Alambres</h3>
                    <p>Cables de cobre de alta conductividad para instalaciones residenciales e industriales seguras.</p>
                </div>
            </div>
            <div class="card">
                <img src="https://images.unsplash.com/photo-1621905251189-08b45d6a269e?auto=format&fit=crop&w=600&q=80" alt="Breakers y Tableros">
                <div class="card-content">
                    <h3>Breakers y Tableros</h3>
                    <p>Protege tus circuitos con nuestra línea de pastillas y centros de carga de las mejores marcas.</p>
                </div>
            </div>
            <div class="card">
                <img src="https://images.unsplash.com/photo-1513506003901-1e6a229e2d15?auto=format&fit=crop&w=600&q=80" alt="Iluminación LED">
                <div class="card-content">
                    <h3>Iluminación LED</h3>
                    <p>Ahorra energía con bombillos, paneles y reflectores LED de alta durabilidad y luz brillante.</p>
                </div>
            </div>
            <div class="card">
                <img src="https://images.unsplash.com/photo-1504148455328-c376907d081c?auto=format&fit=crop&w=600&q=80" alt="Herramientas Eléctricas">
                <div class="card-content">
                    <h3>Herramientas Eléctricas</h3>
                    <p>Taladros, pulidoras y sierras de marcas reconocidas para los trabajos más exigentes.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Promociones -->
    <section id="promociones" class="promo-section">
        <div class="container promo-grid">
            <div class="promo-text">
                <h2>Promoción Exclusiva para clientes de <em>Banco Davivienda</em></h2>
                <p>En Agencia Cuscathan Limited valoramos a nuestros clientes. Si eres tarjetahabiente o cliente activo de <strong>Banco Davivienda El Salvador</strong>, tenemos un beneficio especial para ti.</p>
                <p>Presenta tu tarjeta de débito o crédito Davivienda al momento de tu compra en nuestra tienda física y obtén:</p>
                <span class="highlight-text">¡Un 10% de descuento en toda tu compra de materiales eléctricos!</span>
                <p class="small-text">* Válido solo en compras presenciales. No aplica con otras promociones. La aprobación del descuento está sujeta a la presentación del documento oficial del banco.</p>
            </div>
            <div class="promo-box">
                <h3>Convenio de Descuento</h3>
                <p>Exclusivo para clientes de:</p>
                <div class="bank-badge">Banco Davivienda</div>
                <p>Al comprar cables, breakers y más.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contacto">
        <div class="container">
            <div class="footer-grid">
                <div>
                    <h4>Agencia Cuscathan Limited</h4>
                    <p>Venta de equipos eléctricos, ferretería y suministros para la construcción en El Salvador.</p>
                </div>
                <div>
                    <h4>Contacto</h4>
                    <p>📍 Calle Principal, Local 5, San Salvador.</p>
                    <p>📞 +503 2222 0000</p>
                    <p>✉️ contacto@cuscathanlimited.com</p>
                </div>
                <div>
                    <h4>Anunciante</h4>
                    <p>Responsable de la campaña:</p>
                    <p><strong>Oscar Giovanni Florez Serna</strong></p>
                </div>
            </div>
            
            <div class="legal-disclaimer">
                <p><strong>Aviso Legal Importante:</strong> Agencia Cuscathan Limited es una ferretería enfocada en la venta de equipos eléctricos. <strong>NO somos una entidad bancaria ni financiera.</strong> No solicitamos contraseñas, datos de tarjetas de crédito ni acceso a cuentas bancarias. </p>
                <p>La promoción de descuento para clientes de Banco Davivienda es un convenio comercial de la tienda para incentivar las ventas. Banco Davivienda no es responsable de la calidad o garantía de los productos vendidos.</p>
            </div>

            <div class="copyright">
                <p>© 2026 Agencia Cuscathan Limited. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

</body>
</html>
