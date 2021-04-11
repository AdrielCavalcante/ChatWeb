<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatWeb</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
    <div class="wrapper">
        <section class="form login">
            <header>Chat em tempo real</header>
            <form action="#" method="POST">
                <div class="error-txt">Isso é uma mensagem de erro!</div>
                    <div class="field input">
                        <label>Endereço de E-mail:</label>
                        <input type="email" placeholder="Digite seu E-mail">
                    </div>
                    <div class="field input">
                        <label>Senha:</label>
                        <input type="password" class="inputSenha" placeholder="Digite sua senha">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field button">
                        <input type="submit" value="Acessar o chat">
                    </div>
            </form>
            <div class="link">Não possui registro? <a href="index.php">Registre-se agora</a></div>
        </section>
    </div>

    <script src="js/pass-show-hide.js"></script>

</body>
</html>