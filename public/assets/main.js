const menuBtn = document.getElementById('menu-btn');
const mobileMenu = document.getElementById('mobile-menu');

menuBtn.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
});

 // Variable to track the currently opened FAQ
 let currentFAQ = null;

function toggleFAQ(faqNumber) {
// Close the previously opened FAQ
if (currentFAQ && currentFAQ !== faqNumber) {
    const previousFAQ = document.getElementById('faq-' + currentFAQ);
    previousFAQ.style.maxHeight = '0px';
}

// Toggle the clicked FAQ
const currentElement = document.getElementById('faq-' + faqNumber);
if (currentElement.style.maxHeight === '0px' || !currentElement.style.maxHeight) {
    currentElement.style.maxHeight = currentElement.scrollHeight + 'px';
    currentFAQ = faqNumber;
} else {
    currentElement.style.maxHeight = '0px';
    currentFAQ = null;
}
}

// Anismasi

function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

function handleScroll() {
    const fadeElements = document.querySelectorAll('.fade-in');
    fadeElements.forEach((element) => {
        if (isInViewport(element)) {
            element.classList.add('visible');
        }
    });
}

window.addEventListener('scroll', handleScroll);
window.addEventListener('DOMContentLoaded', handleScroll); 

function toggleWaliForm() {
    const wali = document.getElementById('wali').value;
    const formWali = document.getElementById('form_wali');
    if (wali === 'lainnya') {
        formWali.classList.remove('hidden');
    } else {
        formWali.classList.add('hidden');
    }
}


