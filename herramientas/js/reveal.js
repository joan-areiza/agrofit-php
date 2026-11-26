
// ============================================
// REVEAL ON SCROLL - UNIVERSAL
// Sin CSS propio | HTML | PHP | Bootstrap 5
// ============================================

(function () {
    'use strict';

    function initReveal() {

        // Evitar inicializaciones duplicadas
        if (window.__revealInitialized) return;
        window.__revealInitialized = true;

        const reducedMotion = window.matchMedia(
            '(prefers-reduced-motion: reduce)'
        ).matches;

        // Elementos que nunca deben animarse
        const excluded = [
            'nav',
            'header',
            'footer',
            'aside',
            '.navbar',
            '.offcanvas',
            '.modal',
            '.dropdown-menu',
            '.toast',
            'script',
            'style',
            'link',
            'meta',
            'svg',
            'button',
            'input',
            'textarea',
            'select',
            'option'
        ].join(',');

        // Buscar el área principal del contenido
        const contentRoot =
            document.querySelector('main') ||
            document.querySelector('#app') ||
            document.querySelector('#root') ||
            document.querySelector('.app') ||
            document.body;

        // Buscar elementos explícitos
        const explicitTargets = Array.from(
            document.querySelectorAll('[data-reveal]')
        );

        // Elementos automáticos para cualquier HTML
        const automaticTargets = Array.from(
            contentRoot.querySelectorAll(`
                section,
                article,
                .card,
                .alert,
                .table-responsive,
                .row > *,
                .container > h1,
                .container > h2,
                .container > h3,
                .container-fluid > h1,
                .container-fluid > h2,
                .container-fluid > h3,
                main > div,
                main > section,
                main > article
            `)
        );

        // Si existen atributos data-reveal,
        // se utilizan exclusivamente esos elementos.
        let targets = explicitTargets.length
            ? explicitTargets
            : automaticTargets;

        // Eliminar elementos excluidos y duplicados
        targets = [...new Set(targets)].filter(el =>
            !el.matches(excluded) &&
            !el.closest(excluded) &&
            !el.dataset.revealDone
        );

        if (!targets.length) return;

        // Buscar el contenedor que realmente tiene scroll
        function getScrollRoot(element) {

            let parent = element.parentElement;

            while (parent && parent !== document.body) {

                const style = window.getComputedStyle(parent);

                const overflow = [
                    style.overflow,
                    style.overflowY
                ].join(' ');

                if (
                    /(auto|scroll|overlay)/.test(overflow) &&
                    parent.scrollHeight > parent.clientHeight
                ) {
                    return parent;
                }

                parent = parent.parentElement;
            }

            return null;
        }

        // Animaciones disponibles
        function getAnimation(element) {

            const type = element.dataset.reveal || 'fade-up';

            const animations = {

                'fade-up': [
                    { opacity: 0, transform: 'translateY(25px)' },
                    { opacity: 1, transform: 'translateY(0)' }
                ],

                'fade-down': [
                    { opacity: 0, transform: 'translateY(-25px)' },
                    { opacity: 1, transform: 'translateY(0)' }
                ],

                'fade-left': [
                    { opacity: 0, transform: 'translateX(-25px)' },
                    { opacity: 1, transform: 'translateX(0)' }
                ],

                'fade-right': [
                    { opacity: 0, transform: 'translateX(25px)' },
                    { opacity: 1, transform: 'translateX(0)' }
                ],

                'fade-in': [
                    { opacity: 0 },
                    { opacity: 1 }
                ],

                'scale-in': [
                    { opacity: 0, transform: 'scale(0.95)' },
                    { opacity: 1, transform: 'scale(1)' }
                ]

            };

            return animations[type] || animations['fade-up'];
        }

        // Ejecutar animación
        function animateElement(element) {

            if (element.dataset.revealDone === '1') return;

            element.dataset.revealDone = '1';

            if (
                reducedMotion ||
                typeof element.animate !== 'function'
            ) {
                element.style.opacity = '1';
                return;
            }

            const delay = Math.max(
                0,
                Number(element.dataset.revealDelay) || 0
            ) * 100;

            element.animate(getAnimation(element), {

                duration: 600,
                delay: delay,
                easing: 'ease-out',
                fill: 'both'

            });

            // Animar barras de progreso si existen
            const progressBar = element.querySelector(
                '.progress-bar[aria-valuenow]'
            );

            if (progressBar) {

                const value = progressBar.getAttribute('aria-valuenow');

                progressBar.animate(
                    [
                        { width: '0%' },
                        { width: value + '%' }
                    ],
                    {
                        duration: 800,
                        delay: delay + 150,
                        easing: 'ease-out',
                        fill: 'both'
                    }
                );
            }
        }

        // Detectar elementos visibles
        if (
            reducedMotion ||
            !('IntersectionObserver' in window)
        ) {
            targets.forEach(animateElement);
            return;
        }

        // Agrupar elementos según su contenedor de scroll
        const groups = new Map();

        targets.forEach(element => {

            const root = getScrollRoot(element);

            if (!groups.has(root)) {
                groups.set(root, []);
            }

            groups.get(root).push(element);

        });

        // Crear observadores para cada contenedor
        groups.forEach((elements, root) => {

            const observer = new IntersectionObserver(
                (entries, obs) => {

                    entries.forEach(entry => {

                        if (entry.isIntersecting) {

                            animateElement(entry.target);

                            obs.unobserve(entry.target);
                        }

                    });

                },
                {
                    root: root,
                    threshold: 0.05,
                    rootMargin: '0px 0px 0px 0px'
                }
            );

            elements.forEach(element => {

                // Ocultar hasta que entre en pantalla
                element.style.opacity = '0';

                observer.observe(element);

            });

        });

    }

    // Inicialización segura
    if (document.readyState === 'loading') {

        document.addEventListener(
            'DOMContentLoaded',
            initReveal,
            { once: true }
        );

    } else {

        initReveal();

    }

})();
