<?php
while($row = mysqli_fetch_assoc($sql)) {
    $sql2 = "SELECT * FROM messages WHERE (incoming_msg_id = {$row['unique_id']} 
    OR outgoing_msg_id = {$row['unique_id']}) AND (outgoing_msg_id = '{$outgoing_id}' 
    OR incoming_msg_id = '{$outgoing_id}') ORDER BY msg_id DESC LIMIT 1";

    $query2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_assoc($query2);
    if (mysqli_num_rows($query2) > 0) {
        $result = base64_decode($row2['msg']);
        ($outgoing_id == $row2['outgoing_msg_id']) ?  $you = "Você: " : $you = "";
    } else {
        $result = "Envie uma mensagem";
    }

    //Limitando o tamanho de caracteres
    (strlen($result) > 22) ? $msg = substr($result, 0, 22)."..." : $msg = $result;
    

    //Verificação online offline
    ($row['status'] == "Offline agora") ? $offline = "offline" : $offline = "";

    $output .= '<a href="chat.php?user_id='.$row['unique_id'].'">
                <div class="content">
                <img src="img/'. $row['image'] .'"alt="Perfil">
                <div class="details">
                    <span>'. $row['fName']. " " . $row['lName'] .'</span>
                    <p>'. $msg .'</p>
                </div>
                </div>
                <div class="status-dot '. $offline .'"><i class="fas fa-circle"></i></div>
                </a>';
} 