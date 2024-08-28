const menu = document.getElementById('side-menu');
const arrow = document.getElementById('arrow');
const arrowContainer = document.getElementById('arrow-container');
const ul = document.querySelector('#side-menu ul');
const containerItems = document.getElementById('container-items');
const containerMais = document.getElementById('containerMais');
const liSpans = document.querySelectorAll('#liSpans');

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
        
        liSpans.forEach(span => {
            span.classList.remove('hidden');
        });
        
    } else  {
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

arrow.addEventListener('click', openMenu);