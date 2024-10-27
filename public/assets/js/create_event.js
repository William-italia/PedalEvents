const btnAddLink = document.getElementById('create-link');
const btnRemoveLink = document.getElementById('delete-link');
const btnRemoveTopic = document.getElementById('delete-topic');
const btnAddTopic = document.getElementById('create-topic');

// banner function
function previewImage() {

    const inputImg = document.getElementById('inputImg');
    const file = inputImg.files[0];
    const imgPreviewElement = document.getElementById('imgPreviewElement'); 

    if(file) {

        const imgUrl = URL.createObjectURL(file);
        imgPreviewElement.style.backgroundImage = `url(${imgUrl})`;
        imgPreviewElement.classList.add('');
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

                    <input type="text" name="topico[0][titulo]" id="topico"
                        class="border-[#D9D9D9] border-2 rounded-[.2rem]  p-[.3rem] mb-4">
                </div>
                <div>
                    <label class="font-roboto font-medium text-lg mb-2"
                        for="conteudo">Conteúdo</label>
                    <textarea name="topico[0][conteudo]" id="conteudo"
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

function preview() {
    
}


function initializePage() {
   

    inputImg.addEventListener('change', previewImage);
    btnAddLink.addEventListener('click', createLink);
    btnAddTopic.addEventListener('click', createTopic);
    btnRemoveLink.addEventListener('click', removeLink);
    btnRemoveTopic.addEventListener('click', removeTopic);

    
}

initializePage();


