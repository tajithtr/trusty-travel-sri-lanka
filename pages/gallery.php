<?php
// Scan assets/Images/gallery directory dynamically
$galleryDir = __DIR__ . '/../assets/Images/gallery';
$galleryImages = [];

if (is_dir($galleryDir)) {
    $files = scandir($galleryDir);
    foreach ($files as $file) {
        if ($file === '.' || $file === '..') continue;
        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        if (in_array($ext, ['jpg', 'jpeg', 'png', 'webp', 'gif'])) {
            $galleryImages[] = $file;
        }
    }
    // Sort naturally so numerical filenames order properly
    natsort($galleryImages);
    $galleryImages = array_values($galleryImages);
}
?>

<!-- 2026 Page Header Banner -->
<section class="page-header-banner">
    <div class="container">
        <h1><i class="fas fa-camera-retro" style="color: var(--gold-bright); margin-right: 0.5rem;"></i> Travel Moments Gallery</h1>
        <p>Real photo memories with international travelers across Sri Lanka's heritage sites, safaris, and rivers.</p>
    </div>
</section>

<!-- Mobile Phone Style Gallery Section -->
<section class="section phone-gallery-section">
    <div class="container">
        
        <!-- Mobile App Toolbar Header -->
        <div class="phone-gallery-toolbar card" data-aos="fade-down">
            <div class="phone-toolbar-brand">
                <div class="phone-status-dot"></div>
                <div class="phone-app-title">
                    <span><i class="fas fa-mobile-alt" style="color: var(--teal-wave); margin-right: 0.4rem;"></i> Mobile Photos Album</span>
                    <span class="phone-photo-count"><?= count($galleryImages) ?> Photos</span>
                </div>
            </div>

            <!-- Layout Switcher Controls -->
            <div class="phone-layout-controls">
                <button type="button" class="layout-btn active" data-view="grid" title="Standard Grid View">
                    <i class="fas fa-th"></i> <span class="btn-text">Grid</span>
                </button>
                <button type="button" class="layout-btn" data-view="compact" title="Compact 4-Column View">
                    <i class="fas fa-th-large"></i> <span class="btn-text">Compact</span>
                </button>
                <button type="button" class="layout-btn" data-view="feed" title="Mobile Phone Reel Feed">
                    <i class="fas fa-stream"></i> <span class="btn-text">Reel</span>
                </button>
            </div>

            <!-- Action Link -->
            <a href="<?= GOOGLE_BUSINESS ?>" target="_blank" rel="noopener" class="drive-quick-link" title="Open Google Business Profile">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" style="display:inline-block; vertical-align:middle; margin-right:4px;"><path d="M21.9 8.9l-1.4-4.2C20.3 4.3 19.9 4 19.5 4H4.5c-.4 0-.8.3-1 .7L2.1 8.9c-.2.7 0 1.5.5 2.1.5.6 1.3.9 2.1.9h.1c1.1 0 2.1-.6 2.6-1.5.5.9 1.5 1.5 2.6 1.5s2.1-.6 2.6-1.5c.5.9 1.5 1.5 2.6 1.5s2.1-.6 2.6-1.5c.5.9 1.5 1.5 2.6 1.5h.1c.8 0 1.6-.3 2.1-.9.5-.6.7-1.4.5-2.1zM4.5 19.5h15v-6.5c-.6.2-1.3.3-2 .3-1.4 0-2.6-.6-3.5-1.6-.9 1-2.1 1.6-3.5 1.6s-2.6-.6-3.5-1.6c-.9 1-2.1 1.6-3.5 1.6-.7 0-1.4-.1-2-.3v6.5z"/><path d="M17.5 14.5c.8 0 1.5.3 2 .8l-1.1 1.1c-.2-.2-.5-.4-.9-.4-.7 0-1.3.6-1.3 1.3s.6 1.3 1.3 1.3c.7 0 1.1-.4 1.2-.8h-1.2v-1.3h2.6c.1.2.1.4.1.7 0 1.6-1.1 2.8-2.7 2.8-1.5 0-2.8-1.2-2.8-2.8s1.2-2.7 2.8-2.7z"/></svg> <span>Google Business</span>
            </a>
        </div>

        <!-- Gallery Grid -->
        <div class="phone-gallery-grid view-grid" id="phoneGalleryGrid">
            <?php foreach ($galleryImages as $index => $filename): ?>
                <?php 
                    $imgUrl = SITE_URL . '/assets/Images/gallery/' . htmlspecialchars($filename);
                    $delay = ($index % 6) * 40; 
                ?>
                <div class="phone-photo-card" 
                     data-index="<?= $index ?>" 
                     data-src="<?= $imgUrl ?>" 
                     data-filename="<?= htmlspecialchars($filename) ?>"
                     data-aos="fade-up" 
                     data-aos-delay="<?= $delay ?>">
                    <div class="phone-photo-thumb">
                        <img src="<?= $imgUrl ?>" alt="Trusty Travel Photo <?= $index + 1 ?>" loading="lazy" decoding="async" width="300" height="200">
                        <div class="phone-photo-overlay">
                            <span class="photo-index-badge">#<?= sprintf('%02d', $index + 1) ?></span>
                            <span class="zoom-action-badge"><i class="fas fa-search-plus"></i> View</span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- High-Res Google Business Banner -->
        <div class="gallery-drive-footer-card card" data-aos="fade-up" data-aos-offset="40">
            <div class="drive-card-content">
                <div class="drive-icon-wrapper">
                    <i class="fas fa-images"></i>
                </div>
                <div>
                    <h3>Want Original Uncompressed HD Photos?</h3>
                    <p>Access our live high-definition tour photo collection on Google Business.</p>
                </div>
            </div>
            <a href="<?= GOOGLE_BUSINESS ?>" target="_blank" rel="noopener" class="btn-primary">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" style="display:inline-block; vertical-align:middle; margin-right:6px;"><path d="M21.9 8.9l-1.4-4.2C20.3 4.3 19.9 4 19.5 4H4.5c-.4 0-.8.3-1 .7L2.1 8.9c-.2.7 0 1.5.5 2.1.5.6 1.3.9 2.1.9h.1c1.1 0 2.1-.6 2.6-1.5.5.9 1.5 1.5 2.6 1.5s2.1-.6 2.6-1.5c.5.9 1.5 1.5 2.6 1.5s2.1-.6 2.6-1.5c.5.9 1.5 1.5 2.6 1.5h.1c.8 0 1.6-.3 2.1-.9.5-.6.7-1.4.5-2.1zM4.5 19.5h15v-6.5c-.6.2-1.3.3-2 .3-1.4 0-2.6-.6-3.5-1.6-.9 1-2.1 1.6-3.5 1.6s-2.6-.6-3.5-1.6c-.9 1-2.1 1.6-3.5 1.6-.7 0-1.4-.1-2-.3v6.5z"/><path d="M17.5 14.5c.8 0 1.5.3 2 .8l-1.1 1.1c-.2-.2-.5-.4-.9-.4-.7 0-1.3.6-1.3 1.3s.6 1.3 1.3 1.3c.7 0 1.1-.4 1.2-.8h-1.2v-1.3h2.6c.1.2.1.4.1.7 0 1.6-1.1 2.8-2.7 2.8-1.5 0-2.8-1.2-2.8-2.8s1.2-2.7 2.8-2.7z"/></svg> Open Google Business
            </a>
        </div>

    </div>
