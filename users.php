<?php 
    session_start();
    if (!isset($_SESSION['unique_id'])) {
        header("location: login.php");
    }
?>

<?php include_once 'header.php'; ?>
<body>
    <div class="wrapper">
        <section class="users">
            <header>
            <?php
                include_once 'php/config.php';
                $sql = mysqli_query($conn, "SELECT  * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
                if (mysqli_num_rows($sql) > 0) {
                    $row = mysqli_fetch_assoc($sql);
                }
            ?>
            <div class="content">
                <img src="img/<?php echo $row['image'] ?>" alt="scar perfil">
                <div class="details">
                    <span><?php echo $row['fName']. " " . $row['lName']?></span>
                    <p><?php echo $row['status'] ?></p>
                </div>
            </div>
            <a href="php/logout.php?logout_id=<?php echo $row['unique_id'] ?>" class="logout">Deslogar</a>
        </header>
        <div class="search">
            <span class="text">Selecione um usuário para conversar:</span>
            <input type="text" placeholder="Digite um nome...">
            <button><i class="fas fa-search"></i></button>
        </div>
        <div class="users-list">
 
        </div>
        </section>
    </div>

    <script src="js/users.js"></script>

</body>
</html>