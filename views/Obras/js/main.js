document.addEventListener('DOMContentLoaded', function() {
    const heroImage = document.querySelector('.hero-image');
    const heroContent = document.getElementById('heroContent');
    const contentImages = document.querySelectorAll('.content-image');

    function markImageLoaded(imgEl) {
        if (!imgEl) return;
        imgEl.classList.add('loaded');
        if (imgEl.nextElementSibling && imgEl.nextElementSibling.classList.contains('loading-overlay')) {
            imgEl.nextElementSibling.classList.add('hidden');
        }
    }

    // Hero image: handle cached images and normal load
    if (heroImage) {
        if (heroImage.complete) {
            markImageLoaded(heroImage);
            setTimeout(() => heroContent?.classList.add('visible'), 300);
        } else {
            heroImage.addEventListener('load', () => {
                markImageLoaded(heroImage);
                setTimeout(() => heroContent?.classList.add('visible'), 300);
            });
            heroImage.addEventListener('error', () => markImageLoaded(heroImage));
        }
    }

    // Intersection observer for sections
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (!entry.isIntersecting) return;
            const targets = entry.target.querySelectorAll('.content-image, .text-content');
            targets.forEach(target => {
                if (target.classList.contains('content-image')) {
                    if (target.complete) {
                        markImageLoaded(target);
                    } else {
                        target.addEventListener('load', () => markImageLoaded(target), { once: true });
                        target.addEventListener('error', () => markImageLoaded(target), { once: true });
                    }
                } else if (target.classList.contains('text-content')) {
                    setTimeout(() => target.classList.add('visible'), 300);
                }
            });
        });
    }, {
        threshold: 0.2,
        rootMargin: '0px 0px -100px 0px'
    });

    document.querySelectorAll('.content-section').forEach(section => observer.observe(section));

    // Fallback: ensure images present at DOMContentLoaded get the error handler
    contentImages.forEach(img => {
        img.addEventListener('error', () => markImageLoaded(img));
        if (img.complete) {
            markImageLoaded(img);
        }
    });
});


