// Seleciona a navbar
const navbar = document.getElementById("navbar");


// Adiciona um ouvinte de evento para detectar o scroll
window.addEventListener("scroll", () => {
    if (window.scrollY > 50) { 
        navbar.classList.remove("bg-transparent");
        navbar.classList.add("bg-white"); // Altera para fundo branco
        navbar.classList.remove("text-white");
        navbar.classList.add("text-black"); // Altera texto para preto
    } else {
        navbar.classList.remove("bg-white"); // Remove o fundo branco
        navbar.classList.add("bg-transparent"); // Mantém fundo transparente
        navbar.classList.remove("text-black");
        navbar.classList.add("text-white"); // Mantém texto branco
    }
});

// Seleciona o carrossel
const carousel = document.getElementById('carousel');

let isDown = false;
let startX;
let scrollLeft;

// Adiciona a funcionalidade de arrastar
carousel.addEventListener('mousedown', (e) => {
    isDown = true;
    carousel.classList.add('cursor-grabbing');
    startX = e.pageX - carousel.offsetLeft;
    scrollLeft = carousel.scrollLeft;
});

carousel.addEventListener('mouseleave', () => {
    isDown = false;
    carousel.classList.remove('cursor-grabbing');
});

carousel.addEventListener('mouseup', () => {
    isDown = false;
    carousel.classList.remove('cursor-grabbing');
});

carousel.addEventListener('mousemove', (e) => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.pageX - carousel.offsetLeft;
    const walk = (x - startX) * 1; // Aumenta a velocidade do arrasto
    carousel.scrollLeft = scrollLeft - walk;
});

// Seleciona os botões de navegação
const nextButton = document.getElementById('next');
const prevButton = document.getElementById('prev');

// Adiciona eventos de clique para rolar para o início ou o final
nextButton.addEventListener('click', () => {
    carousel.scrollTo({ left: carousel.scrollWidth, behavior: 'smooth' });
});

prevButton.addEventListener('click', () => {
    carousel.scrollTo({ left: 0, behavior: 'smooth' });
});

// Seleciona o carrossel2
const carousel2 = document.getElementById('carousel2');

let isDown2 = false;
let startX2;
let scrollLeft2;

// Adiciona a funcionalidade de arrastar para o carrossel2
carousel2.addEventListener('mousedown', (e) => {
    isDown2 = true;
    carousel2.classList.add('cursor-grabbing');
    startX2 = e.pageX - carousel2.offsetLeft;
    scrollLeft2 = carousel2.scrollLeft;
});

carousel2.addEventListener('mouseleave', () => {
    isDown2 = false;
    carousel2.classList.remove('cursor-grabbing');
});

carousel2.addEventListener('mouseup', () => {
    isDown2 = false;
    carousel2.classList.remove('cursor-grabbing');
});

carousel2.addEventListener('mousemove', (e) => {
    if (!isDown2) return;
    e.preventDefault();
    const x2 = e.pageX - carousel2.offsetLeft;
    const walk2 = (x2 - startX2) * 1; // Aumenta a velocidade do arrasto
    carousel2.scrollLeft = scrollLeft2 - walk2;
});

// Seleciona os botões de navegação do carrossel2
const nextButton2 = document.getElementById('next2');
const prevButton2 = document.getElementById('prev2');

// Adiciona eventos de clique para rolar para o início ou o final no carrossel2
nextButton2.addEventListener('click', () => {
    carousel2.scrollTo({ left: carousel2.scrollWidth, behavior: 'smooth' });
});

prevButton2.addEventListener('click', () => {
    carousel2.scrollTo({ left: 0, behavior: 'smooth' });
});