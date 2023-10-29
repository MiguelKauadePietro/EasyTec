// Captura elementos HTML do documento usando seletores
const carousel = document.querySelector('.carousel'); // Seleciona o elemento com a classe "carousel" (o contêiner do carrossel)
const prevButton = document.getElementById('prevButton'); // Seleciona o botão "Anterior" pelo ID
const nextButton = document.getElementById('nextButton'); // Seleciona o botão "Próxima" pelo ID
const slideWidth = document.querySelector('.slide').offsetWidth; // Obtém a largura de um slide (assumindo que todos os slides têm a mesma largura)

// Inicializa uma variável para rastrear o índice do slide atual
let currentIndex = 0;

// Adiciona um evento de clique ao botão "Anterior"
prevButton.addEventListener('click', () => {
    // Verifica se o índice atual não é o primeiro slide
    if (currentIndex > 0) {
        currentIndex--; // Decrementa o índice para mostrar o slide anterior
        updateCarousel(); // Chama a função para atualizar a posição do carrossel
    }
});

// Adiciona um evento de clique ao botão "Próxima"
nextButton.addEventListener('click', () => {
    // Verifica se o índice atual não é o último slide
    if (currentIndex < carousel.children.length - 1) {
        currentIndex++; // Incrementa o índice para mostrar o próximo slide
        updateCarousel(); // Chama a função para atualizar a posição do carrossel
    }
});

// Função para atualizar a posição do carrossel
function updateCarousel() {
    const offset = -currentIndex * slideWidth; // Calcula o deslocamento com base no índice
    carousel.style.transform = `translateX(${offset}px)`; // Aplica o deslocamento para mover o carrossel
}
