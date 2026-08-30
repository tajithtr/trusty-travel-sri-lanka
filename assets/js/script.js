/**
 * Trusty Travel Sri Lanka With Sanjeewa - Client JavaScript
 */

document.addEventListener('DOMContentLoaded', function() {
    // 1. Mobile Menu Toggle
    const menuToggle = document.getElementById('menuToggle') || document.querySelector('.menu-toggle');
    const navMenu = document.getElementById('navMenu') || document.querySelector('.nav-links');

    if (menuToggle && navMenu) {
        menuToggle.addEventListener('click', function(e) {
            e.stopPropagation();
            navMenu.classList.toggle('open');
        });

        document.addEventListener('click', function(e) {
            if (!menuToggle.contains(e.target) && !navMenu.contains(e.target)) {
                navMenu.classList.remove('open');
            }
        });
    }

    // 2. Scroll To Top Button
    const scrollBtn = document.getElementById('scrollTop');

    window.addEventListener('scroll', function() {
        if (scrollBtn) {
            if (window.scrollY > 300) {
                scrollBtn.classList.add('visible');
            } else {
                scrollBtn.classList.remove('visible');
            }
        }
    });

    if (scrollBtn) {
        scrollBtn.addEventListener('click', function() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // 3. Counter Animation for Hero Stats
    function animateCounters() {
        const counters = document.querySelectorAll('.stat-number');
        counters.forEach(counter => {
            const targetAttr = counter.getAttribute('data-count');
            if (!targetAttr) return;

            const isDecimal = counter.getAttribute('data-decimals') === '1';
            const countTo = parseFloat(targetAttr);
            if (isNaN(countTo)) return;

            const suffix = counter.getAttribute('data-suffix') || '';
            const iconHTML = counter.getAttribute('data-icon') || '';
            const duration = 2000;
            const stepTime = 30;
            const steps = duration / stepTime;
            const increment = countTo / steps;
            let currentCount = 0;

            const observer = new IntersectionObserver((entries) => {
                if (entries[0].isIntersecting) {
                    const timer = setInterval(() => {
                        currentCount += increment;
                        if (currentCount >= countTo) {
                            currentCount = countTo;
                            const formatted = isDecimal ? currentCount.toFixed(1) : Math.round(currentCount);
                            counter.innerHTML = `${formatted}${suffix}${iconHTML ? ' ' + iconHTML : ''}`;
                            clearInterval(timer);
                        } else {
                            const formatted = isDecimal ? currentCount.toFixed(1) : Math.round(currentCount);
                            counter.innerHTML = `${formatted}${suffix}${iconHTML ? ' ' + iconHTML : ''}`;
                        }
                    }, stepTime);
                    observer.disconnect();
                }
            }, { threshold: 0.1 });

            observer.observe(counter);
        });
    }

    animateCounters();

    // 4. Interactive Tour & Transfer Rate Estimator Widget
    const estService = document.getElementById('estService');
    const estPax = document.getElementById('estPax');
    const estDistance = document.getElementById('estDistance');
    const estDistanceGroup = document.getElementById('estDistanceGroup');
    const estPriceDisplay = document.getElementById('estPriceDisplay');
    const estBookBtn = document.getElementById('estBookBtn');

    function updatePaxOptions() {
        if (!estService || !estPax) return;
        const service = estService.value;
        const currentPax = parseInt(estPax.value, 10) || 2;

        let maxPax = 3;
        if (service === 'roomy') {
            maxPax = 3;
        } else if (service === 'vezel' || service === 'montero') {
            maxPax = 4;
        } else if (service === 'van') {
            maxPax = 10;
        }

        let html = '';
        for (let i = 1; i <= maxPax; i++) {
            const isMax = (i === maxPax) ? ' (Max Capacity)' : '';
            const unit = (i === 1) ? 'Person' : 'Persons';
            html += `<option value="${i}">${i} ${unit}${isMax}</option>`;
        }

        estPax.innerHTML = html;

        if (currentPax <= maxPax) {
            estPax.value = currentPax;
        } else {
            estPax.value = maxPax;
        }
    }

    function calculateEstimate() {
        if (!estService || !estPriceDisplay) return;

        const service = estService.value;
        const pax = parseInt(estPax ? estPax.value : 2, 10) || 2;
        const dist = parseInt(estDistance ? estDistance.value : 50, 10) || 50;

        if (estDistanceGroup) {
            estDistanceGroup.style.display = 'block';
        }

        let totalUSD = 0;
        let totalLKR = 0;
        let serviceName = "Chauffeur Vehicle Hire";

        if (service === 'roomy') {
            totalLKR = Math.max(3000, dist * 120);
            totalUSD = Math.round(totalLKR / 300);
            serviceName = `Toyota Roomy Car (${dist} km, ${pax} Pax)`;
        } else if (service === 'vezel') {
            totalLKR = Math.max(4500, dist * 180);
            totalUSD = Math.round(totalLKR / 300);
            serviceName = `Honda Vezel SUV (${dist} km, ${pax} Pax)`;
        } else if (service === 'montero') {
            totalLKR = Math.max(6000, dist * 240);
            totalUSD = Math.round(totalLKR / 300);
            serviceName = `Mitsubishi Montero SUV (${dist} km, ${pax} Pax)`;
        } else if (service === 'van') {
            totalLKR = Math.max(6000, dist * 240);
            totalUSD = Math.round(totalLKR / 300);
            serviceName = `Toyota KDH High-Roof Van (${dist} km, ${pax} Pax)`;
        } else {
            totalLKR = Math.max(3000, dist * 120);
            totalUSD = Math.round(totalLKR / 300);
            serviceName = `Private AC Vehicle (${dist} km, ${pax} Pax)`;
        }

        estPriceDisplay.innerHTML = `$${totalUSD} USD <span>(~${totalLKR.toLocaleString()} LKR)</span>`;

        if (estBookBtn) {
            const waMsg = `Hi Sanjeewa! I'd like to book ${serviceName}. Estimated cost: $${totalUSD} USD (${totalLKR.toLocaleString()} LKR). Please send me details.`;
            estBookBtn.href = `https://wa.me/94777034484?text=${encodeURIComponent(waMsg)}`;
        }
    }

    if (estService) {
        updatePaxOptions();
        estService.addEventListener('change', function() {
            updatePaxOptions();
            calculateEstimate();
        });
        if (estPax) estPax.addEventListener('change', calculateEstimate);
        if (estDistance) estDistance.addEventListener('input', calculateEstimate);
        calculateEstimate();
    }

    // 5. Track Carousel Slider Initializer (Business Channels & Round Tour Showcase)
    function initTrackCarousel(trackId, prevId, nextId, dotsId) {
        const track = document.getElementById(trackId);
        const prevBtn = document.getElementById(prevId);
        const nextBtn = document.getElementById(nextId);
        const dotsContainer = document.getElementById(dotsId);

        if (!track || !prevBtn || !nextBtn) return;
        const originalCards = Array.from(track.querySelectorAll('.card, .channel-carousel-card'));
        if (originalCards.length === 0) return;

        // Append clones to enable continuous forward infinite looping
        originalCards.forEach(card => {
            const clone = card.cloneNode(true);
            clone.classList.add('is-clone');
            track.appendChild(clone);
        });

        let currentIndex = 0;
        let autoPlayTimer = null;
        let isTransitioning = false;

        function getVisibleCount() {
            if (window.innerWidth <= 576) return 1;
            if (window.innerWidth <= 768) return 2;
            if (window.innerWidth <= 992) return 3;
            return 4;
        }

        function updateCarousel(instant = false) {
            const allCards = track.querySelectorAll('.card, .channel-carousel-card');
            if (allCards.length === 0) return;
            const cardWidth = originalCards[0].offsetWidth;
            const style = window.getComputedStyle(track);
            const gap = parseFloat(style.gap) || 24;
            const moveX = currentIndex * (cardWidth + gap);

            if (instant) {
                track.style.transition = 'none';
            } else {
                track.style.transition = 'transform 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
            }
            track.style.transform = `translateX(-${moveX}px)`;

            if (dotsContainer) {
                const dots = dotsContainer.querySelectorAll('.carousel-dot');
                const activeDotIdx = currentIndex % originalCards.length;
                dots.forEach((dot, idx) => {
                    dot.classList.toggle('active', idx === activeDotIdx);
                });
            }
        }

        function createDots() {
            if (!dotsContainer) return;
            dotsContainer.innerHTML = '';
            const maxDots = Math.max(1, originalCards.length - getVisibleCount() + 1);
            for (let i = 0; i < maxDots; i++) {
                const dot = document.createElement('div');
                dot.className = `carousel-dot ${i === 0 ? 'active' : ''}`;
                dot.addEventListener('click', () => {
                    if (isTransitioning) return;
                    currentIndex = i;
                    updateCarousel();
                    resetAutoPlay();
                });
                dotsContainer.appendChild(dot);
            }
        }

        function nextSlide() {
            if (isTransitioning) return;
            isTransitioning = true;
            currentIndex++;
            updateCarousel();

            if (currentIndex >= originalCards.length) {
                setTimeout(() => {
                    currentIndex = 0;
                    updateCarousel(true);
                    track.offsetHeight; // Force reflow
                    isTransitioning = false;
                }, 500);
            } else {
                setTimeout(() => {
                    isTransitioning = false;
                }, 500);
            }
        }

        function prevSlide() {
            if (isTransitioning) return;
            isTransitioning = true;
            if (currentIndex <= 0) {
                currentIndex = originalCards.length;
                updateCarousel(true);
                track.offsetHeight; // Force reflow
                currentIndex--;
                setTimeout(() => {
                    updateCarousel();
                    setTimeout(() => { isTransitioning = false; }, 500);
                }, 20);
            } else {
                currentIndex--;
                updateCarousel();
                setTimeout(() => { isTransitioning = false; }, 500);
            }
        }

        nextBtn.addEventListener('click', () => { nextSlide(); resetAutoPlay(); });
        prevBtn.addEventListener('click', () => { prevSlide(); resetAutoPlay(); });

        function startAutoPlay() {
            autoPlayTimer = setInterval(nextSlide, 5000);
        }

        function resetAutoPlay() {
            clearInterval(autoPlayTimer);
            startAutoPlay();
        }

        window.addEventListener('resize', () => {
            createDots();
            updateCarousel(true);
        });

        createDots();
        updateCarousel(true);
        startAutoPlay();
    }

    initTrackCarousel('channelsTrack', 'channelsPrev', 'channelsNext', 'channelsDots');
    initTrackCarousel('roundTourTrack', 'roundTourPrev', 'roundTourNext', 'roundTourDots');

    // 6. Multi-Day Tours Carousel Slider
    const toursTrack = document.getElementById('toursTrack');
    const toursPrevBtn = document.getElementById('toursPrev');
    const toursNextBtn = document.getElementById('toursNext');
    const toursDotsContainer = document.getElementById('toursDots');

    if (toursTrack && toursPrevBtn && toursNextBtn) {
        const originalCards = Array.from(toursTrack.querySelectorAll('.card'));
        if (originalCards.length > 0) {
            originalCards.forEach(card => {
                const clone = card.cloneNode(true);
                clone.classList.add('is-clone');
                toursTrack.appendChild(clone);
            });

            let currentIndex = 0;
            let isTransitioning = false;

            function getVisibleCount() {
                if (window.innerWidth <= 768) return 1;
                if (window.innerWidth <= 992) return 2;
                return 3;
            }

            function updateCarousel(instant = false) {
                const cardWidth = originalCards[0].offsetWidth;
                const gap = 28.8; // 1.8rem gap in pixels
                const moveX = currentIndex * (cardWidth + gap);

                if (instant) {
                    toursTrack.style.transition = 'none';
                } else {
                    toursTrack.style.transition = 'transform 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
                }
                toursTrack.style.transform = `translateX(-${moveX}px)`;

                if (toursDotsContainer) {
                    const dots = toursDotsContainer.querySelectorAll('.carousel-dot');
                    const activeDotIdx = currentIndex % originalCards.length;
                    dots.forEach((dot, idx) => {
                        dot.classList.toggle('active', idx === activeDotIdx);
                    });
                }
            }

            function createDots() {
                if (!toursDotsContainer) return;
                toursDotsContainer.innerHTML = '';
                const maxDots = Math.max(1, originalCards.length - getVisibleCount() + 1);
                for (let i = 0; i < maxDots; i++) {
                    const dot = document.createElement('div');
                    dot.className = `carousel-dot ${i === 0 ? 'active' : ''}`;
                    dot.addEventListener('click', () => {
                        if (isTransitioning) return;
                        currentIndex = i;
                        updateCarousel();
                    });
                    toursDotsContainer.appendChild(dot);
                }
            }

            toursNextBtn.addEventListener('click', () => {
                if (isTransitioning) return;
                isTransitioning = true;
                currentIndex++;
                updateCarousel();

                if (currentIndex >= originalCards.length) {
                    setTimeout(() => {
                        currentIndex = 0;
                        updateCarousel(true);
                        toursTrack.offsetHeight;
                        isTransitioning = false;
                    }, 500);
                } else {
                    setTimeout(() => { isTransitioning = false; }, 500);
                }
            });

            toursPrevBtn.addEventListener('click', () => {
                if (isTransitioning) return;
                isTransitioning = true;
                if (currentIndex <= 0) {
                    currentIndex = originalCards.length;
                    updateCarousel(true);
                    toursTrack.offsetHeight;
                    currentIndex--;
                    setTimeout(() => {
                        updateCarousel();
                        setTimeout(() => { isTransitioning = false; }, 500);
                    }, 20);
                } else {
                    currentIndex--;
                    updateCarousel();
                    setTimeout(() => { isTransitioning = false; }, 500);
                }
            });

            window.addEventListener('resize', () => {
                createDots();
                updateCarousel(true);
            });

            createDots();
            updateCarousel(true);
        }
    }

    // 7. Card Header Image Carousel (6-second Auto-play & Pre-buffered Image Loading)
    function initCardImageCarousels() {
        const carousels = document.querySelectorAll('.card-img-carousel');
        carousels.forEach(carousel => {
            const slides = carousel.querySelectorAll('.carousel-slide');
            const dots = carousel.querySelectorAll('.dot');
            const prevBtn = carousel.querySelector('.prev-btn');
            const nextBtn = carousel.querySelector('.next-btn');
            if (slides.length === 0) return;

            // Pre-buffer carousel images so next slide is instant
            slides.forEach(img => {
                img.removeAttribute('loading');
                if (img.complete === false && img.decode) {
                    img.decode().catch(() => {});
                }
            });

            let currentIndex = 0;
            let timer = null;

            function goToSlide(index) {
                slides[currentIndex].classList.remove('active');
                if (dots[currentIndex]) dots[currentIndex].classList.remove('active');

                currentIndex = (index + slides.length) % slides.length;

                slides[currentIndex].classList.add('active');
                if (dots[currentIndex]) dots[currentIndex].classList.add('active');
            }

            function startTimer() {
                stopTimer();
                timer = setInterval(() => {
                    goToSlide(currentIndex + 1);
                }, 6000);
            }

            function stopTimer() {
                if (timer) clearInterval(timer);
            }

            if (prevBtn) {
                prevBtn.addEventListener('click', (e) => {
                    e.preventDefault();
                    e.stopPropagation();
                    goToSlide(currentIndex - 1);
                    startTimer();
                });
            }

            if (nextBtn) {
                nextBtn.addEventListener('click', (e) => {
                    e.preventDefault();
                    e.stopPropagation();
                    goToSlide(currentIndex + 1);
                    startTimer();
                });
            }

            dots.forEach((dot, idx) => {
                dot.addEventListener('click', (e) => {
                    e.preventDefault();
                    e.stopPropagation();
                    goToSlide(idx);
                    startTimer();
                });
            });

            carousel.addEventListener('mouseenter', stopTimer);
            carousel.addEventListener('mouseleave', startTimer);

            startTimer();
        });
    }

    initCardImageCarousels();

    // 8. Mobile Phone Style Gallery & Lightbox Controller
    function initPhoneGallery() {
        const galleryGrid = document.getElementById('phoneGalleryGrid');
        const layoutBtns = document.querySelectorAll('.phone-layout-controls .layout-btn');
        const lightbox = document.getElementById('phoneLightbox');
        if (!galleryGrid || !lightbox) return;

        const lightboxOverlay = document.getElementById('phoneLightboxOverlay');
        const lightboxClose = document.getElementById('lightboxClose');
        const lightboxPrev = document.getElementById('lightboxPrev');
        const lightboxNext = document.getElementById('lightboxNext');
        const lightboxMainImg = document.getElementById('lightboxMainImg');
        const lightboxLoader = document.getElementById('lightboxLoader');
        const lightboxCounter = document.getElementById('lightboxCounter');
        const lightboxDownload = document.getElementById('lightboxDownload');
        const lightboxWpShare = document.getElementById('lightboxWpShare');
        const filmstripThumbs = document.querySelectorAll('.filmstrip-thumb');
        const photoCards = document.querySelectorAll('.phone-photo-card');

        let currentIndex = 0;
        const totalPhotos = photoCards.length;

        // View Mode Switcher
        layoutBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const view = this.getAttribute('data-view');
                layoutBtns.forEach(b => b.classList.remove('active'));
                this.classList.add('active');

                galleryGrid.classList.remove('view-grid', 'view-compact', 'view-feed');
                galleryGrid.classList.add(`view-${view}`);

                if (typeof AOS !== 'undefined') {
                    [100, 300, 500].forEach(delay => {
                        setTimeout(() => {
                            if (AOS.refreshHard) {
                                AOS.refreshHard();
                            } else if (AOS.refresh) {
                                AOS.refresh();
                            }
                        }, delay);
                    });
                }
            });
        });

        // Lightbox Functions
        function openLightbox(index) {
            currentIndex = parseInt(index, 10) || 0;
            if (currentIndex < 0) currentIndex = totalPhotos - 1;
            if (currentIndex >= totalPhotos) currentIndex = 0;

            updateLightboxContent();
            lightbox.classList.add('active');
            lightbox.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden';
        }

        function closeLightbox() {
            lightbox.classList.remove('active');
            lightbox.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = '';
        }

        function updateLightboxContent() {
            if (totalPhotos === 0) return;

            const card = photoCards[currentIndex];
            if (!card) return;

            const imgSrc = card.getAttribute('data-src');

            if (lightboxLoader) lightboxLoader.classList.add('active');

            const tempImg = new Image();
            tempImg.onload = function() {
                lightboxMainImg.src = imgSrc;
                if (lightboxLoader) lightboxLoader.classList.remove('active');
            };
            tempImg.src = imgSrc;

            if (lightboxCounter) {
                lightboxCounter.textContent = `Photo ${currentIndex + 1} of ${totalPhotos}`;
            }

            if (lightboxDownload) {
                lightboxDownload.href = imgSrc;
            }

            if (lightboxWpShare) {
                const text = encodeURIComponent(`Hi Sanjeewa! I saw this photo (#${currentIndex + 1}) from your gallery: ${imgSrc}`);
                lightboxWpShare.href = `https://wa.me/94777034484?text=${text}`;
            }

            // Sync filmstrip
            filmstripThumbs.forEach((thumb, idx) => {
                if (idx === currentIndex) {
                    thumb.classList.add('active');
                    thumb.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
                } else {
                    thumb.classList.remove('active');
                }
            });
        }

        // Event Listeners for Photo Cards
        photoCards.forEach((card) => {
            card.addEventListener('click', function() {
                const idx = this.getAttribute('data-index');
                openLightbox(idx);
            });
        });

        // Filmstrip Thumbs click
        filmstripThumbs.forEach((thumb) => {
            thumb.addEventListener('click', function(e) {
                e.stopPropagation();
                const idx = this.getAttribute('data-index');
                currentIndex = parseInt(idx, 10);
                updateLightboxContent();
            });
        });

        // Nav Buttons
        if (lightboxNext) {
            lightboxNext.addEventListener('click', (e) => {
                e.stopPropagation();
                currentIndex = (currentIndex + 1) % totalPhotos;
                updateLightboxContent();
            });
        }

        if (lightboxPrev) {
            lightboxPrev.addEventListener('click', (e) => {
                e.stopPropagation();
                currentIndex = (currentIndex - 1 + totalPhotos) % totalPhotos;
                updateLightboxContent();
            });
        }

        if (lightboxClose) lightboxClose.addEventListener('click', closeLightbox);
        if (lightboxOverlay) lightboxOverlay.addEventListener('click', closeLightbox);

        // Keyboard Controls
        document.addEventListener('keydown', function(e) {
            if (!lightbox.classList.contains('active')) return;
            if (e.key === 'Escape') {
                closeLightbox();
            } else if (e.key === 'ArrowRight') {
                currentIndex = (currentIndex + 1) % totalPhotos;
                updateLightboxContent();
            } else if (e.key === 'ArrowLeft') {
                currentIndex = (currentIndex - 1 + totalPhotos) % totalPhotos;
                updateLightboxContent();
            }
        });

        // Touch Swipe Gestures
        let touchStartX = 0;
        let touchEndX = 0;
        const stage = document.getElementById('phoneLightboxStage');

        if (stage) {
            stage.addEventListener('touchstart', function(e) {
                touchStartX = e.changedTouches[0].screenX;
            }, { passive: true });

            stage.addEventListener('touchend', function(e) {
                touchEndX = e.changedTouches[0].screenX;
                handleSwipe();
            }, { passive: true });
        }

        function handleSwipe() {
            const swipeThreshold = 40;
            if (touchEndX < touchStartX - swipeThreshold) {
                // Swipe Left -> Next
                currentIndex = (currentIndex + 1) % totalPhotos;
                updateLightboxContent();
            } else if (touchEndX > touchStartX + swipeThreshold) {
                // Swipe Right -> Prev
                currentIndex = (currentIndex - 1 + totalPhotos) % totalPhotos;
                updateLightboxContent();
            }
        }
    }

    initPhoneGallery();

    // 12. Interactive Departure Time Chips Selector for Day Excursions
    function initDepartureTimeChips() {
        const chipContainers = document.querySelectorAll('.departure-time-chips');
        chipContainers.forEach(container => {
            const chips = container.querySelectorAll('.time-chip:not(.single-time)');
            const card = container.closest('.card');
            if (!card) return;
            const bookBtn = card.querySelector('.btn-enquire');
            const baseText = container.getAttribute('data-base-text') || '';

            chips.forEach(chip => {
                chip.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    const wasActive = this.classList.contains('active');
                    chips.forEach(c => c.classList.remove('active'));

                    if (!wasActive) {
                        this.classList.add('active');
                        const selectedTime = this.getAttribute('data-time');
                        if (bookBtn && baseText) {
                            const message = `${baseText} (${selectedTime} departure)`;
                            const currentHref = bookBtn.getAttribute('href') || '';
                            const phoneMatch = currentHref.match(/wa\.me\/([^\?]+)/);
                            const phone = phoneMatch ? phoneMatch[1] : '';
                            bookBtn.setAttribute('href', `https://wa.me/${phone}?text=${encodeURIComponent(message)}`);
                        }
                    } else if (bookBtn && baseText) {
                        const currentHref = bookBtn.getAttribute('href') || '';
                        const phoneMatch = currentHref.match(/wa\.me\/([^\?]+)/);
                        const phone = phoneMatch ? phoneMatch[1] : '';
                        bookBtn.setAttribute('href', `https://wa.me/${phone}?text=${encodeURIComponent(baseText)}`);
                    }
                });
            });
        });
    }

    initDepartureTimeChips();
});


