import { initMobileMenu } from "./modules/mobileMenu";
import { FaqComponent } from './modules/faq';

document.addEventListener('DOMContentLoaded', () => {
    initMobileMenu();

    document.querySelectorAll('[data-component="faq"]').forEach(el => {
        new FaqComponent(el);
    });
});

    
