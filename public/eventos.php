<?php 

require '../app/database.php';

$stmt = $pdo->prepare(
    'SELECT 
        eventos.*, 
        categorias.nome_categoria AS categoria_nome, 
        dificuldades.nome_dificuldade AS dificuldade_nome,
        usuarios.nome_completo AS nome
     FROM eventos
     JOIN categorias ON eventos.categoria_id = categorias.id
     JOIN usuarios ON eventos.usuario_id = usuarios.id
     JOIN dificuldades ON eventos.dificuldade_id = dificuldades.id'
);

$stmt->execute();

$results = $stmt->fetchAll();


?>

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
                    <li><a href="./inicio.html" class="hover:text-color-primary duration-200 ">Inicio</a></li>
                    <li><a href="./eventos.html"
                            class="hover:text-color-primary duration-200 font-black text-color-primary">Eventos</a></li>
                    <li><a href="./criando_evento.html" class="hover:text-color-primary duration-200">Crie seu
                            Evento</a>
                    </li>
                    <li><a href="#" class="hover:text-color-primary duration-200">Fale conosco</a></li>
                </ul>
                <div class="w-[55px] h-[55px] rounded-[100%] bg-cover bg-center"
                    style="background-image: url(./assets/img/person1.png);"></div>
            </div>
        </nav>
    </header>
    <!-- <script src="./assets/js/menu.js"></script> -->

    <section id="home-filtro" class="px-[210px]">
        <div class="mt-20">
            <!-- Filtro -->
            <form method="get" action="">
                <div class="w-full shadow-2xl p-6 md:p-10 rounded-lg">
                    <div class="flex flex-col space-y-10 justify-between md:flex-row md:space-y-0 md:space-x-10">
                        <div class="flex flex-col flex-1">
                            <label class="font-roboto text-xl font-medium" for="categoria">Categoria</label>
                            <select name="categoria" id="categoria"
                                class="p-2 rounded-lg border border-gray-600 mt-2 font-roboto w-full">
                                <option value="passeio-recreativo">Passeio Recreativo</option>
                                <option value="ciclismo-estrada">Ciclismo de Estrada</option>
                                <option value="mountain-bike">Mountain Bike</option>
                                <option value="ciclismo-urbano">Ciclismo Urbano</option>
                                <option value="cicloturismo">Cicloturismo</option>
                                <option value="bmx">BMX</option>
                                <option value="gravel">Ciclismo Gravel</option>
                                <option value="ciclismo-indoor">Ciclismo Indoor</option>
                                <option value="trekking-ciclismo">Ciclismo de Trekking</option>
                                <option value="evento-competitivo">Evento Competitivo</option>
                                <option value="paraciclismo">Paraciclismo</option>
                                <option value="ciclismo-aventura">Ciclismo de Aventura</option>
                                <option value="downhill">Downhill</option>
                                <option value="ciclismo-de-pista">Ciclismo de Pista</option>
                                <option value="gran-fondo">Gran Fondo</option>
                            </select>
                        </div>
                        <div class="flex flex-col flex-1">
                            <label class="font-roboto text-xl font-medium" for="localizacao">Localização</label>
                            <input type="text" name="localizacao" id="localizacao"
                                class="p-2 rounded-lg border border-gray-600 mt-2 font-roboto w-full"
                                placeholder="Digite uma localização">
                        </div>
                        <div class="flex flex-col flex-1">
                            <label class="font-roboto text-xl font-medium" for="data">Data</label>
                            <input type="date" name="data" id="data"
                                class="p-2 rounded-lg border border-gray-600 mt-2 font-roboto w-full">
                        </div>
                    </div>
                    <button type="submit"
                        class="bg-[#006CE0] w-full mt-6 text-white py-2 px-4 rounded-lg duration-200 hover:opacity-80">
                        Aplicar Filtros
                    </button>
                </div>
            </form>
        </div>
    </section>


    <section id="eventos" class="px-[210px] my-10">
        <!-- container events -->
        <div class="">
            <div class="grid grid-cols-4 gap-6 w-full  p-6 rounded-xl shadow-2xl">

                <!-- evento 1 -->
                 <?php foreach($results as $evento) :?>
                    <div class="bg-white text-black h-[36rem] rounded-2xl card-sombra ">
                        <div class="flex items-center justify-center w-full h-[48%] mb-2 bg-cover bg-center"
                            style="background-image: url('./assets/img/evento.png');">
                            <!-- Conteúdo opcional dentro da div -->
                        </div>

                        <!-- Conteúdo do card -->
                        <div class="flex flex-col items-center justify-between p-2">
                            <h1 class="text-2xl font-medium text-center mb-2"><?= $evento['nome_evento']?></h1>
                            <div class="mt-[1rem]">
                                <div class="flex items-center gap-2">
                                    <p class="text-[1.2rem] font-medium">Organizador:</p>
                                    <p class="text-[1.2rem] "><?= $evento['nome'] ?></p>
                                </div>
                                <div class="flex items-center gap-2">
                                    <p class="text-[1.2rem] font-medium">Categoria:</p>
                                    <p class="text-[1.2rem] "><?= $evento['categoria_nome']?></p>
                                </div>
                                <div class="flex items-center gap-2">
                                    <p class="text-[1.2rem] font-medium">Local: </p>
                                    <p class="text-[1.2rem] "><?= $evento['cidade']?></p>
                                </div>
                                <div class="flex items-center gap-2">
                                    <P class="text-[1.2rem] font-medium">Data e hora:</P>
                                    <P class="text-[1.2rem] "><?= $evento['data_evento'] ?></P>
                                </div>
                                <div class="flex gap-2">
                                    <div class="flex items-center gap-2">
                                        <p class="text-[1.2rem] font-medium">Dificuldade:</p>
                                        <p class="text-[1.2rem] "><?= $evento['dificuldade_nome'] ?></p>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <p class="text-[1.2rem] font-medium">Vagas:</p>
                                        <p class="text-[1.2rem] "><?= $evento['limite_vagas']?></p>
                                    </div>
                                </div>
                            </div>
                            <a href="./evento_detalhes.html"
                                class="mt-[1rem] bg-[#0065B9] text-white duration-200 hover:opacity-80 block w-full  py-2 text-center p-3 rounded-[.8rem]">Entrar
                                no Pedal</a>
                        </div>
                    </div>
                <?php endforeach; ?>
                

            </div>
        </div>

    </section>


    <script src="./assets/js/home.js"></script>
</body>

</html>