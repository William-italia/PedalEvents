const seta = document.getElementById('seta');
const logo = document.getElementById('logo');
const lista = document.getElementById('lista');
const spans = document.querySelectorAll('#lista li span');
const icons = document.querySelectorAll('#lista li a i');
const h1 = document.querySelector('h1:nth-child(1)');
const menuBar = document.getElementById('menu-bar');
const telaBusca = document.getElementById('buscaAmigos');
const telaConversa = document.getElementById('conversas');
const chats = document.getElementById('chats');


function ajustaTamanhoIcones() {
    icons.forEach(i => {
        if (window.innerWidth <= 768 && menuBar.classList.contains('close')) {
            i.style.fontSize = '.8rem';
            seta.style.fontSize = '.8rem';
        } else {
            i.style.fontSize = '1.6rem';
            seta.style.fontSize = '1.6rem';
        }
    });
}

function ajustaDistanciaBuscaAmigos() {

    if (window.innerWidth <= 768 && menuBar.classList.contains('close') || menuBar.classList.contains('open')) {
        telaBusca.style.left = '3.5rem';
    }

    if (window.innerWidth > 768) {
        if (menuBar.classList.contains('close')) {
            telaBusca.style.left = '4.5rem';
            telaConversa.style.left = '4.5rem';
        } else if (menuBar.classList.contains('open')) {
            telaBusca.style.left = '17.9rem';
            telaConversa.style.left = '17.9rem';
        }

    }

}

function selecaoLi(liClicado) {
    function toggleVisibility(element) {
        element.classList.toggle('none');
    }

    if (liClicado.classList.contains('buscarAmigos')) {
        toggleVisibility(telaBusca);
        telaConversa.classList.add('none');
    } else if (liClicado.classList.contains('conversas')) {
        toggleVisibility(telaConversa);
        telaBusca.classList.add('none');
    } else {
        telaBusca.classList.add('none');
        telaConversa.classList.add('none');
    }
}


function selecaoIcon(iconClicado) {
    if (iconClicado.closest('li').classList.contains('buscarAmigos')) {
        if (telaBusca.classList.contains('none')) {
            telaBusca.classList.remove('none');
        } else {
            telaBusca.classList.add('none');
        }

    } else {
        telaBusca.classList.add('none');
    }

    if (iconClicado.closest('li').classList.contains('conversas')) {
        if (telaConversa.classList.contains('none')) {
            telaConversa.classList.remove('none');
        } else {
            telaConversa.classList.add('none');
        }
    } else {
        telaConversa.classList.add('none');
    }
}

function atualizaOpacidadeLi(liClicado) {
    document.querySelectorAll('#lista li').forEach(li => {
        li.classList.remove('icon-faded');
        li.classList.remove('opacity-80');
    });
    liClicado.classList.add('icon-faded');
    liClicado.classList.add('opacity-80');
}

function manipulaMenu() {
    if (seta && seta.classList.contains('rotate-0')) {
        logo.style.display = 'block';
        spans.forEach(span => span.classList.remove('hidden'));
        icons.forEach(icon => icon.style.marginRight = '.5rem');
        seta.classList.remove('rotate-0');
        menuBar.classList.add('open');
        menuBar.classList.remove('close');
        seta.style.transform = 'rotate(180deg)';
        seta.classList.remove('left-6');
        seta.style.padding = '1rem';
        lista.classList.remove('md:items-stretch');
        lista.style.alignItems = 'stretch';
    } else {
        logo.style.display = 'none';
        seta.style.transform = 'rotate(0deg)';
        seta.classList.add('rotate-0');
        menuBar.classList.remove('open');
        menuBar.classList.add('close');
        seta.classList.add('left-6');
        seta.style.padding = '0';
        seta.style.paddingTop = '1rem';
        spans.forEach(span => span.classList.add('hidden'));
        icons.forEach(icon => icon.style.marginRight = '0rem');
    }
}

function selecionandoChat(chatClicado) {
    document.querySelectorAll('#chats li').forEach(li => {
        if (!chatClicado.classList.contains('select')) {
            chatClicado.style.backgroundColor = 'red';
        }
    });
};


// function atualizaOpacidadeLi(liClicado) {
//     document.querySelectorAll('#lista li').forEach(li => {
//         li.classList.remove('icon-faded');
//         li.classList.remove('opacity-80');
//     });
//     liClicado.classList.add('icon-faded');
//     liClicado.classList.add('opacity-80');
// }

document.addEventListener('DOMContentLoaded', () => {

    // const text = h1.textContent;
    // const words = text.split(' ');
    // const coloredWords = words.map(word => {
    //     return `<span class="text-colorLogo">${word.charAt(0).toUpperCase()}</span>${word.slice(1)}`;
    // });

    // const coloredText = coloredWords.join(' ');
    // h1.innerHTML = coloredText;

    ajustaTamanhoIcones();
    ajustaDistanciaBuscaAmigos()

    window.addEventListener('resize', ajustaTamanhoIcones);
    window.addEventListener('resize', ajustaDistanciaBuscaAmigos);

    seta.addEventListener('click', () => {
        manipulaMenu();
        ajustaTamanhoIcones();
        ajustaDistanciaBuscaAmigos()
    });

    document.querySelectorAll('#lista li').forEach(li => {
        li.addEventListener('click', () => {
            atualizaOpacidadeLi(li);
            selecaoLi(li);
        });
    });

    document.querySelectorAll('#chats li').forEach(li => {
        li.addEventListener('click', () => {
            selecionandoChat(li);
        });
    });

    icons.forEach(icon => {
        icon.addEventListener('click', (event) => {
            event.stopPropagation();
            atualizaOpacidadeLi(icon.parentElement.parentElement);
            selecaoIcon(icon);
        });
    });

});
