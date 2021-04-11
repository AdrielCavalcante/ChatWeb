<?php
    session_start();
    include_once "config.php";
    $fName = mysqli_real_escape_string($conn, $_POST['fName']);
    $lName = mysqli_real_escape_string($conn, $_POST['lName']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if (!empty($fName) && !empty($lName) && !empty($email) && !empty($password)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");
            if (mysqli_num_rows($sql) > 0) {
                echo "Esse $email Já existe!";
            } else {
                if (isset($_FILES['image'])) {
                    $img_name = $_FILES['image']['name']; //Pegando o nome da imagem
                    $img_type = $_FILES['image']['type']; //Pegando o tipo da imagem
                    $tmp_name = $_FILES['image']['tmp_name']; //Esse é o nome temporário do arquivo salvo

                    $img_explode = explode('.', $img_name);
                    $img_ext = end($img_explode);

                    $extensions = ['png', 'jpg', 'jpeg']; //Válidas
                    if (in_array($img_ext,$extensions) === true) {
                        $time = time();
                        $new_img_name = $time.$img_name;
                        if(move_uploaded_file($tmp_name, "../img/".$new_img_name)){
                            $status = "Online agora";
                            $random_id = rand(time(), 10000000);

                            $sql2 = mysqli_query($conn,"INSERT INTO users (unique_id, fname, lname, email, password, image, status) VALUES ({$random_id},'{$fName}','{$lName}','{$email}','{$password}','{$new_img_name}','{$status}')");

                            if ($sql2) {
                                $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                                if (mysqli_num_rows($sql3) > 0) {
                                    $row = mysqli_fetch_assoc($sql3);
                                    $_SESSION['unique_id'] = $row['unique_id'];
                                    echo "Sucesso";
                                }
                            } else {
                                echo "Algo deu errado";
                            }
                        }
                    } else {
                        echo "Por favor, selecione uma imagem jpeg, jpg ou png!";
                    }
                } else {
                    echo "Por favor, selecione uma imagem!";
                }
            }
        }else{
            echo "$email não é um email válido!";
        }
        
    }else{
        echo "Todos os dados devem ser registrados!";
    }

?>