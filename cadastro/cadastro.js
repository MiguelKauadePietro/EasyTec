const mode = document.getElementById('mode_icon');

mode.addEventListener('click', () => {
    const form = document.getElementById('login_form');
    const fundo = document.getElementsById('container');

    if(mode.classList.contains('fa-moon')) {
        mode.classList.remove('fa-moon');
        mode.classList.add('fa-sun');

        form.classList.add('dark');
        fundo.classList.add('dark');
        return ;
    }
    
    mode.classList.remove('fa-sun');
    mode.classList.add('fa-moon');

    form.classList.remove('dark');
    fundo.classList.remove('dark');
});