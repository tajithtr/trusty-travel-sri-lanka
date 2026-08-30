<!-- Cinematic Full-Viewport Hero Section -->
<section class="hero">
    <!-- Animated Ken Burns Background Slider -->
    <div class="hero-slider-bg">
        <div class="hero-slide-item active" style="background-image: url('<?= SITE_URL ?>/assets/Images/optimized/sigiriya_Ella.webp');"></div>
        <div class="hero-slide-item" style="background-image: url('<?= SITE_URL ?>/assets/Images/optimized/yaala.webp');"></div>
        <div class="hero-slide-item" style="background-image: url('<?= SITE_URL ?>/assets/Images/optimized/goldentemple.webp');"></div>
        <div class="hero-slide-item" style="background-image: url('<?= SITE_URL ?>/assets/Images/optimized/goldensafari.webp');"></div>
    </div>
    <div class="hero-overlay"></div>

    <!-- Decorative Floating Particles -->
    <div class="hero-particles">
        <span class="hero-particle"></span>
        <span class="hero-particle"></span>
        <span class="hero-particle"></span>
        <span class="hero-particle"></span>
        <span class="hero-particle"></span>
        <span class="hero-particle"></span>
    </div>
    <div class="hero-deco-ring"></div>

    <div class="container">
        <div class="hero-grid">
            <div class="hero-content">
                <span class="hero-subtag">✨ Authentic 5-Star Sri Lanka Holidays</span>
                <h1>
                    Discover Paradise With <span class="highlight display-title" style="color: var(--gold-bright);">Sanjeewa</span>
                </h1>
                <div class="hero-rotator-subtitle" style="font-size: clamp(1rem, 2vw, 1.25rem); font-weight: 700; color: #ffffff; margin-bottom: 1rem;">
                    Experience <span class="animated-service-rotator" id="serviceRotator">Multi-Day Round Tours</span>
                </div>
                <p class="hero-description">
                    Custom round tours, Yala safaris, Kitulgala rafting, whale watching & private luxury chauffeur transfers across Sri Lanka.
                </p>

                <div class="hero-badges-wrapper">
                    <span class="hero-badge-pill"><i class="fas fa-magic"></i> Tailor-Made Tours</span>
                    <span class="hero-badge-pill"><i class="fas fa-user-check"></i> Licensed Driver Guides</span>
                    <span class="hero-badge-pill"><i class="fas fa-shield-alt"></i> Best Price Guarantee</span>
                </div>

                <!-- Stats Counter Bar -->
                <div class="hero-stats">
                    <div>
                        <span class="stat-number" data-count="1500" data-suffix="+">0+</span>
                        <span class="stat-label">Happy Travelers</span>
                    </div>
                    <div>
                        <span class="stat-number" data-count="10" data-suffix="+">0+</span>
                        <span class="stat-label">Years Experience</span>
                    </div>
                    <div>
                        <span class="stat-number" data-count="5.0" data-decimals="1" data-icon='<i class="fas fa-star" style="font-size: 0.7em; color: #ffd700;"></i>'>0.0 <i class="fas fa-star" style="font-size: 0.7em; color: #ffd700;"></i></span>
                        <span class="stat-label">TripAdvisor Rating</span>
                    </div>
                </div>

                <div class="hero-buttons">
                    <a href="#toursExplorer" class="btn-primary">
                        <i class="fas fa-compass"></i> Explore Packages
                    </a>
                    <a href="https://wa.me/<?= WHATSAPP ?>?text=Hi%20Sanjeewa,%20I'd%20like%20to%20plan%20a%20tour" target="_blank" class="btn-whatsapp">
                        <i class="fab fa-whatsapp"></i> Chat on WhatsApp
                    </a>
                </div>
            </div>

            <div class="hero-image">
                <div class="hero-logo-card">
                    <picture>
                        <source srcset="<?= SITE_URL ?>/assets/Images/logo-hero.webp?v=9.1.0" type="image/webp">
                        <img src="<?= SITE_URL ?>/assets/Images/logo-hero.png?v=9.1.0" alt="<?= SITE_NAME ?>" class="hero-logo floating" width="280" height="280" fetchpriority="high" decoding="sync">
                    </picture>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll Down Indicator -->
    <a href="#estimatorSection" class="hero-scroll-indicator">
        <span>Scroll</span>
        <i class="fas fa-chevron-down"></i>
    </a>
</section>

<!-- Interactive Rate Estimator Widget -->
<div class="container estimator-wrapper" id="estimatorSection">
    <div class="estimator-card">
        <div class="estimator-header">
            <div class="estimator-title-group">
                <span class="estimator-badge"><i class="fas fa-bolt"></i> Instant Quote</span>
                <h3 class="estimator-title">
                    <i class="fas fa-calculator" style="color: var(--gold-sun);"></i> Tour & Transfer Rate Estimator
                </h3>
            </div>
            <p class="estimator-subtitle">Select your private vehicle hire or island experience to view instant rates in USD / LKR and book via WhatsApp.</p>
        </div>

        <div class="estimator-grid">
            <div class="form-group">
                <label><i class="fas fa-car-side" style="color: var(--gold-sun);"></i> Select Chauffeur Vehicle</label>
                <select class="form-control estimator-select" id="estService">
                    <option value="roomy" selected>Toyota Roomy (120 LKR/km)</option>
                    <option value="vezel">Honda Vezel SUV (180 LKR/km)</option>
                    <option value="montero">Mitsubishi Montero (240 LKR/km)</option>
                    <option value="van">Toyota KDH Mini Van (240 LKR/km)</option>
                </select>
            </div>

            <div class="form-group">
                <label><i class="fas fa-users" style="color: var(--gold-sun);"></i> Travelers (Pax)</label>
                <select class="form-control estimator-select" id="estPax">
                    <option value="1">1 Person</option>
                    <option value="2" selected>2 Persons</option>
                    <option value="4">4 Persons</option>
                    <option value="6">6 Persons</option>
                    <option value="10">10+ Persons</option>
                </select>
            </div>

            <!-- KM Distance Field — Only visible for Car, Van, Bus -->
            <div class="form-group" id="estDistanceGroup">
                <label><i class="fas fa-road" style="color: var(--gold-sun);"></i> Estimated Distance (KM)</label>
                <div class="input-with-unit">
                    <input type="number" class="form-control estimator-input" id="estDistance" value="50" min="10" max="1000">
                    <span class="unit-badge">KM</span>
                </div>
            </div>

            <div class="form-group">
                <label><i class="fas fa-coins" style="color: var(--gold-sun);"></i> Estimated Cost</label>
                <div class="estimator-result">
                    <div class="estimated-price" id="estPriceDisplay">$20 USD <span>(~6,000 LKR)</span></div>
                </div>
            </div>
        </div>

        <div class="estimator-footer">
            <a href="#" id="estBookBtn" target="_blank" class="btn-whatsapp estimator-btn">
                <i class="fab fa-whatsapp"></i> Book This Estimate on WhatsApp
            </a>
        </div>
    </div>
</div>

<!-- Premium Chauffeur Transfers & Airport Pickups Section -->
<section class="section" style="background: var(--bg-body); border-top: 1px solid rgba(226, 232, 240, 0.8);">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <span class="badge-title">Private Chauffeur Service</span>
            <h2>Airport Pickups & Chauffeur Transfers</h2>
            <p style="color: var(--text-muted); margin-top: 0.4rem;">Book private, air-conditioned vehicle transfers from Colombo International Airport (CMB) or your hotel to any destination in Sri Lanka.</p>
        </div>

        <div class="card-grid">
            <!-- Toyota Roomy Vehicle -->
            <div class="card" data-aos="fade-up">
                <div class="card-img-header">
                    <img src="<?= SITE_URL ?>/assets/Images/optimized/roomy.webp" alt="Toyota Roomy Car" loading="lazy" decoding="async" width="400" height="250">
                    <span class="card-badge">Compact AC Car</span>
                </div>
                <div class="card-content-body">
                    <div class="card-meta">
                        <span><i class="fas fa-car" style="color: var(--gold-sun);"></i> Full AC Compact</span>
                        <span><i class="fas fa-star" style="color: var(--gold-bright);"></i> 5.0 (30 Reviews)</span>
                    </div>
                    <h3>Toyota Roomy / Compact AC</h3>
                    <div class="card-price-box">
                        <div class="price-usd">$0.40 USD / km</div>
                        <div class="price-lkr">(120 LKR/km)</div>
                    </div>
                    <ul class="inclusions-list">
                        <li><i class="fas fa-check"></i> Dual AC & Plush Seating</li>
                        <li><i class="fas fa-check"></i> Seats 3 Passengers + Luggage</li>
                        <li><i class="fas fa-check"></i> Fuel, Tolls & Driver Included</li>
                    </ul>
                    <a href="https://wa.me/<?= WHATSAPP ?>?text=Hi%20Sanjeewa,%20I'd%20like%20to%20book%20an%20Airport%20Pickup/Transfer%20using%20the%20Toyota%20Roomy" target="_blank" class="btn-enquire">
                        Book Transfer <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Honda Vezel SUV -->
            <div class="card" data-aos="fade-up" data-aos-delay="100">
                <div class="card-img-header">
                    <img src="<?= SITE_URL ?>/assets/Images/optimized/vezel.webp" alt="Honda Vezel SUV" loading="lazy" decoding="async" width="400" height="250">
                    <span class="card-badge">Luxury Hybrid SUV</span>
                </div>
                <div class="card-content-body">
                    <div class="card-meta">
                        <span><i class="fas fa-car-side" style="color: var(--gold-sun);"></i> Luxury SUV</span>
                        <span><i class="fas fa-star" style="color: var(--gold-bright);"></i> 5.0 (45 Reviews)</span>
                    </div>
                    <h3>Honda Vezel / Luxury SUV</h3>
                    <div class="card-price-box">
                        <div class="price-usd">$0.60 USD / km</div>
                        <div class="price-lkr">(180 LKR/km)</div>
                    </div>
                    <ul class="inclusions-list">
                        <li><i class="fas fa-check"></i> High Ground Clearance SUV</li>
                        <li><i class="fas fa-check"></i> Seats 4 Passengers + Luggage</li>
                        <li><i class="fas fa-check"></i> Full Climate Control AC</li>
                    </ul>
                    <a href="https://wa.me/<?= WHATSAPP ?>?text=Hi%20Sanjeewa,%20I'd%20like%20to%20book%20an%20Airport%20Pickup/Transfer%20using%20the%20Honda%20Vezel" target="_blank" class="btn-enquire">
                        Book Transfer <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Mitsubishi Montero SUV -->
            <div class="card" data-aos="fade-up" data-aos-delay="200">
                <div class="card-img-header">
                    <img src="<?= SITE_URL ?>/assets/Images/optimized/Montero.webp" alt="Mitsubishi Montero SUV" loading="lazy" decoding="async" width="400" height="250">
                    <span class="card-badge">Premium VVIP</span>
                </div>
                <div class="card-content-body">
                    <div class="card-meta">
                        <span><i class="fas fa-shield-alt" style="color: var(--gold-sun);"></i> VVIP Chauffeur</span>
                        <span><i class="fas fa-star" style="color: var(--gold-bright);"></i> 5.0 (20 Reviews)</span>
                    </div>
                    <h3>Mitsubishi Montero / Premium SUV</h3>
                    <div class="card-price-box">
                        <div class="price-usd">$0.80 USD / km</div>
                        <div class="price-lkr">(240 LKR/km)</div>
                    </div>
                    <ul class="inclusions-list">
                        <li><i class="fas fa-check"></i> 4WD Full Option Luxury</li>
                        <li><i class="fas fa-check"></i> Seats 4 Passengers + Luggage</li>
                        <li><i class="fas fa-check"></i> Professional Chauffeur Guide</li>
                    </ul>
                    <a href="https://wa.me/<?= WHATSAPP ?>?text=Hi%20Sanjeewa,%20I'd%20like%20to%20book%20an%20Airport%20Pickup/Transfer%20using%20the%20Mitsubishi%20Montero" target="_blank" class="btn-enquire">
                        Book Transfer <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Toyota KDH Mini Van -->
            <div class="card" data-aos="fade-up" data-aos-delay="300">
                <div class="card-img-header">
                    <img src="<?= SITE_URL ?>/assets/Images/optimized/kdhvan.webp" alt="Toyota KDH Mini Van" loading="lazy" decoding="async" width="400" height="250">
                    <span class="card-badge">High-Roof Van</span>
                </div>
                <div class="card-content-body">
                    <div class="card-meta">
                        <span><i class="fas fa-shuttle-van" style="color: var(--gold-sun);"></i> Dual AC High Roof</span>
                        <span><i class="fas fa-star" style="color: var(--gold-bright);"></i> 5.0 (62 Reviews)</span>
                    </div>
                    <h3>Toyota KDH High-Roof Van</h3>
                    <div class="card-price-box">
                        <div class="price-usd">$0.80 USD / km</div>
                        <div class="price-lkr">(240 LKR/km)</div>
                    </div>
                    <ul class="inclusions-list">
                        <li><i class="fas fa-check"></i> Velvet Seats & Dual AC</li>
                        <li><i class="fas fa-check"></i> Seats 9 Passengers + Luggage</li>
                        <li><i class="fas fa-check"></i> Ideal for Family Group Transfers</li>
                    </ul>
                    <a href="https://wa.me/<?= WHATSAPP ?>?text=Hi%20Sanjeewa,%20I'd%20like%20to%20book%20an%20Airport%20Pickup/Transfer%20using%20the%20Toyota%20KDH%20Van" target="_blank" class="btn-enquire">
                        Book Transfer <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Essential Foreign Traveler Guide Section -->
