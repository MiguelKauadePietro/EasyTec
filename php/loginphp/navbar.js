// Função para remover a classe 'active' de todos os itens da navbar
function removeAllActiveClasses() {
    const navItems = document.querySelectorAll('nav-responsive');
    navItems.forEach(item => {
        item.classList.remove('active');
    });
}

// Adicione um evento de clique a cada item da navbar
document.addEventListener('DOMContentLoaded', function () {
    const navItems = document.querySelectorAll('nav-responsive');

    navItems.forEach(item => {
        item.addEventListener('click', function (e) {
            e.preventDefault(); // Evita que o link seja seguido

            removeAllActiveClasses(); // Remove 'active' de todos os itens
            item.classList.add('active'); // Adiciona 'active' ao item clicado
        });
    });
});
