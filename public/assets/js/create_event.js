const btnAddLink = document.getElementById('create-link');
const btnRemoveLink = document.getElementById('delete-link');
const btnRemoveTopic = document.getElementById('delete-topic');
const btnAddTopic = document.getElementById('create-topic');
const btnPreview = document.getElementById('btnPreview');
const previewLinks = document.getElementById('preview-links');
const previewTopics = document.getElementById('preview-topics');


// banner function
function previewImage() {
    const inputImg = document.getElementById('inputImg');
    const file = inputImg.files[0];
    const imgPreviewElements = document.querySelectorAll('#imgPreviewElement'); // plural para indicar uma lista

    if (file) {
        const imgUrl = URL.createObjectURL(file);
        
        imgPreviewElements.forEach(imgPreviewElement => {
            imgPreviewElement.style.backgroundImage = `url(${imgUrl})`;
        });
    }
}

function createLink() {
    const lis = document.querySelectorAll('#links li'); 
    
    if (lis.length < 3) {
        const list = document.getElementById('links');
        
        const li = document.createElement('li');

        li.innerHTML = `
             <div class="flex flex-col space-y-2 my-4 relative">
                 <div class="flex justify-between">
                     <label class="font-roboto font-medium text-lg" for="link">Nome:</label>
                     <span class="cursor-pointer text-red-600" id="delete-link"><i class="fa-solid fa-trash"></i></span>
                 </div>
                 <input name="links[${lis.length}][nome]" type="text"
                     class="border-[#D9D9D9] border-2 rounded-[.2rem]  p-[.3rem]">

                 <label class="font-roboto font-medium text-lg" for="link">Link:</label>
                 <input name="links[${lis.length}][url]" type="text"
                     class="border-[#D9D9D9] border-2 rounded-[.2rem]  p-[.3rem]">
             </div>
        `;

        list.appendChild(li);

        const deleteButton = li.querySelector('#delete-link');
        deleteButton.addEventListener('click', removeLink);

    } else {
        alert('O maximo de links permitidos são 3');
    }
}


function removeLink(e) {
    const btnDelete = e.target;

    const li = btnDelete.closest('li');

    const inputs = li.querySelectorAll('input');

    const hasValue = Array.from(inputs).some(input => input.value !== '');

    if(hasValue) {
        if(confirm('Tem certeza?')) {
            li.remove();
        } 
    } else {
        li.remove();
            
        }

}

function createTopic() {
    const lis = document.querySelectorAll('#topics li');

    if(lis.length < 4) {
        const topics = document.getElementById('topics');

        const li = document.createElement('li');

        li.innerHTML = 
        `  <div class="flex flex-col mb-10 relative">
                <span class="cursor-pointer  absolute right-0 text-red-600" id="delete-topic"><i
                        class="fa-solid fa-trash"></i></span>
                <div class="w-[50%] flex flex-col">
                    <label class="font-roboto font-medium text-lg mb-2"
                        for="topico">Titulo do
                        Topico</label>

                    <input type="text" name="topico[${lis.length}][titulo]" 
                        class="border-[#D9D9D9] border-2 rounded-[.2rem]  p-[.3rem] mb-4">
                </div>
                <div>
                    <label class="font-roboto font-medium text-lg mb-2"
                        for="conteudo">Conteúdo</label>
                    <textarea name="topico[${lis.length}][conteudo]" 
                        class="border-[#D9D9D9] border-2 rounded-[.2rem] mr-[1.4rem] p-[.3rem] w-full h-[400px] mt-2"></textarea>
                </div>
            </div>`
        ;


        topics.appendChild(li);

        const deleteButton = li.querySelector('#delete-topic');
        deleteButton.addEventListener('click', removeLink);

    } else {
        alert('Limite de topicos atingido!');
    }
    
}

function removeTopic(e) {
    const btnDelete = e.target;

    const li = btnDelete.closest('li');

    const inputs = li.querySelectorAll('input');

    const hasValueInputs = Array.from(inputs).some(input => input.value !== '');

    if(hasValueInputs) {
        if(confirm('Tem certeza?')) {
            li.remove();
        }
    } else  {
        li.remove();
    }
}

