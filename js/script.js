// Animation pour les boutons
const buttons = document.querySelectorAll('.btn');
buttons.forEach(button => {
    button.addEventListener('mouseover', () => {
        button.style.transform = 'scale(1.1)';
    });
    button.addEventListener('mouseout', () => {
        button.style.transform = 'scale(1)';
    });
});

// Animation fade-in sur les éléments
window.onload = () => {
    const fadeElements = document.querySelectorAll('.fade-in');
    fadeElements.forEach(el => {
        el.style.opacity = 1;
        el.style.transition = 'opacity 0.5s ease-in';
    });
};

document.getElementById('search-button').addEventListener('click', function() {
    const searchQuery = document.getElementById('search-bar').value.toLowerCase();
    const products = document.querySelectorAll('.product');

    products.forEach(function(product) {
        const productName = product.querySelector('h3').textContent.toLowerCase();
        if (productName.includes(searchQuery)) {
            product.style.display = 'block'; // Affiche le produit
        } else {
            product.style.display = 'none'; // Cache le produit
        }
    });
});

// document.addEventListener('DOMContentLoaded', function() {
//     (function animateproducts() {
//         const products = document.querySelectorAll('.product');
//         products.forEach(function(product, index) {
//             setTimeout(function() {
//                 product.style.opacity = '1';
//                 product.style.transform = 'translateY(0)';
//             }, index * 200);
//         });
//     })();
// });
