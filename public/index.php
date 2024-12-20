<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedal Events | Inicio</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Russo+One&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Protest+Revolution&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="../input.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="">
    <header id="apresentation">
        <nav id="navbar"
            class="bg-transparent fixed w-full h-16 flex flex-col justify-center px-[210px] z-50 text-white">
            <!-- container -->
            <div class="flex justify-between items-center ">
                <div>
                    <h2 class="font-russo text-2xl "><span class="text-color-primary">Pedal</span> Events</h2>
                </div>

                <ul class="flex items-center space-x-8 font-normal">
                    <li><a href="./login.php" class="hover:text-color-primary duration-200">Entrar</a></li>
                    <li>
                        <a href="./criando_conta.php"
                            class="bg-color-primary  font-medium px-4 py-2 block rounded-[4px] hover:opacity-80 duration-200 text-white">
                            Explorar
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="h-[100vh]">
        <!-- global container -->
        <div class="relative h-full bg-center bg-cover" style="background-image: url(./assets/img/bg-index1.png);">
            <div class="absolute inset-0 bg-[#16161D] opacity-[92%] z-0"></div>
            <div class="absolute inset-0 top-[1.5rem] h-full bg-center bg-cover z-20"
                style="background-image: url(./assets/img/blur.png);"></div>
            <div class="absolute inset-0 top-[1.5rem] h-full bg-center bg-cover z-20"
                style="background-image: url(./assets/img/blur.png);"></div>

            <!-- container principal -->
            <div class="relative h-full px-[210px] pt-16 text-white flex  z-40">
                <div class="flex flex-col items-start justify-center space-y-12">
                    <h2 class="text-[50px] font-roboto font-black w-[40%]">Descubra eventos <span
                            class="font-protest text-color-primary">Emocionantes</span> de ciclismo na
                        sua região!</h2>
                    <p class="font-roboto font-normal text-[20px] w-[30%]">Explorar novas trilhas e se aventurar em
                        novos
                        caminhos faz parte da experiência. Vamos juntos
                        descobrir a beleza do ciclismo!</p>
                    <a href="./criando_conta.php"
                        class="bg-color-primary text-black font-medium text-[20px] py-[1rem] px-8 block rounded-[4px] hover:opacity-85 duration-200">Criar
                        uma
                        conta!</a>
                </div>
            </div>
            <img class="absolute top-[15rem] left-[50rem] z-10" src="./assets/img/bolona.png" alt="">
            <img class="absolute bottom-0 left-[46rem] z-10" src="./assets/img/ciclista-massa.svg" alt="">
            <div class="absolute top-[12rem] right-[25rem] text-white z-40">
                <div class="text-center font-roboto">
                    <p class="text-[70px] font-black text-color-primary">+30</p>
                    <p class="text-[30px]">Eventos Disponiveis</p>
                </div>
            </div>
        </div>

    </main>
    <section class="relative z-40 bg-[#16161D] h-[100vh] w-full">
        <!-- global container -->
        <div
            class=" absolute top-[-5rem] h-full px-[210px]  w-full text-white text-center flex flex-col items-center pb-[40px]">
            <h2 class="text-[4rem] font-roboto font-medium mb-[40px]">Veja nossos planos</h2>
            <p class="text-[20px] font-roboto font-normal mb-[40px] w-[60%] text-center">Descubra, crie e participe de
                eventos de
                ciclismo
                com facilidade. Conecte-se com outros ciclistas,
                organize suas atividades e acesse recursos exclusivos. Tudo isso em uma plataforma intuitiva, projetada
                para transformar sua paixão em ação.</p>

            <div class="w-full flex items-center justify-between mt-20">
                <div
                    class="flex flex-col items-center border-4 border-[#c5c5c5] w-[400px] h-[600px] rounded-[1rem] p-6 space-y-4">
                    <h1 class="font-roboto font-bold text-[36px]">Plano Gratuito</h1>
                    <p class="text-[20px]">Ideal para usuários que estão começando</p>
                    <p class="text-[40px] font-bold">0R$<span class="text-[#C5C5C5] text-xl">/mês</span></p>
                    <a href="#"
                        class="rounded-full bg-[#8e8e8e] hover:opacity-85 duration-200 text-black font-bold text-[20px] w-[80%] self-center block py-2 px-6">Começar</a>
                    <ul class="self-start">
                        <li class="text-[20px]"><i class="fa-solid fa-check text-green-500 mr-2"></i>Participar de
                            eventos</li>
                    </ul>
                </div>
                <div
                    class="absolute left-1/2 -translate-x-1/2 top-72 flex flex-col items-center border-4 border-color-primary w-[400px] h-[600px] rounded-[1rem] p-6 space-y-4">
                    <h1 class="font-roboto font-bold text-[36px]">Plano Premium</h1>
                    <p class="text-[20px]">Para usuários que desejam criar eventos e ter mais benefícios.</p>
                    <p class="text-[40px] font-bold">10R$<span class="text-[#C5C5C5] text-xl">/mês</span></p>
                    <a href="#"
                        class="rounded-full bg-color-primary text-black font-bold text-[20px] w-[80%] self-center block py-2 px-6 mb-4 hover:opacity-85 duration-200">Começar</a>
                    <ul class="flex flex-col items-start space-y-4">
                        <li class="text-[20px]"><i class="fa-solid fa-check text-green-500 mr-2"></i>Participar de
                            eventos</li>
                        <li class="text-[20px]"><i class="fa-solid fa-check text-green-500 mr-2"></i>Criação de até 5
                            eventos por mês</li>
                        <li class="text-[20px]"><i class="fa-solid fa-check text-green-500 mr-2"></i>Suporte prioritário
                        </li>
                        <li class="text-[20px]"><i class="fa-solid fa-check text-green-500 mr-2"></i>Acesso a recursos
                            exclusivos</li>
                        <li class="text-[20px]"><i class="fa-solid fa-check text-green-500 mr-2"></i>Estatísticas dos
                            eventos</li>
                    </ul>
                </div>


                <div
                    class="flex flex-col items-center border-4 border-colorLogo w-[400px] h-[600px] rounded-[1rem] p-6 space-y-4">
                    <h1 class="font-roboto font-bold text-[36px]">Plano Avançado</h1>
                    <p class="text-[20px]">Para organizadores frequentes e profissionais.</p>
                    <p class="text-[40px] font-bold">30R$<span class="text-[#C5C5C5] text-xl">/mês</span></p>
                    <a href="#"
                        class="rounded-full bg-colorLogo text-black font-bold text-[20px] w-[80%] self-center block py-2 px-6 mb-4 hover:opacity-85 duration-200">Começar</a>
                    <ul class="flex flex-col items-start space-y-4">
                        <li class="text-[20px]"><i class="fa-solid fa-check text-green-500 mr-2"></i>Participar de
                            eventos</li>
                        <li class="text-[20px]"><i class="fa-solid fa-check text-green-500 mr-2"></i>Criação ilimitada
                            de eventos</li>
                        <li class="text-[20px]"><i class="fa-solid fa-check text-green-500 mr-2"></i>Suporte 24/7</li>
                        <li class="text-[20px]"><i class="fa-solid fa-check text-green-500 mr-2"></i>Recursos de
                            divulgação</li>
                        <li class="text-[20px]"><i class="fa-solid fa-check text-green-500 mr-2"></i>Acesso a recursos
                            exclusivos</li>
                    </ul>
                </div>


            </div>
        </div>
    </section>
    <section class="h-[80vh]">
        <img src="./assets/img/divider.svg" alt="">
        <!-- global container -->
        <div class="relative">
            <div class="px-[210px] py-[80px]">
                <h2 class="w-full text-[40px] font-medium">
                    Estamos aqui para apoiar você em <br> sua jornada no ciclismo em cada etapa.
                </h2>
            </div>
            <div class="absolute right-[18rem] top-[14rem] flex space-x-4">
                <div class="w-[50px] h-[50px] bg-[#C5C5C5] rounded-full flex items-center justify-center cursor-pointer hover:text-color-primary duration-200"
                    id="prev">
                    <i class="fa-solid fa-chevron-left"></i>
                </div>
                <div class="w-[50px] h-[50px] bg-[#C5C5C5] rounded-full flex items-center justify-center cursor-pointer hover:text-color-primary duration-200"
                    id="next">
                    <i class="fa-solid fa-chevron-right"></i>
                </div>
            </div>
            <div class="px-[210px] overflow-x-hidden p-10" id="carousel">
                <div class="flex space-x-8 w-[150rem]">
                    <!-- Cartão 1 -->
                    <div
                        class="transition-transform duration-300 hover:scale-110 relative w-[450px] h-[350px] bg-white rounded-2xl px-8 shadow-lg no-select">
                        <div
                            class="absolute flex items-center justify-center w-[80px] h-[80px] bg-white top-3 rounded-lg left- z-20">
                            <img src="https://raw.githubusercontent.com/Tarikul-Islam-Anik/Animated-Fluent-Emojis/master/Emojis/Travel%20and%20places/Globe%20Showing%20Europe-Africa.png"
                                alt="Globe Showing Europe-Africa" width="50" height="50" />
                        </div>
                        <span class="absolute top-0 left-0 bg-blue-500 w-full h-[70px] rounded-t-2xl"></span>
                        <h2 class="pt-[90px] text-2xl font-medium mb-4">Conexão com a Comunidade</h2>
                        <p class="text-xl">Junte-se a ciclistas como você. Encontre e siga pessoas com interesses
                            semelhantes, compartilhe experiências e faça novas amizades enquanto participa de eventos.
                        </p>
                    </div>

                    <!-- Cartão 2 -->
                    <div
                        class="transition-transform duration-300 hover:scale-110 relative w-[450px] h-[350px] bg-white rounded-2xl px-8 shadow-lg no-select">
                        <div
                            class="absolute flex items-center justify-center w-[80px] h-[80px] bg-white top-3 rounded-lg left- z-20">
                            <img src="https://raw.githubusercontent.com/Tarikul-Islam-Anik/Animated-Fluent-Emojis/master/Emojis/Objects/Card%20File%20Box.png"
                                alt="Card File Box" width="50" height="50" />
                        </div>
                        <span class="absolute top-0 left-0 bg-green-500 w-full h-[70px] rounded-t-2xl"></span>
                        <h2 class="pt-[90px] text-2xl font-medium mb-4">Organização de Eventos Simplificada</h2>
                        <p class="text-xl">Crie e gerencie eventos com facilidade. Nossa interface intuitiva permite que
                            você organize passeios, corridas e encontros em poucos cliques, mantendo tudo em um só
                            lugar.</p>
                    </div>

                    <!-- Cartão 3 -->
                    <div
                        class="transition-transform duration-300 hover:scale-110 relative w-[450px] h-[350px] bg-white rounded-2xl px-8 shadow-lg no-select">
                        <div
                            class="absolute flex items-center justify-center w-[80px] h-[80px] bg-white top-3 rounded-lg left- z-20">
                            <img src="https://raw.githubusercontent.com/Tarikul-Islam-Anik/Animated-Fluent-Emojis/master/Emojis/Travel%20and%20places/Comet.png"
                                alt="Comet" width="50" height="50" />
                        </div>
                        <span class="absolute top-0 left-0 bg-red-500 w-full h-[70px] rounded-t-2xl"></span>
                        <h2 class="pt-[90px] text-2xl font-medium mb-4">Acesso a Recursos Exclusivos</h2>
                        <p class="text-xl">Desfrute de benefícios especiais. Tenha acesso a conteúdos e ferramentas
                            exclusivas, como dicas de treinamento, itinerários personalizados e promoções em
                            equipamentos.</p>
                    </div>

                    <!-- Cartão 4 -->
                    <div
                        class="transition-transform duration-300 hover:scale-110 relative w-[450px] h-[350px] bg-white rounded-2xl px-8 shadow-lg no-select">
                        <div
                            class="absolute flex items-center justify-center w-[80px] h-[80px] bg-white top-3 rounded-lg left- z-20">
                            <img src="https://raw.githubusercontent.com/Tarikul-Islam-Anik/Animated-Fluent-Emojis/master/Emojis/People/Man%20Technologist.png"
                                alt="Man Technologist" width="50" height="50" />
                        </div>
                        <span class="absolute top-0 left-0 bg-yellow-500 w-full h-[70px] rounded-t-2xl"></span>
                        <h2 class="pt-[90px] text-2xl font-medium mb-4">Facilidade de Comunicação</h2>
                        <p class="text-xl">Converse e colabore. Use nossa plataforma para se comunicar com outros
                            ciclistas, trocar dicas e planejar atividades em grupo.</p>
                    </div>

                    <!-- Cartão 5 -->
                    <div
                        class="transition-transform duration-300 hover:scale-110 relative w-[450px] h-[350px] bg-white rounded-2xl px-8 shadow-lg no-select">
                        <div
                            class="absolute flex items-center justify-center w-[80px] h-[80px] bg-white top-3 rounded-lg left- z-20">
                            <img src="https://raw.githubusercontent.com/Tarikul-Islam-Anik/Animated-Fluent-Emojis/master/Emojis/Objects/Bar%20Chart.png"
                                alt="Bar Chart" width="50" height="50" />
                        </div>
                        <span class="absolute top-0 left-0 bg-purple-500 w-full h-[70px] rounded-t-2xl"></span>
                        <h2 class="pt-[90px] text-2xl font-medium mb-4">Monitoramento de Progresso</h2>
                        <p class="text-xl">Acompanhe seu desempenho. Mantenha um registro das suas atividades,
                            conquistas e
                            desafios, ajudando você a se manter motivado e alcançar seus objetivos.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="relative mt-[90px]  ">
        <img src="./assets/img/divider.svg" alt="" class="absolute top-[-3rem] rotate-180 mt-[40px] text-red-500">
        <!-- global container -->
        <div class="relative bg-[#16161d] pb-[90px]">
            <div class="flex items-center justify-center w-full px-[210px] py-[80px]">
                <h2 class="w-full text-center text-[40px] text-white font-medium">
                    Depoimentos de nossos clientes
                </h2>
            </div>
            <div class="absolute right-[18rem] top-[10rem] flex space-x-4">
                <div class="w-[50px] h-[50px] bg-[#C5C5C5] rounded-full flex items-center justify-center cursor-pointer hover:text-color-primary duration-200"
                    id="prev2">
                    <i class="fa-solid fa-chevron-left"></i>
                </div>
                <div class="w-[50px] h-[50px] bg-[#C5C5C5] rounded-full flex items-center justify-center cursor-pointer hover:text-color-primary duration-200"
                    id="next2">
                    <i class="fa-solid fa-chevron-right"></i>
                </div>
            </div>
            <div class="px-[669px] overflow-x-hidden p-10" id="carousel2">
                <div class="flex space-x-8 w-[190rem]">
                    <!-- Cartão 3 -->
                    <div class="relative w-[600px] h-[300px] bg-white p-10 rounded-xl bg-cover bg-center no-select hover:scale-105 transition-transform duration-300"
                        style="background-image: url(./assets/img/bg-depoimento.svg);">
                        <div class="absolute top-0 left-0 inset-0 bg-[#16161d] opacity-[92%] w-full h-full z-10"></div>
                        <div class="relative z-20">
                            <p class="text-[20px] italic text-white">
                                <span class="text-color-primary text-[30px]">"</span>Descobrir novos percursos e
                                itinerários personalizados fez
                                minha experiência no ciclismo ainda mais emocionante. A plataforma tem recursos
                                incríveis!
                                <span class="text-color-primary text-[30px]">"</span>
                            </p>
                            <div class="flex items-center space-x-4 mt-4">
                                <div class="w-[50px] h-[50px] rounded-full bg-cover bg-center"
                                    style="background-image: url(./assets/img/person1.png);"></div>
                                <p class="text-[20px] font-regular text-white">Lucas</p>
                            </div>
                        </div>
                    </div>

                    <!-- Cartão 4 -->
                    <div class="relative w-[600px] h-[300px] bg-white p-10 rounded-xl bg-cover bg-center no-select hover:scale-105 transition-transform duration-300"
                        style="background-image: url(./assets/img/bg-depoimento.svg);">
                        <div class="absolute top-0 left-0 inset-0 bg-[#16161d] opacity-[92%] w-full h-full z-10"></div>
                        <div class="relative z-20">
                            <p class="text-[20px] italic text-white">
                                <span class="text-color-primary text-[30px]">"</span>O sistema de mensagens facilitou
                                muito a comunicação com
                                outros ciclistas da minha cidade. Agora podemos planejar atividades em grupo sem
                                complicações.
                                <span class="text-color-primary text-[30px]">"</span>
                            </p>
                            <div class="flex items-center space-x-4 mt-4">
                                <div class="w-[50px] h-[50px] rounded-full bg-cover bg-center"
                                    style="background-image: url(./assets/img/person2.png);"></div>
                                <p class="text-[20px] font-regular text-white">Mariana</p>
                            </div>
                        </div>
                    </div>

                    <!-- Cartão 5 -->
                    <div class="relative w-[600px] h-[300px] bg-white p-10 rounded-xl bg-cover bg-center no-select hover:scale-105 transition-transform duration-300"
                        style="background-image: url(./assets/img/bg-depoimento.svg);">
                        <div class="absolute top-0 left-0 inset-0 bg-[#16161d] opacity-[92%] w-full h-full z-10"></div>
                        <div class="relative z-20">
                            <p class="text-[20px] italic text-white">
                                <span class="text-color-primary text-[30px]">"</span>Acompanhar meu progresso no
                                ciclismo nunca foi tão simples.
                                As estatísticas e registros me ajudam a me manter motivado e a melhorar meu desempenho.
                                <span class="text-color-primary text-[30px]">"</span>
                            </p>
                            <div class="flex items-center space-x-4 mt-4">
                                <div class="w-[50px] h-[50px] rounded-full bg-cover bg-center"
                                    style="background-image: url(./assets/img/person3.png);"></div>
                                <p class="text-[20px] font-regular text-white">Ricardo</p>
                            </div>
                        </div>
                    </div>

                    <!-- Cartão 6 -->
                    <div class="relative w-[600px] h-[300px] bg-white p-10 rounded-xl bg-cover bg-center no-select hover:scale-105 transition-transform duration-300"
                        style="background-image: url(./assets/img/bg-depoimento.svg);">
                        <div class="absolute top-0 left-0 inset-0 bg-[#16161d] opacity-[92%] w-full h-full z-10"></div>
                        <div class="relative z-20">
                            <p class="text-[20px] italic text-white">
                                <span class="text-color-primary text-[30px]">"</span>Ter acesso a dicas e conteúdos
                                exclusivos me ajudou a evitar lesões e melhorar minha performance. Não posso recomendar
                                essa plataforma o suficiente!
                                <span class="text-color-primary text-[30px]">"</span>
                            </p>
                            <div class="flex items-center space-x-4 mt-4">
                                <div class="w-[50px] h-[50px] rounded-full bg-cover bg-center"
                                    style="background-image: url(./assets/img/person4.png);"></div>
                                <p class="text-[20px] font-regular text-white">Fernanda</p>
                            </div>
                        </div>
                    </div>

                    <!-- Cartão 7 -->
                    <div class="relative w-[600px] h-[300px] bg-white p-10 rounded-xl bg-cover bg-center no-select hover:scale-105 transition-transform duration-300"
                        style="background-image: url(./assets/img/bg-depoimento.svg);">
                        <div class="absolute top-0 left-0 inset-0 bg-[#16161d] opacity-[92%] w-full h-full z-10"></div>
                        <div class="relative z-20">
                            <p class="text-[20px] italic text-white">
                                <span class="text-color-primary text-[30px]">"</span>Participar de eventos organizados
                                pela plataforma me
                                proporcionou momentos incríveis com outros ciclistas. Uma comunidade muito unida!
                                <span class="text-color-primary text-[30px]">"</span>
                            </p>
                            <div class="flex items-center space-x-4 mt-4">
                                <div class="w-[50px] h-[50px] rounded-full bg-cover bg-center"
                                    style="background-image: url(./assets/img/person5.png);"></div>
                                <p class="text-[20px] font-regular text-white">Ana</p>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

    </section>
    <section class="relative bg-cover bg-center overflow-x-hidden overflow-y-hidden "
        style="background-image: url(./assets/img/bannerfundociclista.avif);">
        <div class="w-full h-full ">
            <div class="animate-scroll-text absolute flex flex-row items-center justify-center space-x-[6rem] whitespace-nowrap w-full
            h-full z-20 left-1/2 top-[-20%] -translate-x-1/2">
                <h2 class="inline-block text-[10rem] font-bold text-white">PEDAL <span
                        class="text-[#2a38e1]">EVENTS</span></h2>
                <h2 class="inline-block text-[10rem] font-bold text-white">PEDAL <span
                        class="text-[#2a38e1]">EVENTS</span></h2>
                <h2 class="inline-block text-[10rem] font-bold text-white">PEDAL <span
                        class="text-[#2a38e1]">EVENTS</span></h2>
                <h2 class="inline-block text-[10rem] font-bold text-white">PEDAL <span
                        class="text-[#2a38e1]">EVENTS</span></h2>
            </div>


            <div class="absolute z-20 left-1/2 -translate-x-1/2"><img src="./assets/img/bannerpedalciclista.png" alt="">
            </div>

            <div class="absolute w-full h-[40%] top-[18rem] z-20 bg-cover bg-center -z-10"
                style="background-image: url(./assets/img/parede.svg);"></div>

            <div class="absolute inset-0 bg-[#16161d] opacity-[79%] z-40"></div>
        </div>


        <div class="relative w-full h-full flex items-center justify-center px-[210px] z-50">
            <div class="w-full flex flex-col text-center items-center justify-center p-20">
                <p class="text-3xl leading-[3rem] font-bold text-white">
                    Comece a organizar seus eventos de ciclismo hoje mesmo.<br> Com nossa plataforma,<br>
                    conectar-se com outros ciclistas e criar experiências únicas<br> é mais fácil do que você imagina!
                </p>
                <a href="./criando_conta.php"
                    class="bg-[#2770DF] text-black font-medium text-[20px] py-[1rem] px-8 block rounded-[4px] hover:opacity-80 duration-200 mt-10">
                    Comece Agora!!
                </a>
            </div>
        </div>
    </section>





    <script src="./assets/js/teste.js"></script>
</body>

</html>