function getForm() {
    const form = document.getElementById('form-event');
    const formData = {
        topicos: [],
        links: []
    };

    const inputs = form.querySelectorAll('input, textarea, select');

    inputs.forEach(input => {
        if (!input.name.startsWith('topico') && !input.name.startsWith('links')) {
            formData[input.name] = input.value;
        } else if (input.name.startsWith('topico')) {
            const topicIndex = parseInt(input.name.match(/\[(\d+)\]/)[1]);
            if (!formData.topicos[topicIndex]) {
                formData.topicos[topicIndex] = {};
            }
            if (input.name.includes('titulo')) {
                formData.topicos[topicIndex].titulo = input.value;
            } else if (input.name.includes('conteudo')) {
                formData.topicos[topicIndex].conteudo = input.value;
            }
        } else if (input.name.startsWith('links')) {
            const linkIndex = parseInt(input.name.match(/\[(\d+)\]/)[1]);
            if (!formData.links[linkIndex]) {
                formData.links[linkIndex] = {};
            }
            if (input.name.includes('nome')) {
                formData.links[linkIndex].nome = input.value;
            } else if (input.name.includes('url')) {
                formData.links[linkIndex].url = input.value;
            }
        }
    });

    return formData; 
}

function preview() {
    const formData = getForm();
    console.log(formData);
    
    // Atualiza o HTML
    selectSPAN('nameEvent', formData.nameEvent);
    selectSPAN('organizer', formData.organizer);
    selectSPAN('difficult', formData.difficulty);
    selectSPAN('date', formataData(formData.date));
    selectSPAN('category', formData.category);
    if(formData.city != '') {
        selectSPAN('city', `${formData.city.trim()}, ${formData.estado.toUpperCase()}`);
    }
    selectSPAN('slots', `Vagas: ${formData.slots}`);
    if(formData.neighborhood != '') {
        selectSPAN('address', `${formData.address} - ${formData.neighborhood}`);
    } else {
        selectSPAN('address', `${formData.address}`);
    }

    if(formData.neighborhoodEnd != '') {
        selectSPAN('addressEnd', `${formData.addressEnd} - ${formData.neighborhoodEnd}`);
    } else {
        selectSPAN('addressEnd', `${formData.addressEnd}`);
    }

    selectSPAN('km', `${formData.km} Km`);

    const desc = document.getElementById('desc');
    desc.innerText = `Evento ficará aberto até ${formataData(formData.dateLimit)} ou até o limite de vagas for atingido!`;

    previewLinks.innerHTML = ''; 
    previewTopics.innerHTML = ''; 

    formData.links.forEach(link => {
        if (link.nome !== '') {
            const li = document.createElement('li');
            const a = createA(link.nome, link.url);
            li.appendChild(a);
            previewLinks.appendChild(li);
        } 
    });

    formData.topicos.forEach(topic => {
        if(topic.titulo != '' && topic.conteudo != '' ) {
            const li = document.createElement('li');
            const div = document.createElement('div');

            div.innerHTML = `
            <div class="flex flex-col mb-10">
                <h2 class="text-xl underline mb-6 font-medium ">
                    ${topic.titulo}
                </h2>
                <p class="font-roboto text-1xl  leading-7">${topic.conteudo}</p>
            </div>

            `;

            li.appendChild(div);

            previewTopics.appendChild(li);
        }
    });

    const boxPreview = document.getElementById('box-preview').classList.remove('hidden');
}

function formataData(data) {
    // Converte para Date caso ainda seja uma string ou outro formato
    data = new Date(data);

    // Verifica se a conversão foi bem-sucedida
    if (isNaN(data.getTime())) {
        console.error("Data inválida:", data);
        return "Data inválida";
    }

    const dia = zeroEsquerda(data.getDate());
    const mes = zeroEsquerda(data.getMonth() + 1);
    const ano = data.getFullYear();
    const hora = zeroEsquerda(data.getHours());
    const min = zeroEsquerda(data.getMinutes());

    if(hora) {
        return `${dia}/${mes}/${ano} às ${hora}:${min}`;
    } else {
        return `${dia}/${mes}/${ano}`;
    }

}

function zeroEsquerda(num) {
    return num >= 10 ? num : `0${num}`;
}

function createA(content, url) {
    const a = document.createElement('a');
    a.innerHTML = `<i class="fa-solid fa-up-right-from-square mr-2"></i> ${content}`;
    a.href = url;
    return a;
}


function selectSPAN(elementId, content) {
    const element = document.getElementById(elementId);
    element.innerHTML = ''; // Limpa o conteúdo anterior, mas mantém o ícone
    element.innerHTML = content;
}




function initializePage() {
   

    inputImg.addEventListener('change', previewImage);
    btnAddLink.addEventListener('click', createLink);
    btnAddTopic.addEventListener('click', createTopic);
    btnRemoveLink.addEventListener('click', removeLink);
    btnRemoveTopic.addEventListener('click', removeTopic);
    
}

initializePage();
