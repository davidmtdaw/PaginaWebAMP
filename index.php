<?php get_header(); ?>

<!-- ─── HERO ─────────────────────────────────────────── -->
<section class="hero">
  <div class="hero-bg"></div>
  <span class="hero-tag">Desarrollo Web Corporativo</span>
  <h1>
    Tu web.<br>
    <em>Siempre</em> lista.<br>
    Sin complicaciones.
  </h1>
  <p class="hero-sub">
    Desplegamos sitios WordPress profesionales de forma automatizada.
    Infraestructura reproducible, actualizaciones instantáneas.
  </p>
  <a class="hero-cta" href="#servicios">Ver servicios</a>
</section>

<!-- ─── STATS ─────────────────────────────────────────── -->
<section class="stats">
  <div class="stat-item">
    <div class="stat-number">+120</div>
    <div class="stat-label">Proyectos entregados</div>
  </div>
  <div class="stat-item">
    <div class="stat-number">99.9%</div>
    <div class="stat-label">Disponibilidad garantizada</div>
  </div>
  <div class="stat-item">
    <div class="stat-number">&lt;1min</div>
    <div class="stat-label">Tiempo de despliegue</div>
  </div>
</section>

<!-- ─── SERVICES ──────────────────────────────────────── -->
<section class="services" id="servicios">
  <div class="section-header">
    <div>
      <div class="section-label">Lo que hacemos</div>
      <h2 class="section-title">Servicios</h2>
    </div>
  </div>

  <div class="services-grid">
    <div class="service-card">
      <span class="service-number">01</span>
      <h3>Diseño WordPress</h3>
      <p>Temas personalizados adaptados a la identidad de tu negocio, optimizados para velocidad y conversión.</p>
    </div>
    <div class="service-card">
      <span class="service-number">02</span>
      <h3>Despliegue Automatizado</h3>
      <p>Infraestructura como código con Vagrant y Docker. El entorno se reproduce igual en cualquier máquina.</p>
    </div>
    <div class="service-card">
      <span class="service-number">03</span>
      <h3>Control de Versiones</h3>
      <p>Flujo de trabajo basado en GitHub. Cada cambio queda registrado y el despliegue es un solo comando.</p>
    </div>
    <div class="service-card">
      <span class="service-number">04</span>
      <h3>Mantenimiento Web</h3>
      <p>Actualizaciones de plugins, copias de seguridad automáticas y monitorización continua.</p>
    </div>
    <div class="service-card">
      <span class="service-number">05</span>
      <h3>SEO Técnico</h3>
      <p>Optimización de rendimiento, Core Web Vitals, metadatos y estructura semántica correcta.</p>
    </div>
    <div class="service-card">
      <span class="service-number">06</span>
      <h3>Soporte Prioritario</h3>
      <p>Equipo técnico disponible para resolver incidencias y evolucionar tu plataforma web.</p>
    </div>
  </div>
</section>

<!-- ─── ABOUT ──────────────────────────────────────────── -->
<section class="about-strip" id="nosotros">
  <div class="about-content">
    <div class="section-label">Quiénes somos</div>
    <h2 class="section-title" style="margin-top:0.5rem; margin-bottom:1.5rem;">
      Tecnología que trabaja mientras tú descansan.
    </h2>
    <p style="color:rgba(245,244,240,0.55); font-weight:300; line-height:1.8; margin-bottom:2rem;">
      En WebFusion Digital automatizamos el ciclo completo de desarrollo web,
      desde el código hasta el servidor. Sin procesos manuales, sin errores de versiones,
      sin pérdida de tiempo.
    </p>
    <a class="hero-cta" href="mailto:hola@webfusion.es">Contáctanos</a>
  </div>
  <div class="about-visual">
    <ul class="tech-list">
      <li>WordPress</li>
      <li>Docker Compose</li>
      <li>Vagrant</li>
      <li>GitHub</li>
      <li>Ubuntu Server</li>
    </ul>
  </div>
</section>

<?php get_footer(); ?>
