<?php 
    session_start();
    if (!isset($_SESSION['unique_id'])) {
        header("location: login.php");
    }
    if (($_SERVER["REQUEST_URI"] == "/ChatWeb/chat.php")) {
        header("location: login.php");
    }
?>

<?php include_once 'header.php'; ?>
<body>
    <div class="wrapper">
        <section class="chat-area">
            <header>
            <?php
                include_once 'php/config.php';
                $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
                $sql = mysqli_query($conn, "SELECT  * FROM users WHERE unique_id = {$user_id}");
                if (mysqli_num_rows($sql) > 0) {
                    $row = mysqli_fetch_assoc($sql);
                }
            ?>
            <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
            <img src="img/<?php echo $row['image'] ?>" alt="scar perfil">
            <div class="details">
                <span><?php echo $row['fName']. " " . $row['lName']?></span>
                <p><?php echo $row['status'] ?></p>
            </div>
        </header>
        <div class="chat-box">

        </div>
        <form action="#" class="typing-area">
            <input type="text" name="outgoing_id" value="<?php echo $_SESSION['unique_id']; ?>" hidden>
            <input type="text" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
            <input type="text" name="message" class="input-field" placeholder="Digite uma mensagem" autocomplete="off">
            <button><i class="fab fa-telegram-plane"></i></button>
        </form>
        </section>
    </div>

    <script src="js/chat.js"></script>

</body>
</html>