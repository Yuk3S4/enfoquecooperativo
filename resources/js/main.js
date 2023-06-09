const mobileMenuBtn = document.getElementById('mobile-menu')
const cerrarMenuBtn = document.getElementById('cerrar-menu')
const menu = document.querySelector('.menu')

if ( menu ) {
    menu.classList.add('hidden')
}

if(mobileMenuBtn) {
    mobileMenuBtn.addEventListener('click', function() {
        menu.classList.remove('hidden')
        menu.classList.toggle('mostrar-main-menu');
    });
}

if(cerrarMenuBtn) {
    cerrarMenuBtn.addEventListener('click', function() {
        menu.classList.add('hidden');
        setTimeout(() => {
            menu.classList.remove('mostrar-main-menu');
            // menu.classList.remove('ocultar');
        }, 500);
    });
}

// Elimina la clase de mostrar en un tamaño de tablet y mayores
addEventListener('resize', function() {
    const anchoPantalla = document.body.clientWidth;
    if(anchoPantalla >= 768) {
        menu.classList.remove('mostrar-main-menu');
    }
})

// GO TOP BUTTON

const btnGoTopContainer = document.querySelector('.go-top-container')

if (btnGoTopContainer) {
    window.onscroll = () => {
        if ( document.documentElement.scrollTop > 100 ) {
            btnGoTopContainer.classList.add('show')
        } else {
            btnGoTopContainer.classList.remove('show')
        }
    }

    btnGoTopContainer.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        })
    })
}