<section class="section" style="background: var(--teal-light);">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <span class="badge-title">Expert Travel Advice</span>
            <h2>Sri Lanka Foreign Traveler Essential Guide</h2>
            <p style="color: var(--text-muted); margin-top: 0.4rem;">Everything you need to know before visiting Sri Lanka for a smooth, safe, and memorable vacation.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 1.6rem;">
            <div class="card" style="padding: 1.8rem;" data-aos="fade-up">
                <div class="guide-icon-circle teal"><i class="fas fa-passport"></i></div>
                <h3 style="font-size: 1.15rem; margin-bottom: 0.4rem; color: var(--navy-trust);">Tourist Visa (ETA)</h3>
                <p style="font-size: 0.88rem; color: var(--text-sub);">Foreign tourists require an Electronic Travel Authorization (ETA) prior to arrival. Apply online at srilankaeta.lk or obtain On-Arrival visas at Colombo Airport.</p>
            </div>

            <div class="card" style="padding: 1.8rem;" data-aos="fade-up" data-aos-delay="100">
                <div class="guide-icon-circle gold"><i class="fas fa-cloud-sun"></i></div>
                <h3 style="font-size: 1.15rem; margin-bottom: 0.4rem; color: var(--navy-trust);">Best Season to Visit</h3>
                <p style="font-size: 0.88rem; color: var(--text-sub);">December to April is ideal for West & South coasts (Mirissa, Bentota, Yala, Kitulgala). May to September is best for East coast beaches.</p>
            </div>

            <div class="card" style="padding: 1.8rem;" data-aos="fade-up" data-aos-delay="200">
                <div class="guide-icon-circle green"><i class="fas fa-car-alt"></i></div>
                <h3 style="font-size: 1.15rem; margin-bottom: 0.4rem; color: var(--navy-trust);">Private Chauffeur Safety</h3>
                <p style="font-size: 0.88rem; color: var(--text-sub);">Hiring a private AC vehicle with Sanjeewa guarantees fuel supply, highway tolls, driver accommodation, and personalized scenic stops.</p>
            </div>

            <div class="card" style="padding: 1.8rem;" data-aos="fade-up" data-aos-delay="300">
                <div class="guide-icon-circle gold"><i class="fas fa-money-bill-wave"></i></div>
                <h3 style="font-size: 1.15rem; margin-bottom: 0.4rem; color: var(--navy-trust);">Currency & Payments</h3>
                <p style="font-size: 0.88rem; color: var(--text-sub);">Sri Lankan Rupee (LKR). Master/Visa cards accepted at major hotels, but cash (LKR) is recommended for local entrance tickets & tips.</p>
            </div>
        </div>
    </div>
</section>

