<?php

session_start();

require '../app/database.php';

$id = $_SESSION['usuario_id'];

$sqlDificuldades = 'SELECT * FROM dificuldades';

$stmtDificuldades = $pdo-> prepare($sqlDificuldades);

$stmtDificuldades->execute();

$dificuldades = $stmtDificuldades->fetchAll();



$sqlCategorias = 'SELECT * FROM categorias';

$stmtCategorias = $pdo-> prepare($sqlCategorias);

$stmtCategorias->execute();

$categorias = $stmtCategorias->fetchAll();


$sqluser = 'SELECT * FROM usuarios WHERE id = :id';

$stmtUser = $pdo-> prepare($sqluser);

$stmtUser->bindParam(':id', $id);

$stmtUser->execute();

$user = $stmtUser->fetch();

$file = $_FILES['banner'];


if($file['error'] === UPLOAD_ERR_OK) 
  {
    $uploadDir = 'uploads/';


    if(!is_dir($uploadDir)) 
    {
      mkdir($uploadDir, 0755, true);
    }

    // create file name
    $filename = uniqid() . '-' . $file['name'];

    // upload file

move_uploaded_file($file['tmp_name'], $uploadDir . $filename);

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
                    <li><a href="./inicio.php" class="hover:text-color-primary duration-200  ">Inicio</a>
                    </li>
                    <li><a href="./eventos.php" class="hover:text-color-primary duration-200">Eventos</a></li>
                    <li><a href="./criando_evento.php"
                            class="hover:text-color-primary duration-200 font-black text-color-primary">Crie seu
                            Evento</a>
                    </li>
                   
                </ul>
                <div class="w-[55px] h-[55px] rounded-[100%] bg-cover bg-center"
                    ></div>
            </div>
        </nav>
    </header>


    <section id="home-filtro" class="px-[210px]">
        <div class="flex flex-col w-full items-center">
            <!-- global container -->
            <div class="flex items-center justify-center my-20 w-[70%]">
                <!-- form start -->
                <form id="form-event" action="" method="post" enctype="multipart/form-data"
                    class="w-full flex items-center justify-center">
                    <!-- father box -->
                    <div class="w-[100%] flex flex-col items-center justify-center">
                        <!-- banner box -->
                        <div id="imgPreviewElement"
                            class="w-full bg-gray-600 h-[500px] rounded-t-xl relative bg-cover bg-center">
                            <input  id="inputImg" type="file" name="banner" class="hidden" accept="image/*">
                            <label
                                class="absolute bottom-[2rem] right-[2rem] bg-white py-4 px-10 shadow-xl rounded-lg cursor-pointer hover:bg-slate-500 duration-300"
                                for="inputImg">adicionar
                                banner</label>
                        </div>
                        <!-- father boxs (form and links) -->
                        <div class="flex flex-col md:flex-row  w-full border-l-2 border-r-2 border-b-2 rounded-b-xl">
                            <!-- father form box -->
                            <div class="w-[70%] mx-6 p-4">
                                <!-- form box -->
                                <div class="w-full">
                                    <div class="flex flex-col">
                                        <label class="font-roboto font-medium text-lg mb-2" for="nameEvent">Nome do
                                            Evento:</label>
                                        <input  type="text" name="nameEvent"
                                            class="border-[#D9D9D9] border-2 rounded-[.2rem] p-[.3rem] mb-[16px]"
                                            value="Treino Diario">
                                    </div>

                                    <div class="md:flex md:space-x-2">
                                        <div class="w-[50%] flex flex-col">
                                            <!-- duo input 1-->
                                            <div class="flex flex-col space-y-4">
                                                <!-- input 1 -->
                                                <div class="flex flex-col">
                                                <label class="font-roboto font-medium text-lg mb-2" for="difficulty">Organizador:</label>
                                                <select name="organizer" class="border-[#D9D9D9] border-2 rounded-[.2rem]  p-[.33rem]">
                                                    <option value="<?= $user['nome_completo'] ?>"><?= $user['nome_completo'] ?></option>
                                                    <?php 
                                                        if($user['nome_organizacao'] !== '') {
                                                            echo '<option value="' . $user['nome_organizacao'] . '">' . $user['nome_organizacao'] . '</option>';
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                                <!-- input 2 -->
                                                <div class="flex flex-col">
                                                    <label class="font-roboto font-medium text-lg mb-2" for="date">Data
                                                        do Pedal
                                                        :</label>
                                                    <input  type="datetime-local" name="date"
                                                        class="border-[#D9D9D9] border-2 rounded-[.2rem] p-[.3rem]"
                                                        min="2024-04-10T00:00" value="2024-04-10T00:00">
                                                </div>
                                            </div>
                                            <!-- duo input 2-->
                                            <div class="flex flex-col space-y-4">
                                                <!-- input 3 -->
                                                <div class="flex flex-col mt-[16px]">
                                                    <div class="flex items-center justify-between w-[100%] ">
                                                        <label class="font-roboto font-medium text-lg mb-2"
                                                            for="city">Cidade:</label>
                                                        <label class="font-roboto font-medium text-lg mb-2 mr-[1rem]"
                                                            for="city">UF:</label>
                                                    </div>
                                                    <div class="flex items-center  w-[100%]">
                                                        <input  type="text" name="city"
                                                            class="border-[#D9D9D9] border-2 rounded-[.2rem]  p-[.3rem] w-full "
                                                            placeholder="São Paulo" value="São Paulo">
                                                        <input type="text" name="estado"
                                                            class="border-[#D9D9D9] border-2 rounded-[.2rem]  p-[.3rem] w-[16%] text-center"
                                                            placeholder="SP" value="SP" maxlength="2">
                                                    </div>
                                                </div>
                                                <!-- input 4 -->
                                                <div class="flex flex-col">
                                                    <div class="flex flex-col">

                                                        <div class="flex flex-row items-center mt-2 w-full ">
                                                            <div class="">
                                                                <label class="font-roboto font-medium text-lg mb-2"
                                                                    for="address-end">Ponto de Encontro:</label>
                                                                <input  type="text" name="pontaA"
                                                                    id="address-start"
                                                                    class="border-[#D9D9D9] border-2 rounded-[.2rem]  p-[.3rem] w-[100%]">
                                                            </div>

                                                            <div class="flex flex-col ">
                                                                <label class="font-roboto font-medium text-lg "
                                                                    for="">Bairro:</label>
                                                                <input  type="text" name="pontoAbairro"
                                                                    id="neighborhoodStart"
                                                                    class="border-[#D9D9D9] border-2 rounded-[.2rem]  p-[.3rem] w-[100%]">
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- input 5 -->
                                                <div class="flex flex-col">
                                                    <label class="font-roboto font-medium text-lg mb-2" for="age">Idade
                                                        Minima:</label>
                                                    <input  type="number" name="age"
                                                        class="border-[#D9D9D9] border-2 rounded-[.2rem]  p-[.3rem]"
                                                        min="16" placeholder="16">
                                                </div>
                                                <!-- input 9 -->
                                                <div class="flex flex-col">
                                                    <label class="font-roboto font-medium text-lg mb-2"
                                                        for="km">Distância
                                                        Estimada (km): </label>
                                                    <input  type="number" name="km" min="4" max="100" value="30"
                                                        class="border-[#D9D9D9] border-2 rounded-[.2rem]  p-[.3rem]">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="flex flex-col w-[50%]">
                                            <!-- duo input 3-->
                                            <div class="flex flex-col space-y-4 ">
                                                <!-- input 5 -->
                                                <div class="flex flex-col">
                                                    <label class="font-roboto font-medium text-lg mb-2"
                                                        for="difficulty">Dificuldade:</label>
                                                    <select name="difficulty"
                                                        class="border-[#D9D9D9] border-2 rounded-[.2rem]  p-[.33rem]">
                                                        <?php foreach($dificuldades as $dificuldade): ?>
                                                            <option value="<?= $dificuldade['id']?>"><?= $dificuldade['nome_dificuldade'] ?></option>
                                                        <?php endforeach;?>
                                                     
                                                    </select>
                                                </div>
                                                <!-- input 6 -->
                                                <div class="flex flex-col">
                                                    <label class="font-roboto font-medium text-lg mb-2"
                                                        for="dateLimit">Fim
                                                        das Inscrições
                                                        :</label>
                                                    <input  type="datetime-local" name="date"
                                                        class="border-[#D9D9D9] border-2 rounded-[.2rem] p-[.3rem]"
                                                        min="2024-04-08T00:00" value="2024-04-08T00:00">
                                                </div>
                                                <div class="flex flex-col">
                                                    <label class="font-roboto font-medium text-lg mb-2"
                                                        for="category">Categoria</label>
                                                    <select name="category"
                                                        class="border-[#D9D9D9] border-2 rounded-[.2rem]  p-[.33rem]">
                                                        <?php foreach($categorias as $categoria): ?>
                                                            <option value="<?= $categoria['id']?>"><?= $categoria['nome_categoria']?></option>
                                                        <?php endforeach;?>

                                                    </select>
                                                </div>
                                            </div>

                                            <!-- duo input 4 -->
                                            <div class="flex flex-col space-y-4 mt-[16px]">
                                                <!-- input 7 -->
                                                <div>
                                                    <div class="flex flex-col">

                                                        <div class="flex flex-row items-center mt-2 w-full">
                                                            <div class="">
                                                                <label class="font-roboto font-medium text-lg mb-2"
                                                                    for="address-end">Ponto de Chegada:</label>
                                                                <input  type="text" name="pontoB"
                                                                    id="address-end"
                                                                    class="border-[#D9D9D9] border-2 rounded-[.2rem]  p-[.3rem] w-[100%]">
                                                            </div>

                                                            <div class="flex flex-col ">
                                                                <label class="font-roboto font-medium text-lg "
                                                                    for="neighborhoodEnd">Bairro:</label>
                                                                <input  type="text" name="pontoBbairro"
                                                                    id="neighborhoodEnd"
                                                                    class="border-[#D9D9D9] border-2 rounded-[.2rem]  p-[.3rem] w-[100%]">
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- input 8 -->
                                                <div class="flex flex-col">
                                                    <label class="font-roboto font-medium text-lg mb-2"
                                                        for="slots">Limite de Vagas:</label>
                                                    <input  type="number" name="slots" min="5" max="100"
                                                        placeholder="5"
                                                        class="border-[#D9D9D9] border-2 rounded-[.2rem]  p-[.3rem]">
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <!-- topics - father box -->
                                    <div class="mt-10">
                                        <ul id="topics">
                                            <li>
                                                <div class="flex flex-col mb-10">
                                                    <div class="w-[50%] flex flex-col">
                                                        <label class="font-roboto font-medium text-lg mb-2"
                                                            for="topico">Titulo do
                                                            Topico</label>
                                                        <input  type="text" name="topico[0][titulo]"
                                                            class="border-[#D9D9D9] border-2 rounded-[.2rem]  p-[.3rem] mb-4">
                                                    </div>
                                                    <div>
                                                        <label class="font-roboto font-medium text-lg mb-2"
                                                            for="conteudo">Conteúdo</label>
                                                        <textarea  name="topico[0][conteudo]"
                                                            class="border-[#D9D9D9] border-2 rounded-[.2rem] mr-[1.4rem] p-[.3rem] w-full h-[400px] mt-2"></textarea>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                        <div class="flex flex-col mb-10 relative">
                            <span class="cursor-pointer  absolute right-0 text-red-600" id="delete-topic"><i
                                    class="fa-solid fa-trash"></i></span>
                            <div class="w-[50%] flex flex-col">
                                <label class="font-roboto font-medium text-lg mb-2"
                                    for="topico">Titulo do
                                    Topico</label>

                                <input type="text" name="topico[${lis.length}][titulo]" 
                                    class="border-[#D9D9D9] border-2 rounded-[.2rem]  p-[.3rem] mb-4">
                            </div>
                            <div>
                                <label class="font-roboto font-medium text-lg mb-2"
                                    for="conteudo">Conteúdo</label>
                                <textarea name="topico[${lis.length}][conteudo]" 
                                    class="border-[#D9D9D9] border-2 rounded-[.2rem] mr-[1.4rem] p-[.3rem] w-full h-[400px] mt-2"></textarea>
                            </div>
                        </div>
                                            </li>


                                        </ul>
                                        <button id="create-topic"
                                            class="p-2 bg-[#00D1FF] hover:bg-cyan-600 duration-500 rounded-[4px] shadow-xl w-[40%] mt-2"
                                            type="button">Adicionar
                                            Topico</button>
                                    </div>


                                    <!-- father box buttons -->
                                    <div class="flex items-center justify-center space-x-4 w-full mt-10">
                                        <button type="submit"
                                            class="p-2 bg-[#00D1FF] hover:bg-cyan-600 duration-500 rounded-[4px] shadow-xl w-full">Criar
                                            Evento!</button>
                                    </div>
                                </div>
                            </div>
                            <!-- links box -->
                            <div class="w-[30%] bg-slate-0 border-l-2 p-4">

                                <!-- links box -->
                                <div>
                                    <h2 class="text-xl font-roboto font-medium mt-8">Links importantes:</h2>
                                    <ul id="links">
                                        <li>
                                            <div class="flex flex-col space-y-2 my-4 relative">
                                                <div class="flex justify-between">
                                                    <label class="font-roboto font-medium text-lg "
                                                        for="link">Nome:</label>
                                                    <span class="cursor-pointer text-red-600" id="delete-link"><i
                                                            class="fa-solid fa-trash"></i></span>
                                                </div>
                                                <input name="links[0][nome]" type="text"
                                                    class="border-[#D9D9D9] border-2 rounded-[.2rem]  p-[.3rem]">

                                                <label class="font-roboto font-medium text-lg " for="link">Link:</label>
                                                <input name="links[0][url]" type="text"
                                                    class="border-[#D9D9D9] border-2 rounded-[.2rem]  p-[.3rem]">
                                            </div>
                                        </li>
                                    </ul>
                                    <button id="create-link"
                                        class="p-2 bg-[#00D1FF] hover:bg-cyan-600 duration-500 rounded-[4px] shadow-xl w-full mt-2"
                                        type="button">Adicionar
                                        Link</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </section>


    <script src="./assets/js/create_event.js"></script>
</body>

</html>