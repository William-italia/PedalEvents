<section id="login" class="flex h-screen">
    <!-- img -->
    <div class="hidden lg:block lg:w-1/2 lg:flex lg:items-center relative">
        <img class="absolute inset-x-0 inset-y-0 w-[300rem]" src="./assets/img/undraw_biking_kc-4-f-1.svg" alt="">
    </div>

    <!-- inputs -->
    <div
        class="bgGradiente w-full flex flex-col p-[6.25rem] lg:w-1/2 lg:p-0 lg:items-center lg:rounded-tl-[1.25rem] lg:rounded-bl-[1.25rem]">
        <h1 class="text-4xl mx-auto font-russo text-white my-24 "><span class="text-colorLogo">Pedal</span>
            Events
        </h1>

        <p class="font-roboto text-4xl mx-auto text-white font-bold mb-20">Acesse sua conta!</p>

        <!-- inputs do email e senha -->
        <div class="flex mx-auto flex-col space-y-4">
            <div class="flex flex-col text-white">
                <label for="" class="mb-2">Email:</label>
                <input type="text"
                    class="w-[18.75rem] p-2 border border-white bg-transparent rounded-md placeholder-white placeholder-opacity-50 focus:outline-none lg:w-[25rem]"
                    placeholder="Digite seu email">
            </div>
            <div class="flex flex-col text-white">
                <label for="" class="mb-2">Senha:</label>
                <input type="text"
                    class="w-[18.75rem] p-2 border border-white bg-transparent rounded-md placeholder-white placeholder-opacity-50 focus:outline-none lg:w-[25rem]"
                    placeholder="Digite sua senha">
            </div>
        </div>

        <!-- botoes de recuperação de conta, continuar, e criar -->
        <div class="mx-auto text-white mt-[3.1rem] lg:w-[25rem] w-full max-w-[18.75rem] lg:max-w-[25rem]">
            <a href="" class="opacity-80">Esqueceu sua senha?</a>
            <div class="flex flex-col space-y-4 text-center mt-2">
                <button class="w-full p-2 border rounded-md duration-200 hover:opacity-50">Entrar</button>
                <button class="w-full p-2 border rounded-md bgGradiente duration-200 hover:opacity-50">Crie uma
                    conta!</button>
            </div>
        </div>


    </div>
</section>