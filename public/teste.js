// Seleciona a navbar
const navbar = document.getElementById("navbar");

// Adiciona um ouvinte de evento para detectar o scroll
window.addEventListener("scroll", () => {
    if (window.scrollY > 50) { // Ajuste o valor conforme necessário
      navbar.classList.remove("bg-transparent"); // Remove classes
        navbar.classList.add("bg-black"); // Adiciona classes
      } else {
        navbar.classList.remove("bg-black"); // Remove classes
        navbar.classList.add("bg-transparent"); // Adiciona classes
    }
});
