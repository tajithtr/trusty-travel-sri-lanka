</main>

<!-- CHK-Style Floating Review Button -->
<a href="<?= TRIPADVISOR ?>" target="_blank" aria-label="Review us on TripAdvisor" class="review-float-btn">
    <i class="fas fa-star" style="color: #ffd700;"></i>
    <span>Review us</span>
</a>

<!-- CHK-Style Floating WhatsApp Button with Ripple Ring -->
<a href="https://wa.me/<?= WHATSAPP ?>?text=Hi%20Sanjeewa,%20I'd%20like%20to%20inquire%20about%20a%20tour%20in%20Sri%20Lanka" class="float-wp" target="_blank" aria-label="Chat on WhatsApp" title="Chat on WhatsApp">
    <i class="fab fa-whatsapp"></i>
    <span class="wp-pulse-ring"></span>
</a>

<!-- Modern Glassmorphic Premium Footer -->
<footer class="footer">
    <div class="container">
        <div class="footer-grid">
            <!-- Column 1: Brand & Social Row -->
            <div class="footer-col" data-aos="fade-up" data-aos-offset="40">
                <div style="margin-bottom: 1rem;">
                    <picture>
                        <source srcset="<?= SITE_URL ?>/logo.webp?v=9.1.0" type="image/webp">
                        <img src="<?= SITE_URL ?>/logo.png?v=9.1.0" alt="<?= SITE_NAME ?>" loading="lazy" style="max-height: 55px; width: auto; filter: drop-shadow(0 4px 12px rgba(0,0,0,0.6));">
                    </picture>
                </div>
                <p class="footer-brand-desc">
                    Sri Lanka's premier tour operator with 10+ years of 5-star experience. Private AC luxury vehicles, certified English driver guides, and bespoke round tours.
                </p>
                <div class="footer-owner-info">
                    <span class="owner-title"><i class="fas fa-user-shield" style="color: var(--gold-bright);"></i> Owner: <?= OWNER_NAME ?></span>
                </div>
                <div class="social-icon-row">
                    <a href="<?= FACEBOOK ?>" target="_blank" rel="noopener" aria-label="Facebook Page" class="social-icon-btn"><i class="fab fa-facebook-f"></i></a>
                    <a href="<?= TRIPADVISOR ?>" target="_blank" rel="noopener" aria-label="TripAdvisor" class="social-icon-btn"><svg width="20" height="20" viewBox="0 0 200 200" fill="currentColor" style="display:inline-block; vertical-align:middle;"><path d="M 40 68 C 30 50 50 40 70 42 C 85 36 115 36 130 42 C 150 40 170 50 160 68 C 145 56 125 54 100 54 C 75 54 55 56 40 68 Z"/><circle cx="68" cy="102" r="32" fill="none" stroke="currentColor" stroke-width="14"/><circle cx="132" cy="102" r="32" fill="none" stroke="currentColor" stroke-width="14"/><circle cx="68" cy="102" r="14" fill="currentColor"/><circle cx="132" cy="102" r="14" fill="currentColor"/><polygon points="100,94 86,120 100,146 114,120" fill="currentColor"/></svg></a>
                    <a href="<?= YOUTUBE ?>" target="_blank" rel="noopener" aria-label="YouTube Channel" class="social-icon-btn"><i class="fab fa-youtube"></i></a>
                    <a href="<?= GOOGLE_MAPS ?>" target="_blank" rel="noopener" aria-label="Google Maps Location" class="social-icon-btn"><i class="fas fa-map-marker-alt"></i></a>
                    <a href="<?= GOOGLE_BUSINESS ?>" target="_blank" rel="noopener" aria-label="Google Business Profile" class="social-icon-btn"><svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" style="display:inline-block; vertical-align:middle;"><path d="M21.9 8.9l-1.4-4.2C20.3 4.3 19.9 4 19.5 4H4.5c-.4 0-.8.3-1 .7L2.1 8.9c-.2.7 0 1.5.5 2.1.5.6 1.3.9 2.1.9h.1c1.1 0 2.1-.6 2.6-1.5.5.9 1.5 1.5 2.6 1.5s2.1-.6 2.6-1.5c.5.9 1.5 1.5 2.6 1.5s2.1-.6 2.6-1.5c.5.9 1.5 1.5 2.6 1.5h.1c.8 0 1.6-.3 2.1-.9.5-.6.7-1.4.5-2.1zM4.5 19.5h15v-6.5c-.6.2-1.3.3-2 .3-1.4 0-2.6-.6-3.5-1.6-.9 1-2.1 1.6-3.5 1.6s-2.6-.6-3.5-1.6c-.9 1-2.1 1.6-3.5 1.6-.7 0-1.4-.1-2-.3v6.5z"/><path d="M17.5 14.5c.8 0 1.5.3 2 .8l-1.1 1.1c-.2-.2-.5-.4-.9-.4-.7 0-1.3.6-1.3 1.3s.6 1.3 1.3 1.3c.7 0 1.1-.4 1.2-.8h-1.2v-1.3h2.6c.1.2.1.4.1.7 0 1.6-1.1 2.8-2.7 2.8-1.5 0-2.8-1.2-2.8-2.8s1.2-2.7 2.8-2.7z"/></svg></a>
                </div>
            </div>
            
            <!-- Column 2: Quick Links -->
            <div class="footer-col" data-aos="fade-up" data-aos-delay="100" data-aos-offset="40">
                <h4>Quick Links</h4>
                <div class="footer-nav-list">
                    <a href="<?= SITE_URL ?>/packages"><i class="fas fa-compass"></i> Multi-Day Round Tours</a>
                    <a href="<?= SITE_URL ?>/safari"><i class="fas fa-paw"></i> Wildlife Jeep Safaris</a>
                    <a href="<?= SITE_URL ?>/day-tours"><i class="fas fa-sun"></i> Single-Day Excursions</a>
                    <a href="<?= SITE_URL ?>/transport"><i class="fas fa-car-side"></i> Vehicle Fleet & Transfers</a>
                    <a href="<?= SITE_URL ?>/gallery"><i class="fas fa-camera-retro"></i> Photo & Experience Gallery</a>
                    <a href="<?= SITE_URL ?>/contact"><i class="fas fa-paper-plane"></i> Contact & Quotation</a>
                </div>
            </div>
            
            <!-- Column 3: Contact Details -->
            <div class="footer-col" data-aos="fade-up" data-aos-delay="200" data-aos-offset="40">
                <h4>Contact Details</h4>
                <div class="footer-contact-list">
                    <a href="tel:<?= PHONE_1 ?>" class="footer-contact-pill"><i class="fas fa-phone-alt"></i> <?= PHONE_1 ?></a>
                    <a href="tel:<?= PHONE_2 ?>" class="footer-contact-pill"><i class="fab fa-whatsapp"></i> <?= PHONE_2 ?></a>
                    <a href="mailto:<?= EMAIL ?>" class="footer-contact-pill"><i class="fas fa-envelope"></i> <?= EMAIL ?></a>
                    <a href="<?= GOOGLE_MAPS ?>" target="_blank" rel="noopener" class="footer-contact-pill maps-pill"><i class="fas fa-map-marked-alt"></i> Google Maps Location</a>
                </div>
            </div>
            
            <!-- Column 4: Why Choose Us -->
            <div class="footer-col" data-aos="fade-up" data-aos-delay="300" data-aos-offset="40">
                <h4>Why Choose Us</h4>
                <p class="footer-trust-desc">
                    Custom round tours, Yala safaris, Kitulgala rafting, whale watching & private luxury chauffeur transfers across Sri Lanka.
                </p>
                <div class="footer-badges">
                    <span><i class="fas fa-shield-alt"></i> SLTDA Registered</span>
                    <span><i class="fas fa-star"></i> 5.0 TripAdvisor</span>
                    <span><i class="fas fa-car-side"></i> Luxury AC Fleet</span>
                </div>
            </div>
        </div>
        
        <!-- Modern Footer Bottom Bar -->
        <div class="footer-bottom">
            <div class="footer-bottom-wrapper">
                <p class="copyright-text">&copy; <?= date('Y') ?> <strong><?= SITE_NAME ?></strong> With Sanjeewa. All rights reserved.</p>
                <p class="footer-credit">
                    Designed & Developed by 
                    <a href="https://fusionwavesystems.com/" target="_blank" rel="noopener" class="designer-link">
                        Fusion Wave Systems (Pvt) Ltd
                    </a>
                </p>
            </div>
        </div>
    </div>
</footer>

<!-- Scroll to Top -->
<button class="scroll-top" id="scrollTop" aria-label="Scroll to top"><i class="fas fa-chevron-up"></i></button>

<!-- AOS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!-- Custom JS with Cache Buster -->
<script src="<?= SITE_URL ?>/assets/js/script.js?v=1.0.6"></script>
<script>
    AOS.init({ duration: 800, easing: 'ease-in-out', once: true });
</script>
</body>
</html>
