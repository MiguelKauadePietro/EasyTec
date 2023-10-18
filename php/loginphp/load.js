window.onload = function() {
    // Quando a página estiver completamente carregada
    var loader = document.querySelector('.loader-wrapper');
    var content = document.querySelector('.content');

    // Esconde a tela de carregamento e mostra o conteúdo
    loader.style.display = 'none';
    content.style.display = 'block';
}
