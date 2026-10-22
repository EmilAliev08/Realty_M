export class FaqComponent {
    constructor(element) {
        this.element = element;
        this.buttons = element.querySelectorAll('[data-action="toggle"]');
        this.init();
    }

    init() {
        this.buttons.forEach(button => {
            button.addEventListener('click', (e) => this.toggle(e));
        });
    }

    toggle(event) {
        const button = event.currentTarget;
        const answer = button.nextElementSibling;
        const icon = button.querySelector('.faq-icon');

        answer.classList.toggle('hidden');
        if (icon) icon.classList.toggle('rotate-180');
    }
}


