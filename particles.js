particlesJS('particles-js', {
    particles: {
        number: {
        value: 80,
        density: {
            enable: true,
            value_area: 800
        }
        },
        color: {
        value: '#36013F'
        },
        shape: {
        type: 'star',
        },
        opacity: {
        value: 0.5,
        anim: {
            enable: true,
            speed: 1,
            opacity_min: 0.1,
        }
        },
        size: {
        value: 5,
        anim: {
            enable: true,
            speed: 10,
            size_min: 0.1,
        }
        },
        move: {
        enable: true,
        speed: 6,
        direction: 'none',
        random: true,
        straight: false,
        out_mode: 'out',
        bounce: false
        }
    },
    interactivity: {
        detect_on: 'canvas',
        events: {
        onhover: {
            enable: true,
            mode: 'repulse'
        },
        onclick: {
            enable: true,
            mode: 'push'
        }
        }
    },
    retina_detect: true
});