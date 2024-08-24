<section id="cria-conta" class="flex h-screen">
    <!--  -->
    <div
        class="bgGradiente w-full flex flex-col p-[6.25rem] lg:w-1/2 lg:p-0 lg:items-center lg:rounded-tr-[1.25rem] lg:rounded-br-[1.25rem]">
        <h1 class="text-4xl mx-auto font-russo text-white my-10 lg:mt-[10rem] lg:mb-16"><span
                class="text-colorLogo">Pedal</span>
            Events
        </h1>

        <p class="font-roboto text-3xl text-center mx-auto text-white font-bold mb-10">Crie sua conta!</p>

        <!-- inputs do email e senha -->
        <div id="step1" class="flex mx-auto flex-col space-y-4">
            <div class="flex flex-col text-white">
                <label for="" class="mb-2">Nome Completo:</label>
                <input type="text"
                    class="w-[18.75rem] p-2 border border-white bg-transparent rounded-md placeholder-white placeholder-opacity-50 focus:outline-none lg:w-[25rem]"
                    placeholder="Digite seu email">
            </div>
            <div class="flex flex-col text-white">
                <label for="" class="mb-2">CPF:</label>
                <input type="text"
                    class="w-[18.75rem] p-2 border border-white bg-transparent rounded-md placeholder-white placeholder-opacity-50 focus:outline-none lg:w-[25rem]"
                    placeholder="Digite sua senha">
            </div>
            <div class="flex flex-col text-white">
                <label for="" class="mb-2">Sua cidade:</label>
                <input type="text"
                    class="w-[18.75rem] p-2 border border-white bg-transparent rounded-md placeholder-white placeholder-opacity-50 focus:outline-none lg:w-[25rem]"
                    placeholder="Digite sua senha">
            </div>
            <div class="flex flex-col text-white">
                <label for="" class="mb-2">Data de nascimento:</label>
                <input type="text"
                    class="w-[18.75rem] p-2 border border-white bg-transparent rounded-md placeholder-white placeholder-opacity-50 focus:outline-none lg:w-[25rem]"
                    placeholder="Digite sua senha">
            </div>
        </div>
        <div id="step2" class="hidden flex mx-auto flex-col space-y-4">
            <div class="flex flex-col text-white">
                <label for="" class="mb-2">Email:</label>
                <input type="text"
                    class="w-[18.75rem] p-2 border border-white bg-transparent rounded-md placeholder-white placeholder-opacity-50 focus:outline-none lg:w-[25rem]"
                    placeholder="Digite seu email">
            </div>
            <div class="flex flex-col text-white">
                <label for="" class="mb-2">Sua senha:</label>
                <input type="text"
                    class="w-[18.75rem] p-2 border border-white bg-transparent rounded-md placeholder-white placeholder-opacity-50 focus:outline-none lg:w-[25rem]"
                    placeholder="Digite sua senha">
            </div>
            <div class="flex flex-col text-white">
                <label for="" class="mb-2">Confirme sua senha:</label>
                <input type="text"
                    class="w-[18.75rem] p-2 border border-white bg-transparent rounded-md placeholder-white placeholder-opacity-50 focus:outline-none lg:w-[25rem]"
                    placeholder="Digite sua senha">
            </div>
        </div>

        <!-- botoes de recuperação de conta, continuar, e criar -->
        <div class="mx-auto text-white mt-[3.1rem] lg:w-[25rem] w-full max-w-[18.75rem] lg:max-w-[25rem]">
            <div class="flex flex-col space-y-4 text-center mt-2">
                <!-- step1 -->
                <button id="nextBtn" class="w-full p-2 border rounded-md duration-200 hover:opacity-50">Próxima
                    página</button>
                <button id="enterBtn"
                    class="w-full p-2 border rounded-md bgGradiente duration-200 hover:opacity-50">Entrar</button>

                <!-- step 2 -->
                <button id="createBtn"
                    class="hidden w-full p-2 border rounded-md duration-200 hover:opacity-50">Criar
                    Conta!</button>
                <button id="backBtn"
                    class="hidden w-full p-2 border rounded-md bgGradiente duration-200 hover:opacity-50">voltar</button>
            </div>
        </div>

    </div>


    <!-- img-->
    <div id="img" class="hidden lg:block lg:w-1/2 lg:flex lg:items-center relative">
        <img class="absolute inset-x-0 mx-auto" src="./assets/img/undraw_team_up_re_84ok 1.svg" alt="">
    </div>
</section>
<script src="./assets/js/script.js"></script>