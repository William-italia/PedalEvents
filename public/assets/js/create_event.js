// banner function
function previewImage(inputImg, imgPreviewElement) {
    const file = inputImg.files[0];

    if(file) {

        const imgUrl = URL.createObjectURL(file);
        imgPreviewElement.style.backgroundImage = `url(${imgUrl})`;
        imgPreviewElement.classList.add('');
    }
}

function initializePage() {
    const inputImg = document.getElementById('inputImg');
    const imgPreviewElement = document.getElementById('imgPreviewElement');

    inputImg.addEventListener('change', () => {
        previewImage(inputImg, imgPreviewElement);
    })
}

initializePage();