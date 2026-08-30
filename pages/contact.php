<!-- 2026 Page Header Banner -->
<section class="page-header-banner">
    <div class="container">
        <h1>Contact Sanjeewa Kumara</h1>
        <p>Get in touch for custom tour quotes, chauffeur vehicle bookings, or instant WhatsApp inquiries.</p>
    </div>
</section>

<!-- Contact Info & Form -->
<section class="section">
    <div class="container">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 3rem;">
            <!-- Info Column -->
            <div class="card contact-info-card" style="padding: 2.2rem;" data-aos="fade-right">
                <div class="text-center" style="text-align: center; margin-bottom: 1.8rem;">
                    <span class="badge-title">Direct Contact</span>
                    <h2 style="font-size: 2rem; color: var(--navy-dark); margin-bottom: 1rem; font-weight: 800;">Headquarters & Operations</h2>
                    <p style="color: var(--text-muted); font-size: 0.92rem; line-height: 1.65; max-width: 540px; margin: 0 auto;">Trusty Travel Sri Lanka is based in the ancient capital city of Anuradhapura, offering nationwide tour pickup across Colombo Airport, Kandy, Ella, and Southern Beaches.</p>
                </div>

                <div class="contact-items-wrapper" style="display: flex; flex-direction: column; gap: 1.2rem; padding-bottom: 1.5rem;">
                    <!-- Card 1: Tour Operator & Chauffeur -->
                    <div class="contact-item-row" style="display: flex; gap: 1.1rem; align-items: center; background: #f8fafc; border: 1px solid #e2e8f0; padding: 1.1rem 1.3rem; border-radius: 20px; box-shadow: 0 2px 8px rgba(0,0,0,0.02);">
                        <div style="width: 48px; height: 48px; flex-shrink: 0; border-radius: 50%; background: #fef3c7; color: #334155; display: flex; align-items: center; justify-content: center; font-size: 1.15rem;"><i class="fas fa-user-tie"></i></div>
                        <div>
                            <h4 style="font-weight: 800; font-size: 0.95rem; color: #0f172a; margin-bottom: 0.2rem;">Tour Operator & Chauffeur</h4>
                            <p style="font-size: 0.92rem; color: #334155; margin: 0; font-weight: 600;"><?= OWNER_NAME ?></p>
                        </div>
                    </div>

                    <!-- Card 2: WhatsApp & Hotlines -->
                    <div class="contact-item-row" style="display: flex; gap: 1.1rem; align-items: center; background: #f0fdf4; border: 1px solid #bbf7d0; padding: 1.1rem 1.3rem; border-radius: 20px; box-shadow: 0 2px 8px rgba(37,211,102,0.02);">
                        <div style="width: 48px; height: 48px; flex-shrink: 0; border-radius: 50%; background: #dcfce7; color: #16a34a; display: flex; align-items: center; justify-content: center; font-size: 1.25rem;"><i class="fab fa-whatsapp"></i></div>
                        <div>
                            <h4 style="font-weight: 800; font-size: 0.95rem; color: #0f172a; margin-bottom: 0.25rem;">WhatsApp & Hotlines</h4>
                            <div style="display: flex; flex-direction: column; gap: 0.2rem;">
                                <a href="tel:<?= PHONE_1 ?>" style="color: #0f172a; font-weight: 700; text-decoration: underline; text-underline-offset: 3px; white-space: nowrap; font-size: 0.92rem;"><?= PHONE_1 ?></a>
                                <a href="tel:<?= PHONE_2 ?>" style="color: #0f172a; font-weight: 700; text-decoration: underline; text-underline-offset: 3px; white-space: nowrap; font-size: 0.92rem;"><?= PHONE_2 ?></a>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3: Email Address -->
                    <div class="contact-item-row" style="display: flex; gap: 1.1rem; align-items: center; background: #f8fafc; border: 1px solid #e2e8f0; padding: 1.1rem 1.3rem; border-radius: 20px; box-shadow: 0 2px 8px rgba(0,0,0,0.02);">
                        <div style="width: 48px; height: 48px; flex-shrink: 0; border-radius: 50%; background: #e0f2fe; color: #0284c7; display: flex; align-items: center; justify-content: center; font-size: 1.15rem;"><i class="fas fa-envelope"></i></div>
                        <div style="word-break: break-all;">
                            <h4 style="font-weight: 800; font-size: 0.95rem; color: #0f172a; margin-bottom: 0.2rem;">Email Address</h4>
                            <p style="font-size: 0.92rem; margin: 0;">
                                <a href="mailto:<?= EMAIL ?>" style="color: #0f172a; font-weight: 700; text-decoration: underline; text-underline-offset: 3px;"><?= EMAIL ?></a>
                            </p>
                        </div>
                    </div>

                    <!-- Card 4: Office Location -->
                    <div class="contact-item-row" style="display: flex; gap: 1.1rem; align-items: center; background: #fef2f2; border: 1px solid #fecaca; padding: 1.1rem 1.3rem; border-radius: 20px; box-shadow: 0 2px 8px rgba(239,68,68,0.02);">
                        <div style="width: 48px; height: 48px; flex-shrink: 0; border-radius: 50%; background: #fee2e2; color: #ef4444; display: flex; align-items: center; justify-content: center; font-size: 1.15rem;"><i class="fas fa-map-marker-alt"></i></div>
                        <div>
                            <h4 style="font-weight: 800; font-size: 0.95rem; color: #0f172a; margin-bottom: 0.2rem;">Office Location</h4>
                            <p style="font-size: 0.92rem; margin: 0;">
                                <a href="<?= GOOGLE_MAPS ?>" target="_blank" rel="noopener" style="color: #0f172a; font-weight: 700; text-decoration: underline; text-underline-offset: 3px;">Anuradhapura, Sri Lanka <i class="fas fa-external-link-alt" style="font-size: 0.78rem; color: #ef4444; margin-left: 2px;"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form Column -->
            <div class="card contact-form-card" style="padding: 2.2rem;" data-aos="fade-left">
                <h3 style="font-size: 1.5rem; color: var(--emerald-brand); margin-bottom: 0.4rem; font-weight: 800; display: flex; align-items: center; gap: 0.6rem;">
                    <i class="fas fa-paper-plane" style="color: var(--gold-sun);"></i> Send Your Inquiry
                </h3>
                <p style="font-size: 0.9rem; color: var(--text-muted); margin-bottom: 1.6rem;">Fill out the form below to initiate an instant WhatsApp quote request directly with Sanjeewa.</p>

                <form id="contactForm" onsubmit="event.preventDefault(); sendContactWhatsApp();">
                    <div class="form-group">
                        <label for="cName">Your Name</label>
                        <div class="input-icon-group">
                            <i class="fas fa-user input-icon"></i>
                            <input type="text" id="cName" class="form-control" placeholder="e.g. John Doe" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="cCountry">Country of Origin</label>
                        <div class="input-icon-group">
                            <i class="fas fa-globe input-icon"></i>
                            <input type="text" id="cCountry" class="form-control" placeholder="e.g. United Kingdom" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="cService">Interested Service</label>
                        <div class="input-icon-group">
                            <i class="fas fa-concierge-bell input-icon"></i>
                            <select id="cService" class="form-control">
                                <option value="All Services / General Inquiry" selected>All Services / General Inquiry</option>
                                <option value="Multi-Day Round Tours">Multi-Day Round Tours</option>
                                <option value="Kitulgala Water Rafting">Kitulgala Water Rafting</option>
                                <option value="Yala & Udawalawe Safaris">Yala & Udawalawe Safaris</option>
                                <option value="Day Excursions">Day Excursions</option>
                                <option value="Private Chauffeur Hire">Private Chauffeur Hire</option>
                                <option value="Tailor-Made Island Package">Tailor-Made Island Package</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group" style="margin-bottom: 1.6rem;">
                        <label for="cMessage">Your Travel Dates & Details</label>
                        <div class="input-icon-group" style="align-items: flex-start;">
                            <i class="fas fa-comment-dots input-icon" style="top: 1rem;"></i>
                            <textarea id="cMessage" class="form-control" rows="4" placeholder="Mention your arrival date, number of travelers, and preferred destinations..." required></textarea>
                        </div>
                    </div>

                    <button type="submit" class="btn-whatsapp" style="width: 100%; justify-content: center; font-size: 1rem; padding: 0.95rem 1.5rem; border-radius: 14px; box-shadow: 0 8px 24px rgba(37, 211, 102, 0.35);">
                        <i class="fab fa-whatsapp" style="font-size: 1.25rem;"></i> Send Quote Request via WhatsApp
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
function sendContactWhatsApp() {
    const name = encodeURIComponent(document.getElementById('cName').value);
    const country = encodeURIComponent(document.getElementById('cCountry').value);
    const service = encodeURIComponent(document.getElementById('cService').value);
    const msg = encodeURIComponent(document.getElementById('cMessage').value);

    const text = `Hi%20Sanjeewa,%20I'm%20${name}%20from%20${country}.%20I'm%20interested%20in%20${service}.%20Details:%20${msg}`;
    window.open(`https://wa.me/<?= WHATSAPP ?>?text=${text}`, '_blank');
}
</script>
