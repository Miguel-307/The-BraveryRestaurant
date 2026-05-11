<?php get_header(); ?>

<!-- Hero Section -->
<section class="hero" id="hero">
    <div class="carousel" id="hero-carousel">
        <div class="carousel-inner">
            <!-- Slide 1: Main Terrace -->
            <div class="carousel-item active"
                style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('<?php echo get_stylesheet_directory_uri(); ?>/assets/WhatsApp%20Image%202026-05-07%20at%2021.15.11.jpeg');">
                <div class="hero-content">
                    <h1 class="reveal" data-i18n="hero-title-1">La Excelencia en cada Detalle</h1>
                    <p class="reveal" data-i18n="hero-desc-1">Una experiencia sensorial que redefine la alta cocina
                        contemporánea en el corazón de Marbella.</p>
                    <a href="#specialties" class="btn btn-large reveal" data-i18n="hero-cta">Explorar Especialidades</a>
                </div>
            </div>
            <!-- Slide 2: Cozy Corner -->
            <div class="carousel-item"
                style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('<?php echo get_stylesheet_directory_uri(); ?>/assets/WhatsApp%20Image%202026-05-07%20at%2021.15.09.jpeg');">
                <div class="hero-content">
                    <h1 data-i18n="hero-title-2">Sabor que Inspira</h1>
                    <p data-i18n="hero-desc-2">Ingredientes locales seleccionados para crear obras maestras culinarias
                        en un ambiente único.</p>
                    <a href="<?php echo esc_url(home_url('/carta')); ?>" class="btn btn-large"
                        data-i18n="hero-cta-2">Ver Carta</a>
                </div>
            </div>
        </div>
        <button class="carousel-control prev" id="hero-prev"><i class="fas fa-chevron-left"></i></button>
        <button class="carousel-control next" id="hero-next"><i class="fas fa-chevron-right"></i></button>
    </div>
</section>

<!-- About Section -->
<section class="about" id="about">
    <div class="container">
        <div class="about-grid">
            <div class="about-text reveal">
                <span class="subtitle" data-i18n="about-subtitle">Nuestra Herencia</span>
                <h2 data-i18n="about-title">Pasión por la Gastronomía</h2>
                <p data-i18n="about-p1">En El Patio Antiguo, creemos que la cocina es un arte que se vive con los cinco
                    sentidos. Nuestra historia comenzó con el deseo de fusionar las técnicas tradicionales con la
                    innovación más vanguardista.</p>
                <p data-i18n="about-p2">Cada plato es una narrativa, un viaje a través de los sabores más puros y las
                    texturas más sofisticadas. Bajo la dirección de nuestro equipo, buscamos la perfección en cada
                    bocado.</p>
                <a href="<?php echo esc_url(home_url('/carta')); ?>" class="btn btn-outline"
                    data-i18n="about-cta">Descubrir Menú</a>
            </div>
            <div class="about-image reveal">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/gastronomia.jpeg"
                    alt="Nuestro Plato Estrella" class="rounded-image">
            </div>
        </div>
    </div>
</section>

<!-- Service Section -->
<section class="service-section" id="service">
    <div class="container">
        <div class="about-grid">
            <div class="about-image reveal">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/camarero.jpeg"
                    alt="Nuestro Servicio" class="rounded-image">
            </div>
            <div class="about-text reveal">
                <span class="subtitle" data-i18n="service-subtitle">Excelencia y Calidez</span>
                <h2 data-i18n="service-title">Nuestro Servicio</h2>
                <p data-i18n="service-p1">Nos enorgullecemos de ofrecer una atención al cliente excepcional. Nuestro equipo está dedicado a hacer que cada visita sea especial, brindando un servicio atento, profesional y cercano.</p>
                <p data-i18n="service-p2">Desde el momento en que cruza nuestra puerta, nuestro objetivo es que se sienta como en casa, disfrutando de un ambiente acogedor y una atención personalizada que cuida hasta el más mínimo detalle.</p>
            </div>
        </div>
    </div>
</section>

<!-- Patio Section -->
<section class="patio-section" id="patio">
    <div class="container">
        <div class="about-grid reverse">
            <div class="about-text reveal">
                <span class="subtitle" data-i18n="front-patio-subtitle">Ambiente Único</span>
                <h2 data-i18n="front-patio-title">Patio Privado</h2>
                <p data-i18n="front-patio-desc">Disfruta de una comida tranquila en nuestro patio exclusivo, un oasis de paz en el centro de Marbella. Perfecto para reuniones íntimas y cenas inolvidables bajo el cielo mediterráneo.</p>
                <a href="<?php echo esc_url(home_url('/reserva')); ?>" class="btn btn-outline" data-i18n="nav-book">Reservar Mesa</a>
            </div>
            <div class="about-image reveal">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/patio.png"
                    alt="Nuestro Patio Privado" class="rounded-image">
            </div>
        </div>
    </div>
</section>

<!-- Gallery Section (Independent Carousel) -->
<section class="gallery-section" id="gallery">
    <div class="container">
        <div class="section-header reveal">
            <span class="subtitle">Momentos</span>
            <h2>Nuestra Galería</h2>
        </div>
        <div class="carousel gallery-carousel" id="gallery-carousel">
            <div class="carousel-inner">
                <?php
                $assets_dir = get_stylesheet_directory() . '/assets/';
                $assets_uri = get_stylesheet_directory_uri() . '/assets/';
                $images = glob($assets_dir . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);
                
                if ($images):
                    $first = true;
                    foreach ($images as $image):
                        $filename = basename($image);
                        ?>
                        <div class="carousel-item <?php echo $first ? 'active' : ''; ?>"
                            style="background-image: url('<?php echo esc_url($assets_uri . $filename); ?>');">
                        </div>
                        <?php
                        $first = false;
                    endforeach;
                else:
                    ?>
                    <div class="carousel-item active">
                        <div class="gallery-info">
                            <h3>No hay imágenes disponibles</h3>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <button class="carousel-control prev" id="gallery-prev"><i class="fas fa-chevron-left"></i></button>
            <button class="carousel-control next" id="gallery-next"><i class="fas fa-chevron-right"></i></button>
        </div>
    </div>
