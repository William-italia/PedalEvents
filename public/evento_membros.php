<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Russo+One&display=swap"
        rel="stylesheet">
</head>

<body class="relative ">
    <header id="apresentation" class="relative">
        <nav id="navbar"
            class="bg-[#16161D] fixed top-0 w-full h-16 flex flex-col justify-center px-[210px] z-50 text-white">
            <!-- container -->
            <div class="flex justify-between items-center ">
                <div>
                    <h2 class="font-russo text-2xl "><span class="text-color-primary">Pedal</span> Events</h2>
                </div>
                <ul class="flex items-center space-x-8 font-normal ">
                    <li><a href="./inicio.php" class="hover:text-color-primary duration-200">Inicio</a>
                    </li>
                    <li><a href="./eventos.php" class="hover:text-color-primary duration-200">Eventos</a></li>
                    <li><a href="./criando_evento.php" class="hover:text-color-primary duration-200">Crie seu
                            Evento</a>
                    </li>
                    
                </ul>
                <div class="w-[55px] h-[55px] rounded-[100%] bg-cover bg-center"
                    ></div>
            </div>
        </nav>
    </header>

    <section id="home-filtro" class="mx-16 md:mx-[10.3rem]">
        <div>
            <!-- global container -->
            <div class="flex items-center justify-center my-10 w-full mt-20">
                <!-- form start -->
                <div class="w-full flex items-center justify-center">
                    <!-- father box -->
                    <div class="w-[100%] md:w-[70%] flex flex-col items-center justify-center">
                        <!-- banner box -->
                        <div style="background-image: url(./assets/img/event-img3.png);" id="imgPreviewElement"
                            class="w-full bg-gray-600 h-[500px] rounded-t-xl relative bg-cover bg-center">
                        </div>
                        <!-- father boxs (form and links) -->
                        <div class="flex flex-col md:flex-row  w-full border-l-2 border-r-2 border-b-2 rounded-b-xl">
                            <!-- father form box -->
                            <div class="w-[70%] mx-6 p-4">
                                <!-- form box -->
                                <div class="w-full">

                                    <div class="border-b-2 p-2 mb-8">
                                        <ul class="flex space-x-10 ">
                                            <li><a href="./evento_detalhes.php">Detalhes</a>
                                            </li>
                                            <li><a href="./evento_membros.php"
                                                    class="font-bold border-b-2 border-color-primary p-[.6rem]">Membros</a>
                                            </li>
                                            <li><a href="">Editar Detalhes</a></li>
                                            <li><a href="">Excluir</a></li>
                                        </ul>
                                    </div>

                                    <div>
                                        <h2 class="font-roboto font-bold text-3xl my-4">Membros</h2>
                                        <ul>
                                            <li>
                                                <div class="flex items-center space-x-4 border-b-2 py-4 w-full">
                                                    <div class="w-[55px] h-[50px] rounded-[100%] bg-cover bg-center"
                                                        style="background-image: url(./assets/img/person1.png);"></div>
                                                    <div class="w-full">
                                                        <p class="font-medium text-xl"><a href="">William Italia</a>
                                                        </p>
                                                        <p>Mongaguá, SP</p>
                                                    </div>
                                                    <button
                                                        class="flex justify-end bg-red-500 inline-block p-2 rounded-lg text-white hover:opacity-80 duration-200">Remover</button>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <!-- links box -->
                            <div class="w-[30%] bg-slate-0 border-l-2 p-4">
                                <div>
                                    <p>Inscrições Abertas</p>
                                    <p
                                        class="p-2 bg-[#00D1FF] hover:bg-cyan-600 duration-500 rounded-[4px] shadow-xl w-full mt-4 text-center cursor-pointer">
                                        Inscreva-se</p>
                                    <p class="border-b-2 py-4">Evento ficará aberto até 25/12/2024 ou até o limite de
                                        vagas for atingido!</p>
                                </div>
                                <!-- links box -->
                                <div>
                                    <ul id="links" class="flex flex-col gap-4 text-1xl mt-8">
                                        <h2 class="text-xl font-roboto font-medium">Links importantes:</h2>
                                        <li>
                                            <a href="https://www.instagram.com/pedaleventsoficial/" target="_blank"><i
                                                    class="fa-solid fa-up-right-from-square mr-2"></i> Instagram do
                                                Pedal</a>
                                        </li>
                                        <li>
                                            <a href="https://www.instagram.com/pedaleventsoficial/" target="_blank"><i
                                                    class="fa-solid fa-up-right-from-square mr-2"></i>Grupo WhatsApp</a>
                                        </li>
                                        <li>
                                            <a href="https://www.instagram.com/pedaleventsoficial/" target="_blank"><i
                                                    class="fa-solid fa-up-right-from-square mr-2"></i> Site Oficial Do
                                                Evento</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="./assets/js/home.js"></script>
</body>

</html>