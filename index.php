<?php include 'includes/header.php'; ?>

<!-- HERO -->
<section id="hero" class="hero">
  <div class="container hero-inner">
    <div class="hero-left reveal">
      <h1>We craft enterprise-grade <span class="accent">web & mobile</span> experiences</h1>
      <p class="lead">From scalable backend systems to delightful mobile apps — we deliver product-quality software that scales.</p>
      <div class="hero-ctas">
        <a href="contact.php" class="btn primary">Get a Quote</a>
        <a href="#work" class="btn outline">See Our Work</a>
      </div>

      <ul class="hero-stats">
        <li><strong class="count" data-target="120">0</strong><span>Projects</span></li>
        <li><strong class="count" data-target="60">0</strong><span>Clients</span></li>
        <li><strong class="count" data-target="98">0</strong><span>Satisfaction</span></li>
      </ul>
    </div>

    <div class="hero-right reveal">
      <div class="hero-card">
        <img data-src="assets/images/project1.jpg" alt="project preview" class="lazy" />
      </div>
    </div>
  </div>
</section>

<!-- SERVICES -->
<section id="services" class="section">
  <div class="container">
    <div class="section-head reveal">
      <h2>Services</h2>
      <p class="muted">Tailored solutions that match your business needs.</p>
    </div>

    <div class="grid services-grid">
      <article class="card reveal">
        <i class="fas fa-mobile-alt feature-icon"></i>
        <h3>Mobile App Development</h3>
        <p>Native iOS & Android, plus cross-platform hybrid apps.</p>
      </article>

      <article class="card reveal">
        <i class="fas fa-laptop-code feature-icon"></i>
        <h3>Web Applications</h3>
        <p>React / Next.js frontends and scalable APIs.</p>
      </article>

      <article class="card reveal">
        <i class="fas fa-shopping-cart feature-icon"></i>
        <h3>E-Commerce</h3>
        <p>Magento, WooCommerce & headless commerce solutions.</p>
      </article>

      <article class="card reveal">
        <i class="fas fa-palette feature-icon"></i>
        <h3>UI / UX & Design</h3>
        <p>User-first design to increase conversions and retention.</p>
      </article>
    </div>
  </div>
</section>

<!-- WORK / PORTFOLIO -->
<section id="work" class="section alt">
  <div class="container">
    <div class="section-head reveal">
      <h2>Selected Work</h2>
      <p class="muted">Projects we’re proud of — product-led and design-driven.</p>
    </div>

    <div class="grid portfolio-grid">
      <div class="portfolio-item reveal" data-title="Retail App" data-image="assets/images/project1.jpg">
        <img data-src="assets/images/project1.jpg" alt="Retail App" class="lazy" />
        <div class="overlay">
          <h4>Retail App</h4>
          <button class="btn small view-project">View</button>
        </div>
      </div>

      <div class="portfolio-item reveal" data-title="SaaS Dashboard" data-image="assets/images/project2.jpg">
        <img data-src="assets/images/project2.jpg" alt="SaaS Dashboard" class="lazy" />
        <div class="overlay">
          <h4>SaaS Dashboard</h4>
          <button class="btn small view-project">View</button>
        </div>
      </div>

      <!-- Add more items as needed -->
    </div>
  </div>
</section>

<!-- ABOUT -->
<section id="about" class="section">
  <div class="container about-grid">
    <div class="reveal">
      <h2>About webmobrins</h2>
      <p class="muted">We’re a team of engineers, designers and product builders focused on digital transformation for mid and large companies.</p>

      <ul class="bullets">
        <li>Fast delivery with quality engineering</li>
        <li>Cloud-native architecture & DevOps</li>
        <li>Strong focus on UX & performance</li>
      </ul>
    </div>

    <div class="reveal team-cta">
      <img data-src="assets/images/ceo.jpg" alt="CEO" class="lazy team-photo" />
      <blockquote>
        <p>"Our clients trust us to build the systems that run their business."</p>
        <cite>— John Doe, CEO</cite>
      </blockquote>
    </div>
  </div>
</section>

<!-- TEAM -->
<section id="team" class="section alt">
  <div class="container">
    <div class="section-head reveal">
      <h2>Leadership</h2>
      <p class="muted">Experienced founders with product & engineering backgrounds.</p>
    </div>

    <div class="grid team-grid">
      <div class="card reveal">
        <img src="assets/images/ceo.jpg" alt="CEO" class="team-avatar" />
        <h4>John Doe</h4>
        <p class="muted-sm">Chief Executive Officer</p>
      </div>

      <div class="card reveal">
        <img src="assets/images/project2.jpg" alt="CTO" class="team-avatar" />
        <h4>Jane Smith</h4>
        <p class="muted-sm">Chief Technology Officer</p>
      </div>

      <div class="card reveal">
        <img src="assets/images/project1.jpg" alt="Head Design" class="team-avatar" />
        <h4>Alex Roe</h4>
        <p class="muted-sm">Head of Design</p>
      </div>
    </div>
  </div>
</section>

<!-- CONTACT CTA -->
<section id="contact-cta" class="section contact-cta">
  <div class="container">
    <div class="cta-card reveal">
      <h2>Ready to build something great?</h2>
      <p class="muted">Tell us about your project and we’ll get back within 1 business day.</p>
      <a href="contact.php" class="btn primary">Contact Us</a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
