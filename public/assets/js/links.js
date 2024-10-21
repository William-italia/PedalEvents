const buttonCreateLink = document.querySelector('#create-link');
const listLinks = document.querySelector('#links');
let linkIndex = 0; // Variável para criar nomes únicos para os inputs

buttonCreateLink.addEventListener('click', (e) => {
    e.preventDefault();

    // Cria o elemento <li>
    const listItem = document.createElement('li');
    
    // Cria o div container
    const divContainer = document.createElement('div');
    divContainer.classList.add('my-4', 'relative');

    // Cria o label e input para "Nome"
    const labelNome = document.createElement('label');
    labelNome.textContent = 'Nome:';
    const inputNome = document.createElement('input');
    inputNome.type = 'text';
    inputNome.name = `links[${linkIndex}][nome]`; // Nome dinâmico para PHP
    inputNome.classList.add('border-[#D9D9D9]', 'border-2', 'rounded-[.2rem]', 'w-[20rem]', 'mr-[1.4rem]', 'p-[.3rem]');

    // Cria o label e input para "Link"
    const labelLink = document.createElement('label');
    labelLink.textContent = 'Link:';
    const inputLink = document.createElement('input');
    inputLink.type = 'text';
    inputLink.name = `links[${linkIndex}][link]`; // Nome dinâmico para PHP
    inputLink.classList.add('border-[#D9D9D9]', 'border-2', 'rounded-[.2rem]', 'w-[20rem]', 'mr-[1.4rem]', 'p-[.3rem]');

    // Cria o botão de excluir
    const deleteButton = document.createElement('button');
    deleteButton.innerHTML = '<i class="fa-solid fa-trash absolute top-0 right-[5px]"></i>';
    deleteButton.type = 'button';
    deleteButton.classList.add('text-black', 'rounded');

    // Adiciona o evento de click no botão de deletar
    deleteButton.addEventListener('click', () => {
        listItem.remove();
    });

    // Adiciona os elementos ao div container
    divContainer.appendChild(labelNome);
    divContainer.appendChild(inputNome);
    divContainer.appendChild(labelLink);
    divContainer.appendChild(inputLink);
    divContainer.appendChild(deleteButton);

    // Adiciona o container dentro do li
    listItem.appendChild(divContainer);

    // Adiciona o li à lista de links
    listLinks.appendChild(listItem);

    // Incrementa o índice para os nomes únicos
    linkIndex++;
});
