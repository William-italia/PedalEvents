<?php 



require '../app/database.php';


if(isset($_POST['cpf'])) {

    $sql = 'SELECT * FROM usuarios WHERE cpf = :cpf';

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':cpf', $_POST['cpf']);
    $stmt->execute();
    $user = $stmt->fetch();

    if($user) {
        session_start(); // Inicia uma sessão
        $_SESSION['usuario_id_senha'] = $user['id']; // Salva o ID do usuário na sessão
        header('Location: confirmando_senha.php');
    } else {
        header('Location: redefinindo_senha.php');
    }
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
    <section id="redefinindo-senha" class="flex h-screen">
        <!-- img -->
        <div class="hidden lg:block lg:w-1/2 lg:flex lg:items-center relative">
            <img class="absolute top-1/2 transform -translate-y-1/2 w-[300rem]" src="./assets/img/undraw_forgot_password_re_hxwm 3.svg" alt="">
        </div>
    
        <!-- inputs -->
        <form method="POST"
            class="bgGradiente w-full flex flex-col p-[6.25rem] lg:w-1/2 lg:p-0 lg:items-center lg:rounded-tl-[1.25rem] lg:rounded-bl-[1.25rem]">
            <h1 class="text-4xl mx-auto font-russo text-white my-24 mt-[10rem]"><span class="text-colorLogo">Pedal</span>
                Events
            </h1>
    
            <p class="font-roboto text-4xl text-center mx-auto text-white font-bold mb-20">Redefinindo senha</p>
    
            <!-- inputs do email e senha -->
            <div class="flex mx-auto flex-col space-y-4">
                <div class="flex flex-col text-white">
                    <label for="" class="mb-2">Email:</label>
                    <input type="text" name="email"
                        class="w-[18.75rem] p-2 border border-white bg-transparent rounded-md placeholder-white placeholder-opacity-50 focus:outline-none lg:w-[25rem]"
                        placeholder="Digite seu email">
                </div>
                <div class="flex flex-col text-white">
                    <label for="" class="mb-2">CPF:</label>
                    <input type="text" name="cpf"
                        class="w-[18.75rem] p-2 border border-white bg-transparent rounded-md placeholder-white placeholder-opacity-50 focus:outline-none lg:w-[25rem]"
                        placeholder="Digite sua senha">
                </div>
            </div>
    
            <!-- botoes de recuperação de conta, continuar, e criar -->
            <div class="mx-auto text-white mt-[3.1rem] lg:w-[25rem] w-full max-w-[18.75rem] lg:max-w-[25rem]">
                <div class="flex flex-col space-y-4 text-center mt-2">
                    <button type="submit" class="w-full p-2 border rounded-md duration-200 hover:opacity-50">Checar os dados</button>
                    <a href="./login.php"
                        class="w-full p-2 border rounded-md bgGradiente duration-200 hover:opacity-50">Voltar</a>
                </div>
            </div>
    
        </form>
    </section>
    <script src="./assets/js/script.js"></script>
</body>

</html>