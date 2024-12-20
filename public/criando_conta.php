<?php

    require '../app/database.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        try {
            // Hashing a senha
    
            // Preparando a consulta
            $stmt = $pdo->prepare('
                INSERT INTO usuarios (
                    nome_completo, 
                    nome_organizacao, 
                    email, 
                    cpf, 
                    cidade, 
                    data_nascimento, 
                    senha
                ) VALUES (
                    :nome_completo, 
                    :nome_organizacao, 
                    :email, 
                    :cpf, 
                    :cidade, 
                    :data_nascimento, 
                    :senha
                )
            ');
    
            // Substituindo os placeholders pelos valores
            $stmt->bindParam(':nome_completo', $_POST['nomeCompleto']);
            $stmt->bindParam(':nome_organizacao', $_POST['organizador']);
            $stmt->bindParam(':email', $_POST['email']);
            $stmt->bindParam(':cpf', $_POST['cpf']);
            $stmt->bindParam(':cidade', $_POST['cidade']);
            $stmt->bindParam(':data_nascimento', $_POST['dataNascimento']);
            $stmt->bindParam(':senha', $_POST['senha']);
    
            // Executando a consulta
            $stmt->execute();
    
            // Redirecionando para a página de login
            header('Location: login.php');
            exit;
    
        } catch (PDOException $e) {
            // Se ocorrer algum erro, exibe a mensagem de erro
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
    <section id="cria-conta" class="flex h-screen">
        <!--  -->
        <form id="meuFormulario" action="" method="POST"
            class="bgGradiente w-full flex flex-col p-[6.25rem] lg:w-1/2 lg:p-0 lg:items-center lg:rounded-tr-[1.25rem] lg:rounded-br-[1.25rem]">
            <h1 class="text-4xl mx-auto font-russo text-white my-10 lg:mt-[10rem] lg:mb-16">
                <span class="text-colorLogo">Pedal</span> Events
            </h1>

            <p class="font-roboto text-3xl text-center mx-auto text-white font-bold mb-10">Crie sua conta!</p>

            <!-- inputs do email e senha -->
            <div id="step1" class="flex mx-auto flex-col space-y-4">
                <div class="flex flex-col text-white">
                    <label for="nomeCompleto" class="mb-2">Nome Completo:</label>
                    <input type="text" id="nomeCompleto" name="nomeCompleto"
                        class="w-[18.75rem] p-2 border border-white bg-transparent rounded-md placeholder-white placeholder-opacity-50 focus:outline-none lg:w-[25rem]"
                        placeholder="Digite seu nome completo">
                </div>
                <div class="flex flex-col text-white">
                    <label for="organizador" class="mb-2">Nome da organização: (opcional)</label>
                    <input type="text" id="nomeCompleto" name="organizador"
                        class="w-[18.75rem] p-2 border border-white bg-transparent rounded-md placeholder-white placeholder-opacity-50 focus:outline-none lg:w-[25rem]"
                        placeholder="Digite seu nome completo">
                </div>
                <div class="flex flex-col text-white">
                    <label for="cpf" class="mb-2">CPF:</label>
                    <input type="text" id="cpf" name="cpf"
                        class="w-[18.75rem] p-2 border border-white bg-transparent rounded-md placeholder-white placeholder-opacity-50 focus:outline-none lg:w-[25rem]"
                        placeholder="Digite seu CPF">
                </div>
                <div class="flex flex-col text-white">
                    <label for="cidade" class="mb-2">Sua cidade:</label>
                    <input type="text" id="cidade" name="cidade"
                        class="w-[18.75rem] p-2 border border-white bg-transparent rounded-md placeholder-white placeholder-opacity-50 focus:outline-none lg:w-[25rem]"
                        placeholder="Digite sua cidade">
                </div>

            </div>
            <div id="step2" class="hidden flex mx-auto flex-col space-y-4">
                <div class="flex flex-col text-white">
                    <label for="email" class="mb-2">Email:</label>
                    <input type="email" id="email" name="email"
                        class="w-[18.75rem] p-2 border border-white bg-transparent rounded-md placeholder-white placeholder-opacity-50 focus:outline-none lg:w-[25rem]"
                        placeholder="Digite seu email">
                </div>
                <div class="flex flex-col text-white">
                    <label for="dataNascimento" class="mb-2">Data de nascimento:</label>
                    <input type="date" id="dataNascimento" name="dataNascimento"
                        class="w-[18.75rem] p-2 border border-white bg-transparent rounded-md placeholder-white placeholder-opacity-50 focus:outline-none lg:w-[25rem]"
                        placeholder="Digite sua data de nascimento">
                </div>
                <div class="flex flex-col text-white">
                    <label for="senha" class="mb-2">Sua senha:</label>
                    <input type="password" id="senha" name="senha"
                        class="w-[18.75rem] p-2 border border-white bg-transparent rounded-md placeholder-white placeholder-opacity-50 focus:outline-none lg:w-[25rem]"
                        placeholder="Digite sua senha">
                </div>
                <div class="flex flex-col text-white">
                    <label for="confirmaSenha" class="mb-2">Confirme sua senha:</label>
                    <input type="password" id="confirmaSenha" 
                        class="w-[18.75rem] p-2 border border-white bg-transparent rounded-md placeholder-white placeholder-opacity-50 focus:outline-none lg:w-[25rem]"
                        placeholder="Confirme sua senha">
                </div>
            </div>

            <!-- botoes de recuperação de conta, continuar, e criar -->
            <div class="mx-auto text-white mt-[3.1rem] lg:w-[25rem] w-full max-w-[18.75rem] lg:max-w-[25rem]">
                <div class="flex flex-col space-y-4 text-center mt-2">
                    <!-- step1 -->
                    <button type="button" id="nextBtn"
                        class="w-full p-2 border rounded-md duration-200 hover:opacity-50">Próxima página</button>
                    <a href="./login.php" id="enterBtn"
                        class="w-full p-2 border rounded-md bgGradiente duration-200 hover:opacity-50">Entrar</a>

                    <!-- step 2 -->
                    <button type="submit" id="createBtn"
                        class="hidden w-full p-2 border rounded-md duration-200 hover:opacity-50">Criar Conta!</button>
                    <button type="button" id="backBtn"
                        class="hidden w-full p-2 border rounded-md bgGradiente duration-200 hover:opacity-50">Voltar</button>
                </div>
            </div>
        </form>


        <!-- img-->
        <div id="img" class="hidden lg:block lg:w-1/2 lg:flex lg:items-center relative">
            <img class="absolute inset-x-0 mx-auto" src="./assets/img/undraw_team_up_re_84ok 1.svg" alt="">
        </div>
    </section>

    <pre>
        <?= var_dump($_POST)?>
    </pre>
    <script src="./assets/js/script.js"></script>
    <script>
    document.getElementById('meuFormulario').addEventListener('submit', function(event) {
        var senha = document.getElementById('senha').value;
        var confirmarSenha = document.getElementById('confirmaSenha').value;
        
        if (senha !== confirmarSenha) {
            // Impede o envio do formulário
            event.preventDefault();
            
            // Mostra a mensagem de erro
            alert('senhas não batem');
        }
    });
</script>
</body>

</html>