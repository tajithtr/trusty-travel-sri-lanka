<!-- 2026 Page Header Banner -->
<section class="page-header-banner">
    <div class="container">
        <h1>Single-Day Excursions & Day Trips</h1>
        <p>Explore ancient UNESCO heritage citadels, sacred pilgrimage sites, river mangrove safaris, and coastal day tours with Sanjeewa.</p>
    </div>
</section>

<!-- Category Switcher Styles -->
<style>
.excursion-tabs-container {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 1rem;
    margin: 0 auto 3rem;
    max-width: 680px;
    width: 100%;
}

.excursion-tab-btn {
    flex: 1 1 50%;
    padding: 1rem 1.8rem;
    background: var(--navy-dark);
    color: #ffffff;
    border: 1.5px solid rgba(245, 158, 11, 0.35);
    border-radius: var(--radius-full);
    font-family: var(--font-heading);
    font-weight: 800;
    font-size: 1.05rem;
    cursor: pointer;
    transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 0.65rem;
    box-shadow: 0 4px 15px rgba(5, 13, 24, 0.15);
    outline: none;
    user-select: none;
    -webkit-tap-highlight-color: transparent;
}

.excursion-tab-btn:hover {
    background: #0e223d;
    border-color: var(--gold-bright);
    color: var(--gold-bright);
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(5, 13, 24, 0.25);
}

.excursion-tab-btn.active {
    background: var(--navy-trust);
    color: #ffffff;
    border: 2px solid var(--gold-sun);
    box-shadow: var(--glow-gold), 0 10px 30px rgba(5, 13, 24, 0.4);
    transform: translateY(-2px) scale(1.02);
}

.excursion-tab-btn.active .tab-icon {
    transform: scale(1.15);
}

.excursion-tab-btn .tab-icon {
    font-size: 1.25rem;
    transition: transform 0.3s ease;
}

.excursion-card {
    transition: opacity 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94), transform 0.3s ease;
}

.excursion-card.is-hidden {
    display: none !important;
    opacity: 0;
}

.excursion-card.is-visible {
    display: flex !important;
    animation: fadeInCard 0.3s ease forwards;
}

