export class StarRating {
    constructor(container) {
        this.container = container;
        this.stars = container.querySelectorAll('.star-icon');
        this.input = container.parentElement.querySelector('[data-rating-input]');
        this.selectedRating = 0;
        
        this.init();
    }

    init() {
        this.stars.forEach((star, index) => {
            // При наведении - показываем предварительный выбор
            star.addEventListener('mouseenter', () => this.highlight(index + 1));
            
            // При уходе мыши - возвращаем к выбранному
            star.addEventListener('mouseleave', () => this.highlight(this.selectedRating));
            
            // При клике - запоминаем выбор
            star.addEventListener('click', () => {
                this.selectedRating = index + 1;
                this.input.value = this.selectedRating;
                this.highlight(this.selectedRating);
            });
        });
    }

    highlight(rating) {
        this.stars.forEach((star, index) => {
            if (index < rating) {
                star.classList.add('text-yellow-400');
            } else {
                star.classList.remove('text-yellow-400');
            }
        });
    }
}