</section>

<!-- Reviews Section -->
<section class="reviews" id="reviews">
    <div class="container">
        <div class="section-header reveal">
            <span class="subtitle" data-i18n="reviews-subtitle">Servicio al Cliente</span>
            <h2 data-i18n="reviews-title">Lo que dicen nuestros clientes</h2>
        </div>
        <div class="reviews-grid">
            <div class="review-card reveal">
                <div class="stars">★★★★★</div>
                <p>"Una experiencia inolvidable. El trato del personal es exquisito y la comida es simplemente otro
                    nivel. Volveremos sin duda."</p>
                <span class="review-author">- María García</span>
            </div>
            <div class="review-card reveal">
                <div class="stars">★★★★★</div>
                <p>"El mejor restaurante de Marbella. Las vistas, el ambiente y sobre todo el sabor de cada plato.
                    10/10."</p>
                <span class="review-author">- Juan Pérez</span>
            </div>
            <div class="review-card reveal">
                <div class="stars">★★★★★</div>
                <p>"Elegancia pura. Cada detalle está cuidado al máximo. Un lugar perfecto para una cena especial."</p>
                <span class="review-author">- Elena R.</span>
            </div>
        </div>
        <div class="center-btn reveal">
            <a href="https://www.google.com/search?q=El+Patio+Antiguo+Marbella+reseñas" target="_blank"
                class="btn btn-outline" data-i18n="reviews-cta">Ver todas las reseñas</a>
        </div>
    </div>
</section>

<!-- Specialties Section -->
<section class="specialties" id="specialties">
    <div class="container">
        <div class="section-header reveal">
            <span class="subtitle" data-i18n="spec-subtitle">Selección del Chef</span>
            <h2 data-i18n="spec-title">Nuestras Especialidades</h2>
        </div>
        <div class="menu-grid">
            <!-- Specialty 1 -->
            <div class="menu-card reveal">
                <div class="card-img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/gazpacho.png"
                        alt="Gazpacho">
                </div>
                <div class="card-content">
                    <h3 data-i18n="salad-gazpacho">Gazpacho Andaluz</h3>
                    <p data-i18n="spec-1-desc-new">Tradición andaluza servida con frescura y los mejores ingredientes locales.</p>
                    <span class="price">7,50€</span>
                </div>
            </div>
            <!-- Specialty 2 -->
            <div class="menu-card reveal">
                <div class="card-img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/burratina.png"
                        alt="Burratina">
                </div>
                <div class="card-content">
                    <h3 data-i18n="salad-burratina">Ensalada de Burratina</h3>
                    <p data-i18n="spec-2-desc-new">Burrata cremosa acompañada de tomates de la huerta y pesto de albahaca.</p>
                    <span class="price">17,90€</span>
                </div>
            </div>
            <!-- Specialty 3 -->
            <div class="menu-card reveal">
                <div class="card-img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/minihamburguesa.png"
                        alt="Minihamburguesa">
                </div>
                <div class="card-content">
                    <h3 data-i18n="dish-mini-hamburguesa">Minihamburguesa Especial</h3>
                    <p data-i18n="spec-3-desc-new">Carne premium con cebolla caramelizada y nuestro toque secreto.</p>
                    <span class="price">5,00€</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tostas Section -->
<section class="tostas-section" id="tostas">
    <div class="container">
        <div class="about-grid">
            <div class="about-image reveal">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/tostas.png"
                    alt="Nuestras Tostas" class="rounded-image">
            </div>
            <div class="about-text reveal">
                <span class="subtitle" data-i18n="front-tostas-subtitle">Crujientes y Deliciosas</span>
                <h2 data-i18n="front-tostas-title">Nuestras Tostas</h2>
                <p data-i18n="front-tostas-desc">Una selección artesanal de tostas preparadas con pan de masa madre e ingredientes frescos de temporada. Desde los clásicos ibéricos hasta combinaciones innovadoras.</p>
                <a href="<?php echo esc_url(home_url('/carta')); ?>" class="btn btn-outline" data-i18n="nav-menu">Ver Carta Completa</a>
            </div>
        </div>
    </div>
</section>

<!-- Location Section -->
<section class="location" id="location">
    <div class="container">
        <div class="location-grid">
            <div class="location-info reveal">
                <span class="subtitle" data-i18n="loc-subtitle">Encuéntranos</span>
                <h2 data-i18n="loc-title">Ubicación & Contacto</h2>
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <div class="contact-text">
                        <p>Calle Pantaleón, 2</p>
                        <p>29601 Marbella, Málaga</p>
                    </div>
                </div>
                <div class="contact-item">
                    <i class="fas fa-phone-alt"></i>
                    <div class="contact-text">
                        <p>+34 613 98 19 42</p>
                    </div>
                </div>
                <div class="contact-item">
                    <i class="fas fa-clock"></i>
                    <div class="contact-text">
                        <p data-i18n="loc-hours">Abierto todos los días: 12:00 - 00:00</p>
                    </div>
                </div>
            </div>
            <div class="map-container reveal">
                <iframe
                    src="https://maps.google.com/maps?q=Calle%20Pantaleon%202,%20Marbella&t=&z=15&ie=UTF8&iwloc=&output=embed"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>