</section>

<!-- Fullscreen Mobile Phone Lightbox Modal -->
<div class="phone-lightbox" id="phoneLightbox" role="dialog" aria-modal="true" aria-hidden="true">
    <div class="phone-lightbox-overlay" id="phoneLightboxOverlay"></div>
    <div class="phone-lightbox-container">
        
        <!-- Lightbox Top App Bar -->
        <div class="phone-lightbox-header">
            <div class="lightbox-header-left">
                <div class="lightbox-phone-badge"><i class="fas fa-mobile-alt"></i></div>
                <div>
                    <div class="lightbox-title">Trusty Travel Photo Viewer</div>
                    <div class="lightbox-counter" id="lightboxCounter">Photo 1 of <?= count($galleryImages) ?></div>
                </div>
            </div>
            <div class="lightbox-header-actions">
                <a href="#" id="lightboxWpShare" target="_blank" rel="noopener" class="lightbox-act-btn wp-share-btn" title="Share via WhatsApp">
                    <i class="fab fa-whatsapp"></i>
                </a>
                <a href="#" id="lightboxDownload" download class="lightbox-act-btn download-btn" title="Download Image">
                    <i class="fas fa-download"></i>
                </a>
                <button type="button" class="lightbox-act-btn close-btn" id="lightboxClose" aria-label="Close Lightbox">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>

        <!-- Lightbox Main Stage -->
        <div class="phone-lightbox-stage" id="phoneLightboxStage">
            <button type="button" class="lightbox-nav-btn prev-btn" id="lightboxPrev" aria-label="Previous Photo">
                <i class="fas fa-chevron-left"></i>
            </button>

            <div class="phone-lightbox-img-wrapper" id="lightboxImgWrapper">
                <img src="" id="lightboxMainImg" alt="Gallery Photo Preview">
                <div class="lightbox-loader" id="lightboxLoader">
                    <i class="fas fa-spinner fa-spin"></i>
                </div>
            </div>

            <button type="button" class="lightbox-nav-btn next-btn" id="lightboxNext" aria-label="Next Photo">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>

        <!-- Lightbox Bottom Thumbnail Filmstrip -->
        <div class="phone-lightbox-filmstrip-bar">
            <div class="phone-lightbox-filmstrip" id="lightboxFilmstrip">
                <?php foreach ($galleryImages as $index => $filename): ?>
                    <?php $imgUrl = SITE_URL . '/assets/Images/gallery/' . htmlspecialchars($filename); ?>
                    <button type="button" 
                            class="filmstrip-thumb <?= $index === 0 ? 'active' : '' ?>" 
                            data-index="<?= $index ?>" 
                            data-src="<?= $imgUrl ?>"
                            aria-label="Jump to photo <?= $index + 1 ?>">
                        <img src="<?= $imgUrl ?>" alt="Thumb <?= $index + 1 ?>" loading="lazy">
                    </button>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</div>
