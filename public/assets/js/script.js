const step1 = document.getElementById('step1');
const step2 = document.getElementById('step2');
const createBtn = document.getElementById('createBtn');
const nextBtn = document.getElementById('nextBtn');
const backBtn = document.getElementById('backBtn');
const enterBtn = document.getElementById('enterBtn');
const img = document.getElementById('img');



nextBtn.addEventListener('click', () => {
    step1.style.display = 'none';
    step2.style.display = 'block';

    nextBtn.style.display = 'none';
    createBtn.style.display = 'block';

    enterBtn.style.display = 'none';
    backBtn.style.display = 'block';

    // img.innerHTML = '<img class="absolute inset-x-0 mx-auto" src="./assets/img/undraw_sculpting_-1-c9p.svg" alt="">';
})

backBtn.addEventListener('click', () => {
    step1.style.display = 'block';
    step2.style.display = 'none';

    nextBtn.style.display = 'block';
    createBtn.style.display = 'none';

    enterBtn.style.display = 'block';
    backBtn.style.display = 'none';

    // img.innerHTML = '<img class="absolute inset-x-0 mx-auto" src="./assets/img/undraw_team_up_re_84ok 1.svg" alt=""></img>';

});

