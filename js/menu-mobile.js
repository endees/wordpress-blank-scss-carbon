class MenuMobile {
    constructor(element) {
        this.element = element;
        this.menuIsActive = false;
        this.menu = element.querySelector('.c-menu-mobile__menu');
        this.toggler = element.querySelector('.c-menu-mobile__toggler');

        this.toggler.addEventListener('click', () => this.toggleMenu());
    }

    toggleMenu() {
        this.menu.classList.toggle('is-active');
        this.toggler.classList.toggle('is-open');
        this.menuIsActive = !this.menuIsActive;

        this.toggleOverflow();
    }

    toggleOverflow() {
        if (this.menuIsActive) {
            document.body.style.overflow = 'hidden';
        } else {
            document.body.style.overflow = 'auto';
        }
    }
}

document.addEventListener('DOMContentLoaded', () => {
    const element = document.querySelector('.js-menu-mobile');

    if (element) {
        new MenuMobile(element);
    }
});