<!-- Interactive Category Filter Section -->
<section class="section packages" id="toursExplorer">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <span class="badge-title">Interactive Explorer</span>
            <h2>Sri Lanka Tours & Chauffeur Fleet</h2>
            <p style="color: var(--text-muted); margin-top: 0.4rem;">Filter through multi-day round tours, rafting excursions, wildlife safaris, and luxury private vehicles.</p>
        </div>

        <!-- Filter Buttons -->
        <div class="filter-tabs-wrapper" data-aos="fade-up">
            <button class="filter-btn active" data-filter="round-tour"><i class="fas fa-route"></i> Multi-Day Round Tours</button>
            <button class="filter-btn" data-filter="adventure"><i class="fas fa-water"></i> Rafting & Safari</button>
            <button class="filter-btn" data-filter="shuttle-safari"><i class="fas fa-shuttle-van"></i> Shuttle & Safari</button>
            <button class="filter-btn" data-filter="normal-tour"><i class="fas fa-landmark"></i> Normal Day Excursions</button>
        </div>

        <!-- Filterable Grid -->
        <div class="card-grid" id="toursGrid">
            <!-- 3-Day Round Tour -->
            <div class="card filter-item round-tour" data-aos="fade-up">
                <div class="card-img-header card-img-carousel">
                    <div class="carousel-slides">
                        <img src="<?= SITE_URL ?>/assets/Images/roundtour/firstcard/sigiriya.webp" alt="Sigiriya Lion Rock Fortress" class="carousel-slide active" loading="lazy" decoding="async" width="400" height="250">
                        <img src="<?= SITE_URL ?>/assets/Images/roundtour/firstcard/dambullacavetemple.webp" alt="Dambulla Cave Temple" class="carousel-slide" loading="lazy" decoding="async" width="400" height="250">
                        <img src="<?= SITE_URL ?>/assets/Images/roundtour/firstcard/daladamaligawa.webp" alt="Kandy Sacred Temple of Tooth" class="carousel-slide" loading="lazy" decoding="async" width="400" height="250">
                        <img src="<?= SITE_URL ?>/assets/Images/roundtour/firstcard/Pinnawala.webp" alt="Pinnawala Elephant Sanctuary" class="carousel-slide" loading="lazy" decoding="async" width="400" height="250">
                    </div>
                    <span class="card-badge">3 Days / 2 Nights</span>
                    <button class="carousel-nav-btn prev-btn" aria-label="Previous Image"><i class="fas fa-chevron-left"></i></button>
                    <button class="carousel-nav-btn next-btn" aria-label="Next Image"><i class="fas fa-chevron-right"></i></button>
                    <div class="carousel-dots">
                        <span class="dot active"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </div>
                </div>
                <div class="card-content-body">
                    <div class="card-meta">
                        <span><i class="fas fa-map-marker-alt" style="color: var(--gold-sun);"></i> Sigiriya · Dambulla · Kandy</span>
                        <span><i class="fas fa-star" style="color: var(--gold-bright);"></i> 5.0 (38 Reviews)</span>
                    </div>
                    <h3>3-Day Cultural Triangle & Kandy Highlights</h3>
                    <div class="card-price-box">
                        <div class="price-usd">$149 USD / person</div>
                        <div class="price-lkr">(~45,000 LKR)</div>
                    </div>
                    <ul class="inclusions-list">
                        <li><i class="fas fa-check"></i> Private Luxury AC Vehicle & Driver</li>
                        <li><i class="fas fa-check"></i> Sigiriya Lion Rock Fortress Climb</li>
                        <li><i class="fas fa-check"></i> Dambulla Golden Cave Temple</li>
                        <li><i class="fas fa-check"></i> Kandy Sacred Temple of Tooth</li>
                    </ul>
                    <a href="https://wa.me/<?= WHATSAPP ?>?text=I'm%20interested%20in%20the%203-Day%20Cultural%20Triangle%20Tour" target="_blank" class="btn-enquire">
                        Book 3-Day Tour <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- 5-Day Round Tour -->
            <div class="card filter-item round-tour" data-aos="fade-up" data-aos-delay="100">
                <div class="card-img-header card-img-carousel">
                    <div class="carousel-slides">
                        <img src="<?= SITE_URL ?>/assets/Images/roundtour/secondcard/sigiriya.webp" alt="Sigiriya Lion Rock" class="carousel-slide active" loading="lazy" decoding="async" width="400" height="250">
                        <img src="<?= SITE_URL ?>/assets/Images/roundtour/secondcard/nuwaraeliya.webp" alt="Nuwara Eliya Tea Gardens" class="carousel-slide" loading="lazy" decoding="async" width="400" height="250">
                        <img src="<?= SITE_URL ?>/assets/Images/roundtour/secondcard/bluetrain.webp" alt="Kandy to Ella Blue Train" class="carousel-slide" loading="lazy" decoding="async" width="400" height="250">
                        <img src="<?= SITE_URL ?>/assets/Images/roundtour/secondcard/admspeak.webp" alt="Little Adam's Peak Ella" class="carousel-slide" loading="lazy" decoding="async" width="400" height="250">
                    </div>
                    <span class="card-badge">5 Days / 4 Nights</span>
                    <button class="carousel-nav-btn prev-btn" aria-label="Previous Image"><i class="fas fa-chevron-left"></i></button>
                    <button class="carousel-nav-btn next-btn" aria-label="Next Image"><i class="fas fa-chevron-right"></i></button>
                    <div class="carousel-dots">
                        <span class="dot active"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </div>
                </div>
                <div class="card-content-body">
                    <div class="card-meta">
                        <span><i class="fas fa-map-marker-alt" style="color: var(--gold-sun);"></i> Sigiriya · Kandy · Ella</span>
                        <span><i class="fas fa-star" style="color: var(--gold-bright);"></i> 5.0 (52 Reviews)</span>
                    </div>
                    <h3>5-Day Essential Sri Lanka Classic</h3>
                    <div class="card-price-box">
                        <div class="price-usd">$249 USD / person</div>
                        <div class="price-lkr">(~75,000 LKR)</div>
                    </div>
                    <ul class="inclusions-list">
                        <li><i class="fas fa-check"></i> Private AC Vehicle & Driver</li>
                        <li><i class="fas fa-check"></i> Sigiriya Lion Rock & Dambulla Caves</li>
                        <li><i class="fas fa-check"></i> Kandy Sacred Temple of Tooth</li>
                        <li><i class="fas fa-check"></i> Scenic Train Journey to Ella</li>
                    </ul>
                    <a href="https://wa.me/<?= WHATSAPP ?>?text=I'm%20interested%20in%20the%205-Day%20Essential%20Sri%20Lanka%20Tour" target="_blank" class="btn-enquire">
                        Book 5-Day Tour <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- 7-Day Round Tour -->
            <div class="card filter-item round-tour" data-aos="fade-up" data-aos-delay="150">
                <div class="card-img-header card-img-carousel">
                    <div class="carousel-slides">
                        <img src="<?= SITE_URL ?>/assets/Images/roundtour/thirdcard/yapahuwa.webp" alt="Yapahuwa & Sigiriya Ancient Rock" class="carousel-slide active" loading="lazy" decoding="async" width="400" height="250">
                        <img src="<?= SITE_URL ?>/assets/Images/roundtour/thirdcard/dambulla.webp" alt="Dambulla Golden Temple" class="carousel-slide" loading="lazy" decoding="async" width="400" height="250">
                        <img src="<?= SITE_URL ?>/assets/Images/roundtour/thirdcard/nuwaraeliya.webp" alt="Nuwara Eliya Waterfalls & Tea" class="carousel-slide" loading="lazy" decoding="async" width="400" height="250">
                        <img src="<?= SITE_URL ?>/assets/Images/roundtour/thirdcard/ninearch.webp" alt="Ella Nine Arch Bridge" class="carousel-slide" loading="lazy" decoding="async" width="400" height="250">
                        <img src="<?= SITE_URL ?>/assets/Images/roundtour/thirdcard/yala.webp" alt="Yala National Park Safari" class="carousel-slide" loading="lazy" decoding="async" width="400" height="250">
                        <img src="<?= SITE_URL ?>/assets/Images/roundtour/thirdcard/gallefort.webp" alt="Galle Dutch Fort" class="carousel-slide" loading="lazy" decoding="async" width="400" height="250">
                    </div>
                    <span class="card-badge">7 Days / 6 Nights</span>
                    <button class="carousel-nav-btn prev-btn" aria-label="Previous Image"><i class="fas fa-chevron-left"></i></button>
                    <button class="carousel-nav-btn next-btn" aria-label="Next Image"><i class="fas fa-chevron-right"></i></button>
                    <div class="carousel-dots">
                        <span class="dot active"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </div>
                </div>
                <div class="card-content-body">
                    <div class="card-meta">
                        <span><i class="fas fa-map-marker-alt" style="color: var(--gold-sun);"></i> Sigiriya · Kandy · Ella · Yala</span>
                        <span><i class="fas fa-star" style="color: var(--gold-bright);"></i> 5.0 (65 Reviews)</span>
                    </div>
                    <h3>7-Day Island Wonder & Yala Safari Expedition</h3>
                    <div class="card-price-box">
                        <div class="price-usd">$379 USD / person</div>
                        <div class="price-lkr">(~115,000 LKR)</div>
                    </div>
                    <ul class="inclusions-list">
                        <li><i class="fas fa-check"></i> Private AC Transport with Fuel & Tolls</li>
                        <li><i class="fas fa-check"></i> Sigiriya Rock & Cave Temples</li>
                        <li><i class="fas fa-check"></i> Ella Nine Arch Bridge Hike</li>
                        <li><i class="fas fa-check"></i> Yala National Park 4x4 Jeep Safari</li>
                    </ul>
                    <a href="https://wa.me/<?= WHATSAPP ?>?text=I'm%20interested%20in%20the%207-Day%20Island%20Wonder%20Tour" target="_blank" class="btn-enquire">
                        Book 7-Day Tour <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- 10-Day Round Tour -->
            <div class="card filter-item round-tour" data-aos="fade-up" data-aos-delay="200">
                <div class="card-img-header card-img-carousel">
                    <div class="carousel-slides">
                        <img src="<?= SITE_URL ?>/assets/Images/roundtour/fourthcard/ruwanwalisaya.webp" alt="Ruwanwelisaya Stupa Anuradhapura" class="carousel-slide active" loading="lazy" decoding="async" width="400" height="250">
                        <img src="<?= SITE_URL ?>/assets/Images/roundtour/fourthcard/sigiriya.webp" alt="Sigiriya Rock Fortress" class="carousel-slide" loading="lazy" decoding="async" width="400" height="250">
                        <img src="<?= SITE_URL ?>/assets/Images/roundtour/fourthcard/teacountry.webp" alt="Central Highlands Ceylon Tea Country" class="carousel-slide" loading="lazy" decoding="async" width="400" height="250">
                        <img src="<?= SITE_URL ?>/assets/Images/roundtour/fourthcard/yalasafari.webp" alt="Yala Leopard Safari Expedition" class="carousel-slide" loading="lazy" decoding="async" width="400" height="250">
                        <img src="<?= SITE_URL ?>/assets/Images/roundtour/fourthcard/gallefort.webp" alt="Mirissa & Galle Dutch Fort" class="carousel-slide" loading="lazy" decoding="async" width="400" height="250">
                        <img src="<?= SITE_URL ?>/assets/Images/roundtour/fourthcard/Buddha.webp" alt="Buddha Statue Heritage" class="carousel-slide" loading="lazy" decoding="async" width="400" height="250">
                    </div>
                    <span class="card-badge">10 Days / 9 Nights</span>
                    <button class="carousel-nav-btn prev-btn" aria-label="Previous Image"><i class="fas fa-chevron-left"></i></button>
                    <button class="carousel-nav-btn next-btn" aria-label="Next Image"><i class="fas fa-chevron-right"></i></button>
                    <div class="carousel-dots">
                        <span class="dot active"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </div>
                </div>
                <div class="card-content-body">
                    <div class="card-meta">
                        <span><i class="fas fa-map-marker-alt" style="color: var(--gold-sun);"></i> Full Island Grand Tour</span>
                        <span><i class="fas fa-star" style="color: var(--gold-bright);"></i> 5.0 (48 Reviews)</span>
                    </div>
                    <h3>10-Day Complete Sri Lanka Grand Heritage & Beach</h3>
                    <div class="card-price-box">
                        <div class="price-usd">$549 USD / person</div>
                        <div class="price-lkr">(~165,000 LKR)</div>
                    </div>
                    <ul class="inclusions-list">
                        <li><i class="fas fa-check"></i> Ancient Capitals (Anuradhapura & Polonnaruwa)</li>
                        <li><i class="fas fa-check"></i> Central Highlands & Tea Country</li>
                        <li><i class="fas fa-check"></i> Yala Leopard Safari Expedition</li>
                        <li><i class="fas fa-check"></i> Mirissa Whale Watching & Galle Fort</li>
                    </ul>
                    <a href="https://wa.me/<?= WHATSAPP ?>?text=I'm%20interested%20in%20the%2010-Day%20Grand%20Heritage%20Tour" target="_blank" class="btn-enquire">
                        Book 10-Day Tour <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Kitulgala Rafting -->
            <div class="card filter-item adventure" data-aos="fade-up" data-aos-delay="100">
                <div class="card-img-header card-img-carousel">
                    <div class="carousel-slides">
                        <img src="<?= SITE_URL ?>/assets/Images/safari/firstcard/waterrafting.webp" alt="Kitulgala White Water Rafting Rapids" class="carousel-slide active" loading="lazy" decoding="async" width="400" height="250">
                        <img src="<?= SITE_URL ?>/assets/Images/safari/firstcard/boatride.webp" alt="Kelani River Boat Ride Kitulgala" class="carousel-slide" loading="lazy" decoding="async" width="400" height="250">
                        <img src="<?= SITE_URL ?>/assets/Images/safari/firstcard/boatride2.webp" alt="Kitulgala River Action & Rafting" class="carousel-slide" loading="lazy" decoding="async" width="400" height="250">
                    </div>
                    <span class="card-badge">Bestseller</span>
                    <button class="carousel-nav-btn prev-btn" aria-label="Previous Image"><i class="fas fa-chevron-left"></i></button>
                    <button class="carousel-nav-btn next-btn" aria-label="Next Image"><i class="fas fa-chevron-right"></i></button>
                    <div class="carousel-dots">
                        <span class="dot active"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </div>
                </div>
                <div class="card-content-body">
                    <div class="card-meta">
                        <span><i class="fas fa-map-marker-alt" style="color: var(--gold-sun);"></i> Kitulgala</span>
                        <span><i class="fas fa-star" style="color: var(--gold-bright);"></i> 5.0 (68 Reviews)</span>
                    </div>
                    <h3>Kitulgala White Water Rafting</h3>
                    <div class="card-price-box">
                        <div class="price-usd">$7 USD / person</div>
                        <div class="price-lkr">(~2,000 LKR)</div>
                    </div>
                    <ul class="inclusions-list">
                        <li><i class="fas fa-check"></i> 5km Grade 2 & 3 Rapids Action</li>
                        <li><i class="fas fa-check"></i> Professional Safety Gear & Instructor</li>
                        <li><i class="fas fa-check"></i> River Bathing & Natural Rock Jumps</li>
                        <li><i class="fas fa-check"></i> Certified Water Safety Guides</li>
                    </ul>
                    <a href="https://wa.me/<?= WHATSAPP ?>?text=I'm%20interested%20in%20Kitulgala%20White%20Water%20Rafting" target="_blank" class="btn-enquire">
                        Book Rafting <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Waterfall Abseiling -->
            <div class="card filter-item adventure" data-aos="fade-up" data-aos-delay="150">
                <div class="card-img-header card-img-carousel">
                    <div class="carousel-slides">
                        <img src="<?= SITE_URL ?>/assets/Images/safari/secondcard/sandunella1.webp" alt="Sandun Ella Waterfall Abseiling Challenge" class="carousel-slide active" loading="lazy" decoding="async" width="400" height="250">
                        <img src="<?= SITE_URL ?>/assets/Images/safari/secondcard/sandunella2.webp" alt="105ft Waterfall Rappelling Kitulgala" class="carousel-slide" loading="lazy" decoding="async" width="400" height="250">
                        <img src="<?= SITE_URL ?>/assets/Images/safari/secondcard/sandunella3.webp" alt="Extreme Waterfall Descent Action" class="carousel-slide" loading="lazy" decoding="async" width="400" height="250">
                    </div>
                    <span class="card-badge">Extreme Action</span>
                    <button class="carousel-nav-btn prev-btn" aria-label="Previous Image"><i class="fas fa-chevron-left"></i></button>
                    <button class="carousel-nav-btn next-btn" aria-label="Next Image"><i class="fas fa-chevron-right"></i></button>
                    <div class="carousel-dots">
                        <span class="dot active"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </div>
                </div>
                <div class="card-content-body">
                    <div class="card-meta">
                        <span><i class="fas fa-map-marker-alt" style="color: var(--gold-sun);"></i> Sandun Ella Waterfall</span>
                        <span><i class="fas fa-star" style="color: var(--gold-bright);"></i> 5.0 (42 Reviews)</span>
                    </div>
                    <h3>Waterfall Abseiling & Rappelling</h3>
                    <div class="card-price-box">
                        <div class="price-usd">$15 USD / person</div>
                        <div class="price-lkr">(~4,500 LKR)</div>
                    </div>
                    <ul class="inclusions-list">
                        <li><i class="fas fa-check"></i> 105ft Waterfall Descend Challenge</li>
                        <li><i class="fas fa-check"></i> Professional Climbing Instructors</li>
                        <li><i class="fas fa-check"></i> Confidence Rope Harness & Safety Systems</li>
                        <li><i class="fas fa-check"></i> Certified Climbing Gear & Helmet</li>
                    </ul>
                    <a href="https://wa.me/<?= WHATSAPP ?>?text=I'm%20interested%20in%20Waterfall%20Abseiling" target="_blank" class="btn-enquire">
                        Book Abseiling <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Yala Leopard Safari -->
            <div class="card filter-item adventure" data-aos="fade-up" data-aos-delay="200">
                <div class="card-img-header card-img-carousel">
                    <div class="carousel-slides">
                        <img src="<?= SITE_URL ?>/assets/Images/safari/thirdcard/yalasafari1.webp" alt="Yala National Park 4x4 Jeep Safari" class="carousel-slide active" loading="lazy" decoding="async" width="400" height="250">
                        <img src="<?= SITE_URL ?>/assets/Images/safari/thirdcard/yalasafari2.webp" alt="Yala Wild Leopard & Wildlife Sighting" class="carousel-slide" loading="lazy" decoding="async" width="400" height="250">
                        <img src="<?= SITE_URL ?>/assets/Images/safari/thirdcard/yalasafari3.webp" alt="Yala Safari Open Jeep Adventure" class="carousel-slide" loading="lazy" decoding="async" width="400" height="250">
                    </div>
                    <span class="card-badge">Wildlife</span>
                    <button class="carousel-nav-btn prev-btn" aria-label="Previous Image"><i class="fas fa-chevron-left"></i></button>
                    <button class="carousel-nav-btn next-btn" aria-label="Next Image"><i class="fas fa-chevron-right"></i></button>
                    <div class="carousel-dots">
                        <span class="dot active"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </div>
                </div>
                <div class="card-content-body">
                    <div class="card-meta">
                        <span><i class="fas fa-map-marker-alt" style="color: var(--gold-sun);"></i> Yala National Park</span>
                        <span><i class="fas fa-star" style="color: var(--gold-bright);"></i> 5.0 (84 Reviews)</span>
                    </div>
                    <h3>Yala Leopard 4x4 Jeep Safari</h3>
                    <div class="card-price-box">
                        <div class="price-usd">$40 USD / jeep</div>
                        <div class="price-lkr">(~12,000 LKR)</div>
                    </div>
                    <ul class="inclusions-list">
                        <li><i class="fas fa-check"></i> Private Modified 4x4 Safari Jeep</li>
                        <li><i class="fas fa-check"></i> Expert Local Wildlife Tracker</li>
                        <li><i class="fas fa-check"></i> Leopard, Sloth Bear & Elephant Spots</li>
                        <li><i class="fas fa-check"></i> Park Admission Tickets & Toll Fees</li>
                    </ul>
                    <a href="https://wa.me/<?= WHATSAPP ?>?text=I'm%20interested%20in%20Yala%20Jeep%20Safari" target="_blank" class="btn-enquire">
                        Book Yala Safari <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Udawalawe Elephant Safari -->
            <div class="card filter-item adventure" data-aos="fade-up" data-aos-delay="250">
                <div class="card-img-header card-img-carousel">
                    <div class="carousel-slides">
                        <img src="<?= SITE_URL ?>/assets/Images/safari/fourthcard/udawalawe.webp" alt="Udawalawe Wild Elephant Herd Safari" class="carousel-slide active" loading="lazy" decoding="async" width="400" height="250">
                        <img src="<?= SITE_URL ?>/assets/Images/safari/fourthcard/udawalawe2.webp" alt="Elephant Transit Home & Feeding Visit" class="carousel-slide" loading="lazy" decoding="async" width="400" height="250">
                        <img src="<?= SITE_URL ?>/assets/Images/safari/fourthcard/udawalawe3.webp" alt="Udawalawe National Park Open 4x4 Jeep" class="carousel-slide" loading="lazy" decoding="async" width="400" height="250">
                    </div>
                    <span class="card-badge">Elephants</span>
                    <button class="carousel-nav-btn prev-btn" aria-label="Previous Image"><i class="fas fa-chevron-left"></i></button>
                    <button class="carousel-nav-btn next-btn" aria-label="Next Image"><i class="fas fa-chevron-right"></i></button>
                    <div class="carousel-dots">
                        <span class="dot active"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </div>
                </div>
                <div class="card-content-body">
                    <div class="card-meta">
                        <span><i class="fas fa-map-marker-alt" style="color: var(--gold-sun);"></i> Udawalawe National Park</span>
                        <span><i class="fas fa-star" style="color: var(--gold-bright);"></i> 5.0 (59 Reviews)</span>
                    </div>
                    <h3>Udawalawe Wild Elephant Jeep Safari</h3>
                    <div class="card-price-box">
                        <div class="price-usd">$35 USD / jeep</div>
                        <div class="price-lkr">(~10,500 LKR)</div>
                    </div>
                    <ul class="inclusions-list">
                        <li><i class="fas fa-check"></i> Guaranteed Wild Elephant Herds Sightings</li>
                        <li><i class="fas fa-check"></i> Elephant Transit Home Feeding Visit</li>
                        <li><i class="fas fa-check"></i> Water Birds & Crocodiles</li>
                        <li><i class="fas fa-check"></i> English Speaking Chauffeur Guide</li>
                    </ul>
                    <a href="https://wa.me/<?= WHATSAPP ?>?text=I'm%20interested%20in%20Udawalawe%20Elephant%20Safari" target="_blank" class="btn-enquire">
                        Book Udawalawe Safari <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Colombo to Trincomalee Shuttle & Safari Drive -->
            <div class="card filter-item shuttle-safari" data-aos="fade-up">
                <div class="card-img-header card-img-carousel">
                    <div class="carousel-slides">
                        <img src="<?= SITE_URL ?>/assets/Images/day-tours/fourthcard/0_cover.webp" alt="Colombo to Trincomalee Shuttle & Safari Drive" class="carousel-slide active" loading="lazy" decoding="async" width="400" height="250">
                        <img src="<?= SITE_URL ?>/assets/Images/day-tours/fourthcard/1_minneriya.webp" alt="Minneriya & Kaudulla National Park Safari" class="carousel-slide" loading="lazy" decoding="async" width="400" height="250">
                        <img src="<?= SITE_URL ?>/assets/Images/day-tours/fourthcard/2_kaudulla.webp" alt="Kaudulla Wild Elephant Safari Drive" class="carousel-slide" loading="lazy" decoding="async" width="400" height="250">
                        <img src="<?= SITE_URL ?>/assets/Images/day-tours/fourthcard/3_foodtestinginsigiriya.webp" alt="Authentic Food Tasting in Sigiriya Village" class="carousel-slide" loading="lazy" decoding="async" width="400" height="250">
                    </div>
                    <span class="card-badge">Shuttle & Safari</span>
                    <button class="carousel-nav-btn prev-btn" aria-label="Previous Image"><i class="fas fa-chevron-left"></i></button>
                    <button class="carousel-nav-btn next-btn" aria-label="Next Image"><i class="fas fa-chevron-right"></i></button>
                    <div class="carousel-dots">
                        <span class="dot active"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </div>
                </div>
                <div class="card-content-body">
                    <div class="card-meta">
                        <span><i class="fas fa-map-marker-alt" style="color: var(--gold-sun);"></i> Colombo → Trincomalee</span>
                        <span><i class="fas fa-star" style="color: var(--gold-bright);"></i> 5.0 (54 Reviews)</span>
                    </div>
                    <h3>Colombo to Trincomalee Shuttle & Safari Drive</h3>
                    <div class="card-schedule-box">
                        <div class="schedule-header">
                            <i class="far fa-clock" style="color: var(--gold-sun);"></i>
                            <span>Daily Shuttle Schedule</span>
                        </div>
                        <div class="departure-time-chips">
                            <span class="time-chip single-time">
                                <span class="chip-icon">☀️</span>
                                <span class="chip-time">8:00 AM</span>
                                <span class="chip-label">Everyday</span>
                            </span>
                        </div>
                        <div class="schedule-footer-meta">
                            <i class="fas fa-hourglass-half" style="color: var(--gold-sun);"></i> 12 Hours Tour & Safari Drive
                        </div>
                    </div>
                    <ul class="inclusions-list">
                        <li><i class="fas fa-check"></i> Hotel pickup from Colombo, Negombo & suburbs</li>
                        <li><i class="fas fa-check"></i> Exclusive Safari at Minneriya & Kaudulla National Park</li>
                        <li><i class="fas fa-check"></i> Authentic Food Tasting in Sigiriya Village</li>
                        <li><i class="fas fa-check"></i> Hotel drop to Trincomalee, Nilaveli & suburbs</li>
                    </ul>
                    <a href="https://wa.me/<?= WHATSAPP ?>?text=I'm%20interested%20in%20Colombo%20to%20Trincomalee%20Shuttle%20%26%20Safari%20Drive" target="_blank" class="btn-enquire">
                        Book Now <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Mirissa to Ella Shuttle & Udawalawe Safari Drive -->
            <div class="card filter-item shuttle-safari" data-aos="fade-up" data-aos-delay="100">
                <div class="card-img-header card-img-carousel">
                    <div class="carousel-slides">
                        <img src="<?= SITE_URL ?>/assets/Images/day-tours/fifthcard/0_cover.webp" alt="Mirissa to Ella Shuttle & Udawalawe Safari Drive" class="carousel-slide active" loading="lazy" decoding="async" width="400" height="250">
                        <img src="<?= SITE_URL ?>/assets/Images/day-tours/fifthcard/1_udawalawe.webp" alt="Mirissa to Ella Udawalawe Safari Drive" class="carousel-slide" loading="lazy" decoding="async" width="400" height="250">
                        <img src="<?= SITE_URL ?>/assets/Images/day-tours/fifthcard/2_udawalawe.webp" alt="Udawalawe Wild Elephant Wilderness" class="carousel-slide" loading="lazy" decoding="async" width="400" height="250">
                        <img src="<?= SITE_URL ?>/assets/Images/day-tours/fifthcard/3_udawalawe.webp" alt="Udawalawe 4x4 Jeep Safari" class="carousel-slide" loading="lazy" decoding="async" width="400" height="250">
                        <img src="<?= SITE_URL ?>/assets/Images/day-tours/fifthcard/4_udawalawe.webp" alt="Ella Suburbs Drop & Scenic Journey" class="carousel-slide" loading="lazy" decoding="async" width="400" height="250">
                    </div>
                    <span class="card-badge">Shuttle & Safari</span>
                    <button class="carousel-nav-btn prev-btn" aria-label="Previous Image"><i class="fas fa-chevron-left"></i></button>
                    <button class="carousel-nav-btn next-btn" aria-label="Next Image"><i class="fas fa-chevron-right"></i></button>
                    <div class="carousel-dots">
                        <span class="dot active"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </div>
                </div>
                <div class="card-content-body">
                    <div class="card-meta">
                        <span><i class="fas fa-map-marker-alt" style="color: var(--gold-sun);"></i> Mirissa → Ella</span>
                        <span><i class="fas fa-star" style="color: var(--gold-bright);"></i> 5.0 (62 Reviews)</span>
                    </div>
                    <h3>Mirissa to Ella Shuttle & Udawalawe Safari Drive</h3>
                    <div class="card-schedule-box">
                        <div class="schedule-header">
                            <i class="far fa-clock" style="color: var(--gold-sun);"></i>
                            <span>Daily Departure Times</span>
                        </div>
                        <div class="departure-time-chips" data-base-text="I'm interested in Mirissa to Ella Shuttle & Udawalawe Safari Drive">
                            <button class="time-chip" data-time="4:00 AM (Sunrise)" type="button">
                                <span class="chip-icon">🌅</span>
                                <span class="chip-time">4:00 AM</span>
                                <span class="chip-label">Sunrise</span>
                            </button>
                            <button class="time-chip" data-time="5:00 AM (Morning)" type="button">
                                <span class="chip-icon">☀️</span>
                                <span class="chip-time">5:00 AM</span>
                                <span class="chip-label">Morning</span>
                            </button>
                            <button class="time-chip" data-time="11:30 AM (Afternoon)" type="button">
                                <span class="chip-icon">🌤️</span>
                                <span class="chip-time">11:30 AM</span>
                                <span class="chip-label">Afternoon</span>
                            </button>
                        </div>
                        <div class="schedule-footer-meta">
                            <i class="fas fa-route" style="color: var(--gold-sun);"></i> Shuttle Transfer & Udawalawe 4x4 Safari Included
                        </div>
                    </div>
                    <ul class="inclusions-list">
                        <li><i class="fas fa-check"></i> Hotel Pickup from Mirissa, Galle, Dickwella & Suburbs</li>
                        <li><i class="fas fa-check"></i> 3.5 – 4 Hours of Pure Wilderness Safari</li>
                        <li><i class="fas fa-check"></i> Hotel Drop to Ella, Haputale, Bandarawela & Suburbs</li>
                    </ul>
                    <a href="https://wa.me/<?= WHATSAPP ?>?text=I'm%20interested%20in%20Mirissa%20to%20Ella%20Shuttle%20%26%20Udawalawe%20Safari%20Drive" target="_blank" class="btn-enquire">
                        Book Now <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Ella to Mirissa Shuttle & Udawalawe Safari Drive -->
            <div class="card filter-item shuttle-safari" data-aos="fade-up" data-aos-delay="200">
                <div class="card-img-header card-img-carousel">
                    <div class="carousel-slides">
                        <img src="<?= SITE_URL ?>/assets/Images/day-tours/sixthcard/0_cover.webp" alt="Ella to Mirissa Shuttle & Udawalawe Safari Drive" class="carousel-slide active" loading="lazy" decoding="async" width="400" height="250">
                        <img src="<?= SITE_URL ?>/assets/Images/day-tours/sixthcard/1_udawlawe.webp" alt="Ella to Mirissa Shuttle & Udawalawe Safari" class="carousel-slide" loading="lazy" decoding="async" width="400" height="250">
                        <img src="<?= SITE_URL ?>/assets/Images/day-tours/sixthcard/2_udawalawe.webp" alt="Udawalawe Wild Elephant Wilderness" class="carousel-slide" loading="lazy" decoding="async" width="400" height="250">
                        <img src="<?= SITE_URL ?>/assets/Images/day-tours/sixthcard/3_udawalawe.webp" alt="Udawalawe 4x4 Open Jeep Safari" class="carousel-slide" loading="lazy" decoding="async" width="400" height="250">
                        <img src="<?= SITE_URL ?>/assets/Images/day-tours/sixthcard/4_udawalawe.webp" alt="Udawalawe Wildlife Sightings" class="carousel-slide" loading="lazy" decoding="async" width="400" height="250">
                        <img src="<?= SITE_URL ?>/assets/Images/day-tours/sixthcard/5_udawalawe.webp" alt="Nature & Safari Experience" class="carousel-slide" loading="lazy" decoding="async" width="400" height="250">
                        <img src="<?= SITE_URL ?>/assets/Images/day-tours/sixthcard/6_udawalawe.webp" alt="Mirissa & Coastal Suburbs Drop" class="carousel-slide" loading="lazy" decoding="async" width="400" height="250">
                    </div>
                    <span class="card-badge">Shuttle & Safari</span>
                    <button class="carousel-nav-btn prev-btn" aria-label="Previous Image"><i class="fas fa-chevron-left"></i></button>
                    <button class="carousel-nav-btn next-btn" aria-label="Next Image"><i class="fas fa-chevron-right"></i></button>
                    <div class="carousel-dots">
                        <span class="dot active"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </div>
                </div>
                <div class="card-content-body">
                    <div class="card-meta">
                        <span><i class="fas fa-map-marker-alt" style="color: var(--gold-sun);"></i> Ella → Mirissa</span>
                        <span><i class="fas fa-star" style="color: var(--gold-bright);"></i> 5.0 (48 Reviews)</span>
                    </div>
                    <h3>Ella to Mirissa Shuttle & Udawalawe Safari Drive</h3>
                    <div class="card-schedule-box">
                        <div class="schedule-header">
                            <i class="far fa-clock" style="color: var(--gold-sun);"></i>
                            <span>Daily Departure Times</span>
                        </div>
                        <div class="departure-time-chips" data-base-text="I'm interested in Ella to Mirissa Shuttle & Udawalawe Safari Drive">
                            <button class="time-chip" data-time="4:00 AM (Sunrise)" type="button">
                                <span class="chip-icon">🌅</span>
                                <span class="chip-time">4:00 AM</span>
                                <span class="chip-label">Sunrise</span>
                            </button>
                            <button class="time-chip" data-time="5:00 AM (Morning)" type="button">
                                <span class="chip-icon">☀️</span>
                                <span class="chip-time">5:00 AM</span>
                                <span class="chip-label">Morning</span>
                            </button>
                            <button class="time-chip" data-time="11:30 AM (Afternoon)" type="button">
                                <span class="chip-icon">🌤️</span>
                                <span class="chip-time">11:30 AM</span>
                                <span class="chip-label">Afternoon</span>
                            </button>
                        </div>
                        <div class="schedule-footer-meta">
                            <i class="fas fa-route" style="color: var(--gold-sun);"></i> Shuttle Transfer & Udawalawe 4x4 Safari Included
                        </div>
                    </div>
                    <ul class="inclusions-list">
                        <li><i class="fas fa-check"></i> Hotel Pickup from Ella, Haputale, Bandarawela & Suburbs</li>
                        <li><i class="fas fa-check"></i> 3.5 – 4 Hours of Pure Wilderness Safari</li>
                        <li><i class="fas fa-check"></i> Hotel Drop to Mirissa, Galle, Dickwella, Tangalle & Suburbs</li>
                    </ul>
                    <a href="https://wa.me/<?= WHATSAPP ?>?text=I'm%20interested%20in%20Ella%20to%20Mirissa%20Shuttle%20%26%20Udawalawe%20Safari%20Drive" target="_blank" class="btn-enquire">
                        Book Now <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Dambulla to Trincomalee Shuttle & Safari Drive -->
            <div class="card filter-item shuttle-safari" data-aos="fade-up" data-aos-delay="250">
                <div class="card-img-header card-img-carousel">
                    <div class="carousel-slides">
                        <img src="<?= SITE_URL ?>/assets/Images/day-tours/seventhcard/0_cover.webp" alt="Dambulla to Trincomalee Shuttle & Safari Drive" class="carousel-slide active" loading="lazy" decoding="async" width="400" height="250">
                        <img src="<?= SITE_URL ?>/assets/Images/day-tours/seventhcard/1_minneriya.webp" alt="Minneriya National Park Safari" class="carousel-slide" loading="lazy" decoding="async" width="400" height="250">
                        <img src="<?= SITE_URL ?>/assets/Images/day-tours/seventhcard/2_minneriya.webp" alt="Wild Elephant Gathering Minneriya" class="carousel-slide" loading="lazy" decoding="async" width="400" height="250">
                        <img src="<?= SITE_URL ?>/assets/Images/day-tours/seventhcard/3_kaudulla.webp" alt="Kaudulla National Park Elephant Safari" class="carousel-slide" loading="lazy" decoding="async" width="400" height="250">
                        <img src="<?= SITE_URL ?>/assets/Images/day-tours/seventhcard/4_kaudulla.webp" alt="Trincomalee & Nilaveli Suburbs Drop" class="carousel-slide" loading="lazy" decoding="async" width="400" height="250">
                    </div>
                    <span class="card-badge">Shuttle & Safari</span>
                    <button class="carousel-nav-btn prev-btn" aria-label="Previous Image"><i class="fas fa-chevron-left"></i></button>
                    <button class="carousel-nav-btn next-btn" aria-label="Next Image"><i class="fas fa-chevron-right"></i></button>
                    <div class="carousel-dots">
                        <span class="dot active"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </div>
                </div>
                <div class="card-content-body">
                    <div class="card-meta">
                        <span><i class="fas fa-map-marker-alt" style="color: var(--gold-sun);"></i> Dambulla → Trincomalee</span>
                        <span><i class="fas fa-star" style="color: var(--gold-bright);"></i> 5.0 (41 Reviews)</span>
                    </div>
                    <h3>Dambulla to Trincomalee Shuttle & Safari Drive</h3>
                    <div class="card-schedule-box">
                        <div class="schedule-header">
                            <i class="far fa-clock" style="color: var(--gold-sun);"></i>
                            <span>Daily Shuttle Schedule</span>
                        </div>
                        <div class="departure-time-chips">
                            <span class="time-chip single-time">
                                <span class="chip-icon">🌤️</span>
                                <span class="chip-time">2:00 PM</span>
                                <span class="chip-label">Everyday</span>
                            </span>
                        </div>
                        <div class="schedule-footer-meta">
                            <i class="fas fa-hourglass-half" style="color: var(--gold-sun);"></i> 6 Hours Tour & Safari Drive
                        </div>
                    </div>
                    <ul class="inclusions-list">
                        <li><i class="fas fa-check"></i> Hotel pickup from Dambulla, Sigiriya, Habarana & suburbs</li>
                        <li><i class="fas fa-check"></i> Exclusive Safari at Minneriya or Kaudulla National Park</li>
                        <li><i class="fas fa-check"></i> Hotel drop to Trincomalee, Nilaveli & suburbs</li>
                    </ul>
                    <a href="https://wa.me/<?= WHATSAPP ?>?text=I'm%20interested%20in%20Dambulla%20to%20Trincomalee%20Shuttle%20%26%20Safari%20Drive" target="_blank" class="btn-enquire">
                        Book Now <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Anuradhapura to Wilpattu Safari & Return Day Tour -->
            <div class="card filter-item shuttle-safari" data-aos="fade-up" data-aos-delay="300">
                <div class="card-img-header card-img-carousel">
                    <div class="carousel-slides">
                        <img src="<?= SITE_URL ?>/assets/Images/day-tours/eightthcard/0_cover.webp" alt="Anuradhapura to Wilpattu Safari & Return Day Tour" class="carousel-slide active" loading="lazy" decoding="async" width="400" height="250">
                        <img src="<?= SITE_URL ?>/assets/Images/day-tours/eightthcard/1_wilpattu.webp" alt="Wilpattu National Park 4x4 Safari" class="carousel-slide" loading="lazy" decoding="async" width="400" height="250">
                        <img src="<?= SITE_URL ?>/assets/Images/day-tours/eightthcard/2_wilpattu.webp" alt="Wilpattu Wildlife & Leopards Encounter" class="carousel-slide" loading="lazy" decoding="async" width="400" height="250">
                        <img src="<?= SITE_URL ?>/assets/Images/day-tours/eightthcard/3_wilpattu.webp" alt="Sloth Bears & Lakes in Wilpattu" class="carousel-slide" loading="lazy" decoding="async" width="400" height="250">
                        <img src="<?= SITE_URL ?>/assets/Images/day-tours/eightthcard/4_wilpattu.webp" alt="Anuradhapura Pickup & Return Drop" class="carousel-slide" loading="lazy" decoding="async" width="400" height="250">
                    </div>
                    <span class="card-badge">Wildlife & Safari</span>
                    <button class="carousel-nav-btn prev-btn" aria-label="Previous Image"><i class="fas fa-chevron-left"></i></button>
                    <button class="carousel-nav-btn next-btn" aria-label="Next Image"><i class="fas fa-chevron-right"></i></button>
                    <div class="carousel-dots">
                        <span class="dot active"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </div>
                </div>
                <div class="card-content-body">
                    <div class="card-meta">
                        <span><i class="fas fa-map-marker-alt" style="color: var(--gold-sun);"></i> Anuradhapura ⇄ Wilpattu</span>
                        <span><i class="fas fa-star" style="color: var(--gold-bright);"></i> 5.0 (58 Reviews)</span>
                    </div>
                    <h3>Anuradhapura to Wilpattu Safari & Return Day Tour</h3>
                    <div class="card-schedule-box">
                        <div class="schedule-header">
                            <i class="far fa-clock" style="color: var(--gold-sun);"></i>
                            <span>Daily Safari Departures</span>
                        </div>
                        <div class="departure-time-chips" data-base-text="I'm interested in Anuradhapura to Wilpattu Safari & Return Day Tour">
                            <button class="time-chip" data-time="6:00 AM (Morning Safari)" type="button">
                                <span class="chip-icon">🌅</span>
                                <span class="chip-time">6:00 AM</span>
                                <span class="chip-label">Morning</span>
                            </button>
                            <button class="time-chip" data-time="2:00 PM (Afternoon Safari)" type="button">
                                <span class="chip-icon">☀️</span>
                                <span class="chip-time">2:00 PM</span>
                                <span class="chip-label">Afternoon</span>
                            </button>
                        </div>
                        <div class="schedule-footer-meta">
                            <i class="fas fa-sync-alt" style="color: var(--gold-sun);"></i> Same-Day Wilpattu Safari Round Trip
                        </div>
                    </div>
                    <ul class="inclusions-list">
                        <li><i class="fas fa-check"></i> Hotel pickup from Anuradhapura & suburbs</li>
                        <li><i class="fas fa-check"></i> Exclusive 4x4 Jeep Safari at Wilpattu National Park</li>
                        <li><i class="fas fa-check"></i> Hotel drop back to Anuradhapura & suburbs in one day</li>
                    </ul>
                    <a href="https://wa.me/<?= WHATSAPP ?>?text=I'm%20interested%20in%20Anuradhapura%20to%20Wilpattu%20Safari%20%26%20Return%20Day%20Tour" target="_blank" class="btn-enquire">
                        Book Now <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Colombo to Sigiriya Shuttle & Heritage Excursion -->
            <div class="card filter-item shuttle-safari" data-aos="fade-up" data-aos-delay="350">
                <div class="card-img-header card-img-carousel">
                    <div class="carousel-slides">
                        <img src="<?= SITE_URL ?>/assets/Images/day-tours/ninethcard/0_cover.webp" alt="Colombo to Sigiriya Shuttle & Heritage Excursion" class="carousel-slide active" loading="lazy" decoding="async" width="400" height="250">
                        <img src="<?= SITE_URL ?>/assets/Images/day-tours/ninethcard/1_dambulla.webp" alt="Explore Dambulla Golden Rock Temple Caves" class="carousel-slide" loading="lazy" decoding="async" width="400" height="250">
                        <img src="<?= SITE_URL ?>/assets/Images/day-tours/ninethcard/2_sigiriya.webp" alt="Climb 5th Century Sigiriya Lion Rock Fortress" class="carousel-slide" loading="lazy" decoding="async" width="400" height="250">
                        <img src="<?= SITE_URL ?>/assets/Images/day-tours/ninethcard/3_traditionalvillage.webp" alt="Traditional Village Lunch & Bullock Cart Ride" class="carousel-slide" loading="lazy" decoding="async" width="400" height="250">
                    </div>
                    <span class="card-badge">Shuttle & Excursion</span>
                    <button class="carousel-nav-btn prev-btn" aria-label="Previous Image"><i class="fas fa-chevron-left"></i></button>
                    <button class="carousel-nav-btn next-btn" aria-label="Next Image"><i class="fas fa-chevron-right"></i></button>
                    <div class="carousel-dots">
                        <span class="dot active"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </div>
                </div>
                <div class="card-content-body">
                    <div class="card-meta">
                        <span><i class="fas fa-map-marker-alt" style="color: var(--gold-sun);"></i> Colombo → Sigiriya</span>
                        <span><i class="fas fa-star" style="color: var(--gold-bright);"></i> 5.0 (52 Reviews)</span>
                    </div>
                    <h3>Colombo to Sigiriya Shuttle & Heritage Excursion</h3>
                    <div class="card-schedule-box">
                        <div class="schedule-header">
                            <i class="far fa-clock" style="color: var(--gold-sun);"></i>
                            <span>Daily Departure Schedule</span>
                        </div>
                        <div class="departure-time-chips">
                            <span class="time-chip single-time">
                                <span class="chip-icon">☀️</span>
                                <span class="chip-time">7:00 AM</span>
                                <span class="chip-label">Everyday</span>
                            </span>
                        </div>
                        <div class="schedule-footer-meta">
                            <i class="fas fa-route" style="color: var(--gold-sun);"></i> Shuttle Transfer & Heritage Excursion Included
                        </div>
                    </div>
                    <ul class="inclusions-list">
                        <li><i class="fas fa-check"></i> Pickup from Colombo / Negombo & suburbs</li>
                        <li><i class="fas fa-check"></i> Explore Dambulla Golden Rock Temple Caves</li>
                        <li><i class="fas fa-check"></i> Traditional Village Lunch & Bullock Cart Ride</li>
                        <li><i class="fas fa-check"></i> Climb 5th Century Sigiriya Lion Rock Fortress</li>
                        <li><i class="fas fa-check"></i> Drop off to Sigiriya & suburbs</li>
                    </ul>
                    <a href="https://wa.me/<?= WHATSAPP ?>?text=I'm%20interested%20in%20Colombo%20to%20Sigiriya%20Shuttle%20%26%20Heritage%20Excursion" target="_blank" class="btn-enquire">
                        Book Now <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Anuradhapura Day Excursion -->
            <div class="card filter-item normal-tour" data-aos="fade-up">
                <div class="card-img-header card-img-carousel">
                    <div class="carousel-slides">
                        <img src="<?= SITE_URL ?>/assets/Images/day-tours/firstcard/anuradhapura.webp" alt="Anuradhapura Sacred Citadel Ruins" class="carousel-slide active" loading="lazy" decoding="async" width="400" height="250">
                        <img src="<?= SITE_URL ?>/assets/Images/day-tours/firstcard/anuradhapura1.webp" alt="Jaya Sri Maha Bodhi Tree" class="carousel-slide" loading="lazy" decoding="async" width="400" height="250">
                        <img src="<?= SITE_URL ?>/assets/Images/day-tours/firstcard/anuradhapura2.webp" alt="Ruwanwelisaya & Jetavanaramaya Stupas" class="carousel-slide" loading="lazy" decoding="async" width="400" height="250">
                    </div>
                    <span class="card-badge">Anuradhapura Hub</span>
                    <button class="carousel-nav-btn prev-btn" aria-label="Previous Image"><i class="fas fa-chevron-left"></i></button>
                    <button class="carousel-nav-btn next-btn" aria-label="Next Image"><i class="fas fa-chevron-right"></i></button>
                    <div class="carousel-dots">
                        <span class="dot active"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </div>
                </div>
                <div class="card-content-body">
                    <div class="card-meta">
                        <span><i class="fas fa-map-marker-alt" style="color: var(--gold-sun);"></i> Anuradhapura Ancient City</span>
                        <span><i class="fas fa-star" style="color: var(--gold-bright);"></i> 5.0 (46 Reviews)</span>
                    </div>
                    <h3>Anuradhapura Sacred Citadel Pilgrimage</h3>
                    <div class="card-price-box">
                        <div class="price-usd">$35 USD / person</div>
                        <div class="price-lkr">(~10,500 LKR)</div>
                    </div>
                    <ul class="inclusions-list">
                        <li><i class="fas fa-check"></i> Sacred Jaya Sri Maha Bodhi Tree</li>
                        <li><i class="fas fa-check"></i> Ruwanwelisaya & Jetavanaramaya Stupas</li>
                        <li><i class="fas fa-check"></i> Twin Ponds & Samadhi Buddha Statue</li>
                        <li><i class="fas fa-check"></i> Private Luxury AC Vehicle & Driver</li>
                    </ul>
                    <a href="https://wa.me/<?= WHATSAPP ?>?text=I'm%20interested%20in%20Anuradhapura%20Heritage%20Tour" target="_blank" class="btn-enquire">
                        Book Anuradhapura Tour <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Sigiriya & Dambulla Day Excursion -->
            <div class="card filter-item normal-tour" data-aos="fade-up" data-aos-delay="100">
                <div class="card-img-header card-img-carousel">
                    <div class="carousel-slides">
                        <img src="<?= SITE_URL ?>/assets/Images/day-tours/secondcard/sigiriya.webp" alt="Sigiriya Lion Rock Citadel" class="carousel-slide active" loading="lazy" decoding="async" width="400" height="250">
                        <img src="<?= SITE_URL ?>/assets/Images/day-tours/secondcard/dambulla.webp" alt="Dambulla Golden Cave Temple" class="carousel-slide" loading="lazy" decoding="async" width="400" height="250">
                        <img src="<?= SITE_URL ?>/assets/Images/day-tours/secondcard/traditionalvillage.webp" alt="Traditional Village Experience & Bullock Cart" class="carousel-slide" loading="lazy" decoding="async" width="400" height="250">
                    </div>
                    <span class="card-badge">UNESCO World Heritage</span>
                    <button class="carousel-nav-btn prev-btn" aria-label="Previous Image"><i class="fas fa-chevron-left"></i></button>
                    <button class="carousel-nav-btn next-btn" aria-label="Next Image"><i class="fas fa-chevron-right"></i></button>
                    <div class="carousel-dots">
                        <span class="dot active"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </div>
                </div>
                <div class="card-content-body">
                    <div class="card-meta">
                        <span><i class="fas fa-map-marker-alt" style="color: var(--gold-sun);"></i> Sigiriya & Dambulla</span>
                        <span><i class="fas fa-star" style="color: var(--gold-bright);"></i> 5.0 (72 Reviews)</span>
                    </div>
                    <h3>Sigiriya Rock Fortress & Dambulla Cave Excursion</h3>
                    <div class="card-price-box">
                        <div class="price-usd">$45 USD / person</div>
                        <div class="price-lkr">(~13,500 LKR)</div>
                    </div>
                    <ul class="inclusions-list">
                        <li><i class="fas fa-check"></i> Climb 5th Century Sigiriya Lion Rock Fortress</li>
                        <li><i class="fas fa-check"></i> Explore Dambulla Golden Rock Temple Caves</li>
                        <li><i class="fas fa-check"></i> Traditional Village Lunch & Bullock Cart Ride</li>
                        <li><i class="fas fa-check"></i> Private Luxury AC Transport & Fuel</li>
                    </ul>
                    <a href="https://wa.me/<?= WHATSAPP ?>?text=I'm%20interested%20in%20Sigiriya%20and%20Dambulla%20Day%20Tour" target="_blank" class="btn-enquire">
                        Book Sigiriya Tour <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Madu River Boat Safari -->
            <div class="card filter-item normal-tour" data-aos="fade-up" data-aos-delay="150">
                <div class="card-img-header card-img-carousel">
                    <div class="carousel-slides">
                        <img src="<?= SITE_URL ?>/assets/Images/day-tours/thirdcard/maduriver.webp" alt="Madu River Mangrove Boat Safari" class="carousel-slide active" loading="lazy" decoding="async" width="400" height="250">
                        <img src="<?= SITE_URL ?>/assets/Images/day-tours/thirdcard/maduriver2.webp" alt="Mangrove Tunnel & Fish Therapy" class="carousel-slide" loading="lazy" decoding="async" width="400" height="250">
                        <img src="<?= SITE_URL ?>/assets/Images/day-tours/thirdcard/maduriver3.webp" alt="Cinnamon Island & Turtle Hatchery" class="carousel-slide" loading="lazy" decoding="async" width="400" height="250">
                    </div>
                    <span class="card-badge">Coastal Safari</span>
                    <button class="carousel-nav-btn prev-btn" aria-label="Previous Image"><i class="fas fa-chevron-left"></i></button>
                    <button class="carousel-nav-btn next-btn" aria-label="Next Image"><i class="fas fa-chevron-right"></i></button>
                    <div class="carousel-dots">
                        <span class="dot active"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </div>
                </div>
                <div class="card-content-body">
                    <div class="card-meta">
                        <span><i class="fas fa-map-marker-alt" style="color: var(--gold-sun);"></i> Balapitiya / Bentota</span>
                        <span><i class="fas fa-star" style="color: var(--gold-bright);"></i> 5.0 (39 Reviews)</span>
                    </div>
                    <h3>Madu River Mangrove Boat Safari & Fish Therapy</h3>
                    <div class="card-price-box">
                        <div class="price-usd">$20 USD / boat</div>
                        <div class="price-lkr">(~6,000 LKR)</div>
                    </div>
                    <ul class="inclusions-list">
                        <li><i class="fas fa-check"></i> Mangrove Tunnel Cruise & Cinnamon Island Visit</li>
                        <li><i class="fas fa-check"></i> Natural Fish Massage Spa in River</li>
                        <li><i class="fas fa-check"></i> Turtle Hatchery Visit in Kosgoda</li>
                        <li><i class="fas fa-check"></i> Life Jackets & Safety Gear Provided</li>
                    </ul>
                    <a href="https://wa.me/<?= WHATSAPP ?>?text=I'm%20interested%20in%20Madu%20River%20Boat%20Safari" target="_blank" class="btn-enquire">
                        Book River Safari <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Frequently Asked Questions (FAQ) Section -->
