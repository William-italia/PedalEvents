let linkIndex = 1; // Comece do 1 porque você já tem um link com índice 0
let topicIndex = 1;

document.getElementById('create-link').addEventListener('click', function(event) {
    event.preventDefault(); // Evita o envio do formulário


    if(linkIndex <= 3) {
        const linksList = document.getElementById('links');
        const newLink = document.createElement('li');
    
        newLink.innerHTML = `
            <div class="my-4 relative border-b-2">
                <label for="">Nome:</label>
                <input type="text" name="links[${linkIndex}][nome]" class="border-[#D9D9D9] border-2 rounded-[.2rem] w-[20rem] mr-[1.4rem] p-[.3rem]">
                <label for="">Link:</label>
                <input type="text" name="links[${linkIndex}][url]" class=" mb-4 border-[#D9D9D9] border-2 rounded-[.2rem] w-[20rem] mr-[1.4rem] p-[.3rem] border-b-2">
            </div>
        `;
    
        linksList.appendChild(newLink);
        linkIndex++; // Incrementa o índice para o próximo link
    }
    else {
        alert('limite de links atingido!');
    }
});

document.getElementById('create-topic').addEventListener('click', (e) => {
    e.preventDefault();

    if(topicIndex <= 3){
    const topicList = document.getElementById('topicos');
    const newTopic = document.createElement('li');

    newTopic.innerHTML = `
          <div class="flex flex-col">
                                  <label class="mb-2" for="">Título do Tópico:</label>
                                  <input name="links[${topicIndex}][topico]" class="border-[#D9D9D9] border-2 rounded-[.2rem] w-[20rem] mr-[1.4rem] p-[.3rem]" type="text" name="titulo_topico">
                                </div>
          
                                <div class="flex flex-col my-4">
                                    <label for="">Conteúdo:</label>
                                    <textarea name="links[${topicIndex}][conteudo]" class="border-[#D9D9D9] border-2 rounded-[.2rem] mr-[1.4rem] p-[.3rem] w-full h-[300px]" name="conteudo_topico"></textarea>
                                </div>
    `;

    topicList.appendChild(newTopic);
    topicIndex++;
    }
    else {
        alert('limite de topicos alcançado');
        const button = document.getElementById('create-topic');
        button.classList.add('hidden');
    }
    
});