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
        <section class="form signup">
            <header>Chat em tempo real</header>
            <form action="#" method="POST" enctype="multipart/form-data">
                <div class="error-txt"></div>
                <div class="name-details">
                    <div class="field input">
                        <label>Primeiro nome:</label>
                        <input type="text" name="fName" placeholder="Seu Primeiro nome" required>
                    </div>
                    <div class="field input">
                        <label>Último nome:</label>
                        <input type="text" name="lName" placeholder="Seu Último nome" required>
                    </div>
                </div>
                    <div class="field input">
                        <label>Endereço de E-mail:</label>
                        <input type="email" name="email" placeholder="Digite seu E-mail" required>
                    </div>
                    <div class="field input">
                        <label>Senha:</label>
                        <input type="password" class="inputSenha" name="password" placeholder="Digite sua senha" required>
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field image">
                        <label>Selecione uma imagem:</label>
                        <input type="file" name="image" required/>
                    </div>
                    <div class="field button">
                        <input type="submit" value="Acessar o chat">
                    </div>
            </form>
            <div class="link">Já está registrado? <a href="login.php">Logue-se agora</a></div>
        </section>
    </div>

    <script src="js/pass-show-hide.js"></script>
    <script src="js/signup.js"></script>

</body>
</html>