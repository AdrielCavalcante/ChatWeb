<?php
    session_start();
    if (isset($_SESSION['unique_id'])) {
        include_once "config.php";
        $logout_id = mysqli_real_escape_string($conn, $_GET['logout_id']);
        if (isset($logout_id)) {
            $status = "Offline agora";
            $sql = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id = {$logout_id}");
            if ($sql) {
                session_unset();
                session_destroy();
                header("location: ../login.php");
            }
        } else {

        }
    } else {
        header("location: ../login.php");
    }