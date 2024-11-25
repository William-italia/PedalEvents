<?php


    session_start();


    $user_id = $_SESSION['usuario_id'];

    require '../app/database.php';
    require '../app/helpers.php';
    
    $stmt = $pdo->prepare(
        'SELECT 
        eventos.*, 
        categorias.nome_categoria AS categoria_nome, 
        dificuldades.nome_dificuldade AS dificuldade_nome,
        usuarios.nome_completo AS nome
     FROM eventos
     JOIN categorias ON eventos.categoria_id = categorias.id
     JOIN usuarios ON eventos.usuario_id = usuarios.id
     JOIN dificuldades ON eventos.dificuldade_id = dificuldades.id
    WHERE eventos.usuario_id = :id'
);  
    
    $stmt->bindParam(':id', $user_id, PDO::PARAM_INT);

    $stmt->execute();
    
    $results = $stmt->fetchAll();
    
    $eventos_user = $results;


    $stmt = $pdo->prepare(
        'SELECT * FROM usuarios WHERE id = :id'
    );

    $stmt->bindParam(':id', $user_id, PDO::PARAM_INT);

    $stmt->execute();
    
    $results = $stmt->fetch();

    $USER = $results;
?>

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
    <header id="apresentation" class="relative">
        <nav id="navbar"
            class="bg-[#16161D] fixed top-0 w-full h-16 flex flex-col justify-center px-[210px] z-50 text-white">
            <!-- container -->
            <div class="flex justify-between items-center ">
                <div>
                    <h2 class="font-russo text-2xl "><span class="text-color-primary">Pedal</span> Events</h2>
                </div>
                <ul class="flex items-center justify-center space-x-8 font-normal ">
                    <li><a href="./inicio.php"
                            class="hover:text-color-primary duration-200 font-black text-color-primary">Inicio</a></li>
                    <li><a href="./eventos.php" class="hover:text-color-primary duration-200">Eventos</a></li>
                    <li><a href="./criando_evento.php" class="hover:text-color-primary duration-200">Crie seu
                            Evento</a>
                    </li>
                </ul>
               <a href="index.php">Sair</a>
            </div>
        </nav>
    </header>

    <!-- section-one -->
    <section class="relative px-[210px]">
        <!-- global container -->
        <div class="mt-[80px] bg-[#16161D] w-full h-full text-white px-[125px] py-[60px] rounded-t-2xl">
            <div class="flex justify-between ">
                <div class="flex space-x-10 items-center justify-between">
                    <div class="w-[200px] h-[200px] border-2 border-color-primary rounded-[100%] bg-cover bg-center"
                        style="background-image: url('./uploads/<?= $USER['img']?>');">
                    </div>
                    <div>
                        <h2 class="font-medium text-3xl mb-4"><?= $USER['nome_completo'] ?></h2>
                      
                        <p class="w-[80%] my-6"><?= $USER['bio'] ?></p>
                        <p class="font-medium"><?= $USER['cidade'] ?><?= isset($USER['estado']) ? ', ' . $USER['estado'] : ''?></p>
                    </div>
                </div>
                <div>
                    <a href="./editando_perfil.php" class="bg-color-primary px-6 py-2 rounded-lg">Editar Perfil</a>
                </div>
            </div>
        </div>
        <div class="border-t-2 border-color-primary bg-[#1F1F41]  w-full h-full text-white rounded-b-2xl mb-10">
            <div class="flex items-center justify-center mt-4">
                <ul class="flex space-x-10 text-xl pb-10">
                    <li class=""><a href="./inicio.php"
                            class="border-t-2 px-6 py-4 font-medium text-white border-white">Minhas
                            Criações</a>
                    </li>
                    <li class=""><a href="./inicio_inscricoes.php" class="px-6 py-4 font-medium text-white ">Estou
                            participando</a></li>
                </ul>
            </div>
            <!-- criações -->
            <div class="px-[125px]">
                <div class="py-4">
                    <h2 class="font-medium text-3xl mb-10">Meus Pedais:</h2>
                    <div class="grid grid-cols-3 gap-6 w-full mb-8 rounded-xl">

                <!-- evento 1 -->
                 <?php foreach($eventos_user as $evento) :?>
                    <div class="bg-white text-black h-[36rem] rounded-2xl card-sombra ">
                        <div class="flex items-center justify-center w-full h-[48%] mb-2 bg-cover bg-center"
                            style="background-image: url('./uploads/<?= $evento['imagem'] ?>');">
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
                                    <p class="text-[1.2rem] "><?= $evento['categoria_nome'] ?></p>
                                </div>
                                <div class="flex items-center gap-2">
                                    <p class="text-[1.2rem] font-medium">Local: </p>
                                    <p class="text-[1.2rem] "><?= $evento['cidade']?></p>
                                </div>
                                <div class="flex items-center gap-2">
                                    <P class="text-[1.2rem] font-medium">Data e hora:</P>
                                    <P class="text-[1.2rem] "><?= formataData($evento['data_evento']) ?></P>
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
                            <a href="./evento_detalhes.php?id=<?= $evento['id']?>"
                                class="mt-[1rem] bg-[#0065B9] text-white duration-200 hover:opacity-80 block w-full  py-2 text-center p-3 rounded-[.8rem]">Entrar
                                no Pedal</a>
                        </div>
                    </div>
                <?php endforeach; ?>
                

            </div>

            </div>
        </div>
    </section>

</body>

</html>