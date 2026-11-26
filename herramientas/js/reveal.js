// =========================
// REVEAL ON SCROLL (SIN CSS PROPIO)
// Funciona con o sin atributos [data-reveal] en cualquier PHP
// =========================
(function initReveal() {
    function runReveal() {
        const explicitTargets = Array.from(document.querySelectorAll('[data-reveal]'));

        const fallbackTargets = explicitTargets.length
            ? []
            : Array.from(document.querySelectorAll(
                'main .encabezado-modulo, main .table-responsive, main .card, main .alert, main .row > div, section.hero .text-box, section.hero .row > div, section .container > h1, section .container > h2'
            )).filter((el) => !el.closest('.modal') && !el.closest('.offcanvas') && !el.closest('aside'));

        const targets = explicitTargets.length ? explicitTargets : fallbackTargets;
        if (!targets.length) return;

        const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

        function getKeyframes(el) {
            const type = el.getAttribute('data-reveal') || 'fade-up';
            switch (type) {
                case 'fade-down':
                    return [
                        { opacity: 0, transform: 'translateY(-20px)' },
                        { opacity: 1, transform: 'translateY(0)' }
                    ];
                case 'fade-left':
                    return [
                        { opacity: 0, transform: 'translateX(-24px)' },
                        { opacity: 1, transform: 'translateX(0)' }
                    ];
                case 'fade-right':
                    return [
                        { opacity: 0, transform: 'translateX(24px)' },
                        { opacity: 1, transform: 'translateX(0)' }
                    ];
                case 'scale-in':
                    return [
                        { opacity: 0, transform: 'scale(0.96)' },
                        { opacity: 1, transform: 'scale(1)' }
                    ];
                case 'fade-in':
                    return [
                        { opacity: 0 },
                        { opacity: 1 }
                    ];
                case 'fade-up':
                default:
                    return [
                        { opacity: 0, transform: 'translateY(20px)' },
                        { opacity: 1, transform: 'translateY(0)' }
                    ];
            }
        }

        function animateElement(el) {
            if (el.dataset.revealDone === '1') return;
            el.dataset.revealDone = '1';
            el.classList.add('is-visible');

            if (reducedMotion || typeof el.animate !== 'function') {
                el.style.opacity = '1';
                return;
            }

            const delayStep = Number(el.getAttribute('data-reveal-delay') || 0);
            const delay = delayStep * 90;

            el.animate(getKeyframes(el), {
                duration: 550,
                delay: delay,
                easing: 'ease-out',
                fill: 'both'
            });

            const progressBar = el.querySelector('.progress-bar[aria-valuenow]');
            if (progressBar) {
                const value = progressBar.getAttribute('aria-valuenow');
                progressBar.animate(
                    [{ width: '0%' }, { width: `${value}%` }],
                    {
                        duration: 750,
                        delay: delay + 120,
                        easing: 'ease-out',
                        fill: 'both'
                    }
                );
            }
        }

        if (reducedMotion || !('IntersectionObserver' in window)) {
            targets.forEach(animateElement);
            return;
        }

        const observer = new IntersectionObserver(
            (entries, obs) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        animateElement(entry.target);
                        obs.unobserve(entry.target);
                    }
                });
            },
            {
                threshold: 0.05,
                rootMargin: '0px 0px 0px 0px'
            }
        );

        targets.forEach((el) => observer.observe(el));

        // Respaldo para elementos ya visibles al cargar o tras hacer scroll
        const checkVisible = () => {
            const vh = window.innerHeight || document.documentElement.clientHeight;
            targets.forEach((el) => {
                if (el.dataset.revealDone === '1') return;
                const rect = el.getBoundingClientRect();
                if (rect.top < vh && rect.bottom > 0) {
                    animateElement(el);
                    observer.unobserve(el);
                }
            });
        };

        window.addEventListener('scroll', checkVisible, { passive: true });
        setTimeout(checkVisible, 120);
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', runReveal);
    } else {
        runReveal();
    }
})();