<section class="section" style="background: #ffffff;">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <span class="badge-title">Got Questions?</span>
            <h2>Frequently Asked Questions</h2>
            <p style="color: var(--text-muted); margin-top: 0.4rem;">Quick answers to common questions about booking, payments, transfers, and custom itineraries.</p>
        </div>

        <div class="faq-wrapper" data-aos="fade-up">
            <div class="faq-item active">
                <div class="faq-question">
                    <span><i class="fas fa-comment-dots" style="color: var(--gold-sun); margin-right: 0.6rem;"></i> How do I book a tour with Sanjeewa?</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    You can easily book by clicking any "Book on WhatsApp" button or sending an inquiry through our Contact page. Sanjeewa will respond within minutes to confirm your itinerary and price.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <span><i class="fas fa-plane-arrival" style="color: var(--teal-dark); margin-right: 0.6rem;"></i> Are airport transfers included in round tour packages?</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    Yes! All multi-day round tours include Bandaranaike International Airport (CMB) pickup and drop-off with a private air-conditioned vehicle.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <span><i class="fas fa-edit" style="color: var(--gold-warm); margin-right: 0.6rem;"></i> Can I customize the tour itinerary?</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    Absolutely 100%! All our itineraries are 100% tailor-made. You can add or modify destinations (Sigiriya, Kandy, Ella, Yala, Mirissa) to suit your schedule.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <span><i class="fas fa-car" style="color: var(--green-wa); margin-right: 0.6rem;"></i> What is included in the vehicle hire rate?</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    Vehicle rental rates include an experienced licensed English-speaking driver, fuel, highway toll tickets, driver accommodation, and complimentary bottled water.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <span><i class="fas fa-paw" style="color: var(--gold-sun); margin-right: 0.6rem;"></i> How are Yala & Udawalawe jeep safaris organized?</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    We arrange private 4x4 open safari jeeps with experienced local trackers. Morning (6:00 AM) and afternoon (3:00 PM) game drives available.
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// Dynamically select 4 random images from assets/Images/gallery/
$homeGalleryDir = __DIR__ . '/../assets/Images/gallery';
$homeGalleryImages = [];

