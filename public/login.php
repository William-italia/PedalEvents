<?php 

require '../app/database.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $stmt = $pdo-> prepare
    (
        'SELECT * FROM usuarios WHERE email = :email'
    );

    $stmt->bindParam(':email', $_POST['email']);

    $stmt->execute();

    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($usuario) {
        // Verificando se a senha corresponde
        if ($_POST['senha'] === $usuario['senha']) {
            // Senha correta, pode fazer login
            session_start(); // Inicia uma sessão
            $_SESSION['usuario_id'] = $usuario['id']; // Salva o ID do usuário na sessão
            $_SESSION['usuario_nome'] = $usuario['nome_completo']; // Salva o nome do usuário na sessão
            header('Location: inicio.php'); // Redireciona para a página inicial
        } else {
            header('Location: login.php'); // Redireciona para a página inicial
        }
    } else {
        
        header('Location: login.php'); // Redireciona para a página inicial
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
    <section id="login" class="flex h-screen">
        <!-- img -->
        <div class="hidden lg:block lg:w-1/2 lg:flex lg:items-center relative">
            <img class="absolute top-1/2 transform -translate-y-1/2 w-[300rem]"
                src="./assets/img/undraw_biking_kc-4-f-1.svg" alt="">
        </div>

        <!-- inputs -->
        <div
            class="bgGradiente w-full flex flex-col p-[6.25rem] lg:w-1/2 lg:p-0 lg:items-center lg:rounded-tl-[1.25rem] lg:rounded-bl-[1.25rem]">
            <h1 class="text-4xl mx-auto font-russo text-white mt-[10rem] my-24 "><span
                    class="text-colorLogo">Pedal</span>
                Events
            </h1>

            <p class="font-roboto text-4xl mx-auto text-white font-bold mb-20">Acesse sua conta!</p>

            <!-- inputs do email e senha -->
            <form class="flex mx-auto flex-col space-y-4" action="" method="POST">
                <div class="flex flex-col text-white">
                    <label for="" class="mb-2">Email:</label>
                    <input type="text" name="email"
                        class="w-[18.75rem] p-2 border border-white bg-transparent rounded-md placeholder-white placeholder-opacity-50 focus:outline-none lg:w-[25rem]"
                        placeholder="Digite seu email">
                </div>
                <div class="flex flex-col text-white">
                    <label for="" class="mb-2">Senha:</label>
                    <input type="password" name="senha"
                        class="w-[18.75rem] mb-[3rem] p-2 border border-white bg-transparent rounded-md placeholder-white placeholder-opacity-50 focus:outline-none lg:w-[25rem]"
                        placeholder="Digite sua senha">
                </div>

                <!-- botoes de recuperação de conta, continuar, e criar -->
                <div class="mx-auto text-white mt-[3.1rem] lg:w-[25rem] w-full max-w-[18.75rem] lg:max-w-[25rem]">
                    <a href="./redefinindo_senha.php" class="opacity-80">Esqueceu sua senha?</a>
                    <div class="flex flex-col space-y-4 text-center mt-2">
                        <button type="submit" 
                            class="w-full p-2 border rounded-md duration-200 hover:opacity-50">Entrar</button>
                        <a href="./criando_conta.php"
                            class="w-full p-2 border rounded-md bgGradiente duration-200 hover:opacity-50">Crie uma
                            conta!</a>
                    </div>
                </div>
            </form>


        </div>
    </section>
    <script src="./assets/js/script.js"></script>

</body>

</html>