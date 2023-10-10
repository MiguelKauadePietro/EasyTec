    // Obtenha todos os links da navbar
    var links = document.querySelectorAll('.navbar a');

    // Adicione um evento de clique a cada link
    links.forEach(function(link) {
        link.addEventListener('click', function() {
            // Remova a classe 'active' de todos os links
            links.forEach(function(link) {
                link.classList.remove('active');
            });

            // Adicione a classe 'active' apenas ao link clicado
            link.classList.add('active');
        });
    });