if (is_dir($homeGalleryDir)) {
    $files = scandir($homeGalleryDir);
    foreach ($files as $file) {
        if ($file === '.' || $file === '..') continue;
        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        if (in_array($ext, ['jpg', 'jpeg', 'png', 'webp', 'gif'])) {
            $homeGalleryImages[] = $file;
        }
    }
}

if (empty($homeGalleryImages)) {
    $showcasePhotos = [
        SITE_URL . '/assets/Images/safari/firstcard/waterrafting.webp',
        SITE_URL . '/assets/Images/safari/secondcard/sandunella1.webp',
        SITE_URL . '/assets/Images/safari/thirdcard/yalasafari1.webp',
        SITE_URL . '/assets/Images/roundtour/thirdcard/gallefort.webp'
    ];
} else {
    shuffle($homeGalleryImages);
    $selectedGallery = array_slice($homeGalleryImages, 0, 4);
    $showcasePhotos = [];
    foreach ($selectedGallery as $f) {
        $showcasePhotos[] = SITE_URL . '/assets/Images/gallery/' . htmlspecialchars($f);
    }
}
?>

<!-- Trusty Travel in Action Showcase -->
<section class="section" style="background: var(--teal-light);">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <span class="badge-title">Authentic Moments</span>
            <h2>Trusty Travel in Action</h2>
            <p style="color: var(--text-muted); margin-top: 0.4rem;">Real photo memories with international travelers across Sri Lanka.</p>
        </div>

        <div class="action-showcase-grid">
            <?php foreach ($showcasePhotos as $index => $photoUrl): ?>
                <div class="card" data-aos="fade-up" data-aos-delay="<?= $index * 100 ?>" style="overflow: hidden; border-radius: var(--radius-md); box-shadow: var(--shadow-md);">
                    <a href="<?= SITE_URL ?>/gallery" class="card-img-header action-photo-card" title="View in Gallery">
                        <img src="<?= $photoUrl ?>" alt="Trusty Travel Moment" loading="lazy" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s ease;">
                    </a>
                </div>
            <?php endforeach; ?>
        </div>

        <div style="margin-top: 2.2rem; text-align: center;" data-aos="fade-up">
            <a href="<?= SITE_URL ?>/gallery" class="btn-primary">
                <i class="fas fa-images"></i> Explore Mobile Photo Gallery
            </a>
        </div>
    </div>
