<?php
session_start();

require '../app/database.php';

$stmt = $pdo->prepare
(

    'SELECT * FROM usuarios WHERE id = :id'

);


$id =  $_SESSION['usuario_id'];

$stmt->bindParam(':id', $id);

$stmt->execute();

$usuario = $stmt->fetch();


$file = $_FILES['img'];

if($file['error'] === UPLOAD_ERR_OK) {
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

  if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $sql = "UPDATE usuarios 
    SET nome_completo = :nome_completo,
        nome_organizacao = :nome_organizacao,
        cidade = :cidade,
        estado = :estado,
        data_nascimento = :data_nascimento,
        bio = :bio,
        img = :img
    WHERE id = :id";

// Prepara a consulta
$stmt = $pdo->prepare($sql);

// Vinca os parâmetros aos valores fornecidos
$stmt->bindParam(':nome_completo', $_POST['nomeCompleto']);
$stmt->bindParam(':nome_organizacao', $_POST['organizacao']);
$stmt->bindParam(':cidade', $_POST['cidade']);
$stmt->bindParam(':estado', $_POST['estado']);
$stmt->bindParam(':data_nascimento', $_POST['dataNascimento']);
$stmt->bindParam(':bio', $_POST['bio']);
if (isset($_FILES['img']) && $_FILES['img']['error'] === UPLOAD_ERR_OK) {

    $stmt->bindParam(':img', $filename);
} else {
    $stmt->bindParam(':img', $usuario['img']); 
}

$stmt->bindParam(':id', $id);

// Executa a consulta
$stmt->execute();



  }

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
                <ul class="flex items-center space-x-8 font-normal ">
                    <li><a href="./inicio.php"
                            class="hover:text-color-primary duration-200 font-black text-color-primary">Inicio</a></li>
                    <li><a href="./eventos.php" class="hover:text-color-primary duration-200">Eventos</a></li>
                    <li><a href="./create_event.php" class="hover:text-color-primary duration-200">Crie seu Evento</a>
                    </li>
                    
                </ul>
                <div class="w-[55px] h-[55px] rounded-[100%] bg-cover bg-center"
                   ></div>
            </div>
        </nav>
    </header>

    <!-- section-one -->
    <section class="relative px-[210px]">
        <!-- global container -->
        <div
            class="relative mt-[80px] bg-[#16161D] w-full h-full text-white px-[125px] py-[60px] rounded-2xl  w-full h-full">
            <div class="absolute top-[2rem] right-[2rem]"><a href="./inicio.php"
                    class=" bg-color-primary px-[6rem] py-2 rounded-lg hover:opacity-80">Voltar</a>
            </div>
            <div class="w-full h-full">
                <h2 class="text-3xl font-medium">Editar Perfil</h2>
                <div class="w-full h-full">
                    <form action="" method="POST" enctype="multipart/form-data" class="w-full h-full">
                        <div class="w-[100%] h-full flex flex-col justify-center">
                       <!-- img perfil -->
<div class="flex flex-col items-center">
    <div class="w-[200px] h-[200px] border-2 border-color-primary rounded-[100%] bg-cover bg-center"
        style="background-image: url(./uploads/<?= $usuario['img']?>);">
    </div>
    <label for="img" class="px-10 py-2 bg-color-primary rounded-lg mt-6 hover:opacity-80 cursor-pointer">Alterar Foto</label>
    <input type="file" name="img" id="img" class="hidden" onchange="updateFileName()">
</div>

<script>
    function updateFileName() {
        const fileInput = document.getElementById('img');
        const fileNameDisplay = document.getElementById('file-name');
        const fileName = fileInput.files[0] ? fileInput.files[0].name : 'Nenhum arquivo selecionado';
        fileNameDisplay.textContent = fileName;
    }
</script>


                            <!-- box inputs -->
                            <div class="px-[210px] mt-10 flex flex-col ">
                                <div>
                                    <!-- box input -->
                                    <div class="flex flex-col mb-4">
                                        <label for="">Nome Completo:</label>
                                        <input
                                            class="bg-transparent border-2 border-[#c5c5c5] rounded-lg p-[.4rem] mt-2"
                                            type="text" name="nomeCompleto" id="" value="<?= $usuario['nome_completo']?>">
                                    </div>
                                    <!-- box input -->
                                    <div class="flex flex-col ">
                                        <label for="">Nome da Organização:</label>
                                        <input
                                            class="bg-transparent border-2 border-[#c5c5c5] rounded-lg p-[.4rem] mt-2"
                                            type="text" name="organizacao" id="" value="<?= $usuario['nome_organizacao']?>">
                                    </div>
                                    <!-- box input -->
                                    <div class="flex  mt-4">
                                        <div class="flex flex-col w-[88%] mr-[2%]">
                                            <label for="">Cidade:</label>
                                            <input
                                                class="bg-transparent border-2 border-[#c5c5c5] rounded-lg p-[.4rem] mt-2"
                                                type="text" name="cidade" id="" value="<?= $usuario['cidade']?>">
                                        </div>
                                        <div class="flex flex-col w-[10%]">
                                            <label for="">UF:</label>
                                            <input
                                                class="bg-transparent border-2 border-[#c5c5c5] rounded-lg p-[.4rem] mt-2"
                                                type="text" name="estado" id="" value="<?= $usuario['estado']?>">
                                        </div>
                                    </div>
                                    <div class="flex flex-col  mt-4 ">
                                        <label for="">Data de nascimento:</label>
                                        <input
                                            class="bg-transparent text-white border-2 border-[#c5c5c5] rounded-lg p-[.4rem] mt-2"
                                            type="date" name="dataNascimento" id="" value="<?= $usuario['data_nascimento']?>">
                                    </div>
                                    <div class="flex flex-col  mt-4">
                                        <label for="">Descrição:</label>
                                        <textarea name="bio" id=""
                                            class="h-[200px] bg-transparent border-2 border-[#c5c5c5] rounded-lg p-[.4rem] mt-2"><?= $usuario['bio']?></textarea>
                                    </div>

                                </div>
                                <button href="./inicio.php"
                                    class=" bg-color-primary px-[6rem] py-2 rounded-lg block self-center w-[80%] mt-10 hover:opacity-80">Salvar</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>

    <?= var_dump($_POST)?>
   
</body>

</html>