@keyframes fadeInCard {
    from {
        opacity: 0;
        transform: translateY(12px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@media (max-width: 640px) {
    .excursion-tabs-container {
        flex-direction: row;
        flex-wrap: nowrap;
        gap: 0.5rem;
        width: 100%;
        margin-bottom: 2rem;
    }
    .excursion-tab-btn {
        flex: 1 1 50%;
        width: auto;
        padding: 0.7rem 0.5rem;
        font-size: 0.82rem;
        gap: 0.35rem;
        white-space: nowrap;
        border-radius: var(--radius-full);
    }
    .excursion-tab-btn .tab-icon {
        font-size: 0.95rem;
    }
}

@media (max-width: 380px) {
    .excursion-tabs-container {
        gap: 0.3rem;
    }
    .excursion-tab-btn {
        padding: 0.65rem 0.3rem;
        font-size: 0.74rem;
        gap: 0.25rem;
    }
    .excursion-tab-btn .tab-icon {
        font-size: 0.85rem;
    }
}
</style>

<!-- Day Excursions Section -->
<section class="section">
    <div class="container">

        <!-- Section Heading -->
        <div class="section-title" data-aos="fade-up">
            <span class="badge-title">Direct Transfers & Heritage Tours</span>
            <h2>Day Excursions</h2>
        </div>

        <!-- Two Category Switch Buttons -->
        <div class="excursion-tabs-container" data-aos="fade-up">
            <button type="button" class="excursion-tab-btn active" id="tabShuttle" data-target="shuttle">
                <span class="tab-icon">🚐</span> Shuttle & Safari
            </button>
            <button type="button" class="excursion-tab-btn" id="tabNormal" data-target="normal">
                <span class="tab-icon">🏛️</span> Normal Day Excursions
            </button>
        </div>

        <!-- Cards Grid -->
        <div class="card-grid" id="dayExcursionsGrid">

            <!-- Card 1 — Colombo to Trincomalee Shuttle & Safari Drive -->
            <div class="card excursion-card" data-category="shuttle" data-aos="fade-up">
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
                        <span><i class="fas fa-map-marker-alt" style="color: var(--gold-deep);"></i> Colombo → Trincomalee</span>
                        <span><i class="fas fa-star" style="color: var(--gold-sun);"></i> 5.0 (54 Reviews)</span>
                    </div>
                    <h3>Colombo to Trincomalee Shuttle & Safari Drive</h3>
                    <div class="card-schedule-box">
                        <div class="schedule-header">
                            <i class="far fa-clock" style="color: var(--gold-deep);"></i>
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
                            <i class="fas fa-hourglass-half" style="color: var(--gold-deep);"></i> 12 Hours Tour & Safari Drive
                        </div>
                    </div>
                    <ul class="inclusions-list">
                        <li><i class="fas fa-check"></i> Hotel pickup from Colombo, Negombo & suburbs</li>
                        <li><i class="fas fa-check"></i> Exclusive Safari at Minneriya & Kaudulla National Park with Authentic Food Tasting in Sigiriya Village and more</li>
                        <li><i class="fas fa-check"></i> Hotel drop to Trincomalee, Nilaveli & suburbs</li>
                    </ul>
                    <a href="https://wa.me/<?= WHATSAPP ?>?text=I'm%20interested%20in%20Colombo%20to%20Trincomalee%20Shuttle%20%26%20Safari%20Drive" target="_blank" class="btn-enquire">
                        Book Now <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Card 2 — Mirissa to Ella Shuttle & Udawalawe Safari Drive -->
            <div class="card excursion-card" data-category="shuttle" data-aos="fade-up" data-aos-delay="100">
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
                        <span><i class="fas fa-map-marker-alt" style="color: var(--gold-deep);"></i> Mirissa → Ella</span>
                        <span><i class="fas fa-star" style="color: var(--gold-sun);"></i> 5.0 (62 Reviews)</span>
                    </div>
                    <h3>Mirissa to Ella Shuttle & Udawalawe Safari Drive</h3>
                    <div class="card-schedule-box">
                        <div class="schedule-header">
                            <i class="far fa-clock" style="color: var(--gold-deep);"></i>
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
                            <i class="fas fa-route" style="color: var(--gold-deep);"></i> Shuttle Transfer & Udawalawe 4x4 Safari Included
                        </div>
                    </div>
                    <ul class="inclusions-list">
                        <li><i class="fas fa-check"></i> Hotel Pickup from Mirissa, Galle, Dickwella, Tangalle & Suburbs</li>
                        <li><i class="fas fa-check"></i> 3.5 – 4 Hours of Pure Wilderness</li>
                        <li><i class="fas fa-check"></i> Hotel Drop to Ella, Haputale, Bandarawela & Suburbs</li>
                    </ul>
                    <a href="https://wa.me/<?= WHATSAPP ?>?text=I'm%20interested%20in%20Mirissa%20to%20Ella%20Shuttle%20%26%20Udawalawe%20Safari%20Drive" target="_blank" class="btn-enquire">
                        Book Now <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Card 3 — Ella to Mirissa Shuttle & Udawalawe Safari Drive -->
            <div class="card excursion-card" data-category="shuttle" data-aos="fade-up" data-aos-delay="200">
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
                        <span><i class="fas fa-map-marker-alt" style="color: var(--gold-deep);"></i> Ella → Mirissa</span>
                        <span><i class="fas fa-star" style="color: var(--gold-sun);"></i> 5.0 (48 Reviews)</span>
                    </div>
                    <h3>Ella to Mirissa Shuttle & Udawalawe Safari Drive</h3>
                    <div class="card-schedule-box">
                        <div class="schedule-header">
                            <i class="far fa-clock" style="color: var(--gold-deep);"></i>
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
                            <i class="fas fa-route" style="color: var(--gold-deep);"></i> Shuttle Transfer & Udawalawe 4x4 Safari Included
                        </div>
                    </div>
                    <ul class="inclusions-list">
                        <li><i class="fas fa-check"></i> Hotel Pickup from Ella, Haputale, Bandarawela & Suburbs</li>
                        <li><i class="fas fa-check"></i> 3.5 – 4 Hours of Pure Wilderness</li>
                        <li><i class="fas fa-check"></i> Hotel Drop to Mirissa, Galle, Dickwella, Tangalle & Suburbs</li>
                    </ul>
                    <a href="https://wa.me/<?= WHATSAPP ?>?text=I'm%20interested%20in%20Ella%20to%20Mirissa%20Shuttle%20%26%20Udawalawe%20Safari%20Drive" target="_blank" class="btn-enquire">
                        Book Now <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Card 4 — Dambulla to Trincomalee Shuttle & Safari Drive -->
            <div class="card excursion-card" data-category="shuttle" data-aos="fade-up" data-aos-delay="300">
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
                        <span><i class="fas fa-map-marker-alt" style="color: var(--gold-deep);"></i> Dambulla → Trincomalee</span>
                        <span><i class="fas fa-star" style="color: var(--gold-sun);"></i> 5.0 (41 Reviews)</span>
                    </div>
                    <h3>Dambulla to Trincomalee Shuttle & Safari Drive</h3>
                    <div class="card-schedule-box">
                        <div class="schedule-header">
                            <i class="far fa-clock" style="color: var(--gold-deep);"></i>
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
                            <i class="fas fa-hourglass-half" style="color: var(--gold-deep);"></i> 6 Hours Tour & Safari Drive
                        </div>
                    </div>
                    <ul class="inclusions-list">
                        <li><i class="fas fa-check"></i> Hotel pickup from Dambulla, Sigiriya, Habarana & suburbs</li>
                        <li><i class="fas fa-check"></i> Exclusive Safari at Minneriya or Kaudulla National park</li>
                        <li><i class="fas fa-check"></i> Hotel drop to Trincomalee, Nilaveli & suburbs</li>
                    </ul>
                    <a href="https://wa.me/<?= WHATSAPP ?>?text=I'm%20interested%20in%20Dambulla%20to%20Trincomalee%20Shuttle%20%26%20Safari%20Drive" target="_blank" class="btn-enquire">
                        Book Now <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Card 5 — Anuradhapura to Wilpattu Safari & Return Day Tour -->
            <div class="card excursion-card" data-category="shuttle" data-aos="fade-up" data-aos-delay="400">
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
                        <span><i class="fas fa-map-marker-alt" style="color: var(--gold-deep);"></i> Anuradhapura ⇄ Wilpattu</span>
                        <span><i class="fas fa-star" style="color: var(--gold-sun);"></i> 5.0 (58 Reviews)</span>
                    </div>
                    <h3>Anuradhapura to Wilpattu Safari & Return Day Tour</h3>
                    <div class="card-schedule-box">
                        <div class="schedule-header">
                            <i class="far fa-clock" style="color: var(--gold-deep);"></i>
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
                            <i class="fas fa-sync-alt" style="color: var(--gold-deep);"></i> Same-Day Wilpattu Safari Round Trip
                        </div>
                    </div>
                    <ul class="inclusions-list">
                        <li><i class="fas fa-check"></i> Hotel pickup from Anuradhapura & suburbs</li>
                        <li><i class="fas fa-check"></i> Exclusive 4x4 Jeep Safari at Wilpattu National Park (Leopards, Sloth Bears & Lakes)</li>
                        <li><i class="fas fa-check"></i> Hotel drop back to Anuradhapura & suburbs in one day</li>
                    </ul>
                    <a href="https://wa.me/<?= WHATSAPP ?>?text=I'm%20interested%20in%20Anuradhapura%20to%20Wilpattu%20Safari%20%26%20Return%20Day%20Tour" target="_blank" class="btn-enquire">
                        Book Now <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Colombo to Sigiriya Shuttle & Heritage Excursion -->
            <div class="card excursion-card" data-category="shuttle" data-aos="fade-up" data-aos-delay="500">
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
                        <span><i class="fas fa-map-marker-alt" style="color: var(--gold-deep);"></i> Colombo → Sigiriya</span>
                        <span><i class="fas fa-star" style="color: var(--gold-sun);"></i> 5.0 (52 Reviews)</span>
                    </div>
                    <h3>Colombo to Sigiriya Shuttle & Heritage Excursion</h3>
                    <div class="card-schedule-box">
                        <div class="schedule-header">
                            <i class="far fa-clock" style="color: var(--gold-deep);"></i>
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
                            <i class="fas fa-route" style="color: var(--gold-deep);"></i> Shuttle Transfer & Heritage Excursion Included
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

            <!-- Card 6 — Anuradhapura Sacred Citadel Pilgrimage Day Tour -->
            <div class="card excursion-card" data-category="normal" data-aos="fade-up">
                <div class="card-img-header card-img-carousel">
                    <div class="carousel-slides">
                        <img src="<?= SITE_URL ?>/assets/Images/day-tours/firstcard/anuradhapura.webp" alt="Anuradhapura Sacred Citadel Ruins" class="carousel-slide active" loading="lazy" decoding="async" width="400" height="250">
                        <img src="<?= SITE_URL ?>/assets/Images/day-tours/firstcard/anuradhapura1.webp" alt="Jaya Sri Maha Bodhi Tree" class="carousel-slide" loading="lazy" decoding="async" width="400" height="250">
                        <img src="<?= SITE_URL ?>/assets/Images/day-tours/firstcard/anuradhapura2.webp" alt="Ruwanwelisaya & Jetavanaramaya Stupas" class="carousel-slide" loading="lazy" decoding="async" width="400" height="250">
                    </div>
                    <span class="card-badge">Normal Day Excursion</span>
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
                        <span><i class="fas fa-map-marker-alt" style="color: var(--gold-deep);"></i> Anuradhapura Ancient Kingdom</span>
                        <span><i class="fas fa-star" style="color: var(--gold-sun);"></i> 5.0 (46 Reviews)</span>
                    </div>
                    <h3>Anuradhapura Sacred Citadel Pilgrimage Day Tour</h3>
                    <div class="card-price-box">
                        <div class="price-usd">$35 USD / person</div>
                        <div class="price-lkr">(~10,500 LKR)</div>
                    </div>
                    <ul class="inclusions-list">
                        <li><i class="fas fa-check"></i> Sacred Jaya Sri Maha Bodhi Tree</li>
                        <li><i class="fas fa-check"></i> Ruwanwelisaya & Jetavanaramaya Stupas</li>
                        <li><i class="fas fa-check"></i> Twin Ponds (Kuttam Pokuna) & Samadhi Buddha</li>
                    </ul>
                    <a href="https://wa.me/<?= WHATSAPP ?>?text=I'm%20interested%20in%20Anuradhapura%20Heritage%20Day%20Tour" target="_blank" class="btn-enquire">
                        Book Anuradhapura Tour <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Card 7 — Sigiriya Rock Fortress & Dambulla Cave Excursion -->
            <div class="card excursion-card" data-category="normal" data-aos="fade-up" data-aos-delay="100">
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
                        <span><i class="fas fa-map-marker-alt" style="color: var(--gold-deep);"></i> Sigiriya & Dambulla</span>
                        <span><i class="fas fa-star" style="color: var(--gold-sun);"></i> 5.0 (72 Reviews)</span>
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
                    </ul>
                    <a href="https://wa.me/<?= WHATSAPP ?>?text=I'm%20interested%20in%20Sigiriya%20and%20Dambulla%20Day%20Tour" target="_blank" class="btn-enquire">
                        Book Sigiriya Tour <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Card 8 — Madu River Mangrove Boat Safari & Fish Therapy -->
            <div class="card excursion-card" data-category="normal" data-aos="fade-up" data-aos-delay="200">
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
                        <span><i class="fas fa-map-marker-alt" style="color: var(--gold-deep);"></i> Balapitiya / Bentota</span>
                        <span><i class="fas fa-star" style="color: var(--gold-sun);"></i> 5.0 (39 Reviews)</span>
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
                    </ul>
                    <a href="https://wa.me/<?= WHATSAPP ?>?text=I'm%20interested%20in%20Madu%20River%20Boat%20Safari" target="_blank" class="btn-enquire">
                        Book River Safari <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- Category Switcher Controller -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const tabBtns = document.querySelectorAll('.excursion-tab-btn');
    const excursionCards = document.querySelectorAll('.excursion-card');

    function switchCategory(category) {
        // Toggle tab button active classes
        tabBtns.forEach(function(btn) {
            if (btn.getAttribute('data-target') === category) {
                btn.classList.add('active');
            } else {
                btn.classList.remove('active');
            }
        });

        // Toggle card visibility
        excursionCards.forEach(function(card) {
            const cardCat = card.getAttribute('data-category');
            if (cardCat === category) {
                card.classList.remove('is-hidden');
                card.classList.add('is-visible');
            } else {
                card.classList.remove('is-visible');
                card.classList.add('is-hidden');
            }
        });

        // Refresh AOS scroll animations if present
        if (typeof AOS !== 'undefined' && AOS.refresh) {
            setTimeout(function() {
                AOS.refresh();
            }, 100);
        }
    }

    tabBtns.forEach(function(btn) {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            const targetCategory = this.getAttribute('data-target');
            switchCategory(targetCategory);
        });
    });

    // Initialize default state: Shuttle & Safari active
    switchCategory('shuttle');
});
</script>