</section>


<!-- Official Sanjeewa Business Channels Interactive Carousel Slider -->
<section class="section section-dark">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <span class="badge-title">Verified Business Channels</span>
            <h2>Connect With Sanjeewa Kumara</h2>
            <p style="color: rgba(203, 213, 225, 0.85); margin-top: 0.4rem;">Explore our official location, videos, photos, and traveler reviews across social platforms.</p>
        </div>

        <div class="channels-carousel-wrapper" data-aos="fade-up">
            <button class="carousel-nav-btn carousel-prev" id="channelsPrev" aria-label="Previous Slide"><i class="fas fa-chevron-left"></i></button>
            <button class="carousel-nav-btn carousel-next" id="channelsNext" aria-label="Next Slide"><i class="fas fa-chevron-right"></i></button>

            <div class="channels-carousel-track" id="channelsTrack">
                <!-- Card 1: TripAdvisor with SVG Owl Logo -->
                <a href="<?= TRIPADVISOR ?>" target="_blank" rel="noopener" class="channel-carousel-card">
                    <div class="channel-icon-wrapper" style="display: flex; align-items: center; justify-content: center;">
                        <svg width="42" height="42" viewBox="0 0 200 200" fill="#00af87">
                            <path d="M 40 68 C 30 50 50 40 70 42 C 85 36 115 36 130 42 C 150 40 170 50 160 68 C 145 56 125 54 100 54 C 75 54 55 56 40 68 Z"/>
                            <circle cx="68" cy="102" r="32" fill="none" stroke="#00af87" stroke-width="14"/>
                            <circle cx="132" cy="102" r="32" fill="none" stroke="#00af87" stroke-width="14"/>
                            <circle cx="68" cy="102" r="14" fill="#00af87"/>
                            <circle cx="132" cy="102" r="14" fill="#00af87"/>
                            <polygon points="100,94 86,120 100,146 114,120" fill="#00af87"/>
                        </svg>
                    </div>
                    <h4 style="font-weight: 800; font-size: 1.1rem; color: #ffffff;">TripAdvisor</h4>
                    <p style="font-size: 0.88rem; color: rgba(203, 213, 225, 0.7); margin-top: 0.3rem;">Read verified traveler reviews & ratings</p>
                </a>

                <!-- Card 2: Google Maps -->
                <a href="<?= GOOGLE_MAPS ?>" target="_blank" class="channel-carousel-card">
                    <div class="channel-icon-wrapper" style="font-size: 2.5rem; color: #ea4335;">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                    <h4 style="font-weight: 800; font-size: 1.1rem; color: #ffffff;">Google Maps</h4>
                    <p style="font-size: 0.88rem; color: rgba(203, 213, 225, 0.7); margin-top: 0.3rem;">View office location in Anuradhapura</p>
                </a>

                <!-- Card 3: YouTube Channel -->
                <a href="<?= YOUTUBE ?>" target="_blank" class="channel-carousel-card">
                    <div class="channel-icon-wrapper" style="font-size: 2.5rem; color: #ff0000;">
                        <i class="fab fa-youtube"></i>
                    </div>
                    <h4 style="font-weight: 800; font-size: 1.1rem; color: #ffffff;">YouTube Channel</h4>
                    <p style="font-size: 0.88rem; color: rgba(203, 213, 225, 0.7); margin-top: 0.3rem;">Watch tour videos & rafting clips</p>
                </a>

                <!-- Card 4: Facebook Page -->
                <a href="<?= FACEBOOK ?>" target="_blank" class="channel-carousel-card">
                    <div class="channel-icon-wrapper" style="font-size: 2.5rem; color: #1877f2;">
                        <i class="fab fa-facebook"></i>
                    </div>
                    <h4 style="font-weight: 800; font-size: 1.1rem; color: #ffffff;">Facebook Page</h4>
                    <p style="font-size: 0.88rem; color: rgba(203, 213, 225, 0.7); margin-top: 0.3rem;">Follow recent tour updates & stories</p>
                </a>

                <!-- Card 5: Google Business Profile -->
                <a href="<?= GOOGLE_BUSINESS ?>" target="_blank" rel="noopener" class="channel-carousel-card">
                    <div class="channel-icon-wrapper" style="font-size: 2.5rem; color: #4285f4; display: flex; align-items: center; justify-content: center;">
                        <svg width="42" height="42" viewBox="0 0 24 24" fill="currentColor"><path d="M21.9 8.9l-1.4-4.2C20.3 4.3 19.9 4 19.5 4H4.5c-.4 0-.8.3-1 .7L2.1 8.9c-.2.7 0 1.5.5 2.1.5.6 1.3.9 2.1.9h.1c1.1 0 2.1-.6 2.6-1.5.5.9 1.5 1.5 2.6 1.5s2.1-.6 2.6-1.5c.5.9 1.5 1.5 2.6 1.5s2.1-.6 2.6-1.5c.5.9 1.5 1.5 2.6 1.5h.1c.8 0 1.6-.3 2.1-.9.5-.6.7-1.4.5-2.1zM4.5 19.5h15v-6.5c-.6.2-1.3.3-2 .3-1.4 0-2.6-.6-3.5-1.6-.9 1-2.1 1.6-3.5 1.6s-2.6-.6-3.5-1.6c-.9 1-2.1 1.6-3.5 1.6-.7 0-1.4-.1-2-.3v6.5z"/><path d="M17.5 14.5c.8 0 1.5.3 2 .8l-1.1 1.1c-.2-.2-.5-.4-.9-.4-.7 0-1.3.6-1.3 1.3s.6 1.3 1.3 1.3c.7 0 1.1-.4 1.2-.8h-1.2v-1.3h2.6c.1.2.1.4.1.7 0 1.6-1.1 2.8-2.7 2.8-1.5 0-2.8-1.2-2.8-2.8s1.2-2.7 2.8-2.7z"/></svg>
                    </div>
                    <h4 style="font-weight: 800; font-size: 1.1rem; color: #ffffff;">Google Business</h4>
                    <p style="font-size: 0.88rem; color: rgba(203, 213, 225, 0.7); margin-top: 0.3rem;">Verified 5.0 rating & reviews</p>
                </a>
            </div>

            <div class="carousel-dots" id="channelsDots"></div>
        </div>
    </div>
