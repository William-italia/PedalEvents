<?php

session_start();

require '../app/database.php';
require '../app/helpers.php';

$id = $_SESSION['usuario_id'];

$idEvento = $_GET['id'];

$sql = '  SELECT 
        eventos.*, 
        usuarios.*,
        dificuldades.*,
        categorias.*
    FROM 
        eventos
    JOIN 
        usuarios 
    ON 
        eventos.usuario_id = usuarios.id
    JOIN
        dificuldades
    ON
        eventos.dificuldade_id = dificuldades.id
    JOIN 
        categorias
    ON 
        eventos.categoria_id = categorias.id
    WHERE 
        eventos.id = :id
';

$stmtEvento = $pdo->prepare($sql);

$stmtEvento->bindParam(':id', $idEvento);
$stmtEvento->execute();

$evento = $stmtEvento->fetch();

$sqlInscricao = 'SELECT * FROM inscricao WHERE evento_id = :event_id AND usuario_id = :user_id';
$stmtInscricao = $pdo->prepare($sqlInscricao);
$stmtInscricao->bindParam(':event_id', $idEvento);
$stmtInscricao->bindParam(':user_id', $id);
$stmtInscricao->execute();
$inscricao = $stmtInscricao->fetch();


$topicos = transformaEmArray($evento['topicos'], ' | ', ' % ', 'titulo', 'conteudo');
$links = transformaEmArray($evento['links'], ', ', ' - ', 'link', 'url');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['_method']) && $_POST['_method'] === 'insert') {
    
    $sql = $sql = 'INSERT INTO inscricao (usuario_id, evento_id) VALUES (:user_id, :event_id)';

    // Preparando a query
    $stmtInscricao = $pdo->prepare($sql);

    // Bind dos parâmetros
    $stmtInscricao->bindParam(':user_id', $_POST['usuario_id']);
    $stmtInscricao->bindParam(':event_id', $_POST['evento_id']);

   $stmtInscricao->execute();
  
   header('refresh: 1');
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['_method']) && $_POST['_method'] === 'DELETEEVENT') {
    
    $sql = 'DELETE FROM eventos WHERE id = :event_id';

    // Preparando a query
    $stmtInscricao = $pdo->prepare($sql);

    // Bind dos parâmetros
    $stmtInscricao->bindParam(':event_id', $_POST['evento_id']);

   $stmtInscricao->execute();
  
   header('location: inicio.php');
}

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
                    <li><a href="./inicio.php" class="hover:text-color-primary duration-200 ">Inicio</a></li>
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
                        <div style="background-image: url('./uploads/<?= $evento['imagem'] ?>');" id="imgPreviewElement"
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
                                            <li><a href="./evento_detalhes.php?id=<?= $idEvento ?>"
                                                    class="font-bold border-b-2 border-color-primary p-[.6rem]">Detalhes</a>
                                            </li>
                                            <li><a href="./evento_membros.php?id=<?= $idEvento ?>">Participantes</a></li>
                                            <?php 
                                            
                                            if($id == $evento['usuario_id']) { 
                                                echo 
                                                ' <li><a href="">Editar Detalhes</a></li>
                                                  <li>
                                            <form action="" method="POST">
                                                <input type="hidden" name="evento_id" value="' . $idEvento . '">
                                                <input type="hidden" name="_method" value="DELETEEVENT">
                                                <button type="submit"
                                                  >
                                                    Excluir
                                                </button>
                                            </form>
                                            </li>
                                                ';                                            }
                                            
                                            ?>
                                          
                                            
                                        </ul>
                                    </div>

                                    <div class="flex flex-col">
                                        <p class="font-roboto font-bold text-3xl my-4"><?= $evento['nome_evento'] ?></p>
                                    </div>

                                    <div class="grid grid-cols-2 gap-6 mt-4 text-xl">
                                        <div><i class="mr-2 fa-solid fa-bookmark"></i><?= $evento['nome_completo'] ?></div>
                                        <div><i class="mr-2 fa-solid fa-trophy"></i> <?= $evento['nome_dificuldade'] ?></div>
                                        <div><i class="mr-2 fa-solid fa-calendar-days"></i><?= formataData($evento['data_evento'])?></div>
                                        <div><i class="mr-2 fa-solid fa-layer-group"></i> <?= $evento['nome_categoria'] ?></div>
                                        <div><i class="mr-2 fa-solid fa-city"></i><?= $evento['cidade'] ?></div>
                                        <div><i class="mr-2 fa-solid fa-user"></i> Vagas: <?= $evento['limite_vagas'] ?></div>
                                        <div><i class="mr-2 fa-solid fa-map"></i><?= $evento['ponto_encontro'] . ', ' . $evento['bairro_encontro'] ?></div>
                                        <div><i class="mr-2 fa-solid fa-map"></i> <?= $evento['ponto_chegada'] . ', ' . $evento['bairro_chegada'] ?></div>
                                        <div><i class="mr-2 fa-solid fa-map"></i>Idade Minima: <?= $evento['idade_minima']?></div>
                                        <div><i class="mr-2 fa-solid fa-bicycle"></i>Distância: <?= number_format($evento['distancia'], 1, '.', '') ?>Km</div>
                                    </div>

                                    <!-- topics - father box -->
                                    <div class="mt-10">
                                        <ul id="topics">
                                            <?php foreach($topicos as $topico): ?>
                                                <li>
                                                    <div class="flex flex-col mb-10">
                                                        <h2 class="text-xl underline mb-6 font-medium "><?= $topico['titulo'] ?></h2>
                                                        <p class="font-roboto text-1xl  leading-7"><?= $topico['conteudo'] ?></p>
                                                        </div>
                                                    </li>
                                                    <?php endforeach; ?>
                                        </ul>

                                    </div>


                                </div>
                            </div>
                            <!-- links box -->
                            <div class="w-[30%] bg-slate-0 border-l-2 p-4">
                                <div>
                                    <p>Inscrições Abertas</p>
                                    <?php
                                    
                                    if ($id == $evento['usuario_id']) {
                                        echo '
                                        <p class="p-2 bg-[#D3D3D3] rounded-[4px] shadow-xl w-full mt-4 text-center cursor-pointer">
                                            Criador do Evento
                                        </p>
                                        ';
                                    } else {
                                        if ($inscricao) {
                                            // Caso o usuário já esteja inscrito
                                            echo '
                                            <p class="p-2 bg-[#D3D3D3] rounded-[4px] shadow-xl w-full mt-4 text-center cursor-pointer">
                                                Inscrito
                                            </p>
                                            ';
                                        } else {
                                            // Caso o usuário não esteja inscrito
                                            echo '
                                            <form action="" method="POST">
                                                <input type="hidden" name="evento_id" value="' . $idEvento . '">
                                                <input type="hidden" name="usuario_id" value="' . $id . '">
                                                <input type="hidden" name="_method" value="insert">
                                                <button type="submit"
                                                    class="p-2 bg-[#00D1FF] hover:bg-cyan-600 duration-500 rounded-[4px] shadow-xl w-full mt-4 text-center cursor-pointer">
                                                    Inscreva-se
                                                </button>
                                            </form>
                                            ';
                                        }
                                    }
                                    
                                    ?>
                                    <p class="border-b-2 py-4">Evento ficará aberto até <?= formataData($evento['data_fim_inscricao']) ?> ou até o limite de
                                        vagas for atingido!</p>
                                </div>
                                <!-- links box -->
                                <div>
                                    <ul id="links" class="flex flex-col gap-4 text-1xl mt-8">
                                        <h2 class="text-xl font-roboto font-medium">Links importantes:</h2>
                                        <?php foreach($links as $link): ?>
                                            <li>
                                                <a href="<?= $link['url'] ?>" target="_blank"><i
                                                class="fa-solid fa-up-right-from-square mr-2"></i><?= $link['link']?></a>
                                            </li>
                                        <?php endforeach; ?>
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