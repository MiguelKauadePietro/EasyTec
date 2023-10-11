const mode = document.getElementById('mode_icon');


mode.addEventListener('click', () => {
    const form = document.getElementById('login_form');
    

    if(mode.classList.contains('fa-moon')) {
        mode.classList.remove('fa-moon');
        mode.classList.add('fa-sun');

        form.classList.add('dark');
        return;
    }

    mode.classList.remove('fa-sun');
    mode.classList.add('fa-moon');

    form.classList.remove('dark');
});

const mode2 = document.getElementById('mode_icone2');
mode2.addEventListener('click', () => {
    const fundo = document.getElementById('container');

    if(mode2.classList.contains('fa-moon')){
        mode2.classList.remove('fa-moon');
        mode2.classList.add('fa-sun');

        fundo.classList.add('dark');
        return;
    }
        mode2.classList.remove('fa-sun');
        mode2.classList.add('fa-moon');

        fundo.classList.remove('dark');

});