</section>

<!-- Contact CTA -->
<section class="cta-section" data-aos="zoom-in">
    <div class="container">
        <div class="cta-content">
            <h2>Ready for an <span class="highlight" style="color: var(--gold-bright);">Unforgettable Sri Lanka Trip</span>?</h2>
            <p>Let's plan your custom itinerary today with Sanjeewa Kumara!</p>
            <div class="cta-buttons">
                <a href="https://wa.me/<?= WHATSAPP ?>?text=Hi%20Sanjeewa,%20I'd%20like%20to%20plan%20a%20trip" target="_blank" class="btn-whatsapp btn-large">
                    <i class="fab fa-whatsapp"></i> Chat on WhatsApp Now
                </a>
                <a href="<?= SITE_URL ?>/contact" class="btn-primary btn-large">
                    <i class="fas fa-envelope"></i> Contact Us
                </a>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Ken Burns Animated Hero Slider Handler (Safe check if slides exist)
    const slides = document.querySelectorAll('.hero-slide-item');
    if (slides && slides.length > 0) {
        let currentSlide = 0;
        setInterval(() => {
            slides[currentSlide].classList.remove('active');
            currentSlide = (currentSlide + 1) % slides.length;
            slides[currentSlide].classList.add('active');
        }, 6500);
    }

    // Animated Text Rotator Handler
    const rotator = document.getElementById('serviceRotator');
    const services = ['Multi-Day Round Tours', 'Kitulgala Rafting Action', 'Yala Wildlife Safaris', 'Sacred Citadel Tours', 'Private Chauffeur Fleet'];
    if (rotator) {
        let serviceIdx = 0;
        setInterval(() => {
            serviceIdx = (serviceIdx + 1) % services.length;
            rotator.style.opacity = '0';
            setTimeout(() => {
                rotator.textContent = services[serviceIdx];
                rotator.style.opacity = '1';
            }, 300);
        }, 3000);
    }

    // Filter Tabs Handler (With Mobile Touch & AOS Refresh Fix)
    const filterBtns = document.querySelectorAll('.filter-btn');
    const filterItems = document.querySelectorAll('.filter-item');

    function applyFilter(filterValue) {
        filterItems.forEach(item => {
            if (item.classList.contains(filterValue)) {
                item.style.display = 'flex';
            } else {
                item.style.display = 'none';
            }
        });

        if (typeof AOS !== 'undefined' && AOS.refresh) {
            setTimeout(function() {
                AOS.refresh();
            }, 50);
        }
    }

    // Set initial filter state on page load
    const initialActiveBtn = document.querySelector('.filter-btn.active');
    if (initialActiveBtn) {
        applyFilter(initialActiveBtn.getAttribute('data-filter'));
    }

    filterBtns.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            filterBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');

            const filterValue = this.getAttribute('data-filter');
            applyFilter(filterValue);

            // Smooth scroll selected button into view on mobile horizontal tab bar
            try {
                this.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
            } catch(err) {}
        });
    });

    // FAQ Accordion Handler
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        if (question) {
            question.addEventListener('click', () => {
                faqItems.forEach(i => {
                    if (i !== item) i.classList.remove('active');
                });
                item.classList.toggle('active');
            });
        }
    });
});

function toggleItinerary(btn) {
    btn.classList.toggle('active');
    const details = btn.nextElementSibling;
    if (details) {
        details.classList.toggle('open');
    }
}
</script>
