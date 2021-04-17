<?php
    session_start();
    if (isset($_SESSION['unique_id'])) {
        header("location: users.php");
    }
?>

<?php include_once 'header.php'; ?>
<body>
    <div class="wrapper">
        <section class="form login">
            <header>Chat em tempo real</header>
            <form action="#">
                <div class="error-txt">Isso é uma mensagem de erro!</div>
                    <div class="field input">
                        <label>Endereço de E-mail:</label>
                        <input type="email" name="email" placeholder="Digite seu E-mail">
                    </div>
                    <div class="field input">
                        <label>Senha:</label>
                        <input type="password" class="inputSenha" name="password" placeholder="Digite sua senha">
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
    <script src="js/login.js"></script>
</body>
</html>