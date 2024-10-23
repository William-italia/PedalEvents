<section id="home-filtro" class="mx-16 md:mx-[10.3rem]">
        <div class="my-10 flex items-center justify-center">
            <form action="teste.php" method="post" enctype="multipart/form-data">
                <div class="w-[70%] h-full rounded-2xl">
                    <!-- banner -->
                    <div class="bg-gray-600 w-[100%] h-[30rem] rounded-t-2xl flex items-center justify-center relative overflow-hidden h-[500px] bg-cover bg-center"
                        style="background-image: url('./assets/img/
                    ');">
                        <!-- Campo de upload escondido -->
                        <input type="file" name="arquivo" id="arquivo" class="hidden">

                        <!-- Botão customizado para adicionar banner -->
                        <label for="arquivo"
                            class="absolute bottom-[10px] right-[10px] px-6 py-4 bg-white font-medium shadow-2xl rounded-xl cursor-pointer">
                            Adicione um banner
                        </label>

                    </div>
                    <!-- content -->
                    <div class="border-2 shadow-2xl p-[2rem] rounded-b-2xl">
                        <div class="flex">
                            <div class="w-full w-[72%]">
                                <!-- box-inputs -->
                                <div class="flex flex-col justify-center">
                                    <div class="flex flex-col">
                                        <label class="mb-2" for="">Nome do Evento:</label>
                                        <input name="nome_evento"
                                            class="border-[#D9D9D9] border-2 rounded-[.2rem] mr-[1.4rem] p-[.3rem]"
                                            type="text" value="Ciclismo na Praia">
                                    </div>
                                    <div class="flex items-center py-4">
                                        <div class="flex flex-col">
                                            <label class="mb-2" for="">Organizador:</label>
                                            <input name="organizador"
                                                class="border-[#D9D9D9] border-2 rounded-[.2rem] w-[20rem] mr-[1.4rem] p-[.3rem]"
                                                type="text" value="João Silva">
                                        </div>
                                        <div class="flex flex-col">
                                            <label class="mb-2" for="">Data:</label>
                                            <input name="data_evento"
                                                class="border-[#D9D9D9] border-2 rounded-[.2rem] w-[20rem] mr-[1.4rem] p-[.3rem]"
                                                type="datetime-local" value="2024-12-01T10:00">
                                        </div>
                                    </div>
                                    <div class="flex items-center py-4">
                                        <div class="flex flex-col">
                                            <label class="mb-2" for="">Cidade:</label>
                                            <input name="cidade"
                                                class="border-[#D9D9D9] border-2 rounded-[.2rem] w-[20rem] mr-[1.4rem] p-[.3rem]"
                                                type="text" value="São Paulo">
                                        </div>
                                        <div class="flex flex-col">
                                            <label class="mb-2" for="">Endereço do Evento:</label>
                                            <input name="endereco"
                                                class="border-[#D9D9D9] border-2 rounded-[.2rem] w-[20rem] mr-[1.4rem] p-[.3rem]"
                                                type="text" value="Avenida das Nações, 1234">
                                        </div>
                                    </div>
                                    <div class="flex items-center py-4">
                                        <div class="flex flex-col">
                                            <label class="mb-2" for="">Nível:</label>
                                            <input name="nivel"
                                                class="border-[#D9D9D9] border-2 rounded-[.2rem] w-[20rem] mr-[1.4rem] p-[.3rem]"
                                                type="text" value="Intermediário">
                                        </div>
                                        <div class="flex flex-col">
                                            <label class="mb-2" for="">Categoria:</label>
                                            <input name="categoria"
                                                class="border-[#D9D9D9] border-2 rounded-[.2rem] w-[20rem] mr-[1.4rem] p-[.3rem]"
                                                type="text" value="Ciclismo de Estrada">
                                        </div>
                                    </div>
                                    <div class="flex items-center py-4">
                                        <div class="flex flex-col">
                                            <label class="mb-2" for="">Vagas:</label>
                                            <input name="vagas"
                                                class="border-[#D9D9D9] border-2 rounded-[.2rem] w-[20rem] mr-[1.4rem] p-[.3rem]"
                                                type="text" value="50">
                                        </div>
                                        <div class="flex flex-col">
                                            <label class="mb-2" for="">KM:</label>
                                            <input name="km"
                                                class="border-[#D9D9D9] border-2 rounded-[.2rem] w-[20rem] mr-[1.4rem] p-[.3rem]"
                                                type="text" value="15">
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-10 mr-[1.8rem]">
                                    <ul id="topicos" class="flex flex-col space-y-10">
                                        <li>
                                            <div class="flex flex-col">
                                                <label class="mb-2" for="">Título do Tópico:</label>
                                                <input name="titulo_topico"
                                                    class="border-[#D9D9D9] border-2 rounded-[.2rem] w-[20rem] mr-[1.4rem] p-[.3rem]"
                                                    type="text" value="Informações Gerais">
                                            </div>

                                            <div class="flex flex-col my-4">
                                                <label for="">Conteúdo:</label>
                                                <textarea name="conteudo_topico"
                                                    class="border-[#D9D9D9] border-2 rounded-[.2rem] mr-[1.4rem] p-[.3rem] w-full h-[300px]">Venha participar do nosso evento de ciclismo na praia. Todos os níveis são bem-vindos!</textarea>
                                            </div>
                                        </li>
                                    </ul>

                                    <button id="create-topic"
                                        class="px-6 py-2 bg-[#00D1FF] rounded-[4px] shadow-xl">Adicionar
                                        Tópico</button>
                                </div>

                                <div class="mr-[1.4rem] mt-10">
                                    <button type="submit" class="py-2 w-full bg-[#00D1FF] rounded-[4px] shadow-xl">Criar
                                        Evento!</button>
                                </div>

                            </div>

                            <div class="border-l-2 px-4 ">
                                <div>
                                    <p>Inscrições abertas!</p>
                                    <p
                                        class="text-center w-full p-2 bg-[#AAAAAA] text-white text-lg my-4 cursor-pointer">
                                        Inscreva-se</p>
                                    <p class="border-b-2 pb-10">Evento ficará aberto até 28/12/2024 ou até o limite de
                                        vagas for atingido!</p>
                                </div>
                                <div class="flex flex-col">
                                    <ul id="links">
                                        <li>
                                            <div class="my-4 relative border-b-2">
                                                <label for="">Nome:</label>
                                                <input name="links[0][nome]" type="text"
                                                    class="border-[#D9D9D9] border-2 rounded-[.2rem] w-[20rem] mb-4 mr-[1.4rem] p-[.3rem]">

                                                <label class="" for="">Link:</label>
                                                <input name="links[0][url]" type="text"
                                                    class="mb-4 border-[#D9D9D9] border-2 rounded-[.2rem] w-[20rem] mr-[1.4rem] p-[.3rem]">
                                            </div>
                                        </li>
                                    </ul>
                                    <button id="create-link" class="p-2 bg-[#00D1FF] rounded-[4px] shadow-xl">Adicionar
                                        Link</button>
                                </div>
                            </div>
                        </div>
            </form>

        </div>
        </div>
        </div>
    </section>