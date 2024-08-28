const menu = document.getElementById('side-menu');
const arrow = document.getElementById('arrow');
const arrowContainer = document.getElementById('arrow-container');
const ul = document.querySelector('#side-menu ul');
const containerItems = document.getElementById('container-items');
const containerMais = document.getElementById('containerMais');
const liSpans = document.querySelectorAll('#liSpans');
const logo = document.getElementById('logo');
const create = document.getElementById('create');
const mais = document.getElementById('mais');
const buscaAmigos = document.getElementById('buscaAmigos');
const boxUsers = document.getElementById('boxUsers');

function openMenu() {
    if(arrow.classList.contains('close')) {
        menu.classList.add('open');
        arrow.classList.add('open');
        menu.classList.remove('close');
        arrow.classList.remove('close');
        arrowContainer.classList.remove('items-center');
        arrow.style.transform = 'rotate(180deg)';
        containerItems.classList.remove('items-center');
        containerMais.classList.remove('items-center');
        logo.classList.remove('hidden');
        create.classList.remove('left-8');
        create.style.left = '4rem';
        mais.classList.remove('left-8');
        mais.style.left = '4rem';

        liSpans.forEach(span => {
            span.classList.remove('hidden');
        });
        
    } else  {
        create.classList.add('left-8');
        mais.classList.add('left-8');
        create.style.left = '2rem';
        mais.style.left = '2rem';
        logo.classList.add('hidden');
        containerItems.classList.add('items-center');
        arrow.style.transform = 'rotate(0deg)';
        arrowContainer.classList.add('items-center');
        menu.classList.remove('open');
        arrow.classList.remove('open');
        menu.classList.add('close');
        arrow.classList.add('close');
        containerMais.classList.add('items-center');
        
        liSpans.forEach(span => {
            span.classList.add('hidden');
        });
    }
}

document.querySelectorAll('li i').forEach(icon => {
    icon.addEventListener('mouseover', (icon) => {
        if(arrow.classList.contains('close')) {
            const listItem = icon.target.closest('li');
            const tooltip = listItem.querySelector('#Tooltip');
            if (tooltip) {
                tooltip.style.opacity = '1'; // Exemplo de ação: mostrar o tooltip
            } 
        } 
    
    });

    icon.addEventListener('mouseout', (event) => {
        const listItem = event.target.closest('li');
        const tooltip = listItem.querySelector('#Tooltip');
        if (tooltip) {
            tooltip.style.opacity = '0'; // Exemplo de ação: esconder o tooltip
        }
    });

});

document.querySelectorAll('li').forEach((li) => {
    li.addEventListener('click', () => {
        if(li.id === 'liCriar') {
            const boxCreate = li.querySelector('#create');    
                boxCreate.classList.toggle('hidden');
        }

        if(li.id === 'liMais') {
            const boxMais = li.querySelector('#mais');
            boxMais.classList.toggle('hidden');
        }

        if(li.id === 'liAmigos') {
            if(buscaAmigos.classList.contains('close')) {
                buscaAmigos.classList.remove('close');
                buscaAmigos.classList.remove('opacity-0');
                buscaAmigos.classList.add('opacity-100');
                buscaAmigos.classList.add('open');
                boxUsers.classList.remove('close');
                boxUsers.classList.add('open');
            } else {
                buscaAmigos.classList.add('close');
                boxUsers.classList.add('close');
                boxUsers.classList.remove('open');
                buscaAmigos.classList.remove('opacity-100');
                buscaAmigos.classList.remove('open');
            }
        }
    })
    
});


arrow.addEventListener('click', openMenu);