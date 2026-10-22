import { initMobileMenu } from "./modules/mobileMenu";
import { FaqComponent } from './modules/faq';
import { StarRating } from './modules/starRating';

document.addEventListener('DOMContentLoaded', () => {
    initMobileMenu();

    document.querySelectorAll('[data-component="faq"]').forEach(el => {
        new FaqComponent(el);
    });

    // Рейтинг звёзд
    document.querySelectorAll('[data-star-rating]').forEach(container => {
        new StarRating(container);
    });
});

    
